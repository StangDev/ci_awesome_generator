<!-- MAIN CONTENT-->
<div class="main-content">
  <div class="section__content section__content--p30">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">
          Database
        </div>
        <div class="card-body">
        <div class="table-data__tool float-right">
              <div class="table-data__tool-right">
                <button type="button" class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal"
                  data-target="#AddItem" onclick="clearFrom()">
                  <i class="zmdi zmdi-plus"></i>add item
                </button>

              </div>
            </div>
              <table class="table table-borderless table-striped table-earning" id="myTable">
                <thead>
                  <tr>
                    <th>modules</th>
                    <th>table</th>
                    <th>active</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
        </div>
        <div class="card-footer">
          <button type="button" class="btn btn-outline-primary float-right" onclick="gen()">generate</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END PAGE CONTAINER-->
<!-- modal medium -->
<div class="modal fade" id="AddItem" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mediumModalLabel">Add Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="company" class=" form-control-label">Name modules</label>
          <input type="text" id="item-modules" class="form-control">
        </div>
        <div class="form-group">
          <label for="company" class=" form-control-label">Name Table Database</label>
          <input type="text" id="item-table" class="form-control">
        </div>
        <div class="form-group">
          <label for="company" class=" form-control-label">is Active</label>
          <label class="au-checkbox">
            <input type="checkbox" id="item-active">
            <span class="au-checkmark"></span>
          </label>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="addRow()">Confirm</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal medium -->

<script>
  $(document).ready(function () {
    $('#myTable').DataTable({
      "columnDefs": [ 
        {
                "targets": 2,
                "data": "id",
                "render": function (data, type, row, meta) {
                  
                    if (row[2]) {
                        return '<span class="status--process">Yes</span>';    
                    } else {
                        return '<span class="status--denied">No</span>';   
                    }
                    
                    
                }
        },
        {
                "targets": -1,
                "data": "id",
                "render": function (data, type, row, meta) {
                    var tmp ="'";
                    return '<div class="table-data-feature"><button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" onclick="goEdit('+tmp+row[3]+tmp+')">  <i class="zmdi zmdi-edit"></i></button><button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" onclick="goDelete('+tmp+row[3]+tmp+')"><i class="zmdi zmdi-delete"></i></div>';
                    
                }
        },
      ],
    "language": {
            "emptyTable": "ไม่พบข้อมูล ",
            "zeroRecords": "ไม่พบข้อมูลตามเงื่อนไขที่กำหนด"
        },
        "paging": true

    });
  });

function goDelete(id) {
    alert("Delete: "+id);
}
function goEdit(id) {
    alert("Edit: "+id);
}
  function clearFrom() {
    $('#item-modules').val('');
    $('#item-table').val('');
    $("#item-active").prop("checked", false);
  }

  function addRow() {
    var item_modules = $('#item-modules').val();
    var item_table = $('#item-table').val();
    var item_active = ($('#item-active').is(":checked")) ? true : false;
  
     var successFunc = function (result) {
         console.log("result",result);
         
        var table = $('#myTable').DataTable();
            table.row.add([
                result.modules,
                result.table,
                result.active,
                result.id
            ]).draw(false);
        };
    AjaxPostRequest('<?=base_url()?>generate/AddDatabase', {"modules":item_modules,"table":item_table,"active":item_active}, successFunc, AlertDanger);
  }

  function gen() {
    var table = $('#myTable').DataTable();
    var data = table.rows().data().toArray();
    console.log("data",data);
    var json = JSON.stringify(data);
    console.log("json",json);
    
    $.post("/generate/gen",json, function (respone) {
      console.log("respone",respone);
    });
  }
</script>