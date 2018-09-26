var Generate_editMode = 'CREATE';

function Generate_InitiateAjaxLayout() {
  var table = $('#myTable').DataTable({
    "processing": true,
    "serverSide": false,
    "ajax": {
      "url": "/generate/getDatabase",
      "type": "GET",
      "dataSrc": ""
    },
    "columns": [{
        "data": "modules"
      },
      {
        "data": "table_name"
      },
      {
        "data": "active"
      },
      {
        "data": "id"
      }
    ],
    "columnDefs": [{
        "targets": 2,
        "data": "active",
        "render": function(data, type, row, meta) {
          if (data == 1) {
            return '<span class="status--process">Yes</span>';
          } else {
            return '<span class="status--denied">No</span>';
          }
        }
      },
      {
        "targets": -1,
        "data": "id",
        "render": function(data, type, row, meta) {
          var tmp = "'";
          return '<div class="table-data-feature"><button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" onclick="goEdit(' + tmp + data + tmp + ')">  <i class="zmdi zmdi-edit"></i></button><button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" onclick="goDelete(' + tmp + data + tmp + ')"><i class="zmdi zmdi-delete"></i><button class="item" onclick="goDetail(' + tmp + data + tmp + ')" data-toggle="tooltip" data-placement="top" title="" data-original-title="More"> <i class="zmdi zmdi-more"></i> </button></div>';

        }
      },
    ],
    "language": {
      "emptyTable": "ไม่พบข้อมูล ",
      "zeroRecords": "ไม่พบข้อมูลตามเงื่อนไขที่กำหนด"
    },
    "paging": true

  });

}

function Generate_ClearForm() {
  $('#item-id').val('');
  $('#item-modules').val('');
  $('#item-table').val('');
  $("#item-active").prop("checked", false);
}
function Generate_FeedDataToForm(data) {
  $('#item-id').val(data.id);
  $('#item-modules').val(data.modules);
  $('#item-table').val(data.table_name);
  $("#item-active").prop("checked", (data.active>0) ? true : false);
}
function Generate_GetFromForm() {
    var GenerateObject = new Object();
    GenerateObject.id = $('#item-id').val();
    GenerateObject.modules = $('#item-modules').val();
    GenerateObject.table = $('#item-table').val();
    GenerateObject.active = ($('#item-active').is(":checked")) ? true : false;

    return GenerateObject;
}
function Generate_RefreshTable() {
    $('#myTable').DataTable().ajax.reload();
}
function Generate_PutUpdate() {
  var data = Generate_GetFromForm();

  //Update Mode
  if (Generate_editMode == "UPDATE") {
      var successFunc = function (result) {
          AlertSuccess("ข้อมูลได้ถูกแก้ไขในระบบแล้ว");
          Generate_RefreshTable();
      };
      AjaxPutRequest('/generate/updateDatabase/', data, successFunc, AlertDanger);
  }
  // Create mode
  else {

      var successFunc = function (result) {
          AlertSuccess("ข้อมูลได้ถูกเพิ่มในระบบแล้ว");
          Generate_RefreshTable();
      };
      AjaxPostRequest('/generate/insertDatabase', data, successFunc, AlertDanger);
  }


}
function goCreate() {
  Generate_editMode = "CREATE";
  Generate_ClearForm();
}
function goEdit(id) {
  Generate_editMode = "UPDATE";
  Generate_ClearForm();
  $('#AddItem').modal('show');
  var successFunc = function(result) {
    console.log("result",result[0]);
    Generate_FeedDataToForm(result[0]);
  };
  AjaxGetRequest('/generate/getDatabase/'+id, successFunc, AlertDanger);
}
function goDelete(id) {

  var ok = confirm("ต้องการลบ "+id+"!");
  if (ok) {
    var successFunc = function(result) {
      console.log("result",result[0]);
      Generate_RefreshTable();
    };
    AjaxDeleteRequest('/generate/deleteDatabase/', {id:id}, successFunc, AlertDanger)
  }

}
function goDetail(id) {
    window.location.href = 'generate/formgen/'+id;
}
