<footer class="site-footer">
            <img src="" class="footer-bg" alt="Awesome Image" />
            <div class="upper-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="footer-widget about-widget">
                                <div class="widget-title">
                                    <h3>About</h3>
                                </div><!-- /.widget-title -->
                                <p>Momo Divine is a premier momo booking company that offers reliable, safe, and affordable momo services to its customers. With a fleet of well-maintained and hygenic momos, Momo Divine provides top-notch services to momo lovers looking for hassle-free meal. </p>
                                <div class="social-block">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                    <!-- <a href="#"><i class="fa fa-google-plus"></i></a> -->
                                </div><!-- /.social-block -->
                            </div><!-- /.footer-widget about-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-lg-2">
                            <div class="footer-widget">
                                <div class="widget-title">
                                    <h3>Links</h3>
                                </div><!-- /.widget-title -->
                                <ul class="link-lists">
                                    <li><a href="{{route('web.index')}}">Home</a></li>
                                    <li><a href="{{route('web.about')}}">About</a></li>
                                    <li><a href="#">Book a Treat</a></li>
                                    <li><a href="{{route('web.contact')}}">Contact</a></li>
                                </ul>
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-2 -->
                        <div class="col-lg-4">
                            <div class="footer-widget">
                                <div class="widget-title">
                                    <h3>Contact</h3>
                                </div><!-- /.widget-title -->
                                <p>Noonmati, Guwahati-781008</p>
                                <ul class="contact-infos">
                                    <a href="mailto:cabbijli@gmail.com"><li><i class="fa fa-envelope"></i>ripplepb2018@gmail.com</li></a>
                                    <a href="tel:+91 9864842196"><li><i class="fa fa-phone-square"></i>9864842196</li></a>
                                    <div>
                                        {{-- <p><img src="{{asset('web/assets/images/custom/icons/visa.jpg')}}" alt=""></p>
                                        <p><img src="{{asset('web/assets/images/custom/icons/rupay.jpg')}}" alt=""></p>
                                        <p><img src="{{asset('web/assets/images/custom/icons/mastercard.jpg')}}" alt=""></p> --}}
                                        {{-- <p><i class="fa fa-cc-visa fa-lg" aria-hidden="true"></i></p> --}}
                                    </div>
                                </ul><!-- /.contact-infos -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <!-- <div class="col-lg-4">
                            <div class="footer-widget">
                                <div class="widget-title">
                                    <h3>Newsletter</h3>
                                </div>
                                <p>Sign up now for our mailing list to get all latest news <br> and updates from conexi company.</p>
                                <form action="#" class="subscribe-form">
                                    <input type="text" name="email" placeholder="Enter your email">
                                    <button type="submit">Go</button>
                                </form>
                            </div>
                        </div> -->
                        <!-- /.col-lg-4 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.upper-footer -->
            <div class="bottom-footer">
                <div class="container">
                    <div class="inner-container" id="inner-container">
                        <div class="left-block">
                            <p>
                            <script>document.write(new Date().getFullYear());</script>
                            All Rights Reserved &copy; Momo Divine | Developed by
                            <a href="#" target="_blank" style="color:#ff872c">RJ</a>
                            </p>
                        </div>

                        <div class="right">
                            <div>
                                <a href="{{route('web.terms')}}">Terms</a>
                            </div>
                            <div>
                                <a href="{{route('web.disclaimer')}}">Disclaimer</a>
                            </div>
                            <div>
                                <a href="{{route('web.privacy')}}">Privacy Policy</a>
                            </div>
                            <div>
                                <a href="{{route('web.returnpolicy')}}">Return & Refund Policy</a>
                            </div>
                            <div>
                                <a href="{{route('web.paymentpolicy')}}">Payment Policy</a>
                            </div>
                        </div>
                        <!-- /.left-block -->
                        <!-- <div class="right-block">
                            <ul class="link-lists">
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div> -->
                        <!-- /.right-block -->
                    </div><!-- /.inner-container -->
                </div><!-- /.container -->
            </div><!-- /.bottom-footer -->
        </footer><!-- /.site-footer -->
    </div><!-- /.page-wrapper -->
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    
    {{-- Javascript Time validation start --}}

    <script>
   
    pickdate.min = new Date().toISOString().split("T")[0];

    dropdate.min = new Date().toISOString().split("T")[0];
    hourdate.min = new Date().toISOString().split("T")[0];

   </script>

   {{-- Javascript Time validation end --}}

   {{-- Juery Time start --}}

   

   {{-- Jquery Time End --}}
    <!-- /.scroll-to-top -->
    <script src="{{asset('web/assets/js/jquery.js')}}"></script>
    <script src="{{asset('web/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('web/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('web/assets/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('web/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('web/assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('web/assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('web/assets/js/jquery.bxslider.min.js')}}"></script>
    <script src="{{asset('web/assets/js/theme.js')}}"></script>
    {{-- Jquery CDN start --}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    {{-- Jquery CDN end --}}

    {{-- Jquery Datepicker start--}}

    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

    {{-- Jquery Datepicker end--}}

    {{-- Moment Js start--}}

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" integrity="sha512-CryKbMe7sjSCDPl18jtJI5DR5jtkUWxPXWaLCst6QjH8wxDexfRJic2WRmRXmstr2Y8SxDDWuBO6CQC6IE4KTA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

    {{-- Moment Js end --}}
    {{-- Javascript start --}}
    {{-- <script>
        const [date, time] = formatDate(new Date()).split(' ');


        // ✅ Set time input value
        const timeInput = document.querySelector('#picktime');
        // timeInput=timeInput*60*60*1000;
        timeInput.value = time;

        // Time Value 2
        const timeInput2= document.querySelector('#droptime');
        timeInput2.value=time;



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
    {{-- Javascript end --}}

    {{-- Hourly Time start --}}

    {{-- <script>
        const [date1, time1] = formatDate1(new Date()).split(' ');



        // Time Value 2
        const timeInput3= document.querySelector('#hourlytime');
        timeInput3.value=time1;



        // 👇️👇️👇️ Format Date as yyyy-mm-dd hh:mm:ss
        // 👇️ (Helper functions)
        function padTo2Digits1(num) {
        return num.toString().padStart(2, '0');
        }

        function formatDate1(date1) {
        return (
            [
            date1.getFullYear(),
            padTo2Digits1(date1.getMonth() + 1),
            padTo2Digits1(date1.getDate()),
            ].join('-') +
            ' ' +
            [
            padTo2Digits1(date1.getHours()+2),
            padTo2Digits1(date1.getMinutes()),
            // padTo2Digits(date.getSeconds()),  // 👈️ can also add seconds
            ].join(':')
        );
        }
    </script> --}}

    {{-- Hourly Time end --}}

    {{-- Min Time Validation start --}}

    {{-- <script>
        var x = document.getElementById("picktime").min;
        console.log(x);
        x=new Date().toLocaleTimeString(); 
       
    </script> --}}


    <script>

        // Current Date

        const date = new Date();

        let day = (date.getDate()).toString().padStart(2,"0");
        let month = (date.getMonth()+1).toString().padStart(2,"0");
        let year = date.getFullYear();

        // This arrangement can be altered based on how we want the date's format to appear.
        let currentDate = `${year}-${month}-${day}`;
        console.log(currentDate); // "17-6-2022"

        // var x=new Date().toLocaleTimeString();
        // console.log(x);
        var today2 = new Date();
        today2.setHours(today2.getHours() + 2);
        // console.log(today2);

        var today = new Date();
        today.setHours(today.getHours() + 3);
        // console.log(today);
        $('#pickdate').on('change', function() {
            var selectedDate = $('#pickdate').val();
            console.log(selectedDate);
            if(currentDate == selectedDate)
            {
                console.log("hoise");
                $('.droptime3').show();
                $('.droptimetommorow').hide();
            } else {
                console.log("naihua");
                $('.droptime3').hide();
                $('.droptimetommorow').show();
            }
        });

        $('#dropdate').on('change', function() {
            var selectedDate = $('#dropdate').val();
            console.log(selectedDate);
            if(currentDate == selectedDate)
            {
                console.log("hoise");
                $('.picktime3').show();
                $('.picktimetommorow').hide();
            } else {
                console.log("naihua");
                $('.picktime3').hide();
                $('.picktimetommorow').show();
            }
        });

        $('#hourdate').on('change', function() {
            var selectedDate = $('#hourdate').val();
            console.log(selectedDate);
            if(currentDate == selectedDate)
            {
                console.log("hoise");
                $('.hourtime4').show();
                $('.hourtimetommorow').hide();
            } else {
                console.log("naihua");
                $('.hourtime4').hide();
                $('.hourtimetommorow').show();
            }
        });
    

        var maxtime = new Date();
        maxtime.setHours(maxtime.getHours() + 12);
    </script>

    <script>
        $('#picktime2').timepicker({
        timeFormat: 'h:mm p',
        interval: 01,
        minTime: today,
        maxTime: "23:59",
        defaultTime: today,
        startTime: today,
        dynamic: false,
        dropdown: true,
        scrollbar: true,
        });
        
        $('#picktime3').timepicker({
        timeFormat: 'h:mm p',
        interval: 01,
        minTime: today,
        maxTime: "23:59",
        defaultTime: today,
        startTime: today,
        dynamic: false,
        dropdown: true,
        scrollbar: true
        });

        $('#picktime4').timepicker({
        timeFormat: 'h:mm p',
        interval: 01,
        minTime: today,
        maxTime: "23:59",
        defaultTime: today,
        startTime: today,
        dynamic: false,
        dropdown: true,
        scrollbar: true
        });

        $('#droptime2').timepicker({
        timeFormat: 'h:mm p',
        interval: 01,
        minTime: today,
        maxTime: "23:59",
        defaultTime: today,
        startTime: today,
        dynamic: false,
        dropdown: true,
        scrollbar: true
        });

        $('#droptime3').timepicker({
        timeFormat: 'h:mm p',
        interval: 01,
        minTime: today,
        maxTime: "23:59",
        defaultTime: today,
        startTime: today,
        dynamic: false,
        dropdown: true,
        scrollbar: true
        });

        $('#hourtime2').timepicker({
        timeFormat: 'h:mm p',
        interval: 01,
        minTime: today2,
        maxTime: "23:59",
        defaultTime: today2,
        startTime: today2,
        dynamic: false,
        dropdown: true,
        scrollbar: true
        });

        $('#hourtime3').timepicker({
        timeFormat: 'h:mm p',
        interval: 01,
        minTime: today2,
        maxTime: "23:59",
        defaultTime: today2,
        startTime: today2,
        dynamic: false,
        dropdown: true,
        scrollbar: true
        });
   </script>
    {{-- Min Time Validation end --}}

    {{-- Register button start--}}

    {{-- <script>
        
    </script> --}}
    {{-- Register button end--}}

</body>


<!-- Mirrored from ashik.templatepath.net/conexi-preview-files/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 May 2023 08:03:03 GMT -->
</html>