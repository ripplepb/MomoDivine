<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from ashik.templatepath.net/conexi-preview-files/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 May 2023 08:01:51 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Momo Divine</title>
    <!-- <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png"> -->
    <!-- <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicon/favicon-96x96.png"> -->
    {{-- <link rel="icon" type="image/png" sizes="16x16" href="{{asset('web/assets/images/custom/logo/logonoback2.png')}}"> --}}
    <link rel="manifest" href="{{asset('web/assets/images/favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../ms-icon-144x144.html">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{asset('web/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('web/assets/css/responsive.css')}}">

    {{-- Jquery for timepicker --}}
    
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    
    {{-- Jquery for timepicker --}}
</head>

<body>
    <div class="preloader"></div><!-- /.preloader -->
    <div class="page-wrapper">
        <header class="site-header header-one">
            <div class="top-bar">
                <div class="container">
                    <div class="left-block">
                        {{-- <a href="{{route('web.login')}}"><i class="fa fa-user-circle"></i> Customer Sign In</a> --}}
                        <a href="mailto:momodivine.com"><i class="fa fa-envelope"></i>momodivine.com</a>
                    </div><!-- /.left-block -->
                    <div class="logo-block">
                        <a href="{{route('web.index')}}"><img src="{{asset('web/assets/images/custom/logo/newlogo2.png')}}" alt="Awesome Image" /></a>
                    </div><!-- /.logo-block -->
                    @if (Auth::guard('web')->check())
                        <div class="social-block">
                            {{-- <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-facebook-f"></i></a> --}}
                            {{-- {{Auth::user()->name}} --}}
                            <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Log Out</a>
                            <form id="logout-form" action="{{ route('web.logout') }}" method="POST" style="display: none;">@csrf</form>
                            <a href="{{route('users.dashboard.view')}}"> <span id="login">My Profile</span> </a>
                            {{-- <a href="{{route('web.logout')}}" ><i class="fa fa-power-off"></i> Log Out</a> --}}
                            {{-- <a href=""><i class="fa fa-sign-out" aria-hidden="true">Log out</a> --}}
                        </div><!-- /.social-block -->
                        @else
                        <div class="social-block">
                            {{-- <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-facebook-f"></i></a> --}}
                            {{-- {{Auth::user()->name}} --}}
                            <a href="{{route('web.login')}}"> <span id="login">Login</span> </a>
                            {{-- <a href=""><i class="fa fa-sign-out" aria-hidden="true">Log out</a> --}}
                        </div>
                    @endif
                </div><!-- /.container -->
            </div><!-- /.top-bar -->
            <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
                <div class="container clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="logo-box clearfix">
                        <button class="menu-toggler" data-target="#main-nav-bar">
                            <span class="fa fa-bars"></span>
                        </button>
                    </div><!-- /.logo-box -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="main-navigation" id="main-nav-bar">
                        <ul class="navigation-box">
                            <li class="">
                                <a href="{{route('web.index')}}">Home</a>
                                <!-- <ul class="sub-menu">
                                    <li><a href="index.php">Home One</a></li>
                                    <li><a href="index2.html">Home Two</a></li>
                                    <li><a href="index.php">Header Versions</a>
                                        <ul class="sub-menu">
                                            <li><a href="index.php">Header One</a></li>
                                            <li><a href="index2.html">Header Two</a></li>
                                        </ul>
                                    </li>
                                </ul> -->
                                <!-- /.sub-menu -->
                            </li>
                            <li><a href="{{route('web.about')}}">About</a></li>
                            {{-- <li>
                                <a href="#">Prices</a>
                            </li> --}}
                            <li><a href="{{route('users.web.bookride')}}">Book A Treat</a></li>
                            {{-- <li>
                                <a href="#">Gallery</a>
                            </li> --}}
                            <li><a href="{{route('web.contact')}}">Contact</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                    <div class="right-side-box">
                        <a href="tel:9864091882" class="contact-btn-block">
                            <span class="icon-block">
                                <i class="conexi-icon-phone-call"></i>
                            </span>
                            <span class="text-block">
                                7002865902
                                <span class="tag-line">Phone line</span>
                            </span>
                        </a>
                    </div><!-- /.right-side-box -->
                </div>
                <!-- /.container -->
            </nav>
        </header><!-- /.site-header header-one -->
       