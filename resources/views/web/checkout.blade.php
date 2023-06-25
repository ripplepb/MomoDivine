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
        <h2>Checkout</h2>
    </div><!-- /.container -->
</section><!-- /.inner-banner -->

{{-- Breadcrump end --}}

{{-- Extra Div for spacing start--}}

<div class="spacing">
    
</div>

{{-- Extra Div for spacing end--}}

{{-- Chekout start --}}

<section class="checkout">
    <div class="container container-style">
        <div class="row">
            <div class="col-lg-8 all-column">
                @if ($book_type == 1)
                    @if ($ride_type == 1)
                        <div class="col-lg-12">
                            <div class="fields">
                                <div class="dropoff">
                                    <h3>Dropoff Fields</h3>
                                    <div class="dropoff-fields">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <b>From: </b>
                                                <br>
                                                LGBI Airport Guwahati
                                            </div>
                                            <div class="col-lg-4">
                                                <b>To: </b>
                                                <br>
                                                {{$proceed->location}}
                                            </div>
                                            <div class="col-lg-4">
                                                <b>Dropoff Date: </b>
                                                <br>
                                                {{date('d F Y', strtotime($proceed->date))}}
                                            </div>
                                            <div class="col-lg-4">
                                                <b>Time: </b>
                                                <br>
                                                {{date('g:i a', strtotime($proceed->time))}}
                                            </div>
                                            <div class="col-lg-4">
                                                <b>Price: </b>
                                                <br>
                                                &#8377; {{$proceed->total_price}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    @else
                        <div class="col-lg-12">
                            <div class="fields">
                                <div class="dropoff">
                                    <h3>Pickup Fields</h3>
                                    <div class="dropoff-fields">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <b>From: </b>
                                                <br>
                                                {{$proceed->location}}
                                            </div>
                                            <div class="col-lg-4">
                                                <b>To: </b>
                                                <br>
                                                LGBI Airport Guwahati
                                            </div>
                                            <div class="col-lg-4">
                                                <b>Pickup Date: </b>
                                                <br>
                                                {{date('d F Y', strtotime($proceed->date))}}
                                            </div>
                                            <div class="col-lg-4">
                                                <b>Time: </b>
                                                <br>
                                                {{date('g:i a', strtotime($proceed->time))}}
                                            </div>
                                            <div class="col-lg-4">
                                                <b>Price: </b>
                                                <br>
                                                &#8377; {{$proceed->total_price}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @else
                    <div class="col-lg-12">
                        <div class="fields">
                            <div class="dropoff">
                                <h3>Hourly Booking Fields</h3>
                                <div class="dropoff-fields">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <b>Hours: </b>
                                            <br>
                                            {{$proceed->hour->hour}}
                                        </div>
                                        <div class="col-lg-4">
                                            <b>Pickup Location: </b>
                                            <br>
                                            {{$proceed->location}}
                                        </div>
                                        <div class="col-lg-4">
                                            <b>Pickup Date: </b>
                                            <br>
                                            {{date('d F Y', strtotime($proceed->date))}}
                                        </div>
                                        <div class="col-lg-4">
                                            <b>Time: </b>
                                            <br>
                                            {{date('g:i a', strtotime($proceed->time))}}
                                        </div>
                                        <div class="col-lg-4">
                                            <b>Price: </b>
                                            <br>
                                            &#8377; {{$proceed->hour->price}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-lg-4">
                 <div class="total">
                    <h3>Cart Total</h3>
                    <div class="total-fields">
                        <div class="col-lg-12">
                            <form action="{{route('users.pay_amount')}}" method="post">
                                @csrf
                                <input type="hidden" value="{{$proceed->id}}" name="book_id">
                                <input type="hidden" name="book_type" value="{{$book_type}}">
                                <input type="hidden" name="ride_type" value="{{$ride_type}}">
                                <div class="row">
                                    <div class="col-lg-12">
                                        @if ($book_type == 1)
                                            <p>Total Price: &#8377; {{$proceed->total_price}}</p>  
                                        @else
                                            <p>Total Price: &#8377; {{$proceed->hour->price}}</p>
                                        @endif
                                    </div>

                                    <div class="col-lg-6">
                                        <input type="radio" class="price" name="price" value="{{$min->min_price}}">
                                        <label for="minprice">Minimum Price</label>
                                    </div>

                                    <div class="col-lg-6">
                                        @if ($book_type == 1)
                                            <input type="radio" class="price" name="price" value="{{$proceed->total_price}}">  
                                        @else
                                            <input type="radio" class="price" name="price" value="{{$proceed->hour->price}}">
                                        @endif
                                        
                                        <label for="fullprice">Full Price</label>
                                    </div>

                                    <div class="col-lg-12">
                                        <b>Payable Price: </b>
                                        <div id="pay_price"></div>
                                    </div>

                                    <div class="col-lg-12 button-column">
                                        <button class="btn btn-primary" type="submit">Pay</button>
                                    </div>
                                </div>
                            </form>
                            {{-- <div class="row">
                                <form action="">

                                <div class="col-lg-12">
                                    <input type="checkbox" value="Minimum price" id="minprice">
                                    <label for="minprice">Minimum Price</label>
                                </div>

                                <div class="col-lg-12">
                                    <input type="checkbox" value="Full price" id="fullprice">
                                    <label for="fullprice">Full Price</label>
                                </div>

                                <div class="col-lg-6">
                                    <button type="submit" value="Submit">Pay</button>
                                </div>

                            </div> --}}

                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</section>

{{-- Chekout end --}}

{{-- Extra Div for spacing start--}}

<div class="spacing">
    
</div>

{{-- Extra Div for spacing end--}}

@endsection

@section('script')
    <script>
        $(document).ready(function name() {
            $('input[name="price"]').on('change', function() {
                var payable = $(this).val();
                $('#pay_price').html('<p>&#8377;'+payable+'</p>');
            });
        });
    </script>
@endsection