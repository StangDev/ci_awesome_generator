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
                  data-target="#AddItem" onclick="goCreate()">
                  <i class="zmdi zmdi-plus"></i>add item
                </button>

              </div>
            </div>
              <table class="table table-borderless table-striped table-earning" id="myTable" align="center">
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
        <input type="text" id="item-id" class="form-control" hidden>
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
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="Generate_PutUpdate()">Confirm</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal medium -->
<!-- modal small -->
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <p>
          คุนต้องการลบหรือไม่?
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Confirm</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal small -->

<script src="<?=base_url()?>/assets/js/generate.js"></script>
<script>
  $(document).ready(function () {
    Generate_InitiateAjaxLayout();
  });
</script>
