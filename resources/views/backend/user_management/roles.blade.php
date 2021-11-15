<x-backend.app-layout>
    <x-page-title pagename="Roles" />

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
