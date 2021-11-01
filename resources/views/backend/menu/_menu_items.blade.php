
<x-backend.collaps-card :header="__('Category')" id="categoryCollaps">
    @foreach ($categories as $category)
        <div class="form-check">
            <input name="categories[]"
                   class="form-check-input" style="margin-top: 0.8rem;" type="checkbox" value="{{ $category->id }}"
                   id="cat{{ $category->id }}">
            <label class="form-check-label d-block p-2" for="cat{{ $category->id }}">
                {{ $category->name }}
            </label>
        </div>
    @endforeach
    <x-backend.invalid-feedback attribute="categories" />
</x-backend.collaps-card>


<x-backend.collaps-card :header="__('Post')" id="postCollaps">

    @foreach ($posts as $post)
        <div class="form-check">
            <input name="post[]" class="form-check-input" style="margin-top: 0.8rem;" type="checkbox" value="{{ $category->id }}"
                   id="post{{ $post->id }}">
            <label class="form-check-label d-block p-2" for="post{{ $post->id }}">
                {{ substr($post->title,0,30) }}
            </label>
        </div>
    @endforeach

</x-backend.collaps-card>


<x-backend.collaps-card :header="__('Custom links')" id="customCollaps" class="p-3 px-4">

    <div class="form-group row">
        <label class="col-form-label col-sm-4 text-sm-left px-0">Url</label>
        <div class="col-sm-8 px-0">
            <input type="text" class="form-control" placeholder="https://">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-sm-4 text-sm-left px-0" for="text">Link Text</label>
        <div class="col-sm-8 px-0">
            <input  id="text" type="text" class="form-control" placeholder="Menu Name">
        </div>
    </div>

    <div class="text-right p-0">
        <input type="submit" class="btn btn-primary" value="Add to menu">
    </div>

</x-backend.collaps-card>
