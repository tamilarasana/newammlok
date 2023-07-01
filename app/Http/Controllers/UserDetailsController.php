<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Userdetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserDetailsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'user']);
    }


    public function index()
    {
        $user = Auth::User();
        // $wishlist = Wishlist::where('user_id', $user->id)->get();
        $test =  Userdetails::where('user_id', $user->id)->get();
        if(count($test)== 0){
            return view('models.userdetails');
        }else{
            return view('models.edituserdetails',['field' => $test]);

        }
        // if($test->isEmpty()){
            // return view('models.userdetails',['field' => '']);
        // }else{
            //  return view('models.userdetails',['field' => $test]);
        // }
    }

    public function store (Request $request, $id = '') {
        $details_id = $request->id;
        $userexits = Userdetails::where('id',$details_id)->exists();
        if($userexits)
        {
            $userid =  Auth::User()->id;  
            $user = Userdetails::where('user_id', $userid)->update([
               'user_id' => $userid,
                 'doorno' => $request->doorno,
                   'streetname' => $request->streetname,
                   'landmark' => $request->landmark,
                   'city' => $request->city,
                   'district' => $request->district,
                   'state' => $request->state,
                   'phone' => $request->phone,
                   'pincode' => $request->pincode,
            ]);
        }else{

        $userid =  Auth::User()->id;  
         $user = Userdetails::insert([
            'user_id' => $userid,
              'doorno' => $request->doorno,
                'streetname' => $request->streetname,
                'landmark' => $request->landmark,
                'city' => $request->city,
                'district' => $request->district,
                'state' => $request->state,
                'phone' => $request->phone,
                'pincode' => $request->pincode,
         ]);
        }

        
        // if(isset($request) ){  
        //    $userid =  Auth::User()->id;  
        //     $userdetails =   Userdetails::update([
        //     'user_id' => $userid,
        //       'doorno' => $request->doorno,
        //         'streetname' => $request->streetname,
        //         'landmark' => $request->landmark,
        //         'city' => $request->city,
        //         'district' => $request->district,
        //         'state' => $request->state,
        //         'phone' => $request->phone,
        //         'pincode' => $request->pincode,
        //     ]);
        // }
            // $userdetails =   Userdetails;
            // $userdetails->user_id = Auth::User()->id;
            // $userdetails->doorno = $request->doorno;
            // $userdetails->streetname = $request->streetname;
            // $userdetails->landmark = $request->landmark;
            // $userdetails->city = $request->city;
            // $userdetails->district = $request->district;
            // $userdetails->state = $request->state;
            // $userdetails->phone = $request->phone;
            // $userdetails->pincode = $request->pincode;
            // $userdetails->save();
        // }else{
        //     $userdetails =   Userdetails::findOrFail($id);
        //     $userdetails->user_id = Auth::User()->id;
        //     $userdetails->doorno = $request->doorno;
        //     $userdetails->streetname = $request->streetname;
        //     $userdetails->landmark = $request->landmark;
        //     $userdetails->city = $request->city;
        //     $userdetails->district = $request->district;
        //     $userdetails->state = $request->state;
        //     $userdetails->phone = $request->phone;
        //     $userdetails->pincode = $request->pincode;
        //     $userdetails->update();
        // }
        return redirect('/payment')->with('success', 'Details Added Successfullly');
    }

    public function update (Request $request, $id) {

        $userdetails =   Userdetails::findOrFail($id);

        

        
    }


    public function UserOrderList(Request $request)
    {
        // dd($request->all());
        $user_id = Auth::User()->id;
        if($request->status == ""){
            $user = Order::where('user_id',  $user_id)->with('users.address','products','color','size')->orderBy('created_at' ,'DESC')->get();
        }else{
            $user = Order::where('user_id',  $user_id)->with('users.address','products','color','size')->where('status',$request->status)->get();
        }
        return view('seller.dashboard.userOrderdetails', ['user' => $user]);
       
    }
}
