@extends('layouts.land')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="{{url('/')}}/css/profile_member.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="{{url('/')}}/js/profile_member.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css"
    integrity="sha384-Wrgq82RsEean5tP3NK3zWAemiNEXofJsTwTyHmNb/iL3dP/sZJ4+7sOld1uqYJtE" crossorigin="anonymous">

<section>

    <div class="container" style="margin-top: 90px;">
        <div class="profile-head">
        @php $no = 1; @endphp
            @foreach($user as $u)
            <div class="col-md- col-sm-4 col-xs-12">
                <img src="{{('/images/picts/user.png')}}"
                    class="img-responsive" />
                <h6>{{ $u->first_name }} {{ $u->last_name }}</h6>
            </div>
            <!--col-md-4 col-sm-4 col-xs-12 close-->


            <div class="col-md-5 col-sm-5 col-xs-12">
                <h5>{{ $u->first_name }} {{ $u->last_name }}</h5>
                <!-- <p>{{ $u->instansi }}</p> -->
                <ul>
                    <li><span class="glyphicon glyphicon-briefcase"></span> {{ $u->instansi }}</li>
                    <!-- <li><span class="glyphicon glyphicon-map-marker"></span> U.S.A.</li>
                    <li><span class="glyphicon glyphicon-home"></span> 555 street Address,toedo 43606 U.S.A.</li>
                    <li><span class="glyphicon glyphicon-phone"></span> <a href="#" title="call">(+021) 956 789123</a>
                    </li> -->
                    <li><span class="glyphicon glyphicon-envelope"></span><a href="#"
                            title="mail">{{ $u->email }}</a></li>

                </ul>
            </div>
            <!--col-md-8 col-sm-8 col-xs-12 close-->
        </div>
        <!--profile-head close-->
    </div>
    <!--container close-->


    <div id="sticky" class="container">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-menu" role="tablist">
            <li class="active">
                <a href="#profile" role="tab" data-toggle="tab">
                    <i class="fa fa-male"></i> Profile
                </a>
            </li>
            <li><a href="#change" role="tab" data-toggle="tab">
                    <i class="fa fa-key"></i> Edit Profile
                </a>
            </li>
        </ul>
        <!--nav-tabs close-->

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active in" id="profile">
                <div class="container">
                    <div class="col-sm-11" style="float:left;">
                        <!-- <div class="hve-pro">
                            <p>Hello I’m Jenifer Smith, a leading expert in interactive and creative design specializing
                                in the mobile medium.
                                My graduation from Massey University with a Bachelor of Design majoring in visual
                                communication.</p>
                        </div> -->
                        <!--hve-pro close-->
                    </div>
                    <!--col-sm-12 close-->
                    <br clear="all" />
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="pro-title">Detail Profile</h4>
                        </div>
                        <!--col-md-12 close-->


                        <div class="col-md-6">

                            <div class="table-responsive responsiv-table">
                                <table class="table bio-table">
                                    <tbody>
                                        <tr>
                                            <td>Firstname</td>
                                            <td>: {{ $u->first_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Lastname</td>
                                            <td>: {{ $u->last_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Birthday</td>
                                            <td>: {{ $u->tanggal_lahir }}</td>
                                        </tr>
                                        <tr>
                                            <td>Province</td>
                                            <td>: {{ $u->province }}</td>
                                        </tr>
                                        <tr>
                                            <td>City</td>
                                            <td>: {{ $u->city }}</td>
                                        </tr>
                                        <tr>
                                            <td>Kecamatan</td>
                                            <td>: {{ $u->kecamatan }}</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!--table-responsive close-->
                        </div>
                        <!--col-md-6 close-->

                        <div class="col-md-6">

                            <div class="table-responsive responsiv-table">
                                <table class="table bio-table">
                                    <tbody>
                                        <tr>
                                            <td>Email Id</td>
                                            <td>: {{ $u->email }}</td>
                                        </tr>
                                        

                                    </tbody>
                                </table>
                            </div>
                            <!--table-responsive close-->
                        </div>
                        <!--col-md-6 close-->
                        @endforeach
                    </div>
                    <!--row close-->
                </div>
                <!--container close-->
            </div>
            <!--tab-pane close-->


            <div class="tab-pane fade active in" id="change">
                <div class="container fom-main">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="register" >Edit Your Profile</h2>
                        </div>
                        <!--col-sm-12 close-->
                        
                    </div>
                    <!--row close-->
                    <br />
                    <div class="row">
                    @php $no = 1; @endphp
                    @foreach($user as $u)
                        <form class="form-horizontal main_form text-left" action="{{ url('profile/update/).$data->id }}" method="post" id="contact_form">
                            <fieldset>


                                <div class="form-group col-md-12">
                                    <label class="col-md-10 control-label">First Name</label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <input type="text" id="first_name"name="first_name" class="form-control"
                                                value="{{$u->first_name}}">
                                        </div>
                                    </div>
                                </div>

                                <!-- Text input-->

                                <div class="form-group col-md-12">
                                    <label class="col-md-10 control-label">Last Name</label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <input type="text" id="last_name"name="last_name" class="form-control"
                                                value="{{$u->last_name}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="col-md-10 control-label">Instansi</label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <input type="text" id="instansi"name="instansi" class="form-control"
                                                value="{{$u->instansi}}">
                                        </div>
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group col-md-12">
                                    <label class="col-md-10 control-label">Birthday</label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control"
                                                value="{{$u->tanggal_lahir}}">
                                        </div>
                                    </div>
                                </div>


                                <!-- Text input-->

                                <div class="form-group col-md-12">
                                    <label class="col-md-10 control-label">Provinsi</label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <select id="province-select" name="province-select" class="form-control selectpicker">
                                                <option value="">{{$u->province}}</option>
                                                @foreach ($province as $key => $value)
                                                    <option value="{{ $key }}">{{ $value }}</option>
                                                @endforeach
                                            </select>
                                            <!-- buat inputan kosong -->
                                            <input type="hidden" name="province" id="hiddenProvince" value="">
                                        </div>
                                    </div>
                                </div>

                                <!-- Text input-->

                                <div class="form-group col-md-12">
                                    <label class="col-md-10 control-label">City</label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <select id="city-select" name="city-select" class="form-control selectpicker">
                                                <option value="">{{$u->city}}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="col-md-10 control-label">Kecamatan</label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <select id="kecamatan-select" name="kecamatan-select" class="form-control selectpicker">
                                                <option value="">{{$u->kecamatan}}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                


                                <!-- <div class="form-group col-md-12">
                                    <label class="col-md-10 control-label">Choose Password</label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <input name="first_name" placeholder="Choose Password" class="form-control"
                                                type="password">
                                        </div>
                                    </div>
                                </div>



                                <div class="form-group col-md-12">
                                    <label class="col-md-10 control-label">Confiram Password</label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <input name="first_name" placeholder="Confiram Password"
                                                class="form-control" type="password">
                                        </div>
                                    </div>
                                </div>


                                <!-- radio checks -->
                                <!-- <div class="form-group col-md-12">
                                    <label class="col-md-10 control-label">Gender</label>
                                    <div class="col-md-6">
                                        <div class="radio col-md-2">
                                            <label>
                                                <input type="radio" name="hosting" value="yes" /> Male
                                            </label>
                                        </div>
                                        <div class="radio col-md-2">
                                            <label>
                                                <input type="radio" name="hosting" value="no" /> Female
                                            </label>
                                        </div>
                                    </div>
                                </div> -->

                                <!-- upload profile picture -->
                                <!-- <div class="col-md-12 text-left">
                                    <div class="uplod-picture">
                                        <span class="btn btn-default uplod-file">
                                            Upload Photo <input type="file" />
                                        </span>
                                        <span class="btn btn-default uplod-file">
                                            Upload Resume <input type="file" />
                                        </span>
                                        <span class="btn btn-default uplod-file">
                                            Upload Video <input type="file" />
                                        </span>
                                    </div> -->
                                    <!--uplod-picture close-->
                                </div>
                                <!--col-md-12 close-->
                                <!-- Button -->
                                <div class="form-group col-md-10">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-warning submit-button">Save</button>
                                        <button type="submit" class="btn btn-warning submit-button">Cancel</button>

                                    </div>
                                </div>
                                @endforeach
                            </fieldset>
                        </form>
                    </div>
                    <!--row close-->
                </div>
                <!--container close -->
            </div>
            <!--tab-pane close-->
        </div>
        <!--tab-content close-->
    </div>
    <!--container close-->

</section>
<script>
        $(document).ready(function(){
            var provinsi_id = $(this).val();
                var provinsi_name = $("select[name='province-select'] option:selected").text(); 
            $('#province-select').change(function(){
                 //add this
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
<!--section close-->
