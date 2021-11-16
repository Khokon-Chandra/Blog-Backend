<x-backend.app-layout>
    <x-page-title pagename="Permissions" />

    <x-backend.content-card>

        <ul>
            @foreach ($permissions as $permission)
            <li class="bg-white p-2">{{ $permission->name }}</li>
            @endforeach
        </ul>

    </x-backend.content-card>
</x-backend.app-layout>
