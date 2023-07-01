@extends('layouts.master')
@section('title')
AAMLOK | HOME
@endsection
@section('content')
	<div class="wrap">
		<div id="header">
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
                                            <li>
                                                {{-- <div class="col-md-6 col-sm-6 col-xs-12 search-hidden-custom"> --}}
                                                    <div class="top-search search-box">
                                                        {{-- <div class="search-cat">
                                                            <a href="#" class="box-cat-toggle">Sub Categories</a>
                                                            <div class="list-cat-scrollbar">
                                                                <ul>
                                                                    @foreach ($subCategory as $item)
                                                                        <li><a href="{{ route('listing', ['sub_category_id' => $item->id]) }}">{{ $item->sub_category }}</a></li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div> --}}
                                                        <div class="search-form search-form3">
                                                            <form action="{{ route('search') }}" method="get">
                                                                <input type="text"  name="search_query" value="Search..." onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue"  />
                                                                <input type="submit" value="" />
                                                            </form>
                                                        </div>
                                                    </div>
                                                {{-- </div> --}}
                                            </li>

											{{-- <li class="menu-item-has-children">
												<a href="#" class="active">Home</a>
												<ul class="sub-menu">
													<li><a href="home1.html">Home 1</a></li>
													<li><a href="home2.html">Home 2</a></li>
													<li><a href="home3.html">Home 3</a></li>
													<li><a href="list.html">List</a></li>
													<li><a href="grid.html">Grid</a></li>
													<li><a href="detail.html">Detail</a></li>
												</ul>
											</li>
											<li class="has-mega-menu">
												<a href="#">CORSSBODY <sup class="new-label">new</sup></a>
												<ul class="sub-menu">
													<li>
														<div class="wrap-mega-menu">
															<div class="mega-menu-list-product">
																<h2 class="title-mega-menu">Collection</h2>
																<div class="wrap-item">
																	<div class="item">
																		<div class="inner-item">
																			<div class="mega-slide-thumb">
																				<a href="#"><img src="images/product_home1/1.jpg" alt="" /></a>
																			</div>
																			<div class="mega-slide-text">
																				<span>$45.99</span>
																				<del>$69.71</del>
																			</div>
																		</div>
																	</div>
																	<div class="item">
																		<div class="inner-item">
																			<div class="mega-slide-thumb">
																				<a href="#"><img src="images/product_home1/3.jpg" alt="" /></a>
																			</div>
																			<div class="mega-slide-text">
																				<span>$45.99</span>
																			</div>
																		</div>
																	</div>
																	<div class="item">
																		<div class="inner-item">
																			<div class="mega-slide-thumb">
																				<a href="#"><img src="images/product_home1/8.jpg" alt="" /></a>
																			</div>
																			<div class="mega-slide-text">
																				<span>$45.99</span>
																				<del>$69.71</del>
																			</div>
																		</div>
																	</div>
																	<div class="item">
																		<div class="inner-item">
																			<div class="mega-slide-thumb">
																				<a href="#"><img src="images/product_home1/9.jpg" alt="" /></a>
																			</div>
																			<div class="mega-slide-text">
																				<span>$45.99</span>
																			</div>
																		</div>
																	</div>
																	<div class="item">
																		<div class="inner-item">
																			<div class="mega-slide-thumb">
																				<a href="#"><img src="images/product_home1/10.jpg" alt="" /></a>
																			</div>
																			<div class="mega-slide-text">
																				<span>$45.99</span>
																				<del>$69.71</del>
																			</div>
																		</div>
																	</div>
																	<div class="item">
																		<div class="inner-item">
																			<div class="mega-slide-thumb">
																				<a href="#"><img src="images/product_home1/11.jpg" alt="" /></a>
																			</div>
																			<div class="mega-slide-text">
																				<span>$45.99</span>
																			</div>
																		</div>
																	</div>
																	<div class="item">
																		<div class="inner-item">
																			<div class="mega-slide-thumb">
																				<a href="#"><img src="images/product_home1/12.jpg" alt="" /></a>
																			</div>
																			<div class="mega-slide-text">
																				<span>$45.99</span>
																			</div>
																		</div>
																	</div>
																	<div class="item">
																		<div class="inner-item">
																			<div class="mega-slide-thumb">
																				<a href="#"><img src="images/product_home1/14.jpg" alt="" /></a>
																			</div>
																			<div class="mega-slide-text">
																				<span>$45.99</span>
																				<del>$69.71</del>
																			</div>
																		</div>
																	</div>
																	<div class="item">
																		<div class="inner-item">
																			<div class="mega-slide-thumb">
																				<a href="#"><img src="images/product_home1/18.jpg" alt="" /></a>
																			</div>
																			<div class="mega-slide-text">
																				<span>$45.99</span>
																				<del>$69.71</del>
																			</div>
																		</div>
																	</div>
																	<div class="item">
																		<div class="inner-item">
																			<div class="mega-slide-thumb">
																				<a href="#"><img src="images/product_home1/21.jpg" alt="" /></a>
																			</div>
																			<div class="mega-slide-text">
																				<span>$45.99</span>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="owl-direct-nav">
																	<a class="prev" href="#"><i class="fa fa-arrow-circle-left"></i></a>
																	<a class="next" href="#"><i class="fa fa-arrow-circle-right"></i></a>
																</div>
															</div>
															<!-- End Sub Mega Menu Slide-->
															<div class="mega-menu-simple-banner text-inner">
																<div class="mega-menu-simple-thumb">
																	<a href="#"><img src="images/home_1/mega-menu-banner.png" alt="" /></a>
																</div>
																<div class="mega-menu-simple-text">
																	<p class="simple-text1">big sale on canifa shop</p>
																	<p class="simple-text2">up to<br/>80% off</p>
																</div>
															</div>
															<!-- End Mega Menu Simple Banner -->
														</div>
													</li>
												</ul>
											</li>
											<li class="has-mega-menu">
												<a href="#">SATCHEL TOTES <sup class="new-label">new</sup></a>
												<ul class="sub-menu">
													<li>
														<div class="wrap-mega-menu">
															<div class="row">
																<div class="col-md-6 col-sm-6 col-xs-12">
																	<div class="mega-menu-simple-banner text-outer">
																		<div class="mega-menu-simple-thumb">
																			<a href="#"><img src="images/home_1/mega-menu-women.png" alt="" /></a>
																		</div>
																		<div class="mega-menu-simple-text">
																			<p class="mega-menu-text-intro"><strong>Women fashion</strong>  <span>|  Lorem ipsum dolor sit amet</span></p>
																		</div>
																	</div>
																	<!-- End Mega Menu Simple Banner -->
																</div>
																<div class="col-md-3 col-sm-3 col-xs-12">
																	<div class="mega-menu-list-category">
																		<h2>Categories</h2>
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
																<div class="col-md-3 col-sm-3 col-xs-12">
																	<div class="mega-menu-slider-brand">
																		<h2>Style-Brands</h2>
																		<div class="wrap-item">
																			<div class="item">
																				<div class="inner-brand">
																					<a href="#"><img src="images/banner/logo-brand-01.png" alt=""/></a>
																					<a href="#"><img src="images/banner/logo-brand-02.png" alt=""/></a>
																					<a href="#"><img src="images/banner/logo-brand-03.png" alt=""/></a>
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
											<li><a href="#">BLOG LIST</a></li>
											<li class="menu-item-has-children"><a href="#"> SHOP <sup class="sale-label">sale</sup></a></li> --}}
                                            <li><a href="{{ route('listing') }}">PRODUCTS</a></li>
                                            @guest
                                                <li><a href="{{ route('login') }}">LOGIN </a></li>
                                            @endauth
                                          	
    											<li><a href="{{ route('	') }}">{{ auth()->user()->name }}</a></li>
    											<li><a href="{{ route('logout') }}">Logout</a></li>
                                            @endauth

										</ul>
										<a href="#" class="btn-mobile-menu"></a>
									</nav>
								</div>
								<!--<div class="col-md-3 col-sm-3 col-xs-10">-->
								<!--	<div class="header-info-box">-->
								<!--		<img src="images/home_3/icon-free-ship.png" alt="" />-->
								<!--		<span>Free shipping</span>-->
								<!--	</div>-->
								<!--</div>-->
								<!--<div class="col-md-6 col-sm-6 col-xs-6">-->
								<!--	<div class="header-info-box text-center">-->
								<!--		<img src="images/home_3/icon-phone.png" alt="" />-->
								<!--		<span>Call Us: (009) 66 55 819 - 080 566 996</span>-->
								<!--	</div>-->
								<!--</div> -->
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
                                                {{-- <a href="#" class="dropdown-toggle"dat-toggle="dropdown">SHIRTS</a> --}}
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
                                            {{-- <li>
                                                <a href="#" >CO-ORDS SET</a>
                                            </li>

                                            <li>
                                                <a href="#" >NEW ARRIVALS</a>
                                            </li>
                                            <li>
                                                <a href="#" >WINTER COLLECTION</a>
                                            </li>
                                            <li>
                                                <a href="#" >KURTAS</a>
                                            </li>
                                            <li>
                                                <a href="#" >COTTON PANTS</a>
                                            </li>
                                            <li>
                                                <a href="#" >NEHRU JACKETS</a>
                                            </li> --}}
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

			{{-- <div class="header-bottom">
				<div class="container">
					<div class="row">
                        <div class="col-md-9 col-sm-12 col-xs-12">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-2">
									<nav class="main-nav main-nav3">
										<ul class="list-inline text-left">
                                            <li>
									            <a href="#" >SHIRTS</a>
                                            </li>
                                            <li>
									            <a href="#" >SHIRTS</a>
                                            </li>
                                            <li>
									            <a href="#" >SHIRTS</a>
                                            </li>
                                            <li>
									            <a href="#" >SHIRTS</a>
                                            </li>
                                            <li>
									            <a href="#" >SHIRTS</a>
                                            </li>
                                        </ul>
                                    </nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> --}}
			<!-- End Header Bottom -->
		</div>

		<!-- End Header -->
		<div id="content">
            <div class="container">
                <div class="header-bottom">
                    <div class="banner-advert">
                        <div class="wrap-item">
                            @foreach ($banners as $banner)
                            <div class="item">
                                <img src="{{ asset('storage/'.$banner->file_path) }}" height="500" width = "100%" alt="">
                                {{-- <img src="{{ url('../storage/app/public/'.$banner->file_path) }}" alt="" /> --}}
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
			{{-- <div class="banner-advert">
				<div class="wrap-item">
					@foreach ($banners as $banner)
					<div class="item">
                        <img src="{{ asset('storage/'.$banner->file_path) }}" height="500" width = "100%" alt="">
					</div>
					@endforeach

				</div>
			</div> --}}
			<!-- End Banner Advert -->
			<div class="product-tab-slider">
				<div class="container">
					<div class="title-tab-slider">
						<ul role="tablist" class="nav nav-tabs">
							<li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="bestsale" href="#bestsale">best sellers</a></li>
							<li role="presentation"><a data-toggle ="tab" role="tab" aria-controls="newarrival" href="#newarrival">New arrivals</a></li>
							<li  role="presentation"><a data-toggle="tab" role="tab" aria-controls="featured" href="#featured">Deals of the day</a></li>
						</ul>
					</div>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="bestsale">
							<div class="content-tab-product single-arrow">
								<div class="wrap-item">
                                    @foreach ($newProduct->where('best_seller', 1) as $product)
									<div class="item">
                                        <div class="item-product product-lower">
                                        	<a href="{{ route('details', ['product' => $product]) }}">
                                            <div class="item-product-thumb item-thumb-product">
                                                <img style="height: 25rem" alt="" src="{{ asset('storage/'.$product->primary_image) }}">
											</div>
											</a>
											<div class="item-product-info">
												<h4 class="title-product">{{ $product->title }}</h4>
												<div class="info-product-price">
													<span>₹ {{ $product->selling_price }}</span> <del>₹ {{ $product->mrp }}</del>
												</div>
											</div>
										</div>
									</div>
                                    @endforeach
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="newarrival">
							<div class="content-tab-product single-arrow">
								<div class="wrap-item">
                                    @foreach ($newProduct->where('new_arrivals', 1) as $product)
									<div class="item">
                                        <div class="item-product product-lower">
                                        	<a href="{{ route('details', ['product' => $product]) }}">
                                            <div class="item-product-thumb item-thumb-product">
                                                <img style="height: 25rem" alt="" src="{{ asset('storage/'.$product->primary_image) }}">
											</div>
											</a>
											<div class="item-product-info">
												<h4 class="title-product">{{ $product->title }}</h4>
												<div class="info-product-price">
													<span>₹ {{ $product->selling_price }}</span> <del>₹ {{ $product->mrp }}</del>
												</div>
											</div>
										</div>
									</div>
                                    @endforeach
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="featured">
							<div class="content-tab-product single-arrow">
								<div class="wrap-item">
                                    @foreach ($newProduct->where('deals', 1) as $product)
									<div class="item">
                                        <div class="item-product product-lower">
                                        	<a href="{{ route('details', ['product' => $product]) }}">
                                            <div class="item-product-thumb item-thumb-product">
                                                <img style="height: 25rem" alt="" src="{{ asset('storage/'.$product->primary_image) }}">
											</div>
											</a>
											<div class="item-product-info">
												<h4 class="title-product">{{ $product->title }}</h4>
												<div class="info-product-price">
													<span>₹ {{ $product->selling_price }}</span> <del>₹ {{ $product->mrp }}</del>
												</div>
											</div>
										</div>
									</div>
                                    @endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Product Tab Slider -->
			<!--<div class="category-tab-slider">-->
			<!--	<div class="container">-->
			<!--		<div class="inner-category-tab-slider">-->
			<!--			<div class="row">-->
			<!--				<div class="col-md-4 col-sm-4 col-xs-12">-->
			<!--					<div class="sidebar-category-tab">-->
			<!--						<h2 class="title-category-tab">men’s</h2>-->
			<!--						<div class="clearfix">-->
			<!--							<div class="brand-cat-slider five-item">-->
			<!--								<div class="vertical-slider">-->
			<!--									<ul>-->
			<!--										@foreach ($brands->where('gender_id', 1) as $brand)-->

			<!--										<li>-->
			<!--											<a href="{{ route('listing', ['brand_name' => $brand->id]) }}"><img src="{{ asset('storage/'.$brand->brand_image) }}" alt="" /></a>-->
			<!--										</li>-->

			<!--										@endforeach-->
			<!--									</ul>-->
			<!--								</div>-->
			<!--								<div class="jcaroul-control-nav">-->
			<!--									<a class="prev" href="#">prev</a>-->
			<!--									<a class="next" href="#">next</a>-->
			<!--								</div>-->
			<!--							</div>-->
			<!--							<div class="list-title-tab-category">-->
			<!--								<ul class="nav nav-tabs" role="tablist">-->
   <!--                                             @foreach ($subCategory->where('category_id', 1) as $item)-->
			<!--									    <li><a class="active" href="{{ route('listing', ['sub_category_id' => $item->id]) }}" >{{ $item->sub_category }}</a></li>-->
   <!--                                             @endforeach-->
			<!--								</ul>-->
			<!--							</div>-->
			<!--						</div>-->
			<!--					</div>-->
			<!--				</div>-->
			<!--				<div class="col-md-8 col-sm-8 col-xs-12">-->
			<!--					<div class="tab-content">-->
			<!--						<div role="tabpanel" class="tab-pane active" id="men1">-->
			<!--							<div class="category-tab-content clearfix">-->
			<!--								@foreach ($newProduct->where('men_feature', 1)->take(8) as $product)-->
			<!--								<div class="category-tab-single">-->
			<!--									<div class="item-product product-lower">-->
			<!--										<a href="{{ route('details', ['product' => $product]) }}">-->
			<!--										<div class="item-product-thumb item-thumb-product">-->
			<!--											<img alt="" src="{{ asset('storage/'.$product->primary_image) }}">-->
			<!--										</div>-->
			<!--										</a>-->
			<!--										<div class="item-product-info">-->
			<!--											<h3 class="title-product">{{ $product->title }}</h3>-->
			<!--											<div class="info-product-price">-->
			<!--												<span>₹ {{ $product->selling_price }}</span> <del>₹ {{ $product->mrp }}</del>-->
			<!--											</div>-->
			<!--										</div>-->
			<!--									</div>-->
			<!--								</div>-->
			<!--								@endforeach-->
			<!--							</div>-->
			<!--						</div>-->
			<!--						<div role="tabpanel" class="tab-pane" id="men3"></div>-->
			<!--						<div role="tabpanel" class="tab-pane" id="men4"></div>-->
			<!--					</div>-->
			<!--				</div>-->
			<!--			</div>-->
			<!--		</div>-->
			<!--	</div>-->
			<!--</div>-->
			<!-- End Category Tab Slider -->
			<!--<div class="category-tab-slider">-->
			<!--	<div class="container">-->
			<!--		<div class="inner-category-tab-slider">-->
			<!--			<div class="row">-->
			<!--				<div class="col-md-4 col-sm-4 col-xs-12">-->
			<!--					<div class="sidebar-category-tab">-->
			<!--						<h2 class="title-category-tab">Men’s</h2>-->
			<!--						<div class="clearfix">-->
			<!--							<div class="brand-cat-slider four-item">-->
			<!--								<div class="vertical-slider">-->
			<!--									<ul>-->
			<!--										@foreach ($brands->where('gender_id', 2) as $brand)-->

			<!--										<li>-->
			<!--											<a href="{{ route('listing', ['brand_name' => $brand->id]) }}"><img src="{{ url('../storage/app/public/'.$brand->brand_image) }}" alt="" /></a>-->
			<!--										</li>-->

			<!--										@endforeach-->
			<!--									</ul>-->
			<!--								</div>-->
			<!--								<div class="jcaroul-control-nav">-->
			<!--									<a class="prev" href="#">prev</a>-->
			<!--									<a class="next" href="#">next</a>-->
			<!--								</div>-->
			<!--							</div>-->
			<!--							<div class="list-title-tab-category">-->
			<!--								<ul class="nav nav-tabs" role="tablist">-->
   <!--                                             @foreach ($subCategory->where('category_id', 2) as $item)-->
			<!--									    <li role="presentation"><a  class="active" href="{{ route('listing', ['sub_category_id' => $item->id]) }}">{{ $item->sub_category }}</a></li>-->
			<!--									@endforeach-->
			<!--								</ul>-->
			<!--							</div>-->
			<!--						</div>-->
			<!--					</div>-->
			<!--				</div>-->
			<!--				<div class="col-md-8 col-sm-8 col-xs-12">-->
			<!--					<div class="tab-content">-->
			<!--						<div role="tabpanel" class="tab-pane active" id="women1">-->
			<!--							<div class="category-tab-content clearfix">-->
			<!--								@foreach ($newProduct->where('women_feature', 1)->take(8) as $product)-->
			<!--								<div class="category-tab-single">-->
			<!--									<div class="item-product product-lower">-->
			<!--										<a href="{{ route('details', ['product' => $product]) }}">-->
			<!--										<div class="item-product-thumb item-thumb-product">-->
			<!--											<img alt="" src="{{ asset('storage/'.$product->primary_image) }}">-->
			<!--										</div>-->
			<!--										</a>-->
			<!--										<div class="item-product-info">-->
			<!--											<h3 class="title-product">{{ $product->title }}</h3>-->
			<!--											<div class="info-product-price">-->
			<!--												<span>₹ {{ $product->selling_price }}</span> <del>₹ {{ $product->mrp }}</del>-->
			<!--											</div>-->
			<!--										</div>-->
			<!--									</div>-->
			<!--								</div>-->
			<!--								@endforeach-->
			<!--							</div>-->
			<!--						</div>-->
			<!--						<div role="tabpanel" class="tab-pane" id="women2">-->
			<!--							<div class="category-tab-content clearfix">-->
			<!--								<div class="category-tab-main">-->
			<!--									<div class="item-product product-lower">-->
			<!--										<div class="item-product-thumb">-->
			<!--											<a href="#"><img alt="" src="images/home_3/lead2.png"></a>-->
			<!--										</div>-->
			<!--										<div class="item-product-info">-->
			<!--											<h3 class="title-product"><a href="#">Chemise SLimFon</a></h3>-->
			<!--											<div class="info-product-price">-->
			<!--												<span>$45.99</span> <del>$69.71</del>-->
			<!--											</div>-->
			<!--										</div>-->
			<!--										<div class="product-extra-link">-->
			<!--											<a class="link-add-to-cart" href="#">Add To Cart</a>-->
			<!--											<a class="link-compare" href="#"><i class="fa fa-external-link-square"></i></a>-->
			<!--											<a class="link-wishlist" href="#"><i class="fa fa-heart"></i></a>-->
			<!--										</div>-->
			<!--									</div>-->
			<!--								</div>-->
			<!--								<div class="category-tab-single">-->
			<!--									<div class="item-product product-lower">-->
			<!--										<div class="item-product-thumb item-thumb-product">-->
			<!--											<a href="#"><img alt="" src="images/home_3/p8.png"></a>-->
			<!--											<div class="info-product-cart">-->
			<!--												<div class="inner-info-product-cart">-->
			<!--													<ul>-->
			<!--														<li><a class="link-wishlist" href="#"><i class="fa fa-heart"></i></a></li>-->
			<!--														<li><a class="link-quick-view" href="#"><i class="fa fa-search"></i></a></li>-->
			<!--														<li><a class="link-compare" href="#"><i class="fa fa-external-link-square"></i></a></li>-->
			<!--													</ul>-->
			<!--													<a class="link-product-add-cart" href="#">Add to cart</a>-->
			<!--												</div>-->
			<!--											</div>-->
			<!--										</div>-->
			<!--										<div class="item-product-info">-->
			<!--											<h3 class="title-product"><a href="#">Chemise SLimFon</a></h3>-->
			<!--											<div class="info-product-price">-->
			<!--												<span>$45.99</span> <del>$69.71</del>-->
			<!--											</div>-->
			<!--										</div>-->
			<!--									</div>-->
			<!--								</div>-->
			<!--								<div class="category-tab-single">-->
			<!--									<div class="item-product product-lower">-->
			<!--										<div class="item-product-thumb item-thumb-product">-->
			<!--											<a href="#"><img alt="" src="images/home_3/p7.png"></a>-->
			<!--											<div class="info-product-cart">-->
			<!--												<div class="inner-info-product-cart">-->
			<!--													<ul>-->
			<!--														<li><a class="link-wishlist" href="#"><i class="fa fa-heart"></i></a></li>-->
			<!--														<li><a class="link-quick-view" href="#"><i class="fa fa-search"></i></a></li>-->
			<!--														<li><a class="link-compare" href="#"><i class="fa fa-external-link-square"></i></a></li>-->
			<!--													</ul>-->
			<!--													<a class="link-product-add-cart" href="#">Add to cart</a>-->
			<!--												</div>-->
			<!--											</div>-->
			<!--										</div>-->
			<!--										<div class="item-product-info">-->
			<!--											<h3 class="title-product"><a href="#">Chemise SLimFon</a></h3>-->
			<!--											<div class="info-product-price">-->
			<!--												<span>$45.99</span> <del>$69.71</del>-->
			<!--											</div>-->
			<!--										</div>-->
			<!--									</div>-->
			<!--								</div>-->
			<!--								<div class="category-tab-single">-->
			<!--									<div class="item-product product-lower">-->
			<!--										<div class="item-product-thumb item-thumb-product">-->
			<!--											<a href="#"><img alt="" src="images/home_3/p6.png"></a>-->
			<!--											<div class="info-product-cart">-->
			<!--												<div class="inner-info-product-cart">-->
			<!--													<ul>-->
			<!--														<li><a class="link-wishlist" href="#"><i class="fa fa-heart"></i></a></li>-->
			<!--														<li><a class="link-quick-view" href="#"><i class="fa fa-search"></i></a></li>-->
			<!--														<li><a class="link-compare" href="#"><i class="fa fa-external-link-square"></i></a></li>-->
			<!--													</ul>-->
			<!--													<a class="link-product-add-cart" href="#">Add to cart</a>-->
			<!--												</div>-->
			<!--											</div>-->
			<!--										</div>-->
			<!--										<div class="item-product-info">-->
			<!--											<h3 class="title-product"><a href="#">Chemise SLimFon</a></h3>-->
			<!--											<div class="info-product-price">-->
			<!--												<span>$45.99</span> <del>$69.71</del>-->
			<!--											</div>-->
			<!--										</div>-->
			<!--									</div>-->
			<!--								</div>-->
			<!--								<div class="category-tab-single">-->
			<!--									<div class="item-product product-lower">-->
			<!--										<div class="item-product-thumb item-thumb-product">-->
			<!--											<a href="#"><img alt="" src="images/home_3/p5.png"></a>-->
			<!--											<div class="info-product-cart">-->
			<!--												<div class="inner-info-product-cart">-->
			<!--													<ul>-->
			<!--														<li><a class="link-wishlist" href="#"><i class="fa fa-heart"></i></a></li>-->
			<!--														<li><a class="link-quick-view" href="#"><i class="fa fa-search"></i></a></li>-->
			<!--														<li><a class="link-compare" href="#"><i class="fa fa-external-link-square"></i></a></li>-->
			<!--													</ul>-->
			<!--													<a class="link-product-add-cart" href="#">Add to cart</a>-->
			<!--												</div>-->
			<!--											</div>-->
			<!--										</div>-->
			<!--										<div class="item-product-info">-->
			<!--											<h3 class="title-product"><a href="#">Chemise SLimFon</a></h3>-->
			<!--											<div class="info-product-price">-->
			<!--												<span>$45.99</span> <del>$69.71</del>-->
			<!--											</div>-->
			<!--										</div>-->
			<!--									</div>-->
			<!--								</div>-->
			<!--							</div>-->
			<!--						</div>-->
			<!--						<div role="tabpanel" class="tab-pane" id="women3"></div>-->
			<!--						<div role="tabpanel" class="tab-pane" id="women4"></div>-->
			<!--					</div>-->
			<!--				</div>-->
			<!--			</div>-->
			<!--		</div>-->
			<!--	</div>-->
			<!--</div>-->

		</div>
		<!-- End Content -->
		@endsection

		@section('footer')
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-12 col-xs-12">
						<div class="left-footer">
							<div class="logo-footer logo-footer2">
								{{-- <a href="#"><img src="images/home_2/logo-footer.png" alt="" /></a> --}}
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
							{{-- <div class="row">
								<div class="col-md-6 col-sm-6 col-xs-12">
									<h2 class="title-footer">Connect with Us</h2>
									<div class="social-footer social-footer2">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											<li><a href="#"><i class="fa fa-youtube"></i></a></li>
											<li><a href="#"><i class="fa fa-share-alt"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<h2 class="title-footer">Newsletter</h2>
									<div class="news-letter-form">
										<form>
											<input type="text" value="Enter your Email..." onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" />
											<input type="submit" value="Subscribe" />
										</form>
									</div>
								</div>
							</div> --}}
							<div class="row">
								{{-- <div class="col-md-4 col-sm-4 col-xs-12">
									<div class="box-footer-menu">
										<h2 class="title-footer">My account</h2>
										<ul class="menu-footer-default">
											<li><a href="#">My orders</a></li>
											<li><a href="#">My credit slips</a></li>
											<li><a href="#">My addresses</a></li>
											<li><a href="#">My personal info</a></li>
										</ul>
									</div>
								</div> --}}
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
								{{-- <div class="col-md-4 col-sm-4 col-xs-12">
									<div class="box-footer-menu">
										<h2 class="title-footer">Customer Service</h2>
										<ul class="menu-footer-default">
											<li><a href="#">Ask in forum</a></li>
											<li><a href="#">Help Desk</a></li>
											<li><a href="#">Payment Methods</a></li>
											<li><a href="#">Custom Work</a></li>
											<li><a href="#">Promotions</a></li>
										</ul>
									</div>
								</div> --}}
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
					{{-- <div class="col-md-6 col-sm-5 col-xs-12">
						<div class="payment-method">
							<ul class="list-inline text-right">
								<li><a href="#"><img src="images/home_2/payment1.png" alt="" /></a></li>
								<li><a href="#"><img src="images/home_2/payment2.png" alt="" /></a></li>
								<li><a href="#"><img src="images/home_2/payment3.png" alt="" /></a></li>
								<li><a href="#"><img src="images/home_2/payment4.png" alt="" /></a></li>
							</ul>
						</div>
					</div> --}}
				</div>
			</div>
		</div>
		@endsection

		@section('scripts')


	