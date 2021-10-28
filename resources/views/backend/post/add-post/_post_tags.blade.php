<x-backend.post-collaps :header="__('Tags')" id="tagCollaps">
    <form action="" method="POST" class="px-3">
        @csrf
        @method('PUT')
        @foreach($tags as $tag)
            <div class="form-check mb-3">
                <input name="tags[]" class="form-check-input" type="checkbox"
                    value="{{ $tag->slug }}" id="cat{{ $tag->id }}">
                <label class="form-check-label d-block" for="cat{{ $tag->id }}">
                    {{ $tag->name }}
                </label>
            </div>
        @endforeach
        <x-backend.invalid-feedback attribute="tags" />
        <div class="mb-3">
            <input type="submit" class="btn btn-outline-primary btn-block" value="save">
        </div>
    </form>

</x-backend.post-collaps>
