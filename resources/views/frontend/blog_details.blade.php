@extends('frontend.layouts.master')
@section('content')

<!--
			=============================================
				Inside Page Banner
			==============================================
			-->
			<div class="inside-hero-eight text-center">
				<div class="container">
					<p class="blog-pubish-date">{{$blog->category->category_name}} . {{ \Carbon\Carbon::parse($blog->created_at)->format('F j, Y') }}.</p>
					<div class="row">
						<div class="col-xxl-8 col-xl-9 col-lg-8 m-auto">
							<h2 class="blog-heading-two">{{$blog->title}}.</h2>
						</div>
					</div>
				</div>
			</div> <!-- /.inside-hero-eight -->

			<!--
			=====================================================
				Blog Details One
			=====================================================
			-->
			<div class="blog-details-one dark-bg mb-70">
				<div class="container">
					<div class="row">
						<div class="col-xl-10 m-auto">
							<div class="blog-meta-wrapper pe-xxl-5 ps-xxl-5">
								<article class="blog-details-content">
                  {!! $blog->description !!}
                  {{--<div class="bottom-widget d-sm-flex align-items-center justify-content-between">
										<ul class="d-flex tags style-none pb-20">
											<li>Tag:</li>
											<li><a href="#">business</a>,</li>
											<li><a href="#">makreting</a>,</li>
											<li><a href="#">tips</a></li>
										</ul>
										<ul class="d-flex share-icon align-items-center style-none pb-20">
											<li>Share:</li>
											<li><a href="#"><i class="bi bi-google"></i></a></li>
											<li><a href="#"><i class="bi bi-twitter"></i></a></li>
											<li><a href="#"><i class="bi bi-instagram"></i></a></li>
										</ul>
									</div> <!-- /.bottom-widget -->--}}
								</article> <!-- /.blog-details-content -->

								{{--<div class="blog-comment-area">
									<h3 class="blog-inner-title pb-15">2 Comments</h3>
									<div class="comment d-flex">
										<img src="{{URL::asset('frontend/assets/frontend/images/blog/avatar_01.jpg')}}" alt="" class="user-avatar">
										<div class="comment-text">
											<div class="name">Al Hasani</div>
											<div class="date">13 June, 2018, 7:30pm</div>
											<p>One touch of a red-hot stove is usually all we need to avoid that kind of lorem discomfort in future. The same true we experience </p>
											<a href="#" class="reply-btn">Reply</a>
										</div> <!-- /.comment-text -->
									</div> <!-- /.comment -->
									<div class="comment d-flex">
										<img src="{{URL::asset('frontend/assets/frontend/images/blog/avatar_02.jpg')}}" alt="" class="user-avatar">
										<div class="comment-text">
											<div class="name">Rashed ka.</div>
											<div class="date">13 June, 2018, 7:30pm</div>
											<p>One touch of a red-hot stove is usually all we need to avoid that kind of lorem discomfort in future. The same true we experience </p>
											<a href="#" class="reply-btn">Reply</a>
										</div> <!-- /.comment-text -->
									</div> <!-- /.comment -->
								</div> <!-- /.blog-comment-area -->--}}

								{{--<div class="blog-comment-form" >
									<h3 class="blog-inner-title">Leave A Comment</h3>
									<p>Sign in to post your comment or signup if you dont have any account.</p>
									<form action="#" class="mt-50">
										<div class="input-wrapper mb-25">
											<label>Name*</label>
											<input type="text" placeholder="yourdigitalresellers">
										</div> <!-- /.input-wrapper -->
										<div class="input-wrapper mb-40">
											<label>Email*</label>
											<input type="email" placeholder="sales@yourdigitalresellers.com">
										</div> <!-- /.input-wrapper -->
										<div class="input-wrapper mb-30">
											<textarea placeholder="Your Comment"></textarea>
										</div> <!-- /.input-wrapper -->
										<a href="#" class="theme-btn-four ripple-btn">Post Comment</a>
									</form>
								</div> <!-- /.blog-comment-form -->--}}
							</div> <!-- /.blog-meta-wrapper -->
						</div>
					</div>
				</div>
			</div> <!-- /.blog-details-one -->

@endsection
