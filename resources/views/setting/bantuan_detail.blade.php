<!--begin::Modal-->
<div class="modal fade" id="help-detail-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Detail Pertanyaan Bantuan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="help-detail" method="get" enctype="multipart/form-data" files=true>
					@method('PUT')
					<fieldset class="content-group">
					<div class="form-group">
						<label for="question" class="form-control-label">Question</label>
						<input type="hidden" name="show_id" class="form-control" value="" placeholder="">
						<input type="text" class="form-control" name="show_question" value="" disabled>
					</div>
					<div class="form-group">
						<label for="answer" class="form-control-label">Answer</label>
						<textarea type="text" class="form-control" name="show_answer" rows="4" value="" disabled></textarea>
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