@extends('layouts.land')

@section('content')
<!-- learning part start-->
<section class="advance_feature learning_part" style="padding-bottom:0px; z-index: 99;
padding: 180px 0px 0px;">
        <div class="container">
            <div class="row align-items-sm-center align-items-xl-stretch">
                <div class="col-md-6 col-lg-6">
                    <div class="learning_member_text">
                        <h3>PPH Pasal 21</h3>
                        <h2>Definisi</h2>
                        <p>PPh Pasal 21 adalah pajak yang dipotong dari penghasilan sehubungan dengan pekerjaan, jasa, dan kegiatan yang dilakukan oleh Wajib Pajak (WP) orang pribadi dalam negeri, yaitu penghasilan berupa gaji, upah, honorarium, tunjangan, serta pembayaran lain dengan nama dan dalam bentuk apapun. Apabila penghasilan tersebut yang menerima adalah Wajib Pajak luar negeri maka diatur dalam Pasal 26 UU PPh yang selanjutnya disebut PPh Pasal 26.
                        </p>
                        <section class="feature_part">
                            <div class="container">
                                <div class="row" style="margin-left: -20px; margin-top: -30px">                
                                    <a href="{{Route('downloadPasal21' )}}" class="col-sm-4 col-md-12 col-lg-4" style="padding: 7px;">
                                        <div class="single_feature">
                                            <div class="single_feature_part" style="padding-left: 5px 20px">
                                                <span class="single_feature_icon"><i class="ti-layers"></i></span>
                                                <h4>Download Materi</h4>
                                                <p>Download Materi Untuk belajar lebih nyaman</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{Route('latsoalpasal21')}}" class="col-sm-4 col-md-12 col-lg-4" style="padding: 7px;">
                                        <div class="single_feature">
                                            <div class="single_feature_part" style="padding-left: 5px 20px">
                                                <span class="single_feature_icon"><i class="ti-new-window"></i></span>
                                                <h4>Contoh Soal Pajak</h4>
                                                <p>Pelajari perhitungan terkait pajak disini</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{Route('soalpphpasal21')}}" class="col-sm-4 col-md-12 col-lg-4" style="padding: 7px;">
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
                        <img src="{{url('/')}}/etrain/img/1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- learning part end-->

    <!--================ Start Course Details Area =================-->
    <section class="course_details_area section_padding" style="padding-top:70px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 course_details_left">
                    <div class="content_wrapper">
                        <h4 class="title_top">Tarif PPh Pasal 21</h4>
                        <div class="content">
                        PPh pasal 21 yang dipotong oleh pemotong pajak secara umum dirumuskan sebagai berikut: <br>
                        <b>PPh Pasal 21 = Tarif x Dasar Pengenaan Pajak</b> <br>
                        Tarif pasal 17 Ayat (1) huruf a Undang-Undang No. 36 Tahu 2008 dengan ketentuan sebagai berikut:<br>
                        </div>
                    </div>
                    <br>
                    <div class="progress-table-wrap" style="width:550px; overflow-x:hidden;">
                          <div class="progress-table">
                            <div class="table-head" style="margin-left:40px">
                              <div class="country"  style="width:370px;" >Penghasilan Kena Pajak</div>
                              <div class="country"  >Tarif Pajak</div>
                            </div>
                            <div class="table-head"  style="margin-left:40px">
                              <div class="country" style="width:400px;">Rp0 s/d Rp50.000.000</div>
                              <div class="country">5%</div>
                            </div>
                            <div class="table-head"  style="margin-left:40px">
                              <div class="country" style="width:400px;"> Diatas Rp50.000.000 s/d Rp250.000.000,-</div>
                              <div class="country">15%</div>
                            </div>
                            <div class="table-head"  style="margin-left:40px">
                              <div class="country" style="width:400px;">Diatas Rp250.000.000 s/d Rp500.000.000,-</div>
                              <div class="country">25%</div>
                            </div>
                            <div class="table-head"  style="margin-left:40px">
                              <div class="country" style="width:400px;">Diatas Rp500.000.000,-</div>
                              <div class="country">30%</div>
                            </div>
                        </div>
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title_top">Penghasilan Tidak Kena Pajak (PTKP) PPh Pasal 21</h4>
                        <div class="content">
                        PTKP ditentukan oleh keadaan pada awal tahun pajak atau awal bagian tahun pajak: <br>
                        </div>
                    </div>
                    <br>
                    <div class="progress-table-wrap" style="width:85%; overflow-x:hidden; ">
                          <div class="progress-table" style=" padding: 0px 0px 30px 0px">
                            <div class="table-head" style="margin-left:40px">
                              <div class="country"  style="width:400px;" >Uraian</div>
                              <div class="country"  style="margin-left:40px">PTKP Setahun</div>
                            </div>
                            <div class="table-head"  style="margin-left:40px">
                              <div class="country" style="width:400px;">Untuk diri Wajib Pajak Orang Pribadi </div>
                              <div class="country" style="margin-left:40px">Rp54.000.000,-</div>
                            </div>
                            <div class="table-head"  style="margin-left:40px">
                              <div class="country" style="width:400px;"> Tambahan untuk Wajib Pajak yang kawin </div>
                              <div class="country" style="margin-left:40px">Rp  4.500.000,-</div>
                            </div>
                            <div class="table-head"  style="margin-left:40px">
                              <div class="country" style="width:400px;">Tambahan untuk seorang istri yang penghasilannya digabung dengan penghasilan suami </div>
                              <div class="country" style="margin-left:40px">Rp54.000.000,-</div>
                            </div>
                            <div class="table-head"  style="margin-left:40px">
                              <div class="country" style="width:400px;">Tambahan untuk setiap anggota keluarga sedarah dan keluarga semenda dalam garis keturunan lurus serta anak angkat; yang menjadi tanggungan sepenuhnya, paling banyak 3 orang untuk setiap keluarga.</div>
                              <div class="country" style="margin-left:40px">Rp  4.500.000,-</div>
                            </div>
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