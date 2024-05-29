<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketi - Service Details</title>
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
        <section class="banner-inner-area pt-160 pb-80 bg-image">
            <div class="container">
                <div class="banner-inner__content">
                    <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">
                        <a href="index.html">Home</a> / <span>Services Details</span>
                    </h5>
                    <h2 class="text-white wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">Services Details</h2>
                    <p class="para-light-color mt-20 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                        We will help a client's problems to develop the products they have with high quality Change the appearance.
                    </p>
                </div>
            </div>
        </section>
        <!-- Banner area end here -->

        <!-- Service details area start here -->
        <section class="service-details-area pt-120 pb-120">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="service-details__left-item">
                            <div class="item mb-40">
                                <ul>
                                    @foreach($services as $row)
                                        <li>
                                            <img src="{{ asset('frontend/img/service/'.$row->service_icon) }}" alt="service_icon" class="profile-service-image">
                                            <h6>
                                                <a href="{{ route('frontend.service_details', $row->id) }}" class="primary-two-color">{{ $row->service_title }}</a>
                                            </h6>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            
                            <div class="item mb-40">
                                <h3 class="text-capitalize mb-30 text-center">Book The Service You Want Now</h3>
                                <label>Full Name </label>
                                <input type="text" name="name" >
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="service-details__right-item">
                            <h2 class="mb-30 text-capitalize">{{ $service->service_title }}</h2>
                            <div class="product-description mb-20">{!! $service->service_description !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service details area end here -->

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
