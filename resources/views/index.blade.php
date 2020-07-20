@extends('layouts.land')

@section('content')
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
        @guest
        @else    
        <?php
            $data = DB::table('users')->where('id', '=', Auth::user()->id)->first()->id;
            $member = DB::table('members')->where('user_id', $data)->first();
        ?>
        @endguest
        <div class="row align-items-center">
            <div class="col-lg-6 col-xl-6">
                <div class="banner_text">
                    <div class="banner_text_iner">
                        <h5>Belajar Pajak dimanapun kapanpun!</h5>
                        <h1>Belajar Lebih Seru Bersama KOPAJA</h1>
                        <p> Kompas Pajak Ajaib atau biasa disebut KOPAJA menjadi 
                            solusi belajar perpajakan untuk siswa SMA/SMK dan Perguruan Tinggi
                            dilengkapi dengan akses latihan soal, pembahasan dan rangkuman.
                            Dilengkapi dengan materi perpajakan.
                        </p>
                        
                        @guest
                            <a href="{{ route('login') }}" class="btn_1">Mulai Belajar!</a>
                            <a href="{{ route('register') }}" class="btn_2">Daftar</a>                          
                        @else
                            <button data-toggle="modal" data-target="#exampleModalCenter" class="btn_1">Mulai Belajar!</button>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3 align-self-center">
                    <div class="single_feature_text ">
                        <h2>Temukan <br>Contoh <br> Soal Pajak</h2>
                        <p>Contoh soal-soal pajak yang menunjang untuk kegiatan pembelajaran,
                            dirancang sesuai kebutuhan anda. </p>
                        <button data-toggle="modal" data-target="#exampleModalCenter" class="btn_1">Lihat Contoh Soal</button>
                    </div>
                </div>
                <a class="col-sm-6 col-xl-3" style="cursor:pointer" data-toggle="modal" data-target="#exampleModalCenter">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-layers"></i></span>
                            <h4>Latihan Soal dan Pembahasan</h4>
                            <p>Ikuti simulasi soal latihan dan pembahasan untuk menguji pemahaman kamu tentang perpajakan</p>
                        </div>
                    </div>
                </a>
                <a class="col-sm-6 col-xl-3" style="cursor:pointer" href="{{Route('downloadAllSoal')}}">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-new-window"></i></span>
                            <h4>Download Soal dan Pembahasan</h4>
                            <p>Dapatkan soal dan pembahasan mengenai jenis dan klasifikasi pajak sesuai dengan Perpajakan di Indonesia.</p>
                        </div>
                    </div>
                </a>
                <a href="{{Route('downloadAllMateri')}}" class="col-sm-6 col-xl-3" style="cursor:pointer">
                    <div class="single_feature">
                        <div class="single_feature_part single_feature_part_2">
                            <span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
                            <h4>Download Materi Perpajakan</h4>
                            <p>Catatan materi perpajakan yang terdiri dari jenis pajak pusat dan daerah yang dapat di download untuk kamu.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->

    <!-- learning part start-->
    <section class="learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-lg-stretch">
                <div class="col-md-7 col-lg-7">
                    <div class="learning_img">
                        <img src="{{url('/')}}/etrain/img/learning_img.png" alt="">
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="learning_member_text">
                        <h5>terbaru</h5>
                        <h2>KOPAJA Premium</h2>
                        <p>Dengan KOPAJA Premium, proses belajar pajak Anda akan lebih seru dan menyenangkan. Karena Anda bisa mengakses semua yang Anda butuhkan. Selain itu, Anda dapat juga melakukan seperti di bawah ini.
                        </p>
                        <ul>
                            <li><span class="ti-pencil-alt"></span>Mengakses Pembahasan Latihan Soal</li>
                            <li><span class="ti-ruler-pencil"></span>Mengikuti Kuis Pajak yang menantang</li>
                        </ul>
                        <a href="{{route ('upgrade.show')}}" class="btn_1">Mulai Kuis Pajak!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- learning part end-->

    <!-- member_counter counter start -->
    <section class="member_counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{$sum_materi}}</span>
                        <h4>Materi Pajak</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{$sum_soal}}</span>
                        <h4> Latihan Soal</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{$sum_dev}}</span>
                        <h4>Pengembang</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{$sum_member}}</span>
                        <h4>Pengguna</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- member_counter counter end -->

    <!--::review_part start::-->
    <section class="testimonial_part">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>testimoni</p>
                        <h2>Apa Kata Mereka?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="textimonial_iner owl-carousel">
                        <div class="testimonial_slider">
                            <div class="row">
                                @foreach($testi as $data)
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>{{$data->content}}</p>
                                        <h4>{{$data->member->user->fullname}}</h4>
                                        <h5>{{$data->member->institution}}</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div>
                                    @if($data->member->user->profile_picture == null)
                                        <img src="{{ asset('/etrain/img/user.png') }}" alt="foto">
                                    @else
                                        <img src="{{asset('storage/images/user/'.$data->member->user->profile_picture)}}" alt="foto">
                                    @endif
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--::blog_part end::-->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Halo, Azza Ulil! Pilih materi pajak yang ingin kamu pelajari yuk!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-6">
        @php
            $pajak_pusat = DB::table('taxes')->where('tax_type', 'Pajak Pusat')->get();
            $pajak_daerah = DB::table('taxes')->where('tax_type', 'Pajak Daerah')->get();
        @endphp
        <b style="margin-left: 10px;">Pajak Pusat</b>
            @foreach($pajak_pusat as $pusat)
                <a class="dropdown-item" href="{{route('materi.show', $pusat->id)}}">{{$pusat->name}}</a>
            @endforeach
            <b style="margin-left: 10px;">Pajak Daerah</b>
            @foreach($pajak_daerah as $daerah)
                <a class="dropdown-item" href="{{route('materi.show', $daerah->id)}}">{{$daerah->name}}</a>
            @endforeach
        </div>
      </div>
      
    </div>
  </div>
</div>

@endsection