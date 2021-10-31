<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Media;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with(['categories:name','author',])->withCount('comments')->latest()
        ->filter(request(['search']))->get();
        return view('backend.post.posts',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.post.add-post.add-post',[
            'categories'=>Category::all(),
            'tags'=>Tag::all(),
            'media'=>Media::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $attribute            = $request->only(['title','description','feature_image','excerpt']);
        $attribute['slug']    = $request->createUniqueSlug();
        $attribute['user_id'] = Auth::id();
        $post['post_status']  = $request->isInherit();
        $categories           = $request->only('categories')['categories']??1;
        $tags                 = $request->only('tags')['tags']??1;

        $categoryInstance     = Category::find($categories);
        $tagInstance          = Tag::find($tags);
        $postInstance         = Post::create($attribute);
        $postInstance->categories()->sync($categoryInstance);
        $postInstance->tags()->sync($tagInstance);

        return back()->with('success','Successfully a new post created');
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
            'post'=> Post::with('categories','tags')->where('slug',$slug)->firstOrFail(),
            'categories'=> Category::all(),
            'tags'=> Tag::all(),
            'media'=>Media::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $slug)
    {

        $attribute                = $request->only(['title','description','feature_image','excerpt']);
        $attribute['post_status'] = $request->isInherit();
        $categories               = $request->only('categories')['categories']??1;
        $tags                     = $request->only('tags')['tags']??1;
        $categoryInstance         = Category::find($categories);
        $tagInstance              = Tag::find($tags);
        $postInstance             =  Post::where('slug',$slug)->firstOrFail();

        $postInstance->update($attribute);
        $postInstance->categories()->attach($categoryInstance);
        $postInstance->tags()->attach($tagInstance);
        return back()->with('success','post updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        if(Post::where('slug',$slug)->delete()){
            return redirect()->route('posts.index')->with('success','Successfully Deleted');
        }
        return redirect()->back()->with("error","Something went wrong");
    }


}
