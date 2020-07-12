@extends('layouts.main')
@section('header')
<section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Bantuan</h2>
                            <p>Apa aja yang bisa Kopaja bantu?</p>
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
                    @foreach($help as $data)
                    <div class="content_wrapper">
                        <h4 class="title_top">{{$data->question}}</h4>
                        <div class="content">{{$data->answer}}</div>
                        <hr>
                    </div>
                    @endforeach
                        <h4 class="title">Konten apa saja yang tersedia pada website KOPAJA?</h4>
                        <div class="content">
                            <ol class="ordered-list">
                                <li><p>Materi Perpajakan</p>
                                <span>Materi perpajakan yang terdiri dari pajak pusat dan daerah dilengkapi dengan definisi dan praktik perhitungan. Selain itu, kamu juga bisa menemukan berbagai jenis dan tarif pajak yang berkaitan dengan pajak pusat dan daerah.</span><br><br>
                                <li><p>Latihan Soal dan Pembahasan</p>
                                <span>Tempat bagi kamu untuk mengukur pemahaman tentang perpajakan dengan cara mengerjakan latihan soal. Selesai mengerjakan, kamu bisa langsung mendapatkan pembahasan dan analisis topik.</span><br><br>
                                <li><p>Download Materi Perpajakan</p>
                                <span>Bisa download materi perpajakan yang dapat memberikan pemahaman mengenai berbagai jenis dan tarif pajak</span><br>
                                <br>
                                <li><p>Download Soal dan Pembahasan</p>
                                <span>Dapatkan soal perpajakan mengenai berbagai jenis dan tarif pajak yang dilengkapi dengan pembahasan lengkap.</span>
                            </ol>
                        </div>

                        <h4 class="title">Kemana saya bisa menghubungi layanan KOPAJA?</h4>
                        <div class="content">
                        Kamu bisa menghubungi KOPAJA melalui:
                        <ul class="unordered-list">
                                <li>No. HP/WA   : 0823-2456-4853</li>
                                <li>Email : kompaspajak@gmail.com</li>
                                <li>Facebook    : kompaspajak.ac.id</li>
                                <li>Twitter : @kompaspajak</li>
                                <li>Line : @164ytkj9</li>
                                <li>Instagram   : kompaspajak</li>
                            </ul>
                        </div>
                       <br><br><br><br><br>             
            </div>
        </div>
@endsection