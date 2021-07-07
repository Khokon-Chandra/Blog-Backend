<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        
        return view('user.users',['users'=>User::latest()->paginate(5)]);
    }

    public function profile()
    {
        return view('user.profile');

    }

    public function show($slug)
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
        return view('user.add-user');
        // return view('auth.register');
    }


    public function store(UserRequest $request)
    {
        $attribute = $request->validated();
        $attribute['username'] = Str::slug($request->name) . (User::max('id') + random_int(99, 99999));
        $attribute['password'] = Hash::make($attribute['password']);
        User::create($attribute);
        return redirect()->route('users.index')->with('success','You are successfully created an account');
    }


    public function destroy(User $user)
    {
        if($user->delete()){
            return redirect()->route('user')->with('success','user deleted successfully');
        }
        return redirect()->back()->with('error','Delation faild');
    }



}
