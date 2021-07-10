<x-app-layout>
    <x-page-title pagename="Category" />

    <x-success-alert />

    <div class="mb-3"><a class="btn btn-dark" href="{{ route('article.categories.create') }}">Add new</a></div>
        
        <x-content-card :title="__('Category Table')" :subTitle="__('Category Table subtitle')">
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
                        <a href=" {{ route('article.categories.edit',['category'=>$category->slug]) }} "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 align-middle"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>

                        <form   method="POST" class="d-inline" action="{{ route('article.categories.destroy',['category'=>$category->slug]) }}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn px-0 d-inline"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a></button>
                        </form>
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
        </x-content-card>
  
</x-app-layout>
