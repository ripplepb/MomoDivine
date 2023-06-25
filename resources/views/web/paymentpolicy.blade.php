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
        <h2>Payment Policy</h2>
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
        <h2>Payment Policy</h2>
    </div>
    <p>
        Thank you for using Cab Bijli, a cab booking websiteand a unit of M/S TIT-BITS. This Payment Policy outlines
        our guidelines and procedures regarding payments for the bookings made through our platform. By using our 
        services or accessing the Website, you agree to the terms and conditions outlined in this Payment Policy.
    </p>
    <div class="term-main-heading">
        <h3>Booking Payments:</h3>
        <p>
            <b>Payment Methods:</b> Cab Bijli accepts various payment methods, including credit cards, debit cards, and online payment gateways, as specified on the Website. 
            The availability of payment methods may vary depending on the user's location and the cab service provider.
            <br>
            <b>Payment Security:</b> Cab Bijli prioritizes the security of your payment information. We employ 
            industry-standard encryption protocols and comply with relevant data protection laws to ensure the 
            safety and confidentiality of your payment details. However, please note that no method of transmission 
            over the internet or electronic storage is 100% secure, and we cannot guarantee absolute security 
            of your payment information.
            <br>
            <b>Payment Authorization:</b> By making a booking through Cab Bijli, you authorize us to process the payment for the total booking amount, including any applicable taxes, fees, or additional charges as specified during the booking process. 
            The payment will be processed immediately or as per the cab service provider's policies.
        </p>
    </div>
    <div class="term-main-heading">
        <h3>Pricing</h3>
        <p>
            <b>Pricing Information:</b> The prices displayed on the Cab Bijli Website are provided by the cab service providers
            and are subject to change without notice. We strive to provide accurate and up-to-date pricing information, but we cannot guarantee the completeness or accuracy of such information. The final booking 
            price, including any taxes, fees, or additional charges, will be displayed during the booking process.
        </p>
    </div>
    <div class="term-main-heading">
        <h3>Payment Confirmation and Receipts</h3>
        <p>
            <b>Payment Confirmation:</b> Upon successful payment, Cab Bijli will provide you with a booking confirmation that 
            includes details of your booking and payment. This confirmation serves as proof of your payment and booking.
            <br>
            <b>Payment Receipts:</b> Users may receive payment receipts or invoices directly from the cab service provider or through the Cab Bijli platform. 
            The issuance of receipts may vary depending on the service provider's policies. For any issues related to payment receipts, please contact our customer support team.
        </p>
    </div>
    <div class="term-main-heading">
        <h3>Payment Disputes</h3>
        <p>
            <b>Dispute Resolution:</b> In the event of a payment dispute or discrepancy, please contact our customer support team at [email protected] or through our customer helpline. 
            We will investigate the issue and work towards resolving it in a fair and timely manner.
            <br>
            <b>Third-Party Payment Providers:</b> If you encounter any issues with third-party payment providers, such as failed transactions or unauthorized charges, please contact the payment provider directly for assistance. 
            Cab Bijli is not responsible for any issues arising from the use of third-party payment services.
        </p>
    </div>
    <p>
        Cab Bijli reserves the right to modify or update this Payment Policy at any time without prior notice. It is your responsibility to review this Payment Policy periodically for any changes.
        <br>
        Last updated: 25-05-23
    </p>
</div>

{{-- Terms & Conditions end --}}

{{-- Extra Div for spacing start--}}

<div class="spacing">
    
</div>

{{-- Extra Div for spacing end--}}


@endsection