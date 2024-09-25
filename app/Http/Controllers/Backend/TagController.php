<?php

namespace App\Http\Controllers\Backend;

use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Trait\Authorizable;

class TagController extends Controller
{
    use Authorizable;
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.post.tag.tags',['tags'=>Tag::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.post.tag.add-tag',['tags'=>Tag::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['name'=>'required|min:4']);
        Tag::create([
            'slug' => Str::slug($request->name) . (Tag::max('id') + random_int(99, 99999)),
            'name' => $request->name,
            'parent_id' => is_numeric($request->parent_id) ? $request->parent_id : null,
            'description' => !empty($request->description) ? $request->description : '',
        ]);
        return back()->with('success','Successfully a new Tag Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('backend.post.tag.edit-tag',['tag'=>$tag,'tags'=>Tag::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $attribute = $request->validate(['name'=>'required|min:4']);
        $tag->update($attribute);
        return back()->with('success','Successfully Tag Updated !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return back()->with('success','Successfully Tag Deleted !!');
    }
}
