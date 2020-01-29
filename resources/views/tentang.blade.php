@extends('layouts.main')
@section('header')
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Tentang</h2>
                            <p>Apa sih Kopaja itu?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>        
@endsection
@section('content')
<div class="container">
            <div class="row">
                <div class="col-lg-12 course_details_left">
                    <div class="main_image">
                        <img class="img-fluid" src="img/single_cource.png" alt="">
                    </div>

                    <div class="content_wrapper">
                        <h4 class="title_top">Apa itu Kopaja?</h4>
                        <div class="content">
                        KOPAJA adalah organisasi yang bergerak pada bidang pendidikan di Indonesia yang berfokus 
                        pada layanan berbasis pendidikan khususnya perpajakan. KOPAJA merupakan 
                        singkatan dari Kompas Pajak Ajaib. Organisasi ini didirikan pada 5 Oktober 2018 
                        oleh Diah Rawanti dan Titis Hari Dayani.
                            <br>
                            <br>
                            Awal berdirinya KOPAJA yaitu adanya tugas kelompok dari dosen perpajakan untuk membuat prototype perpajakan dan bagi yang hasilnya bagus akan mendapat reward. Sejak saat itu, kami membuat prototype berupa kompas pajak yang berbahan kertas manila, kemudian diwarnai menggunakan crayon dan pensil warna. Tujuan pewarnaan tersebut agar dalam pembelajaran pajak pengguna tidak mudah bosan.
                            <br>
                            <br>
                            Hasil dari prototype yang kami buat kemudian mendapat reward dari dosen karena dianggap potensial. Setelah itu kami diusulkan oleh Ibu Rumiyati S.E., M.Sc. selaku dosen pendamping untuk mengikuti Program Kreativitas Mahasiswa Karsa Cipta (PKM-KC). Dalam mengikuti PKM-KC terdapat beberapa syarat yang harus dipenuhi, salah satunya yaitu 1 tim terdiri dari 3 orang. Dikarenakan kami hanya berdua, maka kami mengajak Gagas Sandi Bharata untuk ikut serta mengembangkan KOPAJA ini. 
                            <br>
                            <br>
                            Bisnis model dari KOPAJA adalah dengan memberikan akses pengajaran untuk mata pelajaran yang berkaitan dengan perpajakan dari tingkat SMA/SMK hingga Perguruan Tinggi yang disajikan secara online melalui website KOPAJA.id maupun offline berupa alat peraga yang dapat di order melalui kontak person yang sudah tersedia.
                            <br>
                            <br>
                            Berikut ini merupakan desain untuk alat peraga KOPAJA:<br>
                            <center>                            
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="{{url('/')}}/etrain/img/depan.svg" alt="" width="400px">
                                    <h4>Tampak Depan</h4>
                                </div>
                                <div class="col-lg-6">
                                    <img src="{{url('/')}}/etrain/img/belakangg.svg" alt="" width="400px">
                                    <h4>Tampak Belakang</h4>
                                </div>
                            </div>
                                
                                
                            </center>
                        </div>

                        <h4 class="title">Tujuan dan Manfaat</h4>
                        <div class="content">
                        Tujuan dari KOPAJA yaitu:
                            <ol class="ordered-list" style="margin-left: 10px">
                                <li><span>Memberikan edukasi mengenai berbagai jenis dan tarif pajak dalam proses pembelajaran perpajakan yang lebih inovatif.</span></li>
                                <li><span>Memberikan kebermanfaatan bagi pengguna, khususnya generasi Z dalam belajar berbagai jenis dan tarif pajak.</span></li>
                            </ol>
                            Manfaat bagi pengguna KOPAJA yaitu:
                            <ol class="ordered-list" style="margin-left: 10px">
                                <li><span>Sebagai media edukasi mengenai berbagai jenis dan tarif pajak.</span></li>
                                <li><span>Bentuk pengembangan alat peraga tentang perpajakan.</span></li>
                                <li><span>Mampu memberikan pemahaman mengenai berbagai jenis dan tarif pajak secara efektif dan menyenangkan.</span></li>
                            </ol>
                        </div>

                        <h4 class="title">Dikembangkan Oleh</h4>
                        <div class="content">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="single-defination">
                                        <h4 class="mb-20">Diah Rawanti</h4>
                                        <img src="{{url('/')}}/etrain/img/dira.svg" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single-defination">
                                        <h4 class="mb-20">Titis Hari Dayani</h4>
                                        <img src="{{url('/')}}/etrain/img/titiss.svg" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single-defination">
                                        <h4 class="mb-20">Gagas Sandi Bharata</h4>
                                        <img src="{{url('/')}}/etrain/img/gagas.svg" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single-defination">
                                        <h4 class="mb-20">Rumiyati, S.E., M.Sc.</h4>
                                        <img src="{{url('/')}}/etrain/img/rumi.svg" alt="" class="img-fluid">
                                    </div>
                                </div>
                        </div>

                        <h4 class="title">Hubungi Kami</h4>
                    <div class="content">
                        Apabila terdapat pertanyaan seputar KOPAJA atau kerjasama dan hal lainnya, hubungi kami di +62 823-2456-4853. Anda juga dapat melihat daftar pertanyaan yang sering ditanyakan di halaman Bantuan

                    
                    <h4 class="title">KONTAK KAMI</h4>
                    Jam Kerja:
                    <ul class="unordered-list">
                        <li>10.00 – 21.00 WIB (Weekdays)</li>
                        <li>10.00 – 17.00 WIB (Weekend)</li>
                    </ul>
                    <br>
                    Di luar jam kerja di atas, Anda dapat menghubungi kami melalui email. Kami akan segera menghubungi Anda!
                    <br>
                    No. HP/WA	: +62 823-2456-4853
                    <br>    
                    Email		: kompaspajak@gmail.com
                    <br><br><br>
                </div>


              
            </div>
        </div>
@endsection