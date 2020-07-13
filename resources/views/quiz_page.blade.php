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
            height:50px;
            width:50px;
            padding: 10px 10px;
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

        .button-next{
            background-color : blue;
            border-radius : 8px;
            color: white;
            padding :10px;
            font-size : 15px;
        }

    </style>
@endsection

@section('content')
<section class="advance_feature learning_part" style="padding-bottom:0px; z-index: 99;padding: 180px 0px 0px;">
    <div style="margin: center;">
        <b id="demo" style="font-size: 24px; text-align:center; margin-left:110px;" />
    </div>
    <div class="container">
        <form action="{{ route('quizResult', $id_kuis) }}">
        <div class="row">
            <div style="width: 60%; float: :left;">
                <div class="card main-profile">
                    @foreach($kuis as $data)
                    <input type="hidden" id="id_soal" value="{{$data->id}}">
                        <label for="default-radio" style="display:flex; margin-bottom:20px;">
                            <h5 style="font-weight: 600; color: rgb(243, 105, 10); margin-right: 25px">
                                <small><b>{{$page}}</b></small>
                            </h5>
                            <h5>{{$data->question}}</h5>
                        </label>
                        <label class="container2"><h5 style="line-height: 30px; margin-left: 10px">{{$data->option_a}}</h5>
                            <input type="radio" name="{{$data->id}}" value="1" class="pilih" {{ session($data->id) == 1 ? 'checked' : null }}>
                            <span class="checkmark">
                            </span>
                        </label>
                        <label class="container2"><h5 style="line-height: 30px; margin-left: 10px">{{$data->option_b}}</h5>
                            <input type="radio" name="{{$data->id}}" value="2" {{ session($data->id) == 2 ? 'checked' : null }} class="pilih">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container2"><h5 style="line-height: 30px; margin-left: 10px">{{$data->option_c}}</h5>
                            <input type="radio" name="{{$data->id}}" value="3" {{ session($data->id) == 3 ? 'checked' : null }} class="pilih">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container2"><h5 style="line-height: 30px; margin-left: 10px">{{$data->option_d}}</h5>
                            <input type="radio" name="{{$data->id}}" value="4" {{ session($data->id) == 4 ? 'checked' : null }} class="pilih">
                            <span class="checkmark"></span>
                        </label>
                    @endforeach
                    
                </div>
                <div style="float: left; font-size:15px; margin-left:20px;">
                    {{ $kuis->links() }}
                </div>
            </div>
            <div style="width: 35%; float: right; margin-right: 3%;">
                <div class="card card-profile">
                    <div style="margin-bottom: 20px; text-align: center;">
                        <h4>Navigasi Soal Kuis </h4>
                    </div>
                    <div style="margin-bottom: 20px;">
                        @for($i=1; $i<=$totalsoal; $i++)
                            <button class="btn btn_nav" src="#">{{$i}}</button>
                        @endfor
                    </div>
                    <div style="text-align: center;">
                        <button type="submit" class="profile-nav__link active" style="border-radius: 5px; padding: 10px 25px;" ">Selesai</button>
                    </div>
                </div>
            </div>
        </div>
            </form>
    </div>
</section>
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
                    <h2 style="text-align: center;">Waktu Anda Telah Habis!</h2><br>
                    <div class="progress mx-auto" data-value="{{ Session::get('popup') }}">
                        <span class="progress-left">
                            <span class="progress-bar border-danger"></span>
                        </span>
                        <span class="progress-right">
                            <span class="progress-bar border-danger"></span>
                        </span>
                        <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                            <div class="font-weight-bold pt-3" style="font-size: 30px" ><h1>{{ Session::get('popup') }}<small style="font-size: 20px">%</small></h1></div>
                        </div>
                    </div>
                    <br><h6 style="text-align: center;">Silahkan kerjakan kembali!</h6>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" href="{{route('riwayat_kuispajak')}}">OK</button>
            </div>
            </div>
        </div>
    </div>
@endsection
@push('custom-js')
    <script>
    $(document).on('change', '.pilih', function () {
        var id_soal = $("#id_soal").val();
        var jawaban = $(this).val();
        var url = '{!!url('optionChecked')!!}/'+id_soal+"/"+jawaban;
        console.log(url);
        // url = url + "/" + page + "/" + jawaban;
        $.ajax({
            type        : 'get',
            url         : url,
            dataType    : "json",
            success     : function(data){
                console.log("sukses");
            },  error: function(data) {
                console.log("error");
            }
        })
    });
    </script>
    <script>

        // Set the date we're counting down to
        var countDownDate = {{$countdown}};
        var upDate = new Date(parseInt(localStorage.getItem('start_time')));
        upDate.setMinutes( upDate.getMinutes() + countDownDate );

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();
                
            // Find the distance between now and the count down date
            var distance = upDate - now;
                
            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
            // Output the result in an element with id="demo"
            document.getElementById("demo").innerHTML = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";
                
            // If the count down is over, write some text 
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
                $("#nilai").modal("show");
                var id_kuis ="{{$id_kuis}}";
                document.getElementById("demo").innerHTML = "EXPIRED";
                var url = '{!!url('quizResult')!!}/'+id_kuis;
                window.location.href = url;
            }
        }, 1000);
        
    </script>

@endpush