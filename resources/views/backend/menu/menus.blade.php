<x-backend.app-layout>
    <x-page-title pagename="Menus" />

    <x-alert />

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

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
                <form id="newMenu" action="{{ route('menus.store') }}?menu=new" method="POST">
                    @csrf
                    <div class="d-flex justify-content-between">
                        <input name="name" id="menu-name" type="text" class="d-block" placeholder="Menu Name">
                        <input id="add-menu" type="submit" class="btn btn-primary d-block" value="Create Menu">
                    </div>
                </form>
            @else
                <p>Add menu items form the column on the left</p>

                <ul class=" pl-0" id="sortable">
                    @foreach($selectedMenu->menuItems as $item)
                       <li data-id="{{ $item->id }}" class=" bg-white border p-2 mb-1">
                           {{ $item->name }}
                           <ul></ul>
                       </li>

                    @endforeach
                </ul>
                <div class="text-right">
                    <button id="saveMenu" class="btn btn-primary" >Save menu</button>
                </div>

               <pre>
                    <div id="serialize_output2" class="d-none"></div>
               </pre>

            @endif
        </div>
    </div>
    <script>

        var group = $("#sortable").sortable({
            group: 'serialization',
            delay: 500,
            onDrop: function ($item, container, _super) {
                var data = group.sortable("serialize").get();

                var jsonString = JSON.stringify(data, null, ' ');

                $('#serialize_output2').text(jsonString);
                _super($item, container);
            }
        });

    </script>

    <script>
        $('#saveMenu').click(function(){
            selectedMenu = {{ $selectedMenu->id }}
            newContent = $('#serialize_output2').text();
            url        = "{{ route('menus.update',$selectedMenu->id) }}"

            axios.put(url,{menuId:selectedMenu,content:newContent})
                .then(function (response){
                    if(response.status == 200){
                        // location.reload();
                        console.log(response.data);
                    }
                })
                .catch(function (error){
                    console.log(error)
                })


        });
    </script>

</x-backend.app-layout>
