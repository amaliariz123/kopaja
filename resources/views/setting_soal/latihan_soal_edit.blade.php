@extends('base.header')
@section('title','Edit Soal')
@section('latihan','m-menu__item--active')
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
                                <i class="m-nav__link-icon fa fa-book-open"></i>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">Latihan Soal</span>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">Edit Soal</span>
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
                                    Edit soal {{$tax->name}}
                                </h3>
                            </div>
                        </div>
                    </div>
                	<div class="m-portlet__body">
                	<!--begin::Form-->
					<form class="m-form m-form--fit m-form--label-align-left" action="{{url('latihan_soal/update/soal/'.$latihan->id)}}" method="POST" enctype="multipart/form-data" files=true>
						@csrf
						<div class="m-portlet__body">
							<div class="row">
								<div class="col-6">
									<div class="form-group m-form__group">
										<h6>Soal<span class="text-danger">*</span></h6>
										<textarea class="form-control m-input" rows="10" name="question" required> {{$latihan->question}}
										</textarea>
										<input type="hidden" name="id_tax" value="{{$tax->id}}" />
									</div>
								</div>
								<div class="col-6">
									<div class="form-group m-form__group">
										<h6>Gambar</h6>
										<div class="fileinput fileinput-new" data-provides="fileinput">
				                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">

				                            	@if($latihan->image == null)
				                                <img src="{{asset('images/blank.png')}}" alt="gambar soal" />
				                                @else
				                                <img src="{{asset('storage/images/latihan_soal_image/'.$latihan->image)}}" alt="gambar soal" />
				                                @endif

				                            </div>
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
										<h6>Opsi a<span class="text-danger">*</span></h6>
										<div class="m-checkbox-list">
											<label class="m-checkbox">
												<input type="checkbox" name="kunci_jawaban" value="1" class="custom-control-input" @if($latihan->right_answer=='1') checked @endif >
												<span></span>
												<div class="col-12">
													<input type="text" class="form-control" name="opsi_a" value="{{$latihan->option_a}}" required />
												</div>
											</label>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group m-form__group">
										<h6>Opsi c<span class="text-danger">*</span></h6>
										<div class="m-checkbox-list">
											<label class="m-checkbox">
												<input type="checkbox" value="3" name="kunci_jawaban" class="custom-control-input" @if($latihan->right_answer == '3') checked @endif>
												<span></span>
												<div class="col-12">
													<input type="text" class="form-control" name="opsi_c" value="{{$latihan->option_c}}" required />
												</div>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="row" style="margin-top:20px;">
								<div class="col-md-6">
									<div class="form-group m-form__group">
										<h6>Opsi b<span class="text-danger">*</span></h6>
										<div class="m-checkbox-list">
											<label class="m-checkbox">
												<input type="checkbox" value="2" name="kunci_jawaban" class="custom-control-input" @if($latihan->right_answer == '2') checked @endif>
												<span></span>
												<div class="col-12">
													<input type="text" class="form-control" name="opsi_b" value="{{$latihan->option_b}}" required />
												</div>
											</label>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group m-form__group">
										<h6>Opsi d<span class="text-danger">*</span></h6>
										<div class="m-checkbox-list">
											<label class="m-checkbox">
												<input type="checkbox" value="4" name="kunci_jawaban" class="custom-control-input" @if($latihan->right_answer == '4') checked @endif>
												<span></span>
												<div class="col-12">
													<input type="text" class="form-control" name="opsi_d" value="{{$latihan->option_d}}" required />
												</div>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div style="margin-top: 1.5em">
								<p class="text-bold text-danger"><i>#) Centang 1 jawaban benar</i></p>
							</div>
						</div>
						<div class="m-portlet__foot m-portlet__foot--fit">
							<div class="m-form__actions m-form__actions">
								<button type="submit" class="btn btn-brand">Simpan</button>
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