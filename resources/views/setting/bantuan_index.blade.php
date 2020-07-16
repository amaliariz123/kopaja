@extends('base.header')
@section('title', 'Bantuan')
@section('bantuan', 'm-menu__item--active')
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
                                <i class="m-nav__link-icon fa fa-map-signs"></i>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">Bantuan</span>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">Bantuan Aplikasi</span>
                            </a>
                        </li>
                    </ul>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->

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
                                    Tabel Pertanyaan Bantuan
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">

                                <!--begin: Button add new data -->
                                <li class="m-portlet__nav-item">
                                    <button type="button" class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--icon m-btn--air" id="btn-create">
                                        <span>
                                            <i class="la la-plus-circle"></i>
                                            <span>Tambah</span>
                                        </span>
                                    </button>
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
                                                                <a href="#" class="m-nav__link" data-toggle="modal" data-target="#import_bantuan">
                                                                    <i class="m-nav__link-icon fa fa-file-import"></i>
                                                                    <span class="m-nav__link-text">Impor data</span>
                                                                </a>
                                                            </li>
                                                            @if(count($data) > 0)
                                                            <li class="m-nav__item">
                                                                <a href="{{url('bantuan_aplikasi/export')}}" class="m-nav__link">
                                                                    <i class="m-nav__link-icon fa fa-file-export"></i>
                                                                    <span class="m-nav__link-text">Ekspor data</span>
                                                                </a>
                                                            </li>
                                                            @endif
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

                        <!--begin: Datatable -->
                        <table class="table table-striped table-bordered" id="table_help">
                            <thead>
                                <tr>                                    
                                    <th>Pertanyaan</th>
                                    <th>Jawaban</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>                                
                            </tbody>
                        </table>
                        <!--End::Datatable-->
                       
                    </div>
                </div>
            </div>
        </div>        
    </div>
    <!--End::Section-->
</div>

<!--begin::Modal-->
<div class="modal fade" id="import_bantuan"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="import-contoh-soal" action="{{url('bantuan_aplikasi/import')}}" method="post" enctype="multipart/form-data" files=true>
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
                                    <a href="{{url('/bantuan_aplikasi/import/download')}}" style="margin-top: 15px" class="btn btn-sm btn-info"><i class="la la-download"></i> Unduh Template</a><br>
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

@include('setting.bantuan_create')
@include('setting.bantuan_edit')


<!-- Jquery -->
<script src="{{url('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{url('js/jquery-ui.min.js')}}"></script>
@endsection

@push('custom-script')
<script>
    var helpTable;

    $(document).ready(function(){

        /*trigger dev-create-modal*/
        $("#btn-create").on('click', function(){
            $('input[question=question]').val('');
            $('input[answer=answer]').val('');
            $('#help-create-modal').modal('show');
        });        

        /*parsing data to datatable*/
        helpTable = $('#table_help').DataTable({
            processing: true,
            stateSave: true,
            ajax: {
                url: "{{url('/bantuan_aplikasi/get_data')}}",
                type: "GET",
            },
            deferRender: true,
            columns: [
                {data: 'question', name:'question', visible:true},
                {data: 'answer', name:'answer', visible:true,width:'75%'},
                {data: 'option', name:'option', visible:true},
            ],
        });

        //trigger modal detail data
        /* $('#table_help tbody').on('click', '#detail-btn', function(){
            $('#help-detail:input').val();
            $('#help-detail-modal').modal('show');

            var data = helpTable.row($(this).parents('tr')).data();
            var id = data['id'];
            var url = "{{url('/bantuan_aplikasi/show')}}"+"/"+id;

            //console.log(data['question']);
            $('input[name=_method]').val('PUT');
            $('input[name=show_question]').val(data['question']);
            $('input[name=show_id]').val(data['id']);
            $('textarea[name=show_answer]').val(data['answer']);
        }); */

        //trigger modal delete
        $('#table_help tbody').on('click', '#delete-btn', function(){
            let data = helpTable.row($(this).parents('tr')).data();

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
                        url: "{{url('/bantuan_aplikasi/delete')}}"+"/"+data['id'],
                        method: 'get',
                        success: function(result){
                            //location.reload();
                            swal('Dihapus!','Data berhasil dihapus.','success')
                            helpTable.ajax.reload();
                        }  
                    })
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swal('Dibatalkan','Data batal dihapus','error')
                }
            });
        });

        //trigger modal edit data
        $('#table_help tbody').on('click', '#edit-btn', function(){
            $('#help-update:input').val('');
            $('#help-edit-modal').modal('show');

            let data = helpTable.row($(this).parents('tr')).data();
            let id = data['id'];
            let token = $('input[name=_token]').val();
            let url = "{{url('/bantuan_aplikasi')}}"+"/"+id+"/edit";

            $('input[name=_method]').val('POST');
            $('input[name=_token]').val(token);
            $('input[name=edit_question]').val(data['question']);
            $('input[name=edit_id]').val(data['id']);
            $('textarea[name=edit_answer]').val(data['answer']);
        })
    });
</script>
@endpush