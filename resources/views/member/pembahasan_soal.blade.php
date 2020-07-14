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
        .border-warning {
            border-color:#ffc107!important
        }
        .border-danger {
            border-color:#dc3545!important
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
                            <h2 style="font-size : 35px">{{$name->tax->name}}</h2>
                            <p>Pembahasan Latihan Soal</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection
@section('content')
<?php
    $i=1;
?>
    <section class="blog_area single-post-area section mt-5 mb-5">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="blog_details">

                        @foreach($answer as $data)
                            <label for="default-radio">
                                <h5 style="line-height: 30px; font-weight: bold; color: rgb(243, 105, 10); margin-right: 25px">
                                    <small><b>SOAL&nbsp;{{$i}}</b></small>
                                </h5>
                                <h5 style="line-height: 30px">
                                      {{$data->exerciseQuestion->question}}
                                </h5>
                            </label>
                            
                            <label class="container2"><h5 style="line-height: 30px; margin-left: 10px">{{$data->exerciseQuestion->option_a}}</h5>
                                <input type="radio" name="{{$data->id}}" value="1" disabled>
                                <span class="checkmark"></span>
                            </label>
                            <label class="container2"><h5 style="line-height: 30px; margin-left: 10px">{{$data->exerciseQuestion->option_b}}</h5>
                                <input type="radio" name="{{$data->id}}" value="2" disabled>
                                <span class="checkmark"></span>
                            </label>
                            <label class="container2"><h5 style="line-height: 30px; margin-left: 10px">{{$data->exerciseQuestion->option_c}}</h5>
                                <input type="radio" name="{{$data->id}}" value="3" disabled>
                                <span class="checkmark"></span>
                            </label>
                            <label class="container2"><h5 style="line-height: 30px; margin-left: 10px">{{$data->exerciseQuestion->option_d}}</h5>
                                <input type="radio" name="{{$data->id}}" value="4" disabled>
                                <span class="checkmark"></span>
                            </label>

                            <!-- pembahasan soal -->
                    
                            <div class="quote-wrapper">
                                <div class="quotes">
                                    <b>PEMBAHASAN :</b><br>
                                    {{$data->exerciseQuestion->exerciseQuestionSolution->solution}}<br>
                                    Maka, jawaban yang benar adalah pilihan ke-{{$data->exerciseQuestion->right_answer}}
                                </div>  
                            </div>
                            <div class="row align-items-center" style="float:right; margin-right:10px;">
                                <h5 style="vertical-align:center;">Karena jawaban Anda adalah pilihan ke-{{$data->answer}}, maka&nbsp;</h5><span>
                                @if($data->isRight == 1)
                                <button class="btn_benar">Anda benar!</button>
                                @else
                                <button class="btn_salah">Anda salah!</button>
                                </span>
                                @endif
                            </div>
                            <br><br><hr width="100%"><br>

                            <?php $i++ ?>
                        @endforeach
                        
                     
                   </div>
               </div>
            </div>
          </div>
        </div>
    </section>        
    
@endsection
