@extends('base.header')
@section('title', 'Data Pajak')
@section('pajak', 'm-menu__item--active')
@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">Pajak</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home">
                            <a href="#" class="m-nav__link m-nav__link--icon">
                                <i class="m-nav__link-icon fa fa-calculator"></i>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">List</span>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">Pajak Pusat</span>
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
                                    Tabel Pajak
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
                                                                <span class="m-nav__section-text">Quick Actions</span>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-share"></i>
                                                                    <span class="m-nav__link-text">Create Post</span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                    <span class="m-nav__link-text">Send Messages</span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-multimedia-2"></i>
                                                                    <span class="m-nav__link-text">Upload File</span>
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
                     
                        <!--begin: Datatable -->
                        <table class="table table-striped table-bordered" id="table_pajak">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Tipe Pajak</th>
                                    <th>Materi</th>
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

@include('pajak.pajak_create')
@include('pajak.pajak_edit')
@include('pajak.pajak_detail')

<!-- Jquery -->
<script src="{{url('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{url('js/jquery-ui.min.js')}}"></script>
@endsection

@push('custom-script')
<script>
    var tabelPajak;

    $(document).ready(function(){

        /*parsing data to datatable */
        tabelPajak = $('#table_pajak').DataTable({
            processing: true,
            serverSide: true,
            stateSave: true,
            ajax: {
                url: "{{url('pajak/get_data')}}",
                type: "GET",
            },
            deferRender: true,
            columns: [
                {data:'name', name:'name', visible: true},
                {data: 'tax_type', name: 'tax_type', visible: true},
                {data: 'module', name: 'module', visible: true},
                {data: 'option', name: 'option', visible: true},
            ],
        });

        //trigger to create-modal
        $('#btn-create').on('click', function(){
            $('input[name=name]').val('');
            $('textarea[name=description]').val('');
            $('input[name=module]').val('');
            $('#tax-create-modal').modal('show');
        });

        //trigger to detail-modal
        $('#table_pajak tbody').on('click', '#detail-btn', function(){
            $("#tax-detail:input").val('');
            $("#tax-detail-modal").modal('show');

            var data = tabelPajak.row($(this).parents('tr')).data();
            var id = data['id'];
            var url = "{{url('/pajak/show')}}"+"/"+id;

            $('input[name=_method]').val('PUT');
            $('input[name=detail_name]').val(data['name']);
            $('textarea[name=detail_description]').val(data['description']);
            $('input[name=detail_tax_type]').val(data['tax_type']);
            $('input[name=detail_module]').val(data['module']);
        });

        //trigger to delete-modal
        $('#table_pajak tbody').on('click', '#delete-btn', function(){
            var data = tabelPajak.row($(this).parents('tr')).data();
            var name = data['name'];
            swal({
                text: "Yakin untuk menghapus "+name+" ?",
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
                        url: "{{url('/pajak/delete')}}"+"/"+data['id'],
                        method: 'get',
                        success: function(result){
                            //tabelPajak.ajax.reload();
                            location.reload();
                            swal('Dihapus!','Data '+name+' telah dihapus.','success')
                        }  
                    })
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swal('Dibatalkan', 'Data '+name+' batal dihapus.','error')
                }
            });
        });

        //trigger to edit-modal
        $('#table_pajak tbody').on('click', '#edit-btn', function(){
            $("#tax-update:input").val('');
            $("#tax-edit-modal").modal('show');

            var data = tabelPajak.row($(this).parents('tr')).data();
            var id = data['id'];
            var token = $('input[name=_token]').val();
            var urlData = "{{url('/pajak')}}"+"/"+id+"/edit";

            $('input[name=_method]').val('PUT');
            $('input[name=_token]').val(token);
            $('input[name=edit_name]').val(data['name']);
            $('textarea[name=edit_description]').val(data['description']);
            $('input[name=edit_tax_nam]').val(data['tax_name']);
            $('input[name=edit_module]').val(data['module']);
        });
    });
</script>
@endpush