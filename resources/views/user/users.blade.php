<x-app-layout>
    <x-page-title pagename="Users" />
    <x-alert />
    <x-content-card :title="__('Card Title')" :subTitle="__('card subtitle')">
       
        <table class="table table-striped">
            <thead>
                <tr>
                    <th >Avatar</th>
                    <th>Name</th>
                    <th >Email</th>
                    <th >Posted</th>
                    <th class="d-none d-md-table-cell">Date</th>
                    <th >Actions</th>
                </tr>
            </thead>
            <tbody>

                @forelse($users as $user)
                <tr>
                    <td> <img class="rounded-circle" width="60px" src="{{ $user->avatar }}" alt="profile photo"> </td>
                    <td> {{ $user->name }} </td>
                    <td> <i class="rounded d-inline alert alert-success">{{ $user->email }}</i> </td>
                    <td>{{ $user->post->count() }}</td>
                    <td class="d-none d-md-table-cell"> {{ $user->created_at->format("j F  Y") }} </td>
                    <td class="table-action">
                        <a href="{{ route('users.show',['user'=>$user->username]) }}"><i class="align-middle" data-feather="user"></i></a>
                        <a href=" {{ route('users.edit',['user'=>$user->username]) }} "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 align-middle"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>

                        <form   method="POST" class="d-inline" action="{{ route('users.destroy',['user'=>$user->username])}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn px-0 d-inline"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><th>No post yet</th></tr>
                @endforelse
            </tbody>
        </table>
        <!-- pagination -->
        <div class="px-3 mt-3">
        {{ $users->links() }}
        </div>
    </x-content-card>
</x-app-layout>
