    @extends('web.template.master')
    @section('content')
    <style>
        .book{
            background-color: #f2dfd0;
            border-radius:25px;
            padding:10px 20px;
        }
        .book:hover {
            background-color: rgb(191, 221, 109);
        }
    </style>
    <div class="main-banner-wrapper">
            <section class="banner-style-one owl-theme owl-carousel no-dots">
                <div class="slide slide-one" style="background-image: url({{asset('web/assets/images/slider/newslider22.jpg')}}";">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h3 class="banner-title">Enjoy Momo with us</h3>
                                <p>Enjoy your comfortable treat with <br> our service</p>
                                <div class="btn-block">
                                    <a href="#" class="banner-btn">Learn More</a>
                                </div><!-- /.btn-block -->
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.slide -->
                <div class="slide slide-two" style="background-image: url({{asset('web/assets/images/slider/slider-1-2.jpg')}}";">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h3 class="banner-title">Enjoy Momo with us</h3>
                                <p>Enjoy your comfortable treat with <br> our service</p>
                                <div class="btn-block">
                                    <a href="#" class="banner-btn">Learn More</a>
                                </div><!-- /.btn-block -->
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.slide -->
            </section><!-- /.banner-style-one -->

            <div class="carousel-btn-block banner-carousel-btn">
                <span class="carousel-btn left-btn"><i class="conexi-icon-left"></i></span>
                <span class="carousel-btn right-btn"><i class="conexi-icon-right"></i></span>
            </div><!-- /.carousel-btn-block banner-carousel-btn -->
        </div><!-- /.main-banner-wrapper -->

        {{-- Booking start --}}

        <section class="book-ride-one">
            <img src="{{asset('web/assets/images/background/booking-bg-1-1.png')}}" class="footer-bg" alt="Awesome Image" />
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="content-block">
                            <div class="block-title mb-0">
                                <h2 class="light text-center">Deliver Transfer</h2>
                                @if (Session::has('time_error'))
                                    <div class="alert alert-danger">{{ Session::get('time_error') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                       <div class="col-lg-12">
                            {{-- <h4>Airport to Destination</h4> --}}
                            <form action="{{route('users.web.booking')}}" method="post" class="booking-form-one" id="myForm">
                                @csrf
                                <input type="hidden" value="1" name="ride_type">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="input-holder">
                                        <label for="pickup">From:</label>
                                        <input type="text" value="Momo Divine" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="input-holder">
                                        <label for="dropoff">To:</label>
                                        <input type="text" name="dropoff" placeholder="Dropoff Location" id="dropoff" onkeyup="fetchData2()">
                                        <i class="fa fa-spinner fa-spin" id="loader_id2" style="display: none;"></i>  
                                        <div id="mob-search_box2" class="suggestion-item-box mob">
                                        <div id="mob-search_res2" class="" style="padding: 10px 0px;">
                                          
                                        </div>
                                      </div>
                                        <div id=""></div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="input-holder">
                                        <label for="pickdate">Dropoff Date:</label>
                                        <input type="date" name="date" id="dropdate">
                                        @error('date')
                                    <span style="color:red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                    </div>
                                </div>
                                <div class="col-lg-2 picktime3" style="display: none;">
                                    <div class="input-holder">
                                        <label>Time: </label>
                                        <input type="text" id="picktime2" name="time" readonly>
                                        {{-- <input type="time" value="01:00" min="18:00" name="time" id="picktime" class="picktime"> --}}
                                        @error('time')
                                    <span style="color:red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    {{-- <i class="conexi-icon-clock" id="clock-icon"></i> --}}
                                    </div>
                                </div>

                                <div class="col-lg-2 picktimetommorow" style="display: none;">
                                    <div class="input-holder">
                                        <label for="picktime">Time: </label>
                                        {{-- <input type="text" id="picktime2" name="time" readonly> --}}
                                        <input type="time" name="time" id="picktime" class="picktime">
                                        @error('time')
                                        <span style="color:red" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    {{-- <i class="conexi-icon-clock" id="clock-icon"></i> --}}
                                    </div>
                                </div>
                               
                                {{-- Script start--}}
                               
                                {{-- Script end--}}

                                <div class="col-lg-2">
                                <label for="picktime" style="font-weight: 700;
                                margin-left: 20px;">Price: in &#8377;</label>
                                <div class="input-holder" id="price_dropoff" style="display: none;">
                                    <div class="price-text"><input type="text" name="price" id="dropoffprice" readonly></div>
                                </div>
                                </div>

                                {{-- Button --}}

                                <div class="col-lg-12">
                                    <p style="color: #b0d734;">Note: Time should be 1 hours past current time</p>
                                </div>


                            <div class="col-lg-5"></div>
                               
                                <div class="col-lg-2">
                                    <div class="input-holder">
                                        <button type="submit" class="book" id="booknow" onchange="myFunction()">Book Now</button>
                                    </div>
                                </div>

                            <div class="col-lg-5"></div>


                                {{-- Button --}}
                            </div>
                            </form>   
                       </div>

                    </div>
                </div>
            </div>
        </section>

      
        {{-- Booking end --}}
        <section class="about-style-one ">
            <div class="container">
                <div class="block-title text-center">
                    <div class="dot-line"></div><!-- /.dot-line -->
                    <p>Welcome to Momo Divine</p>
                    <h2>Your first choice for having MoMo</h2>
                </div><!-- /.block-title -->
                <div class="row high-gutter">
                    <div class="col-lg-6">
                        <div class="about-image-block">
                            <img src="{{asset('web/assets/images/custom/about/aboutsize.jpg')}}" alt="Awesome Image" />
                            <p style="text-align: justify;">When it comes to finding the perfect momo website, we stand out as the top choice. Our commitment to quality, authenticity, and exceptional flavors sets us apart from the rest. We pride ourselves on crafting momos that are a true reflection of the rich culinary heritage they originate from. Our skilled chefs meticulously prepare each dumpling, ensuring that every bite is filled with tantalizing taste and texture. From traditional classics to innovative fusion creations, our menu offers a wide variety of options to satisfy every palate. Moreover, we prioritize freshness and use only the finest ingredients, sourced responsibly. Whether you're a momo enthusiast or new to this delightful delicacy, we guarantee a memorable dining experience. With our user-friendly website, you can conveniently explore our menu, place orders, and have our mouthwatering momos delivered straight to your doorstep. Choose us for an authentic and delectable momo journey that will leave you craving for more.</p>
                        </div><!-- /.image-block -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="text-block">
                            <div class="video-block-one">
                                <div class="image-block">
                                    <div class="inner-block">
                                        <img src="{{asset('web/assets/images/slider/slider-1-1.jpg')}}" alt="Awesome Image" />
                                        <!-- <a href="https://www.youtube.com/watch?v=hsb-fA6ApiE" class="video-popup"><i class="fa fa-play"></i></a> -->
                                    </div><!-- /.inner-block -->
                                </div><!-- /.image-block -->
                                <div class="content-block">
                                    <h3>We’re specialized in providing a high quality service</h3>
                                </div><!-- /.content-block -->
                            </div><!-- /.video-block-one -->
                            <p>
                                In addition to our unwavering dedication to quality and authenticity, there are several other reasons why choosing us for your momo cravings is a decision you won't regret.

First and foremost, we prioritize customer satisfaction above everything else. From the moment you visit our website to the moment you take your first bite, we strive to provide an exceptional customer experience. Our user-friendly interface allows you to effortlessly navigate through our menu, customize your orders, and conveniently place them with just a few clicks. We understand the importance of convenience in today's fast-paced world, which is why we offer reliable and prompt delivery services, ensuring that your momos arrive fresh and piping hot.

Moreover, we believe in catering to all dietary preferences and restrictions. Our menu includes a wide range of options suitable for vegetarians, vegans, and those with gluten-free requirements. We believe that everyone should be able to indulge in the irresistible flavors of momos, regardless of their dietary choices.

At our momo website, we take pride in fostering a sense of community and culinary exploration. We regularly introduce new and exciting flavors, drawing inspiration from various cuisines around the world. Our innovative fusion creations provide a unique twist to the traditional momo experience, allowing you to embark on a culinary adventure without leaving the comfort of your home.

Last but not least, we value transparency and open communication. We welcome feedback from our customers and constantly strive to improve and evolve based on their suggestions. Your satisfaction and enjoyment are our top priorities, and we are committed to exceeding your expectations in every aspect of your momo journey.

So why choose us for your momo cravings? Because we offer a delightful combination of quality, authenticity, convenience, inclusivity, culinary exploration, and exceptional customer service. Indulge in the flavors that transport you to the vibrant streets of the Himalayas, and let us take you on a memorable momo experience that will leave you longing for more. 
                            <div class="call-block">
                                <div class="left-block">
                                    <!-- <div class="icon-block">
                                        <i class="conexi-icon-phone-call"></i>
                                    </div> -->
                                    <!-- /.icon-block -->
                                    <div class="content-block">
                                       <a href="{{route('web.about')}}">Know More</a>
                                    </div><!-- /.content-block -->
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
                            <p>Momo Divine is a premier momo booking company that offers reliable, safe, and affordable momo services its customers.
                               Momo Divine believes that safety & hygine is the first priority.
                            </p>
                            <!-- <a href="#" class="more-link">Read More</a> -->
                        </div><!-- /.single-feature-one -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="single-feature-one">
                            <div class="icon-block">
                                <i class="conexi-icon-seatbelt"></i>
                            </div><!-- /.icon-block -->
                            <h3><a href="#">Deliver Riders</a></h3>
                            <p>Momo Divine takes great pride in its team of Deliver Riders who are not only professional but also knowledgeable about local roads and traffic conditions.</p>
                            <!-- <a href="#" class="more-link">Read More</a> -->
                        </div><!-- /.single-feature-one -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="single-feature-one">
                            <div class="icon-block">
                                <i class="conexi-icon-consent"></i>
                            </div><!-- /.icon-block -->
                            <h3><a href="#">Customer service</a></h3>
                            <p>We understand that customer satisfaction is essential to the success of our business, and we strive to exceed expectations with every deliver.</p>
                            <!-- <a href="#" class="more-link">Read More</a> -->
                        </div><!-- /.single-feature-one -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.feature-style-one -->
        


        {{-- <section class="taxi-style-one">
            <div class="container">
                <div class="block-title text-center">
                    <div class="dot-line"></div><!-- /.dot-line -->
                    <p>Our best cars</p>
                    <h2>Choose taxi</h2>
                </div><!-- /.block-title -->
                <ul class="nav nav-tabs tab-title" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#hybrid" role="tab" data-toggle="tab">Sedan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#town" role="tab" data-toggle="tab">SUV</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#limousine" role="tab" data-toggle="tab">LIMOUSINE taxi</a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#suv" role="tab" data-toggle="tab">suv taxi</a>
                    </li> -->
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane show active  animated fadeInUp" id="hybrid">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="single-taxi-one">
                                    <div class="inner-content">
                                        <img src="{{asset('web/assets/images/pricing/pricing-1-1.png')}}" alt="Awesome Image" />
                                        <!-- <div class="icon-block">
                                            <i class="conexi-icon-bmw"></i>
                                        </div> -->
                                        <!-- /.icon-block -->
                                        <h3>Maruti Alto 800</h3>
                                        <!-- <ul class="feature-list">
                                            <li>
                                                <span class="name-line">Base Rate:</span>
                                                <span class="price-line">$4.30</span>
                                            </li>
                                            <li>
                                                <span class="name-line">Per Mile/KM:</span>
                                                <span class="price-line">$2.00</span>
                                            </li>
                                            <li>
                                                <span class="name-line">Passengers:</span>
                                                <span class="price-line">4</span>
                                            </li>
                                        </ul> -->
                                        <!-- /.feature-list -->
                                        <a href="#" class="book-taxi-btn">Book Taxi</a>
                                    </div><!-- /.inner-content -->
                                </div><!-- /.single-taxi-one -->
                            </div><!-- /.col-lg-4 -->
                            <div class="col-lg-4">
                                <div class="single-taxi-one">
                                    <div class="inner-content">
                                        <img src="{{asset('web/assets/images/pricing/pricing-1-2.png')}}" alt="Awesome Image" />
                                        <!-- <div class="icon-block">
                                            <i class="conexi-icon-mercedes-benz"></i>
                                        </div> -->
                                        <!-- /.icon-block -->
                                        <h3>Maruti Suzuki Dzire</h3>
                                        <!-- <ul class="feature-list">
                                            <li>
                                                <span class="name-line">Base Rate:</span>
                                                <span class="price-line">$4.30</span>
                                            </li>
                                            <li>
                                                <span class="name-line">Per Mile/KM:</span>
                                                <span class="price-line">$2.00</span>
                                            </li>
                                            <li>
                                                <span class="name-line">Passengers:</span>
                                                <span class="price-line">4</span>
                                            </li>
                                        </ul> -->
                                        <!-- /.feature-list -->
                                        <a href="#" class="book-taxi-btn">Book Taxi</a>
                                    </div><!-- /.inner-content -->
                                </div><!-- /.single-taxi-one -->
                            </div><!-- /.col-lg-4 -->
                            <div class="col-lg-4">
                                <div class="single-taxi-one">
                                    <div class="inner-content">
                                        <img src="{{asset('web/assets/images/pricing/pricing-1-3.png')}}" alt="Awesome Image" />
                                        <!-- <div class="icon-block">
                                            <i class="conexi-icon-toyota"></i>
                                        </div> -->
                                        <!-- /.icon-block -->
                                        <h3>Hyundai i10</h3>
                                        <!-- <ul class="feature-list">
                                            <li>
                                                <span class="name-line">Base Rate:</span>
                                                <span class="price-line">$4.30</span>
                                            </li>
                                            <li>
                                                <span class="name-line">Per Mile/KM:</span>
                                                <span class="price-line">$2.00</span>
                                            </li>
                                            <li>
                                                <span class="name-line">Passengers:</span>
                                                <span class="price-line">4</span>
                                            </li>
                                        </ul> -->
                                        <!-- /.feature-list -->
                                        <a href="#" class="book-taxi-btn">Book Taxi</a>
                                    </div><!-- /.inner-content -->
                                </div><!-- /.single-taxi-one -->
                            </div><!-- /.col-lg-4 -->
                        </div><!-- /.row -->
                    </div>
                    <div role="tabpanel" class="tab-pane animated fadeInUp" id="town">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="single-taxi-one">
                                    <div class="inner-content">
                                        <img src="{{('web/assets/images/pricing/pricing-1-1.png')}}" alt="Awesome Image" />
                                        <!-- <div class="icon-block">
                                            <i class="conexi-icon-bmw"></i>
                                        </div> -->
                                        <!-- /.icon-block -->
                                        <h3>Mahindra Scorpio</h3>
                                        <!-- <ul class="feature-list">
                                            <li>
                                                <span class="name-line">Base Rate:</span>
                                                <span class="price-line">$4.30</span>
                                            </li>
                                            <li>
                                                <span class="name-line">Per Mile/KM:</span>
                                                <span class="price-line">$2.00</span>
                                            </li>
                                            <li>
                                                <span class="name-line">Passengers:</span>
                                                <span class="price-line">4</span>
                                            </li>
                                        </ul> -->
                                        <!-- /.feature-list -->
                                        <a href="#" class="book-taxi-btn">Book Taxi</a>
                                    </div><!-- /.inner-content -->
                                </div><!-- /.single-taxi-one -->
                            </div><!-- /.col-lg-4 -->
                            <div class="col-lg-4">
                                <div class="single-taxi-one">
                                    <div class="inner-content">
                                        <img src="{{asset('web/assets/images/pricing/pricing-1-2.png')}}" alt="Awesome Image" />
                                        <!-- <div class="icon-block">
                                            <i class="conexi-icon-mercedes-benz"></i>
                                        </div> -->
                                        <!-- /.icon-block -->
                                        <h3>Ford EcoSport</h3>
                                        <!-- <ul class="feature-list">
                                            <li>
                                                <span class="name-line">Base Rate:</span>
                                                <span class="price-line">$4.30</span>
                                            </li>
                                            <li>
                                                <span class="name-line">Per Mile/KM:</span>
                                                <span class="price-line">$2.00</span>
                                            </li>
                                            <li>
                                                <span class="name-line">Passengers:</span>
                                                <span class="price-line">4</span>
                                            </li>
                                        </ul> -->
                                        <!-- /.feature-list -->
                                        <a href="#" class="book-taxi-btn">Book Taxi</a>
                                    </div><!-- /.inner-content -->
                                </div><!-- /.single-taxi-one -->
                            </div><!-- /.col-lg-4 -->
                            <div class="col-lg-4">
                                <div class="single-taxi-one">
                                    <div class="inner-content">
                                        <img src="{{asset('web/assets/images/pricing/pricing-1-3.png')}}" alt="Awesome Image" />
                                        <!-- <div class="icon-block">
                                            <i class="conexi-icon-toyota"></i>
                                        </div> -->
                                        <!-- /.icon-block -->
                                        <h3>Tata Nexon</h3>
                                        <!-- <ul class="feature-list">
                                            <li>
                                                <span class="name-line">Base Rate:</span>
                                                <span class="price-line">$4.30</span>
                                            </li>
                                            <li>
                                                <span class="name-line">Per Mile/KM:</span>
                                                <span class="price-line">$2.00</span>
                                            </li>
                                            <li>
                                                <span class="name-line">Passengers:</span>
                                                <span class="price-line">4</span>
                                            </li>
                                        </ul> -->
                                        <!-- /.feature-list -->
                                        <a href="#" class="book-taxi-btn">Book Taxi</a>
                                    </div><!-- /.inner-content -->
                                </div><!-- /.single-taxi-one -->
                            </div><!-- /.col-lg-4 -->
                        </div><!-- /.row -->
                    </div>
                   
                
                </div><!-- /.tab-content -->
            </div><!-- /.container -->
        </section><!-- /.taxi-style-one --> --}}

        <!-- Contact Form start -->
        
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
                        <img src="{{asset('web/assets/images/custom/contact/contact.jpg')}}" class="contact-image" alt="">
                </div>
                </div>
            </div><!-- /.container -->
        </section><!-- /.contact-form-style-one -->

        <!-- Contact Form end -->
        

        @endsection

        @section('script')
        <script src=""></script>
            <script>
        //         $(document).ready(function() {
        //     $("#location_search_box").on('keyup', function() {
        //         var val = $(this).val();

        //         $.ajaxSetup({
        //             headers: {
        //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //             }
        //         });

        //         $.ajax({
        //             method: 'GET',
        //             url: "{{ route('web.location.search') }}",
        //             data: {
        //                 _token: '{{ csrf_token() }}',
        //                 'name': val
        //             },
        //             success: function(response) {
        //                 // alert(response);
        //                 console.log(response);
        //                 $("#location-search-suggestion").html(response);
        //             }
        //         });
        //     });

        //     $(document).on('click', 'option', function() {
        //         var value = $(this).text();
        //         $("#location_search_box").val(value);
        //         $("#location-search-suggestion").html("");
        //     });
        // });
        //fetch location api
        function fetchData() {
        let search_key = $("#pickup").val();
        if (search_key && search_key.length > 0) {
          $("#mob-search_box").css("display" ,"block");
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          $.ajax({
            url: "{{url('/search_location')}}",
            type: "post",
            data: {
                "_token": "{{ csrf_token()}}",
              search_key: search_key,
            },
            beforeSend: function() {
              $("#loader_id").show();
            },
            success: function(data) {
              console.log(data);
              $("#loader_id").remove();
              if (data.status) {
                let html = '';
                if (data.results.length > 0) {
                  $.each(data.results, function(index, locations) {
                    html+=`<a type="button" onClick="fetchPrice(${locations.id}, ${locations.price}, '${locations.location_name}')" style="cursor:pointer;">
                      <div class="suggestion-item-block doctor">
                        <div class="info-block">
                          <h5><i class="fa fa-map-marker"></i>  ${locations.location_name}</h5>
                        </div>
                      </div>
                      </a><br>`;
                  })
                }
                $("#mob-search_res").html(html);
              }
            }
          })  
        }else{
          $("#mob-search_box").css("display" ,"none");
        }
      }
      function fetchPrice(id, price, name){
        // let html = `<div class="price-text"><input type="text" name="price" value="${price}"></div>`;
        console.log(name);
        $("#price_pickup").show();   
        $("#pickup").val(name);
        $("#pickupprice").val(price);
        // $("#price_pickup").html(html);
        $('#mob-search_box').hide();   
      }

      function fetchData2() {
        let search_key = $("#dropoff").val();
        if (search_key && search_key.length > 0) {
          $("#mob-search_box2").css("display" ,"block");
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          $.ajax({
            url: "{{url('/search_location')}}",
            type: "post",
            data: {
                "_token": "{{ csrf_token()}}",
              search_key: search_key,
            },
            beforeSend: function() {
              $("#loader_id2").show();
            },
            success: function(data) {
              console.log(data);
              $("#loader_id2").remove();
              if (data.status) {
                let html = '';
                if (data.results.length > 0) {
                  $.each(data.results, function(index, locations) {
                    html+=`<a type="button" onClick="fetchPrice2(${locations.id}, ${locations.price}, '${locations.location_name}')" style="cursor:pointer;">
                      <div class="suggestion-item-block doctor">
                        <div class="info-block">
                          <h5><i class="fa fa-map-marker"></i>  ${locations.location_name}</h5>
                        </div>
                      </div>
                      </a><br>`;
                  })
                }
                $("#mob-search_res2").html(html);
              }
            }
          })  
        }else{
          $("#mob-search_box2").css("display" ,"none");
        }
      }
      function fetchPrice2(id, price, name){
        // let html = `<div class="price-text"><input type="text" name="price" value="${price}"></div>`;
        console.log(name);
        $("#price_dropoff").show();   
        $("#dropoff").val(name);
        $("#dropoffprice").val(price);
        // $("#price_dropoff").html(html);
        $('#mob-search_box2').hide();   
      }

      $(document).ready(function() {
            $("#hourselct").on('change', function() {
                var hour_id = $('#hourselct').val();
                $.ajax({
                    method: 'GET',
                    url: "{{ route('fetchPrice') }}"+"/"+hour_id,
                    success: function(response) {
                        $('#hour_price').show();
                        $('#hourprice').val(response.price);
                    }
                });
            });
      });

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