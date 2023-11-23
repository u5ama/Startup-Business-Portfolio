@extends('frontend.layouts.master')
@section('content')

<!--
			=============================================
				Inside Page Banner
			==============================================
			-->
			<div class="inside-hero-three bg-color custom-bnr services-bnr" style="background-image:url(frontend/assets/frontend/images/media/Services.jpg);">

				<!-- <img src="{{URL::asset('frontend/assets/frontend/images/shape/shape_35.svg')}}" alt="" class="shapes shape-one"> -->
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h2 class="page-title font-recoleta">{!! $service->section_one_title !!}</h2>
						</div>
						<div class="col-xxl-5 col-md-6 ms-auto">
              {!! $service->section_one_text !!}
						</div>
					</div>
				</div>
			</div> <!-- /.inside-hero-three -->



			<!--
			=============================================
				Vcamp Feature Section Three
			==============================================
			-->
			<div class="vcamp-feature-section-three mt-200 lg-mt-80">
				<div class="container">
					<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-8" data-aos="fade-right">
          <div class="title-style-four">
            <h2 class="title">{{$service->section_two_title}}</h2>
            <span class="services-list">{!! $service->section_two_text !!}</span>
          </div>
        </div>
        <div class="col-md-6 col-sm-4 me-auto text-sm-end text-start" data-aos="fade-left">
{{--          <a href="{{ route('services') }}" class="theme-btn-five position-relative xs-mt-30">See all Services</a>--}}
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6" data-aos="fade-up">
          <div class="card-style-three mt-50 new-card">
            <div class="icon d-flex align-items-center justify-content-center"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_24.svg')}}" alt="" class="tran3s"></div>
            <h4 class="title"><a href="{{ url('services-details/' . 'seo') }}">{{$service->section_two_box_one_title}}</a></h4>
            {!! $service->section_two_box_one_text !!}
          </div> <!-- /.card-style-three -->
        </div>
        <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
          <div class="card-style-three mt-50 new-card">
            <div class="icon d-flex align-items-center justify-content-center"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_25.svg')}}" alt="" class="tran3s"></div>
            <h4 class="title"><a href="{{ url('services-details/' . 'google-ads') }}">{{$service->section_two_box_two_title}}</a></h4>
            {!! $service->section_two_box_two_text !!}
          </div> <!-- /.card-style-three -->
        </div>
        <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="200">
          <div class="card-style-three mt-50 new-card">
            <div class="icon d-flex align-items-center justify-content-center"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_26.svg')}}" alt="" class="tran3s"></div>
            <h4 class="title"><a href="{{ url('services-details/' . 'social-media-marketing') }}">{{$service->section_two_box_three_title}}</a></h4>
            {!! $service->section_two_box_three_text !!}
          </div> <!-- /.card-style-three -->
        </div>
        <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
          <div class="card-style-three mt-50 new-card">
            <div class="icon d-flex align-items-center justify-content-center"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_27.svg')}}" alt="" class="tran3s"></div>
            <h4 class="title"><a href="{{ url('services-details/' . 'graphic-designing') }}">{{$service->section_two_box_four_title}}</a></h4>
            {!! $service->section_two_box_four_text !!}
          </div> <!-- /.card-style-three -->
        </div>


        <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
        <div class="card-style-three mt-50 new-card">
            <div class="icon d-flex align-items-center justify-content-center"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_25.svg')}}" alt="" class="tran3s"></div>
            <h4 class="title"><a href="{{ url('services-details/' . 'website-development') }}">{{$service->section_two_box_five_title}}</a></h4>
          {!! $service->section_two_box_five_text !!}
        </div> <!-- /.card-style-three -->
        </div>
					</div>
				</div>
			</div> <!-- /.vcamp-feature-section-three -->



			<!--
			=====================================================
				Vcamp Feature Section Seven
			=====================================================
			-->
			<div class="vcamp-feature-section-seven mt-70" style="background-color: #27aae1;">
				<div class="container">
					<div class="row">
						<div class="col-xxl-7 col-xl-8 col-lg-6 col-md-8 m-auto" data-aos="fade-up">
							<div class="title-style-one text-center">
								<h2 class="title" style="color: white;">{{ $service->section_three_title }}</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="box-layout mt-40 lg-mt-10">
					<div class="row">
						<div class="col-xxl-11 m-auto">
							<div class="row">
								<div class="col-md-4 col-sm-6 d-flex mt-45" data-aos="fade-up">
									<div class="card-style-seven">
										<h4>{{ $service->section_three_box_one_title }}</h4>
                    {!! $service->section_three_box_one_text !!}
									</div> <!-- /.card-style-seven -->
								</div>
								<div class="col-md-4 col-sm-6 d-flex mt-45" data-aos="fade-up" data-aos-delay="100">
									<div class="card-style-seven">
                    <h4>{{ $service->section_three_box_two_title }}</h4>
                    {!! $service->section_three_box_two_text !!}
                  </div> <!-- /.card-style-seven -->
								</div>
								<div class="col-md-4 col-sm-6 d-flex mt-45" data-aos="fade-up" data-aos-delay="150">
									<div class="card-style-seven">
                    <h4>{{ $service->section_three_box_three_title	 }}</h4>
                    {!! $service->section_three_box_three_text !!}
                  </div> <!-- /.card-style-seven -->
								</div>
							</div>
						</div>
					</div>
				</div> <!-- /.box-layout -->
				<img src="{{URL::asset('frontend/assets/frontend/images/shape/shape_36.svg')}}" alt="" class="shapes shape-one">
				<img src="{{URL::asset('frontend/assets/frontend/images/shape/shape_37.svg')}}" alt="" class="shapes shape-two">
			</div> <!-- /.vcamp-feature-section-seven -->



			<!--
			=====================================================
				Feedback Slider Four
			=====================================================
			-->
{{--<div class="feedback-section-four bg-white mt-60">
  <img src="{{URL::asset('frontend/assets/frontend/images/shape/shape_27.svg')}}" alt="" class="shapes shape-five">
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
                  <h6 class="name"><b>{{ $testimonial->name }}</b> <br><span>{{ $testimonial->country }}</span></h6>
                </div> <!-- /.feedback-wrapper -->
              </div>
              <div class="col-xl-5 col-md-6 order-md-first">
                <div class="image-container">
                  <img src="{{URL::asset('frontend/assets/frontend/images/media/img_08.jpg')}}" alt="">
                  <img src="{{URL::asset('frontend/assets/frontend/images/shape/shape_08.svg')}}" alt="" class="shapes shape-one">
                </div>
              </div>
            </div>
          </div>
        @endforeach
      @endif
      </div> <!-- /.feedback_slider_four -->
    </div>
  </div> <!-- /.feedback-section-four -->--}}



			<!--
			=====================================================
				Vcamp Fancy Banner Seven
			=====================================================
			-->
			<div class="fancy-banner-seven mt-100 mb-100 lg-mb-60" data-aos="fade-up">
				<div class="container">
					<div class="inner-content position-relative">
						<div class="row align-items-center">
							<div class="col-xl-8 col-lg-9 text-center text-lg-start">
								<h3 class="font-recoleta">Have any project in mind?</h3>
								<p>Call <a href="tel:+923020123888">+92 302 0123 888</a> or email us at <a href="mailto:sales@yourdigitalresellers.com">sales@yourdigitalresellers.com</a></p>
							</div>
							<div class="col-xl-4 col-lg-3 text-center text-lg-end">
								<a href="{{ route('contact') }}" class="theme-btn-four ripple-btn">Contact Us</a>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /.fancy-banner-seven -->

@endsection
