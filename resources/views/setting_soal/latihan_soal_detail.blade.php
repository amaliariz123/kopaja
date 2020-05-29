@extends('base.header')
@section('title','Detail Latihan Soal')
@section('latihan','m-menu__item--active')
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
                                <i class="m-nav__link-icon fa fa-book-open"></i>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">Latihan Soal</span>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">Detail Latihan Soal</span>
                            </a>
                        </li>
                    </ul>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->

    @include('base.notification')

    <div class="m-content">
    <!--Begin::Section-->
        <div class="row">
            <div class="col-xl-12">
                <div class="m-portlet m-portlet--mobile">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Detail Latihan Soal {{$tax->name}}
                                </h3>
                            </div>
                        </div>

                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">
                                <!--begin: Button add new data -->
                                <li class="m-portlet__nav-item">
                                    <a  href="{{url('/latihan_soal/create/soal/'.$tax->id.'/'.$tax->name)}}" class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--icon m-btn--air" id="btn-create">
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
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon fa fa-file-import"></i>
                                                                    <span class="m-nav__link-text">Impor soal</span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon fa fa-file-export"></i>
                                                                    <span class="m-nav__link-text">Ekspor soal</span>
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
                            @include('setting_soal.latihan_soal_persoal')
                        </div>
                        <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
                    </div>
                </div>
            </div>
        </div>       

        <!--End::Section-->
    </div>
</div>
@endsection

@push('custom-script')
<script type="text/javascript">

$(document).ready(function(){

    //delete button
    $('button#delete-specific-question').on('click', function () {
      let idQuestion = $(this).val();
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
                    url: "{{url('/latihan_soal/delete/soal')}}"+"/"+idQuestion,
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
            url:"/latihan_soal/search/soal/"+"{{$tax->id}}"+"?page="+page+"&query="+query,
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


})
</script>
@endpush