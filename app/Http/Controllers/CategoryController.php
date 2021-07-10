<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{

    public function index()
    {
        return view('post.category',['categories'=>Category::paginate(5)]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.add-category',['categories'=>Category::latest()->get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $request->validate(['name'=>'required']);
        $store = Category::create([
            'slug'=>Str::slug($request->name) . (Category::max('id') + random_int(99, 99999)),
            'name'=>$request->name,
            'parent_id'=>is_numeric($request->parent_id)?$request->parent_id : null,
            'description'=> !empty($request->description)?$request->description:'',
        ]);
        if($store){
            return redirect()->route('article.categories.index')->with('success','Category successfully inserted');
        }
        echo "store";
        return redirect()->back()->with('error','something went wrong');
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('post.edit-category',[
            'category'=>Category::where('slug',$slug)->first(),
            'categories'=>Category::latest()->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
    
       $request->validate(['name'=>['required']]);
       $update = Category::where('slug',$slug)->update([
           'slug'=>Str::slug($request->name) . (Category::max('id') + random_int(99, 99999)),
           'name'=>$request->name,
           'parent_id'=>is_numeric($request->parent_id)?$request->parent_id : null,
           'description'=> !empty($request->description)?$request->description:'',
       ]);
       if($update){
           return redirect()->route('article.categories.index')->with('success','Category successfully updated');
       }
       return redirect()->back()->with('error','something went wrong');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        if(Category::where('slug',$slug)->delete()){
            return redirect()->route('article.categories.index')->with('success','successfully deleted');
        }
        return redirect()->back()->with('error','something went wrong');
    }
}
