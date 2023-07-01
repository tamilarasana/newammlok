
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
    
	@section('title')
AAMLOK | LISTING
@endsection
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>AAMLOK | LISTING</title>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,100,700' rel='stylesheet' type='text/css'/>
	<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'/>
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css"/>
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/owl.theme.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="css/custom.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="css/theme-default.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="css/responsive.css" media="all"/>

	<link rel="stylesheet" type="text/css" href="css/theme.css" media="all"/>

    
</head>
<body>
@if (session()->has('success'))
    @component('components.notify-msg', ['class' => 'bg-success'])
      @slot('message')
        {{ session('success') }}
      @endslot
    @endcomponent
@endif
@if (session()->has('success'))
    @component('components.notify-msg', ['class' => 'bg-success'])
      @slot('message')
        {{ session('success') }}
      @endslot
    @endcomponent
@endif

		<div class="header">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-12 col-xs-12">
						<div class="logo">
							<a href="{{ url('/') }}"><img src="images/home_2/Aamlok logopng.png" width="160px" height="57px" alt="" /></a>
						</div>
						
					</div>
					<div class="col-md-9 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-2">
								<nav class="main-nav main-nav3">
									<ul class="list-inline text-right">
										<li><a href="{{ url('/') }}">Home</a></li>
										<li><a href="{{ route('listing') }}">PRODUCTS</a></li>
										@guest
											<li><a href="{{ route('login') }}">LOGIN </a></li>
										@endauth
										@if(auth()->user())
											<li><a href="{{ route('home') }}">{{ auth()->user()->name }}</a></li>
											<li><a href="{{ route('logout') }}">Logout</a></li>
										@endauth

									</ul>
									<a href="#" class="btn-mobile-menu"></a>
									
								</nav>
							</div>
							
							@if (auth()->user())
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="shop-cart-box block-cart box col-lg-12 col-sm-12 col-12 main-section">
									<a href="{{route('cart')}}">
										<img src="images/home_3/icon-cart.png" alt="" />
										@php
										$count = $cartProduct->count();
										$total = $cartProduct->sum('selling_price');
										@endphp
										<sup>{{ $count }}</sup>
										<span>shopping Cart</span>
									</a>
									</div>
								</div>
							</div>
							@endif
						</div>
					</div>
				</div>	
			</div>		
		<div class="header-bottom">
			<div class="container">
				<div class="row">
					<div class="grid--full">
						<div class="grid--full medium-down--hide">
							<div class="grid__item">
								<nav class="main-nav main-nav3">
									<ul class="list-inline text-center ">
										<li>
											<div class="list-cat-scrollbar ">
												<div class="row">
													@forelse ($category as $cat)
													<li><a href="{{ route('listing', ['category_id' => $cat->id]) }}">{{ $cat->category }}</a></li>
													@empty
													<li><h4>No Data Found</h4>
													@endforelse
												</div>
											</div>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



