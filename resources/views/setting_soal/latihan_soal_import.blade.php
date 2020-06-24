<!--begin::Modal-->
<div class="modal fade" id="import_latihan_soal"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="import-soal" action="{{url('latihan_soal/import/soal/'.$tax->id)}}" method="post" enctype="multipart/form-data" files=true>
					@csrf
					<div class="text-center" style="margin-bottom: 15px">
						<i class="fa fa-4x fa-file-import"></i>
					</div>
					<fieldset class="content-group">
						<div class="form group">
							<div class="row">
								<div class="col-lg-12">
									<h6 style="text-align: center;">Pilih berkas untuk diimpor. Format berkas: *.xls; atau *.xlsx</h6><br>
									<input type="file" name="excel" class="form-control" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"><br>
									<a href="{{url('/latihan_soal/import/download')}}" style="margin-top: 15px" class="btn btn-sm btn-info"><i class="la la-download"></i> Unduh Template</a><br>
								</div>
							</div>
						</div>
					</fieldset>
					<br>
					<br>
					<div class="col-md-12 text-right">					
						<button type="reset" class="btn btn-outline-primary" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary">Impor</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!--end::Modal-->