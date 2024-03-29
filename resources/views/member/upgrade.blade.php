@extends('layouts.land')
<link rel="stylesheet" href="{{url('/')}}/etrain/css/profile.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@section('content')
<section class="advance_feature learning_part" style="padding-bottom:0px; z-index: 99;
  padding: 150px 0px 50px;">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="col-md-10">
        <div style="margin-bottom: 20px;">
            <div style="width:100%;">
                <h2>Apa itu KOPAJA Premium ?</h2><br>
            </div>
            <p>KOPAJA Premium adalah fitur unggulan yang kami kembangkan untuk mendukung fungsionalitas dari alat peraga Kompas Pajak Ajaib. Pada alat peraga KOPAJA terdapat kode yang bisa digunakan untuk berlangganan menjadi Member Premium. Keuntungan menjadi Member Premium adalah:</p>
            <div>
            <ul class="unordered-list">
                <li><p>Mengakses pembahasan latihan soall pajak</p></li>
                <li><p>Mengikuti Kuis Pajak</p></li>
                <li><p>Melihat histori kuis pajak</p></li>
            </ul>
            </div>
        </div>
        </div>
        <div class="col-md-10">
          <div class="card card-profile" style="margin-left: 0px;">
            <div class="info-profile">
                <h4>Mulai berlangganan KOPAJA Premium</h4>
            </div>
            <form action="{{ route('upgrade') }}" method="POST">
                @csrf
                <div>
                    <div class="fields">
                        <label class="fields__label">Masukkan kode premium Anda</label>
                        <input class="fields__input" name="code" placeholder="" required="">
                    </div>
                </div>
                <button type="submit" class="form-edit__btn" style="float:right;">Upgrade</button>
            </form>
          </div>
      </div>
        </div>
        <div class="col-md-6">
            <img style="max-width: 100%;" src="{{ asset('/etrain/img/upgrade.jpg') }}">
        </div>
    </div>
</div>
</section>
<script>
    @if ($errors->has('error'))
        swal("Salah!", "Kode tidak dapat digunakan", "warning");
    @endif
</script>
@endsection
