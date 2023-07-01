<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Wishlist;
use App\Models\User;
use App\Models\Order;

class UserProductDetailsController extends Controller
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
        $user = Order::with('users.address','products','color','size')->orderBy('created_at' ,'DESC')->get();
        // dd($user);
        return view('seller.dashboard.userAndproductdetails', ['user' => $user]);
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
        //
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
    public function OrderList(Request $request)
    {
        // dd($request->all());
        if($request->status == ""){
            $user = Order::with('users.address','products','color','size')->orderBy('created_at' ,'DESC')->get();
        }else{
            $user = Order::with('users.address','products','color','size')->where('status',$request->status)->get();
        }
        return view('seller.dashboard.userAndproductdetails', ['user' => $user]);
       
    }

   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Order(Request $request, $id)
    {
        $order = Order::findOrfail($id);
        $order->status = $request["status"];
        $order->update();
         return  redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
