<?php

namespace App\Http\Controllers\Frontend;

use App\Exceptions\PostNotfoundException;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Post;
use App\Services\PostServices;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $menus;

    private PostServices $postServices;


    public function __construct()
    {
        $this->menus = Menu::first();
        $this->postServices = new PostServices();
    }

    public function index()
    {
        return view('frontend.posts',[
            'menus'=>$this->menus,
            'posts'=>Post::withCount('comments')->latest()->paginate(10),
        ]);
    }


    public function show($slug)
    {
        $post = $this->postServices->findByPostSlug($slug);
        return view('frontend.post-single',[
            'menus'=>$this->menus,
            'post'=>$post,
            // 'relatedPosts'=>Post::where($category)
        ]);
    }

    public function findByCategory($slug)
    {
        $category = $this->postServices->findByCategory($slug);
        return view('frontend.category',[
            'menus'=>$this->menus,
            'category'=>$category,
            'posts'=>$category->posts,
        ]);
    }

    public function findByTag($slug)
    {
        $tag = $this->postServices->findByTag($slug);
        return view('frontend.posts',[
            'menus'=>$this->menus,
            'tag'=>$tag,
            'posts'=>$tag->posts,
        ]);
    }

}
