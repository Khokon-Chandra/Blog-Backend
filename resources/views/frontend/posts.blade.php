<x-frontend.app-layout :menus="$menus">
    <!-- Inner Page Header serction start here -->
    <x-frontend.page-header :pagename="$pageName"/>
    <!-- Inner Page Header serction end here -->

    <!-- Blog Page Start Here -->
    <div class="blog-page-area">
        <div class="container">
            <div class="row">
                @foreach ($posts as $post)

                    <div class="col-md-6 col-xs-12">
                        <ul>
                            <li>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="blog-image">
                                        <a href="#">
                                            <i class="fa fa-link" aria-hidden="true"></i>
                                            <img src="{{ $post->feature_image }}" alt="Blog photo" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <span class="date"> <i class="fa fa-calendar-check-o" aria-hidden="true">
                                        </i>{{ $post->created_at->format('d M Y') }}</span>
                                    <h3><a
                                            href="{{ route('frontend.posts.show', $post->slug) }}">{{ substr($post->title, 0, 25) }}</a>
                                    </h3>
                                    <span class="admin"><a href="#"><i class="fa fa-user-o"
                                                aria-hidden="true"></i> Admin</a></span> <span class="like"><a
                                            href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>
                                            {{ $post->comments_count }} </a></span>
                                    <p>{{ substr($post->excerpt, 0, 100) }}</p>
                                    <a href="{{ route('frontend.posts.show', $post->slug) }}"
                                        class="more">Read More <i class="fa fa-angle-double-right"
                                            aria-hidden="true"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div>
            {{-- <div class="text-center">{{ $posts->links() ?? '' }}</div> --}}
        </div>
    </div>
    <!-- Blog Page End Here -->
    <!-- Footer Area Section Start Here -->
</x-frontend.app-layout>
