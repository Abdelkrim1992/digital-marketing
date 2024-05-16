  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

    <a href="index.html" class="logo me-auto"><img src="{{asset('frontend/img/clients/'.$setting->logo)}}" alt="" class="img-fluid"></a>
      <!-- Uncomment below if you prefer to use an image logo -->
     

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{url('/')}}" >Home</a></li>
          <li><a href="{{url('/')}}" >About Us</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="portfolio.html">Projects</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="contact.html">Contact Us</a></li>
          @if (Route::has('login'))
             @auth
                @if(Auth::user()->usertype=='admin')

                  <li><a href="{{ route('admin.dashboard') }}" class="getstarted">My Dashboard</a></li>

                @else(Auth::user()->usertype=='user')
                
                  <li><a href="{{ route('dashboard') }}" class="getstarted">My Dashboard</a></li> 

                @endif
             @else

                <li><a href="{{route('login')}}" class="getstarted">Get Started</a></li>
                
             @endif
          @endif
          
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  