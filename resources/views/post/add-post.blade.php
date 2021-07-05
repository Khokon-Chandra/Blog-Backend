<x-app-layout>
    <div class="container-fluid p-0">
    <x-page-title pagename="Edit Post" />

    <div class="card">
            <div class="card-header">
                <h5 class="card-title">Basic Table</h5>
                <h6 class="card-subtitle text-muted">Using the most basic table markup, here’s how .table-based tables look in Bootstrap.</h6>
            </div>

            <!-- card body content goes here -->

           <div class="card-body">
                @if(session()->get('success'))
                <div class="alert alert-success p-4"> {{ session()->get('success') }} </div>
                @endif
                <form method="POST" action="{{ route('posts.store') }}">
               
                    @csrf
                        <div class="form-group">
                            <x-label for="title" :value="__('Post Title')" />
                            <x-input class="py-2"
                            id="title"
                            class="block mt-1 w-full"
                            type="text" name="title" :value="old('title')" autofocus />
                            @error('title')
                            <div class="invalid-feedback d-block mb-3"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <x-label for="category" :value="__('Choose Category')" />
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

                        <div class="form-group">
                            <x-label for="description" :value="__('Description')" />
                            <textarea
                            name="description"
                            id="description" cols="30" rows="10"
                            class="form-control"> {{old('description')}} </textarea>
                        </div>
                        @error('description')
                        <div class="invalid-feedback d-block mb-3"> {{ $message }} </div>
                        @enderror
                        <div class="mb-3">
                            <x-button class="btn-dark" type="submit">Create</x-button>
                        </div>
                    </form>
            </div>


        </div>
    </div>
</x-app-layout>
