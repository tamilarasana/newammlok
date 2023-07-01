<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductUser;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'user']);
    }

    public function fillCart(Request $request, Product $product)
    {
        $user = Auth::user();
        $user_id = $user->id;
        $cart =DB::table('product_user')->where('product_id', $product->id)->where('user_id', $user_id)->get();
        $count = $cart->count();
        if ($count == 0) {
            $product->users()->attach($user_id);
            return redirect()->back()->with('success', 'Added to Cart Successfullly');
        } else {
            $product->users()->detach($user_id);
            return redirect()->back()->with('success', 'Removed from Cart Successfullly');
        }

    }

    public function unfillCart(Request $request, Product $product)
    {
        $user = Auth::user();
        $user_id = $user->id;
        $product->users()->detach($user_id);
        return redirect()->back()->with('success', 'Removed from Cart Successfullly');
    }
}
