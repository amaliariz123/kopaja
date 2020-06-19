@extends('base.header')
@section('title', 'Edit Profil')
@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">Admin</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home">
                            <a href="#" class="m-nav__link m-nav__link--icon">
                                <i class="m-nav__link-icon flaticon-profile-1"></i>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">Profil</span>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">Edit Profil</span>
                            </a>
                        </li>
                    </ul>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->
    
@include('base.notification')

	<div class="m-content">
		<div class="row">
			<div class="col-xl-12 col-lg-8">
				<div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
					<div class="m-portlet__head">
						<div class="m-portlet__head-caption">
							<div class="m-portlet__head-title">
								<h3 class="m-portlet__head-text">
									Profil Admin
								</h3>
							</div>
						</div>
					</div>

					<!--begin::Form-->
					<form class="m-form m-form--fit m-form--label-align-left" action="{{url('/admin/update/profil/'.Auth::user()->id)}}" method="POST" enctype="multipart/form-data" files=true>
						@csrf
						<div class="m-portlet__body">
							<div class="row">
								<div class="col-3">
									<div class="m-card-profile">
										<div class="m-card-profile__pic">
											<div class="fileinput fileinput-new" data-provides="fileinput">
									            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
									               @if($user['profile_picture'] == null)
									                <img src="{{url('images/picts/user.png')}}" alt="profile picture" />
									                @else 
									                <img src="{{asset('storage/images/user/'.$user['profile_picture'])}}" alt="profile picture" />
									                @endif
									            </div>
									            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
									            <div>
									                <span class="btn btn-info btn-sm btn-file">
									                    <span class="fileinput-new"> Ganti foto </span>
									                    <span class="fileinput-exists"> Ubah </span>
									                    <input type="file" name="profile_picture" accept="image/jpg,image/jpeg,image/png"> </span>
									                <a href="javascript:;" class="btn btn-danger btn-sm fileinput-exists" data-dismiss="fileinput"> Hapus </a>
									            </div>
									        </div><br>
									        @if($user['profile_picture'] != null)
									        <button id="delete-btn" class="btn btn-sm btn-secondary">Hapus foto</button>
									        @endif
										</div>
									</div>
								</div>

								<div class="col-9">
									<div class="form-group m-form__group row">
										<label class="col-form-label col-lg-3 col-sm-12">Nama</label>
										<div class="col-lg-5 col-md-9 col-sm-12">
											<div class="input-group">
												<input type="text" class="form-control m-input" name="fullname" value="{{$user['fullname']}}" required>
											</div>
										</div>
									</div>
									<div class="form-group m-form__group row">
										<label class="col-form-label col-lg-3 col-sm-12">Email</label>
										<div class="col-lg-5 col-md-9 col-sm-12">
											<div class="input-group">
												<input type="email" class="form-control m-input" name="email" value="{{$user['email']}}" required>
											</div>
										</div>
									</div>
									<div class="form-group m-form__group row">
										<label class="col-form-label col-lg-3 col-sm-12">Kata sandi lama</label>
										<div class="col-lg-5 col-md-9 col-sm-12">
											<div class="input-group">
												<input type="password" class="form-control m-input" name="old_password" value="" id="currentPass">
												<i onclick="show('currentPass')" class="fas fa-eye-slash" id="currentPass" style="border: 1px solid #ede9df; padding-top: 10px;padding-left: 10px;padding-right: 10px"></i>
											</div>
											<a href="">
											<small id="emailHelp" class="form-text text-muted">Lupa kata sandi? </small>
											</a>
										</div>
									</div>
									<div class="form-group m-form__group row">
										<label class="col-form-label col-lg-3 col-sm-12">Kata sandi baru</label>
										<div class="col-lg-5 col-md-9 col-sm-12">
											<div class="input-group">
												<input type="password" class="form-control m-input" name="new_password" id="newPass" value="">
												<i onclick="show('newPass')" class="fas fa-eye-slash" id="newPass" style="border: 1px solid #ede9df; padding-top: 10px;padding-left: 10px;padding-right: 10px"></i>
											</div>
										</div>
									</div>
									<div class="form-group m-form__group row">
										<label class="col-form-label col-lg-3 col-sm-12">Konfirmasi kata sandi baru</label>
										<div class="col-lg-5 col-md-9 col-sm-12">
											<div class="input-group">
												<input type="password" class="form-control m-input" name="confirm_new_password" value="" id="confirm_password">
												<i onclick="show('confirm_password')" class="fas fa-eye-slash" id="confirm_password" style="border:1px solid #ede9df;padding-top:10px;padding-left:10px;padding-right:10px"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="m-portlet__foot m-portlet__foot--fit">
							<div class="m-form__actions m-form__actions">
								<div class="row">
									<div class="col-lg-9 ml-lg-auto">
										<button type="submit" class="btn btn-brand">Perbarui</button>
										<button type="reset" class="btn btn-secondary" onclick="window.location='{{ URL::previous() }}'">Batal</button>
									</div>
								</div>
							</div>
						</div>
					</form>
					<!--end::Form-->

				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@push('custom-script')
<script type="text/javascript" src="{{url('assets/demo/demo11/custom/components/base/toastr.js')}}"></script>
<script type="text/javascript">

	function show(a)
	{
		var x = document.getElementById(a);
		var i= x.nextElementSibling

		if(x.getAttribute("type") == "password")
		{
			x.removeAttribute("type");
			x.setAttribute("type", "text");
			i.removeAttribute("class");
			i.setAttribute("class","fas fa-eye");
			//console.log(i);
		} else {
			x.removeAttribute("type");
			x.setAttribute("type", "password");
			i.removeAttribute("class");
			i.setAttribute("class","fas fa-eye-slash");
			//console.log(i);
		}
	}

	$(document).ready(function() {
		$('#delete-btn').on('click', function(event){
			event.preventDefault();
            var id = `{!! $user->id !!}`;
            
            swal({
                text: "Yakin untuk menghapus foto?",
                showCloseButton: true,
                showCancelButton: true,
                confirmButtonText: 'Ya, hapus sekarang.',
                cancelButtonText: 'Tidak, batalkan.',
                reverseButtons: true,
                type: 'warning',
            })
            .then((result) => {
                if(result.value) 
                {
                    $.ajax({
                        url: "{{url('/user/delete/picture')}}"+"/"+id,
                        method: 'get',
                        success: function(result){
                            swal('Dihapus!','Foto telah dihapus.','success')
                            location.reload();
                        }  
                    })
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swal('Dibatalkan', 'Foto batal dihapus.','error')
                }
            });
        });
	});


</script>
@endpush