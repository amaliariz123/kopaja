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
            background-color: #a6a6a6;
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
        .btn-done {
            background-color: mediumseagreen;
            color: #fff;
        }

    </style>
@endsection
        @section('content')
        <div style="width: 60%; float: :left;">
                <div class="card main-profile">
                    @foreach($kuis as $data)
                    <input type="hidden" id="id_soal" value="{{$data->id}}">
                        <label for="default-radio" style="display:flex; margin-bottom:20px;">
                            <h5 style="font-weight: 600; color: rgb(243, 105, 10); margin-right: 25px">
                                <b>{{$page}}</b>
                            </h5>
                            <h5 style="margin-left: 10px; text-align: left;">{{$data->question}}</h5>
                            @if($data->image != null)
                                <img src="{{asset('storage/images/kuis/'.$data->image)}}">
                            @else
                            @endif
                        </label>
                        <label class="container2"><h5 style="line-height: 30px; margin-left: 10px; text-align: left;">A. {{$data->option_a}}</h5>
                            <input type="radio" name="{{$data->id}}" value="1" class="pilih" {{ session($data->id."id_soal") == 1 ? 'checked' : null }}>
                            <span class="checkmark">
                            </span>
                        </label>
                        <label class="container2"><h5 style="line-height: 30px; margin-left: 10px; text-align: left;">B. {{$data->option_b}}</h5>
                            <input type="radio" name="{{$data->id}}" value="2" class="pilih" {{ session($data->id."id_soal") == 2 ? 'checked' : null }}>
                            <span class="checkmark"></span>
                        </label>
                        <label class="container2"><h5 style="line-height: 30px; margin-left: 10px; text-align: left;">C. {{$data->option_c}}</h5>
                            <input type="radio" name="{{$data->id}}" value="3" class="pilih" {{ session($data->id."id_soal") == 3 ? 'checked' : null }}>
                            <span class="checkmark"></span>
                        </label>
                        <label class="container2"><h5 style="line-height: 30px; margin-left: 10px; text-align: left;">D. {{$data->option_d}}</h5>
                            <input type="radio" name="{{$data->id}}" value="4" class="pilih" {{ session($data->id."id_soal") == 4 ? 'checked' : null }}>
                            <span class="checkmark"></span>
                        </label>
                    @endforeach
                    
                </div>
                <div style="float: left; font-size:15px; margin-left:20px;">
                    {{ $kuis->links() }}
                </div>
            </div>
@endsection
@push('custom-js')
    <script>
    $(document).on('change', '.pilih', function () {
        var id_soal = $("#id_soal").val();
        console.log(id_soal);
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
@endpush