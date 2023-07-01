<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Wishlist;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'user']);
    }

    public function fillWish(Request $request, Product $product)
    {
        $user = Auth::user();
        $user_id = $user->id;
        $product_id = $product->id;
        $wishlist = Wishlist::where('product_id', $product_id)->where('user_id', $user_id)->get();
        $count = $wishlist->count();
        // return $count;
        if ($count == 0) {
            $wishlist = Wishlist::create([
                'product_id' => $product_id,
                'user_id' => $user_id,
                ]);
            return redirect()->back()->with('success', 'Added to Wishlist Successfullly');
        } else{
            $wishlist = Wishlist::where('product_id', $product_id)->where('user_id', $user_id)->first();
            $wishlist->delete();
            return redirect()->back()->with('success', 'Removed from Wishlist Successfullly');
        }
        return redirect()->back();
    }
}
