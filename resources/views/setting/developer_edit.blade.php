<!--begin::Modal-->
<div class="modal fade" id="dev-edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Data Anggota Pengembang</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="developer-update" method="post" enctype="multipart/form-data" files=true>
					@csrf
					<fieldset class="content-group">
					<div class="form-group">
						<label for="name" class="form-control-label">Name:</label>
						<input type="text" class="form-control" name="name" placeholder="E.g. Jane Doe">
					</div>
					<div class="form-group">
						<label for="email" class="form-control-label">Email:</label>
						<input type="text" class="form-control" name="email" placeholder="E.g. jane.doe@mail.com">
					</div>
					<div class="form-group">
						<label for="Picture" class="form-control-label">Picture:</label>
						<div class="col-lg-9">
							<input type="file" name="picture" class="file-input-custom" data-show-caption="true" data-show-upload="false" accept="image/*">
						</div>
					</div>
					</fieldset>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Send message</button>
			</div>
		</div>
	</div>
</div>

<!--end::Modal-->