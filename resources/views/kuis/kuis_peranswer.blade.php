<?php $no = 0; ?>
@foreach($question as $key =>$value)
<?php $no++; ?>
<div class="card">
    <div class="row justify-content-center">
        <div class="col-md-10 member_answer">
            <div class="row">
                <div class="col-sm-12">
                    @if($value->image != null)
                    <center>
                        <img class="img-responsive" src="{{asset('/storage/images/soal/'.$value->image)}}" style="width: 20%;height: 20%" alt="gambar soal"/>
                    </center>
                    @endif
                    <h5 style="margin-bottom: 10px"> {{$no}}. {{$value->question}} </h5>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="exercise_answer"> 
                        <div class="m-checkbox-list">
                            <label class="m-checkbox m-checkbox--bold">
                                <input type="checkbox" class="custom-control-input" value="1" name="option_a" @if($value->member_answer=='1') checked @endif disabled >
                                {{ $value->option_a }}
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="exercise_answer"> 
                        <div class="m-checkbox-list">
                            <label class="m-checkbox m-checkbox--bold">
                                <input type="checkbox" value="3" name="option_c" @if($value->member_answer=='3') checked @endif disabled >
                                {{ $value->option_c }}
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="exercise_answer"> 
                        <div class="m-checkbox-list">
                            <label class="m-checkbox m-checkbox--bold">
                                <input type="checkbox" value="2" name="option_b" @if($value->member_answer=='2') checked @endif disabled >
                                {{ $value->option_b }}
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="exercise_answer"> 
                        <div class="m-checkbox-list">
                            <label class="m-checkbox m-checkbox--bold">
                                <input type="checkbox" value="4" name="option_d" @if($value->member_answer=='4') checked @endif disabled >
                                {{ $value->option_d }}
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            @if($value->member_answer == $value->right_answer)
            <div class="alert alert-success" role="alert" style="margin-top: 10px;">
                <h6>Jawaban benar</h6>
            </div>
            @else
            <div class="alert alert-danger" role="alert" style="margin-top: 10px;">
                <h6>Jawaban salah.</h6>
                <h6>Jawaban benar : 
                    @if($value->right_answer == 1)
                    {{ $value->option_a }}
                    @elseif($value->right_answer == 2)
                    {{ $value->option_b }}
                    @elseif($value->right_answer == 3)
                    {{ $value->option_c }}
                    @else
                    {{ $value->option_d }}
                    @endif
                </h6>
            </div>
            @endif
            @foreach($percentage->where('question_id', $value->question_id) as $q)
                <h5>Presentase jawaban benar : {{ number_format($q->percentage,0) }}%</h5>
            @endforeach
        </div>
    </div>
</div>
<br>
@endforeach

<div class="row">
    <div class="col-md-11">
        <div class="pull-right">
            {{ $question->links() }}
        </div>
    </div>
</div>