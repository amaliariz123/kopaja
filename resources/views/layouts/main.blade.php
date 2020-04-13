<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <!-- Required meta tags -->
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
    <link rel="stylesheet" href="{{url('/')}}/etrain/css/nice-select.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{url('/')}}/etrain/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{url('/')}}/etrain/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{url('/')}}/etrain/css/style.css">



    
    @yield('css')
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu single_page_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                    
                    <div class="d-flex">
                        <a class="navbar-brand logo_1" href="{{Route('index')}}"> <img src="{{url('/')}}/etrain/img/logo.png" height="100%" width="20%" alt="logo"> </a>
                        <a class="navbar-brand logo_2 " href="{{Route('index')}}"> <img src="{{url('/')}}/etrain/img/logo.png" height="100%" width="20%" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{Route('index')}}">Beranda</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pajak Pusat
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{Route('pasal4')}}">PPH Pasal 4 ayat 2</a>
                                        <a class="dropdown-item" href="{{Route('pasal15')}}">PPh Pasal 15</a>
                                        <a class="dropdown-item" href="{{Route('pasal21')}}">PPh Pasal 21</a>
                                        <a class="dropdown-item" href="{{Route('pasal22')}}">PPh Pasal 22</a>
                                        <a class="dropdown-item" href="{{Route('pasal23')}}">PPh Pasal 23</a>
                                        <a class="dropdown-item" href="{{Route('pasal25')}}">PPh Pasal 25</a>
                                        <a class="dropdown-item" href="{{Route('pasal26')}}">PPh Pasal 26</a>
                                        <a class="dropdown-item" href="{{Route('ppn')}}">PPN</a>
                                        <a class="dropdown-item" href="{{Route('pnbm')}}">PPnBM</a>
                                        <a class="dropdown-item" href="{{Route('beamaterai')}}">Bea Materai</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pajak Daerah
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{Route('pbb')}}">PBB</a>
                                        <a class="dropdown-item" href="{{Route('pajakprovinsi')}}">Pajak Provinsi</a>
                                        <a class="dropdown-item" href="{{Route('pajakkabupaten')}}">Pajak Kabupaten</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{Route('bantuan')}}">Bantuan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{Route('tentang')}}">Tentang</a>
                                </li>
                                <li class="d-none d-lg-block">
                                
                                    @guest
                                        <a class="btn_1" href="{{ route('login') }}">Sign In</a>
                                                                               
                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="btn_1 nav-link dropdown-toggle py-2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:white;">
                                                Hai, {{Auth::user()->fullname}}! <span class="caret"></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest                                    
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- breadcrumb start-->
    @yield('header')
    <!-- breadcrumb start-->
    
    <!--================ Start Course Details Area =================-->
    <section class="course_details_area section">
        @yield('content')
    </section>
    <!--================ End Course Details Area =================-->

     <!-- footer part start-->
     <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <a href="index.html"> <img src="{{url('/')}}/etrain/img/logo.png" alt="gambar"> </a>
                        <p>Kopaja adalah organisasi yang bergerak pada bidang pendidikan di Indonesia yang berfokus pada layanan
                            berbasis pendidikan khususnya Pajak. </p>
                        <p></p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Sosial Media Kami</h4>
                        <p>Ikuti kami di kanal berikut</p>
                        <div class="social_icon" >
                            <a href="https://www.facebook.com/kompaspajak.ac.id/"> <i class="ti-facebook" style="font-size:30px;"></i> </a>
                            <a href="https://twitter.com/kompaspajak/"> <i class="ti-twitter-alt" style="font-size:30px;"></i> </a>
                            <a href="https://www.instagram.com/kompaspajak/"> <i class="ti-instagram" style="font-size:30px;"></i> </a>
                            <a href="#"> <i class="ti-line" style="font-size:30px;"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Hubungi Kami</h4>
                        <div class="contact_info">
                            <p><span> Alamat :</span> Jl. Prof. DR. Drs. Notonagoro, Bulaksumur, Yogyakarta, 55281 </p>
                            <p><span> Phone :</span> 0823-2456-4853</p>
                            <p><span> Email : </span>kopaja@mail.com </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Universitas Gadjah Mada &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by Kopaja</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

   <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="{{url('/')}}/etrain/js/jquery-1.12.1.min.js" type="text/javascript"></script>
    <!-- popper js -->
    <script src="{{url('/')}}/etrain/js/popper.min.js" type="text/javascript"></script>
    <!-- bootstrap js -->
    <script src="{{url('/')}}/etrain/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- easing js -->
    <script src="{{url('/')}}/etrain/js/jquery.magnific-popup.js" type="text/javascript"></script>
    <!-- swiper js -->
    <script src="{{url('/')}}/etrain/js/swiper.min.js" type="text/javascript"></script>
    <!-- swiper js -->
    <script src="{{url('/')}}/etrain/js/masonry.pkgd.js" type="text/javascript"></script>
    <script src="{{url('/')}}/etrain/js/jquery.nice-select.min.js" type="text/javascript"></script>
    <!-- particles js -->
    <script src="{{url('/')}}/etrain/js/owl.carousel.min.js" type="text/javascript"></script>
    <!-- swiper js -->
    <script src="{{url('/')}}/etrain/js/slick.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/etrain/js/jquery.counterup.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/etrain/js/waypoints.min.js" type="text/javascript"></script>
    <!-- custom js -->
    <script src="{{url('/')}}/etrain/js/custom.js" type="text/javascript"></script>

    @if (!empty(Session::get('popup')) || (Session::get('popup')==-1)  )
     <script>
        $(function() {
          $('#nilai').modal('show');
        });

        $(function() {

            $(".progress").each(function() {

            var value = $(this).attr('data-value');
            var left = $(this).find('.progress-left .progress-bar');
            var right = $(this).find('.progress-right .progress-bar');

            if (value > 0) {
                if (value <= 50) {
                right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
                } else {
                right.css('transform', 'rotate(180deg)')
                left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
                }
            }

            })

            function percentageToDegrees(percentage) {

            return percentage / 100 * 360

            }

        });
    </script>
        
    @endif
</body>

    @yield('script')
</body>

</html>