<!--begin::Modal-->
<div class="modal fade" id="tax-edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ubah Data Pajak</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="tax-update" method="POST" enctype="multipart/form-data" file=true>
					@csrf
					<fieldset class="content-group">
					<div class="form-group">
						<label for="name" class="form-control-label">Nama<span class="text-danger">*</span></label>
						<input type="hidden" name="edit_id" class="form-control" required>
						<input type="text" class="form-control" name="edit_name" value="" required>
					</div>
					<div class="form-group">
						<label for="description" class="form-control-label">Deskripsi<span class="text-danger">*</span></label>
						<textarea type="text" class="form-control" name="edit_description" rows="6" value="" required></textarea>
					</div>
					<div class="form-group">
						<label for="tax_type" class="form-control-label">Tipe Pajak<span class="text-danger">*</span></label>
						<div class="m-radio-list">
							<label class="m-radio m-radio--brand">
								<input type="radio" name="edit_tax_type" value="Pajak Pusat" required> Pajak Pusat
								<span></span>
							</label>
							<label class="m-radio m-radio--brand">
								<input type="radio" name="edit_tax_type" value="Pajak Daerah"> Pajak Daerah
								<span></span>
							</label>
						</div>
					</div>
					<div class="form-group">
						<label for="module" class="form-control-label">Materi<span class="text-danger">*</span></label><br>
						<div class="fileinput fileinput-new" data-provides="fileinput">
                            <span class="btn btn-sm btn-info btn-file">
                                <span class="fileinput-new"> Pilih berkas </span>
                                <span class="fileinput-exists"> Ubah </span>
                                <input type="file" name="edit_module" accept="application/pdf" required> </span>
                            <span class="fileinput-filename"> </span> &nbsp;
                            <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"> </a>
                        </div>
						<small id="emailHelp" class="form-text text-muted">Ukuran maksimal 2 MB. (format *pdf)</small>
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

		$('#tax-update').on('submit', function(e){
			e.preventDefault();

			$.ajax({
				'type' : 'post',
				'url' : "{{url('/pajak/update')}}"+"/"+$('input[name=edit_id]').val(),
				'data' : new FormData(this),
				'processData' : false,
				'contentType' : false,
				'dataType' : 'JSON',
				'success' : function(data){
					if(data.success)
					{
						$('#tax-edit-modal').modal('hide');
						toastr.success('Data berhasil diperbarui!', 'Success', {timeOut:6000});
						tabelPajak.ajax.reload();
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