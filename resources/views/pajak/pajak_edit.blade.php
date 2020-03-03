<!--begin::Modal-->
<div class="modal fade" id="tax-edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Data Pajak</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="tax-update" method="POST" enctype="multipart/form-data" file=true>
					@csrf
					<fieldset class="content-group">
					<div class="form-group">
						<label for="name" class="form-control-label">Name<span class="text-danger">*</span></label>
						<input type="hidden" name="edit_id" class="form-control">
						<input type="text" class="form-control" name="edit_name" value="">
					</div>
					<div class="form-group">
						<label for="description" class="form-control-label">Description<span class="text-danger">*</span></label>
						<textarea type="text" class="form-control" name="edit_description" rows="6" value=""></textarea>
					</div>
					<div class="form-group">
						<label for="tax_type" class="form-control-label">Tax type<span class="text-danger">*</span></label>
						<select class="form-control m-bootstrap-select m_selectpicker" name="edit_tax_type" id="edit_tax_type" data-col-index="6">
							<option value="">Select tax type</option>
							<option value="Pajak pusat">Pajak pusat</option>
							<option value="Pajak daerah">Pajak daerah</option>
						</select>
					</div>
					<div class="form-group">
						<label for="module" class="form-control-label">Module<span class="text-danger">*</span></label><br>
						<div class="fileinput fileinput-new input-group" data-provides="fileinput">
						  <div class="form-control" data-trigger="fileinput">
						    <span class="fileinput-filename"></span>
						  </div>
						  <span class="input-group-append">
						    <span class="input-group-text fileinput-exists" data-dismiss="fileinput">
						      Remove
						    </span>

						    <span class="input-group-text btn-file">
						      <span class="fileinput-new">Select file</span>
						      <span class="fileinput-exists">Change</span>
						      <input type="file" name="edit_picture" accept="application/pdf">
						    </span>
						  </span>
						</div>
						<small id="emailHelp" class="form-text text-muted">Maximal size is 2 MB. (*pdf only)</small>
					</div>
					</fieldset>
					<br>
					<div class="col-md-12 text-right">
						<button type="submit" class="btn btn-primary">Perbarui</button>
						<button type="reset" class="btn btn-outline-primary">Reset</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					</div>d
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

		$('#tax-update').on('submit', function(){
			e.preventDefault();
			$.ajax({
				'type' : 'POST',
				'url' : "{{url('pajak/update')}}"+"/"+$('input[name=edit_id]').val(),
				'data' : new FormData(this),
				'processData' : false,
				'contentType' : false,
				'dataType' : 'JSON',
				'success' : function(data){
					if(data.success)
					{
						$('#tax-edit-modal').modal('hide');
						toastr.success('Success update data!', 'Success', {timeOut:6000});
						tabelPajak.ajax.reload();
					} else {
						console.log(data);
						for(var count=0; count < data.errors.length; count++)
						{
							toastr.error(data.errors[count], 'Error', {timeOut:6000});
						}
					}
				}
			})
		});
	});
</script>
@endpush