@extends('frontend.layouts.master')
@section('content')

 <!--
			=============================================
				Inside Page Banner
			==============================================
			-->
			<div class="inside-hero-two custom-bnr" style="background-image: url(frontend/assets/frontend/images/media/Contact_Us.jpg);">
				<div class="container">
					<h2 class="page-title">{{ $contact->section_one_title }}</h2>
          {!! $contact->section_one_text !!}
				</div>
				<img src="{{URL::asset('assets/frontend/images/shape/shape_24.svg')}}" alt="" class="shapes shape-one">
			</div> <!-- /.inside-hero-two -->



			<!--
			=============================================
				Contact Section Six
			==============================================
			-->
			<div class="contact-section-six mt-160 mb-60 lg-mt-120">
        @if(session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
        @endif
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-6">
							<div class="form-style-three ps-0 sm-pb-80">
								<form action="{{ route('admin-contact-form-save') }}" method="POST" id="contact-form" data-toggle="validator">
                  @csrf
									<div class="messages"></div>
									<div class="row controls">
										<div class="col-12">
											<div class="input-group-meta form-group mb-25">
												<label>Name*</label>
												<input type="text" placeholder="yourdigitalresellers" name="name" required="required" data-error="Name is required.">
												<div class="help-block with-errors">
                          @error('name')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                        </div>
											</div>
										</div>
										<div class="col-12">
											<div class="input-group-meta form-group mb-25">
												<label>Email*</label>
												<input type="email" placeholder=sales@yourdigitalresellers.com name="email" required="required" data-error="Valid email is required.">
												<div class="help-block with-errors">
                          @error('email')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                        </div>
											</div>
										</div>
										<div class="col-12">
											<div class="input-group-meta form-group mb-40">
												<label>Select Service*</label>
												<select class="contect-form" name="service_name" required="required" style="width: 106%;">
													<option value="">Choose a Service....</option>
													<option value="Digital Marketing">Digital Marketing</option>
													<option value="Website Design">Website Design</option>
													<option value="WordPress">WordPress</option>
													<option value="Web Analytics">Web Analytics</option>
													<option value="Web Programming">Web Programming</option>
													<option value="Infographic Design">Infographic Design</option>	
												</select>
												<div class="help-block with-errors">
                          @error('service_name')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                        </div>
											</div>
										</div>
										<div class="col-12">
											<div class="input-group-meta form-group mb-35">
											<label>Message*</label>
												<textarea placeholder="Your message*" name="message" required="required" data-error="Please,leave us a message."></textarea>
												<div class="help-block with-errors">
                          @error('message')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                        </div>
											</div>
										</div>
										<div class="col-12"><button class="theme-btn-one ripple-btn w-100" type="submit">Send Message</button></div>
									</div>
								</form>
							</div> <!-- /.form-style-three -->
						</div>
						<div class="col-lg-5 col-md-6 ms-auto">
							<div class="address-block-three d-flex mb-80 lg-mb-40">
								<div class="icon"><img src="{{URL::asset('assets/frontend/images/icon/icon_17.svg')}}" alt=""></div>
								<div class="text">
									<h5 class="title">{{ $contact->section_two_title }}</h5>
                  {!! $contact->section_two_text !!}
								</div>
							</div> <!-- /.address-block-three -->
							<div class="address-block-three d-flex mb-80 lg-mb-40">
								<div class="icon"><img src="{{URL::asset('assets/frontend/images/icon/icon_18.svg')}}" alt=""></div>
								<div class="text">
									<h5 class="title">{{ $contact->section_three_title }}</h5>
									<p>{!! $contact->section_three_text !!}<br><a href="tel:+923020123888" class="call">{!! $contact->section_three_number !!}</a></p>
								</div>
							</div> <!-- /.address-block-three -->
							<div class="address-block-three d-flex">
								<div class="icon"><img src="{{URL::asset('assets/frontend/images/icon/icon_19.svg')}}" alt=""></div>
								<div class="text">
									<h5 class="title">{{ $contact->section_four_title }}</h5>
                  {!! $contact->section_four_text !!}
								</div>
							</div> <!-- /.address-block-three -->
						</div>
					</div>
				</div>

				<div class="map-area-one mt-150 lg-mt-100">
					<div class="mapouter">
						<div class="gmap_canvas">
						<iframe class="gmap_iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1080.9924607753578!2d73.11015139399396!3d31.40829327375232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39224314964e3137%3A0xa720b4e1c60d8c3b!2sKohinoor%2C%20Faisalabad%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2sus!4v1632761234567!5m2!1sen!2sus" width="600" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>
					</div>
				</div>
			</div> <!-- /.contact-section-six -->

@endsection
