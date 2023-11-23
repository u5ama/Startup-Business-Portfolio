@extends('frontend.layouts.master')
@section('content')

  <!--
			=============================================
				Inside Page Banner
			==============================================
			-->
  <div class="inside-hero-two custom-bnr" style="background-image: {{ isset($service->banner_image) ?  url('service_images/' . $service->banner_image) : 'url(/frontend/assets/frontend/images/media/Seo_Services.jpg)' }};">
    <div class="container">
      <h2 class="page-title">{{ $service->section_one_title }}</h2>
      {!! $service->section_one_text !!}
    </div>
    <!-- <img src="{{URL::asset('frontend/assets/frontend/images/shape/shape_38.svg')}}" alt="" class="shapes shape-one"> -->
  </div> <!-- /.inside-hero-two -->

  <!--
  =====================================================
    Vcamp Feature Section Eight
  =====================================================
  -->
  <div class="vcamp-feature-section-eight mt-200 mb-150">
    <div class="container">
      <div class="row">
        <div class="col-xxl-11 m-auto">
          <div class="row align-items-center mb-10 lg-mb-20">
            <div class="col-lg-5 col-md-6">
              <div class="title-style-four">
                <h2 class="title">{{ $service->section_two_title }}.</h2>
              </div>
            </div>
            <div class="col-lg-5 col-md-6 ms-auto">
              <span class="text-lg theme-mb-0 sm-mt-20">{!! $service->section_two_text !!}</span>
            </div>
          </div>

          <div class="row" style="margin-top: 30px;">
            <div class="col-lg-10">
              <span class="text-lg theme-mb-0 sm-mt-20">We understand that your brand is your most valuable asset. That's why we meticulously tailor our white label SEO strategies to amplify your brand's online presence and drive meaningful growth.</span>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-sm-6" data-aos="fade-up">
              <div class="card-style-eight card-bg">
                <div class="icon d-flex align-items-end"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_55.svg')}}" alt=""></div>
                <h4>{{ $service->section_two_box_one_title }}</h4>
                {!! $service->section_two_box_one_text !!}
              </div> <!-- /.card-style-eight -->
            </div>
            <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
              <div class="card-style-eight card-bg">
                <div class="icon d-flex align-items-end"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_56.svg')}}" alt=""></div>
                <h4>{{ $service->section_two_box_two_title }}</h4>
                {!! $service->section_two_box_two_text !!}
              </div> <!-- /.card-style-eight -->
            </div>
            <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="150">
              <div class="card-style-eight card-bg">
                <div class="icon d-flex align-items-end"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_57.svg')}}" alt=""></div>
                <h4>{{ $service->section_two_box_three_title }}</h4>
                {!! $service->section_two_box_three_text !!}
              </div> <!-- /.card-style-eight -->
            </div>
            {{--<div class="col-lg-4 col-sm-6" data-aos="fade-up">
              <div class="card-style-eight card-bg">
                <div class="icon d-flex align-items-end"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_58.svg')}}" alt=""></div>
                <h4>{{ $service->section_two_box_four_title }}</h4>
                {!! $service->section_two_box_four_text !!}
              </div> <!-- /.card-style-eight -->
            </div>
            <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
              <div class="card-style-eight card-bg">
                <div class="icon d-flex align-items-end"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_59.svg')}}" alt=""></div>
                <h4>{{ $service->section_two_box_five_title }}</h4>
                {!! $service->section_two_box_five_text !!}
              </div> <!-- /.card-style-eight -->
            </div>
            <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="150">
              <div class="card-style-eight card-bg">
                <div class="icon d-flex align-items-end"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_60.svg')}}" alt=""></div>
                <h4>{{ $service->section_two_box_six_title }}</h4>
                {!! $service->section_two_box_six_text !!}
              </div> <!-- /.card-style-eight -->
            </div>--}}
          </div>
        </div>
      </div>
    </div>
  </div> <!-- /.vcamp-feature-section-eight -->


  <!--
  =============================================
    Vcamp Text Block Three
  ==============================================
  -->
  <div class="vcamp-text-block-three dark-bg single-service ">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 ms-auto order-md-last" data-aos="fade-left">
          <div class="text-wrapper">
            <h2 class="page-title" style="color: #27aae1;">{{ $service->section_four_title }}</h2>
            <span>{!! $service->section_four_text !!}</span>
          </div>
        </div>
        <div class="col-md-6 text-md-start text-center" data-aos="fade-right">
          <div class="img-container position-relative d-inline-block sm-mt-50">
            <img src="{{ isset($service->image_one) ? url('service_images/' . $service->image_one) : URL::asset('frontend/assets/frontend/images/media/SEO-1.jpg')}}" alt="">
          </div>
        </div>
      </div>
    </div>

  </div> <!-- /.vcamp-text-block-three -->


  <!--
      =============================================
        Theme Hero Banner
      ==============================================
      -->


