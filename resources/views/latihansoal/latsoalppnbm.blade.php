@extends('layouts.main')
@section('header')
<section class="breadcrumb breadcrumb_bg">
<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>PPnBM</h2>
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
                     <h4>Praktik Perhitungan Pajak Penjualan Atas Barang Mewah</h4>
                     <p class="excert" style="text-align: justify;">
                        Contoh Kasus :
                        <br>
                        Kim Jinhwan seorang pengusaha perhotelan, dia membeli mobil mewah seharga Rp800.000.000,- mobil tersebut memiliki CC 3000 dan dikenakan PPnBM sebesar 40%. Berapa harga perolehan mobil Tuan Kim Jinhwan?
                      </p>
                     <div class="quote-wrapper">
                        <div class="quotes">
                            <b>Penyelesaian :</b><br>
                            <b>PPnBM : Tarif PPnBM x Dasar Pengenaan Pajak</b><br>
                            Besarnya harga perolehan mobil Tuan Kim Jinhwan:<br>
                            Harga Mobil atau DPP Mobil		= Rp   800.000.000,-<br>
                            PPnBM (40% x Rp800.000.000,-)	= Rp   320.000.000,- +<br>
                            Harga perolehan mobil		= Rp1.120.000.000,-<br>
                            <br>
                            Jadi, besarnya harga peroleh mobil Tuan Kim Jinhwan sebesar Rp1.120.000.000,-
                        </div>
                    </div>                
               </div>
            </div>
          </div>
        </div>
</section>
@endsection