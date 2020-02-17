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
                                <span class="m-nav__link-text">Data Testimoni Member</span>
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
                                    List of Data Testimoni
                                </h3>
                            </div>
                        </div>
                    </div>
                  <div class="m-portlet__body">
                     <!--begin: Search form -->
                     <form class="m-form m-form--fit m--margin-bottom-20" action="" method="POST">
                        @csrf
                         <div class="row m--margin-bottom-20">
                            <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                                <label>Institution:</label>
                                <input type="text" name="institution" class="form-control m-input" placeholder="E.g: Universitas Gadjah Mada" data-col-index="0" value="">
                            </div>
                            <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                                <label>Member Name:</label>
                                <input type="text" name="member_name" class="form-control m-input" placeholder="E.g: John Doe" data-col-index="0" value="">
                            </div>
                            <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                                <label>Testimonial:</label>
                                <input type="text" name="testi" class="form-control m-input" placeholder="E.g: This is good!" data-col-index="0" value="">
                            </div>
                           <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                                <label>Added at:</label>
                                <div class="input-group date">
                                   <input type="text" name="access_time" class="form-control m-input" placeholder="select date" id="m_datepicker_3" data-date-format="yyyy-mm-dd" value="" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-calendar"></i>
                                            </span>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="m-separator m-separator--md m-separator--dashed"></div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button class="btn btn-warning" type="submit">Search</button>
                                &nbsp;&nbsp;
                                <button class="btn btn-secondary" type="reset" onclick="window.location=''">Reset</button>
                            </div>
                        </div>
                     </form>
                      <!--end: Search form -->

                        <!--begin: Datatable -->
                        <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Testimonial</th>
                                    <th>Member Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
									<td></td>
                                    <td></td>
                                    <td>
                                      
                                        <div class="m-demo__preview m-demo__preview--btn" data-toggle="modal" data-target="#detailModal">
                                       <a href="#" class="btn btn-warning btn-sm m-btn m-btn--icon m-btn--pill">
                                            <span>
                                                <i class="fa fa-info-circle"></i>
                                                    <span>Detail</span>
                                            </span>
                                        </a>
                                        </div>
                                    </td>
                            </tbody>
                        </table>

                        <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Testimonial Detail</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form>
                                      <div class="form-group">
                                        <label for="testimonial" class="col-form-label">Testimonial</label>
                                         <textarea type="text" class="form-control" id="testimonial" disabled>
                                        </textarea>
                                      </div>
                                      <div class="form-group">
                                        <label for="name" class="col-form-label">Member Name</label>
                                        <input type="text" class="form-control" id="name" value="" disabled>
                                      </div>
                                       <div class="form-group">
                                        <label for="institution" class="col-form-label">Institution</label>
                                        <input type="text" class="form-control" id="institution" value="" disabled>
                                      </div>
                                       <div class="form-group">
                                        <label for="created_at" class="col-form-label">Added at</label>
                                         <input type="text" class="form-control" id="created_at" value="" disabled>
                                      </div>
                                    </form>
                                  </div>
                                  <div class="modal-footer">
                                    <div class="row">
                                        <div class="col-md-offset-4 col-md-1">
                                             <button type="button" class="btn m-btn--pill    btn-outline-warning m-btn m-btn--outline-2x" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!--begin::pagination-->
        <div class="float-right">
            Showing 0 to 0 of 0 entries
           
        </div>
        <!--end::pagination-->

        <!--End::Section-->
    </div>
</div>

<!-- Jquery -->
<script src="{{url('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{url('js/jquery-ui.min.js')}}"></script>
@endsection