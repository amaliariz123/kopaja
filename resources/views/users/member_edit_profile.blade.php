@extends ('layouts.land')
<link rel="stylesheet" href="{{url('/')}}/etrain/css/profile.css">

@section('content')
        <div class="container">
            <div class="row ">
                <div class="card card-profile">
                    <div class="info-profile">
                        <div class="profile__ava" style="background-image: url('{{ asset('/etrain/img/user.png') }}');"></div>
                        <h5>{{$data['user']['fullname']}}</h5>
                    </div>
                    <nav class="profile-nav">
                        <a class="profile-nav__link active" aria-current="true" href="{{url('/profile/edit/'.Auth::user()->id)}}">Profil</a>
                        <a class="profile-nav__link" aria-current="false" href="{{url('/account/edit/'.Auth::user()->id)}}">Ubah Kata Sandi dan Email</a>
                        <a class="profile-nav__link" aria-current="false" href="{{url('/testimoni/create/'.Auth::user()->id)}}">Testimoni</a>
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
                            <div class="profile__ava" style="width:70px; height:70px; background-image: url('{{ asset('/etrain/img/user.png') }}');"></div>
                            
                            <div class="form-edit__dropzone">
                                <button class="form-edit__change-photo">Ganti foto</button>
                                <input type="file" style="display: none;" accept="image/*">
                            </div>
                            
                        </div>

                        <div>
                            <div class="fields">
                                <label class="fields__label">Nama Lengkap</label>
                                <input class="fields__input" name="fullname" value="{{$data['user']['fullname']}}" placeholder="" required=""></input>
                            </div>
                        </div>
                        <div>
                            <div class="fields">
                                <label class="fields__label">Instansi/Nama Sekolah</label>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
        $(document).ready(function(){
            $('#province-select').change(function(){
                var provinsi_id = $(this).val();
                var city_id = "{{$data['member']['city_id']}}";
                console.log(city_id);
                var provinsi_name = $("select[name='province-select'] option:selected").text();  //add this
                $('#hiddenProvince').val(provinsi_name);
                if(provinsi_id){
                    $.ajax({
                        url: '/getCity/' + provinsi_id,
                        type : 'GET',
                        dataType : 'json',
                        success: function(data){
                            $('#province').empty();  //add this
                            $('#province')
                                .append("<input type='text' class='form-control' name='province' id='province' value='"+provinsi_name+"'>");
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