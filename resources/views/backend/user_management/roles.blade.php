<x-backend.app-layout>
    <x-page-title pagename="Roles" />
    <div class="mb-3">
        <a href="{{ route('roles.create') }}" class="btn btn-primary">Add new Role</a>
    </div>
    <x-alert />
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
                                <span class="border p-1 ml-1">{{ $permission->name }}</span>
                            @empty
                                <p>No permissions are available is there</p>
                            @endforelse
                        </td>
                        <td class="table-action">
                            <x-backend.edit-action :action="route('roles.edit',$role->id)" />
                            <x-backend.delete-action :action="route('roles.destroy',$role->id)" />
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </x-backend.content-card>
</x-backend.app-layout>
