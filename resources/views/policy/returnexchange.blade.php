<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AAMLOK | RETURN & EXCHANGE</title>
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
                <h3><b>Returns & Exchanges</b></h3>
                <span style="text-align: center"><h4><b>RETURNS & EXCHANGES</b></h4></span>
                <ul>
                    <li>
                        All queries related to Exchanges & Returns would be addressed via mail i.e
                        aamlokfashions@gmail.com . No request would be entertained on the telephone.
                    </li>
                    <br>
                    <li>
                        If you wish to exchange or return your product <u>please contact us ( e-mail) within 2 days
                        of receiving your product at aamlokfashions@gmail.com .</u>
                    </li>
                    <br>
                    <li>
                        A delivery fee is deducted at the time of refunds/ returns.
                    </li>
                    <br>
                    <li>
                        We are unable to offer refunds if we’ve been given an incorrect or incomplete shipping
                        address, or if there are three failed delivery attempts by our shipping agency and/or the
                        package is refused by the recipient.(In case of prepaid payments)
                    </li>
                    <br>
                    <li>
                        We only accept a size exchange for our products.
                    </li>
                    <br>
                    <li>
                        Payment Refunds are only applicable only if incorrect product or incorrect size is
                        delivered.
                    </li>
                </ul>

<h3><b>PROCESS</b></h3>
<span style="  padding-left: 7em;">For returning or exchanging any of the items purchased, please contact our care team within 48
hours of delivery with the following information:
<br>
- Order number
<br>
- Delivery address
<br>
- Specify the reason for return and in case of a defective or incorrect product, please send us an
image of the item.
<br><br>
-We will arrange a reverse pickup for the same.
<br><br>
-On receiving the product we will dispatch the new product within 2 Days.
<br><br>
You may contact us via email at <b>aamlokfashions@gmail.com.</b> We will look into the issue and
respond to you within 24 working hours.
<br><br>
Please ensure that the product you return is unused, unworn, unstained and the original tags and
labels are intact.
<br><br><br>

** No Exchange(s) or Return(s) of any kind would be entertained for products under the Sale
section.</span>
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