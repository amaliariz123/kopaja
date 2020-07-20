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
      <div>
        <div class="card card-profile">
        <div class="info-profile">
                        <div class="profile__ava">
                            @if($data->profile_picture == null)
                                <img id="gambar" class="navbar-brand-full" src="{{ asset('/etrain/img/user.png') }}"
                                    width="300px" alt="upload foto">
                            @else
                                <img id="gambar" width="100px" src="{{asset('storage/images/user/'.$data->profile_picture)}}">
                            @endif
                        </div>
                        <div>
                            <h5 style="margin-bottom:0px;">{{$data->fullname}}</h5>
                            @if($member->member_status == 'reguler')
                            <p style="color:#F9B700;"><i class="ti-tag" ></i>&nbsp;Member {{$member->member_status}}</p>
                            @else
                            <p style="color:#F9B700;"><i class="ti-crown" ></i>&nbsp;Member {{$member->member_status}}</p>
                            @endif
                        </div>
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
            <form id="account-update" method="POST" action="">
            {{ method_field('POST') }}
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
		$.ajaxSetup({
        	headers: {
            	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        	}
		});
        $('#account-update').on('submit', function(e){
            e.preventDefault();
			var id = "{{Auth::user()->id}}";
            console.log(id)

			$.ajax({
				'type' : 'post',
				'url' : "{{url('/update/account')}}"+"/"+id,
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