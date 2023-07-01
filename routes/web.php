<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', [App\Http\Controllers\Controller::class, 'index'])->name('index');

Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');

// Listing  
Route::get('/listing', [App\Http\Controllers\ListingController::class, 'openListing'])->name('listing');

// Details Page
Route::get('/details/{product?}', [App\Http\Controllers\DetailsController::class, 'openDetails'])->name('details');

// Admin Middleware
Route::middleware(['admin'])->group(function () {
    // Product
    Route::get('/product', [App\Http\Controllers\ProductController::class, 'openAddProduct'])->name('product');
    Route::post('/store/product', [App\Http\Controllers\ProductController::class, 'storeProduct'])->name('store.product');
    Route::get('/edit-product/{product?}', [App\Http\Controllers\ProductController::class, 'openEditProduct'])->name('edit.product');
    Route::post('/update/product/{product?}', [App\Http\Controllers\ProductController::class, 'updateProduct'])->name('update.product');
    Route::get('/active-product', [App\Http\Controllers\ProductController::class, 'openActiveProductList'])->name('active.product');
    Route::get('/retired-product', [App\Http\Controllers\ProductController::class, 'openRetiredProductList'])->name('retired.product');
    Route::get('/product-details/{product?}', [App\Http\Controllers\ProductController::class, 'openProductDetails'])->name('product.detail');
    Route::post('/product/status/{product?}', [App\Http\Controllers\ProductController::class, 'statusProduct'])->name('status.product');

    // Product-Variation
    Route::get('/product-variation/{product?}', [App\Http\Controllers\ProductVariationController::class, 'openProductVariation'])->name('product.variation');
    Route::post('/store/variation', [App\Http\Controllers\ProductVariationController::class, 'addVariaton'])->name('store.variation');
    Route::post('/update/variation/{variation?}', [App\Http\Controllers\ProductVariationController::class, 'updateVariaton'])->name('update.variation');
    Route::post('/destroy/variation/{variation?}', [App\Http\Controllers\ProductVariationController::class, 'destroyVariation'])->name('destroy.variation');
    Route::post('/variation/status/{variation?}', [App\Http\Controllers\ProductVariationController::class, 'statusVariation'])->name('status.variation');

    // Product-Images
    Route::get('/product-images/{product?}', [App\Http\Controllers\ProductImageController::class, 'openProductImage'])->name('product.image');
    Route::post('/store/variation/images/{product?}', [App\Http\Controllers\ProductImageController::class, 'storeVariationImages'])->name('store.variaion.images');
    Route::get('/destroy/image/{image?}', [App\Http\Controllers\ProductImageController::class, 'destroyImage'])->name('destroy.image');

    // Category
    Route::resource('category', 'App\Http\Controllers\CategoryController', ['only' => [ 'index', 'store', 'update' ,'destroy']])->middleware('admin');;

    // Sub-Category
    Route::resource('sub-category', 'App\Http\Controllers\SubCategoryController', ['only' => [ 'index', 'store', 'update' ,'destroy' ]]);

    // Gender
    Route::resource('gender', 'App\Http\Controllers\GenderController', ['only' => [ 'index', 'store', 'update' ,'destroy' ]]);

    // Brand
    Route::resource('brand', 'App\Http\Controllers\BrandController', ['only' => [ 'index', 'store', 'update' ,'destroy']]);

    // Color
    Route::resource('color', 'App\Http\Controllers\ColorsController', ['only' => [ 'index', 'store', 'update' ,'destroy']]);

    // Size
    Route::resource('size', 'App\Http\Controllers\SizeController', ['only' => [ 'index', 'store', 'update' ,'destroy']]);

    // Banner
    Route::resource('banner', 'App\Http\Controllers\BannerController', ['only' => [ 'index', 'store' ,'destroy']]);

    // BestSeller
    Route::get('/best-sellers', [App\Http\Controllers\DashboardController::class, 'bestSellers'])->name('best.seller');

    // New Arrivals
    Route::get('/new-arrivals', [App\Http\Controllers\DashboardController::class, 'newArrivals'])->name('new.arrivals');

    // Deals
    Route::get('/deals', [App\Http\Controllers\DashboardController::class, 'deals'])->name('deals');

    // Men Feature
    Route::get('/men-feature', [App\Http\Controllers\DashboardController::class, 'menFeature'])->name('men.feature');

    // Women Feature
    Route::get('/women-feature', [App\Http\Controllers\DashboardController::class, 'womenFeature'])->name('women.feature');
    
      // Order
    Route::get('/user/product.details', [App\Http\Controllers\UserProductDetailsController::class, 'index'])->name('userproduct.details');
    Route::post('/user/order/{id?}', [App\Http\Controllers\UserProductDetailsController::class, 'Order'])->name('userproduct.order');
    Route::get('userproduct.productlist', [App\Http\Controllers\UserProductDetailsController::class, 'OrderList'])->name('userproduct.productlist');


});

Route::middleware(['user'])->group(function () {

    // CartController
    Route::get('/fill/cart/{product?}', [App\Http\Controllers\CartController::class, 'fillCart'])->name('fill.cart');
    Route::get('/unfill/cart/{product?}', [App\Http\Controllers\CartController::class, 'unfillCart'])->name('unfill.cart');

    Route::get('cart', [App\Http\Controllers\Controller::class,'cart'])->name('cart');

    // WishlistController
    Route::get('/fill/wish/{product?}', [App\Http\Controllers\WishlistController::class, 'fillWish'])->name('fill.wish');

    // UserController
    Route::get('/your-cart', [App\Http\Controllers\UserController::class, 'yourCart'])->name('your.cart');
    Route::get('/your-wishlist', [App\Http\Controllers\UserController::class, 'yourWishlist'])->name('your.wishlist');

    // Order
    Route::post('/create-order', [App\Http\Controllers\OrderController::class, 'createOrder'])->name('create.order');
    Route::get('/order.details', [App\Http\Controllers\OrderController::class, 'orderDetails'])->name('order.details');

    //User Details
    Route::get('/userdetails', [App\Http\Controllers\UserDetailsController::class, 'index'])->name('userdetails');
    Route::post ('/storeuserdetails/{id?}', [App\Http\Controllers\UserDetailsController::class, 'store'])->name('store.address');
    Route::post ('/updateaddress/{id}', [App\Http\Controllers\UserDetailsController::class, 'update'])->name('update.address');
    
    //Payment
    Route::get('/payment', [App\Http\Controllers\PaymentController::class, 'payment'])->name('payment');
    Route::post('/payment/type', [App\Http\Controllers\PaymentController::class, 'paymenttype'])->name('payment.type');
    Route::get('user.productlist', [App\Http\Controllers\UserDetailsController::class, 'UserOrderList'])->name('user.productlist');

});

// Search
Route::get('/search', [App\Http\Controllers\SearchController::class, 'search'])->name('search');
Route::get('/search-price', [App\Http\Controllers\SearchController::class, 'searchByPrice'])->name('search.price');

Route::get('/aboutus', [App\Http\Controllers\PolicyController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\PolicyController::class, 'contact'])->name('contact');
Route::get('/privacypolicy', [App\Http\Controllers\PolicyController::class, 'privacypolicy'])->name('privacypolicy');
Route::get('/returnexchange', [App\Http\Controllers\PolicyController::class, 'returnexchange'])->name('returnexchange');
Route::get('/shipping', [App\Http\Controllers\PolicyController::class, 'shipping'])->name('shipping');
Route::get('/termscondition', [App\Http\Controllers\PolicyController::class, 'termscondition'])->name('termscondition');


