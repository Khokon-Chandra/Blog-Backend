<?php
namespace App\Services;

use App\Exceptions\PostNotfoundException;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use GuzzleHttp\Psr7\Request;

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

    public function findByCategory($request,$slug)
    {
        $posts = Post::with(['categories'=>function($query) use($slug) {
            $query->where('slug',$slug)->first();
        }])->paginate(10);
        if(!$posts){
            throw new PostNotfoundException();
        }
        $request->visitor()->visit();
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
