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
        <h2>Contact Us</h2>
    </div><!-- /.container -->
</section><!-- /.inner-banner -->

{{-- Breadcrump end --}}

{{-- Contact Form Start --}}

<section class="contact-form-style-one">
    <div class="container" id="contact_us">
        <div class="block-title text-center">
            <div class="dot-line"></div><!-- /.dot-line -->
            <p>Contact with us now</p>
            <h2>Leave a message</h2>
            
            @if (Session::has('message'))
            <div class="alert alert-success">{{ Session::get('message') }}</div>
            @elseif (Session::has('error'))
            <div class="alert alert-danger">{{ Session::get('error') }}</div>
            @endif

        </div><!-- /.block-title -->
        <div class="row">
        <div class="col-lg-6">

        <form class="contact-form-one row" id="contact-form" action="{{route('contact.submit')}}" method="post">
            @csrf
            <div class="col-lg-12">
                <div class="input-holder">
                    <input class="form-control" type="text" name="name" placeholder="Your name">
                    @error('name')
                                    <span style="color:red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                </div><!-- /.input-holder -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="input-holder">
                    <input class="form-control" type="email" name="email" placeholder="Email address">
                    @error('email')
                                    <span style="color:red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                </div><!-- /.input-holder -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="input-holder">
                    <input class="form-control" type="text" name="phone" placeholder="Phone">
                    @error('phone')
                                    <span style="color:red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                </div><!-- /.input-holder -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-12">
                <div class="input-holder">
                    <textarea class="form-control" name="message" placeholder="Write message"></textarea>
                    @error('message')
                                    <span style="color:red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                </div><!-- /.input-holder -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-12">
                <div class="form-group mrb-25">
                    <label for="captcha">Captcha</label>
                            <div class="captcha">
                            <span>{!! captcha_img() !!}</span>
                            <button type="button" class="btn btn-success" id="reload"> &#x21bb; </button>
                            </div><br>
                            <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                            @error('captcha')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <div class="input-holder text-center">
                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                    <button class="theme-btn btn-style-two" type="submit" data-loading-text="Please wait..."><span>Send Message</span></button>
                </div><!-- /.input-holder -->
            </div><!-- /.col-lg-6 -->
        </form><!-- /.contact-form-one -->
        </div>
        <div class="col-lg-6">
            <section class="contactdetails">
                <h3>Contact Details</h3>
                <br>
                <div class="address">
                    <h4>Address <i class="fa fa-address-card-o" aria-hidden="true"></i></h4>
                    <p>
                        TIT-BITS, Hotel Brindavan, Paltanbazar, Guwahati-781008
                    </p>
                </div>
                <div class="email">
                    <h4>Email <i class="fa fa-envelope-o" aria-hidden="true"></i></h4>
                    <p>cabbijuli@gmail.com, arup022@gmail.com</p>
                </div>
                <div class="email">
                    <h4>Phone Number <i class="fa fa-phone-square" aria-hidden="true"></i></h4> 
                    <p>+91 98640 91882, +91 7002158904, +91 8717871712</p>
                </div>
            </section>
        </div>
        </div>
    </div><!-- /.container -->
</section><!-- /.contact-form-style-one -->

{{-- Contact Form End --}}

@endsection
@section('script')
<script>
    $("#reload").click(function() {
        $.ajax({
            type: 'GET',
            url: "{{url('refresh-captcha')}}",
            success: function(data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });

</script>
@endsection