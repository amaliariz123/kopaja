<!--begin::Modal-->
<div class="modal fade" id="dev-edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Data Anggota Pengembang</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="developer-update" method="post" enctype="multipart/form-data" files=true>
					@method('PUT')
					<fieldset class="content-group">
					<div class="form-group">
						<label for="name" class="form-control-label">Name:</label>
						<input type="hidden" name="show_id" class="form-control" value="" placeholder="">
						<input type="text" class="form-control" name="show_name" value="" placeholder="">
					</div>
					<div class="form-group">
						<label for="email" class="form-control-label">Email:</label>
						<input type="email" class="form-control" name="edit_email" value="" placeholder="">
					</div>
					<div class="form-group">
						<label for="Picture" class="form-control-label">Picture:</label>
						<div class="col-md-9">
							<div class="fileinput fileinput-new" data-provides="fileinput">
							  <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
							    <img id="edit_picture" src=""  alt="" name="picture"/>
							  </div>
							  <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;"></div>
							  <div>
							    <span class="btn btn-outline-warning btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
							    <a href="#" class="btn btn-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
							  </div>
							</div>
						</div>
					</div>
					</fieldset>
					<br>
					<div class="col-md-12 text-right">
						<button type="submit" class="btn btn-primary">Perbarui</button>
						<button type="reset" class="btn btn-outline-primary">Reset</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>