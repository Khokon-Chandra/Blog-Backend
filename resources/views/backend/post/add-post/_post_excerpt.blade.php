<x-backend.post-collaps :header="__('Post Excerpt')" id="excerptCollaps">
    <div class="border-top p-3 mb-3">
        <p>Post Excerpt</p>
        <textarea name="excerpt" rows="3" class="form-control mb-3">{{ $post->excerpt ?? old('excerpt') }}</textarea>
        <x-backend.invalid-feedback attribute="excerpt" />
    </div>
</x-backend.post-collaps>
