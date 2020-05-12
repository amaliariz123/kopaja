<!--begin::Modal-->
<div class="modal fade" id="generate-kode-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Generate Kode Premium</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="generate-kode" action="{{url('/generate_kode_premium')}}" method="post">
					@csrf
					<fieldset class="content-group">
					<div class="form-group">
						<label for="Jumlah kode" class="form-control-label">Jumlah kode<span class="text-danger">*</span></label><br>
						<select  class="form-control m-input" id="exampleSelect1" name="jumlah_kode" required>
							<option value="10">10</option>
							<option value="25">25</option>
							<option value="50">50</option>
						</select>
					</div>
					</fieldset>
					<br>
					<br>
					<div class="col-md-12 text-right">
						<button type="reset" class="btn btn-outline-primary" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary">Buat</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!--end::Modal-->

