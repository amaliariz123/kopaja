@extends ('layouts.land')
<link rel="stylesheet" href="{{url('/')}}/etrain/css/profile.css">

@section('content')
<section class="advance_feature learning_part" style="padding-bottom:0px; z-index: 99;
  padding: 150px 0px 100px;">
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
            <form id="testi-update" method="POST" action="">
            {{ method_field('POST') }}
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
		$.ajaxSetup({
        	headers: {
            	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        	}
		});
        $('#testi-update').on('submit', function(e){
            e.preventDefault();
			var id = "{{Auth::user()->id}}";
            console.log(id)

			$.ajax({
				'type' : 'post',
				'url' : "{{url('/update/testimoni')}}"+"/"+id,
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
					} else {
						console.log(data);
						for(let count=0; count < data.errors.length; count++)
						{
							toastr.error(data.errors[count], 'Error', {timeOut:6000});
						}
					}
				}
			})
		})
    });     
</script>

@endsection