<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
<div class="card mt-5">
  <div class="card-header">
    Welcome to Generate Project
  </div>
  <div class="card-body">
    <form>
      <div class="form-group row">
        <label for="nameProject" class="col-sm-2 col-form-label">Modules :</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nameProject" placeholder="">

			</div>
      </div>
      <div class="form-group row">
        <label for="nameProject" class="col-sm-2 col-form-label">Database :</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputSelectDatabase" placeholder="">

			</div>
      </div>
      <div class="table-data__tool float-right">
        <div class="table-data__tool-right">
          <button type="button" class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#AddItem" onclick="clearFrom()">
            <i class="zmdi zmdi-plus"></i>add item
          </button>

        </div>
      </div>
      <div class="table-responsive table--no-card m-b-30">
        <table class="table table-borderless table-striped table-earning" id="myTable">
          <thead>
            <tr>
              <th>name</th>
              <th>type</th>
              <th>size</th>
              <th>description</th>
              <th>PK</th>
              <th></th>
            </tr>
          </thead>
          <tbody>

          </tbody>
        </table>
      </div>
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
                 <label for="company" class=" form-control-label">Name</label>
                 <input type="text" id="item-name"  class="form-control">
               </div>
               <div class="form-group">
                  <label for="company" class=" form-control-label">Type</label>
                  <input type="text" id="item-type"  class="form-control">
                </div>
                <div class="form-group">
                   <label for="company" class=" form-control-label">Size</label>
                   <input type="number" id="item-size"  class="form-control">
                 </div>
                 <div class="form-group">
                    <label for="company" class=" form-control-label">Description</label>
                    <input type="text" id="item-des"  class="form-control">
                </div>
                <div class="form-group">
                   <label for="company" class=" form-control-label">is PK</label>
                     <label class="au-checkbox">
                        <input type="checkbox" id="item-pk" >
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
  $(document).ready(function() {

  });
  function clearFrom() {
    $('#item-name').val('');
    $('#item-type').val('');
    $('#item-size').val('');
    $('#item-des').val('');
    $("#item-pk").prop("checked", false);
  }
function addRow() {
  var item_name = $('#item-name').val();
  var item_type = $('#item-type').val();
  var item_size = $('#item-size').val();
  var item_des  = $('#item-des').val();
  var item_pk   = ($('#item-pk').is(":checked")) ? 'Yes' :'';

  var td = '<tr class="tr-shadow">';
  td+= '<td>'+item_name+'</td>';
  td+= '<td>'+item_type+'</td>';
  td+= '<td>'+item_size+'</td>';
  td+= '<td>'+item_des+'</td>';
  td+= '<td align="center"><span class="status--process">'+item_pk+'</span></td>';
  td+= '<td><div class="table-data-feature"><button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">  <i class="zmdi zmdi-edit"></i></button><button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="zmdi zmdi-delete"></i></div></td>';
  td+= '</tr>';
  $('#myTable > tbody:last-child').append(td);
}
  function gen() {
    var nProject = $('#nameProject').val();
    var nPlugin = $('#inputSelectPlugin').val();
    var nDatabase = $('#inputSelectDatabase').val();
    $.post("<?=base_url()?>/welcome/generate", {
      nProject: nProject,
      nPlugin: nPlugin,
      nDatabase: nDatabase
    }, function(data) {
      console.log(data);
    });
  }
</script>
