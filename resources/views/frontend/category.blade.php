<x-frontend.app-layout :menus="$menus">

    <x-frontend.page-header :pagename="$pageName" />
    <!-- Inner Page Header serction end here -->

    <!-- Category Page Start Here -->
    <div class="blog-page-area gallery-page category-page">
        <div class="container">
            <div class="row">
                <div id="main-wrapper" class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                    <ul>
                        <li>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div id="news-Carousel1" class="carousel carousel-top-category slide"
                                    data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <!-- Left and right controls -->
                                    <div class="next-prev">
                                        <a class="left news-control" href="#news-Carousel1" data-slide="prev">
                                            <span class="news-arrow-left"><i class="fa fa-angle-left"
                                                    aria-hidden="true"></i></span>
                                        </a>
                                        <a class="right news-control" href="#news-Carousel1" data-slide="next">
                                            <span class="news-arrow-right"><i class="fa fa-angle-right"
                                                    aria-hidden="true"></i></span>
                                        </a>
                                    </div>
                                    <div class="carousel-inner">
                                        @foreach ($posts as $post)
                                            <div class="item {{ $loop->index == 0 ? 'active' : '' }}">
                                                <div class="blog-image">
                                                    <a href="{{ route('frontend.posts.show', $post->slug) }}">
                                                        <i class="fa fa-link" aria-hidden="true"></i>
                                                        <img src="{{ $post->feature_image }}" alt="category photo">
                                                    </a>
                                                </div>
                                                <div class="dsc">
                                                    <h3><a href="{{ route('frontend.posts.show', $post->slug) }}">{{ $post->title }}
                                                    </h3>
                                                    <span class="date"> <i class="fa fa-calendar-check-o"
                                                            aria-hidden="true"></i>{{ $post->created_at->format('d M Y') }}</span>
                                                    <span class="like"><a href="#"><i class="fa fa-comment-o"
                                                                aria-hidden="true"></i> 12 </a></span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul class="theiaStickySidebar">

                    <ul>
                        <li>
                            @foreach ($posts as $post)
                                @if ($loop->odd)
                                    <div class="row">
                                @endif
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="carousel-inner">
                                        <div class="blog-image">
                                            <a href="{{ route('frontend.posts.show', $post->slug) }}">
                                                <i class="fa fa-link" aria-hidden="true"></i>
                                                <img src="{{ $post->feature_image }}" alt="category photo">
                                            </a>
                                        </div>
                                    </div>
                                    <h3><a
                                            href="{{ route('frontend.posts.show', $post->slug) }}">{{ $post->title }}</a>
                                    </h3>
                                    <span class="date"><i class="fa fa-calendar-check-o"
                                            aria-hidden="true"></i>{{ $post->created_at->format('d M Y') }}</span>
                                    <span class="like"><a href="#"><i class="fa fa-comment-o"
                                                aria-hidden="true"></i> 12 </a></span>
                                    <p>{{ $post->excerpt }}</p>
                                </div>
                                @if ($loop->even)
                </div>
                @endif
                @endforeach

                </li>
                </ul>
                <div class="text-center">
                    {{ $posts->links() }}
                </div>
            </div>

            @include('frontend._category_sidebar')
            {{-- Sidebar aser included here --}}
        </div>
    </div>
    </div>

</x-frontend.app-layout>
