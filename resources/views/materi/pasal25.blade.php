@extends('layouts.land')

@section('content')
<!-- learning part start-->
<section class="advance_feature learning_part" style="padding-bottom:0px; z-index: 99;
  padding: 180px 0px 0px;">
        <div class="container">
            <div class="row align-items-sm-center align-items-xl-stretch">
                <div class="col-md-6 col-lg-6">
                    <div class="learning_member_text">
                        <h3>PPh Pasal 25</h3>
                        <h2>Definisi</h2>
                        <p>PPh Pasal 25 merupakan angsuran PPh yang harus dibayar sendiri oleh Wajib Pajak untuk setiap bulan dalam tahun pajak berjalan sebagaimana dimaksud dalam Pasal 25 UU No. 7 Tahun 1983 sebagaimana telah diubah terakhir dengan UU No. 36 Tahun 2008 tentang Pajak Penghasilan. Pembayaran angsuran setiap bulan itu sendiri dimaksudkan untuk meringankan beban Wajib Pajak dalam membayar pajak terutang. 
                        <br>
                        Angsuran PPh Pasal 25 tersebut dapat dijadikan kredit pajak terhadap pajak yang terutang atas seluruh penghasilan Wajib Pajak pada akhir tahun pajak yang dilaporkan dalam Surat Pemberitahuan Tahunan Pajak Penghasilan (SPT Tahunan PPh) 
                        </p>
                        <section class="feature_part">
                            <div class="container">
                                <div class="row" style="margin-left: -20px; margin-top: -30px">                
                                    <a href="{{Route('downloadPasal25' )}}" class="col-sm-4 col-md-12 col-lg-4" style="padding: 7px;">
                                        <div class="single_feature">
                                            <div class="single_feature_part" style="padding-left: 5px 20px">
                                                <span class="single_feature_icon"><i class="ti-layers"></i></span>
                                                <h4>Download Materi</h4>
                                                <p>Download Materi Untuk belajar lebih nyaman</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{Route('latsoalpasal25')}}" class="col-sm-4 col-md-12 col-lg-4" style="padding: 7px;">
                                        <div class="single_feature">
                                            <div class="single_feature_part" style="padding-left: 5px 20px">
                                                <span class="single_feature_icon"><i class="ti-new-window"></i></span>
                                                <h4>Contoh Soal Pajak</h4>
                                                <p>Pelajari perhitungan terkait pajak disini</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{Route('pphpasal25')}}" class="col-sm-4 col-md-12 col-lg-4" style="padding: 7px;">
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
                        <img src="{{url('/')}}/etrain/img/8.svg" width="700px" style="margin-left:40px;" alt="">
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
                        <h4 class="title_top">Cara Menghitung PPh Pasal 25 Untuk Wajib Pajak Baru </h4>
                        <div class="content">
                        <ol class="ordered-list">
                            <li><span>Wajib Pajak baru adalah Wajib Pajak Orang Pribadi dan badan yang baru pertama kali memperoleh penghasilan dari usaha atau pekerjaan bebas dalam tahun pajak berjalan.</span></li>
                            <li><span>Besarnya angsuran Pajak Penghasilan Pasal 25 untuk Wajib Pajak baru adalah sebesar Pajak Penghasilan yang dihitung berdasarkan penerapan tarif umum atas penghasilan neto sebulan yang disetahunkan, dibagi 12. Penghasilan neto adalah: </span>
                                <ol class="ordered-list-alpha">
                                    <li><span> dalam hal Wajib Pajak menyelenggarakan pembukuan dan dari pembukuannya dapat dihitung besarnya penghasilan neto setiap bulan, penghasilan neto fiskal dihitung berdasarkan pembukuannya;</span></li>
                                    <li><span>dalam hal Wajib Pajak hanya menyelenggarakan pencatatan dengan menggunakan Norma Penghitungan Penghasilan Neto atau menyelenggarakan pembukuan tetapi dari pembukuannya tidak dapat dihitung besarnya penghasilan neto setiap bulan, penghasilan neto fiskal dihitung berdasarkan Norma Penghitungan Penghasilan Neto atas peredaran atau penerimaan bruto.</span></li>
                                    <li><span>Untuk WP Badan Baru.</span>
                                        <ol class="ordered-list-roman">
                                            <li><span> Besarnya angsuran PPh Pasal 25 adalah sebesar Pajak Penghasilan yang dihitung berdasarkan penerapan tarif umum atas penghasilan neto sebulan yang disetahunkan, dibagi 12 (dua belas).</span></li>
                                            <li><span> Penghasilan neto adalah dalam hal WP menyelenggarakan pembukuan dan dari pembukuannya dapat dihitung besarnya penghasilan neto setiap bulan, penghasilan neto fiskal dihitung berdasarkan pembukuannya;</span></li>
                                        </ol>
                                    </li>
                                </ol>
                            </li>
                            <li><span> Untuk WP Baru Berupa WP Badan yang Mempunyai Kewajiban Membuat Laporan Berkala Besarnya angsuran Pajak Penghasilan Pasal 25 adalah sebesar Pajak Penghasilan yang dihitung berdasarkan penerapan tarif umum atas proyeksi laba-rugi fiskal pada laporan berkala pertama yang disetahunkan, dibagi 12.</span></li>
                        </ol>
                        Besarnya angsuran Pajak Penghasilan Pasal 25 adalah sebesar Pajak Penghasilan yang dihitung berdasarkan penerapan tarif umum atas proyeksi laba-rugi fiskal pada laporan berkala pertama yang disetahunkan, dibagi 12. <br>
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