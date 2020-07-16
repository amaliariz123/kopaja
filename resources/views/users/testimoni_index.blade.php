@extends('base.header')
@section('title', 'Data Testimoni')
@section('members', 'm-menu__item--open')
@section('members2', 'm-menu__item--active')
@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">Member</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="#" class="m-nav__link m-nav__link--icon">
                            <i class="m-nav__link-icon fa fa-comment-dots"></i>
                        </a>
                    </li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">Testimoni</span>
                        </a>
                    </li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">Testimoni Member</span>
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
                                    Tabel Data Testimoni
                                </h3>
                            </div>
                        </div>
                    </div>
                  <div class="m-portlet__body">

                        <!--begin: Datatable -->
                        <table class="table table-striped table-bordered" id="tabel_testi">
                            <thead>
                                <tr>
                                    <th>Nama member</th>
                                    <th>Instansi</th>
                                    <th>Ditambahkan pada</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <!--End::Section-->
    </div>
</div>

@include('users.testimoni_detail')

<!-- Jquery -->
<script src="{{url('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{url('js/jquery-ui.min.js')}}"></script>
@endsection

@push('custom-script')
<script type="text/javascript">
    var testi_table;

    $(document).ready(function(){
        testi_table = $('#tabel_testi').DataTable({
            processing: true,
            stateSave: true,
            ajax : {
                url : "{{url('/testimoni/get_data')}}",
                type : "GET",
            },
            deferRender: true,
            columns: [
                {data: 'fullname', name:'fullname', visible: true},
                {data: 'institution', name: 'institution', visible: true},
                {data: 'created_at', name: 'created_at', visible: true},
                {data: 'option', name: 'option', visible: true},
            ],
        });

        $('#tabel_testi tbody').on('click', '#detail-btn', function(){
            let data = testi_table.row($(this).parents('tr')).data();
            let id = data['id'];
            let token = $('input[name=_token]').val();
            //let url = "{{url('')}}"

            $('textarea[name=testimonial]').val(data['content']);
            $('input[name=member_name]').val(data['fullname']);
            $('input[name=institution]').val(data['institution']);
            $('input[name=created_at]').val(data['created_at']);
            $('input[name=updated_at]').val(data['updated_at']);

            $("#testi-detail:input").val('');
            $("#testi-detail-modal").modal('show');
        });
    });
</script>
@endpush