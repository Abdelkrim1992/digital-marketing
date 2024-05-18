<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from marketi-html.vercel.app/marketi-demo/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 May 2024 20:55:32 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketi - Digital Marketing Agency HTML Template</title>
    
    @include('frontend.scripts.css_scripts')

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

    @include('frontend.partial.sidebar')

    <main>

        <!-- Banner area start here -->
        <section class="banner-inner-area pt-160 pb-80 bg-image" >
            <div class="container">
                <div class="banner-inner__content">
                    <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms"><a
                            href="index.html">Home</a> /
                        <span>Contact</span>
                    </h5>
                    <h2 class="text-white wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">Contact</h2>
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

        @include('frontend.partial.contact')

        @include('frontend.partial.contact_form')

        <!-- started area start here -->
        <section class="started-area">
            <div class="container">
                <div class="started__item bg-image" data-background="assets/images/bg/started-bg.png">
                    <div class="section-header-two text-center mb-40">
                        <h2 class="text-white wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">Unlock Your
                            Digital Potential with <br> Marketi's SEO Solutions!</h2>
                        <p class="para-light-color wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                            Elevate your online presence with Marketi's trusted SEO
                            solutions.
                        </p>
                    </div>
                    <div class="btn__group text-center wow fadeInDown" data-wow-delay="200ms"
                        data-wow-duration="1000ms">
                        <a href="pricing.html" class="btn-two">Get Started<i
                                class="fa-regular fa-arrow-right ml-10"></i></a>
                        <a href="about.html" class="btn-three ms-4">Learn More<i
                                class="fa-regular fa-arrow-right ml-10"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- started area end here -->
    </main>

    @include('frontend.partial.footer')

    <!-- Back to top btn area start here -->
    <button class="btn-backToTop">
        <i class="fa-solid fa-chevron-up"></i>
    </button>
    <!-- Back to top btn area end here -->

    @include('frontend.scripts.js_scripts')


</body>


<!-- Mirrored from marketi-html.vercel.app/marketi-demo/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 May 2024 20:55:32 GMT -->
</html>