<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\Post;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('backend.menu.menus',[
            'menus'=>Menu::all(),
            'menu' =>Menu::find($request->get('menu')),
            'categories'=>Category::all(),
            'posts'=>Post::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.menu.add-menu',[
           'categories'=>Category::all(),
           'posts'=>Post::all(),
       ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->menu == 'new') {
            Menu::create(['name' => $request->name]);

            return redirect(route('menus.index').'?menu=new')
                ->with('success','Successfully menu created');
        }else{

            $parentMenu = $request->menu;
            $menus = $request->data;

            $modelData = $request->type === 'category'? Category::find($menus):Post::find($menus);


            $menuItemsData =[];
            foreach($modelData as $model){
                $menuItemsData[]=[
                    'menu_id'=>$parentMenu,
                    'slug'=>$model->slug,
                    'name'=>$model->name,
                    'type'=>$request->type,
                ];
            }

            MenuItem::upsert($menuItemsData,['menu_id','slug','name','type']);
            return 'success';

        }





    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
