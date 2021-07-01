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

    public function show()
    {

    }

    public function update()
    {

    }

    public function create()
    {

    }


    public function store()
    {

    }


    public function destroy()
    {
        return "user deleted";
    }



}
