@extends('frontend.layouts.master')
@section('content')
<!-- 
			=============================================
				Inside Page Banner
			============================================== 
			-->
			<div class="inside-hero-nine">
				<div class="breadcrumb-area">
					<div class="container">
						<div class="d-sm-flex align-items-center justify-content-between">
							<nav class="breadcrumb-style-one mt-20">
								<ol class="breadcrumb style-none">
								    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
								    <li class="breadcrumb-item"><a href="{{ route('portfolio_details') }}">Shop</a></li>
								    <li class="breadcrumb-item active" aria-current="page">Quilted Gilet With Hood </li>
								</ol>
							</nav>
							<div class="share-dropdown mt-20">
								<button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
							    	Share
							  	</button>
							  	<div class="dropdown-menu dropdown-menu-end">
								    <ul class="d-flex justify-content-between social-icon style-none">
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-instagram"></i></a></li>
										<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
									</ul>
							  	</div>
							</div>
						</div>
					</div>
				</div> <!-- /.breadcrumb-area -->
			</div> <!-- /.inside-hero-nine -->

			


			<!-- 
			=============================================
				Product Details One
			============================================== 
			-->
			<div class="product-details-one mt-40">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 order-lg-2">
							<div class="tab-content product-img-tab-content h-100">
							  	<div class="tab-pane fade show active h-100" id="img1" role="tabpanel" >
							  		<a class="fancybox h-100 w-100 d-flex align-items-center justify-content-center" data-fancybox="" href="{{URL::asset('assets/frontend/images/shop/img_28.png')}}" tabindex="-1">
										<img src="{{URL::asset('assets/frontend/images/shop/img_28.png')}}" alt="" class="m-auto">
									</a>
							  	</div>
							  	<div class="tab-pane fade h-100" id="img2" role="tabpanel" >
							  		<a class="fancybox h-100 w-100 d-flex align-items-center justify-content-center" data-fancybox="" href="{{URL::asset('assets/frontend/images/shop/img_29.png')}}" tabindex="-1">
										<img src="{{URL::asset('assets/frontend/images/shop/img_29.png')}}" alt="" class="m-auto">
									</a>
							  	</div>
							  	<div class="tab-pane fade h-100" id="img3" role="tabpanel" >
							  		<a class="fancybox h-100 w-100 d-flex align-items-center justify-content-center" data-fancybox="" href="{{URL::asset('assets/frontend/images/shop/img_30.png')}}" tabindex="-1">
										<img src="{{URL::asset('assets/frontend/images/shop/img_30.png')}}" alt="" class="m-auto">
									</a>
							  	</div>
							</div>
						</div>
						<div class="col-lg-1 order-lg-1">
							<ul class="nav nav-tabs flex-lg-column product-img-tab" id="myTab" role="tablist">
							  	<li class="nav-item">
							    	<button class="nav-link active" data-bs-toggle="tab" data-bs-target="#img1" type="button" role="tab"  aria-selected="true"><img src="{{URL::asset('assets/frontend/images/shop/img_28.png')}}" alt="" class="m-auto"></button>
							 	 </li>
							  	<li class="nav-item">
							    	<button class="nav-link" data-bs-toggle="tab" data-bs-target="#img2" type="button" role="tab"  aria-selected="false"><img src="{{URL::asset('assets/frontend/images/shop/img_29.png')}}" alt="" class="m-auto"></button>
							  	</li>
							  	<li class="nav-item">
							    	<button class="nav-link" data-bs-toggle="tab" data-bs-target="#img3" type="button" role="tab"  aria-selected="false"><img src="{{URL::asset('assets/frontend/images/shop/img_30.png')}}" alt="" class="m-auto"></button>
							  	</li>
							</ul>
						</div>
						<div class="col-lg-6 order-lg-3">
							<div class="product-info ps-xxl-5 md-mt-50">
								<div class="stock-tag">In Stock</div>
								<h3 class="product-name">Quilted Gilet With Hood</h3>
								<ul class="style-none d-flex align-items-center rating">
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star"></i></li>
									<li><a href="#">(2 Customer Reviews)</a></li>
								</ul>
								<div class="price">$49.00 - $53.00</div>
								<p class="availability">38 Piece Available  </p>
								<p class="description-text">Tote bag gochujang dreamcatcher fanny pack ban cold-pressed. Vape mlkshk sriracha marfa. </p>
								<ul class="product-feature style-none">
									<li>Free delivery available</li>
									<li>Use promo-code and save up to 25%</li>
								</ul>
								<div class="customize-order">
									<div class="row">
										<div class="col-xxl-11">
											<div class="row">
												<div class="col-lg-3 col-md-3 col-sm-4">
													<div class="quantity mt-25">
														<h6>Quantity</h6>
														<div class="button-group">
															<ul class="style-none d-flex align-items-center">
																<li><button class="value-decrease">-</button></li>
																<li><input type="number" min="1" max="22" value="1" disabled="" class="product-value val"></li>
																<li><button class="value-increase">+ </button></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-4">
													<div class="color-selection mt-25">
														<h6>Colors</h6>
														<ul class="style-none d-flex align-items-center color-custome-input">
															<li>
																<input type="radio" name="color" value="color01" class="color-check-btn" checked="checked">
																<label style="background:#9CD2FF;"></label>
															</li>
															<li>
																<input type="radio" name="color" value="color02" class="color-check-btn">
																<label style="background:#FF9153;"></label>
															</li>
															<li>
																<input type="radio" name="color" value="color03" class="color-check-btn">
																<label style="background:#5FF2BE;"></label>
															</li>
															<li>
																<input type="radio" name="color" value="color04" class="color-check-btn">
																<label style="background:#9A82FF;"></label>
															</li>
														</ul>
													</div>
												</div>
												<div class="col-xl-5 col-md-6 col-sm-4">
													<div class="size-selection mt-25">
														<h6>Size</h6>
														<ul class="style-none d-flex align-items-center size-custome-input">
															<li>
																<input type="radio" name="size" value="small" class="size-check-btn">
																<label>S</label>
															</li>
															<li>
																<input type="radio" name="size" value="medium" class="size-check-btn">
																<label>M</label>
															</li>
															<li>
																<input type="radio" name="size" value="large" class="size-check-btn">
																<label>L</label>
															</li>
															<li>
																<input type="radio" name="size" value="extra large" class="size-check-btn">
																<label>XL</label>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div> <!-- /.customize-order -->
								<div class="button-group mt-30 d-sm-flex align-items-center">
									<a href="#" class="theme-btn-seven mt-15 me-sm-4 d-block">Add To Cart</a>
									<a href="#" class="theme-btn-nine mt-15 d-block">Add To wishlist</a>
								</div>
							</div> <!-- /.product-info -->
						</div>
					</div>

					<div class="product-review-tab mt-150 lg-mt-100">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
							    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#item1" type="button" role="tab"  aria-selected="true">Description</button>
							</li>
							<li class="nav-item">
							    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#item2" type="button" role="tab"  aria-selected="false">Technical Info</button>
							</li>
							<li class="nav-item">
							    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#item3" type="button" role="tab"  aria-selected="false">Feedback</button>
							</li>
						</ul>
						<div class="tab-content mt-50 lg-mt-20">
						  	<div class="tab-pane fade show active" id="item1" role="tabpanel" >
						  		<div class="row gx-5">
						  			<div class="col-xl-6">
						  				<h5>Specifications:</h5>
						  				<p>One touch of a red-hot stove is usually all we need to avoid that . The same is true as we experience in emotional sensation of stress from our first instances of social rejection ridicule.</p>
						  			</div>
						  			<div class="col-xl-6">
						  				<h5>Check product main features:</h5>
						  				<ul class="style-none product-feature">
						  					<li>Lorem ipsum best lightweight bra cool rejection avoid text</li>
						  					<li>Lightweight bras cool rejection quickly quis.</li>
						  					<li>We quickly learn to fear and automatically avoid potentially</li>
						  				</ul>
						  			</div>
						  		</div>
						  	</div>
						  	<div class="tab-pane fade" id="item2" role="tabpanel" >
						  		<div class="row gx-5">
						  			<div class="col-xl-6">
						  				<h5>Check product main features:</h5>
						  				<ul class="style-none product-feature">
						  					<li>Lorem ipsum best lightweight bra cool rejection avoid text</li>
						  					<li>Lightweight bras cool rejection quickly quis.</li>
						  					<li>We quickly learn to fear and automatically avoid potentially</li>
						  				</ul>
						  			</div>
						  			<div class="col-xl-6">
						  				<h5>Specifications:</h5>
						  				<p>One touch of a red-hot stove is usually all we need to avoid that . The same is true as we experience in emotional sensation of stress from our first instances of social rejection ridicule.</p>
						  			</div>
						  		</div>
						  	</div>
						  	<div class="tab-pane fade" id="item3" role="tabpanel" >
						  		<div class="user-comment-area">
						  			<div class="single-comment d-flex align-items-top">
						  				<img src="{{URL::asset('assets/frontend/images/blog/avatar_01.jpg')}}" alt="" class="user-img">
						  				<div class="user-comment-data">
						  					<h6 class="name">Rashed ka.</h6>
						  					<ul class="style-none d-flex rating">
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star"></i></li>
											</ul>
											<p>One touch of a red-hot stove is usually all we need to avoid that kind of discomfort in future. The same true we experience the emotional sensation.</p>
						  				</div> <!-- /.user-comment-data -->
						  			</div> <!-- /.single-comment -->
						  			<div class="single-comment d-flex align-items-top">
						  				<img src="{{URL::asset('assets/frontend/images/blog/avatar_02.jpg')}}" alt="" class="user-img">
						  				<div class="user-comment-data">
						  					<h6 class="name">Zubayer hasan</h6>
						  					<ul class="style-none d-flex rating">
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star"></i></li>
											</ul>
											<p>One touch of a red-hot stove is usually all we need to avoid that kind of discomfort in future. The same true we experience the emotional sensation.</p>
						  				</div> <!-- /.user-comment-data -->
						  			</div> <!-- /.single-comment -->
						  		</div>
						  	</div>
						</div>
					</div> <!-- /.product-review-tab -->

					<div class="vcamp-feature-section-ten border-bottom mt-60 pb-50 lg-pb-20">
						<div class="row">
							<div class="col-lg-3 col-sm-6">
								<div class="card-style-ten text-center mb-40">
									<div class="icon d-flex align-items-center justify-content-center m-auto"><img src="{{URL::asset('assets/frontend/images/icon/icon_84.svg')}}" alt="" class="tran3s"></div>
									<h4>Free Delivery within <br>3 days.</h4>
								</div> <!-- /.card-style-ten -->
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="card-style-ten text-center mb-40">
									<div class="icon d-flex align-items-center justify-content-center m-auto"><img src="{{URL::asset('assets/frontend/images/icon/icon_85.svg')}}" alt="" class="tran3s"></div>
									<h4>7 Days refund <br> policy.</h4>
								</div> <!-- /.card-style-ten -->
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="card-style-ten text-center mb-40">
									<div class="icon d-flex align-items-center justify-content-center m-auto"><img src="{{URL::asset('assets/frontend/images/icon/icon_86.svg')}}" alt="" class="tran3s"></div>
									<h4>Secure payment <br> methods</h4>
								</div> <!-- /.card-style-ten -->
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="card-style-ten text-center mb-40">
									<div class="icon d-flex align-items-center justify-content-center m-auto"><img src="{{URL::asset('assets/frontend/images/icon/icon_87.svg')}}" alt="" class="tran3s"></div>
									<h4>Store pickup <br>facility.</h4>
								</div> <!-- /.card-style-ten -->
							</div>
						</div>
					</div> <!-- /.vcamp-feature-section-ten -->
				</div>
			</div> <!-- /.product-details-one -->



			<!-- 
			=============================================
				Realated Product
			============================================== 
			-->
			<div class="related-product mt-150 lg-mt-100">
				<div class="container">
					<div class="border-bottom pb-150 lg-pb-60">
						<div class="row align-items-center justify-content-between pb-50">
							<div class="col-md-6 col-sm-8">
								<div class="title-style-ten text-center text-sm-start xs-pb-30">
									<h2 class="title">Releted Products</h2>
								</div>
							</div>
							<div class="col-md-6 col-sm-4 d-flex justify-content-center justify-content-sm-end">
								<ul class="slider-arrows product-slider-arrow-one d-flex style-none">
									<li class="prev_p4 slick-arrow ripple-btn" style=""><i class="bi bi-chevron-left"></i></li>
									<li class="next_p4 slick-arrow ripple-btn" style=""><i class="bi bi-chevron-right"></i></li>
								</ul>
							</div>
						</div>

						<div class="product_slider_four product_slider_space">
							<div class="item">
								<div class="product-block-two">
									<div class="img-holder">
										<a href="#" class="d-flex align-items-center justify-content-center h-100">
											<img src="{{URL::asset('assets/frontend/images/shop/img_09.png')}}" alt="" class="product-img tran4s">
										</a>
										<a href="#" class="cart-icon" title="Add To Cart"><i class="bi bi-cart-check"></i></a>
									</div> <!-- /.img-holder -->
									<div class="product-meta">
										<div class="d-lg-flex align-items-center justify-content-between">
											<a href="#" class="product-title">Quilted Gilet With Hood</a>
											<ul class="style-none d-flex rating">
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star"></i></li>
											</ul>
										</div>
										<div class="price">$17.99</div>
									</div> <!-- /.product-meta -->
								</div> <!-- /.product-block-two -->
							</div>
							<div class="item">
								<div class="product-block-two">
									<div class="img-holder">
										<a href="#" class="d-flex align-items-center justify-content-center h-100">
											<img src="{{URL::asset('assets/frontend/images/shop/img_10.png')}}" alt="" class="product-img tran4s">
										</a>
										<a href="#" class="cart-icon" title="Add To Cart"><i class="bi bi-cart-check"></i></a>
									</div> <!-- /.img-holder -->
									<div class="product-meta">
										<div class="d-lg-flex align-items-center justify-content-between">
											<a href="#" class="product-title">Jogers with Black strip</a>
											<ul class="style-none d-flex rating">
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star"></i></li>
												<li><i class="bi bi-star"></i></li>
											</ul>
										</div>
										<div class="price">$80.99</div>
									</div> <!-- /.product-meta -->
								</div> <!-- /.product-block-two -->
							</div>
							<div class="item">
								<div class="product-block-two">
									<div class="img-holder">
										<a href="#" class="d-flex align-items-center justify-content-center h-100">
											<img src="{{URL::asset('assets/frontend/images/shop/img_11.png')}}" alt="" class="product-img tran4s">
										</a>
										<div class="tag-two">OUT OF STOCK</div>
									</div> <!-- /.img-holder -->
									<div class="product-meta">
										<div class="d-lg-flex align-items-center justify-content-between">
											<a href="#" class="product-title">Rolex Gold Watch</a>
											<ul class="style-none d-flex rating">
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star"></i></li>
											</ul>
										</div>
										<div class="price">$217.99</div>
									</div> <!-- /.product-meta -->
								</div> <!-- /.product-block-two -->
							</div>
							<div class="item">
								<div class="product-block-two">
									<div class="img-holder">
										<a href="#" class="d-flex align-items-center justify-content-center h-100">
											<img src="{{URL::asset('assets/frontend/images/shop/img_12.png')}}" alt="" class="product-img tran4s">
										</a>
										<a href="#" class="cart-icon" title="Add To Cart"><i class="bi bi-cart-check"></i></a>
									</div> <!-- /.img-holder -->
									<div class="product-meta">
										<div class="d-lg-flex align-items-center justify-content-between">
											<a href="#" class="product-title">Men’s Nike T-Shirt</a>
											<ul class="style-none d-flex rating">
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star-fill"></i></li>
												<li><i class="bi bi-star"></i></li>
											</ul>
										</div>
										<div class="price">$23.99</div>
									</div> <!-- /.product-meta -->
								</div> <!-- /.product-block-two -->
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /.shop-new-collection-section -->
			
@endsection