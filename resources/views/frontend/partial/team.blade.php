<?php $team= App\Models\Section\Team::find(1); ?>
      <!-- Team area start here -->
      <section class="team-area pb-140">
        <div class="container">
          <div class="section-header mb-90 text-center">
            <h5
              class="wow fadeInUp"
              data-wow-delay="00ms"
              data-wow-duration="1000ms"
            >
              {{$team->main_title}}
            </h5>
            <h2
              class="wow fadeInUp"
              data-wow-delay="200ms"
              data-wow-duration="1000ms"
            >
              {{$team->big_title}}
            </h2>
            <p
              class="wow fadeInUp"
              data-wow-delay="400ms"
              data-wow-duration="1000ms"
            >
              {{$team->main_text}}
            </p>
          </div>
          <div class="swiper team__slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="team__item">
                  <div class="team__image image">
                    <img src="{{asset('frontend/images/team/team-image1.png')}}" alt="image" />
                    <div class="team-info">
                      <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                      <a href="#0"><i class="fa-brands fa-instagram"></i></a>
                      <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                      <a href="#0"><i class="fa-brands fa-skype"></i></a>
                      <a href="#0"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                  </div>
                  <h5 class="mt-15">
                    <a href="team-details.html" class="primary-hover fw-700"
                      >Kawser Ahmed</a
                    >
                  </h5>
                  <span>Chief Executive Officer</span>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="team__item">
                  <div class="team__image image">
                    <img src="{{asset('frontend/images/team/team-image2.png')}}" alt="image" />
                    <div class="team-info">
                      <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                      <a href="#0"><i class="fa-brands fa-instagram"></i></a>
                      <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                      <a href="#0"><i class="fa-brands fa-skype"></i></a>
                      <a href="#0"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                  </div>
                  <h5 class="mt-15">
                    <a href="team-details.html" class="primary-hover fw-700"
                      >Marcus Haven</a
                    >
                  </h5>
                  <span>Creative Lead</span>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="team__item">
                  <div class="team__image image">
                    <img src="{{asset('frontend/images/team/team-image3.png')}}" alt="image" />
                    <div class="team-info">
                      <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                      <a href="#0"><i class="fa-brands fa-instagram"></i></a>
                      <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                      <a href="#0"><i class="fa-brands fa-skype"></i></a>
                      <a href="#0"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                  </div>
                  <h5 class="mt-15">
                    <a href="team-details.html" class="primary-hover fw-700"
                      >Mises Falguni</a
                    >
                  </h5>
                  <span>Digital Strategist</span>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="team__item">
                  <div class="team__image image">
                    <img src="{{asset('frontend/images/team/team-image4.png')}}" alt="image" />
                    <div class="team-info">
                      <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                      <a href="#0"><i class="fa-brands fa-instagram"></i></a>
                      <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                      <a href="#0"><i class="fa-brands fa-skype"></i></a>
                      <a href="#0"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                  </div>
                  <h5 class="mt-15">
                    <a href="team-details.html" class="primary-hover fw-700"
                      >Olivia Riday</a
                    >
                  </h5>
                  <span>Client Relations Manager</span>
                </div>
              </div>
            </div>
            <div class="swiper__info mt-5">
              <button class="team__arry-prev">
                <i class="fa-regular fa-arrow-left-long"></i>
              </button>
              <div class="dot team__dot"></div>
              <button class="team__arry-next active">
                <i class="fa-regular fa-arrow-right-long"></i>
              </button>
            </div>
          </div>
        </div>
      </section>
      <!-- Team area end here -->