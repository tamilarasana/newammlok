<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PolicyController extends Controller
{
   public function about()
    {
        return view('policy.about');
    }

    public function contact()
    {
        return view('policy.contact');
    }

    public function privacypolicy()
    {
        return view('policy.privacypolicy');
    }

    public function returnexchange()
    {
        return view('policy.returnexchange');
    }

    public function shipping()
    {
        return view('policy.shipping');
    }
    
    public function termscondition()
    {
        return view('policy.termscondtions');
    }
}
