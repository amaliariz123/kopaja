@extends('base.header')
@section('title','Contoh Soal')
@section('contoh','m-menu__item--active')
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
                                <i class="m-nav__link-icon fa fa-file-alt"></i>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">Setting Soal</span>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">Contoh Soal</span>
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
                                    Daftar Contoh Soal
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
                        <table class="table table-striped table-bordered" id="table_contoh">
                            <thead>
                                <tr>
                                    <th>Tax name</th>
                                    <th>Title</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Option</th>
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

@include('setting_soal.contoh_soal_create')
@include('setting_soal.contoh_soal_edit')
@include('setting_soal.contoh_soal_detail')

<!-- Jquery -->
<script src="{{url('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{url('js/jquery-ui.min.js')}}"></script>

@endsection

@push('custom-script')
<script>
    var tabelContoh;

    $(document).ready(function(){
        //trigger to create-modal
        $('#btn-create').on('click', function(){
            $('select[name=tax_name]').val('');
            $('input[name=title]').val('');
            $('textarea[name=question_text]').val();
            $('input[name=question_image]').val('');
            $('textarea[name=answer_text]').val('');
            $('input[name=answer_image]').val('');
            $('#m_select2_modal').modal('show');
        });

        //get the id_tax with select2
        $('#m_select2_1_modal').change(function(){
            var id_pajak = $(this).val();
            var nama_pajak = $("select[name='tax_name'] option:selected").text();
            $('#hiddenTaxName').val(id_pajak);
        });

        //parsing data to datatable
        tabelContoh = $('#table_contoh').DataTable({
            processing : true,
            serverSide : true,
            stateSave : true,
            ajax : {
                url : "{{url('/contoh_soal/get_data')}}",
                type : "GET",
            },
            deferRender : true,
            columns : [
                {data:'id_tax', name:'id_tax', visible:true},
                {data:'title', name:'title', visible:true},
                {data: 'question_text', name: 'question_text', visible:true},
                {data: 'answer_text', name:'answer_text', visible:true},
                {data: 'option', name:'option', visible:true},
            ],
        });

        //trigger to delete-modal
        $('#table_contoh tbody').on('click', '#delete-btn', function(){
            var data = tabelContoh.row($(this).parents('tr')).data();

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
                        url: "{{url('/contoh_soal/delete')}}"+"/"+data['id'],
                        method: 'get',
                        success: function(result){
                            //tabelContoh.ajax.reload();
                            location.reload();
                            swal('Deleted!','Your file has been deleted.','success')
                        }  
                    })
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swal('Cancelled','Delete data cancelled','info')
                }
            });
        });

        //trigger to detail-modal
        $('#table_contoh tbody').on('click', '#detail-btn', function(){
            //console.log('clicked');
            $('#contoh-detail:input').val('');
            $('#contoh-detail-modal').modal('show');

            var data = tabelContoh.row($(this).parents('tr')).data();
            var id = data['id'];
            var url = "{{url('contoh_soal/show')}}"+"/"+id;

            $('input[name=_method]').val('PUT');
            $('input[name=detail_tax_name]').val(data['id_tax']);
            $('input[name=detail_title]').val(data['title']);
            $('textarea[name=detail_question_text]').val(data['question_text']);
            //$('input[name=detail_question_image]').val(data['question_image']);
            $('textarea[name=detail_answer_text]').val(data['answer_text']);
            //$('input[name=detail_answer_image]').val(data['answer_image']);
        });
    });
</script>
@endpush