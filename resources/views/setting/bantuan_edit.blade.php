<!--begin::Modal-->
<div class="modal fade" id="help-edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ubah Pertanyaan Bantuan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="help-update" method="POST" enctype="multipart/form-data">
					 @csrf
					<fieldset class="content-group">
					<div class="form-group">
						<label for="question" class="form-control-label">Pertanyaan<span class="text-danger">*</span></label>
						<input type="hidden" name="edit_id" class="form-control">
						<input type="text" class="form-control" name="edit_question" value="" >
					</div>
					<div class="form-group">
						<label for="answer" class="form-control-label">Jawaban<span class="text-danger">*</span></label>
						<textarea type="text" rows="8" class="form-control" name="edit_answer" value=""></textarea>
					</div>
					</fieldset>
					<br>
					<div class="col-md-12 text-right">
						<button type="reset" class="btn btn-outline-primary" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary">Perbarui</button>
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

		$('#help-update').on('submit', function(e){
			e.preventDefault();

			$.ajax({
				'type' : 'post',
				'url' : "{{url('/bantuan_aplikasi/update')}}"+"/"+$('input[name=edit_id]').val(),
				'data' : new FormData(this),
				'processData' : false,
				'contentType' : false,
				'dataType' : 'JSON',
				'success' : function(data){
					if(data.success)
					{
						$('#help-edit-modal').modal('hide');
						toastr.success('Data berhasil diperbarui!', 'Success', {timeOut:6000});
						helpTable.ajax.reload();
						//location.reload();
					} else {
						//console.log(data);
						for(let count=0; count < data.errors.length; count++)
						{
							toastr.error(data.errors[count], 'Error', {timeOut:6000});
						}
					}
				}
			})
		})
	});
</script>
@endpush