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
        <h2>Login</h2>
    </div><!-- /.container -->
</section><!-- /.inner-banner -->

{{-- Breadcrump end --}}

{{-- Login form start --}}

<section class="login">
    <div class="container">
    <div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
    <div class="login-form">
    <h3>Login Here</h3>
    
        <div class="rows">
            <div class="columns">
                <input type="number" name="mobile_no" placeholder="Phone Number" id="mobile">
                <div id="otp_error"></div>
                @error('mobile')
                    <span style="color:red" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
            <div class="columns" style="height: 7.5vh;">
                {{-- <input type="button" value="Send OTP" id="send_otp_button" onclick="sendOtp()" style="width: 100%;
                background-color: #495057;color: white;"> --}}
                <button id="send_otp_button" type="button" onclick="sendOtp()" style="" >Send OTP  </button>
            </div>
        </div>
    
        <div class="rows" id="show_otp">
            <div class="columns">
                <input type="password" name="otp" placeholder="Enter OTP" id="otp">
                <div id="otp_verify_error"></div>
            </div>
            <div class="columns" id="otp_div" style="height: 7.5vh;">
                    {{-- <input type="button" value="Verify OTP" style="width: 100%;
                    background-color: #495057;color: white;" onclick="otpVerify()" id="verify_btn_btn"> --}}
                <button id="verify_btn_btn" type="button" onclick="otpVerify()" style="" >Submit OTP  </button>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="login-link">
                <a href="{{route('web.signup')}}" id="login-link" class="btn btn-success" style="color:black;">Register Here>></a>
            </div>
        </div>
    </div>
    <div class="col-lg-3"></div>
    </div>
    </div>
    </div>
</section>
{{-- Login form end --}}
@endsection

@section('script')
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
                        url: "{{ url('mobile/send/otp') }}" + "/" + mobile + "",
                        beforeSend: function() {
                            $("#send_otp_button").html(
                                `<i class="fa fa-spinner fa-spin" aria-hidden="true" style="color:black"></i>`);
                        },
                        success: function(data) {
                            console.log(data);
                            if (data == '1') {
                                timerStart();
                                $("#otp_error").html(
                                    '<small>Otp Send To Your Mobile Number</small>').css('color', 'grey');

                            } else if (data == '2') {
                                $("#otp_error").html(
                                    '<small>Sorry Number Not Registered With Us</small>').css('color', 'red');
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
                if (time_data == 0) {
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
        }

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
                  url:"{{ url('mobile/verify/otp')}}"+"/"+mobile+"/"+otp,
                  beforeSend: function(){
                     $("#verify_btn_btn").html(`<i class="fa fa-spinner fa-spin" aria-hidden="true" style="color:black"></i>`);
                  },
                  success:function(data){
                     console.log(data);
                     // 1:new 2:old
                     if (data == '21') {
                        window.location.href = "{{route('users.web.bookride')}}"
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
    </script>
@endsection
