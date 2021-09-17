<x-backend.app-layout>
    <x-page-title pagename="Add New Post" />
    <x-content-card :title="__('Add new post')" :subTitle="__('New post addition subtitle')">
            <!-- card body content goes here -->
           <div class="card-body">
                <x-alert />
                <form method="POST" action="{{ route('article.posts.store') }}">
               
                    @csrf
                        <div class="form-group">
                            <x-label for="title" :value="__('Post Title')" />
                            <x-input class="py-2"
                            id="title"
                            class="block mt-1 w-full"
                            type="text" name="title" :value="old('title')" autofocus />
                            <x-invalid-feedback attribute="title" />
                        </div>

                        <div class="mb-3">
                            <x-label for="category" :value="__('Choose Category')" />
                            <select id="category" name="category_id" class="form-control">
                                <option selected>Choose..</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                @endforeach
                            </select>
                            <x-invalid-feedback attribute="category_id" />

                        </div>

                        <div class="form-group">
                            <x-label for="description" :value="__('Description')" />
                            <textarea
                            name="description"
                            id="description" cols="30" rows="10"
                            class="form-control">{{old('description')}} </textarea>
                            <x-invalid-feedback attribute="description" />
                        </div>
                        
                        <div class="mb-3">
                            <x-button class="btn-dark" type="submit">Create</x-button>
                        </div>
                    </form>
            </div>

    </x-content-card>
</x-backend.app-layout>
