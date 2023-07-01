<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Colors;
use App\Models\Size;
use App\Models\SubCategory;
use App\Models\Product;
use App\Models\Gender;
use App\Models\ProductImages;
use App\Models\ProductVariation;
use Illuminate\Support\Facades\Validator;

class ProductVariationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    public function openProductVariation(Request $request, Product $product)
    {
        $colors = Colors::get();
        $size = Size::get();
        $variations = ProductVariation::where('product_id', $product->id)->get();
        return view('seller.dashboard.add-product-variation', ['product' => $product,
                                                                'colors' => $colors,
                                                                'size' => $size,
                                                                'variations' => $variations]
                                                            );
    }

    public function addVariaton(Request $request)
    {
        $product_id = $request->product;
        $product = Product::find($product_id);
        $colors = $request->colors;
        $size = $request->size;
        foreach($colors as $color){
            foreach($size as $item){
                $dataCount = ProductVariation::where('product_id', $product_id)->where('color', $color)->where('size', $item)->count();
                if ($dataCount == 0) {
                    $data = new ProductVariation;
                    $data->category_id = $product->category_id;
                    $data->sub_category_id = $product->sub_category_id;
                    $data->product_id = $product->id;
                    $data->size = $item;
                    $data->color = $color;
                    $data->save();
                }
            }
        }
        return redirect()->back();
    }

    public function updateVariaton(Request $request, ProductVariation $variation)
    {
        $validatedData = $request->validate([
            'quantity' => 'required',
            ]);

        $data = ProductVariation::findOrFail($variation->id);

        $data->quantity = $request->quantity;
        $data->save();

        return redirect()->back()->with('success', 'Quantity Updated Successfullly');
    }

    public function destroyVariation(ProductVariation $variation)
    {
        $variation->delete();
        return redirect()->back()->with('success', 'Variation Deleted Successfullly');
    }

    public function statusVariation(Request $request, ProductVariation $variation)
    {
        $data = ProductVariation::findOrFail($variation->id);

        if ($request->status == 1) {
            $data->status = 0;
            $data->save();
        }else{
            $data->status = 1;
            $data->save();
        }

        return redirect()->back()->with('success', 'Status Updated');
    }
}
