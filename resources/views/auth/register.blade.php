
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>KOPAJA | SIGNUP</title>
    <link rel="icon" href="{{url('/')}}/etrain/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('/')}}/etrain/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{url('/')}}/etrain/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{url('/')}}/etrain/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{url('/')}}/etrain/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{url('/')}}/etrain/css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{url('/')}}/etrain/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{url('/')}}/etrain/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{url('/')}}/etrain/css/style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
</head>
<body>
	
	<!-- learning part start-->
    <section class="mt-5 pt-5">
        <div class="container">
            <div class="row align-items-sm-center align-items-l-stretch">                
                <div class="col-md-7 col-lg-5">
                    <div class="learning_member_text">
                    	<center>
                        <h1 style="font-weight: bold;">REGISTER</h1><br>
							<form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <h5><input style="border: 0px; border-radius: 200px; padding: 25px 20px; background-color: rgba(0,0,0,0.05); width: 70%" placeholder="{{ __('Name') }}"  id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" required autocomplete="fullname"></h5>
                                    @error('fullname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <h5><input style="border: 0px; border-radius: 200px; padding: 25px 20px; background-color: rgba(0,0,0,0.05); width: 70%" placeholder="{{ __('Email') }}"  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"></h5>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="form-group">
                            <h5><input style="border: 0px; border-radius: 200px; padding: 25px 20px; background-color: rgba(0,0,0,0.05); width: 70%" placeholder="{{ __('Password') }}" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <h5><input style="border: 0px; border-radius: 200px; padding: 25px 20px; background-color: rgba(0,0,0,0.05); width: 70%" placeholder="{{ __('Confirm Password') }}"  id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"></h5>
                            </div>
                          <br>
                                     
                            <div>
                                <h5><button type="submit" class="btn_1" style="width: 70%">{{ __('REGISTER') }}</button></h5>
                                <br><br><br><br>
    							<h6><a class="btn_2" href="{{Route('login')}}" style="height: 20%">Already Have Account</a></h6><br>
                            </div>
						</form>    
						</center>     
                    </div>
                </div>
                <div class="col-lg-7 col-md-5">
                    <div class="learning_img">
                        <center><img src="{{url('/')}}/etrain/img/advance_feature_img.png" alt=""></center>
                    </div>
                </div>
            </div>
        </div>
    </section>




    
    <!-- learning part end-->

     <!-- jquery plugins here-->
     <!-- jquery -->
     <script src="{{url('/')}}/etrain/js/jquery-1.12.1.min.js"></script>
     <!-- popper js -->
     <script src="{{url('/')}}/etrain/js/popper.min.js"></script>
     <!-- bootstrap js -->
     <script src="{{url('/')}}/etrain/js/bootstrap.min.js"></script>
     <!-- easing js -->
     <script src="{{url('/')}}/etrain/js/jquery.magnific-popup.js"></script>
     <!-- swiper js -->
     <script src="{{url('/')}}/etrain/js/swiper.min.js"></script>
     <!-- swiper js -->
     <script src="{{url('/')}}/etrain/js/masonry.pkgd.js"></script>
     <!-- particles js -->
     <script src="{{url('/')}}/etrain/js/owl.carousel.min.js"></script>
     <!-- <script src="{{url('/')}}/etrain/js/jquery.nice-select.min.js"></script> -->
     <!-- swiper js -->
     <script src="{{url('/')}}/etrain/js/slick.min.js"></script>
     <script src="{{url('/')}}/etrain/js/jquery.counterup.min.js"></script>
     <script src="{{url('/')}}/etrain/js/waypoints.min.js"></script>
     <!-- custom js -->
     <script src="{{url('/')}}/etrain/js/custom.js"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#province-select').change(function(){
                var provinsi_id = $(this).val();
                var provinsi_name = $("select[name='province-select'] option:selected").text();  //add this
                $('#hiddenProvince').val(provinsi_name);
                if(provinsi_id){
                    $.ajax({
                        url: '/getCity/' + provinsi_id,
                        type : 'GET',
                        dataType : 'json',
                        success: function(data){
                            $('#province').empty();  //add this
                            $('#province')
                                .append("<input type='text' class='form-control' name='province' id='province' value='"+provinsi_name+"'>");
                            console.log(data);
                            $('#city-select').empty();
                            $.each(data, function(key, value){
                                $('#city-select')
                                    .append('<option value="'+key+'">'+ value + '</option>');
                            });
                        }
                    });
                } else {
                    $('#city-select').empty();
                }
         });
         $('#city-select').change(function(){
                var kota_id = $(this).val();
                var kota_name = $("select[name='city-select'] option:selected").text();  //add this
                if(kota_id){
                    $.ajax({
                        url: '/getKecamatan/' + kota_id,
                        type : 'GET',
                        dataType : 'json',
                        success: function(data){
                            $('#city').empty();  //add this
                            $('#city')
                                .append("<input type='text' style='display:none' name='city' id='city' value='"+kota_name+"'>");
                            console.log(data);
                            $('#kecamatan-select').empty();
                            $.each(data, function(key, value){
                                $('#kecamatan-select')
                                    .append('<option value="'+key+'">'+ value + '</option>');
                            });
                        }
                    });
                } else {
                    $('#kecamatan-select').empty();
                }
         });
         $('#kecamatan-select').change(function(){
                var kecamatan_name = $("select[name='kecamatan-select'] option:selected").text();  //add this
                            $('#kecamatan').empty();  //add this
                            $('#kecamatan')
                                .append("<input type='text' style='display:none' name='kecamatan' id='kecamatan' value='"+kecamatan_name+"'>");
                           
         });
        });
    </script>
 

</body>
</html>
