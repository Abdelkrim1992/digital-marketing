<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from marketi-html.vercel.app/marketi-demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 May 2024 20:54:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Marketi - Digital Marketing Agency HTML Template</title>

    @include('frontend.scripts.css_scripts')

    <!-- GSAP Core -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.0.0/gsap.min.js"></script> -->
    <!-- MotionPathPlugin -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.0.0/MotionPathPlugin.min.js"></script> -->
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

      @include('frontend.partial.slider')

      @include('frontend.partial.about')

      @include('frontend.partial.services')

      @include('frontend.partial.offer')
      
      @include('frontend.partial.process')

      @include('frontend.partial.team')

      @include('frontend.partial.testimonial')

      @include('frontend.partial.faq')

      @include('frontend.partial.talk')


    </main>

    @include('frontend.partial.footer')

    <!-- Back to top btn area start here -->
    <button class="btn-backToTop">
      <i class="fa-solid fa-chevron-up"></i>
    </button>
    <!-- Back to top btn area end here -->

    @include('frontend.scripts.js_scripts')

  </body>
</html>
