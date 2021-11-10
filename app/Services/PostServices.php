<?php
namespace App\Services;

use App\Exceptions\PostNotfoundException;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class PostServices
{
    public function findByPostSlug($slug)
    {
        $post = Post::with(['comments'=>function($query){
            $query->with('author','childs');
        },'author','categories'=>function($query){
            $query->with('posts');
        },'tags'])->where('slug',$slug)->first();
        if(!$post){
            throw new PostNotfoundException();
        }
        return $post;
    }

    public function findByCategory($slug)
    {
        // $category = Category::with('posts')->where('slug',$slug)->first();
        $posts = Post::with(['categories'=>function($query) use($slug) {
            $query->where('slug',$slug)->first();
        }])->paginate(10);
        if(!$posts){
            throw new PostNotfoundException();
        }
        return $posts;
    }

    public function findByTag($slug)
    {
        $posts = Post::with(['tags'=>function($query) use($slug) {
            $query->where('slug',$slug)->first();
        }])->paginate(10);

        if(!$posts){
            throw new PostNotfoundException();
        }

        return $posts;
    }
}
