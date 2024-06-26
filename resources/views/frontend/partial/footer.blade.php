      <!-- Footer area start here -->
      <footer class="footer-area footer-bg bg-image" "
    >
      <div class="footer__main-wrp">
        <div class="container">
          <div class="footer__wrp pt-140 pb-90">
            <div class="row g-4 justify-content-between">
              <div
                class="col-lg-4 col-sm-6 wow fadeInUp"
                data-wow-delay="00ms"
                data-wow-duration="1000ms"
              >
                <div class="footer__item">
                  <a href="{{url('/')}}" class="logo mb-20">
                    <img src="{{asset('frontend/img/logo/'.$setting->logo)}}" alt="image" />
                  </a>
                  <p>
                    Optimize your success with our digital marketing
                    agency.
                  </p>
                  <div class="social-icon mt-20">
                    <a href="{{$setting->facebook}}"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="{{$setting->instagram}}"><i class="fa-brands fa-instagram"></i></a>
                    <a href="{{$setting->whatsapp}}"><i class="fa-brands fa-whatsapp"></i></a>
                  </div>
                </div>
              </div>
              <div
                class="col-lg-2 col-sm-6 wow fadeInUp"
                data-wow-delay="200ms"
                data-wow-duration="1000ms"
              >
              </div>
              <div
                class="col-lg-2 col-sm-6 wow fadeInUp"
                data-wow-delay="400ms"
                data-wow-duration="1000ms"
              >
                <div class="footer__item">
                  <h4 class="title mb-20 text-white">Company</h4>
                  <ul class="link">
                    <li>
                      <a href="{{route('frontend.services')}}">Services</a>
                    </li>
                    <li>
                      <a href="{{route('frontend.about_us')}}">About Us</a>
                    </li>
                    
                    <li>
                      <a href="{{route('frontend.contact_us')}}">Contact Us</a>
                    </li>

                  </ul>
                </div>
              </div>
              <div
                class="col-lg-3 col-sm-6 wow fadeInUp"
                data-wow-delay="600ms"
                data-wow-duration="1000ms"
              >
                <div class="footer__item">
                  <h4 class="title mb-20 text-white">Join our Newsletter</h4>
                  <div class="newsletter">
                    <input type="email" placeholder="Enter your email" />
                    <button>
                      <i class="fa-regular fa-circle-arrow-right"></i>
                    </button>
                  </div>
                  <p class="mt-4">
                    We will send you weekly updates for your better Product
                    management.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer__copytext">
        <p
          class="wow fadeInDown"
          data-wow-delay="400ms"
          data-wow-duration="1000ms"
        >
          &copy; All Copyright 2024 by
          <a class="primary-hover">{{$setting->site_name}}. Inc.</a>
        </p>
      </div>
    </footer>
    <!-- Footer area end here -->