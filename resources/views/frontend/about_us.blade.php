@extends('frontend.layouts.master')
@section('content')

<!--
			=============================================
				Inside Page Banner
			==============================================
			-->
			<div class="inside-hero-two custom-bnr" style="background-image:url(frontend/assets/frontend/images/media/About_Us.jpg);">
				<div class="container">
					<h2 class="page-title">{{ $about->section_one_title }}</h2>
					{!! $about->section_one_text !!}
				</div>

			</div> <!-- /.inside-hero-two -->



			<!--
			=====================================================
				Vcamp Text Block Five
			=====================================================
			-->
			<div class="vcamp-text-block-five mt-170 lg-mt-120">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-xxl-6 col-xl-7 col-lg-5">
							<div class="text-wrapper">
								<div class="title-style-five">
									<div class="upper-title">About us</div>
									<h2 class="title">{{ $about->section_two_title }}</h2>
									{!! $about->section_two_text !!}
								</div>
							</div>
						</div>
						<!--<div class="col-xl-5 col-lg-6 ms-auto">
							<div class="accordion accordion-style-one md-mt-40" id="accordionOne">
								<div class="accordion-item">
								    <div class="accordion-header" id="headingOne">
								      	<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								        	{{ $about->section_two_faq_one_title }}
								      	</button>
								    </div>
								    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionOne">
								    	<div class="accordion-body">
								        	{!! $about->section_two_faq_one_text !!}
								    	</div>
								    </div>
							  	</div>
							  	<div class="accordion-item">
								    <div class="accordion-header" id="headingTwo">
								      	<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          {{ $about->section_two_faq_two_title }}
								      	</button>
								    </div>
								    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionOne">
								      	<div class="accordion-body">
                          {!! $about->section_two_faq_two_text !!}
								    	</div>
								    </div>
							  	</div>
							  	<div class="accordion-item">
								    <div class="accordion-header" id="headingThree">
								   		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        {{ $about->section_two_faq_three_title }}
								      	</button>
								    </div>
								    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionOne">
								    	<div class="accordion-body">
                        {!! $about->section_two_faq_three_text !!}
								    	</div>
								    </div>
								</div>
							</div>
						</div>-->
						
						 <div class="col-xl-5 col-lg-6 ms-auto">
                            <div class="toggle-container">
                            <div class="toggle-title" onclick="toggleDescription(1)">
                              {{ $about->section_two_faq_one_title }}
                                <i class="fas fa-minus toggle-icon" id="icon1"></i>
                            </div>
                            <div class="toggle-description" id="description1">{!! $about->section_two_faq_one_text !!}</div>
                    
                            <div class="toggle-title" onclick="toggleDescription(2)">
                              {{ $about->section_two_faq_two_title }}
                                <i class="fas fa-minus toggle-icon" id="icon2"></i>
                            </div>
                            <div class="toggle-description" id="description2">{!! $about->section_two_faq_two_text !!}</div>
                    
                            <div class="toggle-title" onclick="toggleDescription(3)">
                              {{ $about->section_two_faq_three_title }}
                                <i class="fas fa-minus toggle-icon" id="icon3"></i>
                            </div>
                            <div class="toggle-description" id="description3">{!! $about->section_two_faq_three_text !!}</div>
                        </div>
                      </div>
					</div>
				</div>
			</div> <!-- /.vcamp-text-block-five -->



			<!--
			=====================================================
				Vcamp Fancy Banner Two
			=====================================================
			-->
			<!--<div class="container">
				<div class="fancy-banner-two sm mt-170 lg-mt-100" data-aos="fade-up">
					<div class="inner-content h-100 position-relative d-flex align-items-center justify-content-center">
						<a class="fancybox video-icon d-flex align-items-center justify-content-center" data-fancybox="" href="{{$about->section_three_video_url}}" tabindex="0">
							<img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_43.svg')}}" alt="">
						</a>
					</div>
				</div>
			</div>
            -->




			<!--
			=====================================================
				Counter Section Three
			=====================================================
			-->
		 <!-- /.counter-section-three -->



			<!--
			=============================================
				Vcamp Feature Section Six
			==============================================
			-->
			<div class="vcamp-feature-section-six mt-150 lg-mt-70">
				<div class="container">
					<div class="row gx-xl-5">
						<div class="col-lg-5">
							<div class="text-wrapper pt-15 md-pb-50">
								<div class="title-style-five">
									<div class="upper-title">Worldwide</div>
									<h2 class="title">{{ $about->section_four_title }}</h2>
								</div>
								<span class="text-lg">{!! $about->section_four_text !!}</span>
							</div> <!-- /.text-wrapper -->
						</div>
						<div class="col-lg-7">
							<div class="row">
								<div class="col-md-6" data-aos="fade-up">
									<div class="card-style-six">
										<div class="icon d-flex align-items-end"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_46.svg')}}" alt=""></div>
										<h4>{{ $about->section_four_box_one_title }}</h4>
										<p>{!! $about->section_four_box_one_text !!}</p>
									</div> <!-- /.card-style-six -->
								</div>
								<div class="col-md-6" data-aos="fade-up">
									<div class="card-style-six">
										<div class="icon d-flex align-items-end"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_47.svg')}}" alt=""></div>
										<h4>{{ $about->section_four_box_two_title }}</h4>
                    {!! $about->section_four_box_two_text !!}
									</div> <!-- /.card-style-six -->
								</div>
								<div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
									<div class="card-style-six">
										<div class="icon d-flex align-items-end"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_48.svg')}}" alt=""></div>
										<h4>{{ $about->section_four_box_three_title }}</h4>
                    {!! $about->section_four_box_three_text !!}
									</div> <!-- /.card-style-six -->
								</div>
								<div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
									<div class="card-style-six">
										<div class="icon d-flex align-items-end"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_49.svg')}}" alt=""></div>
										<h4>{{ $about->section_four_box_four_title }}</h4>
                    {!! $about->section_four_box_four_text !!}
									</div> <!-- /.card-style-six -->
								</div>
							</div>
						</div>
					</div>
				</div>


			</div> <!-- /.vcamp-feature-section-six -->




			<!--
			=====================================================
				Team Section One
			=====================================================
			-->
			<!--<div class="team-section-one mt-200 lg-mt-120">
				<div class="container">
					<div class="row align-items-center justify-content-between">
						<div class="col-xxl-8 col-xl-9 col-lg-7 col-md-10 m-auto">
							<div class="title-style-five text-center">
								<h2 class="title">We’ve talented expert<br>to help you</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="team_slider_one box-layout">
					<div class="item">
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
							</div>
						</div>
					</div>
					<div class="item">
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
							</div>
						</div>
					</div>
					<div class="item">
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
							</div>
						</div>
					</div>
					<div class="item">
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
							</div>
						</div>
					</div>
					<div class="item">
						<div class="team-block-one position-relative">
							<img src="{{URL::asset('frontend/assets/frontend/images/team/img_05.jpg')}}" alt="" class="team-img w-100">
							<div class="overlay-bg d-flex align-items-end">
								<div class="hover-content tran3s">
									<h6 class="name">Jenelia Ra.</h6>
									<div class="position">UI Designer</div>
									<ul class="social-icon d-flex style-none">
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-instagram"></i></a></li>
										<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
										<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->



			<!--
			=====================================================
				Feedback Slider Four
			=====================================================
			-->
			<div class="feedback-section-four bg-white mt-60">

				<div class="container">
					<div class="feedback_slider_four">
            @if(count($testimonials)>0)
              @foreach($testimonials as $testimonial)
                <div class="item">
                  <div class="row">
                    <div class="col-xl-7 col-md-6 order-md-last">
                      <div class="feedback-wrapper">
                        <div class="icon d-flex align-items-center justify-content-center"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_33.svg')}}" alt=""></div>
                        <blockquote>“{!! $testimonial->message !!}”</blockquote>
                        <!--<h6 class="name"><b>{{ $testimonial->name }}</b> <br><span>{{ $testimonial->country }}</span></h6>-->
                      </div> <!-- /.feedback-wrapper -->
                    </div>
                    <div class="col-xl-5 col-md-6 order-md-first">
                      <div class="image-container">
                        <img src="{{URL::asset('frontend/assets/frontend/images/media/img08.jpg')}}" alt="">

                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            @endif
{{--						<div class="item">--}}
{{--							<div class="row">--}}
{{--								<div class="col-xl-7 col-md-6 order-md-last">--}}
{{--									<div class="feedback-wrapper">--}}
{{--										<div class="icon d-flex align-items-center justify-content-center"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_33.svg')}}" alt=""></div>--}}
{{--										<blockquote class="font-recoleta">“Having a home based business makes wonderful asset to your life. The <span>WordPress VIP</span> stands it comes time advertise your business for a cheap cost.”</blockquote>--}}
{{--										<h6 class="name"><b>Rashed Ka.</b> <br><span>USA</span></h6>--}}
{{--									</div> <!-- /.feedback-wrapper -->--}}
{{--								</div>--}}
{{--								<div class="col-xl-5 col-md-6 order-md-first">--}}
{{--									<div class="image-container">--}}
{{--										<img src="{{URL::asset('frontend/assets/frontend/images/media/img09.jpg')}}" alt="">--}}
{{--
{{--									</div>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--						<div class="item">--}}
{{--							<div class="row">--}}
{{--								<div class="col-xl-7 col-md-6 order-md-last">--}}
{{--									<div class="feedback-wrapper">--}}
{{--										<div class="icon d-flex align-items-center justify-content-center"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_33.svg')}}" alt=""></div>--}}
{{--										<blockquote class="font-recoleta">“Certainly from my perspective, WordPress has been a great success—with <span>WordPress VIP</span> giving us that enterprise-level of assured quality on top.”</blockquote>--}}
{{--										<h6 class="name"><b>Zubayer Hasan</b> <br><span>SPAIN</span></h6>--}}
{{--									</div> <!-- /.feedback-wrapper -->--}}
{{--								</div>--}}
{{--								<div class="col-xl-5 col-md-6 order-md-first">--}}
{{--									<div class="image-container">--}}
{{--										<img src="{{URL::asset('frontend/assets/frontend/images/media/img10.jpg')}}" alt="">--}}
{{--
{{--									</div>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--						</div>--}}
					</div> <!-- /.feedback_slider_four -->
				</div>
			</div> <!-- /.feedback-section-four -->



			<!--
			=====================================================
				Partner Section One
			=====================================================
			-->
		<!--<div class="partner-slider-one border-top pt-60 mt-30 mb-70 lg-mt-10">-->
		<!--		<div class="container">-->
		<!--			<p class="text-center">We are official partners of</p>-->
		<!--			<div class="partnerSliderOne">-->
		<!--				<div class="item">-->
		<!--					<div class="img-meta d-flex align-items-center justify-content-center"><img src="{{URL::asset('frontend/assets/frontend/images/logo/logo-18.png')}}" alt=""></div>-->
		<!--				</div>-->
		<!--				<div class="item">-->
		<!--					<div class="img-meta d-flex align-items-center justify-content-center"><img src="{{URL::asset('frontend/assets/frontend/images/logo/logo-19.png')}}" alt=""></div>-->
		<!--				</div>-->
		<!--				<div class="item">-->
		<!--					<div class="img-meta d-flex align-items-center justify-content-center"><img src="{{URL::asset('frontend/assets/frontend/images/logo/logo-20.png')}}" alt=""></div>-->
		<!--				</div>-->
		<!--				<div class="item">-->
		<!--					<div class="img-meta d-flex align-items-center justify-content-center"><img src="{{URL::asset('frontend/assets/frontend/images/logo/logo-21.png')}}" alt=""></div>-->
		<!--				</div>-->
		<!--				<div class="item">-->
		<!--					<div class="img-meta d-flex align-items-center justify-content-center"><img src="{{URL::asset('frontend/assets/frontend/images/logo/logo-22.png')}}" alt=""></div>-->
		<!--				</div>-->
		<!--				<div class="item">-->
		<!--					<div class="img-meta d-flex align-items-center justify-content-center"><img src="{{URL::asset('frontend/assets/frontend/images/logo/logo-23.png')}}" alt=""></div>-->
		<!--				</div>-->
		<!--			</div>-->
		<!--		</div>-->
		<!--	</div> -->


@endsection
