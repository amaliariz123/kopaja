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
@php
$level = DB::table('quizzes')->where('id',$id_kuis)->get();
@endphp
<header class="main_menu single_page_menu" style="height:100px;">
    <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light" style="margin-bottom:0px; justify-content: space-between;">
                    <div class="d-flex">
                        <a class="navbar-brand"> <img src="{{url('/')}}/etrain/img/logo.png" width="80px" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div style="margin: center;">
                        <b id="demo" style="font-size: 24px; text-align:center; margin-left:110px;" />
                    </div>
                    <div class="collapse navbar-collapse main-menu-item justify-content-end" id="navbarSupportedContent">
                        @php
                            $level = DB::table('quizzes')->where('id',$id_kuis)->get();
                        @endphp
                        @foreach($level as $data)
                        <ul class="navbar-nav align-items-center" style="position:relative; float:right;">
                            <li class="d-none d-lg-block">
                                <a class="btn_1" style="font-weight: 600; color:#fff;">Level {{$data->level}}</a>
                            </li>
                        </ul>
                    </div>
                    </nav>
                </div>
            </div>
        </div>
        @endforeach
    </header>
    <section class="advance_feature learning_part" style="padding-bottom:0px; z-index: 99;padding: 150px 0px 0px;">
    
    <div class="container">
        <form action="{{ route('quizResult', $id_kuis) }}">
        <div class="row">
        @yield('content')
            <div style="width: 35%; float: right; margin-right: 3%;">
                <div class="card card-profile">
                    <div style="margin-bottom: 20px; text-align: center;">
                        <h4>Navigasi Soal Kuis </h4>
                    </div>
                    <div style="margin-bottom: 20px;">
                    @php
                    $i=1;
                    @endphp
                    @foreach($allSoal as $type)
                        <button type="button" class="btn btn_nav link_soal {{ session($type->id."id_soal") != null ? 'btn-done' : null }}" value="{{$i}}">{{$i}}</button>
                        @php
                            $i++;
                        @endphp
                    @endforeach
                    </div>
                    
                        <button type="submit" class="profile-nav__link active" style="border-radius: 5px;border-color: transparent;font-size: 16px; padding: 10px 25px;">Selesai</button>
                    
                </div>
            </div>
        </div>
            </form>
    </div>
</section>
    <div class="modal fade" id="nilai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nilai Anda adalah : </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <h2 style="text-align: center;">Waktu Anda Telah Habis!</h2><br>
                    
                    <br><h6 style="text-align: center;">Silahkan kerjakan kembali!</h6>

            </div>
            </div>
        </div>
    </div>
    
    

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
    <script>

        // Set the date we're counting down to
        var countDownDate = {{$countdown}};
        var upDate = new Date(parseInt(localStorage.getItem('start_time')));
        upDate.setMinutes( upDate.getMinutes() + countDownDate );

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();
                
            // Find the distance between now and the count down date
            var distance = upDate - now;
                
            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
            // Output the result in an element with id="demo"
            document.getElementById("demo").innerHTML = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";
                
            // If the count down is over, write some text 
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
                $("#nilai").modal("show");
                var id_kuis ="{{$id_kuis}}";
                document.getElementById("demo").innerHTML = "EXPIRED";
                var url = '{!!url('quizResult')!!}/'+id_kuis;
                window.location.href = url;
            }
        }, 1000);
        
    </script>
    <script>
    $(document).on('click', '.link_soal', function(){
        // e.preventDefault();
        var id_kuis = "{{$id_kuis}}";
        var soal = $(this).attr('value');
        var url = '{!!url('kuis_pajak')!!}/'+id_kuis+"?page="+soal;
        // console.log(url);
        window.location.href = url;
    });
    </script>
    @stack('custom-js')
</body>

</html>