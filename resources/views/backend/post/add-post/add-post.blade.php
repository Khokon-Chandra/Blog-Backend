<x-backend.app-layout>
    <x-page-title pagename="Add New Post" />
    <form method="POST" action="{{ route('posts.store') }}">
        @method('POST')
        @csrf
        <div class="mb-2 d-flex justify-content-between">
            <div>
                <a href="{{ route('posts.index') }}" class=" btn btn-primary text-white mb-3">Go To Posts</a>
            </div>
            <div>
                <x-button class="btn-primary" name="inherit" type="submit">Save</x-button>
                <x-button class="btn-success" type="submit">Publish</x-button>
            </div>
        </div>
        <x-alert />
        <div class="row">
            <div class="col-md-8 bg-white">
                @include('backend.post.add-post._post_principale')
            </div>
            <div class="col-md-4">
                @include('backend.post.add-post._post_feature_image')
                @include('backend.post.add-post._post_categories')
                @include('backend.post.add-post._post_tags')
                @include('backend.post.add-post._post_excerpt')
            </div>
        </div>
{{-- Post Meta Info --}}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-8">
                        <div class="form-group">
                            <label for="metatitle">Meta Title</label>
                            <input name="meta_title" type="text" class="form-control" id="metatitle" >
                        </div>
                        <div class="form-group">
                            <label for="metaKeywords">Meta Keywords</label>
                            <input name="meta_title" type="text" class="form-control" id="metaKeywords">
                        </div>
                        <div class="form-group">
                            <label for="metaDescription">Meta Description</label>
                            <textarea name="meta_description" class="form-control" id="metaDescription" rows="3"></textarea>
                        </div>
                    </div>
                    {{-- col-8 --}}
                    <div class="col-4">
                        <div class="form-group">
                            <label for="freatured">Is Featured</label>
                            <select name="is_featured" id="featured" class="form-control">
                                <option value="" >is featured</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="freatured">Post Type</label>
                            <select name="is_featured" id="featured" class="form-control">
                                <option value="" >post type</option>
                                <option value="news">News</option>
                                <option value="video">Video</option>
                                <option value="article">Article</option>
                                <option value="feature">Feature</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="postStatus">Post Status</label>
                            <select name="is_featured" id="postStatus" class="form-control">
                                <option value="" >post status</option>
                                <option value="publish">publish</option>
                                <option value="inherit">inherit</option>
                            </select>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        {{-- Post Meta Info end--}}
    </form>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js?ver=1.0.0"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
</x-backend.app-layout>
