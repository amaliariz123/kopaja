@extends('layouts.land')

@section('content')
<!-- learning part start-->
<section class="advance_feature learning_part" style="padding-bottom:0px; z-index: 99;
  padding: 180px 0px 0px;">
        <div class="container">
            <div class="row align-items-sm-center align-items-xl-stretch">
                <div class="col-md-6 col-lg-6">
                    <div class="learning_member_text">
                        <h3>PPnBM</h3>
                        <h2>Definisi</h2>
                        <p>PPnBM menurut UU nomor 42 tahun 2009 Pasal 5 adalah pajak yang dikenakan pada barang yang tergolong mewah yang dilakukan oleh produsen (pengusaha) untuk menghasilkan atau mengimpor dalam kegiatan usaha atau pekerjaannya. 
                        </p>
                        <section class="feature_part">
                            <div class="container">
                                <div class="row" style="margin-left: -20px; margin-top: -30px">                
                                    <a href="{{Route('downloadPpnbn' )}}" class="col-sm-4 col-md-12 col-lg-4" style="padding: 7px;">
                                        <div class="single_feature">
                                            <div class="single_feature_part" style="padding-left: 5px 20px">
                                                <span class="single_feature_icon"><i class="ti-layers"></i></span>
                                                <h4>Download Materi</h4>
                                                <p>Download Materi Untuk belajar lebih nyaman</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{Route('latsoalppnbm')}}" class="col-sm-4 col-md-12 col-lg-4" style="padding: 7px;">
                                        <div class="single_feature">
                                            <div class="single_feature_part" style="padding-left: 5px 20px">
                                                <span class="single_feature_icon"><i class="ti-new-window"></i></span>
                                                <h4>Contoh Soal Pajak</h4>
                                                <p>Pelajari perhitungan terkait pajak disini</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{Route('soalppnbm')}}" class="col-sm-4 col-md-12 col-lg-4" style="padding: 7px;">
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
                        <img src="{{url('/')}}/etrain/img/11.svg" width="600px" alt="">
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
                        <h4 class="title_top">Karakteristik PPnBM (Pajak Penjualan Atas Barang Mewah)  </h4>
                        <div class="content">
                        Adapun karakteristik dari Pajak Penjualan atas Barang Mewah (PPnBM) adalah sebagai berikut:  <br>
                        <ol class="ordered-list">
                            <li><span>engenaan pajak ini hanya satu kali yaitu pada saat penyerahan Barang Kena Pajak (BKP) yang tergolong mewah oleh pengusaha yang menghasilkan atau pada saat impor.</span></li>
                            <li><span>PPnBM tidak dapat dilakukan pengkreditannya dengan PPN. Namun demikian, apabila eksportir mengekspor BKP yang tergolong mewah, maka PPnBM yang telah dibayar pada saat perolehan dapat diizinkan.</span></li>
                            <li><span>Tidak memerhatikan apakah impor tersebut dilakukan secara terus-menerus atau satu kali.</span></li>
                            <li><span>Penyerahan BKP yang tergolong mewah tidak memerhatikan apakah suatu bagian dari BKP tersebut telah dikenakan atau tidak dikenakan PPnBM pada transaksi sebelumnya.</span></li>
                        </ol>
                        </div>
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title_top">Tarif PPnBM (Pajak Penjualan Atas Barang Mewah)   </h4>
                        <div class="content">
                        Menurut Pasal 8 Undang-Undang No. 42 Tahun 2009, tarif pajak penjualan atas barang mewah ditetapkan paling rendah 10% (sepuluh persen) dan paling tinggi sebesar 200% (dua ratus persen). Jika pengusaha melakukan ekspor Barang Kena Pajak yang tergolong mewah maka akan dikenai pajak dengan tarif sebesar 0% (nol persen). 
                        <br>
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