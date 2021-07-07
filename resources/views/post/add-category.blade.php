<x-app-layout>


    <x-page-title pagename="Create New Category" />
        <x-content-card :title="__('Add New Category')" :subTitle="__('Category addition form')">
        <x-success-alert />
        @if(session()->get('error'))
        {{ session()->get('error') }}
        @endif
            <div class="card-body">
                <form action="{{ route('category.create') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                    <x-label for="name" :value="__('Category name')" />
                    <input id="name" type="text" name="name" class="form-control" value="{{ @old('name') }}">
                    </div>

                                                
                    <div class="mb-3">
                    <x-label for="category"> Parent Category <i class="text-secondary">(optional)</i> </x-label>
                        <select id="category" name="parent_id" class="form-control">
                            <option selected>Choose..</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}"> {{ $category->name }} </option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <div class="invalid-feedback d-block mb-3"> {{ $message }} </div>
                        @enderror
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
        </x-content-card>

</x-app-layout>