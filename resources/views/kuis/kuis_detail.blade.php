@extends('base.header')
@section('title','Detail Kuis')
@section('kuis','m-menu__item--active')
@section('content')
@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">Setting Soal</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home">
                            <a href="#" class="m-nav__link m-nav__link--icon">
                                <i class="m-nav__link-icon fa fa-book-reader"></i>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">Kuis</span>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">Detail Kuis</span>
                            </a>
                        </li>
                    </ul>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->

    @include('base.notification')

    @if ($errors->messages())
    <div class="m-content" style="margin-bottom:-30px !important">
        <div class="m-alert m-alert--icon m-alert--icon-solid m-alert--outline alert alert-danger alert-dismissible fade show" role="alert" style="margin-top: -20px; margin-bottom:3rem">
            <button type="button"style="margin-top: 15px" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
            <div class="m-alert__icon">
                <i class="flaticon-alert-1"></i>
                <span></span>
            </div>
            <div class="m-alert__text">
                <strong>
                    Error!
                <br>
                </strong>
                <p>
                    @foreach ($errors->messages() as $key => $error)
                        @foreach ($error as $key => $error)
                          {{ $error }}<br>
                          {{-- <li>{{ $error }}</li> --}}
                        @endforeach
                    @endforeach
                </p>
            </div>
        </div>
    </div>
    @endif

    @if (session('totalQuestion'))
    <div class="m-content" style="margin-bottom:-30px !important">
        <div class="m-alert m-alert--icon m-alert--icon-solid m-alert--outline alert alert-success alert-dismissible fade show" role="alert" style="margin-top: -20px; margin-bottom:3rem">
            <button type="button" style="margin-top: 18px" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span>
            </button>
            <div class="m-alert__icon">
                <i class="flaticon-alert-1"></i>
                <span></span>
            </div>
            <div class="m-alert__text">
                <strong>
                    Berhasil!
                </strong>
                <p>
                    {{session('totalQuestionSuccess')}} dari {{session('totalQuestion')}} soal berhasil diimpor!
                </p>
            </div>
        </div>
    </div>
    <?php Session::forget('totalQuestion'); ?>
    @endif

    <div class="m-content">
        <!--Begin::Section-->
        <div class="row">
            <div class="col-xl-12">
                <div class="m-portlet m-portlet--mobile">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Detail Kuis 
                                </h3>
                            </div>
                        </div>

                        @if(count($totalSoal) == 0)
                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">
                                <!--begin: Button add new data -->
                                <li class="m-portlet__nav-item">
                                    <a  href="{{url('kuis/create/'.$data->id.'/soal')}}" class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--icon m-btn--air" id="btn-create">
                                        <span>
                                            <i class="la la-plus-circle"></i>
                                            <span>Buat soal baru</span>
                                        </span>
                                    </a>
                                </li>
                                <!--end: Button add new data -->

                                <li class="m-portlet__nav-item"></li>

                                <!--begin: More menu -->
                                <li class="m-portlet__nav-item">
                                    <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                        <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                            <i class="la la-ellipsis-h m--font-brand"></i>
                                        </a>
                                        <div class="m-dropdown__wrapper">
                                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                            <div class="m-dropdown__inner">
                                                <div class="m-dropdown__body">
                                                    <div class="m-dropdown__content">
                                                        <ul class="m-nav">
                                                            <li class="m-nav__section m-nav__section--first">
                                                                <span class="m-nav__section-text">Opsi lain</span>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="#" class="m-nav__link" data-toggle="modal" data-target="#import_soal_kuis">
                                                                    <i class="m-nav__link-icon fa fa-file-import"></i>
                                                                    <span class="m-nav__link-text">Impor soal</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!--end: More menu -->
                            </ul>
                        </div>
                        @endif

                    </div>
                 	<div class="m-portlet__body">
                    	<div class="row">
                    		<div class="col-md-2">
                    			@if($data->image == null)
                    			<img src="{{asset('images/no-image.jpg')}}" class="img-responsive" alt="Gambar Kuis">
                    			@else
                    			<img src="{{asset('/storage/images/kuis/'.$data->image)}}" class="img-responsive" alt="Gambar Kuis" width="100%">
                    			@endif
                    		</div>
                    		<div class="col-md-10">
                    			<div class="row">
                    				<label class="text-bold col-sm-2">Judul</label>
                    				<label class="col-sm-10"> : {{$data->title}}</label>
                    			</div>
                    			<div class="row">
                    				<label class="text-bold col-sm-2">Level </label>
                    				<label class="col-sm-10"> : {{$data->level}}</label>
                    			</div>
                    			<div class="row">
                    				<label class="text-bold col-sm-2">Durasi </label>
                    				<label class="col-sm-10"> : {{$data->duration}} &nbsp;menit</label>
                    			</div>
                    			<div class="row">
                    				<label class="text-bold col-sm-2">Total soal</label>
                    				<label class="col-sm-10"> : {{count($totalSoal)}}</label>
                    			</div>
                    			<div class="row">
                    				<label class="text-bold col-sm-2">Deskripsi</label>
                    				<label class="col-sm-10"> : {{$data->description}}</label>
                    			</div>
                    		</div>
                    	</div>
                    </div>
                </div>
            </div>
        </div>
        <!--End::Section-->
    </div>

    @if(count($totalSoal) > 0)
    <div class="m-content">
        <!--Begin::Section-->
        <div class="row">
            <div class="col-xl-12">
                <div class="m-portlet m-portlet--mobile">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Soal dan opsi
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">
                                <!--begin: Button add new data -->
                                <li class="m-portlet__nav-item">
                                    <a  href="{{url('kuis/create/'.$data->id.'/soal')}}" class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--icon m-btn--air" id="btn-create">
                                        <span>
                                            <i class="la la-plus-circle"></i>
                                            <span>Buat soal baru</span>
                                        </span>
                                    </a>
                                </li>
                                <!--end: Button add new data -->

                                <li class="m-portlet__nav-item"></li>

                                <!--begin: More menu -->
                                <li class="m-portlet__nav-item">
                                    <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                        <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                            <i class="la la-ellipsis-h m--font-brand"></i>
                                        </a>
                                        <div class="m-dropdown__wrapper">
                                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                            <div class="m-dropdown__inner">
                                                <div class="m-dropdown__body">
                                                    <div class="m-dropdown__content">
                                                        <ul class="m-nav">
                                                            <li class="m-nav__section m-nav__section--first">
                                                                <span class="m-nav__section-text">Opsi lain</span>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="#" class="m-nav__link" data-toggle="modal" data-target="#import_soal_kuis">
                                                                    <i class="m-nav__link-icon fa fa-file-import"></i>
                                                                    <span class="m-nav__link-text">Impor soal</span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="{{url('kuis/export/soal/'.$data->id)}}" class="m-nav__link">
                                                                    <i class="m-nav__link-icon fa fa-file-export"></i>
                                                                    <span class="m-nav__link-text">Ekspor soal</span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="{{url('/kuis/hasil/'.$data->id)}}" class="m-nav__link">
                                                                    <i class="m-nav__link-icon fa   fa-user-check"></i>
                                                                    <span class="m-nav__link-text">Hasil Kuis</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!--end: More menu -->
                            </ul>
                        </div>
                    </div>
                 	<div class="m-portlet__body">
                 		<!--begin: Search Form -->
                        <div class="d-flex justify-content-end" style="margin-bottom: 1.5em">
                            <div class="m-form">
                                <div class="input-group">
                                    <input type="text" class="form-control m-input" placeholder="Search..." id="search">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2"><i class="flaticon-search"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end: Search Form -->

                 		<div id="container-soal">
                 			@include('kuis.soal')
                 		</div>
                 		<input type="hidden" name="hidden_page" id="hidden_page" value="1" />
                    </div>
                </div>
            </div>
        </div>
        <!--End::Section-->
    </div>
    @endif
