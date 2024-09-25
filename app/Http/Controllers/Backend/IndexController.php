<?php

namespace App\Http\Controllers\Backend;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use App\Trait\Authorizable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    Use Authorizable;
    
    public function dashboard(Request $request)
    {

        return  view('backend.dashboard',[
            'posts_count'=>Post::count(),
            'comments_count'=>Comment::count(),

        ]);
    }
}
