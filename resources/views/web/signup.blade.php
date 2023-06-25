@extends('web.template.master')
@section('content')

{{-- Breadcrump start --}}

<section class="inner-banner">
    <div class="container">
        <ul class="thm-breadcrumb">
            <li><a href="{{route('web.index')}}">Home</a></li>
            {{-- <li><span class="sep">.</span></li> --}}
            {{-- <li><span class="page-title">About Us</span></li> --}}
        </ul><!-- /.thm-breadcrumb -->
        <h2>Registration</h2>
    </div><!-- /.container -->
</section><!-- /.inner-banner -->

{{-- Breadcrump end --}}

{{-- Singup form start --}}

{{-- <section class="signup">
    <div class="container">
    <div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
    <div class="signup-form">
    <h3>Signup Here</h3>
    <form action="">
        <div class="row">
            <div class="col-lg-12">
                <input type="text" name="name" placeholder="Enter Name">
            </div>
            <div class="col-lg-12">
                <input type="email" name="email" placeholder="Enter Email">
            </div>
            <div class="col-lg-6">
                <input type="text" name="mobile" placeholder="Enter Mobile Number">
            </div>
            <div class="col-lg-6">
                <input type="submit" name="password" value="Send OTP">
            </div>
            <div class="col-lg-6">
                <input type="text" name="mobile" placeholder="Enter OTP">
            </div>
            <div class="col-lg-6">
                <input type="submit" name="password" value="Verify OTP">
            </div>
            <div class="col-lg-12">
                <div class="signup-link">
                    <a href="#" id="signup-link">Login Here>></a>
                </div>
            </div>
        </div>
    </form>
    </div>
    <div class="col-lg-3"></div>
    </div>
    </div>
    </div>
</section> --}}

