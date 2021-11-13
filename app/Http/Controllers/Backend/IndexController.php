<?php

namespace App\Http\Controllers\Backend;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public function dashboard(Request $request)
    {

        echo view('backend.dashboard',[
            'posts_count'=>Post::count(),
            'comments_count'=>Comment::count(),

        ]);
    }
}
