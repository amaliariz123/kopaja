@extends ('layouts.land')
<link rel="stylesheet" href="{{url('/')}}/etrain/css/profile.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
            box-shadow: 0px 5px 15px 0px rgba(0, 0, 0, 0.15);
            margin-bottom: 50px;
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
            padding: 15px;
        }

        i {
            font-size: 20px;
            padding-right: 10px;
        }

        i:hover {
            cursor: pointer;
        }
        .btn-medium{
            padding: 1px 5px; 
            border-radius: 0px;
            border-color: transparent; 
            font-size: 12px; 
            color: #fff;
            background-color: darkorange;
        }
        .btn-mudah{
            padding: 1px 5px; 
            border-radius: 0px;
            border-color: transparent; 
            font-size: 12px; 
            color: #fff;
            background-color: #F9B700;
        }
        .btn-sulit{
            padding: 1px 5px; 
            border-radius: 0px;
            border-color: transparent; 
            font-size: 12px; 
            color: #fff;
            background-color: #EE390F;
        }

    </style>
@endsection

@section('content')
<section class="advance_feature learning_part" style="padding-bottom:0px; z-index: 0;
  padding: 130px 0px 0px;">
<div class="container">
    <div class="row ">
        <div>
        <div class="card card-profile">
            <div style="margin-bottom: 20px;">
            	<h4>Mulai Kuis Pajak Anda!</h4>
            	<p>Sebelum memulai kuis, pilih judul kuismu terlebih dahulu</p>
            </div>
            <div>
                <button type="submit" class="btn_1" style="border-radius: 5px; padding: 10px 25px; float: right;" data-toggle="modal" data-target="#pilihKuis">
                Mulai Kuis&nbsp;<i class="ti-arrow-right" style="padding-right: 0px;"></i></button>
            </div>
            </div>
        </div>

    <!-- history_page -->
    <div style="width:63%;">
        <div class="card main-profile">
        <div class="form-header">
        	<h3>Riwayat Kuis Pajak</h3>
        </div>
        	<table id="table_history" >
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Judul Kuis</th>
                        <th>Nilai</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($history as $data)
                    <tr>
                        <td>{{Carbon\Carbon::parse($data->created_at)->formatLocalized('%d %b %Y')}}</td>
                        <td>{{Carbon\Carbon::parse($data->created_at)->format('H:i:s')}}</td>
                        <td>{{$data->quiz->title}}</td>
                        <td>{{$data->score}}</td>
                        <td >
                        
                            <i class="ti-info-alt detail" value="{{$data->id}}" data-toggle="modal" data-target="#detailHistory" data-toggle="tooltip" data-placement="top" title="Detail"></i>
                            <button value="{{$data->id}}" class="btn-icon delete_history" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="ti-trash"></i></button>
                            
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
        	</table>
        	
        
        </div>
    </div>
    </div>
</div>
</section>
<!-- Jquery -->
<script src="{{url('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{url('js/jquery-ui.min.js')}}"></script>

<div class="modal fade" id="detailHistory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Detail Riwayat Kuis</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-6">
            <h6>Level Kuis : </h6><h6 id="level"></h6><br>
            <h6>Durasi Kuis (menit): </h6><h6 id="duration"></h6>
        </div>
      </div>
      
    </div>
  </div>
</div>
<div class="modal fade" id="pilihKuis" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Pilih Kuis Pajak untuk Memulai</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div style="padding:20px;">
            @foreach($kuis as $data)
            <div class="card card-profile" style="width:90%;" >
                <h4>{{$data->title}}</h4>
                <div class="row" style="margin-left: 0px; margin-bottom: 10px;">
                    @if($data->level == 'mudah')
                    <button class="btn-mudah">Level {{$data->level}}</button>
                    @elseif($data->level == 'medium')
                    <button class="btn-medium">Level {{$data->level}}</button>
                    @elseif($data->level == 'sulit')
                    <button class="btn-sulit">Level {{$data->level}}</button>
                    @endif
                    <h6 style="padding-left: 10px; margin-bottom: 0px;"><i class="ti-timer"></i>{{$data->duration}} menit</h6>
                </div>
                <p>{{$data->description}}</p>
                {{$data->image}}
                <div style="margin-top: 10px;">
                    <a id="start_time" class="btn_1" style="padding: 7px 25px; float: right;" href="{{route('kuis_pajak.show', $data->id)}}">Mulai</a></div>
            </div>
            @endforeach
        </div>
      </div>
      
    </div>
  </div>
</div>
<!-- Modal -->

