@extends('layouts.main')
@section('header')
<section class="breadcrumb breadcrumb_bg">
<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Pasal 22</h2>
                            <p>Praktik Perhitungan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
@section('content')
<section class="blog_area single-post-area section_padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="blog_details">
                     <h1>Praktik Perhitungan</h1>
                     <br>
                     <h4>1) Impor angka API. (Tarif 2,5%)</h4>
                     <p class="excert" style="text-align: justify;">
                        Contoh Kasus :
                        <br>
                        PT Tamiang Madina NPWP 01.222.333.4.555.000 adalah importir memiliki angka API mengimpor sebesar nilai impor: cost Rp3.750.000,- asuransi Rp250.000.000,- dan ongkos angkut (freight) Rp500.000.000,- pada bulan April 2017. Berapa PPh Pasal 22 impor?
                      </p>
                     <div class="quote-wrapper">
                        <div class="quotes">
                            <b>Penyelesaian :</b><br>
                            <b>PPh Pasal 22 Impor = Tarif Pajak x Dasar Pengenaan Pajak</b><br>
                            <b>= 2,5% x (cost + asuransi + ongkos angkut)</b><br>
                            = 2,5% x (Rp3.750.000,- + Rp250.000.000,- + Rp500.000,-)<br>
                            = Rp112.500.000,-
                        </div>
                     </div>

                     <br>
                     <h4>2) Bendaharawan. (Tarif 1,5%)</h4>
                     <p class="excert" style="text-align: justify;">
                        Contoh Kasus :
                        <br>
                        Rekanan Penyediaan alat-alat kantor Pemko Medan PT Sempurna mendapat pembayaran dari Bendahara Rutin Pemko Medan, NPWP 00.419.450.2.216.000 yang dananya dana APBD sebesar Rp100.000.000,- berdasarkan nilai kontrak belum termasuk pajak pada bulan Mei 2017. Hitung Pemungutan pajak yang dilakukan Bendahara? 
                      </p>
                     <div class="quote-wrapper">
                        <div class="quotes">
                            <b>Penyelesaian :</b><br>
                            <b>PPh Pasal 22     = Tarif Pajak x Dasar Pengenaan Pajak</b><br>
                            <b>Bendaharawan = 1,5% x Nilai Kontrak Pembayaran belum termasuk PPN</b><br> 
                            = 1,5% x Rp100.000.000,-<br>
                            = Rp1.500.000,-
                        </div>
                    </div>

                     <br>
                     <h4>3) Baja. (Tarif 0,3%)</h4>
                     <p class="excert" style="text-align: justify;">
                        Contoh Kasus :
                        <br>
                        PT Haliza adalah perusahaan memproduksi baja menjual tiang baja kepada PT Fazliana konstruksi rangka jembatan seharga Rp10.000.000.000. Hitung PPh Pasal 22 atas penjualan baja!
                      </p>
                     <div class="quote-wrapper">
                        <div class="quotes">
                            <b>Penyelesaian :</b><br>
                            PT Haliza memungut PPh Pasal 22 atas penjualan baja sebesar:<br>   
                            <b>0,3% x Dasar Pengenaan Pajak</b><br>
                            0,3% x Rp10.000.000.000,- => Rp30.000.000,-
                     </div>
                   </div>

                   
               </div>
            </div>
          </div>
        </div>
      </section>
@endsection