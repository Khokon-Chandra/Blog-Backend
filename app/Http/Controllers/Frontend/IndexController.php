<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{


    public function index()
    {

        $posts = Post::withCount('comments')->get();
        $randomPosts = DB::select("select `posts`.*, (select count(*) from `comments` where `posts`.`id` = `comments`.`post_id` and `comments`.`deleted_at` is null) as `comments_count` from `posts` where `posts`.`deleted_at` is null order by rand() desc limit 5;");

        return view('frontend.home.index', [
            'menus'=>Menu::all(),
            'posts' => $posts,
            'randomPosts' => $randomPosts,
            'latestPosts' => Post::where('type','news')->latest()->get(),
        ]);
    }
}

