<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SIGNUP</title>
    <link rel="icon" href="{{url('/')}}/etrain/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('/')}}/etrain/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{url('/')}}/etrain/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{url('/')}}/etrain/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{url('/')}}/etrain/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{url('/')}}/etrain/css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{url('/')}}/etrain/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{url('/')}}/etrain/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{url('/')}}/etrain/css/style.css">
</head>
<body>
	
	<!-- learning part start-->
    <section class="mt-5 pt-5">
        <div class="container">
            <div class="row align-items-sm-center align-items-l-stretch">                
                <div class="col-md-7 col-lg-5">
                    <div class="learning_member_text">
                    	<center>
                        <h1 style="font-weight: bold;">REGISTER</h1><br>
							<form method="POST" action="{{ route('register') }}">
                        @csrf
                                <div class="form-group">
                                    <h5><input style="border: 0px; border-radius: 200px; padding: 25px 20px; background-color: rgba(0,0,0,0.05); width: 70%" placeholder="{{ __('First Name') }}" id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </h5>
                                </div>

                                <div class="form-group">
                                        <h5><input style="border: 0px; border-radius: 200px; padding: 25px 20px; background-color: rgba(0,0,0,0.05); width: 70%" placeholder="{{ __('Last Name') }}" id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus></h5>

                                        @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="form-group">
                                        <h5><input style="border: 0px; border-radius: 200px; padding: 25px 20px; background-color: rgba(0,0,0,0.05); width: 70%" placeholder="{{ __('Tempat Lahir') }}" id="tempat_lahir" type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required autocomplete="tempat_lahir" autofocus></h5>
                                        @error('tempat_lahir')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="form-group">
                                        <h5><input style="border: 0px; border-radius: 200px; padding: 25px 20px; background-color: rgba(0,0,0,0.05); width: 70%" placeholder="{{ __('Tanggal Lahir') }}" id="tanggal_lahir" type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required autocomplete="tanggal_lahir" autofocus></h5>
                                        @error('tanggal_lahir')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="form-group">
                                    <h5><input style="border: 0px; border-radius: 200px; padding: 25px 20px; background-color: rgba(0,0,0,0.05); width: 70%" placeholder="{{ __('Nama Sekolah/Instansi') }}" id="instansi" type="text" class="form-control @error('instansi') is-invalid @enderror" name="instansi" value="{{ old('instansi') }}" required autocomplete="instansi" autofocus></h5>
                                        @error('instansi')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="form-group">
                                    <h5><input style="border: 0px; border-radius: 200px; padding: 25px 20px; background-color: rgba(0,0,0,0.05); width: 70%" placeholder="{{ __('Email') }}"  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"></h5>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="form-group">
                                <h5><input style="border: 0px; border-radius: 200px; padding: 25px 20px; background-color: rgba(0,0,0,0.05); width: 70%" placeholder="{{ __('Password') }}" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="form-group">
                                    <h5><input style="border: 0px; border-radius: 200px; padding: 25px 20px; background-color: rgba(0,0,0,0.05); width: 70%" placeholder="{{ __('Confirm Password') }}"  id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"></h5>
                                </div>

                              <br>
                                         
	                        <div>
	                            <h5><button type="submit" class="btn_1" style="width: 70%">{{ __('REGISTER') }}</button></h5>
	                            <br><br><br><br>
								<h6><a class="btn_2" href="{{Route('login')}}" style="height: 20%">Already Have Account</a></h6><br>
	                        </div>
							</form>    
						</center>     
                    </div>
                </div>
                <div class="col-lg-7 col-md-5">
                    <div class="learning_img">
                        <center><img src="{{url('/')}}/etrain/img/advance_feature_img.png" alt=""></center>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- learning part end-->

     <!-- jquery plugins here-->
     <!-- jquery -->
     <script src="{{url('/')}}/etrain/js/jquery-1.12.1.min.js"></script>
     <!-- popper js -->
     <script src="{{url('/')}}/etrain/js/popper.min.js"></script>
     <!-- bootstrap js -->
     <script src="{{url('/')}}/etrain/js/bootstrap.min.js"></script>
     <!-- easing js -->
     <script src="{{url('/')}}/etrain/js/jquery.magnific-popup.js"></script>
     <!-- swiper js -->
     <script src="{{url('/')}}/etrain/js/swiper.min.js"></script>
     <!-- swiper js -->
     <script src="{{url('/')}}/etrain/js/masonry.pkgd.js"></script>
     <!-- particles js -->
     <script src="{{url('/')}}/etrain/js/owl.carousel.min.js"></script>
     <script src="{{url('/')}}/etrain/js/jquery.nice-select.min.js"></script>
     <!-- swiper js -->
     <script src="{{url('/')}}/etrain/js/slick.min.js"></script>
     <script src="{{url('/')}}/etrain/js/jquery.counterup.min.js"></script>
     <script src="{{url('/')}}/etrain/js/waypoints.min.js"></script>
     <!-- custom js -->
     <script src="{{url('/')}}/etrain/js/custom.js"></script>

</body>
</html>