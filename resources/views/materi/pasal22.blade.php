@extends('layouts.land')

@section('content')
<!-- learning part start-->
<section class="advance_feature learning_part" style="padding-bottom:0px; z-index: 99;
  padding: 180px 0px 0px;">
        <div class="container">
            <div class="row align-items-sm-center align-items-xl-stretch">
                <div class="col-md-6 col-lg-6">
                    <div class="learning_member_text">
                        <h3>PPH Pasal 22</h3>
                        <h2>Definisi</h2>
                        <p>PPh Pasal 22 merupakan pajak yang dipungut oleh bendaharawan pemerintah, baik Pemerintah Pusat maupun Pemerintah Daerah; instansi atau Lembaga pemerintah dan Lembaga-lembaga negara lain yang berkenaan dengan pembayaran atas penyerahan barang; dan badan-badan tertentu, baik badan pemerintah maupun swasta, berkenaan dengan kegiatan di bidang impor atau kegiatan usaha di bidang lain.  
                        <br>
                        PPh Pasal 22 dibayar dalam tahun berjalan melalui pemotongan atau pemungutan oleh pihak-pihak tertentu. Selanjutnya, pemotong/pemungut akan menyetor dan melaporkan pajak yang telah dipotong/dipungut
                        </p>
                        <section class="feature_part">
                            <div class="container">
                                <div class="row" style="margin-left: -20px; margin-top: -30px">                
                                    <a href="{{Route('downloadPasal22' )}}" class="col-sm-4 col-md-12 col-lg-4" style="padding: 7px;">
                                        <div class="single_feature">
                                            <div class="single_feature_part" style="padding-left: 5px 20px">
                                                <span class="single_feature_icon"><i class="ti-layers"></i></span>
                                                <h4>Download Materi</h4>
                                                <p>Download Materi Untuk belajar lebih nyaman</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{Route('latsoalpasal22')}}" class="col-sm-4 col-md-12 col-lg-4" style="padding: 7px;">
                                        <div class="single_feature">
                                            <div class="single_feature_part" style="padding-left: 5px 20px">
                                                <span class="single_feature_icon"><i class="ti-new-window"></i></span>
                                                <h4>Contoh Soal Pajak</h4>
                                                <p>Pelajari perhitungan terkait pajak disini</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{Route('pphpasal22')}}" class="col-sm-4 col-md-12 col-lg-4" style="padding: 7px;">
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
                        <img src="{{url('/')}}/etrain/img/2.svg" width="700px" alt="">
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
                        <h4 class="title_top">Tarif PPh Pasal 22 </h4>
                        <div class="content" style="margin-right: 50px;">
                            <table class="table">
                              <thead style="background-color: #ff8600; color: white">
                                <tr>
                                  <th scope="col" style="width: 10%">No</th>
                                  <th scope="col" style="width: 30%">Jenis PPh Pasal 22 </th>
                                  <th scope="col" style="width: 30%">Tarif Pajak </th>
                                  <th scope="col" style="width: 30%">Keterangan</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>PPh Pasal Impor</td>
                                  <td>
                                    <ul class="unordered-list">
                                            <li>2,5% Angka Pengenal Impor (API) </li>
                                            <li>7,5% (Tanpa API)  </li>
                                            <li>0,5% (Kedelai, Gandum, Terigu dengan API) </li>
                                    </ul>
                                  </td>
                                  <td>Nilai Impor</td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td>PPh Pasal Impor</td>
                                  <td>7,5% x (yang tidak dikuasai) </td>
                                  <td>Harga Jual Lelang </td>
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td>Bendahara Pemerintah, Kuasa, Pengguna Anggaran, Pejabat, Penerbit SPM, Bendahara Pengeluaran </td>
                                  <td>1,5%</td>
                                  <td>Harga Beli</td>
                                </tr>
                                <tr>
                                  <td>4</td>
                                  <td>Pedagang Pengumpul</td>
                                  <td>0,25%</td>
                                  <td>Harga Beli </td>
                                </tr>
                                <tr>
                                  <td>5</td>
                                  <td>Migas</td>
                                  <td>
                                    <ul class="unordered-list">
                                            <li>0,25% BBM ke SPBU Pertamina </li>
                                            <li>0,3% BBM ke SPBU Non Pertamina   </li>
                                            <li>0,3% BBG  </li>
                                            <li>0,3% Pelumas  </li>
                                    </ul>
                                  </td>
                                  <td>Penjualan</td>
                                </tr>
                                <tr>
                                  <td>6</td>
                                  <td>Industri</td>
                                  <td>
                                    <ul class="unordered-list">
                                            <li>0,25% Semen  </li>
                                            <li>0,1% Kertas    </li>
                                            <li>0,3% Baja   </li>
                                            <li>0,45% Kendaraan bermotor beroda dua atau lebih   </li>
                                            <li>0,3% Jenis obat    </li>
                                    </ul>
                                  </td>
                                  <td>DPP PPN</td>
                                </tr>
                                <tr>
                                  <td>7</td>
                                  <td>PPh Pasal 22 atas penjualan kendaraan bermotor di dalam negeri oleh Agen Tunggal Pemegang Merek (ATPM), Agen Pemegang Merek (APM)</td>
                                  <td>0,45%</td>
                                  <td>DPP PPN </td>
                                </tr>
                                <tr>
                                  <td>8</td>
                                  <td>PPh Pasal 22 atas pembelian bahan-bahan untuk keperluan industri atau ekspor oleh badan usaha industri atau eksportir yang bergerak dalam sector kehutanan, perkebunan, pertanian, peternakan, dan perikanan</td>
                                  <td>0,25%</td>
                                  <td>0,25% DPP PPN (dari harga pembelian tidak termasuk Pajak Pertambahan Nilai). </td>
                                </tr>
                              </tbody>
                            </table>
                            Tarif PPh Pasal 22 pembayaran atas penyerahan barang oleh rekanan yang dibiayai APBN/APBD adalah 1,5% x harga/nilai pembelian barang. Apabila Wajib Pajak penerima penghasilan (rekanan) tidak memilikiNPWP maka tarifnya 100% lebih tinggi dari tarif sebenarnya atau menjadi 3% atau (1,5% x 200%). 
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