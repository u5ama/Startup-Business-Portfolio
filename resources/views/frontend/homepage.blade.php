@extends('frontend.layouts.master')
@section('content')

  <div class="box-layout">
    <div class="hero-banner-four">
      <div class="hero_slider_two">
        <div class="item">
          <div class="content-wrapper">
            <img src="{{URL::asset('frontend/assets/frontend/images/media/YDR banner.png')}}" alt="" class="hero-img">
            <div class="slider-inner">
              <div class="hero-content">

                <h2 class="hero-heading position-relative">{{$home->slider_title}}</h2>
                <span class="hero-sub-heading position-relative">{!! $home->slider_text !!}</span>
                <a href="{{ route('contact') }}" class="theme-btn-one border0 ripple-btn">Let’s Talk</a>
              </div> <!-- /.hero-content -->
            </div> <!-- /.slider-inner -->
          </div>
        </div>
        <div class="item">
          <div class="content-wrapper">
            <img src="{{URL::asset('frontend/assets/frontend/images/media/Image3.jpg')}}" alt="" class="hero-img">
            <div class="slider-inner">
              <div class="hero-content">

                <h2 class="hero-heading position-relative">Your Digital Resellers:	Amplifying Agency Excellence</h2>
                <p class="hero-sub-heading position-relative">Unmask the Power of White Label Digital Marketing Discover Why Top Agencies Partner With Us!</p>
                <a href="{{ route('contact') }}" class="theme-btn-one border0 ripple-btn">Let’s Talk</a>
              </div> <!-- /.hero-content -->
            </div> <!-- /.slider-inner -->
          </div>
        </div>
        <div class="item">
          <div class="content-wrapper">
            <img src="{{URL::asset('frontend/assets/frontend/images/media/YDR banner.png')}}" alt="" class="hero-img">
            <div class="slider-inner">
              <div class="hero-content">

                <h2 class="hero-heading position-relative">Your Digital Resellers:	Amplifying Agency Excellence</h2>
                <p class="hero-sub-heading position-relative">Unmask the Power of White Label Digital Marketing Discover Why Top Agencies Partner With Us!</p>
                <a href="{{ route('contact') }}" class="theme-btn-one border0 ripple-btn">Let’s Talk</a>
              </div> <!-- /.hero-content -->
            </div> <!-- /.slider-inner -->
          </div>
        </div>
      </div>
    </div> <!-- /.hero-banner-four -->
  </div> <!-- /.box-layout -->




  <!--
  =============================================
    Vcamp Text Block Three
  ==============================================
  -->
  <div class="vcamp-text-block-three dark-bg">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 ms-auto order-md-last" data-aos="fade-left">
          <div class="text-wrapper">
            <h6>{{$home->section_two_title}}</h6>
            <span>{!! $home->section_two_text !!}</span>
          </div>
        </div>
        <div class="col-md-6 text-md-start text-center" data-aos="fade-right">
          <div class="img-container position-relative d-inline-block sm-mt-50">
            <img src="{{URL::asset('frontend/assets/frontend/images/media/Image (2).jpg')}}" alt="">
          </div>
        </div>
      </div>
    </div>

  </div> <!-- /.vcamp-text-block-three -->




  <!--
  =============================================
    Vcamp Feature Section Three
  ==============================================
  -->
  <div class="vcamp-feature-section-three mt-200 lg-mt-120">
    <div class="container">
      <div class="row align-items-center mb-50 md-mb-20">
        <div class="col-lg-7 col-md-6 col-sm-8" data-aos="fade-right">
          <div class="title-style-four">
             <h2 class="title">{{$home->section_two_a_title}}</h2>
            <span class="services-list">{!! $home->section_two_a_text !!}</span>
          </div>
        </div>
      <div class="col-md-4 col-sm-4 me-auto text-sm-end text-start" data-aos="fade-left">
          <a href="{{ route('services') }}" class="theme-btn-five position-relative xs-mt-30">See all Services</a>
     </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6" data-aos="fade-up">
          <div class="card-style-three mt-50">
            <div class="icon d-flex align-items-center justify-content-center"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_24.svg')}}" alt="" class="tran3s"></div>
            <h4 class="title">{{ $home->section_two_box_one_title ?? null }}</h4>
            {!! $home->section_two_box_one_text !!}
          </div> <!-- /.card-style-three -->
        </div>
        <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
          <div class="card-style-three mt-50">
            <div class="icon d-flex align-items-center justify-content-center"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_25.svg')}}" alt="" class="tran3s"></div>
            <h4 class="title">{{ $home->section_two_box_two_title ?? null }}</h4>
            {!! $home->section_two_box_two_text ?? null !!}
          </div> <!-- /.card-style-three -->
        </div>
        <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="200">
          <div class="card-style-three mt-50">
            <div class="icon d-flex align-items-center justify-content-center"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_26.svg')}}" alt="" class="tran3s"></div>
            <h4 class="title">{{ $home->section_two_box_three_title ?? null }}</h4>
            {!! $home->section_two_box_three_text ?? null !!}
          </div> <!-- /.card-style-three -->
        </div>
        <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
          <div class="card-style-three mt-50">
            <div class="icon d-flex align-items-center justify-content-center"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_27.svg')}}" alt="" class="tran3s"></div>
            <h4 class="title">{{ $home->section_two_box_four_title ?? null }}</h4>
            {!! $home->section_two_box_four_text ?? null !!}
          </div> <!-- /.card-style-three -->
        </div>
        <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
          <div class="card-style-three mt-50">
            <div class="icon d-flex align-items-center justify-content-center"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_25.svg')}}" alt="" class="tran3s"></div>
            <h4 class="title">{{ $home->section_two_box_five_title ?? null }}</h4>
            {!! $home->section_two_box_five_text ?? null !!}
          </div> <!-- /.card-style-three -->
        </div>

      </div>
    </div>
  </div> <!-- /.vcamp-feature-section-three -->



  <!--
  =====================================================
    Vcamp Text Block Four
  =====================================================
  -->
  <div class="vcamp-text-block-four mt-200 lg-mt-120">
    <div class="row g-0">
      <div class="col-lg-6 d-flex left-side">
        <div class="content-wrapper w-100 h-100 position-relative">
          <div class="text-wrapper position-relative ms-lg-auto" data-aos="fade-right">
            <h2 class="title">{!! $home->section_three_part_one_title !!}</h2>
            <span>{!! $home->section_three_part_one_text !!}</span>
            <a href="{{ route('services') }}" class="more-button ripple-btn">
              Read More <i class="bi bi-chevron-right"></i></a>
          </div> <!-- /.text-wrapper -->
        </div> <!-- /.content-wrapper -->
      </div> <!-- /.left-side -->
      <div class="col-lg-6 d-flex right-side">
        <div class="content-wrapper w-100 h-100 position-relative">
          <div class="text-wrapper position-relative me-auto" data-aos="fade-left">
            <h2 class="title">{!! $home->section_three_part_two_title !!}</h2>
            <span>{!! $home->section_three_part_two_text !!}</span>
            <a href="{{ route('services') }}" class="more-button ripple-btn">
              Read More <i class="bi bi-chevron-right"></i></a>
          </div> <!-- /.text-wrapper -->
        </div> <!-- /.content-wrapper -->
      </div> <!-- /.right-side -->
    </div>
  </div> <!-- /.vcamp-text-block-four -->



  <!--
  =====================================================
    Case Study Section One
  =====================================================
  -->
  <!--<div class="case-study-one dark-bg">
				<div class="container">
					<div class="row align-items-center justify-content-between">
						<div class="col-xxl-5 col-xl-6 col-lg-5 col-md-7 col-sm-9">
							<div class="title-style-five white-vr text-center text-sm-start">
								<h2 class="title">Let’s check our case study.</h2>
							</div>
						</div>
						<div class="col-md-5 col-sm-3 d-flex justify-content-center justify-content-sm-end">
							<ul class="slider-arrows d-flex style-none xs-mt-30">
								<li class="prev_case1 slick-arrow ripple-btn" style=""><i class="bi bi-arrow-left"></i></li>
								<li class="next_case1 slick-arrow ripple-btn" style=""><i class="bi bi-arrow-right"></i></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="slider-wrapper">
					<div class="case_slider_one">
						<div class="item">
							<div class="case-block-one position-relative">
								<img src="{{URL::asset('frontend/assets/frontend/images/media/img_25.jpg')}}" alt="" class="img-meta w-100">
								<div class="hover-content">
									<div class="icon d-flex align-items-center justify-content-center"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_11.svg')}}" alt=""></div>
									<blockquote>
										“Certainly from my perspective, WordPress has been a great success—with <span>WordPress VIP</span> giving us that enterprise-level of assured quality.”
									</blockquote>
									<a href="{{ route('portfolio_details') }}" class="w-100 d-flex align-items-center justify-content-between">
										<span class="web">www.eventjio.com</span>
										<span class="arrow"><i class="bi bi-chevron-right"></i></span>
									</a>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="case-block-one position-relative">
								<img src="{{URL::asset('frontend/assets/frontend/images/media/img_26.jpg')}}" alt="" class="img-meta w-100">
								<div class="hover-content">
									<div class="icon d-flex align-items-center justify-content-center"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_11.svg')}}" alt=""></div>
									<blockquote>
										“Certainly from my perspective, WordPress has been a great success—with <span>WordPress VIP</span> giving us that enterprise-level of assured quality.”
									</blockquote>
									<a href="{{ route('portfolio_details') }}" class="w-100 d-flex align-items-center justify-content-between">
										<span class="web">www.eventjio.com</span>
										<span class="arrow"><i class="bi bi-chevron-right"></i></span>
									</a>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="case-block-one position-relative">
								<img src="{{URL::asset('frontend/assets/frontend/images/media/img_27.jpg')}}" alt="" class="img-meta w-100">
								<div class="hover-content">
									<div class="icon d-flex align-items-center justify-content-center"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_11.svg')}}" alt=""></div>
									<blockquote>
										“Certainly from my perspective, WordPress has been a great success—with <span>WordPress VIP</span> giving us that enterprise-level of assured quality.”
									</blockquote>
									<a href="{{ route('portfolio_details') }}" class="w-100 d-flex align-items-center justify-content-between">
										<span class="web">www.eventjio.com</span>
										<span class="arrow"><i class="bi bi-chevron-right"></i></span>
									</a>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="case-block-one position-relative">
								<img src="{{URL::asset('frontend/assets/frontend/images/media/img_28.jpg')}}" alt="" class="img-meta w-100">
								<div class="hover-content">
									<div class="icon d-flex align-items-center justify-content-center"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_11.svg')}}" alt=""></div>
									<blockquote>
										“Certainly from my perspective, WordPress has been a great success—with <span>WordPress VIP</span> giving us that enterprise-level of assured quality.”
									</blockquote>
									<a href="{{ route('portfolio_details') }}" class="w-100 d-flex align-items-center justify-content-between">
										<span class="web">www.eventjio.com</span>
										<span class="arrow"><i class="bi bi-chevron-right"></i></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<img src="{{URL::asset('frontend/assets/frontend/images/shape/shape_23.svg')}}" alt="" class="shapes shape-one">
			</div> -->


  <!--
  =====================================================
    Vcamp Text Block Five
  =====================================================
  -->
  <div class="vcamp-text-block-five mt-170 lg-mt-120">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xxl-5 col-lg-6">
          <div class="text-wrapper">
            <div class="title-style-five">
              <div class="upper-title">{{$home->section_four_title}}</div>
              <h2 class="title">{!! $home->section_four_text !!}</h2>
            </div>
            <!--<p class="text-lg">Lorem ipsum dolor sit amet cons qui</p>-->
          </div>
        </div>
        
        <div class="col-xl-5 col-lg-6 ms-auto">
                            <div class="toggle-container">
                            <div class="toggle-title" onclick="toggleDescription(1)">
                              {!! $home->section_four_faq_one_title !!}
                                <i class="fas fa-minus toggle-icon" id="icon1"></i>
                            </div>
                            <div class="toggle-description" id="description1">{!! $home->section_four_faq_one_text !!}</div>
                    
                            <div class="toggle-title" onclick="toggleDescription(2)">
                              {{$home->section_four_faq_two_title}}
                                <i class="fas fa-minus toggle-icon" id="icon2"></i>
                            </div>
                            <div class="toggle-description" id="description2">{!! $home->section_four_faq_two_text !!}</div>
                    
                            <div class="toggle-title" onclick="toggleDescription(3)">
                              {{$home->section_four_faq_three_title}}
                                <i class="fas fa-minus toggle-icon" id="icon3"></i>
                            </div>
                            <div class="toggle-description" id="description3">{!! $home->section_four_faq_three_text !!}</div>
                        </div>
                      </div>
                      
        
      </div>
    </div>
  </div> <!-- /.vcamp-text-block-five -->



  <!--
  =====================================================
    Feedback Section Seven
  =====================================================
  -->
  <div class="feedback-section-seven mt-180 lg-mt-110">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ms-auto">
          <div class="ps-xl-5">
            <div class="title-style-five">
              <div class="upper-title">Testimonials</div>
              <h2 class="title">Hear It From The Best</h2>
            </div>
            @if(count($testimonials)>0)
              @foreach($testimonials as $testimonial)
                <div class="feedback_slider_six mt-80 lg-mt-40">
                  <div class="item">
                    <div class="feedback-wrapper">
                      <div class="icon d-flex align-items-center justify-content-center"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_33.svg')}}" alt=""></div>
                      <blockquote>"{!! $testimonial->message !!}"</blockquote>
                    </div>
                  </div> <!-- /.item -->
                </div>
              @endforeach
            @endif
          </div>
        </div>
      </div>
    </div>

    <div class="counter-section-two" data-aos="fade-right">
      <img src="{{URL::asset('frontend/assets/frontend/images/media/img29.jpg')}}" alt="" class="img-meta w-100">
      <div class="counter-container">
        <div class="row g-0">
          <div class="col-6">
            <div class="counter-block-two text-center">
              <div class="main-count font-recoleta"><span class="counter">3.5</span>k</div>
              <p>Using YDR</p>
            </div> <!-- /.counter-block-two -->
          </div>
          <div class="col-6">
            <div class="counter-block-two text-center bg-color">
              <div class="main-count font-recoleta"><span class="counter">50</span>k+</div>
              <p>Successful Project</p>
            </div> <!-- /.counter-block-two -->
          </div>
        </div>
      </div> <!-- /.counter-container -->
    </div> <!-- /.counter-section-two -->
  </div> <!-- /.feedback-section-seven -->


  <!--
  =====================================================
    Team Section One
  =====================================================
  -->
  <div class="team-section-one mt-200 lg-mt-120">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-md-6 col-sm-8">
          <div class="title-style-five text-center text-sm-start">
            <h2 class="title">Special Offer For Your Agency</h2>
          </div>
        </div>
        <div class="col-md-6 col-sm-3 d-flex justify-content-center justify-content-sm-end">
          <ul class="slider-arrows d-flex style-none xs-mt-30">
            <li class="prev_team1 slick-arrow ripple-btn" style=""><i class="bi bi-arrow-left"></i></li>
            <li class="next_team1 slick-arrow ripple-btn" style=""><i class="bi bi-arrow-right"></i></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="team_slider_one box-layout lg-mt-50">
      <div class="item">
        <div class="team-block-one position-relative">
          <img src="{{URL::asset('frontend/assets/frontend/images/team/Seo_Google_ad_Audit.jpg')}}" alt="" class="team-img w-100">
        </div>
      </div>
      <div class="item">
        <div class="team-block-one position-relative">
          <img src="{{URL::asset('frontend/assets/frontend/images/team/Website_Speed.jpg')}}" alt="" class="team-img w-100">
        </div>
      </div>
      <div class="item">
        <div class="team-block-one position-relative">
          <img src="{{URL::asset('frontend/assets/frontend/images/team/Google_ads_account_audit.jpg')}}" alt="" class="team-img w-100">
        </div>
      </div>
      <div class="item">
        <div class="team-block-one position-relative">
          <img src="{{URL::asset('frontend/assets/frontend/images/team/SEO_Trial.jpg')}}" alt="" class="team-img w-100">
        </div>
      </div>
      <div class="item">
        <div class="team-block-one position-relative">
          <img src="{{URL::asset('frontend/assets/frontend/images/team/Social_Media.jpg')}}" alt="" class="team-img w-100">
        </div>
      </div>
      <div class="item">
        <div class="team-block-one position-relative">
          <img src="{{URL::asset('frontend/assets/frontend/images/team/GMB.jpg')}}" alt="" class="team-img w-100">
        </div>
      </div>
    </div>

  <!--Second Button-->
      <div class="center">
        <button id="popupButton" class="theme-btn-one ripple-btn">Get Offer
        <!-- <img src="http://127.0.0.1:8000/frontend/assets/frontend/images/icon/icon_42.svg" alt=""> -->
          <i class="bi bi-chevron-right"></i>
        </button>
          @if(session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
          @endif
        <div id="popup" class="popup">
            <span class="popup-close" id="closeButton">&times;</span>
          <div class="offer">
            <form action="{{ route('admin-offer-form-save') }}" method="POST">
              @csrf
                <label for="name">Full Name*</label>
                <input type="text" placeholder="Enter Name" id="name" name="name" required>
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror

                <label for="email">Email*</label>
                <input type="email" placeholder=your@email.com id="email" name="email" required>
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror

                <label for="agency_name">Agency Name*</label>
                <input type="text" placeholder="" id="agency_name" name="agency_name" required>
                @error('agency_name')
                <div class="text-danger">{{ $message }}</div>
                @enderror

                <label>Select Service*</label>
                <select class="theme-select-menu" name="service_name" required="required">
              <option value="">Choose an Offer...</option>
              <option value="Digital Marketing">Free website speed Optimization</option>
              <option value="Website Design"> Free Google ads account audit & analysis</option>
              <option value="WordPress">Free one month SEO trial</option>
              <option value="Web Analytics">Free consultation on SEM, SEO & Social media ads</option>
              <option value="Web Programming">Free GMB audit & optimization</option>
              <option value="Infographic Design">Free SEO & Google ads audit</option>
            </select>
                <div class="help-block with-errors">
                  @error('service_name')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <label for="offer">Message*</label>
                <textarea placeholder="Offer" name="offer" required="required" data-error="Please,leave us a message."></textarea>
                @error('offer')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <button type="submit">Submit</button>
            </form>
         </div>
        </div>
    </div>
  <!--
  =====================================================
    Blog Section One
  =====================================================
  -->
 <!-- <div class="blog-section-one mt-180 lg-mt-120">
    <div class="container">
      <div class="row">
        <div class="col-xxl-11 m-auto">
          <div class="row align-items-center">
            <div class="col-xl-5 col-sm-6">
              <div class="title-style-five">
                <div class="upper-title">Latest News</div>
                <h2 class="title">Our Blog</h2>
              </div>
            </div>
            <div class="col-xl-7 col-sm-6 text-sm-end text-start">
              <a href="{{ route('blog') }}" class="theme-btn-three xs-mt-30">Check our all blogs <i class="fas fa-angle-right"></i></a>
            </div>
          </div>
          <div class="mt-100 lg-mt-60">
            <div class="row">
              @if(count($blogs)>0)
                @foreach($blogs as $blog)
                  <div class="col-lg-4 col-md-6 d-flex">
                    <article class="blog-meta-one feature-post">
                      <a href="{{ url('blog_details/' . $blog->id) }}" class="tag">{{$blog->category->category_name}}</a>
                      <a href="{{ url('blog_details/' . $blog->id) }}" class="title">{{$blog->title}}</a>
                      <div class="post-info">Trending - <span class="date">{{ \Carbon\Carbon::parse($blog->created_at)->format('F j, Y') }}</span></div>
                      <div class="post-footer d-flex align-items-center justify-content-between">
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="" class="logo" style="width: 36px">
                        <a href="{{ url('blog_details/' . $blog->id) }}" class="read-more tran3s"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_16.svg')}}" alt=""></a>
                      </div>
                    </article>
                  </div>
                @endforeach
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->


  <!--
  =====================================================
    Vcamp Fancy Banner One
  =====================================================
  -->
  <div class="fancy-banner-one mt-200 lg-mt-120">
    <div class="inner-content position-relative">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="title-style-five white-vr">
              <h2 class="title">{!! $home->section_seven_title !!}</h2>
            </div>
          </div>
          <div class="col-xl-5 col-md-6 ms-auto">
            <span class="sm-pt-20">{!! $home->section_seven_text !!}</span>
            <a href="{{ route('contact') }}" class="theme-btn-one ripple-btn">Contact Us <img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_42.svg')}}" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- /.fancy-banner-one -->




@endsection


