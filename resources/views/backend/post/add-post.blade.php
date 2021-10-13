<x-backend.app-layout>
    <x-page-title pagename="Add New Post" />
    <div class="row">
        <div class="col-md-8"><x-backend.content-card>
            <!-- card body content goes here -->
           <div class="card-body">
                <x-alert />
                <form method="POST" action="{{ route('posts.store') }}">

                    @csrf
                        <div class="form-group">
                            <x-label for="title" :value="__('Post Title')" />
                            <x-input class="py-2"
                            id="title"
                            class="block mt-1 w-full"
                            type="text" name="title" :value="old('title')" autofocus />
                            <x-backend.invalid-feedback attribute="title" />
                        </div>

                        <div class="mb-3">
                            <x-label for="category" :value="__('Choose Category')" />
                            <select id="category" name="category_id" class="form-control">
                                <option selected>Choose..</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                @endforeach
                            </select>
                            <x-backend.invalid-feedback attribute="category_id" />

                        </div>

                        <div class="form-group">
                            <x-label for="description" :value="__('Description')" />
                            <textarea
                            name="description"
                            id="description" cols="30" rows="10"
                            class="form-control">{{old('description')}} </textarea>
                            <x-backend.invalid-feedback attribute="description" />
                        </div>

                        <div class="mb-3">
                            <x-button class="btn-dark" type="submit">Create</x-button>
                        </div>
                    </form>
            </div>

    </x-backend.content-card>
</div>
<div class="col-md-4">
    <x-backend.content-card>
        <div class="card-body">
            <div class="featured-image mb-3">
                <h4>Featured Image</h4>
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="file" name="feature_image" class="form-control">
                </form>
            </div>
        </div>
    </x-backend.content-card>
</div>
        {{-- card end here --}}
    </div>
</x-backend.app-layout>
