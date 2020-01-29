@extends('layouts.land')

@section('content')
<!-- learning part start-->
<section class="advance_feature learning_part" style="padding-bottom:0px; z-index: 99;
  padding: 180px 0px 0px;">
        <div class="container">
            <div class="row align-items-sm-center align-items-xl-stretch">
                <div class="col-md-6 col-lg-6">
                    <div class="learning_member_text">
                        <h3>Pajak Kabupaten</h3>
                        <h2>Definisi</h2>
                        <p>Salah satu pajak yang dikelola oleh Pemerintah Kabupaten dan Kota. Ada beberapa jenis pajak seperti Pajak Reklame, Pajak Parkir, Pajak Hiburan, Pajak Hotel dan Restoran, Pajak Penerangan Jalan, Pajak Air Tanah, Bea Perolahan Hak atas Tanah dan Bangunan, Pajak Sarang Burung Walet, dan Pajak Bumi dan Bangunan. 
                        </p>
                        <section class="feature_part">
                            <div class="container">
                                <div class="row" style="margin-left: -20px; margin-top: -30px">                
                                    <a href="{{Route('downloadPajakKab' )}}" class="col-sm-4 col-md-12 col-lg-4" style="padding: 7px;">
                                        <div class="single_feature">
                                            <div class="single_feature_part" style="padding-left: 5px 20px">
                                                <span class="single_feature_icon"><i class="ti-layers"></i></span>
                                                <h4>Download Materi</h4>
                                                <p>Download Materi Untuk belajar lebih nyaman</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{Route('latsoalpajakkab')}}" class="col-sm-4 col-md-12 col-lg-4" style="padding: 7px;">
                                        <div class="single_feature">
                                            <div class="single_feature_part" style="padding-left: 5px 20px">
                                                <span class="single_feature_icon"><i class="ti-new-window"></i></span>
                                                <h4>Contoh Soal Pajak</h4>
                                                <p>Pelajari perhitungan terkait pajak disini</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{Route('pajakprovdankab')}}" class="col-sm-4 col-md-12 col-lg-4" style="padding: 7px;">
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
                        <img src="{{url('/')}}/etrain/img/13.svg" width="700px" style="margin-left:30px;" alt="">
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
                        <h4 class="title_top">Jenis-Jenis Pajak Kabupaten/Kota  </h4>
                        <div class="content" style="margin-right: 50px;">
                            <table class="table">
                              <thead style="background-color: #ff8600; color: white">
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Pajak Kabupaten/Kota</th>
                                  <th scope="col" style="width: 20%;">Tarif Maksimal</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr style="background-color: #ffedd9">
                                  <td>1</td>
                                  <td>Pajak Hotel</td>
                                  <td>10%</td>
                                </tr>
                                <tr style="background-color: #ffedd9">
                                  <td>2</td>
                                  <td>Pajak Restoran</td>
                                  <td>10%</td>
                                </tr>
                                <tr style="background-color: #ffedd9">
                                  <td>3</td>
                                  <td>Pajak Hiburan</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td>A. Hiburan umum maksimal</td>
                                  <td>35%</td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td>B. Hiburan khusus</td>
                                  <td>75%</td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td>C.  Hiburan khusus Hiburan rakyat/tradisional</td>
                                  <td>10%</td>
                                </tr>
                                <tr style="background-color: #ffedd9">
                                  <td>4</td>
                                  <td>Pajak Reklame</td>
                                  <td>25%</td>
                                </tr>
                                <tr style="background-color: #ffedd9">
                                  <td>5</td>
                                  <td>Pajak Penerangan Jalan (PPJ)</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td>A. PPJ Umum</td>
                                  <td>10%</td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td>B. PPJ dari sumber lain oleh industry, pertambangan, minyak bumi dan gas alam.</td>
                                  <td>3%</td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td>C. PPJ yang dihasilkan sendiri</td>
                                  <td>1,5%</td>
                                </tr>
                                <tr style="background-color: #ffedd9">
                                  <td>6</td>
                                  <td>Pajak Parkir </td>
                                  <td>30%</td>
                                </tr>
                                <tr style="background-color: #ffedd9">
                                  <td>7</td>
                                  <td>Pajak Mineral Bukan Logam dan Batuan</td>
                                  <td>25%</td>
                                </tr>
                                <tr style="background-color: #ffedd9">
                                  <td>8</td>
                                  <td>Pajak Air Tanah</td>
                                  <td>20%</td>
                                </tr>
                                <tr style="background-color: #ffedd9">
                                  <td>9</td>
                                  <td>Pajak Sarang Burung Walet</td>
                                  <td>10%</td>
                                </tr>
                                <tr style="background-color: #ffedd9">
                                  <td>10</td>
                                  <td>PBB Perdesaan Perkotaan</td>
                                  <td>0,3%</td>
                                </tr>
                                <tr style="background-color: #ffedd9">
                                  <td>11</td>
                                  <td>Bea Perolehan Hak Atas Tanah dan Bangunan</td>
                                  <td>5%</td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 course_details_left">
                    <div class="content_wrapper">
                        <h4 class="title_top">Pengelompokan Pajak Kabupaten/Kota Berdasarkan Jenis, Objek dan Subjeknya</h4>
                        <div class="content" style="margin-right: 50px;">
                            <table class="table">
                              <thead style="background-color: #ff8600; color: white">
                                <tr>
                                  <th scope="col" style="width: 10%">No</th>
                                  <th scope="col" style="width: 30%">Jenis Pajak Kabupaten/Kota</th>
                                  <th scope="col" style="width: 30%">Objek Pajak Kabupaten/Kota</th>
                                  <th scope="col" style="width: 30%">Subjek Pajak Kabupaten/Kota</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>Pajak Hotel (Self Assesment)</td>
                                  <td>Pelayanan yang disediakan oleh hotel dengan pembayaran, termasuk jasa penunjang sebagai kelengkapan hotel yang sifatnya memberikan kemudahan dan kenyamanan, termasuk fasilitas olahraga dan hiburan</td>
                                  <td>Orang pribadi atau Badan yang melakukan pembayaran kepada orang pribadi atau badan yang mengusahakan hotel</td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td>Pajak Restoran (Self Assesment)</td>
                                  <td>Pelayanan yang disediakan oleh restoran</td>
                                  <td>Orang pribadi atau Badan yang membeli makanan/minuman dari restoran.</td>
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td>Pajak Hiburan (Self Assesment)</td>
                                  <td>Jasa penyelenggaraan Hiburan dengan dipungut bayaran</td>
                                  <td>Orang pribadi atau badan yang menikmati hiburan.</td>
                                </tr>
                                <tr>
                                  <td>4</td>
                                  <td>Pajak Reklame (Self Assesment)</td>
                                  <td>Semua penyelenggaraan reklame</td>
                                  <td>Orang pribadi atau badan yang menggunakan reklame.</td>
                                </tr>
                                <tr>
                                  <td>5</td>
                                  <td>Pajak Penerangan Jalan (Oficial Assesment)</td>
                                  <td>Penggunaan tenaga listrik, baik yang dihasilkan sendiri maupun yang diperoleh dari sumber lain.</td>
                                  <td>Orang pribadi atau Badan yang dapat menggunakan tenaga listrik.</td>
                                </tr>
                                <tr>
                                  <td>6</td>
                                  <td>Pajak Parkir (Self Assesment)</td>
                                  <td>Penyelenggaraan tempat Parkir diluar badan jalan, baik yang disediakan berkaitan dengan pokok usaha maupun yang disediakan sebagai suatu usaha, termasuk penyediaan tempat penitipan kendaraan bermotor.</td>
                                  <td>Orang pribadi atau Badan yang melakukan parkir kendaraan bermotor</td>
                                </tr>
                                <tr>
                                  <td>7</td>
                                  <td>Pajak Mineral Bukan Logam dan Batuan (Self Assesment)</td>
                                  <td>Kegiatan pengambilan Mineral Bukan Logam dan Batuan.</td>
                                  <td>Orang pribadi atau badan yang dapat mengambil Mineral Bukan Logam dan Batuan.</td>
                                </tr>
                                <tr>
                                  <td>8</td>
                                  <td>Pajak Air Tanah (Self Assesment)</td>
                                  <td>Pengambilan dan/atau pemanfaatan Air Tanah</td>
                                  <td>Orang pribadi atau badan yang melakukan pengambilan dan/atau pemanfaatan Air Tanah</td>
                                </tr>
                                <tr>
                                  <td>9</td>
                                  <td>Pajak Sarang Burung Walet (Self Assesment)</td>
                                  <td>Pengambilan dan/atau pengusahaan Sarang Burung Walet</td>
                                  <td>Orang pribadi atau badan yang melakukan pengambilan dan/atau mengusahakan Sarang Burung Walet</td>
                                </tr>
                                <tr>
                                  <td>10</td>
                                  <td>PBB Perdesaan & Perkotaan (oficial assesment)</td>
                                  <td>Bumi dan/atau Bangunan yang dimiliki, dikuasai, dan/atau dimanfaatkan oleh orang pribadi atau Badan, kecuali kawasan yang digunakan untuk kegiatan usaha perkebunan, perhutanan, dan pertambangan</td>
                                  <td>Orang pribadi atau Badan yang secara nyata mempunyai suatu hak atau Bumi dan /atau mempero leh manfaat atas Bumi, dan/atau memiliki, menguasai, dan atau memperoleh manfaat atas Bangunan.</td>
                                </tr>
                                <tr>
                                  <td>11</td>
                                  <td>Bea Perolehan Hak Atas Tanah dan Bangunan (oficial assesment)</td>
                                  <td>Perolehan Hak atas Tanah dan/atau Bangunan</td>
                                  <td>Orang pribadi atau Badan yang memperoleh Hak atas Tanah dan/atau Bangunan</td>
                                </tr>
                              </tbody>
                            </table>
                            Sumber: UU No. 28 Tahun 200 dan PP No. 91 Tahun 2010
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