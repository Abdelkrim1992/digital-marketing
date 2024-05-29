<!-- Testimonial area start here -->
<section class="testimonial-area mb-5">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-6">
        <div class="testimonial__left-item">
          <div class="section-header">
            <h5
              class="wow fadeInUp"
              data-wow-delay="00ms"
              data-wow-duration="1000ms"
            >
              Clients Testimonial
            </h5>
            <h2
              class="wow fadeInUp"
              data-wow-delay="200ms"
              data-wow-duration="1000ms"
            >
              Client’s <span>speeches</span> <br />
              about Marketi
            </h2>
            <p
              class="wow fadeInUp"
              data-wow-delay="400ms"
              data-wow-duration="1000ms"
            >
              Our clients share their experiences with Marketi, expressing
              how our digital marketing expertise has not only met but
              exceeded their expectations, fostering success and growth
              for their businesses.
            </p>
          </div>
          <a
            href="pricing.html"
            class="btn-one mt-30 wow fadeInUp"
            data-wow-delay="600ms"
            data-wow-duration="1000ms"
          >Try it Now<i
              class="fa-regular fa-circle-arrow-right ml-10"
            ></i
          ></a>
        </div>
      </div>
      <div class="col-lg-6 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
        <div class="swiper testimonial__slider">
          <div class="swiper-wrapper">
            @foreach($testimonial as $row)  
              <div class="swiper-slide">
                <div class="testimonial__right-item">
                  <p>
                    "{{$row->main_text}}"
                  </p>
                  <div class="testimonial-info">
                    <div class="d-flex align-items-center gap-4">
                      <img
                        src="{{asset('frontend/img/testimonial/'.$row->client_image)}}"
                        alt="client_image" class="profile-image" />
                      <div class="testimonial-admin">
                        <h4>{{$row->client_name}}</h4>
                        <span>{{$row->client_service}}</span>
                      </div>
                    </div>
                    <div class="star d-flex gap-2">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach  
          </div>
        </div>
        <div class="swiper__info mt-4">
          <button class="testimonial__arry-prev">
            <i class="fa-regular fa-arrow-left-long"></i>
          </button>
          <div class="dot testimonial__dot"></div>
          <button class="testimonial__arry-next active">
            <i class="fa-regular fa-arrow-right-long"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Testimonial area end here -->
