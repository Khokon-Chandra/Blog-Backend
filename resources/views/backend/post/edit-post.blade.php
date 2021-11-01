<x-backend.app-layout>
    <x-page-title pagename="Edit Post" />
    <form method="POST" action="{{ route('posts.update',$post->id) }}" >
        @method('PATCH')
        @csrf
        <div class="mb-3 d-flex justify-content-between">
            <div>
                <a href="{{route('posts.index')}}" class="btn btn-primary text-white mb-3">Go to Posts</a>
            </div>
            <div>
                <x-button class="btn-primary" name="inherit" type="submit">Save</x-button>
                <x-button class="btn-success" type="submit">Update & Publish</x-button>
            </div>
        </div>
        <x-alert />
        <div class="row">
            <div class="col-md-8">
                @include('backend.post.add-post._post_principale')
            </div>
            <div class="col-md-4">
                @include('backend.post.add-post._post_feature_image')
                @include('backend.post.add-post._post_categories')
                @include('backend.post.add-post._post_tags')
                @include('backend.post.add-post._post_excerpt')
            </div>
        </div>
    </form>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
</x-backend.app-layout>



