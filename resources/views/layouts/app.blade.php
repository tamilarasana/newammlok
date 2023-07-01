<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravelss') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/font-awesome-4.1.0/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
</head>

<body class="home-page">
<div class="wrap">
    <header id="header" class="header-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div class="logo">
                        <a href="{{ url('/') }}"><img src="images/home_1/logo.png" alt="" /></a>
                    </div>
                </div>
				<div class="search-form">
					<form action="{{ route('search') }}" method="get">
						<input type="text" name="search_query" value="" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue"  />
						<input type="submit" value="" />
					</form>
				</div>
            </div>
            <div class="top-nav">
                <div class="row">
                    <div class="col-md-10 col-sm-12 col-xs-6">
                        <nav class="main-nav">
                            <ul class="list-inline">
                                <li class="menu-item-has-children">
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
								<li class="has-mega-menu">
									<a href="#">Men</a>
									<ul class="sub-menu">
										<li>
											<div class="wrap-mega-menu">
												<div class="row">
													<div class="col-md-3 col-sm-3 col-xs-12">
														<div class="mega-menu-slider-brand">
															<h2>Style-Brands</h2>
															<div class="wrap-item">
																<div class="item">
																	<div class="inner-brand">
																		<h5>Style-Brands</h5>
																		<ul>
																			<li><a href="#">Tops</a></li>
																			<li><a href="#">Sweaters</a></li>
																			<li><a href="#">Bottoms</a></li>
																			<li><a href="#">Dresses</a></li>
																			<li><a href="#">Coats &amp; Jackets</a></li>
																			<li><a href="#">Scarves</a></li>
																			<li><a href="#">Pants</a></li>
																		</ul>
																	</div>
																</div>
																<div class="item">
																	<div class="inner-brand">
																		<a href="#"><img src="images/banner/logo-brand-01.png" alt=""/></a>
																		<a href="#"><img src="images/banner/logo-brand-03.png" alt=""/></a>
																		<a href="#"><img src="images/banner/logo-brand-02.png" alt=""/></a>
																	</div>
																</div>
																<div class="item">
																	<div class="inner-brand">
																		<a href="#"><img src="images/banner/logo-brand-02.png" alt=""/></a>
																		<a href="#"><img src="images/banner/logo-brand-03.png" alt=""/></a>
																		<a href="#"><img src="images/banner/logo-brand-01.png" alt=""/></a>
																	</div>
																</div>
															</div>
															<div class="owl-direct-nav">
																<a class="prev" href="#"><i class="fa fa-arrow-circle-left"></i></a>
																<a class="next" href="#"><i class="fa fa-arrow-circle-right"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
                                <li class="has-mega-menu">
                                    <a href="{{ route('listing') }}">Listing</a>
                                </li>
                            <a href="#" class="btn-mobile-menu"></a>
                        </nav>
                        <!-- End Nav -->
                    </div>
                    <div class="col-md-2 col-sm-12 col-xs-6">
						<div class="header-info">
							<div class="box-account-lc box">
								<a href="#" class="link-user-top"><img src="images/home_1/icon-user.png" alt="" /></a>
								<div class="box-inner">
									<ul class="links">
        								@guest
										<li class="first"><a href="{{ route('login') }}" class="link-user-top">Login</a></li>
										<li><a href="{{ route('register') }}" class="link-cart-top">Register </a></li>
										@endauth
        								@if(auth()->user())
										<li><a href="{{ route('home') }}" class="link-user-top">{{ auth()->user()->name }}</a></li>
										@endauth
									</ul>
								</div>
							</div>
						</div>
						<!-- End Header Info -->
					</div>
                </div>
            </div>
        </div>
    </header>

    <div id="content">
        @yield('content')
    </div>
    <footer id="footer">
		<div class="footer-newsletter">
			<div class="container">
				<div class="newsletter-intro">
					<span class="envalope-icon"><i class="fa fa-envelope-o"></i></span>
					<p>SUBSCRIBE TO OUR NEWSLETTER TO RECEIVE NEWS, <br/>UPDATES, AND ANOTHER STUFF BY EMAIL.</p>
				</div>
				<div class="newsletter-form">
					<form method="post">
						<input type="text" name="newsletter" value="Enter your email..." onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue"  />
						<input type="submit" value="subscribe" />
					</form>
				</div>
			</div>
		</div>
		<!-- End Newsletter -->
		<div class="footer-quick-search">
			<div class="container">
				<div class="content-quick-search">
					<label>Quick link:</label>
					<a href="#">#</a>
					<a href="#">A</a>
					<a href="#">B</a>
					<a href="#">C</a>
					<a href="#">D</a>
					<a href="#">E</a>
					<a href="#">F</a>
					<a href="#">G</a>
					<a href="#">H</a>
					<a href="#">I</a>
					<a href="#">J</a>
					<a href="#">K</a>
					<a href="#">L</a>
					<a href="#">M</a>
					<a href="#">N</a>
					<a href="#">O</a>
					<a href="#">P</a>
					<a href="#">Q</a>
					<a href="#">R</a>
					<a href="#">S</a>
					<a href="#">U</a>
					<a href="#">V</a>
					<a href="#">W</a>
					<a href="#">X</a>
					<a href="#">Y</a>
					<a href="#">Z</a>
				</div>
			</div>
		</div>
		<!-- End Quick Search -->
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-sm-6 col-xs-12">
						<div class="logo-footer"><a href="#"><img src="images/home_1/logo.png" alt="" /></a></div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="copy-right">
							<p>© 2015        <a href="#" class="privacy-policy">Privacy Policy</a></p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="contact-footer">
							<p>My Company , Glasgow D04 89GR<br/>Call us now: 800-2345-6789</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="social-footer">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-rss"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->
	<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/theme.js"></script>
</div>
</body>
</html>
