<!-- Team area start here -->
<section class="team-area pb-140">
  <div class="container">
    <div class="section-header mb-90 text-center">
      <h5
        class="wow fadeInUp"
        data-wow-delay="00ms"
        data-wow-duration="1000ms"
      >
        Exceptional Team
      </h5>
      <h2
        class="wow fadeInUp"
        data-wow-delay="200ms"
        data-wow-duration="1000ms"
      >
        Meet with our
        <span>team</span>
      </h2>
      <p
        class="wow fadeInUp"
        data-wow-delay="400ms"
        data-wow-duration="1000ms"
      >
        Discover the driving force behind Marketi. Working collaboratively
        to deliver
        <br />
        innovative digital marketing solutions that elevate your brand.
      </p>
    </div>

    <div class="swiper team__slider">
      <div class="swiper-wrapper">
        @foreach($team as $key=>$row)
        <div class="swiper-slide">
          <div class="team__item @if($key+1==1) active @endif">
            <div class="team__image image">
              <img src="{{asset('frontend/img/team/'.$row->member_image)}}" alt="member_image" />
              <div class="team-info">
                <a href="{{$row->facebook}}"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="{{$row->instagram}}"><i class="fa-brands fa-instagram"></i></a>
              </div>
            </div>
            <h5 class="mt-15">
              <a href="team-details.html" class="primary-hover fw-700">{{$row->member_name}}</a>
            </h5>
            <span>{{$row->member_speciality}}</span>
          </div>
        </div>
        @endforeach
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
