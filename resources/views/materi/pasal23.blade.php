@extends('layouts.land')

@section('content')
<!-- learning part start-->
<section class="advance_feature learning_part" style="padding-bottom:0px; z-index: 99;
  padding: 180px 0px 0px;">
        <div class="container">
            <div class="row align-items-sm-center align-items-xl-stretch">
                <div class="col-md-6 col-lg-6">
                    <div class="learning_member_text">
                        <h3>PPH Pasal 23</h3>
                        <h2>Definisi</h2>
                        <p>PPh Pasal 23 merupakan yang dipotong atas penghasilan yang diterima atau diperoleh Wajib Pajak dalam negeri (orang pribadi dan badan) dan bentuk usaha tetap yang berasal dari modal, penyerahan jasa, atau penyelenggaraan kegiatan selain yang telah dipotong PPh Pasal 21. PPh Pasal 23 ini dibayar atau terutang oleh badan pemerintah atau subjek pajak dalam negeri, penyelenggaraan kegiatan, bentuk usaha tetap, atau perwakilan perusahaan luar negeri lainnya.
                        </p>
                        <section class="feature_part">
                            <div class="container">
                                <div class="row" style="margin-left: -20px; margin-top: -30px">                
                                    <a href="{{Route('downloadPasal23' )}}" class="col-sm-4 col-md-12 col-lg-4" style="padding: 7px;">
                                        <div class="single_feature">
                                            <div class="single_feature_part" style="padding-left: 5px 20px">
                                                <span class="single_feature_icon"><i class="ti-layers"></i></span>
                                                <h4>Download Materi</h4>
                                                <p>Download Materi Untuk belajar lebih nyaman</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{Route('latsoalpasal23')}}" class="col-sm-4 col-md-12 col-lg-4" style="padding: 7px;">
                                        <div class="single_feature">
                                            <div class="single_feature_part" style="padding-left: 5px 20px">
                                                <span class="single_feature_icon"><i class="ti-new-window"></i></span>
                                                <h4>Contoh Soal Pajak</h4>
                                                <p>Pelajari perhitungan terkait pajak disini</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{Route('pphpasal23')}}" class="col-sm-4 col-md-12 col-lg-4" style="padding: 7px;">
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
                        <img src="{{url('/')}}/etrain/img/6.svg" width="700px" style="margin-left:50px;" alt="">
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
                        <h4 class="title_top">Pemotong PPh Pasal 23 </h4>
                        <div class="content">
                        <ol class="ordered-list">
                            <li><span>Badan pemerintah, subjek pajak badan dalam negeri, penyelenggara kegiatan, bentuk usaha tetap, atau perwakilan perusahaan luar negeri lainnya.</span></li>
                            <li><span>Wajib Pajak Orang Pribadi dalam negeri yang ditunjuk sebagai pemotong PPh 23, yaitu :</span>
                                <ol class="ordered-list-alpha">
                                    <li><span>Akuntan, Arsitek, Dokter, Notaris, Pejabat Pembuat Akte Tanah (PPAT) kecuali PPAT tersebut adalah Camat, pengacara, dan konsultan, yang melakukan pekerjaan bebas;</span></li>
                                    <li><span>Orang Pribadi yang menjalankan usaha yang menyelenggarakan pembukuan</span></li>
                                </ol>
                            </li>
                        </ol>
                        Kepala Kantor Pelayanan Pajak menerbitkan Surat Keputusan Penunjukan sebagai Pemotong Pajak Penghasilan Pasal 23 kepada Wajib Pajak Orang Pribadi dalam negeri tertentu yang telah terdaftar sebagai Wajib Pajak. Wajib Pajak Orang Pribadi dalam negeri tertentu wajib memotong Pajak Penghasilan Pasal 23 atas pembayaran berupa sewa<br>
                        </div>
                    </div>

                    
                </div>

<!-- 
                <div class="col-lg-4 right-contents">
                 
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