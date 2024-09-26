<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Trait\Authorizable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    use Authorizable;

    public function index()
    {

        return view('backend.user_management.roles', [
            'roles' => Role::with('permissions')->get(),
        ]);
    }



    public function create()
    {
        return view('backend.user_management.create-role');
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:roles,name',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        Role::create(['name' => $request->name]);
        return response()->json(['success' => 'Successfully roles created'], 200);
    }



    public function edit($id)
    {
        $role = Role::with('permissions')->where('id', $id)->firstOrFail();
        return view('backend.user_management.edit-role', [
            'role' => $role,
            'permissions' => Permission::all(),
        ]);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:roles,name',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        Role::findOrFail($request->id)->update(['name' => $request->name]);

        return response()->json(['success' => 'Successfully role updated'], 200);
    }


    public function destroy($id)
    {
        $role = Role::where('id', $id)->firstOrFail();
        $role->delete();
        return back()->with('success', 'Successfully role deleted');
    }


    public function givePermissionTo(Request $request)
    {
        $role = Role::findOrFail($request->role);
        $permission = Permission::findOrFail($request->permission);
        if ($request->status) {
            $role->givePermissionTo($permission);
            return 'permission assigned';
        }
        $role->revokePermissionTo($permission);
        return 'permission removed';
    }
}
