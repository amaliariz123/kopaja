@extends('layouts.main')
@section('header')
<section class="breadcrumb breadcrumb_bg">
<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Pajak Bumi dan Bangunan</h2>
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
                     <h4>1) Pajak Bumi dan Bangunan (PBB). (Tarif Pajak 0,5%)</h4>
                     <p class="excert" style="text-align: justify;">
                        Contoh Kasus :
                        <br>
                        Tuan Alex mempunyai sebidang tanah dengan panjang 100 m dan lebar 20 m. NJOP tanah tersebut Rp30.000.000,- dan NJOPTKP daerah tersebut  Rp12.000.000,- Hitunglah PBB yang harus dibayar oleh Tuan Alex!
                      </p>
                     <div class="quote-wrapper">
                        <div class="quotes">
                            <b>Penyelesaian :</b><br>
                            NJKP (20% X (Rp30.000.000,- - Rp12.000.000,-))   Rp3.600.000,-<br>
                            PBB yang harus dibayar sebesar 0,5% x Rp3.600.000,- =>  Rp     18.000,-
                        </div>
                     </div>

                     <br>
                     <h4>2) Objek PBB apabila NJOP >= Rp1 Milyar. (Tarif Paja 40%)</h4>
                     <p class="excert" style="text-align: justify;">
                        Contoh Kasus :
                        <br>
                        Tuan Mabrur memiliki rumah di Jakarta dengan NJOP Bumi 500 m2 @Rp10.000.000,-, NJOP Bangunan 300 m2 @Rp3.000.000,-, NJOPTKP sebesar Rp12.000.000,-. Hitunglah besarnya PBB atas rumah di Jakarta tersebut!
                      </p>
                     <div class="quote-wrapper">
                        <div class="quotes">
                            <b>Penyelesaian :</b><br>
                            <img src="{{url('/')}}/etrain/img/5.2.PNG">
                        </div>
                    </div>

                     <br>
                     <h4>3) Objek PBB apabila NJOP <= Rp1 Milyar. (Tarif Pajak 20%)</h4>
                     <p class="excert" style="text-align: justify;">
                        Contoh Kasus :
                        <br>
                        Pada tanggal 30 Desember 2018 Tuan Budi membeli tanah 500 m2 seharga Rp500.000.000,- Pada tanggal 5 Januari 2019 dibangun rumah beserta kelengkapannya 300 m2 dengan biaya Rp300.000.000,- NJOP tanah termasuk klasifikasi kelompok A-15 sebesar Rp1.032.000,-/m2 dan bangunan termasuk klasifikasi kelompok A-2 sebesar Rp968.000,-/m2. NJOPTKP di daerah tersebut adalah Rp10.000.000,-. Hitunglah besarnya NJOP dan PBB Tuan Budi tahun 2019!
                      </p>
                     <div class="quote-wrapper">
                        <div class="quotes">
                            <b>Penyelesaian :</b><br>
                            NJOP (500 m2 x Rp1.032.000,-)       Rp516.000.000,-<br>
NJKP (20% X (Rp516.000.000,- - Rp10.000.000,-))   Rp101.200.000,-<br>
PBB yang harus dibayar sebesar 0,5% x Rp101.200.000,- = Rp       506.000,-

                     </div>
                   </div>

                   <br>
                     <h4>4) Objek Pajak Perkebunan, Kehutanan, dan Pertambangan. (Tarif Pajak 40%)</h4>
                     <p class="excert" style="text-align: justify;">
                        Contoh Kasus :
                        <br>
                        PT Chingu, sebuah perusahaan perkebunan kelapa sawit di daerah Sumatera Utara memiliki/menguasai/mendapat manfaat dari tanah dan bangunan dengan rincian sebagai berikut:<br>
                        <img src="{{url('/')}}/etrain/img/5.4.PNG" width="80%"><br>
                        Hitung PBB tahun 2018 atas perkebunan tersebut bila NJOPTKP Rp10.000.000,-
                      </p>
                     <div class="quote-wrapper">
                        <div class="quotes">
                            <b>Penyelesaian :</b><br>
                            <img src="{{url('/')}}/etrain/img/5.4.2.PNG">
                     </div>
               </div>
            </div>
          </div>
        </div>
      </section>
@endsection