<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    public function index()
    {
        return view('backend.post.category.category', ['categories' => Category::paginate(5)]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.post.category.add-category', ['categories' => Category::latest()->get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(['name' => 'required']);
        Category::create([
            'slug' => Str::slug($request->name) . (Category::max('id') + random_int(99, 99999)),
            'name' => $request->name,
            'parent_id' => is_numeric($request->parent_id) ? $request->parent_id : null,
            'description' => !empty($request->description) ? $request->description : '',
        ]);

        return back()->with('success', 'Category successfully inserted');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('backend.post.category.edit-category', [
            'category' => $category,
            'categories' => Category::latest()->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {

        $request->validate(['name' => ['required']]);
        $update = $category->update([
            'slug' => Str::slug($request->name) . (Category::max('id') + random_int(99, 99999)),
            'name' => $request->name,
            'parent_id' => is_numeric($request->parent_id) ? $request->parent_id : null,
            'description' => !empty($request->description) ? $request->description : '',
        ]);
        return redirect()->route('categories.index')->with('success', 'Category successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with('success', 'successfully deleted');

    }
}
