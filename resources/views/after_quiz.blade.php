@extends ('layouts.quiz')
<link rel="stylesheet" href="{{url('/')}}/etrain/css/profile.css">

@section('content')
<section class="advance_feature learning_part" style="padding-bottom:0px; z-index: 0;
  padding: 130px 0px 0px;">
    <div class="container">
        <div class="row ">
            <div class="card card-profile">
                <div style="margin-bottom: 20px;">
                    <h4>Mulai Kuis Pajak Anda!</h4>
                    <p>Sebelum memulai kuis, pilih judul kuismu terlebih dahulu</p>
                </div>
                <div>
                    <button type="submit" class="btn_1" style="border-radius: 5px; padding: 10px 25px; float: right;"
                        data-toggle="modal" data-target="#pilihKuis">
                        Mulai Kuis<i class="ti-arrow-right" style="padding-right: 0px;"></i></button>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection