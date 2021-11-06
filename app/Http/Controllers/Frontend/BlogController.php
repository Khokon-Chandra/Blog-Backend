<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        return view('frontend.blog',[
            'posts'=>Post::withCount('comments')->latest()->paginate(10),
        ]);
    }

    public function show($slug)
    {

    }

}
