@extends('layouts.main')
@section('header')
<section class="breadcrumb breadcrumb_bg">
<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Pajak Kabupaten/Kota</h2>
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
                     <h4>1) Pajak Hotel dan Restoran. (Tarif Pajak 10%)</h4>
                     <p class="excert" style="text-align: justify;">
                        Contoh Kasus :
                        <br>
                        a.  Berdasarkan data harga yang diambil dari web penyedia pemesanan hotel untuk harga kamar JW Marriot Jakarta untuk tanggal 13/02/2016, diperoleh harga harga kamar Rp2.011.807, yang merupakan harga diskon dari Rp3.674.858. Lalu berapakah pajak terutang apabila konsumen menginap 2 malam bila Pemerintah Provinsi DKI Jakarta memberlakukan tarif Pajak Hotel 10%? <br><br>
b.  Sebuah restoran menyediakan makanan dan minuman di tempat, sekaligus melayani pesanan. Berdasarkan laporan Perusahaan, selama satu (1) bulan restoran tersebut memperoleh pendapatan dari konsumen yang makan di restorannya sebesar Rp. 64.000.000,- dan dari pesanan (dus) sebesar Rp. 15.000.000,-Berapakah Pajak restoran yang harus dibayar oleh restoran tersebut?

                      </p>
                     <div class="quote-wrapper">
                        <div class="quotes">
                            <b>Penyelesaian :</b><br>
                            Pajak Hotel (10% x 2 malam x Rp2.011.807,-) =>  Rp   402.361,40,-<br>
Pajak Restoran (10% x Rp79.000.000)  =>   Rp7.900.000,00,- 

                        </div>
                     </div>

                     <br>
                     <h4>2) Pajak Reklame. (Tarif Pajak 25%)</h4>
                     <p class="excert" style="text-align: justify;">
                        Contoh Kasus :
                        <br>
                       <img src="{{url('/')}}/etrain/img/7.2.PNG">
                       Pak Agus ingin memasang baliho dengan besar 3 x 6 meter di area Kuningan (termasuk jalan protokol kelas A) sebanyak 2 buah selama 7 hari. Hitunglah pajak reklamenya!
                      </p>
                     <div class="quote-wrapper">
                        <div class="quotes">
                            <b>Penyelesaian :</b><br>
                            Pajak Reklame = 25% x Nilai Sewa Reklame (NSR)<br>
<i style="color: white">Pajak Reklame</i> = 25% x 18 meter x 2 buah x Rp125.000,- x 7 hari<br> 
<i style="color: white">Pajak Reklame</i> = Rp7.875.000,-
                        </div>
                    </div>

                     <br>
                     <h4>3) Pajak Parkir. (Tarif Pajak 30%)</h4>
                     <p class="excert" style="text-align: justify;">
                        Contoh Kasus :
                        <br>
                        PT Gemilang sebagai jasa penyelenggara parkir di Universitas Pancasakti dengan jumlah pendapatan pada bulan Januari Rp28.717.150,- berapa pajak parkir yang terutang oleh PT Gemilang untuk bulan Januari?
                      </p>
                     <div class="quote-wrapper">
                        <div class="quotes">
                            <b>Penyelesaian :</b><br>
                            Pajak Parkir = 30% x Dasar Pengenaan Pajak (DPP)<br>
<i style="color: white">Pajak Parkir</i> = 30% x Rp28.717.150,-<br>
<i style="color: white">Pajak Parkir</i> = Rp8.615.145,-

                     </div>
                   </div>

                   <br>
                     <h4>4) PBB Pedesaan Perkotaan. (Tarif Pajak 0,3%)</h4>
                     <p class="excert" style="text-align: justify;">
                        Contoh Kasus :
                        <br>
                        Pak Ahmad punya aset di daerah Semarang sebagai berikut:<br>
a.  Luas Tanah 500 m2 (NJOP Rp1.000.000,-)<br>
b.  Luas Rumah 600 m2 (rumah tingkat 3, per lantai luasnya 200 m2, NJOP Rp2.500.000,-)<br>
c.  Pagar Rumah 50 m2 (NJOP Rp5.000.000,-)<br>
d.  Kolam Renang 100 m2 (NJOP Rp4.000.000,-) <br>
Tarif Pajak Bumi dan Bangunan ditetapkan melalui Peraturan Daerah Kota Semarang sebesar 0,3% dan NJOPTKP ditetapkan sebesar Rp20.000.000,-. Hitunglah PBB terutang Pak Ahmad!

                      </p>
                     <div class="quote-wrapper">
                        <div class="quotes">
                            <b>Penyelesaian :</b><br>
                            <img src="{{url('/')}}/etrain/img/8.3.PNG">
                     </div>
               </div>

               <br>
                     <h4>5) Pajak Rokok dan Bahan Bakar Kendaraan Bermotor. (Tarif Pajak 10%)</h4>
                     <p class="excert" style="text-align: justify;">
                        Contoh Kasus :
                        <br>
                        Diperjual-belikan sebidang tanah kosong di Jakarta Selatan dengan data-data sebagai berikut:<br>
a.  Luas 1.000 m2<br>
b.  NPOPTKP adalah Rp80.000.000,- (DKI Jakarta)<br>
c.  Harga kesepakatan antara penjual dan pembeli adalah Rp2.000.000,-/meter<br>
d.  Berdasarkan keterangan dari Kantor Pelayanan PBB, NJOP nya sebesar Rp2.000.000.000,-
Berapa besarnya BPHTB yang harus dibayar?

                      </p>
                     <div class="quote-wrapper">
                        <div class="quotes">
                            <b>Penyelesaian :</b><br>
BPHTB   = 5 % x (NPOP – NPOPTKP) <br>
<i style="color: white">BPHTB</i>   = 5 % x (Rp2.000.000.000,- – Rp80.000.000,-)<br>
<i style="color: white">BPHTB</i>   = Rp96.000.000,-


                     </div>
               </div>
            </div>
          </div>
        </div>
      </section>
@endsection