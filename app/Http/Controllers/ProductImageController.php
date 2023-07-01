<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\ProductImages;
use App\Models\ProductVariation;
use App\Models\ProductVariationImages;
use Illuminate\Support\Facades\Validator;
use Str;

class ProductImageController extends Controller
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

    public function openProductImage(Request $request, Product $product)
    {
        $uniqueColors = ProductVariation::where('product_id', $product->id)->where('status', 1)->distinct()->get(['color']);
        $variationImages = ProductVariationImages::where('product_id', $product->id)->get();
        // return $uniqueColors;
        return view('seller.dashboard.add-product-images', ['product' => $product,
                                                            'uniqueColors' => $uniqueColors,
                                                            'variationImages' => $variationImages
                                                            ]);
    }

    public function destroyImage(ProductVariationImages $image)
    {
        $image->delete();
        return redirect()->back()->with('success', 'Image Deleted Successfullly');
    }

    public function storeVariationImages(Request $request, Product $product)
    {
        if ($request->hasFile('image')) {

            $files = $request->file();
            $color_id = $request->color_id;
            $files = collect($files['image']);
            $imgCount = $files->count();
            $dbCount = ProductVariationImages::where('product_id', $product->id)->where('color_id', $color_id)->count();
            $totalCount = $imgCount + $dbCount;

            if ($dbCount < 8 && $totalCount < 8) {
                # code...
                $imagename = Str::random($length = 10);
                foreach ($files as $key => $file) {
                    $fileName = $imagename.'_'.$key .'_'.time().'.'. $file->getClientOriginalExtension();
                    $filePath =  $file->storeAs('variation',$fileName,'public');
                    // $fileName = $file->getClientOriginalName();
                    // $filePath = $file->store('/variation', 'public');
                    $fileModel = new ProductVariationImages;
                    $fileModel->product_id = $product->id;
                    $fileModel->color_id = $color_id;
                    $fileModel->file_name = $fileName;
                    $fileModel->file_path = $filePath;
                    $fileModel->save();
                }
                return redirect()->back()->with('success', 'Image Added Successfullly');
            }else{
                return redirect()->back()->with('failure', 'Maximum images allowed - 7');
            }
        }
        return redirect()->back()->with('failure', 'No Image to add');
    }
}
