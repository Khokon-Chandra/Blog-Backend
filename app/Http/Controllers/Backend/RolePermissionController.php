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
            'roles'=>Role::with('permissions')->get(),
        ]);
    }



    public function createRole()
    {
        return view('backend.user_management.create-role');
    }


    public function storeRole(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required|unique:roles,name',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),422);
        }
        Role::create(['name'=>$request->name]);
        return response()->json(['success'=>'Successfully roles created'],200);

    }



    public function editRole($id)
    {
        $role = Role::findOrFail($id);
        return view('backend.user_management.edit-role',['role'=>$role]);
    }

    public function updateRole(Request $request)
    {
        return back()->with('success','successfully role updated');
    }


    public function destroyRole($id)
    {
        return back();
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
