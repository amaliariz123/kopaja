
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>KOPAJA | Verifikasi Email</title>
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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
</head>
<body>
    
    <!-- learning part start-->
    <section class="mt-5 pt-5">
        <div class="container">
            <div class="row align-items-sm-center align-items-l-stretch">                
                <div class="col-md-9">
                    <div class="learning_member_text">
                        <div class="card">
                            <div class="card-header">{{ __('Verifikasi Email Anda') }}</div>

                            <div class="card-body">
                                @if (session('resent'))
                                    <div class="alert alert-success" role="alert">
                                        {{ __('Kami telah mengirimkan link verifikasi ke email Anda.') }}
                                    </div>
                                @endif

                                {{ __('Silakan periksa email anda untuk memverifikasinya. Biasanya butuh beberapa menit untuk menerima email tersebut.') }}
                                {{ __('Jika belum menerima email') }}, <a href="{{ route('verification.resend') }}">{{ __('klik di sini untuk mengirimkannya lagi') }}</a>.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="learning_img">
                        <center><img src="{{asset('/images/icons/email.png')}}" alt="email logo" style=""></center>
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
     <!-- <script src="{{url('/')}}/etrain/js/jquery.nice-select.min.js"></script> -->
     <!-- swiper js -->
     <script src="{{url('/')}}/etrain/js/slick.min.js"></script>
     <script src="{{url('/')}}/etrain/js/jquery.counterup.min.js"></script>
     <script src="{{url('/')}}/etrain/js/waypoints.min.js"></script>
     <!-- custom js -->
     <script src="{{url('/')}}/etrain/js/custom.js"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
