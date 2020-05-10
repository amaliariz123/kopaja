<!--begin::Modal-->
<div class="modal fade" id="dev-edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ubah Data Anggota Pengembang</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="developer-update" method="post" enctype="multipart/form-data" files=true>
					@method('PUT')
					<fieldset class="content-group">
					<div class="form-group">
						<label for="name" class="form-control-label">Nama<span class="text-danger">*</span></label>
						<input type="hidden" name="edit_id" class="form-control" value="">
						<input type="text" class="form-control" name="edit_name" value="">
					</div>
					<div class="form-group">
						<label for="email" class="form-control-label">Email<span class="text-danger">*</span></label>
						<input type="email" class="form-control" name="edit_email" value="">
					</div>
					<div class="form-group">
						<label for="Picture" class="form-control-label">Gambar</label><br>
						<div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                <img src="{{asset('images/blank.png')}}" alt="" /> </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                            <div>
                                <span class="btn btn-info btn-sm btn-file">
                                    <span class="fileinput-new"> Select image </span>
                                    <span class="fileinput-exists"> Change </span>
                                    <input type="file" name="edit_picture" accept="image/jpg,image/jpeg,image/png"> </span>
                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                            </div>
                        </div>
						<small id="emailHelp" class="form-text text-muted">Ukuran maksimal 2 MB. (*jpg, *png, *jpeg)</small>
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
						toastr.success('Data berhasil diperbarui!', 'Success', {timeOut:6000});
						thisTable.ajax.reload();
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