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


        <div class="card">
            <h4 class="card-header">Post Visibility</h4>
            <div class="card-body">
                <div class="d-flex border-bottom mb-3">
                    <div class="mr-5">Post Status:</div>
                    <div class="d-flex">
                        <label class="mx-3" for="publish"> Publish
                            <input id="publish" value="publish" type="radio" name="post_status" {{ $post->post_status=='publish'?'checked':'' }}>
                        </label>
                        <label class="mx-3" for="in"> Inherit
                            <input id="in" value="inherit" type="radio" name="post_status" {{ $post->post_status=='inherit'?'checked':'' }}>
                        </label>
                    </div>
                </div>
                <div class="d-flex border-bottom mb-3">
                    <div class="mr-5">Is Featured:</div>
                    <div class="d-flex">
                        <label class="mx-3" for="yes"> Yes
                            <input id="yes" value="1" type="radio" name="is_featured" {{ $post->is_featured == 1 ?'checked':'' }}>
                        </label>
                        <label class="mx-3" for="no"> No
                            <input id="no" value="0" type="radio" name="is_featured" {{ $post->is_featured == 0 ?'checked':'' }}>
                        </label>
                    </div>
                </div>
                <div class="d-flex border-bottom mb-3">
                    <div class="mr-5">Post type:</div>
                    <div class="d-flex">
                        <label class="mx-3" for="article"> Article
                            <input id="article" value="article" type="radio" name="type" {{ $post->type=='article'?'checked':'' }}>
                        </label>
                        <label class="mx-3" for="news"> News
                            <input id="news" value="news" type="radio" name="type" {{ $post->type=='news'?'checked':'' }}>
                        </label>
                        <label class="mx-3" for="video"> Video
                            <input id="video" value="video" type="radio" name="type" {{ $post->type=='video'?'checked':'' }}>
                        </label>
                        <label class="mx-3" for="feature"> Feature
                            <input id="feature" value="feature" type="radio" name="type" {{ $post->type=='feature'?'checked':'' }}>
                        </label>
                    </div>
                </div>

            </div>
        </div>


        {{-- Post Meta Info --}}
        <div class="card">
            <h4 class="card-header">Post meta details (SEO)</h4>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-6 col-xs-12">
                        <label for="metatitle">Meta Title</label>
                        <input name="meta_title" type="text" class="form-control" id="metatitle" value="{{ $post->meta_title??'' }}">
                    </div>
                    <div class="form-group col-6 col-xs-12">
                        <label for="metaKeywords">Meta Keywords</label>
                        <input name="meta_title" type="text" class="form-control" id="metaKeywords" value="{{ $post->meta_keyword??'' }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="metaDescription">Meta Description</label>
                    <textarea name="meta_description" class="form-control" id="metaDescription" rows="3">{{ $post->meta_description??'' }}</textarea>
                </div>

            </div>
        </div>
    </form>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
</x-backend.app-layout>



