<!--begin::Modal-->
<div class="modal fade" id="user-role-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ubah Status Pengguna</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="user-role" method="POST" enctype="multipart/form-data">
					 @csrf
					<fieldset class="content-group">
					<div class="form-group">
						<label for="question" class="form-control-label">Nama</label>
						<input type="hidden" name="id" class="form-control" value="">
						<input type="text" class="form-control" name="fullname" value="" disabled>
					</div>
					<div class="form-group">
						<label for="answer" class="form-control-label">Email</label>
						<input type="text" name="email" class="form-control" value="" disabled>
					</div>
					<div class="form-group">
						<label for="answer" class="form-control-label">Status<span class="text-danger">*</span></label>
						<div class="m-radio-list">
							<label class="m-radio m-radio--brand">
								<input type="radio" name="role_edit" value="1">Admin
								<span></span>
							</label>
							<label class="m-radio m-radio--brand">
								<input type="radio" name="role_edit" value="2">User
								<span></span>
							</label>
						</div>
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
<script type="text/javascript">
	$(document).ready(function(){
		$.ajaxSetup({
        	headers: {
            	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        	}
		});
		$('#user-role').on('submit', function(e){
			e.preventDefault();
			$.ajax({				
				'type' : 'POST',
				'url' : "{{url('/user/role/update')}}"+"/"+$("input[name=id]").val(),
				'data' : new FormData(this),
				'processData' : false,
				'contentType' : false,
				'dataType' : 'JSON',
				'success' : function(data){
					if(data.success)
					{
						$('#user-role-modal').modal('hide');
						toastr.success('Data berhasil diperbarui!', 'Success', {timeOut:6000});
						tabel_user.ajax.reload();
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
	})
</script>
@endpush