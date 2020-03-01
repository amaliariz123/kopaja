<!--begin::Modal-->
<div class="modal fade" id="help-edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Pertanyaan Bantuan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="help-update" method="POST" enctype="multipart/form-data">
					 @csrf
					<fieldset class="content-group">
					<div class="form-group">
						<label for="question" class="form-control-label">Question:</label>
						<input type="hidden" name="edit_id" class="form-control">
						<input type="text" class="form-control" name="edit_question" value="" >
					</div>
					<div class="form-group">
						<label for="answer" class="form-control-label">Answer:</label>
						<textarea type="text" class="form-control" name="edit_answer" value=""></textarea>
					</div>
					</fieldset>
					<br>
					<div class="col-md-12 text-right">
						<button type="submit" class="btn btn-primary">Perbarui</button>
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
						toastr.success('Success update data!', 'Success', {timeOut:6000});
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
	});
</script>
@endpush