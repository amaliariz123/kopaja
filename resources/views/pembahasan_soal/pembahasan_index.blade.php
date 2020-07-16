@extends('base.header')
@section('title','Pembahasan Latihan Soal')
@section('pembahasan','m-menu__item--active')
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
                                <i class="m-nav__link-icon fa fa-file-signature"></i>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">Pembahasan Latihan Soal</span>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">Soal</span>
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
                                    Tabel Pembahasan Latihan Soal
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
                        <table class="table table-striped table-bordered" id="tabel_pembahasan">
                            <thead>
                                <tr>
                                    <th>Nama Pajak</th>
                                    <th>Soal</th>
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

@include('pembahasan_soal.pembahasan_create')
@include('pembahasan_soal.pembahasan_detail')
<!-- Jquery -->
<script src="{{url('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{url('js/jquery-ui.min.js')}}"></script>

@endsection

@push('custom-script')
<script type="text/javascript">

    var pembahasanTable;

    $(document).ready(function(){

        /*parsing data to datatable */
        pembahasanTable = $('#tabel_pembahasan').DataTable({
            processing: true,
            stateSave: true,
            ajax: {
                url: "{{url('pembahasan_soal/get_data')}}",
                type: "GET",
            },
            deferRender: true,
            columns: [
                {data:'tax_name', name:'tax_name', visible: true},
                {data:'question', name:'question', visible: true, width:'50%'},
                {data: 'created_at', name: 'created_at', visible: true},
                {data: 'option', name: 'option', visible: true},
            ],
        });

        //trigger to create-modal
        $('#btn-create').on('click', function(){
            $('select[name=question]').val('');
            $('#m_select2_modal').modal('show');
        });

        $('#m_select2_1_modal').change(function(){
            var id_soal = $(this).val();
            var soal = $("select[name='question'] option:selected").text();
            $('#hiddenQuestion').val(id_soal);
        });

        $('.zoom').hover(function() {
            $(this).addClass('transition');
        }, function() {
            $(this).removeClass('transition');
        });

        //trigger to detail-modal
        $('#tabel_pembahasan tbody').on('click', '#detail-btn', function(){
            $("#pembahasan-detail:input").val('');
            $("#pembahasan-detail-modal").modal('show');

            let data = pembahasanTable.row($(this).parents('tr')).data();
            let id = data['id'];
            //console.log(data);

            if(data['image'] != null) {
                $('#show_img').empty();
                var img = $('<img src="{{ url('storage/pembahasan/')}}/'+id+'" class="img-responsive zoom" style="width:50%;height:50%">'); 
            } else {
                $('#show_img').empty();
                var img = $('<img src="{{asset('images/blank.png')}}" >');
            }

            $('#show_img').append(img);
            $('input[name=_method]').val('PUT');
            $('input[name=tax]').val(data['tax_name']);
            $('textarea[name=question]').val(data['question']);
            $('textarea[name=solution]').val(data['solution']);
        });

        //trigger to delete-modal
        $('#tabel_pembahasan tbody').on('click', '#delete-btn', function(){
            let data = pembahasanTable.row($(this).parents('tr')).data();
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
                        url: "{{url('/pembahasan_soal/delete')}}"+"/"+data['id'],
                        method: 'get',
                        success: function(result){
                            pembahasanTable.ajax.reload();
                            //location.reload();
                            swal('Dihapus!','Data '+name+' telah dihapus.','success')
                        }  
                    })
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swal('Dibatalkan', 'Data '+name+' batal dihapus.','error')
                }
            });
        });
        
        $(function() {
            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
            });
            
            $('#m_select2_1_modal').on('change', function () {
                $.ajax({
                    method: 'POST',
                    url: "{{url('/pembahasan_soal/get_soal')}}",
                    data: {id: $(this).val()},
                    success: function (response) {
                        $('#m_select2_2_modal').empty();
        
                        $.each(response, function (id, name) {
                            $('#m_select2_2_modal').append(new Option(name, id));
                            $('#hiddenQuestion').val(id);
                            $('form').attr('action', '/pembahasan_soal/create/'+id);
                        })
                    },
                    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                }
                })
            })
        });
    });
</script>
@endpush