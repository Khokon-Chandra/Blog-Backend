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
            @isset($selectedMenu)
                @if ($selectedMenu->menuItems->isEmpty() === false)
                    <ul class=" pl-0" id="sortable">
                        @foreach ($selectedMenu->menuItems as $item)
                            <li data-id="{{ $item->id }}" class=" bg-white border p-2 mb-1">{{ $item->name }}
                                <ul></ul>
                            </li>
                        @endforeach
                    </ul>
                    <div class="text-right"><button id="saveMenu" class="btn btn-primary">Save menu</button></div>'
                @else
                    <p>Add menu items form the column on the left</p>
                @endif

            @endisset
        </div>
    </div>

    {{-- Javascript variables --}}
    <div class="d-none">
        <div id="serialize_output2" class="d-none"></div>
        <div id="selectedMenu">{{ $selectedMenu->id ?? '' }}</div>
        <div id="url">{{ route('menus.update', $selectedMenu->id ?? '') }}</div>
        <div id="url-addtomenu">{{ route('menus.addToMenu') }}</div>
        <div id="url-delete">{{ route('menus.destroy', $selectedMenu->id ?? '') }}</div>
    </div>
    {{-- Javascript variables --}}

    @push('scripts')
        <script src="{{ asset('js/menu.js') }}"></script>
    @endpush

</x-backend.app-layout>
