<!--begin::Modal-->
<div class="modal fade" id="history-detail-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Detail Data Member</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="history-detail" method="GET">
					@method('PUT')
					<fieldset class="content-group">
					<div class="form-group">
						<label for="level" class="form-control-label">Level</label>
						<input type="hidden" name="detail_id" class="form-control" value="">
						<input type="text" class="form-control" name="detail_level" value="" disabled>
					</div>
					<div class="form-group">
						<label for="duration" class="form-control-label">Durasi</label>
						<input type="text" name="detail_duration" class="form-control" value="" disabled>
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