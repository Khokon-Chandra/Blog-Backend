<x-backend.app-layout>
    <x-page-title pagename="Menus" />
    <x-alert />


    <div class="border d-flex p-2 mb-3 align-items-center bg-white">
        <p class="mx-2 mb-0">Select a menu</p>
        <form class="d-flex" action="{{route('menus.index')}}" method="get">
            <select name="menu" class="form-control">
                <option>--select menu--</option>
                @foreach($menus as $menu)
                    <option {{ request('menu')==$menu->id?'selected':'' }} value="{{$menu->id}}" >{{$menu->name}}</option>
                @endforeach
            </select>
            <input type="submit" class="btn btn-outline-primary btn-sm py-1 mx-3" value="Select">
        </form>
        <p class="mb-0">or <a href="{{route('menus.index')}}?menu=new" class="text-primary"> create a new menu</a> Dont forget to save your changes</p>
    </div>


    <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
            <h5 class="bg-theme text-white d-inline-block mb-0 p-2">Add Menu Items</h5>
            <hr class="bg-theme mt-0 p-0 ">
            @include('backend.menu._menu_items')

        </div>
        <div class="col-lg-8 col-md-8 col-12">
            <h5 class="bg-theme text-white d-inline-block mb-0 p-2">Menu Structure</h5>
            <hr class="bg-theme mt-0 p-0 ">
            @if(request('menu')== 'new')
                <h4>Create new menu</h4>
                <div class="d-flex justify-content-between">
                    <input id="menu-name" type="text" class="d-block" placeholder="Menu Name">
                    <input id="add-menu" type="submit" class="btn btn-primary d-block" value="Create Menu">
                </div>
            @else
                <p>Add menu items form the column on the left</p>

            @endif
        </div>
    </div>
    <script>
        $('#add-menu').click(function(event){

           data = {'name':$(this).parent().children().first().val()}


            axios.post("{{route('menus.store')}}?menu=new", data)
            .then(function (response) {
               location.reload();
            })
            .catch(function (error) {
                console.log(error);
            });


        });
    </script>

</x-backend.app-layout>
