
<div class="card mt-5">
  <div class="card-header">
  Welcome to ZT Project
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
				<select class="form-control" id="inputSelectDatabase">
					<option value="">เลือก...</option>
					<option value="0">mysql</option>
					<option value="1">Oracle</option>
					<option value="2">microsoft sql</option>
				</select>
			</div>
		</div>
		<div class="form-group row">
			<label for="nameProject" class="col-sm-2 col-form-label">plugin :</label>
			<div class="col-sm-10">
			<select multiple="multiple" class="custom-select" id="inputSelectPlugin"  name="my-select[]" style="width:500px; height:300px;">
				<option value="0">jquery</option>
				<option value="6">jquery-ui</option>
				<option value="1">bootstrap4</option>
				<option value="2">jquery.multi-select</option>
				<option value="3">jquery.datatables</option>
				<option value="4">font fontawesome 5</option>
				<option value="5">form-builder</option>
			</select>
			</div>
		</div>
	</form>
  </div>
  <div class="card-footer">
  <button type="button" class="btn btn-outline-primary float-right" onclick="gen()">generate</button>
  </div>
</div>


<script>
 $( document ).ready(function() {
        $('#inputSelectPlugin').multiSelect();
 });
 function gen() {
	 	var nProject = $('#nameProject').val();
        var nPlugin = $('#inputSelectPlugin').val();
		var nDatabase = $('#inputSelectDatabase').val();
        $.post( "<?=base_url()?>/welcome/generate",{nProject:nProject,nPlugin:nPlugin,nDatabase:nDatabase}, function( data ) {
            console.log(data);
        });
      }
</script>