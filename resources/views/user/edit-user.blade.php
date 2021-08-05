<x-app-layout>
    <x-page-title pagename="Edit User" />
    <div class="row">
        
        @include('user.subview.user-link')

        <div class="col-md-9 col-xl-10">
            <div class="tab-content">
                @include('user.subview.account')
                @include('user.subview.password')
                @include('user.subview.privacy-safty')
                @include('user.subview.notifications')
                @include('user.subview.delete-account')
            </div>
        </div>
    </div>
</x-app-layout>
