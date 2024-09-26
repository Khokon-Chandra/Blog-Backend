<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Trait\Authorizable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{

    /**
     * permission methods are start here
     */

    public function index()
    {

        return view('backend.user_management.permissions', [
            'permissions' => Permission::with('roles')->get(),
        ]);
    }

    public function create()
    {
        return view('backend.user_management.create-permission');
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:permissions,name',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        Permission::create(['name' => $request->name]);
        return response()->json(['success' => 'Successfully permission created'], 200);
    }
}
