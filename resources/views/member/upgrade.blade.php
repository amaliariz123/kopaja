@extends('layouts.land')
<link rel="stylesheet" href="{{url('/')}}/etrain/css/profile.css">

@section('content')
<section class="advance_feature learning_part" style="padding-bottom:0px; z-index: 99;
  padding: 150px 0px 0px;">
    <div class="container">
    <div class="row ">
        <div class="col-md-6" >
        <div style="width:70%;">
                <h2>Keuntungan menjadi Member Premium</h2>
</div>
<div>
    <ul>
        <li>wegduw</li>
        <li>wejdfgca</li>
    </ul>
    <h6></h6>
</div>
        
        
        </div>
        <div class="col-md-5">
        <div class="card card-profile">
            <div class="info-profile">
                <h5>Upgrade to Premium</h5>
            </div>
            <form action="{{ route('upgrade') }}">
                {{ csrf_field() }}
                <div>
                    <div class="fields">
                        <label class="fields__label">Masukkan kode premium Anda</label>
                        <input class="fields__input" name="code" value="" placeholder="" required=""></input>
                    </div>
                </div>
                <button type="submit" class="form-edit__btn" style="float:right;">Upgrade</button>
            </form>
        </div>
        </div>
        </div>
    </div>
</section>
@endsection