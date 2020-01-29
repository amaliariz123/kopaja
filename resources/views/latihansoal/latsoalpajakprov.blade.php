@extends('layouts.main')
@section('header')
<section class="breadcrumb breadcrumb_bg">
<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Pajak Provinsi</h2>
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
                     <h4>1) Pajak Kendaraan Bermotor Pribadi Pertama. (Tarif Pajak 1%-2%)</h4>
                     <p class="excert" style="text-align: justify;">
                        Contoh Kasus :
                        <br>
                        Pak Iwan memiliki 5 motor yang tipe dan tahunnya sama. Diketahui pajak masing-masing motornya pun sama (hal ini supaya memudahkan untuk melihat kenaikan pajaknya) yaitu:<br>
                        a.  Pajak Kendaraan Bermotor (PKB)             : Rp     450.000,-<br>
                        b.  NJKB (Rp450.000,- x 2/3 x 100            : Rp30.000.000,-<br>
                        c.  Sumbangan Wajib Dana Kecelakaan Lalu-Lintas Jalan (SWDKLLJ): Rp      50.000,-<br>
                        Berapakah tarif motor pak Iwan yang pertama (provinsi Sumatera Barat 1,5%)?

                      </p>
                     <div class="quote-wrapper">
                        <div class="quotes">
                            <b>Penyelesaian :</b><br>
                            Motor Pertama:<br>
                            Pajak Kendaraan Bermotor (Rp30.000.000,- x 1,5%)             Rp450.000,-
                        </div>
                     </div>

                     <br>
                     <h4>2) Pajak Kendaraan Bermotor Pribadi Kedua, dst. (Tarif Pajak 2%-10%)</h4>
                     <p class="excert" style="text-align: justify;">
                        Contoh Kasus :
                        <br>
                        Berdasarkan contoh kasus pada no. 1 PKB Pribadi Pertama, berapakah PKB Pribadi Kedua, dst?
                      </p>
                     <div class="quote-wrapper">
                        <div class="quotes">
                            <b>Penyelesaian :</b><br>
                            Motor Kedua, PKB (Rp30.000.000,- x 2%) =              Rp  600.000,-<br>
Motor Ketiga, PKB (Rp30.000.000,- x 2,5%)            = Rp  700.000,-<br>
Motor Keempat, PKB (Rp30.000.000,- x 4%)               =       Rp1.200.000,-


                        </div>
                    </div>

                     <br>
                     <h4>3) Bea Balik Nama Kendaraan Bermotor Penyerahan Pertama. (Tarif Pajak 20%)</h4>
                     <p class="excert" style="text-align: justify;">
                        Contoh Kasus :
                        <br>
                        Pak Rahman membeli motor bekas dengan harga Rp15.000.000,-. Biaya penerbitan STNK baru Rp100.000,-, Sumbangan Wajib Dana Kecelakaan Lalu Lintas Jalan (SWDKLLJ) Rp35.000,- dan biaya admin Rp25.000,-. Berapakah biaya untuk bea balik nama dan STNK baru Pak Rahman?
                      </p>
                     <div class="quote-wrapper">
                        <div class="quotes">
                            <b>Penyelesaian :</b><br>
                            Bea Balik Nama Kendaraan Bermotor (20% x Rp15.000.000,-)  = Rp3.000.000,-<br>
Penerbitan STNK baru          =       Rp   100.000,-<br>
SWDKLLK           =         Rp     35.000,- <br>
Admin           =           Rp     25.000,-+<br>
Jumlah        =             Rp3.150.000,-
                     </div>
                   </div>

                   <br>
                     <h4>4) Bea Balik Nama Kendaraan Bermotor Penyerahan Kedua, dst. (Tarif Pajak 1%)</h4>
                     <p class="excert" style="text-align: justify;">
                        Contoh Kasus :
                        <br>
                        Untuk kendaraan roda 2 berjenis matic milik orang pribadi dengan NJKB sebesar Rp9.600.000,- Hitunglah biaya untuk bea balik nama yang harus dibayarkan!
                      </p>
                     <div class="quote-wrapper">
                        <div class="quotes">
                            <b>Penyelesaian :</b><br>
                            Bea Balik Nama Kendaraan Bermotor (1% x Rp9.600.000,-)  =     Rp960.000,-
                     </div>
               </div>

               <br>
                     <h4>5) Pajak Rokok dan Bahan Bakar Kendaraan Bermotor. (Tarif Pajak 10%)</h4>
                     <p class="excert" style="text-align: justify;">
                        Contoh Kasus :
                        <br>
                        Harga satu bungkus rokok rokok merek “S” sebesar Rp14.000,- dengan cukai 40% kemudian Pemerintah Daerah (Pemda) memungut Pajak Rokok dengan besaran 10% atas Cukai Rokok.
                      </p>
                     <div class="quote-wrapper">
                        <div class="quotes">
                            <b>Penyelesaian :</b><br>
                            Nilai Cukai Rokok (40% x Rp14.000,-)     => Rp5.600<br>
Dan Pemerintah Daerah (Pemda) memungut Pajak Rokok dengan besaran 10% atas Cukai Rokok. Dengan demikian, nilai Pajak Rokok yang harus dibayarkan adalah   10% x Rp5.600,- => Rp560<br>
Maka, dapat diasumsikan harga jual yang ditetapkan dari satu bungkus rokok merek “S” setelah terkena Pajak dan Cukai Rokok adalah 
Rp14.000,- + Rp560,- =>  Rp14.560,-

                     </div>
               </div>
            </div>
          </div>
        </div>
      </section>
@endsection