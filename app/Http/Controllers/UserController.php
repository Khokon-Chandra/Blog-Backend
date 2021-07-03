<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.users',['users'=>User::latest()->get()]);
    }

    public function profile()
    {
        return view('user.profile');

    }

    public function edit()
    {
        return "edit method";
    }

    public function update()
    {
        return "update";
    }

    public function create()
    {
        // return view('user.add-user');
        return "add new user";
    }


    public function store()
    {
        return "store";
    }


    public function destroy(User $user)
    {
        if($user->delete()){
            return redirect()->route('user')->with('success','user deleted successfully');
        }
        return redirect()->back()->with('error','Delation faild');
    }



}
