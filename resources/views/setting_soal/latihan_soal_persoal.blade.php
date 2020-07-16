@foreach($questions as $key => $value)
<div class="card">
    <div class="card-header">
        <div class="row" style="margin-top: 1.2em">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-sm-1">
                       <p><b>{{$number++}}</b></p>
                    </div>

                    @if(!empty($value->image))
                    <div class="col-sm-2">
                        <img class="img-responsive" src="{{asset('/storage/images/latihan_soal_image/'.$value->image)}}" alt="gambar soal" style="width:85%;height:85%" />
                    </div>
                    @endif

                    <div class="col-sm-9">
                        <p class="card-title">
                            {{$value->question}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <button type="button" id="delete-specific-question" value="{{$value->id}}" style="margin-top:-8px;" class="btn btn-sm btn-outline-danger m-btn m-btn--outline-2x pull-right"><i class="flaticon-delete position-left"></i> Hapus </button>
                <a style="margin-top:-8px;margin-right:10px" href="{{url('/latihan_soal/edit/soal/'.$value->id.'/'.$tax->name)}}" class="btn btn-sm btn-outline-success m-btn m-btn--outline-2x pull-right"><i class="flaticon-edit position-left"></i> &nbsp; Edit </a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6 form-group">
               <div class="row">
                    <div class="col-md-1">
                     @if($value->right_answer == '1')
                     <p><i style="color:#4CAF50;" class="fa fa-check-circle position-left"></i></p>
                     @else
                     <p><i style="color:#F44336;" class="fa fa-times-circle position-left"></i></p>
                     @endif
                    </div>
                    <div class="col-md-1">
                        <p><b>a</b></p>
                    </div>
                    <div class="col-md-10">
                        <p>{{$value->option_a}}</p>
                    </div>
               </div>
            </div>
            <div class="col-sm-6 form-group">
                <div class="row">
                    <div class="col-md-1">
                     @if($value->right_answer == '3')
                     <p><i style="color:#4CAF50;" class="fa fa-check-circle position-left"></i></p>
                     @else
                     <p><i style="color:#F44336;" class="fa fa-times-circle position-left"></i></p>
                     @endif
                    </div>
                    <div class="col-md-1">
                        <p><b>c</b></p>
                    </div>
                    <div class="col-md-10">
                        <p>{{$value->option_c}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 form-group">
                <div class="row">
                    <div class="col-md-1">
                     @if($value->right_answer == '2')
                     <p><i style="color:#4CAF50;" class="fa fa-check-circle position-left"></i></p>
                     @else
                     <p><i style="color:#F44336;" class="fa fa-times-circle position-left"></i></p>
                     @endif
                    </div>
                    <div class="col-md-1">
                        <p><b>b</b></p>
                    </div>
                    <div class="col-md-10">
                        <p>{{$value->option_b}}</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 form-group">
                <div class="row">
                    <div class="col-md-1">
                     @if($value->right_answer == '4')
                     <p><i style="color:#4CAF50;" class="fa fa-check-circle position-left"></i></p>
                     @else
                     <p><i style="color:#F44336;" class="fa fa-times-circle position-left"></i></p>
                     @endif
                    </div>
                    <div class="col-md-1">
                        <p><b>d</b></p>
                    </div>
                    <div class="col-md-10">
                        <p>{{$value->option_d}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@endforeach
<br>
<div class="row">
    <div class="col-md-1">
        <a href="{{url('latihan_soal')}}" type="reset" class="btn btn-sm btn-outline-info m-btn m-btn--outline-2x" id=""> <i class="fa fa-arrow-left"></i> &nbsp;Kembali</a>
    </div>

    <div class="col-md-11">
        <div class="pull-right">
            {{ $questions->links() }}
        </div>
    </div>
</div>
