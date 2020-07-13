<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>KOPAJA</title>

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

    @yield('css')
</head>

<body>
<header class="main_menu home_menu">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light" style="margin-bottom:0px; justify-content: space-between;">
                        <a class="navbar-brand" href="{{Route('index')}}"> <img src="{{url('/')}}/etrain/img/logo.png" width="80px" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <ul class="navbar-nav align-items-center" style="position:relative; float:right;">
                            <li class="d-none d-lg-block">
                                <a class="btn_1" style="font-weight: 600; color:#fff;">Level </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    
    @yield('content')
    

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
    @stack('custom-js')
</body>

</html>