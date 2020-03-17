<!--begin::Modal-->
<div class="modal fade" id="tax-detail-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Detail Data Pajak</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="tax-detail" method="GET" enctype="multipart/form-data" file=true>
					<fieldset class="content-group">
					<div class="form-group">
						<label for="name" class="form-control-label">Nama</label>
						<input type="text" class="form-control" name="detail_name" value="" disabled>
					</div>
					<div class="form-group">
						<label for="description" class="form-control-label">Deskripsi</label>
						<textarea type="text" class="form-control" name="detail_description" rows="5" value="" disabled></textarea>
					</div>
					<div class="form-group">
						<label for="tax_type" class="form-control-label">Tipe Pajak</label>
						<input type="text" name="detail_tax_type" class="form-control" value="" disabled>
					</div>
					<div class="form-group">
						<label for="module" class="form-control-label">Materi</label><br>
						<input type="text" name="detail_module" class="form-control" value="" disabled>
					</div>
					</fieldset>
					<br>
					<div class="col-md-12 text-right">
						<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Tutup</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!--end::Modal-->