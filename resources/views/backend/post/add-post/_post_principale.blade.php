<x-backend.content-card>
    <!-- card body content goes here -->
    <div class="card-body">
        <x-alert />
        <form method="POST" action="{{ route('posts.store') }}">
            @method('PUT')
            @csrf
            <div class="form-group">
                <x-label for="title" :value="__('Post Title')" />
                <x-input class="py-2" id="title" class="block mt-1 w-full" type="text" name="title"
                    :value="old('title')" autofocus />
                <x-backend.invalid-feedback attribute="title" />
            </div>



            <div class="form-group">
                <x-label for="description" :value="__('Description')" />
                <textarea name="description" id="description" cols="30" rows="10"
                    class="form-control">{{ old('description') }} </textarea>
                <x-backend.invalid-feedback attribute="description" />
            </div>

            <div class="mb-3">
                <x-button class="btn-dark" type="submit">Create</x-button>
            </div>
        </form>
    </div>

</x-backend.content-card>
