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
            <h4>Create new menu</h4>
            <form id="newMenu" action="{{ route('menus.store') }}?menu=new" method="POST">
                @csrf
                <div class="d-flex justify-content-between">
                    <input name="name" id="menu-name" type="text" class="d-block" placeholder="Menu Name" value="{{ old('name') }}">
                    <input id="add-menu" type="submit" class="btn btn-primary d-block" value="Create Menu">
                </div>
                <x-backend.invalid-feedback attribute="name" />
            </form>
        </div>
    </div>

</x-backend.app-layout>
