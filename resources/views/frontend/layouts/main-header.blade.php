<!--
			=============================================
				Sidebar Nav
			==============================================
			-->
<div class="offcanvas offcanvas-end sidebar-nav" tabindex="-1" id="offcanvasRight">
  <div class="offcanvas-header">
    <div class="header-logo"><a href="{{ route('home') }}"><img src="{{URL::asset('frontend/assets/frontend/images/logo/YDR1.svg')}}" alt="" width="127"></a></div>
    <button type="button" class="close-btn tran3s" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x-lg"></i></button>
  </div>

  <div class="sidebar-nav-item">
    <ul class="style-none">
      <li class="nav-item">
        <a href="{{ route('home') }}" role="button">Home</a>
      </li>
      <li class="nav-item">
        <a href="{{ route('about') }}" role="button">About Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" href="{{ route('services') }}" role="button">Services</a>
        <ul class="dropdown-menu">
                              <li><a href="{{ url('services-details/' . 'seo') }}" class="dropdown-item"><span>SEO</span></a></li>
                              <li><a href="{{ url('services-details/' . 'google-ads') }}" class="dropdown-item"><span>Google Ads</span></a></li>
                              <li><a href="{{ url('services-details/' . 'social-media-marketing') }}" class="dropdown-item"><span>Social Media Marketing</span></a></li>
                              <li><a href="{{ url('services-details/' . 'graphic-designing') }}" class="dropdown-item"><span>Graphic Designing</span></a></li>
                              <li><a href="{{ url('services-details/' . 'website-development') }}" class="dropdown-item"><span>Website Development</span></a></li>
                            </ul>
      </li>


      <li class="nav-item"><a href="{{ route('blog') }}">Blog</a></li>
      <li class="nav-item"><a href="{{ route('contact') }}">Contact us</a></li>
    </ul>
  </div>

  <div class="address-block">
    <h4 class="title">Our Address</h4>
    <p>Kohinoor, Faisalabad Pakistan</p>
    <p>Urgent issue? call us at <br><a href="tel:+923020123888">+92 302 0123 888</a></p>
  </div>
  <ul class="d-flex social-icon style-none mt-20">
    <li><a href="https://www.facebook.com/yourdigitalresellers?_rdc=1&_rdr"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="https://www.linkedin.com/company/your-digital-resellers"><i class="fab fa-linkedin-in"></i></a></li>
    <li><a href="https://twitter.com/YourResellers"><i class="fab fa-twitter"></i></a></li>
  </ul>
</div> <!-- /.sidebar-nav -->


<!--
=============================================
  Theme Main Menu
==============================================
-->
<header class="theme-main-menu sticky-menu theme-menu-one {{ Route::currentRouteName() == 'about' ? 'about_us' : '' }} {{ Route::currentRouteName() == 'contact' ? 'contact_us' : '' }} {{ Route::currentRouteName() == 'blog' ? 'blog_head' : '' }} {{ Route::currentRouteName() == 'services-details' ? 'blog_head' : '' }} {{ Route::currentRouteName() == 'thankyou' ? 'blog_head' : '' }} {{ Route::currentRouteName() == 'services' ? 'blog_head' : '' }} {{ Route::currentRouteName() == 'terms-conditions' ? 'blog_head' : '' }}">
  <div class="inner-content">
    <div class="d-flex align-items-center justify-content-between">
      <div class="header-logo site-logo">
        @if (in_array(Route::currentRouteName(), ['home', 'portfolio', 'blog_details', 'portfolio.detail']))
          <a href="{{ route('home') }}"><img src="{{URL::asset('frontend/assets/frontend/images/logo/YDR1.svg')}}" alt="" width="127"></a>
        @else
          <a href="{{ route('home') }}"><img src="{{URL::asset('frontend/assets/frontend/images/logo/YDR1-01.png')}}" alt="" width="127"></a>
        @endif
      </div>

      <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="d-block d-lg-none"><div class="logo"><a href="{{ route('home') }}"><img src="{{URL::asset('frontend/assets/frontend/images/logo/YDR1.svg')}}" alt="" width="127"></a></div></li>
            <li class="nav-item dropdown mega-dropdown">
              <a class="nav-link dropdown-toggle" href="{{ route('home') }}" role="button">Home</a>
            </li>

            <li class="nav-item dropdown mega-dropdown">
              <a class="nav-link dropdown-toggle" href="{{ route('about') }}" role="button">About Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{ route('services') }}" role="button">Services</a>
              <ul class="dropdown-menu">
                              <li><a href="{{ url('services-details/' . 'seo') }}" class="dropdown-item"><span>SEO</span></a></li>
                              <li><a href="{{ url('services-details/' . 'google-ads') }}" class="dropdown-item"><span>Google Ads</span></a></li>
                              <li><a href="{{ url('services-details/' . 'social-media-marketing') }}" class="dropdown-item"><span>Social Media Marketing</span></a></li>
                              <li><a href="{{ url('services-details/' . 'graphic-designing') }}" class="dropdown-item"><span>Graphic Designing</span></a></li>
                              <li><a href="{{ url('services-details/' . 'website-development') }}" class="dropdown-item"><span>Website Development</span></a></li>
                            </ul>
            </li>

            <li class="nav-item dropdown mega-dropdown">
              <a class="nav-link dropdown-toggle" href="{{ route('blog') }}" role="button">Blog</a>
            </li>
            <li class="nav-item dropdown mega-dropdown">
              <a class="nav-link dropdown-toggle" href="{{ route('contact') }}" role="button">Contact Us</a>
            </li>

          </ul>
          <div class="mobile-content d-block d-lg-none">
            <form action="#" class="search-form">
              <input type="text" placeholder="Search here..">
              <button><i class="bi bi-search"></i></button>
            </form>

            <div class="address-block">
              <h4 class="title">Our Address</h4>
              <p>Kohinoor, Faisalabad Pakistan</p>
              <p>Urgent issue? call us at <br><a href="tel:+923020123888">+923020123888</a></p>
            </div>
          </div> <!-- /.mobile-content -->
        </div>
      </nav>
      <div class="right-widget d-flex align-items-center">

        <button class="sidebar-nav-button d-none d-lg-block" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fa fa-bars"></i></button>
      </div> <!-- /.right-widget -->
    </div>
  </div> <!-- /.inner-content -->
</header> <!-- /.theme-main-menu -->

