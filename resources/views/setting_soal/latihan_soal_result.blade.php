@extends('base.header')
@section('title','Hasil Latihan Soal')
@section('latihan','m-menu__item--active')
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
                                <i class="m-nav__link-icon fa fa-book-open"></i>
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
                                <span class="m-nav__link-text">Latihan Soal</span>
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
                                    Tabel Peserta Latihan Soal 
                                </h3>
                            </div>
                        </div>
                    </div>
                  <div class="m-portlet__body">
                     
                        <!--begin: Datatable -->
                        <table class="table table-striped table-bordered" id="tabel_hasil">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Institusi</th>
                                    <th>Nilai</th>
                                    <th>Tanggal Pengerjaan</th>
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

<!-- Jquery -->
<script src="{{url('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{url('js/jquery-ui.min.js')}}"></script>
@endsection

@push('custom-script')
<script type="text/javascript">
    var result_table;
    var tax_id = {!! $data->id !!};
    

    $(document).ready(function(){

        result_table = $('#tabel_hasil').DataTable({
            processing : true,
            serverSide : true,
            stateSave : true,
            ajax : {
                url : "{{url('/latihan_soal/result')}}"+"/"+tax_id,
                type : "GET",
            },
            deferRender : true,
            columns : [
                {data:'member_name', name:'member_name', visible:true},
                {data: 'member_institution', name: 'member_institution', visible:true},
                {data: 'total_score', name:'total_score', visible:true},
                {data: 'exercise_time', name:'exercise_time', visible:true},
                {data: 'option', name:'option', visible:true},
            ],
        });
    });
</script>
@endpush