@extends('layouts.land')

@section('content')
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Belajar Pajak Lebih Menyenangkan!</h5>
                            <h1>Belajar Pajak Menjadi Seru</h1>
                            <p>Solusi belajar perpajakan untuk siswa SMA/SMK dan Perguruan Tinggi
                                dilengkapi dengan akses latihan soal, pembahasan dan rangkuman.
                                Dilengkapi dengan materi perpajakan.
                            </p>
                            <a href="#" class="btn_1">View Course </a>
                            @guest
                                <a href="{{ route('register.index') }}" class="btn_2">Sign Up </a>                          
                            @else
                            
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3 align-self-center">
                    <div class="single_feature_text ">
                        <h2>Temukan <br> Materi Pajak</h2>
                        <p>Materi pajak yang menunjang untuk kegiatan pembelajaran,
                            dirancang sesuai kebutuhan anda </p>
                        <a href="#" class="btn_1">Read More</a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3" >
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-layers"></i></span>
                            <h4>Latihan Soal dan Pembahasan</h4>
                            <p>Ikuti simulasi soal latihan dan pembahasan untuk menguji pemahaman kamu tentang perpajakan</p>
                        </div>
                    </div>
                </div>
                <a class="col-sm-6 col-xl-3" style="cursor:pointer" href="{{Route('downloadAllSoal')}}">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-new-window"></i></span>
                            <h4>Download Soal dan Pembahasan</h4>
                            <p>Dapatkan soal dan pembahasan mengenai jenis dan klasifikasi pajak sesuai dengan Perpajakan di Indonesia.</p>
                        </div>
                    </div>
                </a>
                <a href="{{Route('downloadAllMateri')}}" class="col-sm-6 col-xl-3" style="cursor:pointer">
                    <div class="single_feature">
                        <div class="single_feature_part single_feature_part_2">
                            <span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
                            <h4>Download Materi Perpajakan</h4>
                            <p>Catatan materi perpajakan yang terdiri dari jenis pajak pusat dan daerah yang dapat di download untuk kamu.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->

    <!-- learning part start-->
    <section class="learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-lg-stretch">
                <div class="col-md-7 col-lg-7">
                    <div class="learning_img">
                        <img src="{{url('/')}}/etrain/img/learning_img.png" alt="">
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="learning_member_text">
                        <h5>About us</h5>
                        <h2>Berlajar Pajak Menyenangkan dan Mudah</h2>
                        <p>Materi pajak yang terasa sulit akan mudah untuk dipelajari, materi yang disampaikan
                            dibuat secara menarik dan menyenangkan.
                        </p>
                        <ul>
                            <li><span class="ti-pencil-alt"></span>Materi disampaikan dengan lengkap</li>
                            <li><span class="ti-ruler-pencil"></span>Mudah dipahami dan juga dilengkapi latihan soal.</li>
                        </ul>
                        <a href="#" class="btn_1">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- learning part end-->

    <!-- member_counter counter start -->
    <section class="member_counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">12</span>
                        <h4>Materi Pajak</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">55</span>
                        <h4> Latihan Soal</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">4</span>
                        <h4>Pengembang</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">100</span>
                        <h4>Pengguna</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- member_counter counter end -->

    <!--::review_part start::-->
    <section class="blog_part section_padding" style="padding-bottom:0px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <p>Materi dan Latihan Soal</p>
                        <h2>Pilih Materi dan Latihan Soal</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="{{url('/')}}/etrain/img/blog/1.svg" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a class="btn_4">Materi</a>
                                <a >
                                    <h5 class="card-title">Pajak Pusat</h5>
                                </a>
                                <p>Belajar Pajak Pusat secara menyenangkan dan mudah</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="{{url('/')}}/etrain/img/blog/2.svg" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a  class="btn_4">Materi</a>
                                <a >
                                    <h5 class="card-title">Pajak Daerah</h5>
                                </a>
                                <p>Belajar Pajak Daerah secara menyenangkan dan mudah</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="{{url('/')}}/etrain/img/blog/3.svg" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="#" class="btn_4">Latihan Soal</a>
                                <a >
                                    <h5 class="card-title">Mencoba dan Berlatih</h5>
                                </a>
                                <p>Menguji seberapa jauh materi yang telah dikuasai di dalam website</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->

    <!-- learning part start-->
    <section class="advance_feature learning_part" >
        <div class="container">
            <div class="row align-items-sm-center align-items-xl-stretch">
                <div class="col-md-6 col-lg-6">
                    <div class="learning_member_text">
                        <h5>Advance feature</h5>
                        <h2>Belajar Secara Mudah Dimana Saja</h2>
                        <p>Materi yang terintegrasi dengan jaringan Internet memudahkan
                           untuk diakses di mana saja dan kapan saja, hanya memerlukan
                           waktu yang singkat untuk mengakses materi di dalam website ini.
                        </p>
                        <div class="row">
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <div class="learning_member_text_iner">
                                    <span class="ti-pencil-alt"></span>
                                    <h4>Belajar Dimana Saja</h4>
                                    <p>Materi yang terintegrasi dengan internet memudahkan untuk diakses</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <div class="learning_member_text_iner">
                                    <span class="ti-stamp"></span>
                                    <h4>Materi yang Relevan</h4>
                                    <p>Materi dirancang dengan secara relevan dan mudah.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="learning_img">
                        <img src="{{url('/')}}/etrain/img/advance_feature_img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- learning part end-->

    <!--::review_part start::-->
    <section class="testimonial_part">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>tesimonials</p>
                        <h2>Mereka yang Mencoba</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="textimonial_iner owl-carousel">
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>Saya itu suka mata pelajaran pajak, tetapi kalau hanya lihat buku saya sudah pusing duluan. Tapi berkat adanya KOPAJA ini membantu banget dalam proses pembelajaran perpajakan, apalagi dilengkapi dengan praktik perhitungan juga.
                                        Terima kasih KOPAJA, beruntung banget dapet informasi dan akses website ini </p>
                                        <h4>Siska Rahmayanti -IPS</h4>
                                        <h5> SMA Negeri 6 Madiun</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="{{url('/')}}/etrain/img/sma.png" alt="#">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>Senang sekali bisa belajar perpajakan melalui KOPAJA ini. Fitur yang ada di KOPAJA ini membuat saya semangat belajar perpajakan. Selain ada materi dan latihan soal, ada praktik perhitungannya dan pengenaan tarifnya. Hal ini membantu sekali dalam proses pembelajaran bagi kaum milenial yang sukanya instan</p>
                                        <h4>Dewi Arifia</h4>
                                        <h5>Sekolah Vokasi (Departemen Ekonomika dan Bisnis)
                                        Universitas Gadjah Mada</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="{{url('/')}}/etrain/img/dewi.png" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="{{url('/')}}/etrain/img/testimonial_img_2.png" alt="#">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="{{url('/')}}/etrain/img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="{{url('/')}}/etrain/img/testimonial_img_3.png" alt="#">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="{{url('/')}}/etrain/img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--::blog_part end::-->

    <!--::blog_part start::-->
    <!-- <section class="blog_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>Our Blog</p>
                        <h2>Students Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="{{url('/')}}/etrain/img/blog/blog_1.png" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="#" class="btn_4">Design</a>
                                <a href="blog.html">
                                    <h5 class="card-title">Dry beginning sea over tree</h5>
                                </a>
                                <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                                <ul>
                                    <li> <span class="ti-comments"></span>2 Comments</li>
                                    <li> <span class="ti-heart"></span>2k Like</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="{{url('/')}}/etrain/img/blog/blog_2.png" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="#" class="btn_4">Developing</a>
                                <a href="blog.html">
                                    <h5 class="card-title">All beginning air two likeness</h5>
                                </a>
                                <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                                <ul>
                                    <li> <span class="ti-comments"></span>2 Comments</li>
                                    <li> <span class="ti-heart"></span>2k Like</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="{{url('/')}}/etrain/img/blog/blog_3.png" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="#" class="btn_4">Design</a>
                                <a href="blog.html">
                                    <h5 class="card-title">Form day seasons sea hand</h5>
                                </a>
                                <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                                <ul>
                                    <li> <span class="ti-comments"></span>2 Comments</li>
                                    <li> <span class="ti-heart"></span>2k Like</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--::blog_part end::-->

  @endsection