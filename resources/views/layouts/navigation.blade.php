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

            <x-nav-link :icon="__('user')" :href="route('profile')" :active="request()->routeIs('profile')">
                {{ __('Profile') }}
            </x-nav-link>


            <!-- Dropdown link -->

            <x-dropdown :trigger="__('Posts')" :active="strpos(request()->url(),'posts')" :id="__('post')" :icon="__('package')">
                <x-slot name="content">
                    <x-dropdown-link :href="route('posts')" :active="request()->routeIs('posts')">{{ __('All Posts') }}</x-dropdown-link>

                    <x-dropdown-link :href="route('add-new')" :active="request()->routeIs('add-new')">{{ __('Add New') }}</x-dropdown-link>

                    <x-dropdown-link :href="route('category')" :active="request()->routeIs('category')">{{ __('Category') }}</x-dropdown-link>
                </x-slot>
            </x-dropdown>


            <!-- Dropdown link -->

            <x-dropdown :trigger="__('Users')" :active="request()->routeIs('users')" :id="__('user')" :icon="__('users')">
                <x-slot name="content">
                    <x-dropdown-link :href="route('posts')" :active="request()->routeIs('posts')">{{ __('All Posts') }}</x-dropdown-link>

                    <x-dropdown-link :href="route('posts')" :active="request()->routeIs('posts')">{{ __('Add New') }}</x-dropdown-link>

                    <x-dropdown-link :href="route('posts')" :active="request()->routeIs('posts')">{{ __('Category') }}</x-dropdown-link>
                </x-slot>
            </x-dropdown>



            <x-nav-link :icon="__('settings')" :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Settings') }}
            </x-nav-link>

            <x-nav-link :icon="__('credit-card')" :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Invoice') }}
            </x-nav-link>

            <x-nav-link :icon="__('book')" :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Blank') }}
            </x-nav-link>

            <li class="sidebar-header">
                Tools & Components
            </li>

            

            

        </ul>

        
    </div>
</nav>
