@extends ('layouts.land')
<link rel="stylesheet" href="{{url('/')}}/etrain/css/profile.css">

@section('content')
<section class="advance_feature learning_part" style="padding-bottom:0px; z-index: 99;
  padding: 150px 0px 0px;">
<div class="container">
    <div class="row ">
      <div>
        <div class="card card-profile">
            <div class="info-profile">
                <div class="profile__ava" style="background-image: url('{{ asset('/etrain/img/user.png') }}');"></div>
                <h5>{{ $data['fullname'] }}</h5>
            </div>
            <nav class="profile-nav">
                <a class="profile-nav__link" aria-current="true" href="{{url('/profile/edit/'.Auth::user()->id)}}">Profil</a>
                <a class="profile-nav__link active" aria-current="false" href="{{url('/account/edit/'.Auth::user()->id)}}">Ubah Kata Sandi dan Email</a>
                <a class="profile-nav__link" aria-current="false" href="{{url('/testimoni/create/'.Auth::user()->id)}}">Testimoni</a>
            </nav>
        </div>
      </div>

      <div class="col-sm-7">
        <div class="card main-profile">
            <form method="POST" action="{{url('/update/account/'.Auth::user()->id)}}">
                @csrf
                <div class="form-header">
                    <h3>Ubah Kata Sandi dan Email</h3>
                    <button class="form-edit__btn" type="submit">Simpan Perubahan</button>
                </div>

                <div>
                    <div class="fields">
                        <label class="fields__label">Kata sandi saat ini</label>
                        <input type="password" class="fields__input" name="old_password" value="" placeholder=""></input>
                    </div>
                </div>
                <div>
                    <div class="fields">
                        <label class="fields__label">Kata sandi baru</label>
                        <input type="password" class="fields__input" name="new_password" value="" placeholder=""></input>
                    </div>
                </div>
                <div>
                    <div class="fields">
                        <label class="fields__label">Konfirmasi kata sandi baru</label>
                        <input type="password" class="fields__input" name="confirm_new_pass" value="" placeholder=""></input>
                    </div>
                </div>

                <div>
                    <div class="fields">
                        <label class="fields__label">Email</label>
                        <input type="email" class="fields__input" name="email" value="{{$data['email']}}" placeholder="" required=""></input>
                    </div>
                </div>
                
            </form>
        </div>

    </div>
</div>
</section>
@endsection