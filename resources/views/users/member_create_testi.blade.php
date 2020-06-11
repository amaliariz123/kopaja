@extends ('layouts.land')
<link rel="stylesheet" href="{{url('/')}}/etrain/css/profile.css">

@section('content')
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
                        <label class="fields__label">Tambah testimoni</label>
                        <textarea id="content" name="content" class="textarea__input" placeholder="Apa yang Anda rasakan bersama Kopaja?"></textarea>
                        <button class="form-create__btn" type="submit" style="float: right;">Simpan testimoni</button>
                    </div>
                </div>
                
            </form>
            <hr>

            <div class="form-header">
                <h4>Detail testimoni</h4>
            </div>
            <div class="testi-detail">
                <div>{{ $testimoni['content'] }}</div>
            </div>
            <hr>
        </div>

    </div>
</div>
@endsection