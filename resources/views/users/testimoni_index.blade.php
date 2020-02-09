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
                                <i class="m-nav__link-icon fas fa-user-friends"></i>
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
                                <label>Firts Name:</label>
                                <input type="text" name="first_name" class="form-control m-input" placeholder="E.g: John" data-col-index="0" value="">
                            </div>
                            <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                                <label>Last Name:</label>
                                <input type="text" name="last_name" class="form-control m-input" placeholder="E.g: Smith" data-col-index="0" value="">
                            </div>
                            <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                                <label>Email:</label>
                                <input type="text" name="email" class="form-control m-input" placeholder="E.g: john@mail.com" data-col-index="0" value="">
                            </div>
                            <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                                <label>Place of Birth:</label>
                                <input type="text" name="ktp" class="form-control m-input" placeholder="E.g: Jakarta" data-col-index="0" value="">
                            </div>
                        </div>
                        <div class="row m--margin-bottom-20">
                            <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                                <label class="form-control-label">Age</label>
                                <select class="form-control m-input" name="member_age">
                                    <option value="">Select</option>
                                    <?php
                                        for($i=12; $i<60; $i++) {
                                            echo "<option value=".$i.">".$i."</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                                <label>Province:</label>
                                <select class="form-control m-input" name="province">
                                    <option value="">Select</option>
                                    <option value="xxx">Jawa</option>
                                </select>
                            </div>
                            <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                                <label>City:</label>
                                <select class="form-control m-input" name="city">
                                    <option value="">Select</option>
                                    <option value="vvv">Solo</option>
                                </select>
                            </div>
                            <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                                <label>Register Date:</label>
                                <select class="form-control m-input" name="institution">
                                    <option value="">Select</option>
                                    <option value="yyy">Universitas Gadjah Mada</option>
                                </select>
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
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Institution</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
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
                                    <h5 class="modal-title" id="exampleModalLabel">Member Detail</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form>
                                      <div class="form-group">
                                        <label for="name" class="col-form-label">Name</label>
                                        <input type="text" class="form-control" id="name" value="" disabled>
                                      </div>
                                      <div class="form-group">
                                        <label for="year" class="col-form-label">No. KTP</label>
                                        <input type="text" class="form-control" id="ktp" value="" disabled>
                                      </div>
                                       <div class="form-group">
                                        <label for="npwp" class="col-form-label">No. NPWP</label>
                                        <input type="text" class="form-control" id="npwp" value="" disabled>
                                      </div>
                                       <div class="form-group">
                                        <label for="efin" class="col-form-label">EFIN</label>
                                         <input type="text" class="form-control" id="efin" value="" disabled>
                                      </div>
                                        <div class="form-group">
                                        <label for="email" class="col-form-label">Email</label>
                                        <input type="text" class="form-control" id="email" value="" disabled>
                                      </div>
                                      <div class="form-group">
                                        <label for="phone" class="col-form-label">Phone</label>
                                        <input type="text" class="form-control" id="phone" value="" disabled>
                                      </div>
                                      <div class="form-group">
                                        <label for="address" class="col-form-label">Address</label>
                                        <input type="text" class="form-control" id="address" value="" disabled>
                                      </div>
                                      <div class="form-group">
                                        <label for="register-at" class="col-form-label">Register Date</label>
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