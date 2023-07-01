
        <!-- Page Sidebar Start-->
        <div class="page-sidebar">

            <div class="sidebar custom-scrollbar">
                <div class="sidebar-user text-center">
                    <div><img class="img-60 rounded-circle" src="{{ asset('seller/images/dashboard/man.png') }}" alt="#">
                    </div>
                    <h6 class="mt-3 f-14">{{ auth()->user()->name }}</h6>
                </div>
                <ul class="sidebar-menu">
                    @if (auth()->user()->role == 'admin')
                        <li><a class="sidebar-header" href="{{ route('home') }}"><i data-feather="home"></i><span>Dashboard</span></a></li>
                        <li><a class="sidebar-header" href="{{ route('banner.index') }}"><i data-feather="home"></i><span>Banner</span></a></li>
                        <li><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Filters</span></a>
                            <ul class="sidebar-submenu">
                                <li><a class="sidebar-header" href="{{ route('gender.index') }}"><i data-feather="home"></i><span>Gender</span></a></li>
                                <li><a class="sidebar-header" href="{{ route('brand.index') }}"><i data-feather="home"></i><span>Brand</span></a></li>
                                <li><a class="sidebar-header" href="{{ route('color.index') }}"><i data-feather="home"></i><span>Color</span></a></li>
                                <li><a class="sidebar-header" href="{{ route('size.index') }}"><i data-feather="home"></i><span>Size</span></a></li>
                                <li><a class="sidebar-header" href="{{ route('category.index') }}"><i data-feather="home"></i><span>Category</span></a></li>
                                <li><a class="sidebar-header" href="{{ route('sub-category.index') }}"><i data-feather="home"></i><span>Sub Category</span></a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Products</span></a>
                            <ul class="sidebar-submenu">
                                <li><a class="sidebar-header" href="{{ route('product') }}"><i data-feather="home"></i><span>Add Product</span></a></li>
                                <li><a class="sidebar-header" href="{{ route('active.product') }}"><i data-feather="home"></i><span>Active Products</span></a></li>
                                <li><a class="sidebar-header" href="{{ route('retired.product') }}"><i data-feather="home"></i><span>Retired Products</span></a></li>
                                <li><a class="sidebar-header" href="{{ route('best.seller') }}"><i data-feather="home"></i><span>Best Seller</span></a></li>
                                <li><a class="sidebar-header" href="{{ route('new.arrivals') }}"><i data-feather="home"></i><span>New Arrival</span></a></li>
                                <li><a class="sidebar-header" href="{{ route('deals') }}"><i data-feather="home"></i><span>Deals</span></a></li>
                                <li><a class="sidebar-header" href="{{ route('men.feature') }}"><i data-feather="home"></i><span>Men Feature</span></a></li>
                                <li><a class="sidebar-header" href="{{ route('women.feature') }}"><i data-feather="home"></i><span>Women Feature</span></a></li>
                            </ul>
                        </li>
                    @endif
                    @if (auth()->user()->role == 'user')
                        <li><a class="sidebar-header" href="{{ route('home') }}"><i data-feather="home"></i><span>Dashboard</span></a></li>
                        <li><a class="sidebar-header" href="{{ route('order.details') }}"><i data-feather="box"></i> <span>Orders</span></a></li>
                        <li><a class="sidebar-header" href="{{ route('your.cart') }}"><i data-feather="box"></i> <span>Cart</span></a></li>
                        <li><a class="sidebar-header" href="{{ route('your.wishlist') }}"><i data-feather="box"></i> <span>Wishlist</span></a></li>
                    @endif
                    {{-- <li><a class="sidebar-header" href="#"><i data-feather="dollar-sign"></i><span>Sales</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="order.html"><i class="fa fa-circle"></i>Orders</a></li>
                            <li><a href="transactions.html"><i class="fa fa-circle"></i>Transactions</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="#"><i data-feather="tag"></i><span>Coupons</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="coupon-list.html"><i class="fa fa-circle"></i>List Coupons</a></li>
                            <li><a href="coupon-create.html"><i class="fa fa-circle"></i>Create Coupons </a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="#"><i data-feather="clipboard"></i><span>Pages</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="pages-list.html"><i class="fa fa-circle"></i>List Page</a></li>
                            <li><a href="page-create.html"><i class="fa fa-circle"></i>Create Page</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="media.html"><i data-feather="camera"></i><span>Media</span></a></li>
                    <li><a class="sidebar-header" href="#"><i data-feather="align-left"></i><span>Menus</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="menu-list.html"><i class="fa fa-circle"></i>Menu Lists</a></li>
                            <li><a href="create-menu.html"><i class="fa fa-circle"></i>Create Menu</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="#"><i data-feather="user-plus"></i><span>Users</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="user-list.html"><i class="fa fa-circle"></i>User List</a></li>
                            <li><a href="create-user.html"><i class="fa fa-circle"></i>Create User</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="#"><i data-feather="users"></i><span>Vendors</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="list-vendor.html"><i class="fa fa-circle"></i>Vendor List</a></li>
                            <li><a href="create-vendors.html"><i class="fa fa-circle"></i>Create Vendor</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="#"><i data-feather="chrome"></i><span>Localization</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="translations.html"><i class="fa fa-circle"></i>Translations</a></li>
                            <li><a href="currency-rates.html"><i class="fa fa-circle"></i>Currency Rates</a></li>
                            <li><a href="taxes.html"><i class="fa fa-circle"></i>Taxes</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="reports.html"><i data-feather="bar-chart"></i><span>Reports</span></a></li>
                    <li><a class="sidebar-header" href="#"><i data-feather="settings" ></i><span>Settings</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="profile.html"><i class="fa fa-circle"></i>Profile</a></li>
                        </ul>
                    </li>
<li><a class="sidebar-header" href="invoice.html"><i data-feather="archive"></i><span>Invoice</span></a>
                    </li>
                    <li><a class="sidebar-header" href="login.html"><i data-feather="log-in"></i><span>Login</span></a>
                    </li> --}}
                </ul>
            </div>
        </div>
        <!-- Page Sidebar Ends-->

        <!-- Right sidebar Start-->
        {{-- <div class="right-sidebar" id="right_side_bar">
            <div>
                <div class="container p-0">
                    <div class="modal-header p-l-20 p-r-20">
                        <div class="col-sm-8 p-0">
                            <h6 class="modal-title font-weight-bold">FRIEND LIST</h6>
                        </div>
                        <div class="col-sm-4 text-right p-0"><i class="mr-2" data-feather="settings"></i></div>
                    </div>
                </div>
                <div class="friend-list-search mt-0">
                    <input type="text" placeholder="search friend"><i class="fa fa-search"></i>
                </div>
                <div class="p-l-30 p-r-30">
                    <div class="chat-box">
                        <div class="people-list friend-list">
                            <ul class="list">
                                <li class="clearfix"><img class="rounded-circle user-image" src="../assets/images/dashboard/user.png" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Vincent Porter</div>
                                        <div class="status"> Online</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image" src="../assets/images/dashboard/user1.jpg" alt="">
                                    <div class="status-circle away"></div>
                                    <div class="about">
                                        <div class="name">Ain Chavez</div>
                                        <div class="status"> 28 minutes ago</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image" src="../assets/images/dashboard/user2.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Kori Thomas</div>
                                        <div class="status"> Online</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image" src="../assets/images/dashboard/user3.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Erica Hughes</div>
                                        <div class="status"> Online</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image" src="../assets/images/dashboard/man.png" alt="">
                                    <div class="status-circle offline"></div>
                                    <div class="about">
                                        <div class="name">Ginger Johnston</div>
                                        <div class="status"> 2 minutes ago</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image" src="../assets/images/dashboard/user5.jpg" alt="">
                                    <div class="status-circle away"></div>
                                    <div class="about">
                                        <div class="name">Prasanth Anand</div>
                                        <div class="status"> 2 hour ago</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image" src="../assets/images/dashboard/designer.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Hileri Jecno</div>
                                        <div class="status"> Online</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Right sidebar Ends-->
