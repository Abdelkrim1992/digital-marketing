<?php $about= App\Models\Section\About::find(1); ?>
  <!-- About area start here -->
      <section class="about-area pt-140 pb-140">
        <div class="container">
          <div class="row g-4 align-items-center">
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1000ms" >
              <div class="image about__image">
                <img src="{{asset('frontend/images/about/about-image.png')}}" alt="image" />
                <div class="about__shape1">
                  <img src="{{asset('frontend/images/shape/about-shape1.png')}}" alt="shape" />
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="about__right-item">
                <div class="section-header">
                  <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms" >
                    {{$about->title}}
                  </h5>
                  <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms" >
                  <span class="primary-color">   {{$setting->site_name}}</span> {{$about->big_title}} 
                  </h2>
                  <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms"  >{{$about->main_text}}
                  <a href="{{route('about.index')}}"  class="secondary-color fw-700 primary-hover" >{{$about->button_text}}</a>
                  </p>
                </div>
                <div class="about__counter mt-40">
                  <div class="coun-item wow fadeInDown" data-wow-delay="00ms" data-wow-duration="1000ms">
                    <h3><span class="count">12</span>+</h3>
                    <p>Years of experience</p>
                  </div>
                  <div class="coun-item wow fadeInDown" data-wow-delay="100ms" data-wow-duration="1000ms">
                    <h3><span class="count">10</span>K</h3>
                    <p>Completed Projects</p>
                  </div>
                  <div class="coun-item wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1000ms">
                    <h3><span class="count">5</span>K</h3>
                    <p>Trusted Customers</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- About area end here -->