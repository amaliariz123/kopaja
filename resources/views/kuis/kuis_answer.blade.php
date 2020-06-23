@extends('base.header')
@section('title','Hasil Kuis')
@section('kuis','m-menu__item--active')
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
                                <span class="m-nav__link-text">Kuis</span>
                            </a>
                        </li>
                    </ul>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->

    <div class="m-content">
        <!--Begin::Header Section-->
        <div class="row">
            <div class="col-xl-12">
                <div class="m-portlet m-portlet--mobile">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Hasil Pengerjaan Kuis
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div class="row">
                            <div class="col-md-8">
                                @foreach($total_score as $key => $value)
                                <div class="row">
                                    <label class="text-bold col-sm-2">Nama</label>
                                    <label class="text-bold col-sm-10"> : {{$value->member_name}}</label>
                                </div>
                                <div class="row">
                                    <label class="text-bold col-sm-2">Instansi</label>
                                    @if($value->member_institution == null)
                                    <label class="col-sm-10"> : <i>Instansi tidak ditemukan</i></label>
                                    @else
                                    <label class="text-bold col-sm-10"> : {{$value->member_institution}}</label>
                                    @endif
                                </div>
                                <div class="row">
                                    <label class="text-bold col-sm-2">Nilai</label>
                                    <label class="text-bold col-sm-10"> : {{$value->member_score}}</label>
                                </div>
                                @endforeach
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <label class="text-bold col-sm-6"><i style="color:#4CAF50;" class="fa fa-check-circle position-left"></i> &nbsp; Jawaban benar</label>
                                    <label class="text-bold col-sm-6"> : {{$right_answer}}</label>
                                </div>
                                <div class="row">
                                    <label class="text-bold col-sm-6"><i style="color:#F44336;" class="fa fa-times-circle position-left"></i> &nbsp; Jawaban salah</label>
                                    <label class="text-bold col-sm-6"> : {{$wrong_answer}}</label>
                                </div>
                                <div class="row">
                                    <label class="text-bold col-sm-6"><i style="color:#f5bf42;" class="fa fa-minus-circle position-left"></i> &nbsp; Tidak dijawab</label>
                                    <label class="text-bold col-sm-6"> : {{$not_answered}}</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
        <!--End:: Header Section-->
    </div>

    <div class="m-content">
        <!--Begin::Body Section-->
        <div class="row">
            <div class="col-xl-12">
                <div class="m-portlet m-portlet--mobile">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Soal dan Jawaban 
                                </h3>
                            </div>
                        </div>
                    </div>
                  <div class="m-portlet__body">
                     
                        <!--begin: exercise content -->
                        <div id="container">
                            @include('kuis.kuis_peranswer')
                        </div>
                        <!--end:: exercise content -->
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-md-1">
                                <button type="reset" class="btn btn-sm btn-outline-info m-btn m-btn--outline-2x" onclick="window.location='{{ URL::previous() }}'"> <i class="fa fa-arrow-left"></i>&nbsp;Kembali</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
        <!--End:: Body Section-->
    </div>

</div>

<!-- Jquery -->
<script src="{{url('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{url('js/jquery-ui.min.js')}}"></script>
@endsection

