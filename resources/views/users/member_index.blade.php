@extends('base.header')
@section('title', 'Data Member')
@section('members', 'm-menu__item--open')
@section('members1', 'm-menu__item--active')
@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    @include('base.notification')
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">Member</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home">
                            <a href="#" class="m-nav__link m-nav__link--icon">
                                <i class="m-nav__link-icon fas fa-user-friends"></i>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">Tabel</span>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">Tabel Member</span>
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
                                    Tabel Member
                                </h3>
                            </div>
                        </div>
                    </div>
                  <div class="m-portlet__body">

                        <!--begin: Datatable -->
                        <table class="table table-striped table-bordered" id="table_member">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Instansi</th>
                                    <th>Usia (tahun)</th>
                                    <th>Status</th>
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

@include('users.member_detail')

<!-- Jquery -->
<script src="{{url('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{url('js/jquery-ui.min.js')}}"></script>
@endsection

@push('custom-script')
<script type="text/javascript">
    var member_table;

    $(document).ready(function(){
        tabel_user = $('#table_member').DataTable({
            processing : true,
            serverSide : true,
            stateSave : true,
            ajax : {
                url : "{{url('/members/get_data')}}",
                type : "GET",
            },
            deferRender : true,
            columns : [
                {data: 'fullname', name: 'fullname', visible:true},
                {data: 'institution', name: 'institution', visible:true},
                {data: 'age', name: 'age', visible:true},
                {data: 'status', name:'status', visible:true},
                {data: 'option', name: 'option', visible:true},
            ],
        });
    }); 
</script>
@endpush