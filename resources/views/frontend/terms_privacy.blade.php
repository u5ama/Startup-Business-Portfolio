@extends('frontend.layouts.master')
@section('content')

<!--
			=============================================
				Inside Page Banner
			==============================================
			-->
			<div class="inside-hero-two" style="background-image:url(frontend/assets/frontend/images/media/img46.jpg);">
				<div class="container">
					<h2 class="page-title">{{$content->title ?? null}}</h2>
				</div>
			</div> <!-- /.inside-hero-two -->

			<div class="blog-details-one mb-70 mt-60">
				<div class="container">
					<div class="row">
						<div class="col-xl-10 m-auto">
							<div class="terms-content pe-xxl-5 ps-xxl-5">
								{!! $content->description ?? null !!}
							</div> <!-- /.blog-meta-wrapper -->
						</div>
					</div>
				</div>
			</div>
@endsection
