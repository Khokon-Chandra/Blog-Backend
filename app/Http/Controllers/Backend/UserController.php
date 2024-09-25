<?php

namespace App\Http\Controllers\Backend;

use App\Models\Post;
use App\Models\User;
use App\Events\UserDeleted;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Services\UserServices;
use App\Trait\Authorizable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    use Authorizable;
    
    private $userService;

    public function __construct()
    {
        $this->userService = new UserServices();
    }
    public function index()
    {
        $users = User::latest()->filter(request(['search']))->paginate(10);
        return view('backend.user.users', ['users' => $users]);
    }


    public function trashed()
    {
        return view('backend.user.trashes', [
            'trashes' => User::onlyTrashed()->paginate(10),
        ]);
    }



    public function show($username)
    {
        $user = User::with(['profile','roles'])->where('username', $username)->firstOrFail();
        return view('backend.user.profile', [
            'user' => $user,
            'profile' => $user->profile ?? null,
        ]);
    }


    public function edit($username)
    {
        $roles = Role::with('permissions')->get();
        $user = User::with(['profile','roles'])->where('username', $username)->firstOrFail();

        return view('backend.user.edit-user', [
            'user' => $user,
            'profile' => $user->profile,
            'roles'=>$roles,
        ]);
    }


    public function update(Request $request)
    {

        if (isset($request->publicInfo)) {
            return $this->userService->updatePublicInfo($request);
        }
        if (isset($request->privateInfo)) {
            return $this->userService->updatePrivateInfo($request);
        }
        if($request->assignRole){
            return $this->userService->AssignRole($request);
        }
    }




    public function create()
    {
        return view('backend.user.add-user');
    }


    public function store(UserRequest $request)
    {
        $attribute = $request->validated();
        $attribute['username'] = Str::slug($request->name) . (User::max('id') + random_int(99, 99999));
        $attribute['password'] = Hash::make($attribute['password']);
        User::create($attribute);
        return redirect()->route('users.index')->with('success', 'You are successfully created an account');
    }


    public function destroy($user)
    {
       
        if (User::where('username', $user)->delete()) {
            return redirect()->route('users.index')
                ->with('success', 'user deleted successfully');
            UserDeleted::dispatch(User::where('username', $user));
        }
        return redirect()->back()->with('error', 'Deletation faild');
    }

    public function restore($user)
    {
        User::where('username', $user)->restore();
        return redirect()->route('users.trash')
            ->with('success', 'Successfully user restored');
    }

    public function deletePermanently($user)
    {
        User::where('username', $user)->forceDelete();
        return redirect()->route('users.trash')
            ->with('success', 'User Permanently Deleted');
    }
}
