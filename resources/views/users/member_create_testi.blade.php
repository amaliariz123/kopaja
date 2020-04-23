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
                        <a class="profile-nav__link" aria-current="false" href="/change-pass">Ubah Kata Sandi dan Email</a>
                        <a class="profile-nav__link active" aria-current="true" href="/testi">Testimoni</a>
                    </nav>
                </div>

                <div class="card main-profile">
                    <form method="POST" action="#">

                        <div class="form-header">
                            <h3>Testimoni</h3>
                            <button class="form-edit__btn" type="submit">Simpan Testimoni</button>
                        </div>

                        <div>
                            <div class="fields">
                                <label class="fields__label">Testimoni</label>
                                <textarea name="address" class="textarea__input textarea__input--error" placeholder="Apa yang anda rasakan bersama Kopaja?"></textarea>
                            </div>
                        </div>
                        
                    </form>
                </div>

            </div>
        </div>

@endsection