<div class="hero-banner-eight">
        <!-- <div class="social-elemnet">
          <ul class="style-none d-flex align-items-center">
            <li><a href="#" class="tran3s">Fb.</a></li>
            <li><a href="#" class="tran3s">Tw.</a></li>
            <li><a href="#" class="tran3s">Inst.</a></li>
          </ul>
        </div>
        <div class="scroll-bar"></div> -->

        <div class="banner-content h-100 d-md-flex align-items-center justify-content-between">
          <div class="text-wrapper">
            <h2 class="hero-heading">{{ $service->section_five_title }}</h2>
            <span class="hero-sub-heading">{!! $service->section_five_text !!}</span>
            <a href="{{route('contact')}}" class="theme-btn-eleven ripple-btn">Consult with an expert now!</a>
            <!-- <p class="term-text">Already a member? <a href="sign-in.html">Sign in.</a></p> -->
          </div> <!-- /.text-wrapper -->

          <div class="img-wrapper position-relative">
            <img src="{{ isset($service->image_two) ? url('service_images/' . $service->image_two) : URL::asset('frontend/assets/frontend/images/media/SEO-2.jpg')}}" alt="">
          </div>
        </div> <!-- /.banner-content -->
      </div>


  <!--
  =====================================================
    Vcamp Feature Section Seven
  =====================================================
  -->
  <div class="vcamp-feature-section-seven style-two mt-80 lg-mt-120" style="background-color: #27aae1;">
    <div class="container">
      <div class="row">
        <div class="col-xxl-7 col-xl-9 col-lg-7 col-md-9 m-auto" data-aos="fade-up">
          <div class="title-style-five text-center">
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
                <div class="icon d-flex align-items-center justify-content-center"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_61.svg')}}" alt=""></div>
                <h4>{{ $service->section_three_box_one_title }}</h4>
                {!! $service->section_three_box_one_text !!}
              </div> <!-- /.card-style-seven -->
            </div>
            <div class="col-md-4 col-sm-6 d-flex mt-45" data-aos="fade-up" data-aos-delay="100">
              <div class="card-style-seven">
                <div class="icon d-flex align-items-center justify-content-center"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_62.svg')}}" alt=""></div>
                <h4>{{ $service->section_three_box_two_title }}</h4>
                {!! $service->section_three_box_two_text !!}
              </div> <!-- /.card-style-seven -->
            </div>
            <div class="col-md-4 col-sm-6 d-flex mt-45" data-aos="fade-up" data-aos-delay="150">
              <div class="card-style-seven">
                <div class="icon d-flex align-items-center justify-content-center"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_63.svg')}}" alt=""></div>
                <h4>{{ $service->section_three_box_three_title }}</h4>
                {!! $service->section_three_box_three_text !!}
              </div> <!-- /.card-style-seven -->
            </div>
          </div>

          <div class="row">
            <div class="col-md-4 col-sm-6 d-flex mt-45" data-aos="fade-up">
              <div class="card-style-seven">
                <div class="icon d-flex align-items-center justify-content-center"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_61.svg')}}" alt=""></div>
                <h4>{{ $service->section_three_box_four_title }}</h4>
                {!! $service->section_three_box_four_text !!}
              </div> <!-- /.card-style-seven -->
            </div>
            <div class="col-md-4 col-sm-6 d-flex mt-45" data-aos="fade-up" data-aos-delay="100">
              <div class="card-style-seven">
                <div class="icon d-flex align-items-center justify-content-center"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_62.svg')}}" alt=""></div>
                <h4>{{ $service->section_three_box_five_title }}</h4>
                {!! $service->section_three_box_five_text !!}
              </div> <!-- /.card-style-seven -->
            </div>
            <div class="col-md-4 col-sm-6 d-flex mt-45" data-aos="fade-up" data-aos-delay="150">
              <div class="card-style-seven">
                <div class="icon d-flex align-items-center justify-content-center"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_63.svg')}}" alt=""></div>
                <h4>{{ $service->section_three_box_six_title }}</h4>
                {!! $service->section_three_box_six_text !!}
              </div> <!-- /.card-style-seven -->
            </div>
          </div>

          <div class="row">
            <div class="col-md-4 col-sm-6 d-flex mt-45" data-aos="fade-up">
              <div class="card-style-seven">
                <div class="icon d-flex align-items-center justify-content-center"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_61.svg')}}" alt=""></div>
                <h4>{{ $service->section_three_box_seven_title }}</h4>
                {!! $service->section_three_box_seven_text !!}
              </div> <!-- /.card-style-seven -->
            </div>
            <div class="col-md-4 col-sm-6 d-flex mt-45" data-aos="fade-up" data-aos-delay="100">
              <div class="card-style-seven">
                <div class="icon d-flex align-items-center justify-content-center"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_62.svg')}}" alt=""></div>
                <h4>{{ $service->section_three_box_eight_title }}</h4>
                {!! $service->section_three_box_eight_text !!}
              </div> <!-- /.card-style-seven -->
            </div>
            <div class="col-md-4 col-sm-6 d-flex mt-45" data-aos="fade-up" data-aos-delay="150">
              <div class="card-style-seven">
                <div class="icon d-flex align-items-center justify-content-center"><img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_63.svg')}}" alt=""></div>
                <h4>{{ $service->section_three_box_nine_title }}</h4>
                {!! $service->section_three_box_nine_text !!}
              </div> <!-- /.card-style-seven -->
            </div>
          </div>

        </div>
      </div>
    </div> <!-- /.box-layout -->
    <!-- <img src="{{URL::asset('frontend/assets/frontend/images/shape/shape_39.svg')}}" alt="" class="shapes shape-three">
    <img src="{{URL::asset('frontend/assets/frontend/images/shape/shape_37.svg')}}" alt="" class="shapes shape-two"> -->
  </div> <!-- /.vcamp-feature-section-seven -->


  <!--
      =====================================================
        FAQ SECTION
      =====================================================
      -->


  <div class="faq-section-three mt-120">
        <div class="container">
          <div class="title-style-nine text-center pb-80 lg-pb-50">
            <div class="upper-title">{{$service->section_six_title}}</div>
            <span class="title">{!! $service->section_six_text !!}</span>
          </div>
          <div class="row">
            <div class="col-xxl-10 col-xl-11 m-auto">
              <div class="accordion accordion-style-four" id="accordionThree">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                              {{$service->section_six_faq_one_title}}
                            </button>
                        </div>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionThree">
                          <div class="accordion-body">
                            {!! $service->section_six_faq_one_text !!}
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <div class="accordion-header" id="headingTwo">
                            <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                              {{$service->section_six_faq_two_title}}
                            </button>
                        </div>
                        <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#accordionThree">
                            <div class="accordion-body">
                              {!! $service->section_six_faq_two_text !!}
                            </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <div class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix">
                              {{$service->section_six_faq_three_title}}
                            </button>
                        </div>
                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionThree">
                            <div class="accordion-body">
                              {!! $service->section_six_faq_three_text !!}
                            </div>
                        </div>
                      </div>
                  </div> <!-- /.col- -->
                  <div class="col-lg-6">
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                            {{$service->section_six_faq_four_title}}
                            </button>
                        </div>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionThree">
                          <div class="accordion-body">
                            {!! $service->section_six_faq_four_text !!}
                          </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingFour">
                          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                            {{$service->section_six_faq_five_title}}
                            </button>
                        </div>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionThree">
                          <div class="accordion-body">
                            {!! $service->section_six_faq_five_text !!}
                          </div>
                        </div>
                    </div>

                  </div>
                </div>
              </div> <!-- /.accordion-style-four -->
            </div>
          </div>
        </div>
      </div>

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
            <h3 class="font-recoleta">Transform your digital presence with YDR. Contact us today.</h3>
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
