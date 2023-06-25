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
        <h2>Disclaimer</h2>
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
        <h2>Disclaimer</h2>
    </div>
    <br>
    <p>
        Welcome to Cab Bijli, a cab booking website and a unit of M/S TIT-BITS. Please read this disclaimer carefully before using our services or accessing the Website. By using our 
        services or accessing the Website, you agree to the terms and conditions outlined in this disclaimer.
        <ul>
            <li>
                <strong>Information Accuracy:</strong> While we strive to provide accurate and up-to-date information on our Website, we cannot guarantee the completeness, accuracy, reliability, suitability, or availability of the information provided. The information is subject to change without notice, 
                and we do not warrant that the Website will always be available or free from errors.
            </li>
            <li>
                <strong>Third-Party Services:</strong> Cab Bijli may display third-party advertisements, links, or services on the Website. We do not endorse or have control over the content, products, or services offered by these third parties. Any interaction or transaction you undertake with such third parties is solely between you and the third party, 
                and Cab Bijli is not responsible for any issues or damages that may arise from such interactions.
            </li>
            <li>
                <strong>Service Limitations:</strong> Cab Bijli acts as an intermediary platform connecting users to third-party payment 
                providers. We do not own or operate any cab services ourselves. While we strive to facilitate smooth bookings and reliable services, we do not guarantee the quality, safety, or reliability of the payment services provided by third parties. Any issues or disputes related 
                to the cab services should be addressed directly with the respective service provider.
            </li>
            <li>
                <strong>User Responsibility:</strong> Users of Cab Bijli are responsible for providing accurate and up-to-date information during the booking process. Any false or misleading information provided by the user may result in booking cancellations or other consequences. 
                Users should also ensure compliance with local laws and regulations while using the cab services.
            </li>
            <li>
                <strong>Limitation of Liability:</strong> Cab Bijli, its officers, employees, agents, and affiliates shall not be liable for any direct, indirect, incidental, 
                consequential, or exemplary damages arising out of or in connection with the use of the Website, services provided, or reliance on any information displayed on the Website. This includes but is not limited to damages for loss of profits, data, goodwill, or other intangible losses.
            </li>
            <li>
                <strong>Changes to the Disclaimer:</strong> Cab Bijli reserves the right to modify or update this disclaimer at any time without prior notice. 
                It is your responsibility to review this disclaimer periodically for any changes.
            </li>
        </ul>
        By using our services or accessing the Website, you acknowledge that you have read, understood, and agreed to this disclaimer in its entirety. If you do not agree with any part of this disclaimer, please refrain from using our services or accessing the Website.
        <br>
        For any queries or concerns regarding this disclaimer, please contact us at cabbijli@gmail.com
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