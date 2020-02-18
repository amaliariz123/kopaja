<!--begin::Modal-->
<div class="modal fade" id="dev-create-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data Anggota Pengembang</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="developer-store" method="post" enctype="multipart/form-data" files=true>
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
						<div class="col-md-9">
							<div class="fileinput fileinput-new" data-provides="fileinput">
						  <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
						    <img src="{{url('images/no-image.png')}}"  alt="" />
						  </div>
						  <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;"></div>
						  <div>
						    <span class="btn btn-outline-warning btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
						    <a href="#" class="btn btn-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
						  </div>
						</div>
						</div>
					</div>
					</fieldset>
					<br>
					<div class="col-md-12 text-right">
						<button type="submit" class="btn btn-warning">Simpan</button>
						<button type="reset" class="btn btn-outline-warning">Reset</button>				
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

		$('#developer-store').on('submit', function(e){
			e.preventDefault();
			$.ajax({				
				'type' : 'POST',
				'url' : "{{url('/tim_pengembang/store')}}",
				'data' : new FormData(this),
				'processData' : false,
				'contentType' : false,
				'dataType' : 'JSON',
				'success' : function(data){
					if(data.success)
					{
						$('#dev-create-modal').modal('hide');
						toastr.success('Success!', 'Success', {timeOut:6000});
						thisTable.ajax.reload();
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