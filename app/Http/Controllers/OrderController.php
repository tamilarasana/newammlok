<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
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

    public function orderDetails(){
        $user = Auth::User();
        // $user = Order::where('user_id', $user->id)
        $user =Order::where('user_id', $user->id)->with('users.address','products','color','size')->get();
        // dd($user);
        return view('seller.dashboard.userOrderdetails', ['user' => $user]);

    }

    public function createOrder(Request $request)
    {
        // dd($request->all());
        $data = new Order;
        $data->user_id = Auth::User()->id;
        $data->product_id = $request->product_id;
        $data->color_id = $request->color_id;
        $data->size_id = $request->size_id;
        $data->quantity = $request->quantity;
        $data->save();
        return redirect()->route('userdetails');
        // ->with('success','Order Placed Successfully');
    }
}
