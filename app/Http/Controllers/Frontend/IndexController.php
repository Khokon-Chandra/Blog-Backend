<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Menu;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{


    public function index()
    {
        $posts = Post::withCount('comments')->get();
        $randomPosts = DB::select("SELECT `posts`.*, (SELECT count(*) FROM `comments` WHERE `posts`.`id` = `comments`.`post_id` AND `comments`.`deleted_at` IS NULL) AS `comments_count` FROM `posts` WHERE `posts`.`deleted_at` IS NULL ORDER BY RAND() DESC LIMIT 5;");

        return view('frontend.home.index', [
            'menus'=> Menu::first(),
            'posts' => $posts,
            'randomPosts' => $randomPosts,
            'latestPosts' => Post::where('type','news')->latest()->limit(4)->get(),
            'trendingNews'=>Post::withCount('comments')->where('type','news')->orderBy('comments_count','desc')->limit(5)->get(),
            'featuredVideoes'=>Post::withCount('comments')->where('type','video')->where('is_featured',true)->limit(8)->get(),
            'recentComments'=>Comment::with('author')->latest()->limit(10)->get(),
            'CategorySlider'=>Category::with(['posts'=>function($query){
                $query->limit(5);
            }])->limit(2)->get(),
            'featuredNews'=>Post::with('categories')->withCount('comments')->where('is_featured',true)->limit(3)->get(),
            'categories'=>Category::withCount('posts')->limit(10)->get(),
        ]);
    }









}

