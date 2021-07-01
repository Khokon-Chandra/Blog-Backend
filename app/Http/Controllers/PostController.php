<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
   
    public function index()
    {
        return view('post.posts',['posts'=>Post::latest()->get()]);
    }

   
    public function create()
    {
        return view('post.add-post',['categories'=>Category::latest()->get()]);
    }


    public function store(PostRequest $request)
    {
        $attributes = $request->validated();
        $attributes['slug'] = $request->createUniqueSlug();
        $attributes['user_id'] = Auth::id();
        Post::create($attributes);
        return redirect()->back()->with('success','Successfully a new post created');
        
    }



    public function edit(Post $post)
    {
        return view('post.edit-post',[
            'post'=> $post,
            'categories'=> Category::latest()->get(),
        ]);
    }

    

    public function update(PostRequest $request, Post $post)
    {
        $result = $post->update($request->validated());
        if($result){
            return redirect()->route('post')->with('success','post updated succesfully');
        }
    }

    
    public function destroy()
    {
       return "post deleted";
    }


    
}
