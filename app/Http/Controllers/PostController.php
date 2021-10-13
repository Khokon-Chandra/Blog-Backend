<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with(['categories:name','author','comments'])->latest()
        ->filter(request(['search']))->get();

        return view('backend.post.posts',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Post $post)
    {
        if($request->user()->cannot('create',$post)){
            return view('403');
        }
        return view('backend.post.add-post',['categories'=>Category::latest()->get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request, Post $post)
    {
        if($request->user()->cannot('create',$post)){
            return view('403');
        }
        $attributes = $request->validated();
        $attributes['slug'] = $request->createUniqueSlug();
        $attributes['user_id'] = Auth::id();
        Post::create($attributes);
        return redirect()->route('article.posts.index')->with('success','Successfully a new post created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {

        return view('backend.post.edit-post',[
            'post'=> Post::with('categories')->where('slug',$slug)->first(),
            'categories'=> Category::latest()->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        if(Post::where('slug',$slug)->update($request->validate([
            'title'=>'required|min:10',
            'description'=>'required|min:200',
        ]))){
            return redirect()->route('article.posts.index')->with('success','post updated succesfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        if(Gate::denies('can-delete')){
            return view('403');
        }
        if(Post::where('slug',$slug)->delete()){
            return redirect()->route('article.posts.index')->with('success','Successfully Deleted');
        }
        return redirect()->back()->with("error","Something went wrong");
    }
}
