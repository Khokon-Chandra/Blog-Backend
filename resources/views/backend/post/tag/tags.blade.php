<x-backend.app-layout>
    <x-page-title pagename="Tag" />

    <x-alert /> <!-- alert -->

    <div class="mb-3"><a class="btn btn-primary" href="{{ route('tags.create') }}">Add new</a></div>

    <x-backend.content-card >
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th style="width:50%">description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($tags as $tag)
                <tr>
                    <td> {{ $tag->name }} </td>
                    <td> {{ $tag->description ?? '' }} </td>
                    <td class="table-action">
                       <x-backend.edit-action :action="route('tags.edit',['tag'=>$tag->id])" />
                        <x-backend.delete-action :action="route('tags.destroy', ['tag' => $tag->id])" />
                    </td>
                </tr>
                @empty
                <p class="text-center">No Category yet</p>
                @endforelse
            </tbody>
        </table>
    </x-backend.content-card>
</x-backend.app-layout>

