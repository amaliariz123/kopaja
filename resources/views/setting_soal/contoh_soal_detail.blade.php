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
						<label for="name" class="form-control-label">Tax name</label>
						<input type="text" name="detail_tax_name" class="form-control" value="" disabled>
					</div>
					<div class="form-group">
						<label for="title" class="form-control-label">Title</label>
						<input type="text" class="form-control" name="detail_title" value="" disabled>
					</div>
					<div class="form-group">
						<label for="question_text" class="form-control-label">Question</label>
						<textarea class="form-control" name="detail_question_text" value="" disabled></textarea>
					</div>
					<div class="form-group">
						<label for="question_image" class="form-control-label">Image</label>
						<div class="fileinput fileinput-new input-group" data-provides="fileinput">
						  <div class="form-control" data-trigger="fileinput">
						    <span class="fileinput-filename"></span>
						  </div>
						  <span class="input-group-append">
						    <span class="input-group-text fileinput-exists" data-dismiss="fileinput">
						      Remove
						    </span>
						    <span class="input-group-text btn-file">
						      <span class="fileinput-new">Select image</span>
						      <span class="fileinput-exists">Change</span>
						      <input type="file" name="detail_question_image" accept="image/jpg,image/jpeg,image/png" >
						    </span>
						  </span>
						</div>
					</div>
					<div class="form-group">
						<label for="answer_text" class="form-control-label">Answer</label>
						<textarea class="form-control" name="detail_answer_text" value="" disabled></textarea>
					</div>
					<div class="form-group">
						<label for="answer_image" class="form-control-label">Image</label>
						<div class="fileinput fileinput-new input-group" data-provides="fileinput">
						  <div class="form-control" data-trigger="fileinput">
						    <span class="fileinput-filename"></span>
						  </div>
						  <span class="input-group-append">
						    <span class="input-group-text fileinput-exists" data-dismiss="fileinput">
						      Remove
						    </span>
						    <span class="input-group-text btn-file">
						      <span class="fileinput-new">Select image</span>
						      <span class="fileinput-exists">Change</span>
						      <input type="file" name="detail_answer_image" accept="image/jpg,image/jpeg,image/png" >
						    </span>
						  </span>
						</div>
					</div>
					</fieldset>
					<br>
					<div class="col-md-12 text-right">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!--end::Modal-->