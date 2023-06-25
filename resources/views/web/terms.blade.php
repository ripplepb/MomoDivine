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
        <h2>Terms & Conditions</h2>
    </div><!-- /.container -->
</section><!-- /.inner-banner -->

{{-- Breadcrump end --}}

{{-- Extra Div for spacing start--}}

<div class="spacing">
    
</div>

{{-- Extra Div for spacing end--}}

{{-- Terms & Conditions start --}}

<div class="container terms-container">
    <div class="term-main-heading">
        <h2>Terms and Conditions</h2>
    </div>
    <br>
    <div class="term-second-heading">
        <h3>The Services</h3>
        <p>
            The Services constitute the technology platform that enables users of Cab Bijli’s website to 
            Book a ride from pickup location to airport or from airport to dropoff location. The website has another facility to book a cab at hourly rate.
        </p>
    </div>

    <br>
    <div class="term-main-heading">
        <h3>Your use of the services</h3>
    </div>
    <br>

    <div class="term-second-heading">
        <h4>User Accounts</h4>
        <p>
            In order to use most aspects of the Services, you must register for and maintain an active personal user Services account. You are responsible for all activity that occurs under your Account, and you agree to maintain the security and secrecy of your Account username,email and phone number at all times.
        </p>
    </div>

    <br>
    <div class="term-main-heading">
        <h3>Payment</h3>
    </div>
    <br>

    <div class="term-second-heading">
        <h4>General Fees</h4>
        <p>
            You understand that use of the Services may result in charges to you for the services or goods you receive from Cab Bijli and / or a Third Party Provider (“Charges ”). After you have received services or goods obtained through your use of the Services, Cab Bijli will facilitate your payment of the applicable Charges received on behalf of the Third Party Provider as such Third Party Provider’s limited payment collection agent. Payment 
            of such Charges in such manner shall be considered the same as payment made 
            directly by you to the Third Party Provider. All Charges will be inclusive of applicable 
            taxes where required by law.
        </p>
    </div>

    <div class="term-second-heading">
        <h4>Repair or Cleaning Fees</h4>
        <p>
            You shall be responsible for the cost of repair for damage to, or necessary cleaning of, Third Party Provider vehicles and property resulting from use of the Services under your Account in 
            excess of normal “wear and tear” damages and necessary cleaning (“Repair or Cleaning”).
        </p>
    </div>
    <div class="term-second-heading">
        <h4>Airport Parking Fees</h4>
        <p>
            The parking fee at the airport is the responsibility of the rider and must be borne by them.
        </p>
    </div>
    <div class="term-second-heading">
        <h4>Toll Fees</h4>
        <p>
            The fee at Toll Plazas is the sole responsibility of the rider and must be paid by them.
        </p>
    </div>
    <br>
    
    <div class="term-main-heading">
        <h3>Booking</h3>
    </div>
    <br>

    <div class="term-second-heading">
        <h4>Airport Booking</h4>
        <p>
            If a user books a ride, they can avail the ride after a duration of 3 hours.
        </p>
    </div>

    <div class="term-second-heading">
        <h4>Hourly Booking</h4>
        <p>
            If a user books a ride, they can avail the ride after a duration of 2 hours.
        </p>
    </div>


</div>

{{-- Terms & Conditions end --}}

{{-- Extra Div for spacing start--}}

<div class="spacing">
    
</div>

{{-- Extra Div for spacing end--}}

@endsection