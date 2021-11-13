
<nav id="sidebar" class="sidebar">
    <div class="sidebar-content js-simplebar">

        <a class="sidebar-brand" href="{{ route('frontend.home') }}">
            <span class="align-middle">Visit Website</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>


            <x-backend.nav-link :icon="__('sliders')" :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-backend.nav-link>


            <!-- Dropdown link -->

            <x-backend.dropdown :trigger="__('Posts')" :active="__('posts.categories.tags')" :id="__('posts')" :icon="__('aperture')">
                <x-slot name="content">
                    <x-backend.dropdown-link :href="route('posts.index')" :active="request()->routeIs('posts.index')">{{ __('All Posts') }}</x-backend.dropdown-link>

                    <x-backend.dropdown-link :href="route('posts.create')" :active="request()->routeIs('posts.create')">{{ __('Add New') }}</x-backend.dropdown-link>

                    <x-backend.dropdown-link :href="route('categories.index')" :active="request()->routeIs('categories.index')">{{ __('Category') }}</x-backend.dropdown-link>
                    <x-backend.dropdown-link :href="route('tags.index')" :active="request()->routeIs('tags.index')">{{ __('Tag') }}</x-backend.dropdown-link>
                </x-slot>
            </x-backend.dropdown>

            <x-backend.nav-link :icon="__('layers')" :href="route('menus.index')" :active="request()->routeIs('menus.index')">
                {{ __('Menu') }}
            </x-backend.nav-link>

            <x-backend.nav-link :icon="__('folder')" :href="route('media.index')" :active="request()->routeIs('media.index')">
                {{ __('Media') }}
            </x-backend.nav-link>

            <x-backend.nav-link :icon="__('message-square')" :href="route('comments.index')" :active="is_int(strpos(Route::currentRouteName(),'comments'))">
                {{ __('Comments') }}
            </x-backend.nav-link>


            <!-- Dropdown link  Users section-->

            <x-backend.dropdown :trigger="__('Users')" :active="__('users')" :id="__('user')" :icon="__('users')">
                <x-slot name="content">
                    <x-backend.dropdown-link :href="route('users.show',['user'=>Auth::user()->username])" :active="request()->routeIs('user.show')">{{ __('Profile') }}</x-backend.dropdown-link>
                    <x-backend.dropdown-link :href="route('users.index')" :active="request()->routeIs('users.index')">{{ __('All Users') }}</x-backend.dropdown-link>
                    <x-backend.dropdown-link :href="route('users.create')" :active="request()->routeIs('users.create')">{{ __('Add New') }}</x-backend.dropdown-link>
                </x-slot>
            </x-backend.dropdown>

             <!-- Roles and Permissions Dropdown link -->

             <x-backend.dropdown :trigger="__('Roles & Permissions')" :active="__('access_control')" :id="__('rolespermissions')" :icon="__('lock')">
                <x-slot name="content">
                    <x-backend.dropdown-link :href="route('access_control.roles')" :active="request()->routeIs('access_control.roles')">Roles</x-backend.dropdown-link>
                    <x-backend.dropdown-link :href="route('access_control.permissions')" :active="request()->routeIs('access_control.permissions')">Permissions</x-backend.dropdown-link>

                </x-slot>
            </x-backend.dropdown>

            <x-backend.nav-link :icon="__('settings')" :href="route('settings')" :active="request()->routeIs('settings')">
                {{ __('Settings') }}
            </x-backend.nav-link>


            <!-- <x-backend.nav-link :icon="__('book')" :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Blank') }}
            </x-backend.nav-link> -->

            <li class="sidebar-header">
                Tools & Components
            </li>





        </ul>


    </div>
</nav>
