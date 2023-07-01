<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use App\Models\Category;
use App\Models\Gender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubCategoryController extends Controller
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::get();
    	$subCategories = SubCategory::get();
        $genders = Gender::get();
        return view('seller.dashboard.add-subCategory', ['subCategories' => $subCategories, 'categories' => $categories, 'genders' => $genders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'sub_category' => 'required|max:255',
            'gender' => 'required',
            ]);

            $data = new SubCategory;
            $data->sub_category = $request->sub_category;
            $data->category_id = $request->category_id;
            $data->gender_id = $request->gender;
            $data->save();

            return redirect()->back()->with('success', 'Sub-Category Added Successfullly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        $validatedData = $request->validate([
            'sub_category' => 'required|max:255',
            'gender' => 'required',
            ]);

            $data = SubCategory::findOrFail($subCategory->id);

            $data->sub_category = $request->sub_category;
            $data->category_id = $request->category_id;
            $data->gender_id = $request->gender;
            $data->save();

            return redirect()->back()->with('success', 'Sub-Category Updated Successfullly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();
        return redirect()->back()->with('success', 'Category Deleted Successfullly');
    }
}
