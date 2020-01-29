@extends('layouts.land')

@section('content')
<!-- learning part start-->
<section class="advance_feature learning_part" style="padding-bottom:0px; z-index: 99;
  padding: 180px 0px 0px;">
        <div class="container">
            <div class="row align-items-sm-center align-items-xl-stretch">
                <div class="col-md-6 col-lg-6">
                    <div class="learning_member_text">
                        <h3>PPH Pasal 4 Ayat 2</h3>
                        <h2>Definisi</h2>
                        <p>PPh Pasal 4 Ayat (2) adalah pajak yang dipotong dari penghasilan dengan perlakuan tersendiri yang diatur melalui peraturan pemerintah dan bersifat final. Pemotongan PPh Final Pasal 4 Ayat (2) dilkukan oleh pihak pemberi penghasilan sehubungan dengan pembayaran untuk objek tertentu seperti sewa tanah dan/atau bangunan, jasa konstruksi, pengalihan ha katas tanah dan/atau bangunan dan lainnya. Yang dimaksud final disini bahwa pajak yang dipotong, dipungut oleh pihak pemberi penghasilan atau dibayar sendiri oleh pihak penerima penghasilan, penghitungan pajaknya sudah selesai dan tidak dapat dikreditkan lagi dalam penghitungan PPh pada SPT Tahunan. 
                        </p>
                        <section class="feature_part">
                            <div class="container">
                                <div class="row" style="margin-left: -20px; margin-top: -30px">                
                                    <a href="{{Route('downloadPasal4' )}}" class="col-sm-4 col-md-12 col-lg-4" style="padding: 7px;">
                                        <div class="single_feature">
                                            <div class="single_feature_part" style="padding-left: 5px 20px">
                                                <span class="single_feature_icon"><i class="ti-layers"></i></span>
                                                <h4>Download Materi</h4>
                                                <p>Download Materi Untuk belajar lebih nyaman</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{Route('latsoalpasal4')}}" class="col-sm-4 col-md-12 col-lg-4" style="padding: 7px;">
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
                        <img src="{{url('/')}}/etrain/img/3.png" alt="">
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
                        <h4 class="title_top">Ciri-ciri Pph Pasal 4 Ayat 2</h4>
                        <div class="content">
                        <ol class="ordered-list">
                            <li><span>Dikenakan atas penghasilan bruto</span></li>
							<li><span>Tidak dapat dikreditkan terhadap pajak terutang pada akhir tahun pajak</span></li>
                            <li><span>Penghasilan dikenakan PPh final tidak dapat digabungkan dengan penghasilan yang bersifat tidak final pada saat penghitungan PPh terutang pada akhir tahun pajak </span></li>
                            <li><span>Tarif pajak PPh final berbeda-beda</span></li>
							<li><span>Dikenakan atas transaksi atau usaha tertentu walaupun dalam kondisi rugi tetap dikenakan pajak</span></li>
                            <li><span>Setelah pembayaran PPh final maka kewajiban PPh final telah selesai dan hanya dilaporkan di SPT Masa dan SPT Tahunan PPh Orang Pribadi atau Badan</span></li>
                            <li><span>Diatur dalam Peraturan Pemerintah </span>
                        </ol>
                        </div>
                    </div>

                    <h4 class="title">Penghasilan yang dikenakan PPH bersifat final yang diatur dalam PPH Pasal 4 ayat 2 :</h4>
                        <div class="content">
                            <ul class="course_list">
                                <li class="justify-content-between align-items-center d-flex">
                                    <p>1. Pengalihan Hak atas Tanah dan atau Bangunan</p>
                                </li>
                                <li class="justify-content-between align-items-center d-flex">
                                    <p>2. Persewaan Hak atas Tanah dan atau Bangunan</p>
                                </li>
                                <li class="justify-content-between align-items-center d-flex">
                                    <p>3. Bunga Simpanan Koperasi untuk Penghasilan  Bunga Simpanan s/d Rp240.000,-/bulan.</p>
                                </li>
                                <li class="justify-content-between align-items-center d-flex">
                                    <p>4. Dividen dan Bunga Simpanan Koperasi untuk Penghasilan Bunga Simpanan >Rp240.000,-/bulan.</p>
                                </li>
                                <li class="justify-content-between align-items-center d-flex">
                                    <p>5. Bunga Deposito, Tabungan, Sertifikat Bank Indonesia</p>
                                </li>
                                <li class="justify-content-between align-items-center d-flex">
                                    <p>6. Hadiah Undian</p>
                                </li>
                                <li class="justify-content-between align-items-center d-flex">
                                    <p>7. Bunga Obligasi yang diperoleh Wajib Pajak Badan</p>
                                </li>
                                <li class="justify-content-between align-items-center d-flex">
                                    <p>8. Bunga Obligasi yang diperoleh Perusahaan Reksadana</p>
                                </li>
                                <li class="justify-content-between align-items-center d-flex">
                                    <p>9. Usaha Jasa Konstruksi Untuk Kualifikasi Usaha Kecil</p>
                                </li>
                                <li class="justify-content-between align-items-center d-flex">
                                    <p>10. Usaha Jasa Konstruksi Untuk Kualifikasi Usaha Menengah dan Besar</p>
                                </li>
                                <li class="justify-content-between align-items-center d-flex">
                                    <p>11. Usaha Jasa Konstruksi Tidak Memiliki Kualifikasi Usaha.</p>
                                </li>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </section>
@endsection