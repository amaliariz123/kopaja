@extends('base.header')
@section('title','user')
@section('email','m-menu__item--open')
@section('email1','m-menu__item--active')
@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    @include('base.notification')

    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">Email</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home">
                            <a href="#" class="m-nav__link m-nav__link--icon">
                                <i class="m-nav__link-icon la la-home"></i>
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
                                <span class="m-nav__link-text">Email List</span>
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
                                    List Of Email 
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">

                        <!--begin: Datatable -->
                        <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Type</th>
                                    <th>Email</th>
                                    <th>Push Notification</th>
                                    <th>Forward</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            @foreach ($crm as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item['type']}} </td>
                                    <td><input data-switch="true" type="checkbox" <?php echo ($item['toggle_email']==1 ? 'checked' : '');?> id="email_toggle{{$item['id_autocrm']}}" data-email-toggle="{{$item['id_autocrm']}}" class="email_toggle" name="email"></td>
                                    <td><input data-switch="true" type="checkbox" <?php echo ($item['toggle_push']==1 ? 'checked' : '');?> id="push_toggle" class="push_toggle" name="push_notification"></td>
                                    <td><input data-switch="true" type="checkbox" <?php echo ($item['toggle_forward']==1 ? 'checked' : '');?> id="forward_toggle" name="forward"></td>
                                    <td></td>
                                </tr>
                            @endforeach
                                @if (count($crm)==0)
                                <tr>
                                    <td colspan="5">No data to display.</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                        <input data-switch="true" type="checkbox" id="toggle_email" name="email"></form>
                    </div>
                </div>
            </div>
        </div>
        
		
        <!--End::Section-->
    </div>
</div>
@endsection

@section('custom-script')

    <script type="text/javascript">
        var id = $(this).data('email-toggle');
        $('#email_toggle'+).on('switchChange.bootstrapSwitch',function(e,data){
            var value;
            if($("#email_toggle").bootstrapSwitch('state')===true){
                value = 1;
                console.log(value);
                console.log(id);
                
            }else{
                value = 0;
                console.log(value);
                console.log(id);
            } 
        });

        $('.push_toggle').on('switchChange.bootstrapSwitch',function(e,data){
            var value;
            if($(".push_toggle").bootstrapSwitch('state')===true){
                 value = 1;
                console.log(value);
            }else{
                value = 0;
                console.log(value);
            } 
        });
        
    </script>
      
@endsection



