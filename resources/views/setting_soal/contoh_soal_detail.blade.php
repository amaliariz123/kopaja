<!--begin::Modal-->
<div class="modal fade" id="contoh-detail-modal"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Detail Contoh Soal</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="contoh-detail" method="get" enctype="multipart/form-data" files=true>
					<fieldset class="content-group">
					<div class="form-group">
						<label for="name" class="form-control-label">Nama Pajak</label>
						<input type="hidden" name="detail_id" class="form-control" value="">
						<input type="text" name="detail_tax_name" class="form-control" value="" disabled>
					</div>
					<div class="form-group">
						<label for="title" class="form-control-label">Judul</label>
						<input type="text" class="form-control" name="detail_title" value="" disabled>
					</div>
					<div class="form-group">
						<label for="question_text" class="form-control-label">Pertanyaan</label>
						<textarea class="form-control" name="detail_question_text" value="" disabled></textarea>
					</div>
					<div class="form-group">
						<label for="question_image" class="form-control-label">Gambar untuk pertanyaan</label>
						<div id="detail_question_image">
						</div>
					</div>
					<div class="form-group">
						<label for="answer_text" class="form-control-label">Penjelasan</label>
						<textarea class="form-control" name="detail_answer_text" value="" disabled></textarea>
					</div>
					<div class="form-group">
						<label for="answer_image" class="form-control-label">Gambar untuk penjelasan</label>
						<div id="detail_answer_image">
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