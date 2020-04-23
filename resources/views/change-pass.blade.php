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
                        <a class="profile-nav__link" aria-current="false" href="/profile">Profil</a>
                        <a class="profile-nav__link active" aria-current="true" href="/change-pass">Ubah Kata Sandi dan Email</a>
                        <a class="profile-nav__link" aria-current="false" href="/testi">Testimoni</a>
                    </nav>
                </div>

                <div class="card main-profile">
                    <form method="POST" action="#">

                        <div class="form-header">
                            <h3>Ubah Kata Sandi dan Email</h3>
                            <button class="form-edit__btn" type="submit">Simpan Perubahan</button>
                        </div>

                        <div>
                            <div class="fields">
                                <label class="fields__label">Kata sandi saat ini</label>
                                <input class="fields__input" name="" value="" placeholder="" required=""></input>
                            </div>
                        </div>
                        <div>
                            <div class="fields">
                                <label class="fields__label">Kata sandi baru</label>
                                <input class="fields__input" name="" value="" placeholder="" required=""></input>
                            </div>
                        </div>
                        <div>
                            <div class="fields">
                                <label class="fields__label">Konfirmasi kata sandi baru</label>
                                <input class="fields__input" name="" value="" placeholder="" required=""></input>
                            </div>
                        </div>

                        <div>
                            <div class="fields">
                                <label class="fields__label">Email</label>
                                <input class="fields__input" name="" value="{{Auth::user()->email}}" placeholder="" required=""></input>
                            </div>
                        </div>
                        
                    </form>
                </div>

            </div>
        </div>

@endsection