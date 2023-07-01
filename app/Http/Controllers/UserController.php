<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'user']);
    }

    public function yourCart()
    {
        $user = Auth::User();
        $cartProduct = $user->products()->get();
        return view('buyer.your-cart', ['cartProduct' => $cartProduct]);
    }

    public function yourWishlist()
    {
        $user = Auth::User();
        $wishlist = Wishlist::where('user_id', $user->id)->get();
        $products = Product::get();
        return view('buyer.your-wishlist', ['products' => $products,
                                            'wishlist' => $wishlist
                                            ]);
    }
}
