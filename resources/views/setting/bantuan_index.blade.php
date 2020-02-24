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

    <div class="m-content">
        <!--Begin::Section-->
        <div class="row">
            <div class="col-xl-12">
                <div class="m-portlet m-portlet--mobile">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Daftar Pertanyaan Bantuan
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">

                                <!--begin: Button add new data -->
                                <li class="m-portlet__nav-item">
                                    <button type="button" class="btn btn-warning m-btn m-btn--pill m-btn--custom m-btn--icon m-btn--air" id="btn-create">
                                        <span>
                                            <i class="la la-plus-circle"></i>
                                            <span>New Data</span>
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
                        <table class="table table-striped table-bordered" id="table_help">
                            <thead>
                                <tr>                                    
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Option</th>
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

@include('setting.bantuan_create')
@include('setting.bantuan_edit')
@include('setting.bantuan_detail')
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
            serverSide: true,
            stateSave: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search..."
            },
            ajax: {
                url: "{{url('/bantuan_aplikasi/get_data')}}",
                type: "GET",
            },
            deferRender: true,
            columns: [
                {data: 'question', name:'question', visible:true},
                {data: 'answer', name:'answer', visible:true},
                {data: 'option', name:'option', visible:true},
            ],
        });

        $('#table_help tbody').on('click', '#detail-btn', function(){
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
        });


        //trigger modal delete
        $('#table_help tbody').on('click', '#delete-btn', function(){
            var data = helpTable.row($(this).parents('tr')).data();
            swal({
                text: "Are you sure to delete this?",
                showCloseButton: true,
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it.',
                cancelButtonText: 'No, cancel.',
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
                            helpTable.ajax.reload();
                            swal('Deleted!','Your file has been deleted.','success')
                        }  
                    })
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swal('Cancelled','Delete data cancelled','info')
                }
            });
        });
    });
</script>
@endpush