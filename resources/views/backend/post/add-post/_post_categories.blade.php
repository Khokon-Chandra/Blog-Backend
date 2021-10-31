<x-backend.post-collaps :header="__('Category')" id="categoryCollaps">

    @foreach ($categories as $category)
        <div class="form-check">
            <input name="categories[]"
            @isset($post)
                @foreach ($post->categories as $item)
                        @if ($item->slug == $category->slug)
                            checked
                        @endif
                @endforeach
            @endisset
            class="form-check-input" style="margin-top: 0.8rem;" type="checkbox" value="{{ $category->id }}"
            id="cat{{ $category->id }}">
            <label class="form-check-label d-block p-2" for="cat{{ $category->id }}">
                {{ $category->name }}
            </label>
        </div>
    @endforeach
<x-backend.invalid-feedback attribute="categories" />
</x-backend.post-collaps>