<div class="wrap">
	<header id="header" class="header-page">
		<div class="container">
		</div>
	</header>
	<div id="content">
		<div class="main">
			<div class="container">
				<div class="row">
					<div class="col-left sidebar col-lg-3 col-md-3 col-sm-4 col-xs-12">
						<div class="inner-left">
							<div class="block block-layered-nav">
								<div class="block-title">
									<strong><span>Shop By</span></strong>
								</div>
								<dl id="narrow-by-list">
									<dt class="first">Category</dt>
									<dd class="cust-scroll">
										<ol>
											@forelse ($categories as $cat)
											<li><a href="{{ route('listing', ['category_id' => $cat->id]) }}">{{ $cat->category }}</a></li>
											@empty
                                            <li><h4>No Data Found</h4>
                                            @endforelse
										</ol>
									</dd>
									{{-- <dt>Price</dt> --}}
									{{-- <dd class="block-price">
										<div class="price">
										 
											<form action="{{ route('search.price') }}" method="GET">
                                                <div class="text-box">
                                                        <div class="price-from">
                                                            <span>₹</span>
                                                            <input type="text" name="min" id="minPrice" class="priceTextBox pl" value="">
                                                        </div>
                                                        <div class="price-to">
                                                            <input type="text" name="max" id="maxPrice" class="priceTextBox pr" value="">
                                                        </div>
                                                        <button class="go" type="submit">Go</button>
                                                </div>
                                            </form>
										</div>
									</dd> --}}
									<dt>Color</dt>
									<dd class="cust-scroll">
										<ol>
											@forelse ($colors as $color)
											<li><a href="{{ route('listing', ['color_id' => $color->id]) }}">{{ $color->color }}</a></li>
											@empty
                                            <li><h4>No Data Found</h4></li>
                                            @endforelse
										</ol>
									</dd>
									<dt>Size</dt>
									<dd class="cust-scroll">
										<ol>
											@forelse ($sizes as $size)
											<li><a href="{{ route('listing', ['size_id' => $size->id]) }}">{{ $size->size }}</a></li>
											@empty
                                            <li><h4>No Data Found</h4></li>
                                            @endforelse
										</ol>
									</dd>
									<dt>Brand</dt>
									<dd class="cust-scroll">
										<ol>
											@forelse ($brands as $brand)
											<li><a href="{{ route('listing', ['brand_name' => $brand->id]) }}">{{ $brand->brand }}</a></li>
											@empty
                                            <li><h4>No Data Found</h4></li>
                                            @endforelse
										</ol>
									</dd>
								</dl>
							</div>
							<div class="block block-special vt-slider">
							</div>
							<!--block-special-->
						</div>
					</div>
					<div class="col-main col-lg-9 col-md-9 col-sm-8 col-xs-12">
						<div class="box-breadcrumbs">
							<div class="breadcrumbs">
								<ul>
									<li class="home">
										<a href="index.html" title="Go to Home Page">Home</a>
										<span>|</span>
									</li>
									<li>
										<a href="{{ route('listing') }}">Listing</a>
									</li>
								</ul>
							</div>
						</div>
						<div id="catalog-listing">
							<div class="category-products">
								<div class="toolbar-top">
									<div class="toolbar col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="box-top col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="sort-by col-lg-8 col-md-8 col-sm-8 col-xs-8">
												<ul class="select-order">
													<li><a href="#auto-accessories.html?dir=asc&amp;order=price">Price</a></li>
													<li><a class="" href="{{ route('listing', ['sort_up']) }}"><i class="fas fa-sort-alpha-down"></i></a></li><li><a class="" href="{{ route('listing', ['sort_down']) }}"><i class="fas fa-sort-alpha-up"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<ul class="products-grid">
									@forelse($products as $product)
									<li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item">
										<div class="inner" >
											<div class="item-image">
												<div class="item-image-inner">
													<a class="product-image" href="detail.html">
                                                        <img src="{{ asset('storage/'.$product->primary_image) }}"  width="70" height="90" alt="">
													</a>
													<div class="item-btn">
														<div class="btn-wqc">
															<a href="{{ route('fill.wish', ['product' => $product]) }}" class="link-wishlist"></a>
															<a class="vt_quickview_handler" href="#"><span>Quick View</span></a>
															<a href="#" class="link-compare"></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-info">
												<div class="product-name">
													<a href="{{ route('details', ['product' => $product]) }}">{{ $product->title }}</a>
												</div>
												<div class="rating">
													<div class="ratings">
														<div class="rating-box">
															<div class="rating" style="width:80%"></div>
														</div>
													</div>
													<p class="rating-links">
														<a href="#">1 (vote)</a>
														<span class="separator">|</span>
														<a class="re-temp" href="">Add Review</a>
													</p>
												</div>
												<div class="wrap-ns-price">
													<div class="price-box">
														<p class="special-price">
															<span class="price">₹ {{ $product->selling_price }}  </span>
														</p>
														<p class="old-price">
															<span class="price">$200</span>
														</p>
													</div>
													{{-- <div class="wrap-new-sale">
														<div class="sale-item">60%</div>
														<div class="new-item">new</div>
													</div> --}}
												</div>
											</div>
											<div class="wrap-btn-cart">
                                                <div class="inner-wrap-btn-cart">
                                                    <a href="{{ route('fill.cart', ['product' => $product ]) }}" class="btn-cart"><span>Add to cart</span></a>
												</div>
											</div>
										</div>
									</li>
                                    @empty
                                        <h1 class="text-center">No Product Available</h1>
                                    @endforelse
								</ul>
								<div class="toolbar-bottom">
								
										</div>
										
									</div>
                                    {{ $products->links() }}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-12 col-xs-12">
						<div class="left-footer">
							<div class="logo-footer logo-footer2">
								<a href="#"><img src="images/home_2/aamloklogo.jpg"  width="150px"  height="57" alt="" /></a>

							</div>
							<div class="contact-footer">
								<h2 class="title-footer">Contact Us</h2>
								<p><i class="fa fa-home"></i>Dw-5 Omaxe Royal Residency, Ludhiana, Punjab . 142022</p>
								<p><i class="fa fa-tablet"></i> +91 99101 97553</p>
								<p><i class="fa fa-envelope"></i> support@aamlok.com</p>
							</div>
						</div>
					</div>
					<div class="col-md-8 col-sm-12 col-xs-12">
						<div class="right-footer">
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="box-footer-menu">
										<h2 class="title-footer">ABOUT US</h2>
										<ul class="menu-footer-default">
											<li><a href="{{ route('about') }}">About Us</a></li>
											<li><a href="{{ route('termscondition') }}">Terms and Conditions</a></li>
											<li><a href="{{ route('privacypolicy') }}">Privacy Policy</a></li>
											<li><a href="{{ route('returnexchange') }}">Return & Exchange</a></li>
											<li><a href="{{ route('shipping') }}">Shipping Policy</a></li>
											<li><a href="{{ route('contact') }}">Contact Us</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-7 col-xs-12">
						<p class="info-copyright">Aamlok © 2022 All Rights Reserved. </p>
						<p class="info-copyright">Designed by Aamlok</p>
					</div>
				</div>
			</div>
		</div>
   </div>
	<!-- End Footer -->
    <script src="{{ asset('seller/js/jquery-3.3.1.min.js') }}"></script>
    <script>
    $(".notification").animate({right: '40px'});
            setTimeout(function(){
            $('.notification').slideUp(1000)}, 2500);
    </script>
	<script src="https://kit.fontawesome.com/7ca433db62.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/theme.js"></script>
</div>
</body>
</html>



