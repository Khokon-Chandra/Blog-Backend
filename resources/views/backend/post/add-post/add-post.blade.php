<x-backend.app-layout>
    <x-page-title pagename="Add New Post" />
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
</x-backend.app-layout>
