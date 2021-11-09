<x-backend.app-layout>
    <x-page-title pagename="Edit User" />
    <div class="row">

        @include('backend.user.subview.user-link')

        <div class="col-md-9 col-xl-10">
            <div class="tab-content">
                @include('backend.user.subview.account')
                @include('backend.user.subview.password')
                @include('backend.user.subview.privacy-safty')
                @include('backend.user.subview.notifications')
                @include('backend.user.subview.delete-account')
            </div>
        </div>
    </div>
</x-backend.app-layout>
