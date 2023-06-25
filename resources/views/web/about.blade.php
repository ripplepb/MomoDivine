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
        <h2>About Us</h2>
    </div><!-- /.container -->
</section><!-- /.inner-banner -->

{{-- Breadcrump end --}}

{{-- About start --}}

<section class="about-style-one ">
    <div class="container">
        <div class="block-title text-center">
            <div class="dot-line"></div><!-- /.dot-line -->
            <p>Welcome to Cab Bijli</p>
            <h2>Your first choice for traveling</h2>
        </div><!-- /.block-title -->
        <div class="row high-gutter">
            <div class="col-lg-6">
                <div class="about-image-block">
                    <img src="{{asset('web/assets/images/custom/about/aboutsize.jpg')}}" alt="Awesome Image" />
                    <p style="text-align: justify;">There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form by injected humour or random words which don't look even slightly believable. If you are going to use a passage of lorem ipsum you need to be sure there isn't anything embarrassing.</p>
                </div><!-- /.image-block -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="text-block">
                    <div class="video-block-one">
                        <div class="image-block">
                            <div class="inner-block">
                                <img src="{{asset('web/assets/images/resources/video-1-1.png')}}" alt="Awesome Image" />
                                <!-- <a href="https://www.youtube.com/watch?v=hsb-fA6ApiE" class="video-popup"><i class="fa fa-play"></i></a> -->
                            </div><!-- /.inner-block -->
                        </div><!-- /.image-block -->
                        <div class="content-block">
                            <h3>We’re specialized in providing a high quality service</h3>
                        </div><!-- /.content-block -->
                    </div><!-- /.video-block-one -->
                    <p>
                        Cab Bijli is a premier cab booking company that offers reliable, safe, and affordable transportation services to its customers. With a fleet of well-maintained and comfortable cars, Cab Bijli provides top-notch services to passengers looking for hassle-free travel.

                        The company is committed to providing its customers with a comfortable and secure ride every time they book a cab. With a user-friendly website and mobile application, Cab Bijli makes it easy for customers to book a ride in just a few clicks. 
                    <div class="call-block">
                        <div class="left-block">
                            <!-- <div class="icon-block">
                                <i class="conexi-icon-phone-call"></i>
                            </div> -->
                            <!-- /.icon-block -->
                            {{-- <div class="content-block">
                               <a href="#">Know More</a>
                            </div> --}}
                            <!-- /.content-block -->
                        </div><!-- /.left-block -->
                        <!-- <div class="right-block">
                            <a class="phone-number" href="callto:888-888-0000">888 888 0000</a>
                        </div> -->
                        <!-- /.right-block -->
                    </div><!-- /.call-block -->
                </div><!-- /.text-block -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.about-style-one -->

{{-- About end --}}

{{-- Why Choose start --}}

<section class="feature-style-one thm-black-bg">
    <img src="{{asset('assets/images/background/feature-bg-1-1.png')}}" alt="Awesome Image" class="feature-bg" />
    <div class="container">
        <div class="block-title text-center">
            <div class="dot-line"></div><!-- /.dot-line -->
            <!-- <p>Conexi benefit list</p> -->
            <h2 class="light">Why choose us</h2>
        </div><!-- /.block-title text-center -->
        <div class="row">
            <div class="col-lg-4">
                <div class="single-feature-one">
                    <div class="icon-block">
                        <i class="conexi-icon-insurance"></i>
                    </div><!-- /.icon-block -->
                    <h3><a href="#">Safety Guarantee</a></h3>
                    <p>Cab Bijli is a premier cab booking company that offers reliable, safe, and affordable transportation services its customers.
                       Cab Bijli believes that safety is the first priority.
                    </p>
                    <!-- <a href="#" class="more-link">Read More</a> -->
                </div><!-- /.single-feature-one -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="single-feature-one">
                    <div class="icon-block">
                        <i class="conexi-icon-seatbelt"></i>
                    </div><!-- /.icon-block -->
                    <h3><a href="#">Lincensed Drivers</a></h3>
                    <p>Cab Bijli takes great pride in its team of licensed drivers who are not only professional but also knowledgeable about local roads and traffic conditions.</p>
                    <!-- <a href="#" class="more-link">Read More</a> -->
                </div><!-- /.single-feature-one -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="single-feature-one">
                    <div class="icon-block">
                        <i class="conexi-icon-consent"></i>
                    </div><!-- /.icon-block -->
                    <h3><a href="#">Customer service</a></h3>
                    <p>We understand that customer satisfaction is essential to the success of our business, and we strive to exceed expectations with every ride.</p>
                    <!-- <a href="#" class="more-link">Read More</a> -->
                </div><!-- /.single-feature-one -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.feature-style-one -->

{{-- Why Choose End --}}

@endsection