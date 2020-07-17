<!doctype html>
<html lang="en">

<head>
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
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{url('/')}}/etrain/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{url('/')}}/etrain/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{url('/')}}/etrain/css/style.css">
    <link href="{{ asset('/dist/css/sweetalert.css') }}" rel="stylesheet">
    
    
    

    
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    
    @yield('css')
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light" style="margin-bottom:0px;">
                        <a class="navbar-brand" href="{{Route('index')}}"> <img src="{{url('/')}}/etrain/img/logo.png" width="80px" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                            <?php
                              $pajak_pusat = DB::table('taxes')->where('tax_type', 'Pajak Pusat')->get();
                              $pajak_daerah = DB::table('taxes')->where('tax_type', 'Pajak Daerah')->get();
                            ?>
                            @guest
                            
                            @else
                            <?php
                              $data = DB::table('users')->where('id', Auth::user()->id)->first()->id;
                              $member = DB::table('members')->where('user_id', $data)->first();
                            ?>
                            @endguest
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{Route('index')}}">Beranda</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pajak Pusat
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        @foreach($pajak_pusat as $pusat)
                                            <a class="dropdown-item" href="{{route('materi.show', $pusat->id)}}">{{$pusat->name}}</a>
                                        @endforeach
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pajak Daerah
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        @foreach($pajak_daerah as $daerah)
                                            <a class="dropdown-item" href="{{route('materi.show', $daerah->id)}}">{{$daerah->name}}</a>
                                        @endforeach
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
                                        <a class="btn_1" href="{{ route('login') }}">Masuk</a>
                                                                               
                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="btn_1 nav-link dropdown-toggle py-2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:white;">
                                                Halo, {{Auth::user()->fullname}}! 
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            @if($member->member_status == 'reguler')
                                                <a class="dropdown-item" href="{{  route('profile.show', Auth::user()->id) }}" style="font-weight:500;"><i class="ti-clipboard"></i>&nbsp
                                                    {{ __('Kuis Pajak') }}
                                                </a>
                                            @else
                                                <a class="dropdown-item" href="{{  route('riwayat_kuispajak') }}"><i class="ti-clipboard"></i>&nbsp
                                                    {{ __('Kuis Pajak') }}
                                                </a>
                                            @endif
                                            <hr style="margin:0px;">
                                                
                                                <a class="dropdown-item" href="{{ url('/profile/edit/'.Auth::user()->id) }}"><i class="ti-user"></i>&nbsp
                                                    {{ __('Profil') }}
                                                </a>

                                                @if($member->member_status == 'reguler')
                                                <a class="dropdown-item" href="{{  route('upgrade.show') }}"><i class="ti-crown"></i>&nbsp
                                                    {{ __('Langganan Premium') }}
                                                </a>
                                                @endif

                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();"><i class="ti-power-off"></i>&nbsp
                                                    {{ __('Keluar') }}
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
    
    @yield('content')
    
    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <a href="{{Route('index')}}"> <img src="{{url('/')}}/etrain/img/logo.png" alt="gambar" style="max-width: 60%;"> </a>
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
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>

    <!--Datatables-->
    <script src="{{url('assets/vendors/custom/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('assets/vendors/custom/datatables/dataTables.bootstrap4.min.js')}}"></script>
    
    <script src="{{url('assets/demo/demo11/custom/components/base/sweetalert2.js')}}" type="text/javascript"></script>
    @stack('custom-js')
</body>

</html>