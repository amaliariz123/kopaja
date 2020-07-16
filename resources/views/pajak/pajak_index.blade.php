@extends('base.header')
@section('title', 'Data Pajak')
@section('pajak', 'm-menu__item--active')
@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">Setting Pajak</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home">
                            <a href="#" class="m-nav__link m-nav__link--icon">
                                <i class="m-nav__link-icon fa fa-calculator"></i>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">Pajak</span>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">Data Pajak</span>
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
                            </ul>

                        </div>
                    </div>
                  <div class="m-portlet__body">
                     
                        <!--begin: Datatable -->
                        <table class="table table-striped table-bordered" cellspacing="0" id="table_pajak">
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

            let data = tabelPajak.row($(this).parents('tr')).data();
            let id = data['id'];
            let url = "{{url('/pajak/show')}}"+"/"+id;

            if(data['module'] != null) {
                $('#show_link').empty();
                var link = $('<a href="{{ url('storage/pajak/')}}/'+id+'" class="btn btn-sm btn-info" target="_blank">Klik untuk membuka materi</a>');   
            } else {
                $('#show_link').empty();
                var link = $('<p>Tidak ada materi yang dapat dibuka.</p>');
            }

            $('#show_link').append(link);
            $('input[name=_method]').val('PUT');
            $('input[name=detail_name]').val(data['name']);
            $('textarea[name=detail_description]').val(data['description']);
            $('input[name=detail_tax_type]').val(data['tax_type']);
        });

        //trigger to delete-modal
        $('#table_pajak tbody').on('click', '#delete-btn', function(){
            let data = tabelPajak.row($(this).parents('tr')).data();
            let name = data['name'];
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
                            tabelPajak.ajax.reload();
                            //location.reload();
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

            let data = tabelPajak.row($(this).parents('tr')).data();
            let id = data['id'];
            let token = $('input[name=_token]').val();
            let urlData = "{{url('/pajak')}}"+"/"+id+"/edit";

            $('input[name=_method]').val('PUT');
            $('input[name=_token]').val(token);
            $('input[name=edit_id]').val(data['id']);
            $('input[name=edit_name]').val(data['name']);
            $('textarea[name=edit_description]').val(data['description']);
            $('.fileinput-filename').text(data['module']);
            
            let rbButton = $('input[name=edit_tax_type]');
            for(let i=0;i<rbButton.length;i++)
            {
                if(rbButton[i].value == data['tax_type'])
                {
                    rbButton[i].checked = true;
                } else {
                    rbButton.checked =false;
                }
            }

            $("#tax-update:input").val('');
            $("#tax-edit-modal").modal('show');
        });
    });
</script>
@endpush