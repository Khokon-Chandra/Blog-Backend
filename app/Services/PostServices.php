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
        $post = Post::with(['comments','author','tags'])->where('slug',$slug)->first();
        if(!$post){
            throw new PostNotfoundException();
        }
        return $post;
    }

    public function findByCategory($slug)
    {
        $category = Category::with('posts')->where('slug',$slug)->first();
        if(!$category){
            throw new PostNotfoundException();
        }
        return $category;
    }

    public function findByTag($slug)
    {
        $tag = Tag::with('posts')->where('slug',$slug)->first();
        if(!$tag){
            throw new PostNotfoundException();
        }
        return $tag;
    }
}
