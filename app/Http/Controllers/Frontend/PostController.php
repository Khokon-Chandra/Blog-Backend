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
            'pageName'=>'Blogs',
            'menus'=>$this->menus,
            'posts'=>Post::withCount('comments')->latest()->paginate(10),
        ]);
    }


    public function show($slug)
    {
        $post = $this->postServices->findByPostSlug($slug);
        return view('frontend.single_post.post-single',[
            'pageName'=>'Single Post',
            'menus'=>$this->menus,
            'post'=>$post,

        ]);
    }

    public function findByCategory($slug)
    {
        $category = $this->postServices->findByCategory($slug);
        return view('frontend.category',[
            'pageName'=>'Category',
            'menus'=>$this->menus,
            'posts'=>$category->posts,
        ]);
    }

    public function findByTag($slug)
    {
        $posts = $this->postServices->findByTag($slug);

        return view('frontend.posts',[
            'pageName'=>'Tags',
            'menus'=>$this->menus,
            'posts'=>$posts,
        ]);
    }

}
