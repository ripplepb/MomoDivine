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
            <p>Welcome to Momo Divine</p>
            <h2>Your first choice for traveling</h2>
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
                    <h3><a href="#">Lincensed Drivers</a></h3>
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

{{-- Why Choose End --}}

@endsection