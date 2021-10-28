<?php

namespace App\Http\Controllers\Backend;

use App\Models\Post;
use App\Models\User;
use App\Events\UserDeleted;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->filter(request(['search']))->paginate(10);
        return view('backend.user.users',['users'=>$users]);
    }

    public function trashed()
    {
        return view('backend.user.trashes',[
            'trashes'=>User::onlyTrashed()->paginate(10),
        ]);
    }

    public function profile()
    {
        return view('user.profile');

    }

    public function show($username)
    {
        return view('backend.user.profile');
    }

    public function edit($user)
    {
        return view('backend.user.edit-user',['user'=>User::where('username',$user)->first()]);
    }

    public function update()
    {
        return "update";
    }




    public function create()
    {
        return view('backend.user.add-user');
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


    public function destroy($user)
    {
        // if(Gate::denies('can-delete')){
        //     return view('403');
        // }
        if(User::where('username',$user)->delete()){
            return redirect()->route('users.index')
            ->with('success','user deleted successfully');
            UserDeleted::dispatch(User::where('username',$user));
        }
        return redirect()->back()->with('error','Deletation faild');
    }

    public function restore($user)
    {
        User::where('username',$user)->restore();
        return redirect()->route('users.trash')
        ->with('success','Successfully user restored');
    }

    public function deletePermanently($user)
    {
        User::where('username',$user)->forceDelete();
        return redirect()->route('users.trash')
        ->with('success','User Permanently Deleted');
    }



}