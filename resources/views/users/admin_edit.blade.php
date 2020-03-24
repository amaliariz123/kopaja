@extends('base.header')
@section('title', 'Edit Profil')
@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">Admin</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home">
                            <a href="#" class="m-nav__link m-nav__link--icon">
                                <i class="m-nav__link-icon flaticon-profile-1"></i>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">Profil</span>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">Edit Profil</span>
                            </a>
                        </li>
                    </ul>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->
    
@include('base.notification')

    <div class="m-content">
    	<div class="row">
            <div class="col-xl-12">
            	<!--begin::Portlet-->
				<div class="m-portlet m-portlet--mobile">
					<div class="m-portlet__head">
						<div class="m-portlet__head-caption">
							<div class="m-portlet__head-title">
								<h3 class="m-portlet__head-text">
									Ubah Profil Admin
								</h3>
							</div>
						</div>
					</div>

					<!--begin::Form-->
					<form class="m-form m-form--fit m-form--label-align-right" action="{{url('/admin/update/profil/'.Auth::user()->id)}}" method="POST">
						@csrf
						<div class="m-portlet__body">
							<div class="form-group m-form__group row">
								<label class="col-form-label col-lg-3 col-sm-12">Nama</label>
								<div class="col-lg-4 col-md-9 col-sm-12">
									<div class="input-group">
										<input type="text" class="form-control m-input" name="fullname" value="{{$user['fullname']}}" required>
									</div>
								</div>
							</div>
							<div class="form-group m-form__group row">
								<label class="col-form-label col-lg-3 col-sm-12">Email</label>
								<div class="col-lg-4 col-md-9 col-sm-12">
									<div class="input-group">
										<input type="email" class="form-control m-input" name="email" value="{{$user['email']}}" required>
									</div>
								</div>
							</div>
							<div class="form-group m-form__group row">
								<label class="col-form-label col-lg-3 col-sm-12">Kata sandi lama</label>
								<div class="col-lg-4 col-md-9 col-sm-12">
									<div class="input-group">
										<input type="password" class="form-control m-input" name="old_password" value="" id="currentPass">
										<i onclick="show('currentPass')" class="fas fa-eye-slash" id="currentPass"></i>
									</div><br>
									<a href="">
									<small id="emailHelp" class="form-text text-muted">Lupa kata sandi? </small>
									</a>
								</div>
							</div>
							<div class="form-group m-form__group row">
								<label class="col-form-label col-lg-3 col-sm-12">Kata sandi baru</label>
								<div class="col-lg-4 col-md-9 col-sm-12">
									<div class="input-group">
										<input type="password" class="form-control m-input" name="new_password" id="newPass" value="">
										<i onclick="show('newPass')" class="fas fa-eye-slash" id="newPass"></i>
									</div>
								</div>
							</div>
							<div class="form-group m-form__group row">
								<label class="col-form-label col-lg-3 col-sm-12">Konfirmasi kata sandi baru</label>
								<div class="col-lg-4 col-md-9 col-sm-12">
									<div class="input-group">
										<input type="password" class="form-control m-input" name="confirm_new_password" value="" id="confirm_password">
										<i onclick="show('confirm_password')" class="fas fa-eye-slash" id="confirm_password"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="m-portlet__foot m-portlet__foot--fit">
							<div class="m-form__actions m-form__actions">
								<div class="row">
									<div class="col-lg-9 ml-lg-auto">
										<button type="submit" class="btn btn-brand">Perbarui</button>
										<button type="reset" class="btn btn-secondary" onclick="window.location='{{ URL::previous() }}'">Batal</button>
									</div>
								</div>
							</div>
						</div>
					</form>
					<!--end::Form-->
				</div>
				<!--end::Portlet-->
            </div>
        </div>
    </div>
</div>
@endsection

@push('custom-script')
<script type="text/javascript" src="{{url('assets/demo/demo11/custom/components/base/toastr.js')}}"></script>
<script type="text/javascript">
	function show(a)
	{
		var x = document.getElementById(a);
		var i= x.nextElementSibling

		if(x.getAttribute("type") == "password")
		{
			x.removeAttribute("type");
			x.setAttribute("type", "text");
			i.removeAttribute("class");
			i.setAttribute("class","fas fa-eye");
			//console.log(i);
		} else {
			x.removeAttribute("type");
			x.setAttribute("type", "password");
			i.removeAttribute("class");
			i.setAttribute("class","fas fa-eye-slash");
			//console.log(i);
		}
	}
</script>
@endpush