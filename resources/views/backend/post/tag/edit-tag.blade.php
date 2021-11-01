<x-backend.app-layout>

    <x-page-title pagename="Edit Category" />
        <a href="{{ route('tags.create') }}" class="btn btn-primary mb-3">Add New Tag</a>
        <x-backend.content-card >
        <x-alert />
            <div class="card-body">
                <form action="{{ route('tags.update',['tag'=>$tag->id]) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                    <x-label for="name" :value="__('Tag name')" />
                    <input type="text" name="name" class="form-control" value="{{ $tag->name??'' }}">
                    </div>


                    <div class="mb-3">
                        <x-label for="tag" :value="__('Parent tag')" />
                        <select id="tag" name="parent_id" class="form-control">
                            <option selected>Choose..</option>
                            @foreach($tags as $tag)
                            <option value="{{ $tag->id }}"> {{ $tag->name }} </option>
                            @endforeach
                        </select>
                       <x-backend.invalid-feedback attribute="parent_id" />
                    </div>

                    <div class="mb-3">
                    <x-label for="name" :value="__('Tag description')" />
                    <textarea name="description" rows="10" class="form-control"> {{ $tag->description??'' }} </textarea>
                    </div>

                    <div class="mb-3">
                    <input type="submit" class="btn btn-dark" value="Save change">
                    </div>

                </form>
            </div>
        </x-backend.content-card>

</x-backend.app-layout>
