<!--begin::Modal-->
<div class="modal fade" id="m_select2_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Pembahasan Soal</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="pembahasan-create" method="get" action="{{url('pembahasan_soal/create')}}" enctype="multipart/form-data" file=true>
					@csrf
					<fieldset class="content-group">
						<div class="form-group">
							<label for="name" class="form-control-label">Soal Latihan<span class="text-danger">*</span></label>
							<br>
							<select class="form-control m-select2" id="m_select2_1_modal" name="question">
								@foreach($soal as $key => $value)
								<option value="{{$key}}" name="{{$key}}">{{$value}}</option>
								@endforeach
							</select>
							<input type="hidden" name="question_id" id="hiddenQuestion" value="">
						</div>
					</fieldset>
					<br>
					<div class="col-md-12 text-right">
						<button type="reset" class="btn btn-outline-primary" data-dismiss="modal">Batal</button>
						<button type="submit" id="submit" class="btn btn-primary">Buat</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!--end::Modal-->