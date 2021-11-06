<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0">
            @include('frontend.home._news-slider')
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 padding-0">
            <div class="slider-area">
                <div class="bend niceties preview-2">
                    <div id="ensign-nivoslider" class="slides">
                        @foreach ($posts as $post)
                        <img src="{{ $post->feature_image }}" alt="" title="#slider-direction-1" />
                        @endforeach
                    </div>
                    <!-- direction 2 -->

                  @foreach ($randomPosts as $post)

                  <div id="slider-direction-1" class="slider-direction">
                    <div class="slider-content t-cn s-tb slider-1">
                        <div class="title-container s-tb-c">
                            <div class="slider-botton">
                                <ul>
                                    <li>
                                        <span class="date">
                                            <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                            {{ $post->created_at }}
                                        </span>
                                        <span class="comment">
                                            <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> {{ $post->comments_count }}
                                            </a>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <h1 class="title1"><a href="{{ route('frontend.blogs.index') }}">{{ $post->title }}</a></h1>
                            <div class="title2">{{ Str::substr($post->excerpt, 0, 50) }}</div>
                        </div>
                    </div>
                </div>
                  @endforeach
                </div>
            </div>
        </div>
        <!-- Slider Area End Here-->
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-left-none">
            <div class="slider-right">
                <ul>
                    @foreach ($posts as $post)
                    @if($loop->index >=3)
                        @break
                    @endif
                    <li style="max-height: 142px; overflow:hidden">
                        <div class="right-content">
                            <span class="category"><a class="cat-link" href="blog.html">Business</a></span>
                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i>{{ $post->created_at }}</span>
                            <h3><a href="blog-single.html">{{ $post->title }}</a></h3>
                        </div>
                        <div class="right-image"><a href="blog-single.html"><img src="{{ $post->feature_image }}" alt="sidebar image"></a></div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
