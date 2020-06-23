@extends('base.header')
@section('title','Dashboard')
@section('dashboard','m-menu__item--active')

@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
  <!-- BEGIN: Subheader -->
  <div class="m-subheader ">
      <div class="d-flex align-items-center">
          <div class="mr-auto">
              <h3 class="m-subheader__title m-subheader__title--separator">Dashboard</h3>
              <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                  <li class="m-nav__item m-nav__item--home">
                    <a href="#" class="m-nav__link m-nav__link--icon">
                      <i class="m-nav__link-icon flaticon-line-graph"></i>
                    </a>
                  </li>
                  <li class="m-nav__separator">-</li>
                  <li class="m-nav__item">
                    <a href="" class="m-nav__link">
                      <span class="m-nav__link-text">Dashboard</span>
                    </a>
                  </li>
              </ul>
          </div>
      </div>
  </div>

  <!-- END: Subheader -->
  <div class="m-content">
      <!--Begin::Section-->
      <!--Filter Data-->
      <div class="m-portlet m-portlet--tab">
          <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
              <div class="m-portlet__head-title">
                <span class="m-portlet__head-icon m--hide">
                  <i class="la la-gear"></i>
                </span>
                <h3 class="m-portlet__head-text">
                  Data Filter
                </h3>
              </div>
            </div>
          </div>
          <div class="m-portlet__body">

          <!--begin: Search Form -->
          <form action="{{url('/dashboard')}}" method="POST">
            @csrf
              <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12">Pilih rentang</label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                  <div class='input-group pull-right' id='m_daterangepicker_6'>
                    <input type="text" class="form-control m-input" readonly placeholder="Select date range" name="range" />
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
                      </div>
                  </div>
                  <div style="margin-top: 60px">
                    <label class="m-checkbox">
                        <input type="checkbox" name="all_time" value="1" id="test"> Sepanjang waktu
                        <span></span>
                    </label>
                  </div>
                </div>
              </div>
                  <div class="row">
                    <div class="col-lg-12 ml-lg-auto">
                      <button type="submit" name="search" id="search" class="btn btn-primary">Cari</button>
                    </div>
                  </div>
          </form>
          <!--end: Search Form -->
        </div>
        <!--end: Filter Data-->
    </div>

    <!--begin:: Summary Data-->
      <div class="m-portlet ">
        <div class="m-portlet__body  m-portlet__body--no-padding">
          <div class="row m-row--no-padding m-row--col-separator-xl">
            <div class="col-md-12 col-lg-6 col-xl-3">
              <!--begin::Total Member Premium-->
              <div class="m-widget24">
                <div class="m-widget24__item">
                  <h4 class="m-widget24__title">
                    Member Premium
                  </h4><br>
                  <span class="m-widget24__desc">
                    {{$show}}
                  </span>
                  <span class="m-widget24__stats m--font-info" style="margin-top: 5px">
                    {{$premium}}
                  </span>
                  <div class="m--space-40"></div>
                </div>
              </div>
              <!--end::Total Members-->
            </div>

            <div class="col-md-12 col-lg-6 col-xl-3">
              <!--begin::Total Member Reguler-->
              <div class="m-widget24">
                <div class="m-widget24__item">
                  <h4 class="m-widget24__title">
                    Member Reguler
                  </h4><br>
                  <span class="m-widget24__desc">
                    {{$show}}
                  </span>
                  <span class="m-widget24__stats m--font-success" style="margin-top: 5px">
                    {{$regular}}
                  </span>
                  <div class="m--space-40"></div>
                </div>
              </div>
              <!--end::Total member Reguler-->
            </div>

            <div class="col-md-12 col-lg-6 col-xl-3">
              <!--begin::Testimonials-->
              <div class="m-widget24">
                <div class="m-widget24__item">
                  <h4 class="m-widget24__title">
                    Testimoni
                  </h4><br>
                  <span class="m-widget24__desc">
                    {{$show}}
                  </span>
                  <span class="m-widget24__stats m--font-danger" style="margin-top: 5px">
                    {{$testimoni}}
                  </span>
                  <div class="m--space-40"></div>
                </div>
              </div>
              <!--end::Testimonials-->
            </div>

             <div class="col-md-12 col-lg-6 col-xl-3">
              <!--begin::Latihan soal-->
              <div class="m-widget24">
                <div class="m-widget24__item">
                  <h4 class="m-widget24__title">
                    Latihan Soal 
                  </h4><br>
                  <span class="m-widget24__desc">
                    {{$show}}
                  </span>
                  <span class="m-widget24__stats m--font-brand" style="margin-top: 5px">
                    {{$exercise}}
                  </span>
                  <div class="m--space-40"></div>
                </div>
              </div>

              <!--end::Latihan soal -->
            </div>
          </div>
        </div>
      </div>
      <!--end:: Summary Data-->

      <!--begin:: Statistic Data-->
      <div class="row">
        <div class="col-lg-12">
          <div class="m-portlet m-portlet--tab">
            <div class="m-portlet__head">
              <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                  <span class="m-portlet__head-icon m--hide">
                    <i class="la la-gear"></i>
                  </span>
                  <h3 class="m-portlet__head-text">
                    Chart dari data member, testimoni, pajak dan latihan soal.
                  </h3>
                </div>
              </div>
            </div>
            <div class="m-portlet__body">

              <div id="m_morris_3" style="height:500px;"></div>

            </div>
          </div>
        </div>
      </div>

      <!--end:: Statistic Data-->

  </div>
  <!--End::Section-->

</div>
@endsection

@push('custom-script')
<script src="{{url('assets/demo/demo11/custom/crud/metronic-datatable/base/html-table.js')}}" type="text/javascript"></script>

<!-- chart -->
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<!-- Chart code -->
<script>
var data = {!! $data !!};

    console.log(data);
    if(data[0]['daily_date']){
      var MorrisChartsDemo = {
      init: function() {
        new Morris.Bar({
          element: "m_morris_3",
          data: data,
          xkey: 'daily_date',
          ykeys: ['total_premium_members','total_regular_members','total_testimonials','total_tax_exercises'],
          labels: ['Premium','Reguler','Testimoni','Latihan Soal'],
          barColors:['#36a3f7', '#34bfa3','#f4516c','#716aca']
      })
      // new Morris.Line({
      //     element: "m_morris_2",
      //     data: data,
      //     xkey: 'daily_date',
      //     ykeys: ['daily_registration','daily_transaction_success'],
      //     labels: ['user','order']
      // })
      }
    }
    }else{
      var MorrisChartsDemo = {
      init: function() {
        new Morris.Bar({
          element: "m_morris_3",
          data: data,
          xkey: 'month_year',
          ykeys: ['total_premium_members','total_regular_members','total_testimonials','total_tax_exercises'],
          labels: ['Premium','Reguler','Testimoni','Latihan Soal'],
          barColors:['#36a3f7', '#34bfa3','#f4516c','#716aca']
      })
      // new Morris.Line({
      //     element: "m_morris_2",
      //     data: data,
      //     xkey: 'yearMonth',
      //     ykeys: ['monthly_registration','monthly_transaction_success'],
      //     labels: ['Registration','Sucessfull Purchase']
      // })
       }
    }
    }
    
    jQuery(document).ready(function() {
      MorrisChartsDemo.init()
  });
</script>

@endpush

