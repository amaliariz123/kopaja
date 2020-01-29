@extends('layouts.land')

@section('content')
<!-- learning part start-->
<section class="advance_feature learning_part" style="padding-bottom:0px; z-index: 99;
  padding: 180px 0px 0px;">
        <div class="container">
            <div class="row align-items-sm-center align-items-xl-stretch">
                <div class="col-md-6 col-lg-6">
                    <div class="learning_member_text">
                        <h3>PPB</h3>
                        <h2>Definisi</h2>
                        <p>Pajak Bumi dan Bangunan (PBB) adalah pajak Negara yang dikenakan terhadap bumi dan/atau bangunan berdasarkan Undang-Undang No. 12 Tahun 1985 tentang Bumi dan Bangunan sebagaimana telah diubah terakhir dengan Undang-Undang No. 12 Tahun 1994. “PBB adalah pajak kebendaan atas bumi dan/atau bangunan yang dikenakan terhadap orang atau badan yang secara nyata mempunyai suatu hak atas bumi, dan/atau memperoleh manfaat atas bumi, dan/atau memiliki, menguasai, dan/atau memperoleh manfaat atas bangunan. PBB termasuk dalam pengertian pajak objektif, artinya besarnya pajak terutang ditentukan oleh keadaan objek pajak, yaitu tanah dan/atau bangunan, sedangkan keadaan subjek pajaknya tidak menentukan besarnya pajak”. 
                        </p>
                        <section class="feature_part">
                            <div class="container">
                                <div class="row" style="margin-left: -20px; margin-top: -30px">                
                                    <a href="{{Route('downloadPbb' )}}" class="col-sm-4 col-md-12 col-lg-4" style="padding: 7px;">
                                        <div class="single_feature">
                                            <div class="single_feature_part" style="padding-left: 5px 20px">
                                                <span class="single_feature_icon"><i class="ti-layers"></i></span>
                                                <h4>Download Materi</h4>
                                                <p>Download Materi Untuk belajar lebih nyaman</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{Route('latsoalpbb')}}" class="col-sm-4 col-md-12 col-lg-4" style="padding: 7px;">
                                        <div class="single_feature">
                                            <div class="single_feature_part" style="padding-left: 5px 20px">
                                                <span class="single_feature_icon"><i class="ti-new-window"></i></span>
                                                <h4>Contoh Soal Pajak</h4>
                                                <p>Pelajari perhitungan terkait pajak disini</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{Route('soalpbb')}}" class="col-sm-4 col-md-12 col-lg-4" style="padding: 7px;">
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
                        <img src="{{url('/')}}/etrain/img/12.svg" width="700px" style="margin-left:50px;" alt="">
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
                        a. Wajib Pajak baru adalah Wajib Pajak Orang Pribadi dan badan yang baru pertama kali memperoleh penghasilan dari usaha atau pekerjaan bebas dalam tahun pajak berjalan.<br>
                        b. Besarnya angsuran Pajak Penghasilan Pasal 25 untuk Wajib Pajak baru adalah sebesar Pajak Penghasilan yang dihitung berdasarkan penerapan tarif umum atas penghasilan neto sebulan yang disetahunkan, dibagi 12. Penghasilan neto adalah: <br>
                            1)  dalam hal Wajib Pajak menyelenggarakan pembukuan dan dari pembukuannya dapat dihitung besarnya penghasilan neto setiap bulan, penghasilan neto fiskal dihitung berdasarkan pembukuannya;   <br>
                            2)  dalam hal Wajib Pajak hanya menyelenggarakan pencatatan dengan menggunakan Norma Penghitungan Penghasilan Neto atau menyelenggarakan pembukuan tetapi dari pembukuannya tidak dapat dihitung besarnya penghasilan neto setiap bulan, penghasilan neto fiskal dihitung berdasarkan Norma Penghitungan Penghasilan Neto atas peredaran atau penerimaan bruto.  <br>
                            3)  Untuk WP Badan Baru <br>
                                Besarnya angsuran PPh Pasal 25 adalah sebesar Pajak Penghasilan yang dihitung berdasarkan penerapan tarif umum atas penghasilan neto sebulan yang disetahunkan, dibagi 12 (dua belas). <br>
                                Penghasilan neto adalah dalam hal WP menyelenggarakan pembukuan dan dari pembukuannya dapat dihitung besarnya penghasilan neto setiap bulan, penghasilan neto fiskal dihitung berdasarkan pembukuannya; <br>
                        c.  Untuk WP Baru Berupa WP Badan yang Mempunyai Kewajiban Membuat Laporan Berkala <br>        
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