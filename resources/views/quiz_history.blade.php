@extends ('layouts.land')
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
<section class="advance_feature learning_part" style="padding-bottom:0px; z-index: 0;
  padding: 130px 0px 0px;">
<div class="container">
    <div class="row ">
        <!-- pilih level kuis -->
        <div style="width: 35%; float: left; margin-right: 3%;">
        <div class="card card-profile">
            <div style="margin-bottom: 20px;">
            	<h4>Level Kuis Pajak</h4>
            	<p>Sebelum memulai kuis, pilih level kuismu terlebih dahulu</p>
            </div>
            <div>
            	<label class="container2"><h5 style="line-height: 30px; margin-left: 10px">Mudah</h5>
                    <input type="radio" name="easy" value="easy">
                    <span class="checkmark"></span>
                </label>
                <label class="container2"><h5 style="line-height: 30px; margin-left: 10px">Sedang</h5>
                    <input type="radio" name="medium" value="medium">
                    <span class="checkmark"></span>
                </label>
                <label class="container2"><h5 style="line-height: 30px; margin-left: 10px">Sulit</h5>
                    <input type="radio" name="diff" value="diff">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div>
                <a class="btn_1" style="border-radius: 5px; padding: 10px 25px; float: right;" href="{{ url('/halaman_kuis') }}">Mulai Kuis<i class="ti-arrow-right" style="padding-right: 0px;"></i></a>
            </div>
        </div>
    </div>

    <!-- history_page -->
    <div style="width: 60%; float: :right;">
        <div class="card main-profile">
        <div class="form-header">
        	<h3>Riwayat Kuis Pajak</h3>
        </div>
        	<table id="table_history">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Judul Kuis</th>
                        <th>Nilai</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
        	</table>
        	
        
        </div>
    </div>
            </div>
            </div>
        </div>

@include('history_detail')

<!-- Jquery -->
<script src="{{url('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{url('js/jquery-ui.min.js')}}"></script>
@endsection

@push('custom-script')
<script type="text/javascript">
    var history_table;

    $(document).ready(function(){
        history_table = $('#table_history').DataTable({
            processing : true,
            serverSide : true,
            stateSave : true,
            ajax : {
                url : "{{url('/riwayat_kuispajak')}}",
                type : "GET",
            },
            deferRender : true,
            columns : [
                {data: 'created_at', name: 'created_at', visible:true},
                {data: 'title', name: 'title', visible:true},
                {data: 'score', name: 'score', visible:true},
                {data: 'option', name: 'option', visible:true},
            ],

        });

        $('#table_history tbody').on('click', "#detail-btn", function(){
            
            let data = history_table.row($(this).parents('tr')).data();
            let id = data['id'];
            let quiz_id = data['quiz_id'];
            let urlData = "{{url('/history/show')}}"+"/"+id+"/"+quiz_id;

            $('input[name=_method]').val('PUT');
            $('input[name=detail_level]').val(data['level']);
            $('input[name=detail_duration]').val(data['duration']);
            

            // console.log(data['name']);

            $("#history-detail:input").val('');
            $("#history-detail-modal").modal('show');
        })
    }); 
</script>
@endpush