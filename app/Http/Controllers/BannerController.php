<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Str;

class BannerController extends Controller
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
    AuthCheck
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::get();
        return view('seller.dashboard.add-banner', ['banners' => $banners]);
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
            'banner_image' => 'required',
            ]);
            $imagename = Str::random($length = 10);
                if($request->hasFile('banner_image')){
                   $banner_img = $imagename.'_'.time().'.'. request()->banner_image->getClientOriginalExtension();
                   $path=   $request->banner_image->storeAs('brand',$banner_img,'public');
                   $banner_img = $path;
                 }

        // if($request->file()) {
        //     $image = $request->banner_image;
        //     // $imagePath = $image->store('/', 'public');
        //     $path = $request->file('banner_image')->store('public/images');
        // }

            $data = new Banner;
            $data->file_path = $banner_img;
            $data->save();

        return redirect()->back()->with('success', 'Banner Added Successfullly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect()->back()->with('success', 'Banner Deleted Successfullly');
    }
}
