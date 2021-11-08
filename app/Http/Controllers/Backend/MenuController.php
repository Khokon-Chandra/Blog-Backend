<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{


    public function index(Request $request)
    {

        $selectedMenu = Menu::find($request->menu);

        if (!is_null($selectedMenu)) {

            $selectedMenu->content = !is_null($selectedMenu->content) ? json_decode($selectedMenu->content) : null;

        }


        return view('backend.menu.menus', [
            'selectedMenu' => $selectedMenu,
            'menus' => Menu::all(),
            'categories' => Category::all(),
            'posts' => Post::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.menu.add-menu', [
            'menus' => Menu::all(),
            'categories' => Category::all(),
            'posts' => Post::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        Menu::create($request->validate(['name' => 'required|min:5']));
        return back()->with('success', 'Successfully menu created');
    }


    public function addToMenu(Request $request)
    {

        if($request->type === 'custom'){
            MenuItem::create([
                'menu_id'=>$request->menu,
                'slug'=>$request->target,
                'name'=>$request->name,
                'type'=>'custom',
                'target'=>$request->target,
            ]);
            return true;
        }
        $parentMenu = $request->menu;
        $menus = $request->data;
        $modelData = $request->type === 'category' ? Category::find($menus) : Post::find($menus);
        $queryPlaceholder = '';
        $queryValues      = [];
        foreach ($modelData as $model) {
            $queryPlaceholder .= '(?,?,?,?),';
            $queryValues[] = $parentMenu;
            $queryValues[] = $model->slug;
            $queryValues[] = $model->name ?? $model->title;
            $queryValues[] = $request->type;
        }
        $keys = rtrim($queryPlaceholder, ',');
        DB::insert('insert into menu_items (menu_id,slug,name,type) values'.$keys, $queryValues);
        return 'success';

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
     * @param  int
     * @var $id $request->content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        return Menu::where('id', $request->menuId)->update(['content' => $request->content]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Menu $menu)
    {
        return $menu->delete();
    }
}
