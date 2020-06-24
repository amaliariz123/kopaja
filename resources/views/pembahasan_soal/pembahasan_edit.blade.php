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
                                    Edit Pembahasan Latihan Soal
                                </h3>
                            </div>
                        </div>
                    </div>
                    <form id="latihan-store" class="m-form m-form--fit m-form--label-align-left" action="{{url('pembahasan_soal/edit/update/'.$data->id)}}" method="POST" enctype="multipart/form-data" files=true>
                        @csrf
                        <div class="m-portlet__body">
                            <fieldset class="content-group">
                                <div class="form-group m-form__group row">
                                    <label for="question_text" class="form-control-label col-lg-3 col-sm-12">Soal<span class="text-danger">*</span></label>
                                    <div class="col-lg-6 col-md-9 col-sm-12">
                                        <div class="input-group">
                                            <textarea class="form-control" rows="5" name="question" disabled>{{$question->question}}</textarea>
                                            <input type="hidden" name="question_id" value="{{$question->id}}">
                                        </div>
                                    </div>
                                </div>
                                @if($question->image != null)
                                <div class="form-group m-form__group row">
                                    <label for="answer_image" class="form-control-label col-lg-3 col-sm-12"></label>
                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                        <div class="input-group">
                                            <div class="fileinput fileinput-new">
                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                    <img src="{{asset('storage/images/latihan_soal_image/'.$question->image)}}" alt="gambar soal"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class="form-group m-form__group row">
                                    <label for="answer_text" class="form-control-label col-lg-3 col-sm-12">Penjelasan<span class="text-danger">*</span></label>
                                    <div class="col-lg-6 col-md-9 col-sm-12">
                                        <div class="input-group">
                                            <textarea class="form-control" rows="10" name="solution" placeholder="..." required>{{$data->solution}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="answer_image" class="form-control-label col-lg-3 col-sm-12">Gambar</label>
                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                        <div class="input-group">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                    @if($data->image != null)
                                                    <img src="{{asset('storage/images/pembahasan_soal/'.$data->image)}}" alt="gambar soal" />
                                                    @else
                                                    <img src="{{asset('images/blank.png')}}" alt="gambar soal" />
                                                    @endif
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                <div>
                                                    <span class="btn btn-info btn-sm btn-file">
                                                        <span class="fileinput-new"> Select image </span>
                                                        <span class="fileinput-exists"> Change </span>
                                                        <input type="file" name="image" accept="image/jpg,image/jpeg,image/png"> </span>
                                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                </div>
                                            </div>
                                        </div>
                                        <small id="emailHelp" class="form-text text-muted">Ukuran maksimal 2 MB. (*jpg, *png, *jpeg)</small>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="m-portlet__foot m-portlet__foot--fit">
                            <div class="m-form__actions m-form__actions">
                                <div class="row">
                                    <div class="col-lg-9 ml-lg-auto">
                                        <button type="submit" class="btn btn-brand">Perbarui</button>
                                        <button type="reset" class="btn btn-secondary" onclick="window.location='{{ URL::previous() }}'">Batal</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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