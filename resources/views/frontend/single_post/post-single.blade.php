<x-frontend.app-layout :menus="$menus">
    <x-frontend.page-header :pagename="$pageName" />
    <!-- Inner Page Header serction end here -->

    <!-- Blog Single Start Here -->
    <div class="single-blog-page-area">
        <div class="container">
            <div class="row">
                <div id="main-wrapper" class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="theiaStickySidebar">
                        <div class="single-image">
                            <img src="{{ $post->feature_image }}" alt="Blog single photo">
                        </div>
                        <h3>{{ $post->title }}</h3>
                        <p>{{ $post->description }}</p>
                        <div class="share-section">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 life-style">
                                    <span class="author">
                                        <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i>
                                            {{ $post->author->name }} </a>
                                    </span>
                                    <span class="comment">
                                        <a href="#">
                                            <i class="fa fa-comment-o"
                                                aria-hidden="true"></i>{{ $post->comments->count() }}</a>
                                    </span>
                                    <span class="date">
                                        <i class="fa fa-calendar-check-o"
                                            aria-hidden="true"></i>{{ $post->created_at->diffForHumans() }}
                                    </span>
                                    <span class="cat">
                                        @foreach ($post->categories as $category)
                                            <a href="{{ route('frontend.posts.category', $category->slug) }}"><i
                                                    class="fa fa-folder-o" aria-hidden="true"></i>
                                                {{ $category->name }}</a>
                                        @endforeach
                                    </span>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="share-link">
                                        @foreach ($post->tags as $tag)
                                            <li class="hvr-bounce-to-right"><a
                                                    href="{{ route('frontend.posts.tag', $tag->slug) }}">{{ $tag->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="share-section share-section2">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <span> You Can Share It : </span>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="share-link">
                                        <li class="hvr-bounce-to-right"><a href="#"> <i class="fa fa-facebook"
                                                    aria-hidden="true"></i> Facebook</a></li>
                                        <li class="hvr-bounce-to-right"><a href="#"><i class="fa fa-twitter"
                                                    aria-hidden="true"></i> Twitter</a></li>
                                        <li class="hvr-bounce-to-right"><a href="#"><i class="fa fa-google"
                                                    aria-hidden="true"></i> Google</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <ul class="next-pre-section">
                                    <li class="left-arrow"><a href="#"><i class="fa fa-angle-left"
                                                aria-hidden="true"></i> Previous Post</a></li>
                                    <li class="right-arrow"><a href="#">Next Post <i class="fa fa-angle-right"
                                                aria-hidden="true"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        @include('frontend.single_post._post-also-like')
                        @include('frontend.single_post._post-commets')
                        @include('frontend.single_post._post-comment-form')
                    </div>
                </div>
                @include('frontend._category_sidebar')
            </div>
        </div>
    </div>
</x-frontend.app-layout>
