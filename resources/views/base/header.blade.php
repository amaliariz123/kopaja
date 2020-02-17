<!DOCTYPE html>
<html lang="en">
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Kopaja | @yield('title')</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

		<!--begin::Web font -->
		<script src="{{ url ('js/webfont.js')}}"></script>
		<script>
			WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

		<!--end::Web font -->

		<!--begin::Global Theme Styles -->
		<link href="{{ url ('assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
		<link href="{{ url ('assets/demo/demo11/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		
		<!--RTL version:<link href="assets/demo/demo11/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Global Theme Styles -->

		<!--begin::Page Vendors Styles -->
		<link href="{{ url ('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ url ('assets/vendors/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="{{url('assets/vendors/custom/datatables/dataTables.bootstrap4.min.css')}}">
		
		{{-- <link href="{{ url ('css/style.css')}}" rel="stylesheet" type="text/css" /> --}}
		<link href="{{ url ('assets/style.css')}}" rel="stylesheet" type="text/css" />

		<!--Gallery-->
		{{-- <link rel="stylesheet" href="{{url('gallery/css/gallery-clean.css')}}"> --}}
		<link rel="stylesheet" href="{{url('gallery/css/ekko-lightbox.css')}}">

		<!--Jasny-bootstrap-->
		<link rel="stylesheet" href="{{url('assets/vendors/custom/jasny-bootstrap/jasny-bootstrap.min.css')}}">

		<!--end::Page Vendors Styles -->
		<link rel="shortcut icon" href="{{url('/')}}/etrain/img/favicon.png" />

		@yield('custom-css')
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m-content--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-light m-aside--offcanvas-default">

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">

			<!-- BEGIN: Header -->
			<header id="m_header" class="m-grid__item    m-header " style="background-color:#f5aa42" m-minimize-offset="200" m-minimize-mobile-offset="200">
				<div class="m-container m-container--fluid m-container--full-height">
					<div class="m-stack m-stack--ver m-stack--desktop">

						<!-- BEGIN: Brand -->
						<div class="m-stack__item m-brand  m-brand--skin-light ">
							<div class="m-stack m-stack--ver m-stack--general m-stack--fluid">
								<div class="m-stack__item m-stack__item--middle m-brand__logo">
									<a href="{{url('/dashboard')}}" class="m-brand__logo-wrapper">
										<img alt="kopaja_logo" src="{{url('/')}}/etrain/img/logo.png" class="rata" />
										{{-- Logo --}}
									</a>
								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">
									<!-- BEGIN: Responsive Aside Left Menu Toggler -->
									<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>

									<!-- END -->

									<!-- BEGIN: Topbar Toggler -->
									<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
										<i class="flaticon-more"></i>
									</a>

									<!-- BEGIN: Topbar Toggler -->
								</div>
							</div>
						</div>
						<!-- END: Brand -->

						<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">

							<!-- BEGIN: Topbar -->
							<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-topbar__nav-wrapper">
									<ul class="m-topbar__nav m-nav m-nav--inline">
										<li class="m-nav__item m-topbar__user-profile  m-dropdown m-dropdown--medium m-dropdown--arrow  m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-topbar__userpic">
													<img src="{{url('images/picts/user.png')}}" class="m--img-rounded m--marginless m--img-centered" alt="" />
												</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center">
														<div class="m-card-user m-card-user--skin-light">
															<div class="m-card-user__pic">
																<img src="{{url('images/picts/user.png')}}" class="m--img-rounded m--marginless" alt="" />
															</div>
															<div class="m-card-user__details">
																<span class="m-card-user__name m--font-weight-500">Profile name</span>
															<a href="" class="m-card-user__email m--font-weight-300 m-link">Your email</a>
															</div>
														</div>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<ul class="m-nav m-nav--skin-light">
																<li class="m-nav__item">
																	<a href="" class="btn m-btn--pill  btn-secondary m-btn m-btn--custom m-btn--label-warning">Logout</a>
																</li>
																<li class="m-nav__item edit-profile">
																	 <a href="" class="btn m-btn--pill btn-warning m-btn btn-sm m-btn--custom m-btn--label-brand m-btn--bolder">Edit Profile</a> 
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>

							<!-- END: Topbar -->
						</div>
					</div>
				</div>
			</header>

			<!-- END: Header -->

			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
				<!-- BEGIN: Left Aside -->
			@include('base.sidebar')
				<!-- END: Left Aside -->
			
			@yield('content')

			</div>

			<!-- end:: Body -->

			<!-- begin::Footer -->
			@include('base.footer')

			<!-- end::Footer -->
		</div>

		<!-- end:: Page -->
	
		<!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>
		<!-- end::Scroll Top -->

		<!--begin::Global Theme Bundle -->
		<script src="{{url('assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
		<script src="{{url('assets/demo/demo11/base/scripts.bundle.js')}}" type="text/javascript"></script>
		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors -->
		<script src="{{url('assets/vendors/custom/fullcalendar/fullcalendar.bundle.js')}}" type="text/javascript"></script>
		<script src="{{url('assets/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
		<!--end::Page Vendors -->

		<!--begin::Page Scripts -->
		<script src="{{url('assets/app/js/dashboard.js')}}" type="text/javascript"></script>
		<script src="{{url('assets/demo/demo11/custom/components/base/sweetalert2.js')}}" type="text/javascript"></script>
		@yield('custom-script')

		<!-- Datepicker -->
		<script src="{{url('assets/demo/demo11/custom/crud/forms/widgets/bootstrap-datepicker.js')}}" type="text/javascript"></script>
		<script src="{{url('assets/demo/demo11/custom/crud/forms/widgets/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>

		<!-- Summernote -->
		<script src="{{url('assets/demo/demo11/custom/crud/forms/widgets/summernote.js')}}" type="text/javascript"></script>

		<!-- Select2 -->
		<script src="{{url('assets/demo/demo11/custom/crud/forms/widgets/select2.js')}}" type="text/javascript"></script>

		<!-- Switch -->
		<script src="{{url('assets/demo/demo11/custom/crud/forms/widgets/bootstrap-switch.js')}}" type="text/javascript"></script>
		<script src="{{url('assets/demo/demo11/custom/crud/forms/widgets/bootstrap-select.js')}}" type="text/javascript"></script>
		<!--end::Page Scripts -->

		<!--Datatables-->
		<script src="{{url('assets/vendors/custom/datatables/jquery.dataTables.min.js')}}"></script>
		<script src="{{url('assets/vendors/custom/datatables/dataTables.bootstrap4.min.js')}}"></script>
		<!--end::Datatables -->

		<!--Jasny-bootstrap-->
		<script src="{{url('assets/vendors/custom/jasny-bootstrap/jasny-bootstrap.min.js')}}"></script>

	</body>

	<!-- end::Body -->
</html>