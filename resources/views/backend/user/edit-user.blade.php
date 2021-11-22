<x-backend.app-layout>
    <x-page-title pagename="Edit User" />
    <div class="d-flex mb-3">
        <a href="{{ route('users.index') }}" class="btn btn-primary mr-2">Go To List</a>
        <a href="{{ route('users.show',$user->username) }}" class="btn btn-info mr-2">View Profile</a>
    </div>
    <div class="row">
        @include('backend.user.subview.user-link')

        <div class="col-md-9 col-xl-10">
            <div class="tab-content">
                @include('backend.user.subview.account')
                @include('backend.user.subview.password')
                @include('backend.user.subview.roles')
                @include('backend.user.subview.notifications')
                @include('backend.user.subview.delete-account')
            </div>
        </div>
    </div>
</x-backend.app-layout>
