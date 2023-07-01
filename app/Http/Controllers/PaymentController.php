<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;


class PaymentController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'user']);
    }

    public function payment(){
        return view('models.payment');
    }

    public function paymenttype(Request $request)
    {
        $payment = new Payment;
        $payment->user_id = Auth::User()->id;
        $payment->pay_type = $request->pay_type;
        $payment->save();
        return redirect()->route('index')->with('success','Order Placed Successfully');

    }
}
