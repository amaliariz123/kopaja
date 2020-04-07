@extends('base.header')
@section('title', 'Data Pengguna')
@section('user', 'm-menu__item--active')
@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">Pengguna</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home">
                            <a href="#" class="m-nav__link m-nav__link--icon">
                                <i class="m-nav__link-icon fa fa-users"></i>
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
                                <span class="m-nav__link-text">Tabel Pengguna</span>
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
                                    Tabel Pengguna
                                </h3>
                            </div>
                        </div>
                    </div>
                  <div class="m-portlet__body">

                        <!--begin: Datatable -->
                        <table class="table table-striped table-bordered" id="user_table">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
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

@include('users.user_role')
<!-- Jquery -->
<script src="{{url('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{url('js/jquery-ui.min.js')}}"></script>
@endsection

@push('custom-script')
<script type="text/javascript">
    var tabel_user;

    $(document).ready(function(){
        tabel_user = $('#user_table').DataTable({
            processing : true,
            serverSide : true,
            stateSave : true,            
            ajax : {
                url : "{{url('/users/get_data')}}",
                type : "GET",
            },
            deferRender : true,
            columns : [
                {data: 'fullname', name: 'fullname', visible:true},
                {data: 'email', name: 'email', visible:true},
                {data: 'role', name:'role', visible:true},
                {data: 'option', name: 'option', visible:true},
            ],
        });

        //open modal of change role user 
       $('#user_table tbody').on('click', '#edit-btn', function(){

            let data = tabel_user.row($(this).parents('tr')).data();
            let id = data['id'];
            let token = $('input[name=_token]').val();
            let urlData = "{{url('/user/role')}}"+"/"+id+"/edit";

            $('input[name=_method]').val('PUT');
            $('input[name=_token]').val(token);
            $('input[name=id]').val(data['id']);
            $('input[name=fullname]').val(data['fullname']);
            $('input[name=email]').val(data['email']);

            let rbButton = $('input[name=role_edit]');
            for(let i=0;i<rbButton.length;i++)
            {
                if(rbButton[i].value == data['role_id'])
                {
                    rbButton[i].checked = true;
                } else {
                    rbButton.checked = false;
                }
            }

            $("#user-role:input").val('');
            $("#user-role-modal").modal('show');
        });
    });
</script>
@endpush