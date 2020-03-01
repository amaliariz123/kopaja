<!--begin::Modal-->
<div class="modal fade" id="help-create-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Pertanyaan Bantuan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="help-store" method="post" enctype="multipart/form-data">
					<fieldset class="content-group">
					<div class="form-group">
						<label for="question" class="form-control-label">Question:</label>
						<input type="text" class="form-control" name="question" placeholder="Apa itu KOPAJA?">
					</div>
					<div class="form-group">
						<label for="answer" class="form-control-label">Answer:</label>
						<textarea type="text" class="form-control" name="answer" rows="2" placeholder="KOPAJA singkatan dari Kompas Pajak Ajaib..."></textarea>
					</div>
					</fieldset>
					<br>
					<div class="col-md-12 text-right">
						<button type="submit" class="btn btn-primary">Simpan</button>
						<button type="reset" class="btn btn-outline-primary">Reset</button>				
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!--end::Modal-->


@push('custom-script')
<script>
	$(document).ready(function(){
		$.ajaxSetup({
        	headers: {
            	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        	}
		});

		$('#help-store').on('submit', function(e){
			e.preventDefault();
			$.ajax({				
				'type' : 'POST',
				'url' : "{{url('/bantuan_aplikasi/store')}}",
				'data' : new FormData(this),
				'processData' : false,
				'contentType' : false,
				'dataType' : 'JSON',
				'success' : function(data){
					if(data.success)
					{
						$('#help-create-modal').modal('hide');
						toastr.success('Success add new data!', 'Success', {timeOut:6000});
						helpTable.ajax.reload();
					} else {
						console.log(data);
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