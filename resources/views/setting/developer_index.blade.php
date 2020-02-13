@extends('base.header')
@section('title','Developers')
@section('about', 'm-menu__item--open')
@section('developer','m-menu__item--active')
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
                                <i class="m-nav__link-icon fas fa-users-cog"></i>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">Tentang</span>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">Tim Pengembang</span>
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
                                    List of Developer Team
                                </h3>
                            </div>
                        </div>
                    </div>
                  <div class="m-portlet__body">
                        <!--begin: Search form -->
                        <div class="d-flex justify-content-end">
                            <form action="" class="m-form" method="POST">
                                @csrf
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Name/Email" name="keyword" value="">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-warning m-btn m-btn--custom m-btn--outline-2x" type="submit">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <br><br>
                        <!--end: Search form -->

                        <!--begin: Datatable -->
                        <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                      <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                                            <div class="btn-group btn-group-sm" role="group" aria-label="button group">
                                                <a href="#" data-id="{{url('images/picts/user.png')}}" class="btn btn-info m-btn m-btn--icon btn-sm m-btn--icon-only" data-toggle="modal" data-target="#detailModal">
                                                    <i class="fa fa-info-circle"></i>
                                                </a>
                                                 
                                                 <a href="#" class="btn btn-warning m-btn m-btn--icon btn-sm m-btn--icon-only">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                              
                                                <a href="#" class="btn btn-danger m-btn m-btn--icon btn-sm m-btn--icon-only" data-toggle="modal" data-target="#deleteModal">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </div>
                                        </div>    
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <!--begin: Detail Modal -->
                        <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Developer Detail</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form>
                                      <div class="form-group">
                                        <img src="" />
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
                            <!--end: detail Modal -->

                            <!--begin: Delete Modal -->
                            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Warning</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are You sure want to delete <b>the name</b> ?</p>
                                    </div>
                                    <div class="modal-footer">
                                            <a class="btn btn-secondary" data-dismiss="modal">Cancel</a>
                                            <a href="" class="btn btn-danger">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!--end: Delete Modal -->
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

@section('custom-script')

@endsection