@extends ('layouts.land')
<link rel="stylesheet" href="{{url('/')}}/etrain/css/profile.css">

@section('content')
<section class="advance_feature learning_part" style="padding-bottom:0px; z-index: 99;
  padding: 150px 0px 0px;">
        <div class="container">
        @php
            $member = DB::table('members')->where('user_id', Auth::user()->id)->first();
        @endphp
            <div class="row ">
            <div style="width:35%;">
                <div class="card card-profile">
                    <div class="info-profile">
                        <div class="profile__ava">
                            @if($data['user']['profile_picture']==null)
                                <img id="gambar" class="navbar-brand-full" src="{{ asset('/etrain/img/user.png') }}"
                                    width="300px" alt="upload foto">
                                @else
                                    <img id="gambar" max-width="100px" src="{{asset('storage/images/user/'.$data['user']['profile_picture'])}}">
                                @endif
                        </div>
                        <div>
                            <h5 style="margin-bottom:0px;">{{$data['user']['fullname']}}</h5>
                            @if($data['member']['member_status'] == 'reguler')
                            <p style="color:#F9B700;"><i class="ti-tag" ></i>&nbsp;Member {{$data['member']['member_status']}}</p>
                            @else
                            <p style="color:#F9B700;"><i class="ti-crown" ></i>&nbsp;Member {{$data['member']['member_status']}}</p>
                            @endif
                        </div>
                    </div>
                    <nav class="profile-nav">
                        <a class="profile-nav__link active" aria-current="true" href="{{url('/profile/edit/'.Auth::user()->id)}}">Profil</a>
                        <a class="profile-nav__link" aria-current="false" href="{{url('/account/edit/'.Auth::user()->id)}}">Ubah Kata Sandi dan Email</a>
                        <a class="profile-nav__link" aria-current="false" href="{{url('/testimoni/create/'.Auth::user()->id)}}">Testimoni</a>
                    </nav>
                </div>
                <br>
            @if($data['member']['member_status'] == 'reguler')
            <div style="">
                <div class="card card-profile">
                    <div class="info-profile" style="margin-bottom: 10px;">
                        <h4>Langganan KOPAJA Premium</h4>
                    </div>
                    <form action="{{ route('upgrade.show') }}">
                        <div>
                            <div class="fields">
                                <label class="fields__label">Ingin menjadi member premium? Pilih tombol Premium untuk mengarah ke halaman Premium.</label>
                            </div>
                        </div>
                        <button type="submit" class="form-edit__btn" style="float:right;">Premium</button>
                    </form>
                </div>
            </div>
                @else
                @endif
            </div>

                <div class="col-sm-7" style="float:right;">
                <div class="card main-profile">
                    <form id="profile-update" method="POST" action="" enctype="multipart/form-data" files=true>
                    {{ method_field('POST') }}
                        {{ csrf_field() }}
                        <div class="form-header">
                            <h3>Ubah Profil</h3>
                            <button class="form-edit__btn" type="submit">Simpan Perubahan</button>
                        </div>

                        <div class="form-edit__avatar">
                            
                                <div class="fileinput fileinput-new" data-provides="fileinput" style="display:flex; align-items:center;">
								    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                        @if($data['user']['profile_picture']==null)
                                        <img id="gambar" class="navbar-brand-full" src="{{ asset('/etrain/img/user.png') }}"
                                            width="300px" alt="upload foto"
                                        >
                                        @else
                                        <img src="{{asset('storage/images/user/'.$data['user']['profile_picture'])}}" style="max-width:200px; margin-right:15px;">
                                        </a>
                                        @endif
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                    <div style="margin-left:10px;">
                                        <span class="btn btn-info btn-sm btn-file btn_2" style="font-size:14px; padding:10px 15px;">
                                            <span class="fileinput-new"> Ganti foto </span>
                                            <span class="fileinput-exists"> Ubah </span>
                                            <input type="file" name="profile_picture" accept="image/jpg,image/jpeg,image/png"> </span>
                                        <a href="javascript:;" class="btn btn-danger btn-sm fileinput-exists" data-dismiss="fileinput"> Hapus </a>
                                        <br> <small id="emailHelp" class="form-text text-muted">Ukuran maksimal 2 MB. (*jpg, *png, *jpeg)</small>
                                    </div>
                                </div>
                            <div >
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
                                <label class="fields__label">Tanggal Lahir</label>
                                <input class="fields__input" name="date_of_birth" type="date" value="{{$data['member']['date_of_birth']}}" placeholder="" required=""></input>
                                
                            </div>
                        </div>
                        <div>
                            <div class="fields">
                                <label class="fields__label">Instansi/Nama Sekolah</label>
                                <hint style="font-size:12px; color: grey;">contoh : UGM / SMAN 1 Yogyakarta</hint>
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
        var provinsi_name = $("select[name='province-select'] option:selected").text();  //add this
        console.log(provinsi_name);
        $('#hiddenProvince').val(provinsi_name);
        if(province_id){
            $.ajax({
                url: '/getCity/' + province_id,
                type : 'GET',
                dataType : 'json',
                success: function(data){
                    // console.log("testtes");
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
    $(document).ready(function(){
		$.ajaxSetup({
        	headers: {
            	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        	}
		});
        $('#profile-update').on('submit', function(e){
            e.preventDefault();
			var id = "{{Auth::user()->id}}";
            console.log(id)

			$.ajax({
				'type' : 'post',
				'url' : "{{url('/update/profile')}}"+"/"+id,
                'data' : new FormData(this),
				'processData' : false,
				'contentType' : false,
				'dataType' : 'JSON',
				'success' : function(data){
					if(data.success)
					{
						// $('#edit_quiz').modal('hide');
						toastr.success('Data berhasil diperbarui!', 'Success', {timeOut:8000});
						location.reload();
						//location.reload();
					} 
				}
			})
		})
    }); 
</script>

@endsection