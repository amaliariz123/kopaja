@foreach($questions as $key => $value)
<div class="card">
    <div class="card-header">
        <div class="row" style="margin-top: 1.2em">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-sm-1">
                       <p><b>{{$number++}}</b></p>
                    </div>
                    <div class="col-sm-11">
                        <p class="card-title">
                            <b>{{$value->title}}</b>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <button type="button" id="delete-specific-question" value="{{$value->id}}" style="margin-top:-8px;" class="btn btn-sm btn-outline-danger m-btn m-btn--outline-2x pull-right"><i class="flaticon-delete position-left"></i> Hapus </button>
                <a style="margin-top:-8px;margin-right:10px" href="{{url('contoh_soal/edit/soal/'.$value->id.'/'.$tax->name)}}" class="btn btn-sm btn-outline-success m-btn m-btn--outline-2x pull-right"><i class="flaticon-edit position-left"></i> &nbsp; Edit </a>
            </div>
        </div>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{{$value->question_text}}</li>
        <li class="list-group-item">{{$value->answer_text}}</li>
    </ul>
</div>
<br>
@endforeach

<div class="row">
    <div class="col-md-11">
        <div class="pull-right">
            {{ $questions->links() }}
        </div>
    </div>
</div>