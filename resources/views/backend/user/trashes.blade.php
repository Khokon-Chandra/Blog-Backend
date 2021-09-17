<x-backend.app-layout>
    <x-page-title pagename="Trashes User" />
    <x-alert />
    <x-content-card :title="__('Card Title')" :subTitle="__('card subtitle')">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th >Avatar</th>
                    <th>Name</th>
                    <th class="d-none d-md-table-cell">Deleted_at</th>
                    <th >Action</th>
                </tr>
            </thead>
            <tbody>

                @forelse($trashes as $user)
                <tr>
                    <td> <img class="rounded-circle" width="60px" src="{{ $user->avatar }}" alt="profile photo"> </td>
                    <td> {{ $user->name }} </td>
                    <td class="d-none d-md-table-cell"> {{ $user->deleted_at->format("j F  Y") }} </td>
                    <td class="table-action">
                        <form   method="POST" class="d-inline" action="{{ route('users.restore',['user'=>$user->username])}}">
                            @method('PUT')
                            @csrf
                            <button title="restore" type="submit" class="btn px-0 d-inline"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-rotate-ccw align-middle mr-2"><polyline points="1 4 1 10 7 10"></polyline><path d="M3.51 15a9 9 0 1 0 2.13-9.36L1 10"></path></svg></a></button>
                        </form>
                        <form   method="POST" class="d-inline" action="{{ route('users.delete_permanently',['user'=>$user->username])}}">
                            @method('DELETE')
                            @csrf
                            <button title="delete permanently" type="submit" class="btn px-0 d-inline"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><th>No trashes value yet</th></tr>
                @endforelse
            </tbody>
        </table>
        <!-- pagination -->
        <div class="px-3 mt-3">
        {{ $trashes->links() }}
        </div>
        
    </x-content-card>
</x-backend.app-layout>