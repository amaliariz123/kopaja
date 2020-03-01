<!--begin::Modal-->
<div class="modal fade" id="tax-create-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data Pajak</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="tax-store" method="POST" enctype="multipart/form-data" file=true>
					@csrf
					<fieldset class="content-group">
					<div class="form-group">
						<label for="name" class="form-control-label">Name:</label>
						<input type="text" class="form-control" name="name" placeholder="PPh Pasal 23">
					</div>
					<div class="form-group">
						<label for="description" class="form-control-label">Description:</label>
						<textarea type="text" class="form-control" name="description" rows="5" placeholder="PPh Pasal 23 merupakan pajak yang dipotong atas penghasilan yang diterima. . ."></textarea>
					</div>
					<div class="form-group">
						<label for="tax_type" class="form-control-label">Tax type:</label>
						<select class="form-control m-bootstrap-select m_selectpicker" name="tax_type" data-col-index="6">
							<option value="">Select tax type</option>
							<option value="Pajak pusat">Pajak pusat</option>
							<option value="Pajak daerah">Pajak daerah</option>
						</select>
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
						<button type="submit" class="btn btn-primary">Simpan</button>
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

		$('#tax-store').on('submit', function(e){
			e.preventDefault();
			$.ajax({				
				'type' : 'POST',
				'url' : "{{url('/pajak/store')}}",
				'data' : new FormData(this),
				'processData' : false,
				'contentType' : false,
				'dataType' : 'JSON',
				'success' : function(data){
					if(data.success)
					{
						$('#tax-create-modal').modal('hide');
						toastr.success('Success add new data!', 'Success', {timeOut:6000});
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
		})
	})
</script>
@endpush