<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SubscriptionController extends Controller
{
    public function  index()
    {
        $subscriptionStatus = 'active';
        return view('subscription', compact('subscriptionStatus'));
        
    }
    public function subscriptionForm(Request $request)
    {
        $request->validate([

        ]);

        Session::flash('success', 'Your Subscription Active!');
        Session::flash('false', 'Your Subscription Inactive!');
        return redirect()->route('subscription.show');
    }
}

