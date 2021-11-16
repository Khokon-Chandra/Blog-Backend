<x-backend.app-layout>
    <x-page-title pagename="Roles" />
    <div class="mb-3">
        <a href="{{ route('access_control.roles.create') }}" class="btn btn-primary">Add new Role</a>
    </div>
    <x-backend.content-card>

        <table class="table">
            <thead>
                <tr>
                    <th>Role</th>
                    <th>Permisions</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <td>{{ $role->name }}</td>
                        <td>
                            @forelse ($role->permissions as $permission)
                                <span class="bg-light p-1 m-1">{{ $permission->name }}</span>
                            @empty
                                <p >No permissions are available is there</p>
                            @endforelse
                        </td>
                        <td class="table-action">
                            <x-backend.edit-action :action="route('access_control.roles.edit',$role->id)" />
                            <x-backend.delete-action :action="route('access_control.roles.destroy',$role->id)" />
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </x-backend.content-card>
</x-backend.app-layout>
