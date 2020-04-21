@extends ('layouts.land')
<link rel="stylesheet" href="{{url('/')}}/etrain/css/profile.css">

@section('content')
        <div class="container">
            <div class="row ">
                <div class="card card-profile">
                    <div class="info-profile">
                        <div class="profile__ava" style="background-image: url(../etrain/img/user.png);"></div>
                        <h5>Azza Ulil</h5>
                    </div>
                    <nav class="profile-nav">
                        <a class="profile-nav__link active" aria-current="true" href="/profile">Profil</a>
                        <a class="profile-nav__link" aria-current="false" href="/change-pass">Ubah Kata Sandi dan Email</a>
                        <a class="profile-nav__link" aria-current="false" href="/testi">Testimoni</a>
                    </nav>
                </div>

                <div class="card main-profile">
                    <form method="POST" action="{{ url('/update/profile/'.Auth::user()->id) }}">
                        @csrf
                        <div class="form-header">
                            <h3>Ubah Profil</h3>
                            <button class="form-edit__btn" type="submit">Simpan Perubahan</button>
                        </div>

                        <div class="form-edit__avatar">
                            <div class="profile__ava" style="width:70px; height:70px; background-image: url(../etrain/img/user.png);"></div>
                            
                            <div>
                                <button class="form-edit__change-photo">Ganti foto</button>
                            </div>
                            <input type="file" style="display: none;" multiple="">
                        </div>

                        <div>
                            <div class="fields">
                                <label class="fields__label">Nama Lengkap</label>
                                <input class="fields__input" name="fullname" value="{{Auth::user()->fullname}}" placeholder="" required=""></input>
                            </div>
                        </div>
                        <div>
                            <div class="fields">
                                <label class="fields__label">Instansi/Nama Sekolah</label>
                                <input class="fields__input" name="institution" value="{{$data['member']['institution']}}" placeholder="" required=""></input>
                            </div>
                        </div>
                        
                    </form>
                </div>

            </div>
        </div>

@endsection