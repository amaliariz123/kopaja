@extends('layouts.main')

@section('css')
<style>
    .container2 {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        }

        /* Hide the browser's default radio button */
        .container2 input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        }

        /* Create a custom radio button */
        .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
        border-radius: 50%;
        }

        /* On mouse-over, add a grey background color */
        .container2:hover input ~ .checkmark {
        background-color: #ccc;
        }

        /* When the radio button is checked, add a blue background */
        .container2 input:checked ~ .checkmark {
        background-color: rgb(243, 105, 10);
        }

        /* Create the indicator (the dot/circle - hidden when not checked) */
        .checkmark:after {
        content: "";
        position: absolute;
        display: none;
        }

        /* Show the indicator (dot/circle) when checked */
        .container2 input:checked ~ .checkmark:after {
        display: block;
        }

        /* Style the indicator (dot/circle) */
        .container2 .checkmark:after {
        top: 9px;
        left: 9px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: white;
        }
        .progress {
        width: 150px;
        height: 150px;
        background: none;
        position: relative;
        }

        .progress::after {
        content: "";
        width: 100%;
        height: 100%;
        border-radius: 50%;
        border: 6px solid #eee;
        position: absolute;
        top: 0;
        left: 0;
        }

        .progress>span {
        width: 50%;
        height: 100%;
        overflow: hidden;
        position: absolute;
        top: 0;
        z-index: 1;
        }

        .progress .progress-left {
        left: 0;
        }

        .progress .progress-bar {
        width: 100%;
        height: 100%;
        background: none;
        border-width: 6px;
        border-style: solid;
        position: absolute;
        top: 0;
        }

        .progress .progress-left .progress-bar {
        left: 100%;
        border-top-right-radius: 80px;
        border-bottom-right-radius: 80px;
        border-left: 0;
        -webkit-transform-origin: center left;
        transform-origin: center left;
        }

        .progress .progress-right {
        right: 0;
        }

        .progress .progress-right .progress-bar {
        left: -100%;
        border-top-left-radius: 80px;
        border-bottom-left-radius: 80px;
        border-right: 0;
        -webkit-transform-origin: center right;
        transform-origin: center right;
        }

        .progress .progress-value {
        position: absolute;
        top: 0;
        left: 0;
        }

    </style>
@endsection

@section('header')
<section class="breadcrumb breadcrumb_bg" style="height : 280px">
<div class="container" style="height : 300px">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center" style="height : 300px">
                        <div class="breadcrumb_iner_item">
                            <h2 style="font-size : 35px">Pasal 25</h2>
                            <p>Latihan Soal</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection
@section('content')
<?php
    $soal = json_decode(file_get_contents('https://my-json-server.typicode.com/sabdobramastyo98/pphpasal25/pphpasal25'), true);
    
    $i=1;
