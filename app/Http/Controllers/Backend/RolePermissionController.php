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

    public function listOfPermissions()
    {
        return view('backend.user_management.permissions');
    }


}
