@extends ('layouts.land')
<link rel="stylesheet" href="{{url('/')}}/etrain/css/profile.css">

@section('content')
<section class="advance_feature learning_part" style="padding-bottom:0px; z-index: 99;
  padding: 180px 0px 0px;">
        <div class="container">
            <div class="row ">
            <div class="col-lg-8 col-xl-5 col-sm-8">
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
                        <h5>{{$data['user']['fullname']}}</h5>
                    </div>
                    <nav class="profile-nav">
                        <a class="profile-nav__link active" aria-current="true" href="{{url('/profile/edit/'.Auth::user()->id)}}">Profil</a>
                        <a class="profile-nav__link" aria-current="false" href="{{url('/account/edit/'.Auth::user()->id)}}">Ubah Kata Sandi dan Email</a>
                        <a class="profile-nav__link" aria-current="false" href="{{url('/testimoni/create/'.Auth::user()->id)}}">Testimoni</a>
                    </nav>
                </div>
            </div>

                <div class="col-md-6 col-lg-6">
                <div class="card main-profile">
                    <form method="POST" action="{{ url('/update/profile/'.Auth::user()->id) }}" enctype="multipart/form-data" files=true>
                        @csrf
                        <div class="form-header">
                            <h3>Ubah Profil</h3>
                            <button class="form-edit__btn" type="submit">Simpan Perubahan</button>
                        </div>

                        <div class="form-edit__avatar">
                            
                            <div class="form-edit__dropzone">
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
                                <!-- <button class="form-edit__change-photo">Ganti foto</button> -->
                                
                            </div>
                            <input id="profile_picture" name="profile_picture" type="file" style="border-radius: 5px;" accept="image/*">
                            
                        </div>

                        <div>
                            <div class="fields">
                                <label class="fields__label">Nama Lengkap</label>
                                <input class="fields__input" name="fullname" value="{{$data['user']['fullname']}}" placeholder="" required=""></input>
                            </div>
                        </div>
                        <div>
                            <div class="fields">
                                <label class="fields__label">Tanggal Lahir</label>
                                <input class="fields__input" name="date_of_birth" type="date" value="{{$data['member']['date_of_birth']}}" placeholder="" required=""></input>
                            </div>
                        </div>
                        <div>
                            <div class="fields">
                                <label class="fields__label">Instansi/Nama Sekolah</label>
                                <hint style="font-size:12px; color: #EE390F;">contoh : UGM / SMAN 1 Yogyakarta</hint>
                                <input class="fields__input" name="institution" value="{{$data['member']['institution']}}" placeholder="" required=""></input>
                            </div>
                        </div>

                        <div class="row" style="margin: 0 -10px;">
                            <div class="fields" style="width:50%; padding: 0 10px;">
                                <label class="fields__label">Provinsi</label>
                                <select id="province-select" name="province_id" class="form-control" >
                                    <option value="">
                                        Provinsi
                                    </option>
                                     @foreach ($province as $key => $value)
                                        <option value="{{ $key }}" {{ $key  === $data['member']['province_id'] ? 'selected' : null }}>{{ $value }}</option>
                                    @endforeach
                                    </select>
                                    <!-- buat inputan kosong -->
                                    <input type="hidden" name="province" id="hiddenProvince" value="">
                                        @error('province')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                            </div>
                            <div class="fields" style="width:50%; padding: 0 10px;">
                                <label class="fields__label">Kota (Domisili)</label>
                                <select id="city-select" name="city_id" class="form-control">
                                    <option value="">Kota/Kabupaten</option>
                                    </select>
                                    
                                    @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
        $(document).ready(function(){
            $('#province-select').change(function(){
                // console.log("test");
                var province_id = $(this).val();
                var city_id = "{{$data['member']['city_id']}}";
                // console.log(city_id);
                var provinsi_name = $("select[name='province-select'] option:selected").text();  //add this
                $('#hiddenProvince').val(provinsi_name);
                if(province_id){
                    $.ajax({
                        url: '/getCity/' + province_id,
                        type : 'GET',
                        dataType : 'json',
                        success: function(data){
                            console.log("testtes");
                            $('#province').empty();  //add this
                            $('#province')
                                .append("<input type='text' class='form-control' name='province' id='province' value='"+provinsi_name+"'>");
                            // console.log(data);
                            $('#city-select').empty();
                            $.each(data, function(key, value){
                                if(key == city_id){
                                    var x = "selected";
                                } else {
                                    var x = "";
                                }
                                $('#city-select')
                                    .append('<option '+x+' value="'+key+'">'+ value + '</option>');

                            });
                        }
                    });
                } else {
                    $('#city-select').empty();
                }
         });
        });
        
        $(document).ready(function (){
            var provinsi_id = "{{$data['member']['province_id']}}";
            var city_id = "{{$data['member']['city_id']}}";
            console.log(provinsi_id, city_id);
            $.ajax({
                url: '/getCity/' + provinsi_id,
                type : 'GET',
                dataType : 'json',
                success: function(data){
                    console.log(data);
                    $('#city-select').empty();
                    $.each(data, function(key, value){
                        if(key == city_id){
                            var x = "selected";
                        } else {
                            var x = "";
                        }
                        $('#city-select')
                            .append('<option '+x+' value="'+key+'">'+ value + '</option>');

                    });
                }
            });
        })
    </script>
@endsection