?>
    <section class="blog_area single-post-area section mt-5 mb-5">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="blog_details">
                     <form action="{{Route('cekSoalpphpasal25')}}">

                        @foreach($soal as $data)
                            <label for="default-radio">
                                <h5 style="line-height: 30px; font-weight: bold; color: rgb(243, 105, 10); margin-right: 25px">
                                    <small><b>SOAL&nbsp;{{$i}}</b></small>
                                </h5>
                                <h5 style="line-height: 30px">
                                      {{$data['soal']}}
                                </h5>
                            </label>

                            <label class="container2"><h5 style="line-height: 30px; margin-left: 10px">{{$data['jawabana']}}</h5>
                                <input type="radio" name="{{$data['id']}}" value="{{$data['jawabana']}}">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container2"><h5 style="line-height: 30px; margin-left: 10px">{{$data['jawabanb']}}</h5>
                                <input type="radio" name="{{$data['id']}}" value="{{$data['jawabanb']}}">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container2"><h5 style="line-height: 30px; margin-left: 10px">{{$data['jawabanc']}}</h5>
                                <input type="radio" name="{{$data['id']}}" value="{{$data['jawabanc']}}">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container2"><h5 style="line-height: 30px; margin-left: 10px">{{$data['jawaband']}}</h5>
                                <input type="radio" name="{{$data['id']}}" value="{{$data['jawaband']}}">
                                <span class="checkmark"></span>
                            </label>
                            <br><hr width="100%"><br>
                            <?php $i++ ?>
                        @endforeach
                         <h5>
                            <button type="submit" class="btn_1">Periksa</button>
                        </h5>
                        
                     </form>
                   </div>
               </div>
            </div>
          </div>
        </div>
    </section>        
    
    
    <!-- Modal -->
    <div class="modal fade" id="nilai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nilai Anda adalah : </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            @if(Session::get('popup') < (count($soal)*0.25) )
                <h2 style="text-align: center;">Troll!</h2><br>
                
                
                <div class="progress mx-auto" data-value="{{ round(((Session::get('popup')-1)*100)/(count($soal)), 2) }}">
                    <span class="progress-left">
                                    <span class="progress-bar border-danger"></span>
                    </span>
                    <span class="progress-right">
                                    <span class="progress-bar border-danger"></span>
                    </span>
                    <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                        <div class="font-weight-bold pt-3" style="font-size: 30px" ><h1>{{ round(((Session::get('popup')-1)*100)/(count($soal)), 2) }}<small style="font-size: 20px">%</small></h1></div>
                    </div>
                </div>


                <br><h6 style="text-align: center;">Terus belajar, jangan menyerah, tetap semangat, kamu pasti bisa!</h6>
            @elseif(Session::get('popup') < (count($soal)*0.5) )
                <h2 style="text-align: center;">Dreadful!</h2><br>


                <div class="progress mx-auto" data-value="{{ round(((Session::get('popup')-1)*100)/(count($soal)), 2) }}">
                    <span class="progress-left">
                                    <span class="progress-bar border-warning"></span>
                    </span>
                    <span class="progress-right">
                                    <span class="progress-bar border-warning"></span>
                    </span>
                    <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                        <div class="font-weight-bold pt-3" style="font-size: 30px" ><h1>{{ round(((Session::get('popup')-1)*100)/(count($soal)), 2) }}<small style="font-size: 20px">%</small></h1></div>
                    </div>
                </div>


                <br><h6 style="text-align: center;">Kurang sedikit lagi. Tingkatkan belajar lagi ya!</h6>
            @elseif(Session::get('popup') < (count($soal)*0.75) )
                <h2 style="text-align: center;">Acceptable!</h2><br>


                <div class="progress mx-auto" data-value="{{ round(((Session::get('popup')-1)*100)/(count($soal)), 2) }}">
                    <span class="progress-left">
                                    <span class="progress-bar border-primary"></span>
                    </span>
                    <span class="progress-right">
                                    <span class="progress-bar border-primary"></span>
                    </span>
                    <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                        <div class="font-weight-bold pt-3" style="font-size: 30px" ><h1>{{ round(((Session::get('popup')-1)*100)/(count($soal)), 2) }}<small style="font-size: 20px">%</small></h1></div>
                    </div>
                </div>



                <br><h6 style="text-align: center;">Wow! Bagus. Test selanjutnya pasti lebih baik!</h6>
            @else
                <h2 style="text-align: center;">Outstanding!</h2><br>


                <div class="progress mx-auto" data-value="{{ round(((Session::get('popup')-1)*100)/(count($soal)), 2) }}">
                    <span class="progress-left">
                                    <span class="progress-bar border-succes"></span>
                    </span>
                    <span class="progress-right">
                                    <span class="progress-bar border-succes"></span>
                    </span>
                    <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                        <div class="font-weight-bold pt-3" style="font-size: 30px" ><h1>{{ round(((Session::get('popup')-1)*100)/(count($soal)), 2) }}<small style="font-size: 20px">%</small></h1></div>
                    </div>
                </div>


                <br><h6 style="text-align: center;">Hebat! Pertahankan terus. Jangan sampai lengah. Selamat!</h6>
            @endif
            
        </div>
        </div>
    </div>
    </div>
    <script>
        
    </script>
@endsection
