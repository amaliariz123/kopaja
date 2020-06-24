<!--begin::Modal-->
<div class="modal fade" id="edit_quiz" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Data Kuis</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="kuis-update" method="POST" action="" enctype="multipart/form-data" file=true>
					@csrf
					<fieldset class="content-group">
					<div class="form-group">
						<label for="name" class="form-control-label">Judul<span class="text-danger">*</span></label>
						<input type="text" class="form-control" name="title" value="" required>
						<input type="hidden" name="id" value="">
					</div>
					<div class="form-group">
						<label for="description" class="form-control-label">Deskripsi<span class="text-danger">*</span></label>
						<textarea type="text" class="form-control" name="description" rows="5"  required>  </textarea>
					</div>
					<div class="form-group">
						<label for="level" class="form-control-label">Level<span class="text-danger">*</span></label>
						<div class="m-radio-list">
							<label class="m-radio m-radio--brand">
								<input type="radio" name="level" value="mudah" required>Mudah
								<span></span>
							</label>
							<label class="m-radio m-radio--brand">
								<input type="radio" name="level" value="medium">Medium
								<span></span>
							</label>
							<label class="m-radio m-radio--brand">
								<input type="radio" name="level" value="sulit">Sulit
								<span></span>
							</label>
						</div>
					</div>
					<div class="form-group">
						<label for="duration" class="form-control-label">Durasi<span class="text-danger">*</span></label>
						<input type="number" id="duration" min="1" class="form-control" name="duration" value="" required>
						<small id="emailHelp" class="form-text text-muted">Durasi dalam menit</small>
					</div>
					<div class="form-group">
						<label for="image" class="form-control-label">Gambar</label><br>
						<div class="fileinput fileinput-new" data-provides="fileinput">
                            <div id="show_image" class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                            <div>
                                <span class="btn btn-info btn-sm btn-file">
                                    <span class="fileinput-new"> Select image </span>
                                    <span class="fileinput-exists"> Change </span>
                                    <input type="file" name="image" accept="image/jpg,image/jpeg,image/png">
                                </span>
                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                            </div>
                        </div>
						<small id="emailHelp" class="form-text text-muted">Ukuran maksimal 2 MB. (*jpg, *png, *jpeg)</small>
					</div>
					</fieldset>
					<br>
					<div class="col-md-12 text-right">
						<button type="reset" class="btn btn-outline-primary" data-dismiss="modal">Batal</button>
						<button type="submit" id="submit" class="btn btn-primary">Simpan</button>
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

		$('#kuis-update').on('submit', function(e){
			e.preventDefault();

			$.ajax({
				'type' : 'post',
				'url' : "{{url('/kuis/edit/update')}}"+"/"+$('input[name=id]').val(),
				'data' : new FormData(this),
				'processData' : false,
				'contentType' : false,
				'dataType' : 'JSON',
				'success' : function(data){
					if(data.success)
					{
						$('#edit_quiz').modal('hide');
						toastr.success('Data berhasil diperbarui!', 'Success', {timeOut:6000});
						tabelKuis.ajax.reload();
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