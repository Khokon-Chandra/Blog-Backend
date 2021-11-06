<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public $menus;
    public function __construct()
    {
        $this->menus = Menu::first();
    }

    public function index()
    {
        return view('frontend.blog',[
            'posts'=>Post::withCount('comments')->latest()->paginate(10),
        ]);
    }

    public function show($slug)
    {

        return view('frontend.post-single',[
            'menus'=>$this->menus,
            'post'=>Post::with(['comments','author'])->where('slug',$slug)->firstOrFail(),
        ]);
    }

    public function onCategory($slug)
    {
        $category = Category::with('posts')->where('slug',$slug)->firstOrFail();
        return view('frontend.category',[
            'menus'=>$this->menus,
            'category'=>$category,
            'posts'=>$category->posts,
        ]);
    }

}
