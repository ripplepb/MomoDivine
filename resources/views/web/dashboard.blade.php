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
                <p><a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Log Out</a>
                    <form id="logout-form" action="{{ route('web.logout') }}" method="POST" style="display: none;">@csrf</form></p>
            </div> --}}
        </div>

        <div class="contentarea">
            <div class="myprofile">
                <h3><i class="fa fa-user" aria-hidden="true"></i> My Profile</h3>
            </div>

            <div class="profilesection">
                
                @if (Session::has('message'))
                    <div class="alert alert-success">{{ Session::get('message') }}</div>
                @elseif (Session::has('error'))
                    <div class="alert alert-danger">{{ Session::get('error') }}</div>
                @endif

                <form action="{{route('users.dashboard.submit')}}" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <div class="name_div">
                        <p>Name: </p>
                        <input type="text" name="name" value="{{$user_detail->name}}">
                    </div>
                    <div class="email_div">
                        <p>Email: </p>
                        <input type="text" name="email" value="{{$user_detail->email}}">
                    </div>
                    <div class="mobile_div">
                        <p>Mobile Number:</p>
                        <input type="text" name="mobile" value="{{$user_detail->mobile}}">
                    </div>
                    <button type="submit">Save</button>
                </form>
            </div>
        </div>

    </div>
</div>
</section>


@endsection