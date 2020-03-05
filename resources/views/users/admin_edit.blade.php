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
                                <span class="m-nav__link-text">Profile</span>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">Edit Profile</span>
                            </a>
                        </li>
                    </ul>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->

    <div class="m-content">
    	<div class="row">
            <div class="col-xl-12">
            	<!--begin::Portlet-->
				<div class="m-portlet m-portlet--mobile">
					<div class="m-portlet__head">
						<div class="m-portlet__head-caption">
							<div class="m-portlet__head-title">
								<h3 class="m-portlet__head-text">
									Edit Profile Admin
								</h3>
							</div>
						</div>
					</div>

					<!--begin::Form-->
					<form class="m-form m-form--fit m-form--label-align-right" method="POST">
						<div class="m-portlet__body">
							<div class="form-group m-form__group row">
								<label class="col-form-label col-lg-3 col-sm-12">Full name</label>
								<div class="col-lg-4 col-md-9 col-sm-12">
									<div class="input-group">
										<input type="text" class="form-control m-input" aria-describedby="basic-addon2">
										<div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-user"></i></span></div>
									</div>
								</div>
							</div>
							<div class="form-group m-form__group row">
								<label class="col-form-label col-lg-3 col-sm-12">Email</label>
								<div class="col-lg-4 col-md-9 col-sm-12">
									<div class="input-group">
										<input type="email" class="form-control m-input" aria-describedby="basic-addon2">
										<div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-at"></i></span></div>
									</div>
								</div>
							</div>
							<div class="form-group m-form__group row">
								<label class="col-form-label col-lg-3 col-sm-12">Phone number</label>
								<div class="col-lg-4 col-md-9 col-sm-12">
									<div class="input-group">
										<input type="text" class="form-control m-input" aria-describedby="basic-addon2">
										<div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-phone"></i></span></div>
									</div>
								</div>
							</div>
							<div class="form-group m-form__group row">
								<label class="col-form-label col-lg-3 col-sm-12">Old password</label>
								<div class="col-lg-4 col-md-9 col-sm-12">
									<div class="input-group">
										<input type="password" class="form-control m-input" aria-describedby="basic-addon2">
										<div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-unlock"></i></span></div>
									</div>
								</div>
							</div>
							<div class="form-group m-form__group row">
								<label class="col-form-label col-lg-3 col-sm-12">New password</label>
								<div class="col-lg-4 col-md-9 col-sm-12">
									<div class="input-group">
										<input type="password" class="form-control m-input" aria-describedby="basic-addon2">
										<div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-unlock-alt"></i></span></div>
									</div>
								</div>
							</div>
							<div class="form-group m-form__group row">
								<label class="col-form-label col-lg-3 col-sm-12">Re-type new password</label>
								<div class="col-lg-4 col-md-9 col-sm-12">
									<div class="input-group">
										<input type="password" class="form-control m-input" aria-describedby="basic-addon2">
										<div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-check-circle"></i></span></div>
									</div>
								</div>
							</div>
						</div>
						<div class="m-portlet__foot m-portlet__foot--fit">
							<div class="m-form__actions m-form__actions">
								<div class="row">
									<div class="col-lg-9 ml-lg-auto">
										<button type="submit" class="btn btn-brand">Save change(s)</button>
										<button type="reset" class="btn btn-secondary" onclick="window.location='{{ URL::previous() }}'">Cancel</button>
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