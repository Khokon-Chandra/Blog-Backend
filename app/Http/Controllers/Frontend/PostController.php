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
        return view('frontend.posts', [
            'pageName' => 'Blogs',
            'menus' => $this->menus,
            'posts' => Post::withCount('comments')->latest()->paginate(10),
        ]);
    }


    public function show(Request $request, $slug)
    {

        $post = $this->postServices->findByPostSlug($slug);
        $request->visitor()->visit($post);
        return view('frontend.single_post.post-single', [
            'pageName' => 'Single Post',
            'menus' => $this->menus,
            'post' => $post,
            'recentPost' => Post::latest()->limit(4)->get(),
            'trandingCategory' => Category::with('posts')->latest()->limit(4)->get(),
        ]);
    }

    public function findByCategory(Request $request, $slug)
    {
        $posts = $this->postServices->findByCategory($request , $slug);

        return view('frontend.category', [
            'pageName' => 'Category',
            'menus' => $this->menus,
            'posts' => $posts,
            'recentPost' => Post::latest()->limit(4)->get(),
            'trandingCategory' => Category::with('posts')->latest()->limit(4)->get(),
        ]);
    }

    public function categoryList()
    {
        return view('frontend.categories', [
            'menus' => $this->menus,
            'pageName' => 'Category List',
            'categories' => Category::paginate(10),
        ]);
    }

    public function findByTag(Request $request, $slug)
    {
        $posts = $this->postServices->findByTag($slug);
        $request->visitor()->visit();
        return view('frontend.posts', [
            'pageName' => 'Tags',
            'menus' => $this->menus,
            'posts' => $posts,
        ]);
    }
}
