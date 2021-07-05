<nav id="sidebar" class="sidebar">
    <div class="sidebar-content js-simplebar">
        
        <a class="sidebar-brand" href="{{ route('dashboard') }}">
            <span class="align-middle">Admin Panel</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <x-nav-link :icon="__('sliders')" :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-nav-link>


            <!-- Dropdown link -->

            <x-dropdown :trigger="__('Posts')" :active="strpos(request()->url(),'posts')" :id="__('post')" :icon="__('package')">
                <x-slot name="content">
                    <x-dropdown-link :href="route('posts.index')" :active="request()->routeIs('posts.index')">{{ __('All Posts') }}</x-dropdown-link>

                    <x-dropdown-link :href="route('posts.create')" :active="request()->routeIs('posts.create')">{{ __('Add New') }}</x-dropdown-link>

                    <x-dropdown-link :href="route('categories.index')" :active="request()->routeIs('categories.index')">{{ __('Category') }}</x-dropdown-link>
                </x-slot>
            </x-dropdown>


            <!-- Dropdown link -->

            <x-dropdown :trigger="__('Users')" :active="strpos(request()->url(),'users')" :id="__('user')" :icon="__('users')">
                <x-slot name="content">                    
                    <x-dropdown-link :href="route('users.profile')" :active="request()->routeIs('user.profile')">{{ __('Profile') }}</x-dropdown-link>
                    <x-dropdown-link :href="route('users.index')" :active="request()->routeIs('users.index')">{{ __('All Users') }}</x-dropdown-link>
                    <x-dropdown-link :href="route('users.create')" :active="request()->routeIs('users.create')">{{ __('Add New') }}</x-dropdown-link>
                </x-slot>
            </x-dropdown>


            <x-nav-link :icon="__('layers')" :href="route('menu')" :active="request()->routeIs('menu')">
                {{ __('Menu') }}
            </x-nav-link>

            <x-nav-link :icon="__('folder')" :href="route('media')" :active="request()->routeIs('media')">
                {{ __('Media') }}
            </x-nav-link>

            <x-nav-link :icon="__('settings')" :href="route('setting')" :active="request()->routeIs('setting')">
                {{ __('Settings') }}
            </x-nav-link>

            
            <!-- <x-nav-link :icon="__('book')" :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Blank') }}
            </x-nav-link> -->

            <li class="sidebar-header">
                Tools & Components
            </li>

            

            

        </ul>

        
    </div>
</nav>
