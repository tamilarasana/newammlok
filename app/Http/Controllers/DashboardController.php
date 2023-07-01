<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use App\Models\ProductUser;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

class DashboardController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $category_count = Category::count();
        $subCategory_count = SubCategory::count();
        $product_count = Product::count();
        $user_count = User::count();
        $order_count = Order::count();
        $user = Auth::User();
        $order = Order::where('user_id', $user->id)->count();
        $cart_count = $user->products()->count();
        $wish_count = Wishlist::where('user_id', $user->id)->count();
        return view('seller.dashboard', ['category_count' => $category_count,
          'subCategory_count' => $subCategory_count,
          'product_count' => $product_count,
          'order_count' => $order_count,
          'user_count' => $user_count,
          'cart_count' => $cart_count,
          'wish_count' => $wish_count,
          'order' => $order
          ]);
    }

    public function bestSellers($value='')
    {
        $products = Product::where('best_seller', 1)->where('status', 1)->get();
        return view('seller.dashboard.best-sellers', ['products' =>$products]);
    }

    public function newArrivals($value='')
    {
        $products = Product::where('new_arrivals', 1)->where('status', 1)->get();
        return view('seller.dashboard.new-arrivals', ['products' =>$products]);

    }

    public function deals($value='')
    {
        $products = Product::where('deals', 1)->where('status', 1)->get();
        return view('seller.dashboard.deals', ['products' =>$products]);

    }

    public function menFeature($value='')
    {
        $products = Product::where('men_feature', 1)->where('status', 1)->get();
        return view('seller.dashboard.men-feature', ['products' =>$products]);
    }

    public function womenFeature($value='')
    {
        $products = Product::where('women_feature', 1)->where('status', 1)->get();
        return view('seller.dashboard.women-feature', ['products' =>$products]);

    }
}
