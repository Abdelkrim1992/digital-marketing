<!-- Service area start here -->
<section class="service-area pb-140">
  <div class="container">
    <div class="custom-row service__wrp">
      @foreach($service as $row)
      <div class="service__item wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">
        <div class="service__icon mb-25 rounded-circle" style="width: 100px; height: 100px; overflow: hidden;"> <!-- Adjust width and height as needed -->
          <img src="{{asset('frontend/img/service/'.$row->service_icon)}}" alt="service_icon" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <h3>{{$row->service_title}}</h3>
        <p>
          {{$row->short_description}}
        </p>
        <a href="{{route('frontend.service_details',$row->id)}}" class="explore-btn mt-15">
          <span>{{$row->button_text}}</span>
          <i class="fa-regular fa-arrow-right"></i>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</section>
<!-- Service area end here -->