<section class="login">
    <div class="container">
    <div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
    {{-- <div class="login-form">
    <h3>Login Here</h3>
    <form action="">
        <div class="row">
        
        <div class="col-lg-12">
        <div class="rows">
            <div class="columns" id="full-cols">
                <input type="text" name="name" placeholder="Enter Name">
            </div>
        </div>
        </div>

        <div class="col-lg-12">
        <div class="rows">
            <div class="columns" id="full-cols">
                <input type="text" name="name" placeholder="Enter Email">
            </div>
        </div>
        </div>

        <div class="col-lg-12">
        <div class="rows">
            <div class="columns">
                <input type="text" name="name" placeholder="Phone Number">
            </div>
            <div class="columns">
                <input type="submit" name="password" value="Send OTP">
            </div>
        </div>
        </div>

        <div class="col-lg-12">
        <div class="rows">
            <div class="columns">
                <input type="text" name="name" placeholder="Enter OTP">
            </div>
            <div class="columns">
                <input type="submit" name="password" value="Validate OTP">
            </div>
        </div>
        </div>

        <div class="col-lg-12">
            <div class="login-link">
                <a href="#" id="login-link">Signup Here>></a>
            </div>
        </div>

        </div> --}}
        {{-- <h3 class="text-center">Signup Here</h3> --}}
        <h3 class="text-center register" >Register Here</h3>
        <form>
        @csrf
        <div class="grid-container">
            <div class="item3" style="    height: 40px;">
                <input type="text" name="mobile" id="mobile" placeholder="Enter Mobile Number*" required>
                <div id="otp_error"></div>
            </div>  

            <div class="item6" style="height: 5.6vh;">
            {{-- <input type="button" value="Send OTP" onclick="sendOtp()" id="send_otp_button" style="width: 100%;background-color: #495057;color: white;"> --}}
            <button id="send_otp_button" type="button" onclick="sendOtp()" style="" > Send OTP  </button>
            </div>

            <div class="item5" style="display: none;" id="otp_div">
                <input type="text" name="otp" id="otp" placeholder="Enter OTP">
                <div id="otp_verify_error"></div>
            </div>

            <div class="item4" style="display: none;" id="otp_btn" style="height: 7.5vh;">
                {{-- <input type="button" value="Verify OTP" id="verify_btn_btn" onclick="otpVerify()" style="width: 100%;
                background-color: #495057;color: white;"   > --}}
                <button id="verify_btn_btn" type="button" onclick="otpVerify()" style="" > Verify OTP  </button>             
            </div>

            <div class="item1" id="name_div" style="display: none;">
                <input type="text" name="name" id="name" placeholder="Enter Name*" required>
                <div id="name_error"></div>
            </div>

            <div class="item2" id="email_div" style="display: none;">
                <input type="email" name="email" id="email" placeholder="Enter Email">
                <div id="email_error"></div>
            </div>
            <div class="button_sub" style="background-color: unset; display: none;" id="sub_btn">
                <button id="register_btn" onclick="register()" type="button"  class="btn btn-primary btn-xs ">Submit</button>
            </div>
        </div>
    </form>
    </div>

    </div>
    </div>
    
    </div>
</section>
{{-- Singup form end --}}
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script>
        function sendOtp() {
         var mobile = $("#mobile").val();
         console.log(mobile);
         if (mobile.length == 10) {
               // $("#otp_error").html('');
               $.ajaxSetup({
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
               });
               $.ajax({
                  type: "GET",
                  url: "{{ url('web/user/send/otp/') }}" + "/" + mobile + "",
                  beforeSend: function() {
                     $("#send_otp_button").html(
                           `<i class="fa fa-spinner fa-spin" aria-hidden="true" style="color:black"></i>`);
                  },
                  success: function(data) {
                     console.log(data);
                     if (data == '1') {
                           timerStart();
                           $("#otp_div").show();
                           $('#otp_btn').show();
                           $("#otp_error").html(
                              '<small>Otp Send To Your Mobile Number</small>').css('color', 'grey');

                     } else if (data == '2') {
                           $("#otp_error").html(
                              '<small>Sorry Number Already Registered With Us</small>').css('color', 'red');
                           $("#send_otp_button").html('Send OTP');
                     } else {
                           $("#otp_error").html(
                              '<small>Something Went Wrong Please try Again</small>').css('color', 'red');
                           $("#send_otp_button").html('Send OTP');

                     }
                  }
               });
         } else {
               $("#otp_error").html("<small>Please Enter Valid Mobile Number</small>").css('color', 'red');
         }
      }
        function timerStart() {
            var time = 30;
            var intervalId = setInterval(function() {
                $('#send_otp_button').attr('disabled', true);
                var time_data = time--;
                if (time_data == '0') {
                    $('#send_otp_button').attr('disabled', false);
                    $('#send_otp_button').html('Resend OTP');
                    clearInterval(intervalId);
                } else {
                    // console.log(time_data.toString().length);
                    if (time_data.toString().length == '1') {
                        time_data = "0" + time_data;
                    }
                    $('#send_otp_button').html(time_data);
                }
            }, 1000);
        };

        function otpVerify(){
         var mobile = $("#mobile").val();
         var otp = $("#otp").val();
         if (mobile.length == 10 && otp.length == 5) {
            $("#otp_verify_error").html('');
            $.ajaxSetup({
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
            });
            $.ajax({
                  type:"GET",
                  url:"{{ url('web/user/verify/otp')}}"+"/"+mobile+"/"+otp,
                  beforeSend: function(){
                     $("#verify_btn_btn").html(`<i class="fa fa-spinner fa-spin" aria-hidden="true" style="color:black"></i>`);
                  },
                  success:function(data){
                     console.log(data);
                     // 1:new 2:old
                     if (data == '1') {
                        $("#mobile").attr('readonly',true);
                        $("#name_div").show();
                        $("#email_div").show();
                        $("#sub_btn").show();   
                        $("#otp_error").hide();
                        $("#otp_verify_error").hide();
                        $("#send_otp_button").hide();
                        $("#verify_btn_btn").hide();
                        $("#otp_div").hide();
                        $("#otp_verify_error").html('<small>OTP Verified Successfull</small>').css('color', 'grey');

                     } 
                     else if(data == '2'){
                        // window.location.href = "";
                     }
                     else{
                        $("#verify_btn_btn").html('Verify OTP');
                        $("#otp_verify_error").html('<small>Sorry Invalid OTP</small>').css('color', 'red');
                     }
                  }
            });
         }else{
            $("#otp_error").html("<small>Please Enter Valid OTP</small>").css('color', 'red');
         }
      }

      function register(){
         var mobile = $("#mobile").val();
         var otp = $("#otp").val();
         var name = $("#name").val();         
         var email = $("#email").val();

         $.ajaxSetup({
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
         });

         $.ajax({
            type:"post",
            url:"{{ route('web.user.registration.save')}}",
            data:{
               "_token": "{{ csrf_token() }}",
               mobile : mobile,
               otp : otp,
               name : name,
               email : email,
            },
            beforeSend: function(){
               $("#register_btn").html("Please Wait");
               $('#register_btn').attr('disabled',true);
            },
            error: function (xhr) {
                console.log(xhr);
               $("[id$='_error']").html('');
               $("#register_btn").html("Submit");
               $('#register_btn').attr('disabled',false);
               $.each(xhr.responseJSON.errors, function(key,value) {
                  $('#'+key+'_error').html('<span style="color:red">'+value+'</span');
               }); 
               $('#register_btn').html("Submit");
            },
            success:function(data){
               console.log(data);
               if (data == '1') {     
                window.location.href = "{{route('users.web.bookride')}}"        
               } else{
                     $("#otp_error").html('<small>Sorry Invalid OTP</small>').css('color', 'red');
               }
            }
         });
      }
    </script>
@endsection