<x-backend.app-layout>

    <x-page-title pagename="Edit Category" />
        <x-content-card :title="__('Edit Category')" :subTitle="__('Category addition form')">
        <x-alert />
            <div class="card-body">
                <form action="{{ route('article.categories.update',['category'=>$category->slug]) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                    <x-label for="name" :value="__('Category name')" />
                    <input type="text" name="name" class="form-control" value="{{ $category->name??'' }}">
                    </div>

                                                
                    <div class="mb-3">
                        <x-label for="category" :value="__('Parent category')" />
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
                    <x-label for="name" :value="__('Category description')" />
                    <textarea name="description" rows="10" class="form-control"> {{ $category->description??'' }} </textarea>
                    </div>

                    <div class="mb-3">
                    <input type="submit" class="btn btn-dark" value="Save change">
                    </div>

                </form>
            </div>
        </x-content-card>

</x-backend.app-layout>