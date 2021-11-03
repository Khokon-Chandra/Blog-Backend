<div class="border d-flex p-2 mb-3 align-items-center bg-white">
    <p class="mx-2 mb-0">Select a menu</p>
    <form class="d-flex" action="{{route('menus.index')}}" method="get">
        <select name="menu" class="form-control mr-1">
            <option >--select menu--</option>
            @foreach($menus as $menu)
                <option {{ request('menu')==$menu->id?'selected':'' }} value="{{$menu->id}}" >{{$menu->name}}</option>
            @endforeach
        </select>
        <input type="submit" class="btn btn-outline-primary btn-sm py-1 mr-2" value="Select">
    </form>
    <p class="mb-0">or <a href="{{route('menus.create')}}" class="text-primary"> create a new menu</a></p>
   @isset($selectedMenu->id)
   <p class="mb-0 ml-3"><a id="deleteMenu" class="text-danger" href="">Delete menu</a></p>
   @endisset
</div>
