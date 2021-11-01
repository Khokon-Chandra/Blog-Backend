<x-backend.app-layout>
    <x-page-title pagename="Category" />

    <x-alert /> <!-- alert -->

    <div class="mb-3"><a class="btn btn-dark" href="{{ route('categories.create') }}">Add new</a></div>

    <x-backend.content-card :title="__('Category Table')" :subTitle="__('Category Table subtitle')">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Parent Category</th>
                    <th style="width:50%">description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($categories as $category)
                <tr>
                    <td> {{ $category->name }} </td>
                    <td> {{ $category->parentCategory->name ?? 'No parent' }} </td>
                    <td> {{ $category->description ?? '' }} </td>
                    <td class="table-action">
                        <x-backend.edit-action :action="route('categories.edit',['category'=>$category->id])" />
                        <x-backend.delete-action :action="route('categories.destroy', ['category' => $category->id])" />
                    </td>
                </tr>
                @empty
                <p class="text-center">No Category yet</p>
                @endforelse
            </tbody>
        </table>
        <!-- paginantion -->
        <div class="px-3 mt-3">
            {{ $categories->links() }}
        </div>
    </x-backend.content-card>

</x-backend.app-layout>
