
  <!-- Top header area start here -->
    <div class="header-top d-none d-lg-block">
      <div class="container">
        <div class="header-top-wrp">
          <ul class="info">
            <li>
              <i class="fa-solid fa-paper-plane"></i>
              <a >{{$setting->email}}</a>
            </li>
            <li class="bor-left ms-4 ps-4">
              <i class="fa-solid fa-location-dot"></i>
              <a >{{$setting->address}}</a>
            </li>
          </ul>
          <ul class="link-info">
            <li class="bor-right">
              <a href="{{$setting->facebook}}"><i class="fa-brands fa-facebook-f"></i></a>
            </li>
            <li class="bor-right">
              <a href="{{$setting->instagram}}"><i class="fa-brands fa-instagram"></i></a>
            </li>
            <li class="bor-right">
              <a href="{{$setting->whatsapp}}"><i class="fa-brands fa-whatsapp"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Top header area end here -->

    <!-- Header area start here -->
    <header class="container-fluid bg-white sticky-top">
      <div class="container">
        <div class="header__main">
          <a href="{{url('/')}}" class="logo logo-light" >
            <img src="{{asset('frontend/img/logo/'.$setting->logo)}}" alt="logo" />
          </a>
          <div class="main-menu text-white">
            <nav>
              <ul>
                <li><a href="{{url('/')}}">Home </a></li>
                <li><a href="{{route('frontend.about_us')}}">About Us</a></li>
                <li>
                  <a href="{{route('frontend.services')}}">Services </a>
                  <ul class="sub-menu">
                    @foreach($all_services as $row)
                    <li>
                      <a href="{{route('frontend.service_details',$row->id)}}">{{$row->service_title}}</a>
                    </li>
                    @endforeach
                  </ul>
                </li>
                <li><a href="{{route('frontend.contact_us')}}">Contact Us</a></li>
              </ul>
            </nav>
          </div>
          
          <a href="{{$setting->whatsapp}}" class="btn-menu d-none d-lg-inline-block">Free Consultation<i class="fa-regular fa-circle-arrow-right ml-10"></i></a>
          
          <div class="bars d-block d-lg-none">
            <i id="openButton" class="fa-solid fa-bars"></i>
          </div>
        </div>
      </div>
    </header>
    <!-- Header area end here -->