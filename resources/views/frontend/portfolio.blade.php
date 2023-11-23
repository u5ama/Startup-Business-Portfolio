@extends('frontend.layouts.master')
@section('content')

<!-- 
			=============================================
				Inside Page Banner
			============================================== 
			-->
			<div class="inside-hero-one hero-spacing">
				<div class="container">
					<h2 class="page-title font-recoleta">Portfolio Classic</h2>
					<p>We’re empowering WordPress to do great things together</p>
				</div>
			</div> <!-- /.inside-hero-one -->
			


			<!--
			=====================================================
				Case Study Section Three
			=====================================================
			-->
			<div class="case-study-three full-width mt-150 lg-mt-120">
				<div class="container-fluid">
					<div class="controls control-nav-one text-center mb-50 lg-mb-30">
				        <button type="button" class="control" data-filter="all">All</button>
				        <button type="button" class="control" data-filter=".dev">Development</button>
				        <button type="button" class="control" data-filter=".plugin">Plugin</button>
				        <button type="button" class="control" data-filter=".branding">Branding</button>
				        <button type="button" class="control" data-filter=".customization">Customization</button>
			    	</div>

			    	<div class="row">
			    		<div class="col-12 m-auto">
			    			<div class="mixitUp-container clearfix">
			    				<div class="mix customization">
			    					<div class="case-block-three position-relative">
										<img src="{{URL::asset('frontend/assets/frontend/images/media/img_15.jpg')}}" alt="" class="screen">
										<div class="overlay-content d-flex align-items-end">
											<a href="{{ route('portfolio_details') }}" class="d-flex justify-content-between align-items-center" tabindex="0">
												<span>www.slack.com</span>
												<img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_28.svg')}}" alt="">
											</a>
										</div> <!-- /.overlay-content -->
									</div> <!-- /.case-block-three -->
			    				</div>
			    				<div class="mix plugin">
			    					<div class="case-block-three position-relative">
										<img src="{{URL::asset('frontend/assets/frontend/images/media/img_16.jpg')}}" alt="" class="screen">
										<div class="overlay-content d-flex align-items-end">
											<a href="{{ route('portfolio_details') }}" class="d-flex justify-content-between align-items-center" tabindex="0">
												<span>www.todo.com</span>
												<img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_28.svg')}}" alt="">
											</a>
										</div> <!-- /.overlay-content -->
									</div> <!-- /.case-block-three -->
			    				</div>
			    				<div class="mix customization">
			    					<div class="case-block-three position-relative">
										<img src="{{URL::asset('frontend/assets/frontend/images/media/img_17.jpg')}}" alt="" class="screen">
										<div class="overlay-content d-flex align-items-end">
											<a href="{{ route('portfolio_details') }}" class="d-flex justify-content-between align-items-center" tabindex="0">
												<span>www.slack.com</span>
												<img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_28.svg')}}" alt="">
											</a>
										</div> <!-- /.overlay-content -->
									</div> <!-- /.case-block-three -->
			    				</div>
			    				<div class="mix dev branding">
			    					<div class="case-block-three position-relative">
										<img src="{{URL::asset('frontend/assets/frontend/images/media/img_47.jpg')}}" alt="" class="screen">
										<div class="overlay-content d-flex align-items-end">
											<a href="{{ route('portfolio_details') }}" class="d-flex justify-content-between align-items-center" tabindex="0">
												<span>www.todo.com</span>
												<img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_28.svg')}}" alt="">
											</a>
										</div> <!-- /.overlay-content -->
									</div> <!-- /.case-block-three -->
			    				</div>
			    				<div class="mix customization">
			    					<div class="case-block-three position-relative">
										<img src="{{URL::asset('frontend/assets/frontend/images/media/img_48.jpg')}}" alt="" class="screen">
										<div class="overlay-content d-flex align-items-end">
											<a href="{{ route('portfolio_details') }}" class="d-flex justify-content-between align-items-center" tabindex="0">
												<span>www.slack.com</span>
												<img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_28.svg')}}" alt="">
											</a>
										</div> <!-- /.overlay-content -->
									</div> <!-- /.case-block-three -->
			    				</div>
			    				<div class="mix dev">
			    					<div class="case-block-three position-relative">
										<img src="{{URL::asset('frontend/assets/frontend/images/media/img_49.jpg')}}" alt="" class="screen">
										<div class="overlay-content d-flex align-items-end">
											<a href="{{ route('portfolio_details') }}" class="d-flex justify-content-between align-items-center" tabindex="0">
												<span>www.todo.com</span>
												<img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_28.svg')}}" alt="">
											</a>
										</div> <!-- /.overlay-content -->
									</div> <!-- /.case-block-three -->
			    				</div>
			    				<div class="mix plugin branding">
			    					<div class="case-block-three position-relative">
										<img src="{{URL::asset('frontend/assets/frontend/images/gallery/img_05.jpg')}}" alt="" class="screen">
										<div class="overlay-content d-flex align-items-end">
											<a href="{{ route('portfolio_details') }}" class="d-flex justify-content-between align-items-center" tabindex="0">
												<span>www.slack.com</span>
												<img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_28.svg')}}" alt="">
											</a>
										</div> <!-- /.overlay-content -->
									</div> <!-- /.case-block-three -->
			    				</div>
			    				<div class="mix plugin">
			    					<div class="case-block-three position-relative">
										<img src="{{URL::asset('frontend/assets/frontend/images/gallery/img_06.jpg')}}" alt="" class="screen">
										<div class="overlay-content d-flex align-items-end">
											<a href="{{ route('portfolio_details') }}" class="d-flex justify-content-between align-items-center" tabindex="0">
												<span>www.todo.com</span>
												<img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_28.svg')}}" alt="">
											</a>
										</div> <!-- /.overlay-content -->
									</div> <!-- /.case-block-three -->
			    				</div>
			    				<div class="mix dev branding">
			    					<div class="case-block-three position-relative">
										<img src="{{URL::asset('frontend/assets/frontend/images/gallery/img_07.jpg')}}" alt="" class="screen">
										<div class="overlay-content d-flex align-items-end">
											<a href="{{ route('portfolio_details') }}" class="d-flex justify-content-between align-items-center" tabindex="0">
												<span>www.slack.com</span>
												<img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_28.svg')}}" alt="">
											</a>
										</div> <!-- /.overlay-content -->
									</div> <!-- /.case-block-three -->
			    				</div>
			    				<div class="mix customization">
			    					<div class="case-block-three position-relative">
										<img src="{{URL::asset('frontend/assets/frontend/images/gallery/img_08.jpg')}}" alt="" class="screen">
										<div class="overlay-content d-flex align-items-end">
											<a href="{{ route('portfolio_details') }}" class="d-flex justify-content-between align-items-center" tabindex="0">
												<span>www.todo.com</span>
												<img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_28.svg')}}" alt="">
											</a>
										</div> <!-- /.overlay-content -->
									</div> <!-- /.case-block-three -->
			    				</div>
			    				<div class="mix dev branding">
			    					<div class="case-block-three position-relative">
										<img src="{{URL::asset('frontend/assets/frontend/images/gallery/img_09.jpg')}}" alt="" class="screen">
										<div class="overlay-content d-flex align-items-end">
											<a href="{{ route('portfolio_details') }}" class="d-flex justify-content-between align-items-center" tabindex="0">
												<span>www.slack.com</span>
												<img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_28.svg')}}" alt="">
											</a>
										</div> <!-- /.overlay-content -->
									</div> <!-- /.case-block-three -->
			    				</div>
			    				<div class="mix plugin">
			    					<div class="case-block-three position-relative">
										<img src="{{URL::asset('frontend/assets/frontend/images/gallery/img_10.jpg')}}" alt="" class="screen">
										<div class="overlay-content d-flex align-items-end">
											<a href="{{ route('portfolio_details') }}" class="d-flex justify-content-between align-items-center" tabindex="0">
												<span>www.todo.com</span>
												<img src="{{URL::asset('frontend/assets/frontend/images/icon/icon_28.svg')}}" alt="">
											</a>
										</div> <!-- /.overlay-content -->
									</div> <!-- /.case-block-three -->
			    				</div>
			    			</div> <!-- /.mixitUp-container -->
			    		</div>
			    	
				</div>
			</div> <!-- /.case-study-three -->
            
@endsection