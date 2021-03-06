<x-backend.app-layout>
    <x-page-title pagename="Create New Category" />
        <a href="{{ route('categories.index') }}" class="btn btn-primary mb-3">Go to lists</a>
        <x-backend.content-card >
            <x-alert /> <!-- alert -->
            <div class="card-body">
                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                    <x-label for="name" :value="__('Category name')" />
                    <input id="name" type="text" name="name" class="form-control" value="{{ @old('name') }}">
                    <x-backend.invalid-feedback attribute="name" />
                    </div>


                    <div class="mb-3">
                    <x-label for="category"> Parent Category <i class="text-secondary">(optional)</i> </x-label>
                        <select id="category" name="parent_id" class="form-control">
                            <option selected>Choose..</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}"> {{ $category->name }} </option>
                            @endforeach
                        </select>
                        <x-backend.invalid-feedback attribute="parent_id" />
                    </div>

                    <div class="mb-3">

                    <x-label for="description"> Description <i class="text-secondary">(optional)</i> </x-label>
                    <textarea id="description" name="description" rows="10" class="form-control"> {{ @old('description') }} </textarea>
                    </div>

                    <div class="mb-3">
                    <input type="submit" class="btn btn-primary" value="Save">
                    </div>

                </form>
            </div>
        </x-backend.content-card>
</x-backend.app-layout>
