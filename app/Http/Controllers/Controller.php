<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\User;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Banner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $category = Category::get();
        $brands = Brand::get();
        $banners = Banner::get();
        $subCategory = SubCategory::get();
        $newProduct = Product::where('status', 1)->get();
        
        $user = Auth::User();
        if(!empty($user)){
            $cartProduct = $user->products()->get();
        }
        return view('welcome', ['category' => $category,
                                'brands' => $brands,
                                'subCategory' => $subCategory,
                                'newProduct' => $newProduct,
                                'banners' => $banners,
                                'cartProduct' => $cartProduct ?? null]);
    }
     public function cart(){
        $category = Category::get();
        $brands = Brand::get();
        $banners = Banner::get();
        $subCategory = SubCategory::get();
        $newProduct = Product::where('status', 1)->get();

        $user = Auth::User();
        if(!empty($user)){
            $cartProduct = $user->products()->get();
        }
        return view('cart', ['category' => $category,
                                'brands' => $brands,
                                'subCategory' => $subCategory,
                                'newProduct' => $newProduct,
                                'banners' => $banners,
                                'cartProduct' => $cartProduct ?? null]);

    }
}

