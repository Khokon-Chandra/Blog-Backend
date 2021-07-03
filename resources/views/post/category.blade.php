<x-app-layout>
    <div class="container-fluid p-0">
    <x-page-title pagename="Category" />


        <div class="row">
            <div class="col-md-4">
                <x-content-card :title="__('Add New Category')" :subTitle="__('Category addition form')">
                    <div class="card-body">
                        <form action="{{ route('category.add-category') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                            <x-label for="name" :value="__('Category name')" />
                            <input type="text" name="name" class="form-control">
                            </div>

                                                        
                            <div class="mb-3">
                                <x-label for="category" :value="__('Parent category')" />
                                <select id="category" name="category_id" class="form-control">
                                    <option selected>Choose..</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <div class="invalid-feedback d-block mb-3"> {{ $message }} </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                            <x-label for="name" :value="__('Category description')" />
                            <textarea name="description" rows="5" class="form-control"></textarea>
                            </div>

                            <div class="mb-3">
                            <input type="submit" class="btn btn-dark" value="Save">
                            </div>

                        </form>
                    </div>
                </x-content-card>
            </div>

            <div class="col-md-8">
                <x-content-card :title="__('Category Table')" :subTitle="__('Category Table subtitle')">
                    <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Parent Category</th>
                        <th>description</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse($categories as $category)
                        <tr>
                            <td> {{ $category->name }} </td>
                            <td> {{ $category->parent_id??'No parent' }} </td>
                            <td> {{ substr($category->description,0,50)??'' }} </td>
                            <td class="table-action">
                                <a href=" {{ route('category.update',['category'=>$category->slug]) }} "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 align-middle"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>

                                <form   method="POST" class="d-inline" action="{{ route('category.delete',['category'=>$category->slug]) }}">
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
                </x-content-card>
            </div>

        
           
        </div>
<!-- row end -->
    </div>
    <!-- container-fluid end -->
</x-app-layout>
