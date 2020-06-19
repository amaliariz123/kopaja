@extends('base.header')
@section('title','Tambah Soal')
@section('kuis','m-menu__item--active')
@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">Setting Soal</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home">
                            <a href="#" class="m-nav__link m-nav__link--icon">
                                <i class="m-nav__link-icon fa fa-book-reader"></i>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">Kuis</span>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">Buat Soal</span>
                            </a>
                        </li>
                    </ul>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->
@include('base.notification')
    <div class="m-content">
        <!--Begin::Section-->
        <div class="row">
            <div class="col-xl-12">
                <div class="m-portlet m-portlet--mobile">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Buat soal baru
                                </h3>
                            </div>
                        </div>
                    </div>
                	<div class="m-portlet__body">
                	<!--begin::Form-->
					<form id="latihan-store" class="m-form m-form--fit m-form--label-align-left" action="{{url('/kuis/create/'.$data->id.'/soal/store')}}" method="POST" enctype="multipart/form-data" files=true>
						@csrf
						<div class="m-portlet__body">
							<div class="row">
								<div class="col-6">
									<div class="form-group m-form__group">
										<h6>Soal</h6>
										<textarea class="form-control m-input" id="exampleTextarea" rows="10" name="question" required>
										</textarea>
										<input type="hidden" name="quiz_id" value="{{$data->id}}" />
									</div>
								</div>
								<div class="col-6">
									<div class="form-group m-form__group">
										<h6>Gambar</h6>
										<div class="fileinput fileinput-new" data-provides="fileinput">
				                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
				                                <img src="{{asset('images/blank.png')}}" alt="" /> </div>
				                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
				                            <div>
				                                <span class="btn btn-info btn-sm btn-file">
				                                    <span class="fileinput-new"> Select image </span>
				                                    <span class="fileinput-exists"> Change </span>
				                                    <input type="file" name="image" accept="image/jpg,image/jpeg,image/png"> </span>
				                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
				                            </div>
				                        </div>
										<small id="emailHelp" class="form-text text-muted">Ukuran maksimal 2 MB. (*jpg, *png, *jpeg)</small>
									</div>
								</div>
							</div>
							<div class="row" style="margin-top:20px;">
								<div class="col-md-6">
									<div class="form-group m-form__group">
										<h6>Opsi a</h6>
										<div class="m-checkbox-list">
											<label class="m-checkbox">
												<input type="checkbox" class="custom-control-input" value="1" name="right_answer">
												<span></span>
												<div class="col-12">
													<input type="text" class="form-control" name="option_a" required />
												</div>
											</label>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group m-form__group">
										<h6>Opsi c</h6>
										<div class="m-checkbox-list">
											<label class="m-checkbox">
												<input type="checkbox" class="custom-control-input" value="3" name="right_answer">
												<span></span>
												<div class="col-12">
													<input type="text" class="form-control" name="option_c" required />
												</div>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="row" style="margin-top:20px;">
								<div class="col-md-6">
									<div class="form-group m-form__group">
										<h6>Opsi b</h6>
										<div class="m-checkbox-list">
											<label class="m-checkbox">
												<input type="checkbox" class="custom-control-input" value="2" name="right_answer">
												<span></span>
												<div class="col-12">
													<input type="text" class="form-control" name="option_b" required />
												</div>
											</label>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group m-form__group">
										<h6>Opsi d</h6>
										<div class="m-checkbox-list">
											<label class="m-checkbox">
												<input type="checkbox" class="custom-control-input" value="4" name="right_answer">
												<span></span>
												<div class="col-12">
													<input type="text" class="form-control" name="option_d" required />
												</div>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div style="margin-top: 1.5em">
								<p class="text-bold text-danger"><i>*) Centang 1 jawaban benar</i></p>
							</div>
						</div>
						<div class="m-portlet__foot m-portlet__foot--fit">
							<div class="m-form__actions m-form__actions">
								<button type="submit" class="btn btn-brand">Buat</button>
								<button type="reset" class="btn btn-secondary" onclick="window.location='{{ URL::previous() }}'">Batal</button>
							</div>
						</div>
					</form>
					<!--end::Form-->
                	</div>
                </div>
            </div>
        </div>       
        <!--End::Section-->
    </div>
</div>
@endsection
@push('custom-script')
<script type="text/javascript">
	$('.custom-control-input').on('change', function() {
		$('.custom-control-input').not(this).prop('checked', false);  
	});
</script>
@endpush