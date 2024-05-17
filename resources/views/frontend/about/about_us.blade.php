<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from marketi-html.vercel.app/marketi-demo/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 May 2024 20:55:19 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketi - Digital Marketing Agency HTML Template</title>
    <!-- Favicon img -->
    <link rel="shortcut icon" href="{{asset('frontend/images/favicon.png')}}" />
    <!-- Bootstarp min css -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}" />
    <!-- Mean menu css -->
    <link rel="stylesheet" href="{{asset('frontend/css/meanmenu.css')}}" />
    <!-- All min css -->
    <link rel="stylesheet" href="{{asset('frontend/css/all.min.css')}}" />
    <!-- Swiper bundle min css -->
    <link rel="stylesheet" href="{{asset('frontend/css/swiper-bundle.min.css')}}" />
    <!-- Magnigic popup css -->
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}" />
    <!-- Animate css -->
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}" />
    <!-- Nice select css -->
    <link rel="stylesheet" href="{{asset('frontend/css/nice-select.css')}}" />
    <!-- Style css -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" />
</head>

<body>
    <!-- Preloader area start -->
    <div id="loading" class="preloader">
        <div class="loading-overlay"></div>
        <div class="custom-loader">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
        </div>
    </div>
    <!-- Preloader area end -->

    @include('frontend.partial.header')

    <main>

        <!-- Banner area start here -->
        <section class="banner-inner-area pt-160 pb-80 bg-image" >
            <div class="container">
                <div class="banner-inner__content">
                    <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms"><a
                            href="index.html">Home</a> / <span>About us</span></h5>
                    <h2 class="text-white wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">About Us</h2>
                    <p class="para-light-color mt-20 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">We
                        will help a client's problems to develop the
                        products they have
                        with
                        high quality Change the
                        appearance.</p>
                </div>
            </div>
        </section>
        <!-- Banner area end here -->

        @include('frontend.partial.about')

        @include('frontend.partial.team')

        @include('frontend.partial.talk')

    </main>

    @include('frontend.partial.footer')

    <!-- Back to top btn area start here -->
    <button class="btn-backToTop">
        <i class="fa-solid fa-chevron-up"></i>
    </button>
    <!-- Back to top btn area end here -->

    <!-- Jquery 3. 7. 1 Min Js -->
    <script src="{{asset('frontend/js/jquery-3.7.1.min.js')}}"></script>
    <!-- Bootstrap min Js -->
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <!-- Mean menu Js -->
    <script src="{{asset('frontend/js/meanmenu.js')}}"></script>
    <!-- Swiper bundle min Js -->
    <script src="{{asset('frontend/js/swiper-bundle.min.js')}}"></script>
    <!-- Counterup min Js -->
    <script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
    <!-- Wow min Js -->
    <script src="{{asset('frontend/js/wow.min.js')}}"></script>
    <!-- Magnific popup min Js -->
    <script src="{{asset('frontend/js/magnific-popup.min.js')}}"></script>
    <!-- Nice select min Js -->
    <script src="{{asset('frontend/js/nice-select.min.js')}}"></script>
    <!-- Parallax Js -->
    <script src="{{asset('frontend/js/parallax.js')}}"></script>
    <!-- Waypoints Js -->
    <script src="{{asset('frontend/js/jquery.waypoints.js')}}"></script>
    <!-- Script Js -->
    <script src="{{asset('frontend/js/script.js')}}"></script>
</body>


<!-- Mirrored from marketi-html.vercel.app/marketi-demo/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 May 2024 20:55:19 GMT -->
</html>