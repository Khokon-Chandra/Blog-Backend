<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    //

    public function store(Request $request)
    {
        $email = $request->validate([
            'email'=>'required|email:rfc,dns|unique:subscriptions,email',
        ]);

        Subscription::create($email);
        return back()->with('success','Newslater subscription is completed');
    }
}
