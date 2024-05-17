 <!-- Banner area start here -->
    
    <div class="container-fluid px-0 mb-5">
      @foreach($slider as $key=>$row)
      <section class="banner-area paralax__animation @if($key+1==1) active @endif" data-background="{{asset('frontend/img/slide/'.$row->image)}}">
        <div class="container">
          <div class="banner__content">
            <h1 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">{{$row->heading}}
              
               <span>{{$row->heading}}</span>
            </h1>
            <h5 class="mt-50 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
               {{$row->small_text}}
            </h5>
            <div class="d-flex align-items-center gap-4 mt-40">
              <a href="pricing.html" class="btn-one wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1000ms">Get Services Now<i class="fa-regular fa-circle-arrow-right ml-10"></i></a>
              <a href="about.html" class="explore-btn wow fadeInDown" data-wow-delay="400ms" data-wow-duration="1000ms"><span>Explore More</span>
                <i class="fa-regular fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </section>
      @endforeach 
    </div>
  <!-- Banner area end here -->