@extends('layouts.land')

@section('content')
<!-- learning part start-->
<section class="advance_feature learning_part" style="padding-bottom:0px; z-index: 99;
  padding: 180px 0px 0px;">
        <div class="container">
            <div class="row align-items-sm-center align-items-xl-stretch">
                <div class="col-md-6 col-lg-6">
                    <div class="learning_member_text">
                        <h3>Pajak Provinsi</h3>
                        <h2>Definisi</h2>
                        <p>Salah satu pajak yang dikelola oleh Pemerintah Daerah adalah Pajak Provinsi. Pendapatan Pajak Provinsi berlaku untuk Pajak Kendaraan Bermotor, Pajak Air Permukaan, Pajak Bahan Bakar Kendaraan Bermotor, Pajak Rokok, dan Bea Balik Nama Kendaraan Bermotor. Semua jenis pajak itu dikelola oleh Pemerintah Provinsi
                        </p>
                        <section class="feature_part">
                            <div class="container">
                                <div class="row" style="margin-left: -20px; margin-top: -30px">                
                                    <a href="{{Route('downloadPajakProv' )}}" class="col-sm-4 col-md-12 col-lg-4" style="padding: 7px;">
                                        <div class="single_feature">
                                            <div class="single_feature_part" style="padding-left: 5px 20px">
                                                <span class="single_feature_icon"><i class="ti-layers"></i></span>
                                                <h4>Download Materi</h4>
                                                <p>Download Materi Untuk belajar lebih nyaman</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{Route('latsoalpajakprov')}}" class="col-sm-4 col-md-12 col-lg-4" style="padding: 7px;">
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
                        <img src="{{url('/')}}/etrain/img/15.svg"  alt="">
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
                        <h4 class="title_top">Jenis-Jenis Pajak Provinsi  </h4>
                        <div class="content" style="margin-right: 50px;">
                            <table class="table">
                              <thead style="background-color: #ff8600; color: white">
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Pajak Provinsi </th>
                                  <th scope="col" style="width: 20%;">Tarif Maksimal</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr style="background-color: #ffedd9">
                                  <td>1</td>
                                  <td>Pajak Kendaraan Bermotor :</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td>A. Kepemilikan kendaraan bermotor pribadi pertama</td>
                                  <td>1% - 2%</td>
                                </tr>   
                                <tr>
                                  <td>&nbsp;</td>
                                  <td>B. Kepemilikan kendaraan bermotor pribadi kedua dan seterusnya</td>
                                  <td>2% - 10%</td>
                                </tr>      
                                <tr>
                                  <td>&nbsp;</td>
                                  <td>C. Tarif PKB alat berat dan alat alat besar</td>
                                  <td>0,1% - 0,2%</td>
                                </tr>                              
                                <tr>
                                  <td>&nbsp;</td>
                                  <td>D. Tarif PKB untuk angkutan umum, ambulans, pemadaman kebakaran, sosial keagamaan, lembaga sosial dan keagamaan, pemerintah/TNI/Polri, Pemda.</td>
                                  <td>0,5% - 1%</td>
                                </tr>
                                <tr style="background-color: #ffedd9">
                                  <td>2</td>
                                  <td>Bea Balik Nama Kendaraan Bermotor :</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td>A. Penyerahan pertama</td>
                                  <td>20%</td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td>B. Penyerahan kedua dan seterusnya </td>
                                  <td>1%</td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td>C. Penyerahan pertama alat alat berat dan alat alat besar</td>
                                  <td>0,75%</td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td>D. Penyerahan kedua dan seterusnya alat alat berat dan alat alat besar</td>
                                  <td>0,075%</td>
                                </tr>
                                <tr style="background-color: #ffedd9">
                                  <td>3</td>
                                  <td>Pajak Bahan Bakar Kendaraan Bermotor</td>
                                  <td>10%</td>
                                </tr>
                                <tr style="background-color: #ffedd9">
                                  <td>4</td>
                                  <td>Pajak Air Permukaan, dan </td>
                                  <td>10%</td>
                                </tr>
                                <tr style="background-color: #ffedd9">
                                  <td>5</td>
                                  <td>Pajak Rokok (definitif)</td>
                                  <td>10%</td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                    </div>
            

                    <div class="content_wrapper">
                        <h4 class="title_top">Pengelompokan Pajak Provinsi Berdasarkan Jenis, Objek dan Subjeknya</h4>
                        <div class="content" style="margin-right: 50px;">
                            <table class="table">
                              <thead style="background-color: #ff8600; color: white">
                                <tr>
                                  <th scope="col" style="width: 10%">No</th>
                                  <th scope="col" style="width: 30%">Jenis Pajak Provinsi</th>
                                  <th scope="col" style="width: 30%">Objek Pajak Provinsi</th>
                                  <th scope="col" style="width: 30%">Subjek Pajak Provinsi</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>Pajak Kendaraan Bermotor (Oficial Assesment)</td>
                                  <td>Kepemilikan dan/atau penguasaan Kendaraan Bermotor</td>
                                  <td>Orang pribadi atau Badan yang memiliki dan/atau menguasai Kendaraan Bermotor</td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td>Bea Balik Nama Kendaraan Bermotor (Oficial Assesment)</td>
                                  <td>Penyerahan Kepemilikan Kendaraan Bermotor</td>
                                  <td>Orang pribadi atau Badan yang dapat menerima penyerahan Kendaraan Bermotor</td>
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td>Pajak Bahan Bakar Kendaraan Bermotor (Oficial Assesment) </td>
                                  <td>Bahan Bakar Kendaraan Bermotor yang disediakan atau dianggap digunakan untuk kendaraan bermotor, termasuk bahan bakar yang digunakan untuk kendaraan di air</td>
                                  <td>Konsumen Bahan Bakar Kendaraan Bermotor</td>
                                </tr>
                                <tr>
                                  <td>4</td>
                                  <td>Pajak Air Permukaan (Self Assesment)</td>
                                  <td>Pengambilan dan/atau pemanfaatan Air Permukaan</td>
                                  <td>Orang pribadi atau Badan yang dapat melakukan pengambilan dan/atau pemanfaatan Air Permukaan </td>
                                </tr>
                                <tr>
                                  <td>5</td>
                                  <td>Pajak Rokok (Oficial Assesment)</td>
                                  <td>Konsumsi Rokok</td>
                                  <td>Konsumsi Rokok</td>
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