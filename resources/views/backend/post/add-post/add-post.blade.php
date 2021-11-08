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

        <div class="card">
            <h4 class="card-header">Post Visibility</h4>
            <div class="card-body">
                <div class="d-flex border-bottom mb-3">
                    <div class="mr-5">Post Status:</div>
                    <div class="d-flex">
                        <label class="mx-3" for="publish"> Publish
                            <input id="publish" value="publish" type="radio" name="post_status">
                        </label>
                        <label class="mx-3" for="in"> Inherit
                            <input id="in" value="inherit" type="radio" name="post_status">
                        </label>
                    </div>
                </div>
                <div class="d-flex border-bottom mb-3">
                    <div class="mr-5">Is Featured:</div>
                    <div class="d-flex">
                        <label class="mx-3" for="yes"> Yes
                            <input id="yes" value="1" type="radio" name="is_featured">
                        </label>
                        <label class="mx-3" for="no"> No
                            <input id="no" value="0" type="radio" name="is_featured">
                        </label>
                    </div>
                </div>
                <div class="d-flex border-bottom mb-3">
                    <div class="mr-5">Post type:</div>
                    <div class="d-flex">
                        <label class="mx-3" for="article"> Article
                            <input id="article" value="article" type="radio" name="type">
                        </label>
                        <label class="mx-3" for="news"> News
                            <input id="news" value="news" type="radio" name="type">
                        </label>
                        <label class="mx-3" for="video"> Video
                            <input id="video" value="video" type="radio" name="type">
                        </label>
                        <label class="mx-3" for="feature"> Feature
                            <input id="feature" value="feature" type="radio" name="type">
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
                        <input name="meta_title" type="text" class="form-control" id="metatitle">
                    </div>
                    <div class="form-group col-6 col-xs-12">
                        <label for="metaKeywords">Meta Keywords</label>
                        <input name="meta_title" type="text" class="form-control" id="metaKeywords">
                    </div>
                </div>
                <div class="form-group">
                    <label for="metaDescription">Meta Description</label>
                    <textarea name="meta_description" class="form-control" id="metaDescription" rows="3"></textarea>
                </div>

            </div>
        </div>

    </form>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js?ver=1.0.0"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
</x-backend.app-layout>
