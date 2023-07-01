<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>AAMLOK | HOME</title>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,100,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css"/>
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css"/>
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css"/>
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css"/>
	<link rel="stylesheet" type="text/css" href="css/owl.transitions.css"/>
	<link rel="stylesheet" type="text/css" href="css/owl.theme.css"/>
	<link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.css"/>
	<link rel="stylesheet" type="text/css" href="css/theme.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="css/responsive.css" media="all"/>
</head>

<body>
    @if (session()->has('success'))
        @component('components.notify-msg', ['class' => 'bg-success'])
          @slot('message')
            {{ session('success') }}
          @endslot
        @endcomponent
    @endif
        <div class="wrap">
            <div id="header">
                <div class="header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-12 col-xs-12">
                                <div class="logo">
                                    <a href="{{ url('/') }}"><img src="images/home_3/logo.png" alt="" /></a>
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
                                                                    <input type="text"  name="search_query" value="Search..." onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue"  />
                                                                    <input type="submit" value="" />
                                                                </form>
                                                            </div>
                                                        </div>
                                                </li>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
@php
$count = $cartProduct->count();
$total = $cartProduct->sum('selling_price');
@endphp
<div id="content">
    <div class="container">
        <table id="cart" class="table table-hover table-condensed  border-collapse:">

            <thead>
                <tr>
                    <th style="width:10%">Image</th>
                    <th style="width:10%">Product Name</th>
                    <th style="width:10%">Price</th>
                    <th style="width:10%">Remove</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($cartProduct as $product)
                    <tr>
                        <td>
                            <a class="product-image" href="{{ route('details', ['product' => $product]) }}">
                                <img width="80" height="90" alt="" src="{{ asset('storage/'.$product->primary_image) }}">
                            </a>
                        </td>
                        <td style="vertical-align: middle;">
                            <h4> <a href="{{ route('details', ['product' => $product]) }}">{{ $product->title }}</a></h4>
                        </td>
                        <td style="vertical-align: middle;">

                            <span class="price">₹{{ $product->selling_price }}</span>
                        </td>
                        <td style="vertical-align: middle;">

                            <a class="btn btn-danger btn-sm remove-from-cart" href="{{ route('unfill.cart', ['product' => $product ]) }}"><i class="fa fa-trash-o"></i></a>
                        </td>
                        @empty
                        <p>No Product in Cart</p>
                    </tr>
                @endforelse
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" class="text-right"><h3><strong>Total ₹{{ $total }}</strong></h3></td>
                </tr>
                <tr>
                    <td colspan="5" class="text-right">
                        <a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                        <a class="btn btn-success" href="{{route('userdetails')}}">Checkout</a>
                    </td>
                </tr>
            </tfoot>

        </table>
    </div>
</div>

<script src="{{ asset('seller/js/jquery-3.3.1.min.js') }}"></script>
<script>
$(".notification").animate({right: '40px'});
        setTimeout(function(){
        $('.notification').slideUp(1000)}, 2500);
</script>
<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="js/jquery.hoverdir.js"></script>
<script type="text/javascript" src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/jquery.jcarousellite.js"></script>
<script type="text/javascript" src="js/theme.js"></script>
</div>
</body>
</html>
