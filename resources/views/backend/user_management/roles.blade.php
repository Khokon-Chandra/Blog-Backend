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
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <td>{{ $role->name }}</td>
                        <td>permisions</td>
                        {{-- <td>{{ $role->permisions }}</td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>

    </x-backend.content-card>
</x-backend.app-layout>
