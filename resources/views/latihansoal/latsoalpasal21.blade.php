@extends('layouts.main')
@section('header')
<section class="breadcrumb breadcrumb_bg">
<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Pasal 21</h2>
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
                     <h4>1) Penghasilan Tahunan s/d Rp50 Juta. (Tarif Pajak 5%)</h4>
                     <p class="excert" style="text-align: justify;">
                        Contoh Kasus :
                        <br>
                        Tommy bekerja di Universitas Gadjah Mada. Ia memperoleh sebulan berupa gaji pokok Rp6.000.000,-. Tommy membayar iuran pensiun sebesar Rp100.000,-. Tommy sudah menikah, tetapi belum mempunyai anak. Hitunglah PPh Pasal 21!
                      </p>
                     <div class="quote-wrapper">
                        <div class="quotes">
                            <b>Penyelesaian :</b><br>
                            <img src="{{url('/')}}/etrain/img/2.1.PNG">
                        </div>
                     </div>

                     <br>
                     <h4>2) Penghasilan Tahunan >Rp50 Juta s/d Rp250 Juta. (Tarif Pajak 15%)</h4>
                     <p class="excert" style="text-align: justify;">
                        Contoh Kasus:<br>
                        Mark (K/3) mulai bekerja pada Mei 2010 dan berhenti bekerja sejak 1 Juni 2016. Ia meninggalkan Indonesia dan kembali ke negara asalnya (kehilangan wajib pajak 
subjektif). Selama 2016, ia menerima gaji perbulan sebesar Rp15.000.000,- dan di bulan April 2016, ia menerima bonus sebesar Rp20.000.000,-. Bagaimana perhitungan PPh Pasal 21 atas gaji/bulan tersebut?

                      </p>
                     <div class="quote-wrapper">
                        <div class="quotes">
                            <b>Penyelesaian :</b><br>
                            <img src="{{url('/')}}/etrain/img/2.2.PNG">
                        </div>
                     </div>

                     <br>
                     <h4>3) Penghasilan Tahunan >Rp250 Juta s/d Rp500 Juta. (Tarif Pajak 25%)</h4>
                     <p class="excert" style="text-align: justify;">
                        Contoh Kasus:<br>
                        Maria (K/1) tercatat sebagai seorang pegawai tetap di sebuah perusahaan. Pada Januari 2016, ia memperoleh gaji dalam mata uang asing sebesar US$2.000 sebulan. Kurs yang berlaku untuk bulan Januari 2016 berdasarkan Keputusan Menteri Keuangan sebesar Rp13.000,- per US$1. Bagaimana perhitungan PPh Pasal 21?

                      </p>
                     <div class="quote-wrapper">
                        <div class="quotes">
                            <b>Penyelesaian :</b><br>
                            <img src="{{url('/')}}/etrain/img/2.3.PNG">
                        </div>
                     </div>

                     <br>
                     <h4>4) Penghasilan Tahunan >Rp500 Juta. (Tarif Pajak 30%)</h4>
                     <p class="excert" style="text-align: justify;">
                        Contoh Kasus:<br>
                        Bapak Andi (K/2) adalah seorang karyawan yang mendapat penghasilan bruto sebesar Rp50.000.000,-/bulan. Membayar iuran pensiun Rp1.000.000,-/bulan kepada lembaga dana pensiun dimana pendirinya telah disahkan oleh Menteri Keuangan. Berapa PPh Pasal 21 yang harus dibayarkan oleh Bapak Andi/bulan?
                      </p>
                     <div class="quote-wrapper">
                        <div class="quotes">
                            <b>Penyelesaian :</b><br>
                            <img src="{{url('/')}}/etrain/img/2.4.PNG">
                        </div>
                     </div>


                   </div>
               </div>
            </div>
          </div>
        </div>
      </section>
@endsection