<!--begin::Modal-->
<div class="modal fade" id="generate-kode-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Generate Kode Premium</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="generate-kode" method="post" enctype="multipart/form-data" files=true>
					@csrf
					<fieldset class="content-group">
					<div class="form-group">
						<label for="name" class="form-control-label">Nama<span class="text-danger">*</span></label>
						<input type="text" class="form-control" name="name" placeholder="..." required>
					</div>
					<div class="form-group">
						<label for="email" class="form-control-label">Email<span class="text-danger">*</span></label>
						<input type="email" class="form-control" name="email" required placeholder="...">
					</div>
					</fieldset>
					<br>
					<div class="col-md-12 text-right">
						<button type="reset" class="btn btn-outline-primary" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!--end::Modal-->