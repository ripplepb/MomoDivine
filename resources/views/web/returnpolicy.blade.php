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
        <h2>Return Policy</h2>
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
        <h2>Return Policy</h2>
    </div>
    <p>
        Thank you for using Cab Bijli, a cab booking website and a unit of M/S TIT-BITS. This Return Policy outlines our guidelines and procedures regarding cancellations, refunds, and modifications for the bookings made through our platform. By using our services or accessing the Website, 
        you agree to the terms and conditions outlined in this Return Policy.
    </p>
    <div class="term-main-heading">
        <h3>Cancellation Policy</h3>
        <p>
            <b>User-initiated Cancellations:</b> Users may cancel their bookings through the Cab Bijli website or mobile application. The cancellation policy and associated charges may vary depending on the specific cab service provider and the terms agreed upon during the booking process. 
            Please refer to the booking details for information on the applicable cancellation policy.
            <br>
            <b>Service Provider Cancellations:</b> In some cases, the cab service provider may cancel a booking due to unforeseen circumstances such as vehicle unavailability or other operational reasons. Cab Bijli will make 
            reasonable efforts to notify users promptly in such situations and assist in finding an alternative booking.
        </p>
    </div>
    <div class="term-main-heading">
        <h3>Refund Policy</h3>
        <p>
            <b>User-initiated Refunds:</b> Refunds for user-initiated cancellations will be processed in accordance with the cancellation policy and terms agreed upon during the booking process. The refund amount, if applicable, will be credited back to the original payment method used during the booking. Please note that 
            the refund processing time may vary depending on the payment provider and may take several business days.
            <br>
            <b>Service Provider Refunds:</b> In the event of a cancellation by the cab service provider, Cab Bijli will work with the user and the service provider to facilitate a refund, if applicable. 
            The refund amount, if any, will be determined by the service provider's cancellation policy.
        </p>
    </div>
    <div class="term-main-heading">
        <h3>Modification Policy</h3>
        <p>
            <b>User-initiated Modifications:</b> Users may request modifications to their bookings, such as changes in pick-up/drop-off locations, travel dates, or times. The availability and acceptance of modifications are subject to the discretion of the cab service provider. Any additional charges or fees resulting 
            from modifications will be communicated to the user, and the payment process will be adjusted accordingly.
            <br>
            <b>Service Provider Modifications:</b> In some cases, the cab service provider may need to modify a booking due to unforeseen circumstances. Cab Bijli will make reasonable efforts to 
            notify users promptly of any modifications and assist in finding suitable alternatives.
        </p>
    </div>
    <div class="term-main-heading">
        <h3>Contact and Support</h3>
        <p>
            For any cancellations, refunds, or modifications, please contact our customer support team at cabbijli@gmail.com or through our customer helpline. 
            Our dedicated support team will assist you in resolving any issues or concerns related to your booking.
            <br>
            Please note that Cab Bijli acts as an intermediary platform connecting users to third-party cab service providers. Therefore, the specific cancellation, refund, and modification policies may vary depending
            on the service provider and the terms agreed upon during the booking process.
            <br>
            Cab Bijli reserves the right to modify or update this Return Policy at any time without prior notice. 
            It is your responsibility to review this Return Policy periodically for any changes.
            <br>
            Last updated: 25-05-23
        </p>
    </div>
</div>

{{-- Terms & Conditions end --}}

{{-- Extra Div for spacing start--}}

<div class="spacing">
    
</div>

{{-- Extra Div for spacing end--}}


@endsection