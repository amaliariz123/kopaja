<!--begin::Modal-->
<div class="modal fade" id="generate-kode-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Kode Premium</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="generate-kode" method="post">
					@csrf
					<fieldset class="content-group">
					<div class="form-group">
						<label for="Jumlah kode" class="form-control-label">Jumlah kode<span class="text-danger">*</span></label><br>
						<input type="number" class="form-control" name="jumlah_kode" min="1" max="10" placeholder="jumlah kode yang akan dibuat" required>
						<small id="emailHelp" class="form-text text-muted">Batas  jumlah maksimal kode yang dibuat yaitu 10.</small>
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

@push('custom-script')
<script type="text/javascript">
	$(document).ready(function(){
		$.ajaxSetup({
        	headers: {
            	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        	}
		});

		$('#generate-kode').on('submit', function(e){
			e.preventDefault();
			$.ajax({				
				'type' : 'POST',
				'url' : "{{url('/generate_kode_premium')}}",
				'data' : new FormData(this),
				'processData' : false,
				'contentType' : false,
				'dataType' : 'JSON',
				'success' : function(data){
					if(data.success)
					{
						$('#generate-kode-modal').modal('hide');
						toastr.success('Kode berhasil dibuat!', 'Success', {timeOut:6000});
						code_table.ajax.reload();
						//location.reload();
					} else {
						//console.log(data);
						for(var count=0; count < data.errors.length; count++)
						{
							toastr.error(data.errors[count], 'Error', {timeOut:6000});
						}
					}
				}
			})
		})
	})
</script>
@endpush


