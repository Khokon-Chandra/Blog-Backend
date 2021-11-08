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
        $randomPosts = DB::select("SELECT `posts`.*, (SELECT count(*) FROM `comments` WHERE `posts`.`id` = `comments`.`post_id` AND `comments`.`deleted_at` IS NULL) AS `comments_count` FROM `posts` WHERE `posts`.`deleted_at` IS NULL ORDER BY RAND() DESC LIMIT 5;");

        return view('frontend.home.index', [
            'menus'=> Menu::first(),
            'posts' => $posts,
            'randomPosts' => $randomPosts,
            'latestPosts' => Post::where('type','news')->latest()->get(),
        ]);
    }
}

