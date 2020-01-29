@extends('layouts.land')

@section('content')
<!-- learning part start-->
<section class="advance_feature learning_part" style="padding-bottom:0px; z-index: 99;
  padding: 180px 0px 0px;">
        <div class="container">
            <div class="row align-items-sm-center align-items-xl-stretch">
                <div class="col-md-6 col-lg-6">
                    <div class="learning_member_text">
                        <h3>PPN</h3>
                        <h2>Definisi</h2>
                        <p>Berdasarkan Undang-Undang RI No. 42 Tahun 2009 tentang Perubahan Ketiga atas Undang-Undang No. 8 Tahun 1983 tentang Pajak Pertambahan Nilai Barang dan Jasa dan Pajak Penjualan atas Barang Mewah, bahwa Pajak Pertambahan Nilai (PPN) adalah pajak atas konsumsi barang dan jasa di daerah pabean yang dikenakan secara bertingkat di setiap jalur produksi dan distribusi.
                        </p>
                        <section class="feature_part">
                            <div class="container">
                                <div class="row" style="margin-left: -20px; margin-top: -30px">                
                                    <a href="{{Route('downloadPpn' )}}" class="col-sm-4 col-md-12 col-lg-4" style="padding: 7px;">
                                        <div class="single_feature">
                                            <div class="single_feature_part" style="padding-left: 5px 20px">
                                                <span class="single_feature_icon"><i class="ti-layers"></i></span>
                                                <h4>Download Materi</h4>
                                                <p>Download Materi Untuk belajar lebih nyaman</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{Route('latsoalppn')}}" class="col-sm-4 col-md-12 col-lg-4" style="padding: 7px;">
                                        <div class="single_feature">
                                            <div class="single_feature_part" style="padding-left: 5px 20px">
                                                <span class="single_feature_icon"><i class="ti-new-window"></i></span>
                                                <h4>Contoh Soal Pajak</h4>
                                                <p>Pelajari perhitungan terkait pajak disini</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{Route('soalppn')}}" class="col-sm-4 col-md-12 col-lg-4" style="padding: 7px;">
                                        <div class="single_feature">
                                            <div class="single_feature_part" style="padding-left: 5px 20px">
                                                <span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
                                                <h4>Latihan Soal Pajak</h4>
                                                <p>Uji Kemampuanmu sejauh mana kamu bisa</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="learning_img">
                        <img src="{{url('/')}}/etrain/img/9.svg" width="1000px" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- learning part end-->

    <!--================ Start Course Details Area =================-->
    <section class="course_details_area section_padding" style="padding-top:0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 course_details_left">
                    <div class="content_wrapper">
                    <h4 class="title_top">Tarif PPN  </h4>
                        <div class="content">
                        Tarif PPN menurut ketentuan Undang-Undang No.42 tahun 2009 pasal 7:    <br>
                        <ol class="ordered-list">
                            <li><span>Sebesar 40% untuk:</span>
                                <ol class="ordered-list-alpha">
                                    <li><span>Objek Pajak perkebunan;</span></li>
                                    <li><span>Objek Pajak Kehutanan;</span></li>
                                    <li><span>Objek Pajak lainnya, yang Wajib Pajaknya perorangan NJOP atas bumi dan bangunan sama atau lebih dari Rp 1.000.000.000,00 (satu miliar rupiah).</span></li>
                                </ol>
                            </li>
                            <li><span>Sebesar 20% untuk: </span>
                                <ol class="ordered-list-alpha">
                                    <li><span>Objek Pajak Pertambangan;</span></li>
                                    <li><span>Objek Pajak lainnya yang NJOP-nya kurang dari Rp 1.000.000.000,00 (satu miliar rupiah).</span></li>
                                </ol> 
                            </li>
                        </ol>
                        </div>
                    </div>
                </div>


                <!-- <div class="col-lg-4 right-contents">
                 
                        <h4 class="title">Reviews</h4>
                        <div class="content">
                            <div class="review-top row pt-40">
                                <div class="col-lg-12">
                                    <h6 class="mb-15">Provide Your Rating</h6>
                                    <div class="d-flex flex-row reviews justify-content-between">
                                        <span>Quality</span>
                                        <div class="rating">
                                                <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                                <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                                <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                                <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                                <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                            </div>
                                        <span>Outstanding</span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                </div> -->
            </div>
        </div>
    </section>
@endsection