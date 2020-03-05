<!--begin::Modal-->
<div class="modal fade" id="dev-edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Data Anggota Pengembang</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="developer-update" method="post" enctype="multipart/form-data" files=true>
					@method('PUT')
					<fieldset class="content-group">
					<div class="form-group">
						<label for="name" class="form-control-label">Name<span class="text-danger">*</span></label>
						<input type="hidden" name="edit_id" class="form-control" value="" placeholder="">
						<input type="text" class="form-control" name="edit_name" value="" placeholder="">
					</div>
					<div class="form-group">
						<label for="email" class="form-control-label">Email<span class="text-danger">*</span></label>
						<input type="email" class="form-control" name="edit_email" value="" placeholder="">
					</div>
					<div class="form-group">
						<label for="Picture" class="form-control-label">Picture</label>
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
						      <input type="file" name="edit_picture" accept="image/jpg,image/jpeg,image/png">
						    </span>
						  </span>
						</div>
						<small id="emailHelp" class="form-text text-muted">Maximal size is 2 MB. (*jpg, *png, *jpeg)</small>
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


		$('#developer-update').on('submit', function(e){
			e.preventDefault();

			$.ajax({
				'type' : 'post',
				'url' : "{{url('/tim_pengembang/update')}}"+"/"+$('input[name=edit_id]').val(),
				'data' : new FormData(this),
				'processData' : false,
				'contentType' : false,
				'dataType' : 'JSON',
				'success' : function(data){
					if(data.success)
					{
						$('#dev-edit-modal').modal('hide');
						toastr.success('Success update data!', 'Success', {timeOut:6000});
						//thisTable.ajax.reload();
						location.reload();
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