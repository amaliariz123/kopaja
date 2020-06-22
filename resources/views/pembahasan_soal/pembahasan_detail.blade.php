<!--begin::Modal-->
<div class="modal fade" id="pembahasan-detail-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Detail Pembahasan Soal</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="pembahasan-detail" method="GET" enctype="multipart/form-data" file=true>
					<fieldset class="content-group">
					<div class="form-group">
						<label for="question" class="form-control-label">Soal</label>
						<textarea type="text" class="form-control" name="question" rows="5" value="" disabled></textarea>
					</div>
					<div class="form-group">
						<label for="answer" class="form-control-label">Penjelasan</label>
						<textarea type="text" class="form-control" name="solution" rows="10" value="" disabled></textarea>
					</div>
					<div class="form-group">
						<label for="image" class="form-control-label">Gambar</label><br>
						<div id="show_img">
						</div>
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