@extends ('layouts.land')
<link rel="stylesheet" href="{{url('/')}}/etrain/css/profile.css">

@section('content')
<section class="advance_feature learning_part" style="padding-bottom:0px; z-index: 99;
  padding: 150px 0px 0px;">
<div class="container">
    @php
        $member = DB::table('members')->where('user_id', Auth::user()->id)->first();
    @endphp
    <div class="row">
    <div>
        <div class="card card-profile">
        <div class="info-profile">
                        <div class="profile__ava">
                            @if($data['user']['profile_picture']==null)
                                    <img id="gambar" class="navbar-brand-full" src="{{ asset('/etrain/img/user.png') }}"
                                        width="300px" alt="upload foto"
                                       >
                                    @else
                                    <a src="{{asset('storage/images/user/'.$data['user']['profile_picture'])}}" target="_blank">
                                        <img id="gambar" width="100px" src="{{asset('storage/images/user/'.$data['user']['profile_picture'])}}"
                                            >
                                    </a>
                                    @endif
                        </div>
                        <div>
                            <h5 style="margin-bottom:0px;">{{$data['user']['fullname']}}</h5>
                            @if($member->member_status == 'reguler')
                            <p style="color:#F9B700;"><i class="ti-tag" ></i>Member {{$member->member_status}}</p>
                            @else
                            <p style="color:#F9B700;"><i class="ti-crown" ></i>Member {{$member->member_status}}</p>
                            @endif
                        </div>
                    </div>
            <nav class="profile-nav">
                <a class="profile-nav__link" aria-current="true" href="{{url('/profile/edit/'.Auth::user()->id)}}">Profil</a>
                <a class="profile-nav__link" aria-current="false" href="{{url('/account/edit/'.Auth::user()->id)}}">Ubah Kata Sandi dan Email</a>
                <a class="profile-nav__link active" aria-current="false" href="{{url('/testimoni/create/'.Auth::user()->id)}}">Testimoni</a>
            </nav>
        </div>
    </div>

    <div class="col-sm-7">
        <div class="card main-profile">
            <form method="POST" action="{{url('/update/testimoni/'.Auth::user()->id)}}">
                @csrf
                <div class="form-header">
                    <h3>Ubah Testimoni</h3>
                </div>

                <div>
                    <div class="fields">
                        <label class="fields__label">Testimoni</label>
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