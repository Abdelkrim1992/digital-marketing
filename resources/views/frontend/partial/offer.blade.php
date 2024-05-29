<!-- Offer area start here -->
<section class="offer-area pt-140 pb-140 primary-bg">
    <div class="container">
        <div class="section-header__wrp mb-60">
            <div class="section-header">
                <h5 class="text-white wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">Our Services</h5>
                <h2 class="text-white wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                    <span class="light-underline">Services</span> we’re offering
                </h2>
            </div>
            <p class="para-light-color wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                Discover a spectrum of cutting-edge digital marketing services
                <br />
                tailored to elevate your online presence, drive engagement.
            </p>
        </div>

        <div class="offer__item">
            <ul>
                @foreach($service as $row)
                <li class="wow fadeInDown" data-wow-delay="00ms" data-wow-duration="1000ms">
                    <a class="offer-title" href="service-details.html">{{$row->service_title}}</a>
                    <i class="fa-light offer-icon fa-arrow-right"></i>
                    <div class="offer__image-wrp">
                        <a class="offer__image image" href="{{route ('frontend.service_details',$row->id)}}" >
                            <img src="{{asset('frontend/img/service/'.$row->service_hover)}}" alt="image" />
                        </a>
                    </div>
                    <p>{{$row->short_description}}</p>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
<!-- Offer area end here -->
