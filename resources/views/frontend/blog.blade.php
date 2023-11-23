@extends('frontend.layouts.master')
@section('content')

<!--
			=============================================
				Inside Page Banner
			==============================================
			-->
			<!-- <div class="inside-hero-one hero-spacing">
				<div class="container">
					<h2 class="page-title font-recoleta">Blog</h2>
					<p>Stay tuned with the latest news about Digital Marketing  industry.</p>
				</div>
			</div> --> <!-- /.inside-hero-one -->



			<!--
			=============================================
				Inside Page Banner
			==============================================
			-->
			<div class="inside-hero-two custom-bnr" style="background-image: url(frontend/assets/frontend/images/media/Blog.jpg);">
				<div class="container">
					<h2 class="page-title">Blog</h2>
					<p>Stay tuned with the latest news about Digital Marketing  industry.</p>
				</div>
				<img src="{{URL::asset('assets/frontend/images/shape/shape_24.svg')}}" alt="" class="shapes shape-one">
			</div> <!-- /.inside-hero-two -->

			<!--

			=====================================================
				Blog Section Four
			=====================================================
			-->
			<div class="blog-section-four mt-160 mb-150 lg-mt-100 lg-mb-120">
				<div class="container">
					<div class="row gx-xl-5">
						<div class="col-lg-12">
							<div class="blog-meta-wrapper">
                @if(count($blogs) > 0)
                  @foreach($blogs as $blog)

                    <article class="blog-meta-four">
                      <div class="img-meta position-relative">
                        <img src="{{ isset($blog->image) ? url('blog_images/' . $blog->image) : asset('frontend/assets/frontend/images/blog/blog_img_04.jpg') }}" alt="" class="w-100">
                        <!-- <a href="{{ url('blog-details/' . $blog->slug) }}" class="tag">{{ $blog->category->category_name }}</a> -->
                      </div>
                      <div class="post-info"><!-- Featured - <span class="date">{{ \Carbon\Carbon::parse($blog->created_at)->format('F j, Y') }}</span> --></div>
                      <a href="{{ url('blog-details/' . $blog->slug) }}" class="title">{{ $blog->title }}</a>
                      <div class="post-footer d-flex align-items-center justify-content-between">
                        <a href="{{ url('blog-details/' . $blog->slug) }}" class="read-more tran3s"><img src="{{ URL::asset('frontend/assets/frontend/images/icon/icon_16.svg') }}" alt=""></a>
                      </div>
                    </article> <!-- /.blog-meta-four -->
                  @endforeach
                @endif

              </div> <!-- /.blog-meta-wrapper -->
              <div class="page-pagination-one pt-30">
                <ul class="d-flex align-items-center style-none">
                  {{ $blogs->links() }}
                </ul>
              </div>
							{{--<div class="page-pagination-one pt-30">
								<ul class="d-flex align-items-center style-none">
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li>...</li>
									<li><a href="#">Last</a></li>
									<li class="arrow"><a href="#"><i class="bi bi-arrow-right"></i></a></li>
								</ul>
							</div>--}}
						</div>

						<!-- <div class="col-lg-4 col-md-8">
							<div class="blog-sidebar md-mt-80">
								<div class="blog-sidebar-search mb-60">
									<form action="#">
										<input type="text" placeholder="Search..">
										<button><i class="bi bi-search"></i></button>
									</form>
								</div> -->

								<!-- /.blog-sidebar-search -->
							<!--	{{--<div class="blog-sidebar-category mb-80 md-mb-50">
									<h4 class="sidebar-title">Category</h4>
									<ul class="style-none">
										<li><a href="{{ route('blog') }}">Digital (3)</a></li>
										<li><a href="{{ route('blog') }}">Marketing (4)</a></li>
										<li><a href="{{ route('blog') }}">Design (2)</a></li>
										<li><a href="{{ route('blog') }}">WordPress (8)</a></li>
										<li><a href="{{ route('blog') }}">Plugin (5)</a></li>
									</ul>
								</div> --}} -->

								<!-- /.blog-sidebar-category -->

								<!--

								<div class="sidebar-banner-add mt-5" style="background-image:url(frontend/assets/frontend/images/blog/add-bg.jpg);">
									<div class="banner-content">
										<h4>Banner Advertise <br>Heading</h4>
										<p>From its medieval origins digital</p>
										<a href="#" class="ripple-btn">Download</a>
									</div>
								</div> -->

								<!-- /.sidebar-banner-add -->
							<!-- </div> -->
								<!-- /.blog-sidebar -->
						<!-- </div> -->
						<!--col-lg-4 col-md-8-->
					</div>
				</div>
			</div> <!-- /.blog-section-four -->


@endsection
