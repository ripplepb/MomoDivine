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
        <h2>Book a Ride</h2>
    </div><!-- /.container -->
</section><!-- /.inner-banner -->

{{-- Breadcrump end --}}

{{-- Booking start --}}

{{-- Booking start --}}

<section class="book-ride-one">
    <img src="{{asset('web/assets/images/background/booking-bg-1-1.png')}}" class="footer-bg" alt="Awesome Image" />
    <div class="container">
        <div class="row">
            
            <div class="col-lg-12">
                <div class="content-block">
                    <div class="block-title mb-0">
                        <h2 class="light text-center">Airport Transfer</h2>
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
                                <input type="text" value="LGBI Airport Guwahati" readonly>
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
                                <label >Dropoff Date:</label>
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
                                <input type="text" id="picktime3" name="time">
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
                            <p style="color: #b0d734;">Note: Time should be 3 hours past current time</p>
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

               <div class="col-lg-12">
                {{-- <h4>Destination to Airport</h4> --}}
                <form action="{{route('users.web.booking')}}" method="post" class="booking-form-one" id="myForm">
                    @csrf
                    <input type="hidden" value="2" name="ride_type">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="input-holder">
                            <label>From:</label>
                            <input type="text" name="pickup" placeholder="Pickup Location" id="pickup" onkeyup="fetchData()">
                            <i class="fa fa-spinner fa-spin" id="loader_id" style="display: none;"></i>  
                            <div id="mob-search_box" class="suggestion-item-box mob" >
                                <div id="mob-search_res" class="" style="    padding: 10px 0px;">
                                  
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="input-holder">
                            <label>Tso:</label>
                            <input type="text" name="airport" value="LGBI Airport Guwahati" readonly>
                        </div>
                    </div>
                    
                    <div class="col-lg-3">
                        <div class="input-holder">
                            <label>Pickup Date:</label>
                            <input type="date" name="date" id="pickdate">
                            @error('date')
                            <span style="color:red" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        </div>
                    </div>
                    {{-- Drop Time start --}}

                    
                    <div class="col-lg-2 droptime3" style="display: none;">
                        <div class="input-holder">
                            <label for="picktime">Time : </label>
                            <input type="text"  id="picktime4" name="time" readonly>
                            {{-- <input type="time" name="time" id="droptime" class="droptime"> --}}
                            @error('time')
                            <span style="color:red" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{-- <i class="conexi-icon-clock" id="clock-icon"></i> --}}
                        </div>
                    </div>
                    <div class="col-lg-2 droptimetommorow" style="display: none;">
                        <div class="input-holder">
                            <label for="picktime">Time: </label>
                            {{-- <input type="text" id="picktime2" name="time" readonly> --}}
                            <input type="time" name="time" id="droptime" class="droptime">
                            @error('time')
                            <span style="color:red" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{-- <i class="conexi-icon-clock" id="clock-icon"></i> --}}
                        </div>
                    </div>
                   
                    {{-- <script>
                    const [date, time] = formatDate(new Date()).split(' ');

                    // ✅ Set time input value
                    const timeInput = document.getElementByClassName('droptime');
                    // timeInput=timeInput*60*60*1000;
                    timeInput.value = time;



                    // 👇️👇️👇️ Format Date as yyyy-mm-dd hh:mm:ss
                    // 👇️ (Helper functions)
                    function padTo2Digits(num) {
                    return num.toString().padStart(2, '0');
                    }

                    function formatDate(date) {
                    return (
                        [
                        date.getFullYear(),
                        padTo2Digits(date.getMonth() + 1),
                        padTo2Digits(date.getDate()),
                        ].join('-') +
                        ' ' +
                        [
                        padTo2Digits(date.getHours()+3),
                        padTo2Digits(date.getMinutes()),
                        // padTo2Digits(date.getSeconds()),  // 👈️ can also add seconds
                        ].join(':')
                    );
                    }



                    
                    </script> --}}
                    {{-- Drop Time End --}}

                    <div class="col-lg-2">
                        <label for="picktime" style="font-weight: 700;
                        margin-left: 20px;">Price: in &#8377;</label>
                        <div class="input-holder" id="price_pickup" style="display: none;">
                            <div class="price-text"><input type="text" name="price" id="pickupprice" readonly></div>
                            {{-- <label for="picktime">Price:</label> --}}
                        </div>
                        </div>

                    <div class="col-lg-12">
                        <p style="color: #b0d734;">Note: Time should be 3 hours past current time</p>
                    </div>

                    {{-- Submit button start --}}

                    <div class="col-lg-5"></div>

                    <div class="col-lg-2">
                        <div class="input-holder">
                            <button type="submit" class="book" id="booknow">Book Now</button>
                        </div>
                    </div>

                    <div class="col-lg-5"></div>

                    {{-- Submit button end --}}
                </div>
                </form>   
           </div>
            </div>
        </div>
    </div>
