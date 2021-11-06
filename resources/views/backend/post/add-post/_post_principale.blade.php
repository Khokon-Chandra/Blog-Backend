<x-backend.content-card>
    <!-- card body content goes here -->
    <div class="card-body">
        <div class="form-group">
            <x-label for="title" :value="__('Post Title')" />
            <x-input id="title" style="font-size: 30px;height:50px" type="text" name="title" :value="$post->title??old('title')"
                autofocus />
            <x-backend.invalid-feedback attribute="title" />
        </div>
        <div class="form-group">
            <x-label for="description" :value="__('Description')" />
            <textarea name="description" id="description" rows="10"
                class="form-control">{{ $post->description??old('description') }} </textarea>
            <x-backend.invalid-feedback attribute="description" />
        </div>
    </div>
</x-backend.content-card>