</div>

<!--begin::Modal-->
<div class="modal fade" id="import_soal_kuis"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="import-soal" action="{{ url('kuis/import/save/'.$data->id )}}" method="post" enctype="multipart/form-data" files=true>
                    @csrf
                    <div class="text-center" style="margin-bottom: 15px">
                        <i class="fa fa-4x fa-file-import"></i>
                    </div>
                    <fieldset class="content-group">
                        <div class="form group">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h6 style="text-align: center;">Pilih berkas untuk diimpor. Format berkas: *.xls; atau *.xlsx</h6><br>
                                    <input type="file" name="excel" class="form-control" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"><br>
                                    <a href="{{url('/latihan_soal/import/download')}}" style="margin-top: 15px" class="btn btn-sm btn-info"><i class="la la-download"></i> Unduh Template</a><br>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <br>
                    <br>
                    <div class="col-md-12 text-right">                  
                        <button type="reset" class="btn btn-outline-primary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Impor</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--end::Modal-->

@endsection

@push('custom-script')
<script type="text/javascript">
    $(document).ready(function(){

        //delete button
        $('button#delete-specific-question').on('click', function () {
          let idQuestion = $(this).val();
          let idQuiz = {!! $data->id !!};
          
            swal({
                text: "Yakin untuk menghapus soal ini ?",
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
                        url: "{{url('/kuis/delete/')}}"+"/"+idQuiz+"/soal"+"/"+idQuestion,
                        method: 'get',
                        success: function(result){
                            swal('Dihapus!','Soal telah dihapus.','success')
                            location.reload();
                        }  
                    })
                } else {
                    swal('Dibatalkan','Soal batal dihapus.','error')
                }
            });
        });

         function fetch_data(page, query)
        {
            $.ajax({
                url:"/kuis/"+"{{$data->id}}"+"/search/soal/"+"?page="+page+"&query="+query,
                method:'GET',
                success:function(data)
                {
                    $('#container-soal').html('');
                    $('#container-soal').html(data);
                }
            })
        }

        $(document).on('keyup', '#search', function(){
            let query = $('#search').val();
            let page = $('#hidden_page').val();
            fetch_data(page, query);
        });

        $(document).on('click', 'pagination a', function(event){
            event.preventDefault();
            let page = $(this).attr('href').split('page=')[1];
            $('#hidden_page').val(page);

            let query = $('#search').val();
            $('li').removeClass('active');
            $(this).parent().addClass('active');
            fetch_data(page,query);
        });

    });
</script>
@endpush