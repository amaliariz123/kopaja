<!--begin::Modal-->
<div class="modal fade" id="dev-detail-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Detail Data Anggota Pengembang</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="developer-detail" method="get" enctype="multipart/form-data" files=true>
					<fieldset class="content-group">
					<div class="form-group">
						<label for="name" class="form-control-label">Nama</label>
						<input type="hidden" name="show_id" class="form-control" value="">
						<input type="text" class="form-control" name="show_name" value="" disabled>
					</div>
					<div class="form-group">
						<label for="email" class="form-control-label">Email</label>
						<input type="email" class="form-control" name="show_email" value="" disabled>
					</div>
					<div class="form-group">
						<label for="Picture" class="form-control-label">Gambar</label>
						<div id="show_picture"></div>
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