<x-backend.post-collaps :header="__('Tags')" id="tagCollaps">
    @foreach ($tags as $tag)
        <div class="form-check">
            <input name="tags[]" @isset($post) @foreach ($post->tags as $item)
            @if ($item->slug == $tag->slug)
                checked
            @endif
    @endforeach
@endisset
class="form-check-input" style="margin-top: 0.8rem;" type="checkbox" value="{{ $tag->id }}"
id="tag{{ $tag->id }}">
<label class="form-check-label d-block p-2" for="tag{{ $tag->id }}">
    {{ $tag->name }}
</label>
</div>
@endforeach
<x-backend.invalid-feedback attribute="tags" />
</x-backend.post-collaps>
