@extends('base.header')
@section('title','Kuis')
@section('kuis','m-menu__item--active')
@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">Setting</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home">
                            <a href="#" class="m-nav__link m-nav__link--icon">
                                <i class="m-nav__link-icon fa fa-file-alt"></i>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">Setting Soal</span>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">Kuis</span>
                            </a>
                        </li>
                    </ul>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content">
        <!--Begin::Section-->
        <div class="row">
            <div class="col-xl-12">
                <div class="m-portlet m-portlet--mobile">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Tabel Kuis
                                </h3>
                            </div>
                        </div>

                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">
                                <!--begin: Button add new data -->
                                <li class="m-portlet__nav-item">
                                    <a  href="#" data-toggle="modal" data-target="#create_quiz" class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--icon m-btn--air" id="btn-create">
                                        <span>
                                            <i class="la la-plus-circle"></i>
                                            <span>Tambah</span>
                                        </span>
                                    </a>
                                </li>
                                <!--end: Button add new data -->
                            </ul>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                     
                        <!--begin: Datatable -->
                        <table class="table table-striped table-bordered" id="tabel_kuis">
                            <thead>
                                <tr>
                                    <th>Judul Kuis</th>
                                    <th>Level</th>
                                    <th>Durasi (menit)</th>
                                    <th>Dibuat pada</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                        <!--end:: Datatable -->
                    </div>
                </div>
            </div>
        </div>       
        <!--End::Section-->
    </div>
</div>


<!--begin::Modal-->
<div class="modal fade" id="create_quiz" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data Kuis</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="kuis-store" method="POST" action="" enctype="multipart/form-data" file=true>
					@csrf
					<fieldset class="content-group">
					<div class="form-group">
						<label for="name" class="form-control-label">Judul<span class="text-danger">*</span></label>
						<input type="text" class="form-control" name="title" placeholder="..." required>
					</div>
					<div class="form-group">
						<label for="description" class="form-control-label">Deskripsi<span class="text-danger">*</span></label>
						<textarea type="text" class="form-control" name="description" rows="5" placeholder="..." required></textarea>
					</div>
					<div class="form-group">
						<label for="level" class="form-control-label">Level<span class="text-danger">*</span></label>
						<div class="m-radio-list">
							<label class="m-radio m-radio--brand">
								<input type="radio" name="level" value="mudah" required>Mudah
								<span></span>
							</label>
							<label class="m-radio m-radio--brand">
								<input type="radio" name="level" value="medium">Sedang
								<span></span>
							</label>
							<label class="m-radio m-radio--brand">
								<input type="radio" name="level" value="sulit">Sulit
								<span></span>
							</label>
						</div>
					</div>
					<div class="form-group">
						<label for="duration" class="form-control-label">Durasi<span class="text-danger">*</span></label>
						<input type="number" id="duration" min="1" class="form-control" name="duration" placeholder="..." required>
						<small id="emailHelp" class="form-text text-muted">Durasi dalam menit</small>
					</div>
					<div class="form-group">
						<label for="image" class="form-control-label">Gambar</label><br>
						<div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                <img src="{{asset('images/blank.png')}}" alt="" /> </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                            <div>
                                <span class="btn btn-info btn-sm btn-file">
                                    <span class="fileinput-new"> Select image </span>
                                    <span class="fileinput-exists"> Change </span>
                                    <input type="file" name="image" accept="image/jpg,image/jpeg,image/png">
                                </span>
                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                            </div>
                        </div>
						<small id="emailHelp" class="form-text text-muted">Ukuran maksimal 2 MB. (*jpg, *png, *jpeg)</small>
					</div>
					</fieldset>
					<br>
					<div class="col-md-12 text-right">
						<button type="reset" class="btn btn-outline-primary" data-dismiss="modal">Batal</button>
						<button type="submit" id="submit" class="btn btn-primary">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!--end::Modal-->

@include('kuis.kuis_edit')

<!-- Jquery -->
<script src="{{url('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{url('js/jquery-ui.min.js')}}"></script>

@endsection

@push('custom-script')
<script type="text/javascript">
	var tabelKuis;

	$(document).ready(function(){
        //parsing data to datatable
        tabelKuis = $('#tabel_kuis').DataTable({
            processing : true,
            stateSave : true,
            ajax : {
                url : "{{url('/kuis/get_data')}}",
                type : "GET",
            },
            deferRender : true,
            columns : [
                {data:'title', name:'title', visible:true},
                {data: 'level', name: 'level', visible:true},
                {data: 'duration', name: 'duration', visible:true},
                {data: 'created_at', name: 'created_at', visible:true},
                {data: 'option', name: 'option', visible:true},
            ],
        });

        //STORE
        $.ajaxSetup({
        	headers: {
            	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        	}
		});

		$('#kuis-store').on('submit', function(e){
			e.preventDefault();
			$.ajax({				
				'type' : 'POST',
				'url' : "{{url('/kuis/create/store')}}",
				'data' : new FormData(this),
				'processData' : false,
				'contentType' : false,
				'dataType' : 'JSON',
				'success' : function(data){
					if(data.success)
					{
						$('#create_quiz').modal('hide');
						toastr.success('Data berhasil ditambahkan!', 'Success', {timeOut:6000});
						tabelKuis.ajax.reload();
						//location.reload();
					} else {
						//console.log(data);
						for(let count=0; count < data.errors.length; count++)
						{
							toastr.error(data.errors[count], 'Error', {timeOut:6000});
						}
					}
				}
			});
		});

        //EDIT
        $('#tabel_kuis tbody').on('click', '#edit-btn', function(){
            $('.fileinput-remove-button').click();
            $("#kuis-update:input").val('');
            $("#edit_quiz").modal('show');

            let data = tabelKuis.row($(this).parents('tr')).data();
            let id = data['id'];
            let token = $('input[name=_token]').val();
            let urlData = " {{ url('/kuis') }}"+"/"+id+"/edit";
            let d = new Date();
            $.getJSON(urlData, function(data){
                $('#show_image').empty();
                if(data['data']['image'] != null) {
                    var img = $('<img id="image-kuis" src="{{ url('storage/kuis/')}}/'+id+'?'+d.getTime()+'" alt="gambar-kuis">');
                } else {
                    var img = $('<img id="image-kuis" src="{{asset('images/blank.png')}}" alt="gambar-kuis">');
                }

                $('#show_image').append(img);

                let rbButton = $('input[name=level]');
                for(let i=0;i<rbButton.length;i++)
                {
                    if(rbButton[i].value == data['data']['level'])
                    {
                        rbButton[i].checked = true;
                    } else {
                        rbButton.checked = false;
                    }
                }

                $('input[name=_method]').val('PUT');
                $('input[name=_token]').val(token);
                $('input[name=id]').val(id);
                $('input[name=title]').val(data['data']['title']);
                $('textarea[name=description]').val(data['data']['description']);
                $('input[name=duration]').val(data['data']['duration']);
            });
        });


        //DELETE
        $('#tabel_kuis tbody').on('click', '#delete-btn', function(){
            let data = tabelKuis.row($(this).parents('tr')).data();

            swal({
                text: "Yakin untuk menghapus data ini?",
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
                        url: "{{url('/kuis/delete')}}"+"/"+data['id'],
                        method: 'get',
                        success: function(result){
                            //location.reload();
                            swal('Dihapus!','Data '+name+' telah dihapus.','success')
                            tabelKuis.ajax.reload();
                        }  
                    })
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swal('Dibatalkan','Data '+name+ ' batal dihapus.','info')
                }
            });
        });
    });
</script>
@endpush