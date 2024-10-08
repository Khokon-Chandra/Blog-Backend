<x-frontend.app-layout :menus="$menus">

    <!-- Slider Section Start Here -->
    @include('frontend.home._homeslider')
    <!-- Slider Section end Here -->
    <!-- All News Section Start Here -->
    <div class="all-news-area">
        <div class="container">
            <!-- latest news Start Here -->
            <div class="row">
                @include('frontend.home._latest-news')
                <!--Sidebar Start Here -->
                @include('frontend._sidebar')
            </div>
        </div>
    </div>
    <!-- Fetuered videos Start Here -->
    @include('frontend.home._featured_video_slide')

    <!-- Fetuered videos End Here -->

    <!-- Hot News Start Here -->
    <div class="hot-news">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        @foreach ($CategorySlider as $category)
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div id="news-Carousel{{ $loop->iteration }}" class="carousel carousel-news slide"
                                    data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <!-- Left and right controls -->
                                    <div class="next-prev-top">
                                        <div class="row">
                                            <div class="col-sm-9 col-xs-9">
                                                <div class="view-area">
                                                    <h3 class="title-bg">{{ $category->name }}</h3>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 next-prev col-xs-3">
                                                <a class="left news-control"
                                                    href="#news-Carousel{{ $loop->iteration }}" data-slide="prev">
                                                    <span class="news-arrow-left"><i class="fa fa-angle-left"
                                                            aria-hidden="true"></i></span>
                                                </a>
                                                <a class="right news-control"
                                                    href="#news-Carousel{{ $loop->iteration }}" data-slide="next">
                                                    <span class="news-arrow-right"><i class="fa fa-angle-right"
                                                            aria-hidden="true"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-inner">
                                        @foreach ($category->posts as $post)
                                            <div class="item {{ $loop->iteration == 1 ? 'active' : '' }}">
                                                <a href="{{ route('frontend.posts.show', $post->slug) }}"><img
                                                        src="{{ $post->feature_image }}" alt=""
                                                        title="#slider-direction-1" /></a>
                                                <div class="dsc">
                                                    <span class="date">
                                                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                        {{ $post->created_at->format('d M, Y') }}
                                                    </span>
                                                    <span class="comment">
                                                        <a href="#"> <i class="fa fa-comment-o" aria-hidden="true"></i>
                                                            50
                                                        </a>
                                                    </span>
                                                    <h4><a
                                                            href="{{ route('frontend.posts.show', $post->slug) }}">{{ $post->title }}</a>
                                                    </h4>
                                                    <p>{{ $post->excerpt ?? substr($post->description, 0, 100) }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!--End Two Slider -->
                    <!--Around Area Start Here -->
                    <div class="view-area separator-large3">
                        <div class="row">
                            <div class="col-sm-8">
                                <h3 class="title-bg">Around the world</h3>
                            </div>
                            <div class="col-sm-4 text-right">
                                <a href="{{ route('frontend.categories.list') }}">View More <i
                                        class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <ul class="news-post news-post2 around-news">
                        <li>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 content">
                                    <div class="item-post">

                                        <div class="blog-image">
                                            <a href="blog-single.html"><img
                                                    src="{{ asset('frontend') }}/images/world/5.jpg" alt=""
                                                    title="News image" /></a>
                                        </div>
                                        <div class="content">
                                            <span class="date">
                                                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                November 28, 2017
                                            </span>
                                            <span class="comment">
                                                <a href="#"> <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                                </a>
                                            </span>
                                            <h4><a href="blog-single.html">Clinton campaign jilted as FBI to search
                                                    emails</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestib vitae
                                                libero vel purus tincidunt aliquet at nec erat. Mauris the diam,
                                                ultrices quis leo sed lacinia egestas.The wise man there always holds in
                                                these matters.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 content">
                                    <div class="item-post">
                                        <div class="blog-image">
                                            <a href="blog-single.html"><img
                                                    src="{{ asset('frontend') }}/images/world/6.jpg" alt=""
                                                    title="News image" /></a>
                                        </div>
                                        <div class="content">
                                            <span class="date">
                                                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                November 28, 2017
                                            </span>
                                            <span class="comment">
                                                <a href="#"> <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                                </a>
                                            </span>
                                            <h4><a href="blog-single.html">Clinton campaign jilted as FBI to search
                                                    emails</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestib vitae
                                                libero vel purus tincidunt aliquet at nec erat. Mauris the diam,
                                                ultrices quis leo sed lacinia egestas.The wise man there always holds in
                                                these matters.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="news-post news-post2 related">
                        <li>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 content">
                                    <div class="item-post">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3 paddimg-right-none">
                                                <a href="blog-single.html"><img
                                                        src="{{ asset('frontend') }}/images/world/1.jpg" alt=""
                                                        title="News image" /></a>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-9">
                                                <h4><a href="blog-single.html">Pellentesque Odio Nisi Euismod In
                                                        Pharet</a></h4>
                                                <span class="date">
                                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                    November 28, 2017
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 content">
                                    <div class="item-post">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3 paddimg-right-none">
                                                <a href="blog-single.html"><img
                                                        src="{{ asset('frontend') }}/images/world/2.jpg" alt=""
                                                        title="News image" /></a>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-9">
                                                <h4><a href="blog-single.html">prepare for Russian election</a></h4>
                                                <span class="date">
                                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                    June 28, 2017
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 content">
                                    <div class="item-post">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3 paddimg-right-none">
                                                <a href="blog-single.html"><img
                                                        src="{{ asset('frontend') }}/images/world/3.jpg" alt=""
                                                        title="News image" /></a>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-9">
                                                <h4><a href="blog-single.html"> Erant Aeque Neius No Numes Electram </a>
                                                </h4>
                                                <span class="date">
                                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                    November 28, 2017
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 content">
                                    <div class="item-post">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3 paddimg-right-none">
                                                <a href="blog-single.html"><img
                                                        src="{{ asset('frontend') }}/images/world/4.jpg" alt=""
                                                        title="News image" /></a>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-9">
                                                <h4><a href="blog-single.html">YouTube Acquire Twitch <br />For
                                                        $1Billion</a></h4>
                                                <span class="date">
                                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                    June 28, 2017
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                {{-- sidebar --}}
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-left-none">
                    <h3 class="title-bg featured-title">Featured News</h3>
                    <div class="sidebar">
                        <ul>
                            @foreach ($featuredNews as $news)
                                <li>
                                    @foreach ($news->categories as $cat)
                                        @if ($loop->index<=0)
                                        <a href="{{ route('frontend.posts.category', $cat->slug) }}"
                                            class="category-btn hvr-bounce-to-right">{{ $cat->name }}</a>
                                        @endif

                                    @endforeach
                            <div class="post-image"><a href="{{ route('frontend.posts.show', $news->slug) }}"><img
                                        src="{{ $news->feature_image }}" alt="News image" /></a></div>
                            <div class="content">
                                <h4><a
                                        href="{{ route('frontend.posts.show', $news->slug) }}">{{ $news->title }}</a>
                                </h4>
                                <span class="date">
                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                    {{ $news->created_at->format('d M, Y') }}
                                </span>
                                <span class="comment">
                                    <a href="{{ route('frontend.posts.show', $news->slug) }}">
                                        <i class="fa fa-comment-o" aria-hidden="true"></i>
                                        {{ $news->comments_count }}
                                    </a>
                                </span>

                            </div>
                            </li>
                            @endforeach
                        </ul>
                        <div class="categories-home separator-large3">
                            <h3 class="title-bg">Categories</h3>
                            <ul>
                                @foreach ($categories as $category)
                                    <li><a href="{{ route('frontend.posts.category', $category->slug) }}"> <i
                                                class="fa fa-angle-right" aria-hidden="true"></i>
                                            {{ $category->name }} <span>{{ $category->posts_count }}</span></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- All News Section end Here -->
</x-frontend.app-layout>
