@extends('layouts.main')
@section('header')
<section class="breadcrumb breadcrumb_bg">
<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2> Pasal 15</h2>
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
                     <h4>1)	Usaha Pelayaran Dalam Negeri. (Tarif 1,2%)</h4>
                     <p class="excert" style="text-align: justify;">
                        Contoh Kasus :
                        <br>
                        a.  PT Suka Kamu, NPWP 01.777.550.9.131 adalah perusahaan pelayaran dalam negeri yang melakukan jasa pelayaran termasuk penyewaan kapal. Pada tanggal 7 April 2014 menandatangani kontrak dengan PT Suka Ria dalam rangka pengangkutan barang dari Medan ke Jakarta seharga Rp400.000.000,- sudah dibayar. 
                        Alamat PT Suka Kamu: Jln. Pelabuhan No. 1 Medan. Pimpinan Taehyung, NPWP 06.888.777.1.133.000.

                      </p>
                     <div class="quote-wrapper">
                        <div class="quotes">
                            <b>Penyelesaian :</b><br>
                            Penghitungan PPh Pasal 15 final dipotong oleh PT Suka Ria:     <br>
                            <b>1,2% x Penghasilan Bruto</b>
                            1,2% x Rp400.000.000,-  => Rp4.800.000,-
                        </div>
                     </div>

                     <br>
                     <h4>2) Usaha Jasa Penerbangan Dalam Negeri. (Tarif 1,8%)</h4>
                     <p class="excert" style="text-align: justify;">
                        Contoh Kasus :
                        <br>
                        PT Suka Aviation menyewa pesawat dari pT Nusantara Airlines yang merupakan perusahaan penerbangan dalam negeri, 
                        yang akan digunakan dalam penerbangan Medan-Mandailing. Dalam perjanjian sewa/charter dengan membayar Rp1.000.000.000,-. 
                      </p>
                     <div class="quote-wrapper">
                        <div class="quotes">
                            <b>Penyelesaian :</b><br>
                            PTAviation memotong PPh Pasal 15 sebesar: <br>
                            <b>1,8% x Penghasilan Bruto</b><br> 
                            1,8% x Rp1.000.000.000,-  => Rp18.000.000,-
                        </div>
                    </div>

                     <br>
                     <h4>3)Usaha Jasa Pelayaran oleh Perusahaan Luar Negeri. (Tarif Pajak 2,64%)</h4>
                     <p class="excert" style="text-align: justify;">
                        Contoh Kasus :
                        <br>
                        PT Jati Mandailing adalah perusahaan bergerak ekspor barang dagangan dari Indonesia ke Italia menandatangani kontrak transportasi laut sebesar Rp800.000.000,- per sekali angkut dengan perusahaan pelayaran luar negeri
                        missal Roma Lines Ltd yang berdomisili di Swiss dibuktikan dengan Surat Keterangan Domisili (SKD) memiliki BUT di Indonesia yaitu BUT Roma Lines.<br>
                        Missal sesuai dengan P3B Indonesia-Swiss atas penghasilan dari persewaan kapal tersebut dapat dikenakan pajak di Indonesia, namun tidak melebihi 50% dari pajak yang dikenakan menurut ketentuan UU PPh.
                      </p>
                     <div class="quote-wrapper">
                        <div class="quotes">
                            <b>Penyelesaian :</b><br>
                            PT Jati Mandailing memotong PPh Pasal 15 atas BUT Roma Lines:<br>   
                            <b>2,64% x Penghasilan Bruto</b><br>
                            50% x 2,64% x Rp800.000.000,-	=> Rp10.560.000,-
                     </div>
                   </div>

                   
            </div>
          </div>
        </div>
      </section>
@endsection