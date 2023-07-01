<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AAMLOK | PRIVACY POLICY</title>
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
               <h3><b> Introduction</b></h3>
               <span style="  padding-left: 7em;">This privacy policy (“Policy”) sets out how Aamlok . (“Aamlok”, also identified by “we” or “us” or “our” )
uses and protects any information that you give us when you use this website/ mobile application
(individually and collectively, “Platform” ).</span>
<br><br>

Aamlok is committed to ensuring that your privacy is protected. Should we ask you to provide any
information by which you can be identified when using this Platform, be rest assured that it will only be
used strictly in accordance with this Policy.
<br><br>

Please note that our Policy is subject to change at any time, and we may not be able to provide you prior
notice. To ensure you are up to date with the Policy, please review this page periodically. This Policy
applies to current and former visitors and customers of our Platform. By visiting and/or using our
Platform, you are accepting and consenting to the practices described in this Policy.
<br><br>
<h3><b>What information do we collect?</b></h3>
<br>
<span style="  padding-left: 7em;">We learn, collect, and store your personal information (that we consider necessary) when you use our
Platform. We use this information to provide you with a safe, efficient, smooth, and customised
experience, which includes, without limitation, displaying content such as recommended products that
might interest you and communicating with you about your orders, new products, and latest promotional
offers. This allows us to provide specific services and features that most likely meet your needs,
customise our Platform to make your experience safer and easier, and enable third parties to carry out
technical, logistical, and other functions on our behalf.
<br>

Here are the types of information we gather:</span>
<br>
<h3><b>1) Information you provide us</b></h3>
<br>
<span style="  padding-left: 7em;">We receive and store the information you explicitly provide to us. This includes personal information such
as your user name along with your password, your name, address, telephone number, e-mail address
and other contact information, date of birth, gender, financial information such as bank account
information, credit/debit card or other payment instrument details and any other information that you
provide during your time on the Platform. You may choose not to provide certain information, but this
could prevent you from taking full advantage of our Platform’s various features.</span>
<br>

<h3><b>2) Information collected automatically</b></h3>
<br>
<span style="  padding-left: 7em;">Whenever you interact with our Platform, we automatically receive, record, and analyse information from
your browser or device, which includes, without limitation, your IP address, geolocation data, device
identification, “cookie” information, the type of browser and/or device you’re using to access our Platform,
information about your mobile device, including a unique identifier for your device and purchase history;
which we sometimes aggregate with similar information from other customers to create features such as
best-selling products, products you viewed or searched for, products you may like. We may also use
browser data such as cookies, flash cookies, or similar data on certain parts of our Platform. We may use
software tools such as JavaScript to measure and collect session information, including page response
times, download errors, length of visits to certain pages, page interaction information (such as scrolling,
clicks, and mouse-overs), and methods used to browse away from the page. We use this information for
internal analysis and to provide you with location-based services, such as advertising, search results,
and other personalised content, to give you the best possible shopping experience on our Platform.
</span><br>
<h3><b>3) Information from other sources</b></h3>
<br>
<span style="  padding-left: 7em;">We may receive information about you from third parties, such as social media services, commercially
available sources, and business partners. If you access our Platform through a social media service or
connect a service on our Platform to a social media service, the information we collect may include but is
not limited to your user name, profile picture, email address, friends list and any other information
associated with that social media service, which the social media service has the right to share with us
and any other information or content you have made public in connection with that social media service.
<br><br>
Whenever you access the Platform or contact us through social media services, you authorise us to
collect, store, analyse and use such information in accordance with this Policy.</span>
<br>
<h3><b>How do we use cookies?</b></h3> 
<br>
<span style="  padding-left: 7em;">A cookie is a small file that we, after obtaining your permission, transfer to your computer’s hard drive
through your web browser. This file helps us recognise your browser and respond to you as an
individual, as well as provide personalised features and advertisements based on your needs, likes,
dislikes and behaviour on our Platform.
<br><br>

You can choose to accept or decline cookies. The help menu on most browsers will tell you how to
prevent the browser from accepting new cookies and deleting/ disabling existing cookies. However,
disabling/ deleting our cookies could prevent you from taking full advantage of our Platform’s various
features.</span>
<br>
<h3><b>Do we share the information we receive?</b></h3> 
<br>

