@extends ('layouts.land')
<link rel="stylesheet" href="{{url('/')}}/etrain/css/profile.css">

@section('content')
<section class="advance_feature learning_part" style="padding-bottom:0px; z-index: 99;
  padding: 180px 0px 0px;">
<div class="container">
    <div class="row ">
        <div class="card card-profile">
            <div class="info-profile">
                <div class="profile__ava" style="background-image: url('{{ asset('/etrain/img/user.png') }}');"></div>
                <h5>{{ $data['user']['fullname'] }}</h5>
            </div>
            <nav class="profile-nav">
                <a class="profile-nav__link" aria-current="true" href="{{url('/profile/edit/'.Auth::user()->id)}}">Profil</a>
                <a class="profile-nav__link" aria-current="false" href="{{url('/account/edit/'.Auth::user()->id)}}">Ubah Kata Sandi dan Email</a>
                <a class="profile-nav__link active" aria-current="false" href="{{url('/testimoni/create/'.Auth::user()->id)}}">Testimoni</a>
            </nav>
        </div>

        <div class="card main-profile">
            <form method="POST" action="{{url('/update/testimoni/'.Auth::user()->id)}}">
                @csrf
                <div class="form-header">
                    <h3>Testimoni</h3>
                </div>

                <div>
                    <div class="fields">
                        <label class="fields__label">Ubah testimoni</label>
                        <textarea id="content" name="content" class="textarea__input" placeholder="">{{$data['testimoni']['content']}}</textarea>
                        <button class="form-create__btn" type="submit" style="float: right;">Simpan perubahan</button>
                    </div>
                </div>
                
            </form>
        </div>

    </div>
</div>
</section>

@endsection