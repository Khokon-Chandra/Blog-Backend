<x-backend.app-layout>
    <x-page-title pagename="Menus" />
    <x-alert />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    @include('backend.menu._top_select_bar')

    <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
            <h5 class="bg-theme text-white d-inline-block mb-0 p-2">Add Menu Items</h5>
            <hr class="bg-theme mt-0 p-0 ">
            @include('backend.menu._right_side_items')
        </div>

        <div class="col-lg-8 col-md-8 col-12">
            <h5 class="bg-theme text-white d-inline-block mb-0 p-2">Menu Structure</h5>
            <hr class="bg-theme mt-0 p-0 ">


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
                <div id="serialize_output2" class="d-none"></div>


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

    @isset($selectedMenu)
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
    @endisset


</x-backend.app-layout>
