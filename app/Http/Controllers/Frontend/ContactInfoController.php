<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Menu;
use App\Models\Post;
use Illuminate\Http\Request;

class ContactInfoController extends Controller
{
    public function index()
    {
        return view('frontend.contact',[
            'menus'=>Menu::first(),
            'recentPost'=>Post::latest()->limit(4)->get(),
            'trandingCategory'=>Category::with('posts')->latest()->limit(4)->get(),
        ]);
    }



    public function store(Request $request)
    {

        Contact::create($request->validate([
            'fname'=>'required|min:3',
            'lname'=>'required|min:3',
            'phone'=>'required',
            'email'=>'required',
            'message'=>'required|min:10',
        ]));

        return redirect()->route('frontend.contactPage')->with('success','Your contact information successfully send!!');
    }
}
