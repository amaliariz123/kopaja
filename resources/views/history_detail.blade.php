<!--begin::Modal-->
<div class="modal fade" id="testi-detail-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Detail Testimoni Member</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="testi-detail" method="get" enctype="multipart/form-data" files=true>
					<fieldset class="content-group">
					<div class="form-group">
						<label for="testimonial" class="form-control-label">Testimoni</label>
						<textarea class="form-control" name="testimonial" value="" rows="5" disabled></textarea>
					</div>
					<div class="form-group">
						<label for="member_name" class="form-control-label">Nama member</label>
						<input type="text" class="form-control" name="member_name" value="" disabled>
					</div>
					<div class="form-group">
						<label for="institution" class="form-control-label">Instansi</label>
						<input type="text" class="form-control" name="institution" value="" disabled>
					</div>
					<div class="form-group">
						<label for="added_at" class="form-control-label">Ditambahkan pada</label>
						<input type="text" class="form-control" name="created_at" value="" disabled>
					</div>
					<div class="form-group">
						<label for="updated_at" class="form-control-label">Diubah pada</label>
						<input type="text" class="form-control" name="updated_at" value="" disabled>
					</div>
					</fieldset>
					<br>
					<div class="col-md-12 text-right">
						<button type="reset" class="btn btn-outline-primary" data-dismiss="modal">Tutup</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!--end::Modal-->