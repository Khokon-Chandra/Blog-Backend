<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RolePermissionController extends Controller
{

    public function listOfRoles()
    {
        return view('backend.user_management.roles');
    }

    public function createRole()
    {
        return view('backend.user_management.create-role');
    }

    /**
     * permission methods are start here
     */

    public function listOfPermissions()
    {
        return view('backend.user_management.permissions');
    }

    public function createPermission()
    {
        return view('backend.user_management.create-permission');
    }


}
