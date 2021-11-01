<x-backend.app-layout>
    <x-page-title pagename="Menus" />
    <x-alert />
    <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
            <h5 class="bg-theme text-white d-inline-block mb-0 p-2">Add Menu Items</h5>
            <hr class="bg-theme mt-0 p-0 ">
            @include('backend.menu._menu_items')

        </div>
        <div class="col-lg-8 col-md-8 col-12">
            <h5 class="bg-theme text-white d-inline-block mb-0 p-2">Menu Structure</h5>
            <hr class="bg-theme mt-0 p-0 ">
            <h4>Create new menu</h4>
            <div class="d-flex justify-content-between">
                <input type="text" class="d-block" placeholder="Menu Name">
                <input type="submit" class="btn btn-primary d-block" value="Create Menu">
            </div>
        </div>
    </div>

</x-backend.app-layout>
