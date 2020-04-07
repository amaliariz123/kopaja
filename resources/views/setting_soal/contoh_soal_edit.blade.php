<!--begin::Modal-->
<div class="modal fade" id="edit_modal"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ubah Contoh Soal</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="contoh-update" method="post" enctype="multipart/form-data" files=true>
					@csrf
					<fieldset class="content-group">
					<div class="form-group">
						<input type="hidden" name="edit_id" class="form-control">
						<label for="name" class="form-control-label">Nama pajak<span class="text-danger">*</span></label>
						<br>
						<select class="form-control m-select2"  id="m_select2_edit_modal" name="edit_id_tax">
							<option value="">Pilih..</option>
							@foreach($tax as $key => $value)
							<option value="{{$key}}" name="{{$key}}">{{$value}}</option>
							@endforeach
						</select>
						<input type="hidden" name="tax_name" id="hiddenTaxName" value="">
					</div>
					<div class="form-group">
						<label for="title" class="form-control-label">Judul<span class="text-danger">*</span></label>
						<input type="text" class="form-control" name="edit_title" value="">
					</div>
					<div class="form-group">
						<label for="question_text" class="form-control-label">Pertanyaan<span class="text-danger">*</span></label>
						<textarea class="form-control" name="edit_question_text" value=""></textarea>
					</div>
					<div class="form-group">
						<label for="question_image" class="form-control-label">Gambar <small class="form-text text-muted">Opsional. Untuk melengkapi pertanyaan</small></label>
						<div class="fileinput fileinput-new input-group" data-provides="fileinput">
						  <div class="form-control" data-trigger="fileinput">
						    <span class="fileinput-filename"></span>
						  </div>
						  <span class="input-group-append">
						    <span class="input-group-text fileinput-exists" data-dismiss="fileinput">
						      Hapus
						    </span>
						    <span class="input-group-text btn-file">
						      <span class="fileinput-new">Pilih berkas</span>
						      <span class="fileinput-exists">Ubah</span>
						      <input type="file" name="edit_question_image" accept="image/jpg,image/jpeg,image/png" >
						    </span>
						  </span>
						</div>
						<small id="emailHelp" class="form-text text-muted">Ukuran maksimal 2 MB. (*jpg, *png, *jpeg)</small>
					</div>
					<div class="form-group">
						<label for="answer_text" class="form-control-label">Penjelasan</label>
						<textarea class="form-control" name="edit_answer_text" value=""></textarea>
					</div>
					<div class="form-group">
						<label for="answer_image" class="form-control-label">Gambar <small class="form-text text-muted">Opsional. Untuk melengkapi penjelasan</small></label>
						<div class="fileinput fileinput-new input-group" data-provides="fileinput">
						  <div class="form-control" data-trigger="fileinput">
						    <span class="fileinput-filename"></span>
						  </div>
						  <span class="input-group-append">
						    <span class="input-group-text fileinput-exists" data-dismiss="fileinput">
						      Hapus
						    </span>
						    <span class="input-group-text btn-file">
						      <span class="fileinput-new">Pilih berkas</span>
						      <span class="fileinput-exists">Ubah</span>
						      <input type="file" name="edit_answer_image" accept="image/jpg,image/jpeg,image/png" >
						    </span>
						  </span>
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
<script type="text/javascript">
	$(document).ready(function(){
		$.ajaxSetup({
        	headers: {
            	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        	}
		});

		$('#contoh-update').on('submit', function(e){
			e.preventDefault();
			$.ajax({				
				'type' : 'POST',
				'url' : "{{url('/contoh_soal/update')}}"+"/"+$('input[name=edit_id]').val(),
				'data' : new FormData(this),
				'processData' : false,
				'contentType' : false,
				'dataType' : 'JSON',
				'success' : function(data){
					if(data.success)
					{
						$('#edit_modal').modal('hide');
						toastr.success('Data berhasil diperbarui!', 'Success', {timeOut:6000});
						tabelContoh.ajax.reload();
						//location.reload();
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