@extends ('layouts.quiz')
<link rel="stylesheet" href="{{url('/')}}/etrain/css/profile.css">

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

        .btn_nav {
            background-color: #888888;
            border-radius: 90%;
            padding: 10px 18px;
            margin: 10px;
            text-align: center;
        }

        table {
            width: 100%;
            border: 1px solid transparent;
            border-radius: 5px;
            box-shadow: 0px 12px 20px 0px rgba(0, 0, 0, 0.15);
            margin-bottom: 20px;
        }

        th {
            background-color: #F9B700;
            color: #FFF;
            padding: 20px;
        }

        th, td {
            text-align: center;
        }

        td {
            padding: 10px;
        }

        i {
            font-size: 20px;
            padding: 10px;
        }

        i:hover {
            cursor: pointer;
        }

    </style>
@endsection

@section('content')
<section class="advance_feature learning_part" style="padding-bottom:0px; z-index: 99;
  padding: 180px 0px 0px;">
<div class="container">
            <div class="row ">
                <div style="width: 60%; float: :right;">
                    <div class="card main-profile">
                    <label for="default-radio" style="display:flex; margin-bottom:20px;">
                        <h5 style="font-weight: 600; color: rgb(243, 105, 10); margin-right: 25px">
                            <small><b>2.</b></small>
                        </h5>
                        <h5>Ini soal yaa</h5>
                    </label>
                    <label class="container2"><h5 style="line-height: 30px; margin-left: 10px">jawaban A</h5>
                        <input type="radio" name="jawabana" value="jawabana">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container2"><h5 style="line-height: 30px; margin-left: 10px">jawaban B</h5>
                        <input type="radio" name="jawabanb" value="jawabanb">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container2"><h5 style="line-height: 30px; margin-left: 10px">jawaban C</h5>
                        <input type="radio" name="jawabanc" value="jawabanc">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container2"><h5 style="line-height: 30px; margin-left: 10px">jawaban D</h5>
                        <input type="radio" name="jawaband" value="jawaband">
                        <span class="checkmark"></span>
                    </label>
                    </div>
                </div>

                <div style="width: 35%; float: left; margin-right: 3%;">
                <div class="card card-profile">
                    <div style="margin-bottom: 20px; text-align: center;">
                    	<h4>Navigasi Soal Kuis</h4>
                    </div>
                    <div style="margin-bottom: 20px;">

                        @for($i=1; $i<=20; $i++)
                    	<button class="btn btn_nav">{{$i}}</button>
                       @endfor
                    </div>
                    <div style="text-align: center;">
                        <a class="profile-nav__link active" style="border-radius: 5px; padding: 10px 25px;" href="{{ url('/riwayat_kuispajak') }}">Selesai</a>
                    </div>

                </div>
            </div>
            </div>
            </div>
        </div>
<!-- Modal -->
@endsection