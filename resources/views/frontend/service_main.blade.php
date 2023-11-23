@extends('frontend.layouts.master')
@section('content')

  <!--
			=============================================
				Inside Page Banner
			==============================================
			-->
  <div class="inside-hero-three">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="page-title font-recoleta">Our <span>Services</span>.</h2>
        </div>
        <div class="col-xl-5 col-md-6 ms-auto">
          <p>Our founders Dustin Moskovitz and Justin Rosenstein met while leading Engineering teams at Facebook.</p>
        </div>
      </div>
    </div>
  </div> <!-- /.inside-hero-three -->



  <!--
  =====================================================
    Team Section One
  =====================================================
  -->
  <div class="team-section-one dark-bg">
    <div class="container">
      <div class="controls control-nav-two text-center mb-60 lg-mb-20">
          <button type="button" class="control" data-filter="all">All</button>
        <button type="button" class="control" data-filter=".dev">SEO</button>
        <button type="button" class="control" data-filter=".designer">SMM</button>
        <button type="button" class="control" data-filter=".web">Web Development</button>
        <button type="button" class="control" data-filter=".ppc">PPC</button>
        <button type="button" class="control" data-filter=".ads">Google Ads</button>
      </div>
    </div>

    <div class="box-layout">
      <div class="mixitUp-container">
        <div class="mix designer">
          <div class="team-block-one position-relative">
            <img src="{{URL::asset('frontend/assets/frontend/images/team/img_01.jpg')}}" alt="" class="team-img w-100">
            <div class="overlay-bg d-flex align-items-end">
              <div class="hover-content tran3s">
                <h6 class="name">Rashed Kabir</h6>
                <div class="position">UI Designer</div>
                <ul class="social-icon d-flex style-none">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
              </div>
            </div> <!-- /.overlay-bg -->
          </div> <!-- /.team-block-one -->
        </div> <!-- /.mix -->
        <div class="mix dev designer">
          <div class="team-block-one position-relative">
            <img src="{{URL::asset('frontend/assets/frontend/images/team/img_02.jpg')}}" alt="" class="team-img w-100">
            <div class="overlay-bg d-flex align-items-end">
              <div class="hover-content tran3s">
                <h6 class="name">Jannat Ferdaus</h6>
                <div class="position">Marketing Lead</div>
                <ul class="social-icon d-flex style-none">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
              </div>
            </div> <!-- /.overlay-bg -->
          </div> <!-- /.team-block-one -->
        </div> <!-- /.mix -->
        <div class="mix support">
          <div class="team-block-one position-relative">
            <img src="{{URL::asset('frontend/assets/frontend/images/team/img_03.jpg')}}" alt="" class="team-img w-100">
            <div class="overlay-bg d-flex align-items-end">
              <div class="hover-content tran3s">
                <h6 class="name">Jubayer Hasan</h6>
                <div class="position">Developer</div>
                <ul class="social-icon d-flex style-none">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
              </div>
            </div> <!-- /.overlay-bg -->
          </div> <!-- /.team-block-one -->
        </div> <!-- /.mix -->
        <div class="mix support dev">
          <div class="team-block-one position-relative">
            <img src="{{URL::asset('frontend/assets/frontend/images/team/img_04.jpg')}}" alt="" class="team-img w-100">
            <div class="overlay-bg d-flex align-items-end">
              <div class="hover-content tran3s">
                <h6 class="name">Martin James</h6>
                <div class="position">Core Developer</div>
                <ul class="social-icon d-flex style-none">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
              </div>
            </div> <!-- /.overlay-bg -->
          </div> <!-- /.team-block-one -->
        </div> <!-- /.mix -->
      </div> <!-- /.mixitUp-container -->
    </div>
  </div> <!-- /.team-section-one -->




  <!--
  =====================================================
    Vcamp Fancy Banner Five
  =====================================================
  -->
  <div class="fancy-banner-five reverse-space mb-50">
    <div class="container">
      <div class="row">
        <div class="col-12 m-auto">
          <div class="bg-wrapper">
            <div class="row">
              <div class="col-xxl-7 col-lg-8 col-md-10 m-auto">
                <h2 class="title font-recoleta">Want to be a part of our talented team?</h2>
              </div>
            </div>
            <a href="contactV3.html" class="theme-btn-four ripple-btn">Send your CV</a>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- /.fancy-banner-five -->


@endsection
