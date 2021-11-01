<x-backend.app-layout>
    <x-page-title pagename="Create New Tag" />
        <x-backend.content-card >
            <x-alert /> <!-- alert -->
            <div class="card-body">
                <form action="{{ route('tags.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                    <x-label for="name" :value="__('Category name')" />
                    <input id="name" type="text" name="name" class="form-control" value="{{ @old('name') }}">
                    <x-backend.invalid-feedback attribute="name" />
                    </div>


                    <div class="mb-3">
                    <x-label for="tag"> Parent Tag <i class="text-secondary">(optional)</i> </x-label>
                        <select id="tag" name="parent_id" class="form-control">
                            <option selected>Choose..</option>
                            @foreach($tags as $tag)
                            <option value="{{ $tag->id }}"> {{ $tag->name }} </option>
                            @endforeach
                        </select>
                        <x-backend.invalid-feedback attribute="parent_id" />
                    </div>

                    <div class="mb-3">

                    <x-label for="description"> Description <i class="text-secondary">(optional)</i> </x-label>
                    <textarea id="description" name="description" rows="10" class="form-control"> {{ @old('description') }} </textarea>
                    </div>

                    <div class="mb-3">
                    <input type="submit" class="btn btn-dark" value="Save">
                    </div>

                </form>
            </div>
        </x-backend.content-card>
</x-backend.app-layout>
