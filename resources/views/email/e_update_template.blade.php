@extends('base.header')

@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    @include('base.notification')
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
          <span class="m-nav__link-text">Add</span>
        </a>
        </li>
        <li class="m-nav__separator">-</li>
        <li class="m-nav__item">
        <a href="" class="m-nav__link">
          <span class="m-nav__link-text">Email Setting</span>
        </a>
        </li>
      </ul>
    </div>
    </div>
  </div>
<div class="m-content">
  <div class="m-portlet">
    <div class="m-portlet__head">
      <div class="m-portlet__head-caption">
      <div class="m-portlet__head-title">
        <h3 class="m-portlet__head-text">
        Email Setting
        </h3>
      </div>
      </div>
    </div>
    <div class="m-portlet__body">
     <!--begin::Form-->
     <form class="m-form m-form--label-align-right" method="POST" action="{{url('/autocrm/store')}}" enctype="multipart/form-data">
      @csrf
      <div class="m-portlet__body">
        <div class="m-form__section m-form__section--first">
          <div class="m-form__heading">
            <h3 class="m-form__heading-title">Head:</h3>
          </div>
          <div class="form-group m-form__group row">
            <label class="col-lg-2 col-form-label">From:</label>
            <div class="col-lg-6">
              <input type="text" class="form-control m-input" name="email_from">
        	</div>
          </div>
          <div class="form-group m-form__group row">
            <label class="col-lg-2 col-form-label">Sender:</label>
            <div class="col-lg-6">
              <input type="text" class="form-control m-input" name="email_sender">
            </div>
		  </div>
		  <div class="form-group m-form__group row">
            <label class="col-lg-2 col-form-label">Reply To:</label>
            <div class="col-lg-6">
              <input type="text" class="form-control m-input" name="email_reply_to">
            </div>
		  </div>
		  <div class="form-group m-form__group row">
            <label class="col-lg-2 col-form-label">CC:</label>
            <div class="col-lg-6">
              <input type="text" class="form-control m-input" name="email_cc">
            </div>
		  </div>
		  <div class="form-group m-form__group row">
            <label class="col-lg-2 col-form-label">BCC:</label>
            <div class="col-lg-6">
              <input type="text" class="form-control m-input" name="email_bcc">
            </div>
          </div>
        </div>
        <div class="m-form__seperator m-form__seperator--dashed"></div>
        <div class="m-form__section m-form__section--last">
          <div class="m-form__heading">
            <h3 class="m-form__heading-title">Email Header:</h3>
          </div>
          <div class="m-form__group form-group row">
            <label class="col-lg-2 col-form-label">Logo:</label>
            <div class="col-lg-6">
                <div class="m-demo">
                    <div class="m-demo__preview">
                      <div class="m-list-pics m-list-pics--rounded m--margin-bottom-10">
                        <img id="image-preview" alt="image preview">
                      </div>
                    </div>
                  </div>
                <input type="File" class="form-control m-input" name="email_logo" id="image-source" onchange="previewImage();">
            </div>
          </div>
          <div class="form-group m-form__group row">
            <label class="col-lg-2 col-form-label">Position:</label>
            <div class="col-lg-6">
              <select class="form-control m-input m-input--air" id="" name="email_logo_position">
				        <option>Choose Position</option>
				        <option value="1">Top</option>
				        <option value="2">Center</option>
				        <option value="1">Bottom</option>
			        </select>
            </div>
          </div>
		</div>
		<br>
		<br>
		<div class="m-form__seperator m-form__seperator--dashed"></div>
        <div class="m-form__section m-form__section--last">
          <div class="m-form__heading">
            <h3 class="m-form__heading-title">Footer:</h3>
          </div>
          <div class="form-group m-form__group row">
            <label class="col-lg-2 col-form-label">Copyright:</label>
            <div class="col-lg-6">
              <input type="text" class="form-control m-input" name="email_copyright">
            </div>
		  </div>
		  <div class="form-group m-form__group row">
            <label class="col-lg-2 col-form-label">Disclaimer:</label>
            <div class="col-lg-6">
              <input type="text" class="form-control m-input" name="email_disclaimer">
            </div>
		  </div>
		  <div class="form-group m-form__group row">
				<label class="col-lg-2 col-form-label">Contact:</label>
				<div class="col-lg-6">
				  <input type="text" class="form-control m-input" name="email_contact">
				</div>
			  </div>
        </div>
      </div>
      <div class="m-portlet__foot m-portlet__foot--fit">
        <div class="m-form__actions m-form__actions">
          <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-6">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
          </div>
        </div>
      </div>
    </form>

    <!--end::Form-->
    </div>
    </div>
</div>
</div>

@endsection
@section('footer')
    @include('base.footer')
    <script>
    function previewImage() {
    document.getElementById("image-preview").style.display = "block";
    var oFReader = new FileReader();
     oFReader.readAsDataURL(document.getElementById("image-source").files[0]);
 
    oFReader.onload = function(oFREvent) {
      document.getElementById("image-preview").src = oFREvent.target.result;
    };
  };
    </script>
@endsection