</section>


{{-- Booking end --}}

{{-- Hourly Booking Start --}}

<section class="book-ride-one" id="hourly-booking">
    <img src="images/background/booking-bg-1-1.png" class="footer-bg" alt="Awesome Image" />
    <div class="container">
        <h2 id="hourly-booking-text">Hourly Booking<span> (including 10km per hour)</h2>
            @if (Session::has('error_time'))
                            <div class="alert alert-danger">{{ Session::get('error_time') }}</div>
                        @endif
        <div class="row">
                {{-- <div class="content-block">
                    <div class="block-title">
                        <h2 id="hourly-booking-text">Hourly Booking</h2>
                    </div>
                </div> --}}
            <div class="col-lg-12">
                <form action="{{route('users.web.taxi.booking')}}" class="booking-form-one" method="post">
                    @csrf
                    <div class="row">

                        <div class="col-lg-2">
                            <div class="input-holder">
                                <label>Hours:</label>
                                <select class="selectpicker" id="hourselct" name="hour_id">
                                    <option selected disabled>Select Hour</option>
                                    @foreach ($hours as $item)
                                    <option value="{{$item->id}}">{{$item->hour}}</option>
                                    @endforeach
                                </select>
                                @error('hour_id')
                            <span style="color:red" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                                <i class="conexi-icon-clock" id="clock-icon"></i>
                            </div><!-- /.input-holder -->
                        </div>

                        <div class="col-lg-3">
                            <div class="input-holder">
                                <label>Pickup Location:</label>
                                <input type="text" name="location" placeholder="From">
                                @error('location')
                            <span style="color:red" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="input-holder">
                                <label>Date:</label>
                                <input type="date" name="date" id="hourdate">
                                @error('date')
                            <span style="color:red" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                            </div>
                        </div>

                        <div class="col-lg-2 hourtime4" style="display: none;">
                            <div class="input-holder">
                                <label>Time:</label>
                                <input type="text" id="hourtime3" name="time">
                            </div>
                        </div>

                        <div class="col-lg-2 hourtimetommorow" style="display: none;">
                            <div class="input-holder">
                                <label for="picktime">Time: </label>
                                {{-- <input type="text" id="picktime2" name="time" readonly> --}}
                                <input type="time" name="time" id="droptime" class="droptime">
                            {{-- <i class="conexi-icon-clock" id="clock-icon"></i> --}}
                            </div>
                        </div>


                        <div class="col-lg-2">
                            <label style="font-weight: 700; margin-left: 20px;">Price: in&#8377;</label>
                            <div class="input-holder" id="hour_price" style="display: none;">
                                <div class="price-text">
                                    <input type="text" name="price" id="hourprice" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <p style="color: black;">Note: Time should be 2 hours past current time</p>
                        </div>

                        {{-- Booking Button start --}}

                        <div class="col-lg-5"></div>

                        <div class="col-lg-2 mt-2">
                            <div class="input-holder">
                                <button type="submit">Book Now</button>
                            </div>
                        </div>

                        <div class="col-lg-5"></div>

                        {{-- Booking Button end --}}
                    </div><!-- /.row -->
                </form><!-- /.booking-form-one -->
            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
    </div>
    <!-- /.container -->
</section><!-- /.book-ride-one -->

{{-- Hourly Booking End --}}


@endsection
@section('script')
    <script>
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
    </script>
@endsection