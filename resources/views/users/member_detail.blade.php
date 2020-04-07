<!--begin::Modal-->
<div class="modal fade" id="member-detail-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Detail Data Member</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="member-detail" method="GET">
					@method('PUT')
					<fieldset class="content-group">
					<div class="form-group">
						<label for="name" class="form-control-label">Nama</label>
						<input type="hidden" name="detail_id" class="form-control" value="">
						<input type="text" class="form-control" name="detail_name" value="" disabled>
					</div>
					<div class="form-group">
						<label for="institution" class="form-control-label">Instansi</label>
						<input type="text" name="detail_institution" class="form-control" value="" disabled>
					</div>
					<div class="form-group">
						<label for="age" class="form-control-label">Usia</label>
						<input type="text" name="detail_age" class="form-control" value="" disabled>
					</div>
					<div class="form-group">
						<label for="status_member" class="form-control-label">Status Member</label>
						<input type="text" name="detail_status_member" class="form-control" value="" disabled>
					</div>
					<div class="form-group">
						<label for="province" class="form-control-label">Provinsi</label>
						<input type="text" name="detail_province" class="form-control" value="" disabled>
					</div>
					<div class="form-group">
						<label for="city" class="form-control-label">Kota</label>
						<input type="text" name="detail_city" class="form-control" value="" disabled>
					</div>
					<div class="form-group">
						<label for="premium_code" class="form-control-label">Kode Premium</label>
						<input type="text" name="detail_premium_code" class="form-control" value="" disabled>
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