<span style="  padding-left: 7em;">Respecting customers’ privacy is not only an important part of our business but one of the core
philosophies of our organisation. We never have and never will commercially exploit such information by
selling it to third parties. We share customer information only as described below, and in no other
manner:</span>
<br>
<h3><b>1) Third-party service providers</b></h3> 
<br>
<span style="  padding-left: 7em;">We employ other companies and individuals to perform some functions on our behalf. These functions
include but are not limited to fulfilling orders, delivering packages, analysing customer data, providing
marketing assistance, providing search results and links, and processing payments. For optimum
fulfilment of these functions, they have access only to such customer information as is needed to perform
their functions, and are contractually bound to not use it for any other purpose.</span>
<br>
<h3><b>2) Compliance with law</b></h3> 
<br>

<span style="  padding-left: 7em;">We may be required to share customer information with government authorities and agencies for the
purposes of verification of identity or for prevention, detection or investigation, including of cyber
incidents, prosecution, and punishment of offences. Further, we may release account and other personal
information when we believe release is appropriate to enforce or apply our Terms of Use and other
agreements; or protect the rights, property or safety of Aamlok, our users or others. This includes
exchanging information with other companies, organisations, government or regulatory authorities for
fraud protection and credit risk reduction.</span>
<br>
<h3><b>3) Business transfers</b></h3> 
<br>
<span style="  padding-left: 7em;">As we develop our business, we might sell or buy stores, subsidiaries, or business units. In such
transactions, all information, including personal information collected and stored by us may be disclosed
and otherwise transferred to an acquirer, or successor or assignee as part of any merger, acquisition,
debt financing, sale of company assets, or similar transaction, as well as in the event of an insolvency,
bankruptcy, or receivership in which all such information is transferred to one or more third parties as one
of our business assets.</span>
<br>
<h3><b>4) With your consent</b></h3> 
<br>

<span style="  padding-left: 7em;">Other than as set out above, you will receive notice when information about you might go to third parties
and you will have the option to choose whether or not you’d like such information to be shared.
</span>
<br>
<h3><b>Is your information secure?</b></h3>
<br>
<span style="  padding-left: 7em;">In one word, absolutely. The security of your information is very important to us. We use adequate
security policies, rules, and technical measures, as required under applicable law, to safeguard and
protect your information from unauthorised access, improper use or disclosure, unauthorised
modification, and unlawful destruction or accidental loss.
<br>
However, we shall not be responsible for any breach of security or for any action of any third parties that
receive users’ personal data or events that are beyond our reasonable control including acts of
government, computer hacking, unauthorised access to computer data and storage devices, computer
crashes, breach of security and encryption, etc.</span>
<br>
<h3><b>What about links to other websites?</b></h3>
<br>
<span style="  padding-left: 7em;">Our Platform may contain third-party advertising and links to other websites. Once you use these links to
leave our Platform, we do not have any control over that website. Hence, any information you share
whilst visiting such sites is not governed by this Policy and we would not be responsible for the
protection/ privacy of such information.</span>
<br>
<h3><b>What choices do you have?</b></h3>

<span style="  padding-left: 7em;">1) You can add, correct, update, modify or review your personal information on a regular basis. However,
whenever you update information, we usually keep a copy of the previous version for our records.</span>
<br><br>
<span style="  padding-left: 7em;">2) If you do not want to receive emails or messages from us, please get in touch with our customer care
team to de-list your e-mail ID.</span>
<br><br>

<span style="  padding-left: 7em;">3) You can choose to not provide your personal information or consent for usage of your personal
information, subsequently withdraw your consent or ask for deletion of your personal information.
However, this might not allow you to take full advantage of the features of our Platform.</span>
<br>
<h3><b>Who should I contact with my grievances regarding this Privacy Policy?</b></h3>
<span style="  padding-left: 7em;">If you have any questions or feedback regarding this Policy, you may contact us using the information
below:</span>
<br><br>
Name: Satjeet Singh
<br><br>
Email: aamlokfashions@gmail.com
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