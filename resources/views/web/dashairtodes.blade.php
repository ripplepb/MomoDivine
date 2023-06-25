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
        <h2>Dashboard</h2>
    </div><!-- /.container -->
</section><!-- /.inner-banner -->

{{-- Breadcrump end --}}


{{-- Breadcrump end --}}
<section class="dashboard">
    <div class="container">
    <div class="dashboard-area">
        <div class="profilearea">
            <div class="profileheading">
                <h3><a href="#"></a><i class="fa fa-user" aria-hidden="true"></i> {{Auth::user()->name}}</a></h3>
            </div>

            <div class="normal-booking">
                <div class="air-to-des">
                    <p><a href="{{route('users.dashboard.view')}}">Profile ></a></p>
                </div>
                <div class="air-to-des">
                    <p><a href="{{route('users.dashboard.dashairtodes')}}"> From Airport to Destination ></a></p>
                </div>
                <div class="des-to-air">
                    <p><a href="{{route('users.dashboard.dashdestoair')}}"> From Destination to Airport ></a></p>
                </div>
            </div>


            <div class="savedbooking">
                <p><a href="{{route('users.dashboard.dashhourbook')}}">Hourly Booking ></a></p>
            </div>

            {{-- <div class="logout">
                <p><a href="{{route('users.dashboard.dashhourbook')}}"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></p>
            </div> --}}
        </div>

        <div class="contentarea">
            <div class="myprofile">
                @if (Session::has('message'))
                    <div class="alert alert-success">{{ Session::get('message') }}</div>
                @elseif (Session::has('error'))
                    <div class="alert alert-danger">{{ Session::get('error') }}</div>
                @endif
                <h3>Airport to Destination Details</h3>
            </div>

            <div class="allbookings">
                @foreach ($details as $item)
                <div class="individualbookings">
                    <p>
                        Dropoff Location: {{$item->location}}
                    </p>
                    <p>
                        Date: {{date('d F Y', strtotime($item->date))}}
                    </p>
                    <p>
                        Time: {{Carbon\Carbon::parse($item->time)->format('g:i a')}}
                    </p>
                    <p>
                        Price: &#8377; {{$item->total_price}}
                    </p>
                </div>
                @endforeach
                {{-- <div class="individualbookings">
                    <p>
                        Dropoff Location: Ganeshguri
                    </p>
                    <p>
                        Date: 21-03-2023
                    </p>
                    <p>
                        Time: 02: 00 PM
                    </p>
                    <p>
                        Price: &#8377; 300
                    </p>
                </div> --}}
            </div>
        </div>

    </div>
    </div>
</section>


@endsection