<div class="modal fade" id="test" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nilai Anda adalah : </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if(Session::get('popup') < 25 ) <h2 style="text-align: center;">Sangat Buruk!</h2><br>


                    <div class="progress mx-auto"
                        data-value="{{ Session::get('popup') }}">
                        <span class="progress-left">
                            <span class="progress-bar border-danger"></span>
                        </span>
                        <span class="progress-right">
                            <span class="progress-bar border-danger"></span>
                        </span>
                        <div
                            class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                            <div class="font-weight-bold pt-3" style="font-size: 30px">
                                <h1>{{ Session::get('popup') }}<small
                                        style="font-size: 20px">%</small></h1>
                            </div>
                        </div>
                    </div>


                    <br>
                    <h6 style="text-align: center;">Terus belajar, jangan menyerah, tetap semangat, kamu pasti bisa!
                    </h6>
                    @elseif(Session::get('popup') < 50 ) <h2 style="text-align: center;">Kurang Baik!
                        </h2><br>


                        <div class="progress mx-auto"
                            data-value="{{ Session::get('popup') }}">
                            <span class="progress-left">
                                <span class="progress-bar border-warning"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar border-warning"></span>
                            </span>
                            <div
                                class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                <div class="font-weight-bold pt-3" style="font-size: 30px">
                                    <h1>{{ Session::get('popup') }}<small
                                            style="font-size: 20px">%</small></h1>
                                </div>
                            </div>
                        </div>


                        <br>
                        <h6 style="text-align: center;">Kurang sedikit lagi. Tingkatkan belajar lagi ya!</h6>
                        @elseif(Session::get('popup') < 75 ) <h2 style="text-align: center;">
                            Bagus Sekali!</h2><br>


                            <div class="progress mx-auto"
                                data-value="{{ Session::get('popup') }}">
                                <span class="progress-left">
                                    <span class="progress-bar border-primary"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar border-primary"></span>
                                </span>
                                <div
                                    class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                    <div class="font-weight-bold pt-3" style="font-size: 30px">
                                        <h1>{{ Session::get('popup') }}<small
                                                style="font-size: 20px">%</small></h1>
                                    </div>
                                </div>
                            </div>



                            <br>
                            <h6 style="text-align: center;">Wow! Bagus. Test selanjutnya pasti lebih baik!</h6>
                            @else
                            <h2 style="text-align: center;">Luar Biasa!</h2><br>


                            <div class="progress mx-auto"
                                data-value="{{ Session::get('popup') }}">
                                <span class="progress-left">
                                    <span class="progress-bar border-succes"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar border-succes"></span>
                                </span>
                                <div
                                    class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                    <div class="font-weight-bold pt-3" style="font-size: 30px">
                                        <h1>{{ Session::get('popup') }}<small
                                                style="font-size: 20px">%</small></h1>
                                    </div>
                                </div>
                            </div>


                            <br>
                            <h6 style="text-align: center;">Hebat! Pertahankan terus. Jangan sampai lengah. Selamat!
                            </h6>
                            @endif

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('custom-js')
<script type="text/javascript">
  $('#table_history').DataTable({
    "pagingType"        : "numbers",
    "lengthMenu"        : [
                        [10, 25, 50, -1],
                        [10, 25, 50, "All"]
                        ],
    responsive          : true, 
    language            : {
    search              : "_INPUT_",
    searchPlaceholder   : "Cari",
    }
  });

    $(document).on('click', '.detail', function () {
            var id = $(this).attr('value');
            $.ajax({
                type        : 'get',
                url         : "{{url('riwayat_kuispajak/detail')}}"+"/"+id,
                dataType    : 'html',
                success     : function(data){
                    var servers = $.parseJSON(data);
                    $.each(servers, function(index, value){
                        var level = value.quiz.level;
                        var duration = value.quiz.duration;
                        
                        $('#level').text(level);
                        $('#duration').text(duration);
                    });
                }
            });
            
        });
        //DELETE
    $(document).on('click', '.delete_history', function(){
        var id = $(this).val();
        var tr = $(this).parents('tr');
        console.log(id);
        console.log(tr);
        swal({
            title: "Yakin ingin menghapus?",
            text: "Anda tidak akan mendapatkan kembali data yang sudah dihapus!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type: 'get',
                    url: "{{url('/riwayat_kuispajak/delete')}}"+"/"+id,
                    dataType: "json",
                    success: function(result){
                        swal("Sukses!", "Berhasil dihapus", "success");
                        location.reload();
                    }, error    : function(){
                        swal("Error!", "Tidak bisa dihapus!", "error");
                    }
                })
                
            } else {
                swal("Data batal dihapus!");
            }
        });
    });
</script>
<script>
  $(document).on('click', '#start_time', function(){
    console.log('hayuk')
    localStorage.setItem('start_time', new Date().getTime())
  });
</script>
@if (Session::get('popup') !== null )
    <script>
        
        $('#test').modal('show');
        
        $(function() {

        $(".progress").each(function() {
            var value = $(this).attr('data-value');
            var left = $(this).find('.progress-left .progress-bar');
            var right = $(this).find('.progress-right .progress-bar');
        if (value > 0) {
            if (value <= 50) {
            right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
            } else {
            right.css('transform', 'rotate(180deg)')
            left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
            }
          }
        })
        function percentageToDegrees(percentage) {
        return percentage / 100 * 360
        }
        });
    </script>
        @endif
@endpush