<x-backend.post-collaps :header="__('Category')" id="categoryCollaps">
    <form action="" method="POST" class="px-3">
        @csrf
        @method('PUT')
        @foreach($categories as $category)
            <div class="form-check mb-3">
                <input name="categories[]" class="form-check-input" type="checkbox"
                    value="{{ $category->slug }}" id="cat{{ $category->id }}">
                <label class="form-check-label d-block" for="cat{{ $category->id }}">
                    {{ $category->name }}
                </label>
            </div>
        @endforeach
        <x-backend.invalid-feedback attribute="categories" />
        <div class="mb-3">
            <input type="submit" class="btn btn-outline-primary btn-block" value="save">
        </div>
    </form>
</x-backend.post-collaps>
