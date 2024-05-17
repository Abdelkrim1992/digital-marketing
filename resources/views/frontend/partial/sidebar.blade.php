    <!-- Sidebar area start here -->
    <div id="targetElement" class="sidebar-area sidebar__hide">
      <div class="sidebar__overlay"></div>
      <a href="index.html" class="logo mb-40">
        <img src="{{asset('frontend/images/logo/logo-light.svg')}}" alt="logo" />
      </a>
      <div class="mobile-menu overflow-hidden"></div>
      <ul class="info pt-40">
        <li>
          <i class="fa-solid primary-color fa-location-dot"></i>
          <a href="#0">{{$setting->address}}</a>
        </li>
        <li class="py-2">
          <i class="fa-solid primary-color fa-phone-volume"></i>
          <a href="tel:+912659302003">{{$setting->phone}}</a>
        </li>
        <li>
          <i class="fa-solid primary-color fa-paper-plane"></i>
          <a href="#0">{{$setting->email}}</a>
        </li>
      </ul>
      <div class="social-icon mt-20">
        <a href="{{$setting->facebook}}"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="{{$setting->instagram}}"><i class="fa-brands fa-instagram"></i></a>
      </div>
      <button id="closeButton" class="text-white">
        <i class="fa-solid fa-xmark"></i>
      </button>
    </div>
    <!-- Sidebar area end here -->