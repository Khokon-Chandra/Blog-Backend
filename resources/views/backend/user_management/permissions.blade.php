<x-backend.app-layout>
    <x-page-title pagename="Permissions" />

    <x-backend.content-card>
        <table class="table">
            <thead>
                <tr>
                    <th>Permission</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $permission)
                    <tr>
                        <td>{{ $permission->name }}</td>
                        <td>
                            @foreach ($permission->roles as $role)
                                <span class="border p-1">{{ $role->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-backend.content-card>
</x-backend.app-layout>
