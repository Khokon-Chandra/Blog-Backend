<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 tab-home">
    <ul class="nav nav-tabs">
        <li class="title-bg">Latest News</li>
        <li class="active"><a data-toggle="tab" href="#tab1">Highest Rated</a></li>
        <li><a data-toggle="tab" href="#tab2">Week</a></li>
        <li><a data-toggle="tab" href="#tab3">Hot Articals</a></li>
        <li><a data-toggle="tab" href="#tab4">Previous</a></li>
    </ul>

    <div class="tab-content">
        @foreach ($latestPosts as $post)
            <div id="tab{{ $loop->iteration }}" class="tab-pane fade in {{ $loop->iteration==1?'active':'' }}">
                <div class="tab-top-content">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 paddimg-right-none">
                            <a href="blog-single.html"><img src="{{ $post->feature_image }}"
                                    alt="sidebar image"></a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 last-col">
                            <span class="date"><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i>
                                    james Bond </a></span> <span class="comment"><a href="#"><i
                                        class="fa fa-comment-o" aria-hidden="true"></i> 50</a></span>
                            <h3><a href="#">Migrants Told: Stay in France or go back to your country</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nisl risus, tristique diam
                                id, blandit condimentum</p>
                            <a href="blog-single.html" class="read-more hvr-bounce-to-right">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="tab-bottom-content">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                            <div class="col-sm-12 col-xs-3 img-tab">
                                <a href="blog-single.html"><img src="{{ $post->feature_image }}"
                                        alt="News image"></a>
                            </div>
                            <div class="col-sm-12 col-xs-9 img-content">
                                <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true">
                                    </i>June 28, 2017</span>
                                <h4><a href="blog-single.html">The Soccer Field Close.</a></h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                            <div class="col-sm-12 col-xs-3 img-tab">
                                <a href="blog-single.html"><img src="{{ $post->feature_image }}"
                                    alt="News image"></a>
                            </div>
                            <div class="col-sm-12 col-xs-9 img-content">
                                <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true">
                                    </i>June 28, 2017</span>
                                <h4><a href="blog-single.html">The Soccer Field Close.</a></h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                            <div class="col-sm-12 col-xs-3 img-tab">
                                <a href="blog-single.html"><img src="{{ $post->feature_image }}"
                                    alt="News image"></a>
                            </div>
                            <div class="col-sm-12 col-xs-9 img-content">
                                <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true">
                                    </i>June 28, 2017</span>
                                <h4><a href="blog-single.html">The Soccer Field Close.</a></h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                            <div class="col-sm-12 col-xs-3 img-tab">
                                <a href="blog-single.html"><img src="{{ $post->feature_image }}"
                                    alt="News image"></a>
                            </div>
                            <div class="col-sm-12 col-xs-9 img-content">
                                <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true">
                                    </i>June 28, 2017</span>
                                <h4><a href="blog-single.html">The Soccer Field Close.</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <!-- Trending news  here-->
    @include('frontend.home._trending-news')
    <!--Start what’s hot now -->
    @include('frontend.home._hot-news')
    <!-- End what’s hot now -->
</div>
