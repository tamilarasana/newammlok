<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AAMLOK | SHIPPING</title>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.transitions.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.css" />
    <link rel="stylesheet" type="text/css" href="css/theme.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" media="all" />
</head>

<body>

    <div class="wrap">
        <div id="header">
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="logo">
                                <a href="{{ url('/') }}"><img src="images/home_2/Aamlok logopng.png" width="160px" height="57px" alt="" /></a>
                                {{-- <a href="{{ url('/') }}"><img src="images/home_3/logo.png" alt="" /></a> --}}
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-2">
                                    <nav class="main-nav main-nav3">
                                        <ul class="list-inline text-right">
                                            <li>
                                                <div class="top-search search-box">
                                                    <div class="search-form search-form3">
                                                        <form action="{{ route('search') }}" method="get">
                                                            <input type="text" name="search_query" value="Search..."
                                                                onfocus="if (this.value==this.defaultValue) this.value = ''"
                                                                onblur="if (this.value=='') this.value = this.defaultValue" />
                                                            <input type="submit" value="" />
                                                        </form>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><a href="{{ route('listing') }}">PRODUCTS</a></li>
                                            @guest
                                                <li><a href="{{ route('login') }}">LOGIN </a></li>
                                            @endauth
                                            @if (auth()->user())
                                                <li><a href="{{ route('home') }}">{{ auth()->user()->name }}</a>
                                                </li>
                                                <li><a href="{{ route('logout') }}">Logout</a></li>
                                            @endauth
                                    </ul>
                                    <a href="#" class="btn-mobile-menu"></a>
                                </nav>
                            </div>
                            @if (auth()->user())
                            @endif
                        </div>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header -->
    <div id="content">
        <div class="container">
            <p class = "text-justify">
                <h1>Shipping</h1>
                <h3>Free Shipping Pan India</h3>
                <ul>
                    <li>Rs 0 is what we would be charging you as our delivery charges.</li>
                    <li> Domestic orders will be delivered within 4-6 days.</li>
                </ul>               
                <h3>Order Tracking</h3>
                <p class = "text-center">
                    An Airway Bill number (AWB no) would be provided with every order along with the details of our
                logistic partner which could be used to track the order anytime.<p>
            </p>
        </div>
    </div>
    <!-- End Content -->
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