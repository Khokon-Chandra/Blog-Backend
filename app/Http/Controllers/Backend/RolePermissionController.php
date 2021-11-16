<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionController extends Controller
{

    public function listOfRoles()
    {
        return view('backend.user_management.roles',[
            'roles'=>Role::all(),
        ]);
    }



    public function createRole()
    {
        return view('backend.user_management.create-role');
    }



    public function storeRole(Request $request)
    {
        Role::create($request->validate(['name'=>'required']));
        return response()->json(['success'=>'Successfully Role created'],200);
    }

    /**
     * permission methods are start here
     */

    public function listOfPermissions()
    {
        return view('backend.user_management.permissions',['permissions'=>Permission::all()]);
    }

    public function createPermission()
    {
        return view('backend.user_management.create-permission');
    }


    public function storePermission(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required|unique:permissions,name',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),422);
        }
        Permission::create(['name'=>$request->name]);
        return response()->json(['success'=>'Successfully permission created'],200);

    }


}
