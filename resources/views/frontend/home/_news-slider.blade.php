<div class="wrapper">
    <!-- News Slider -->
        <div class="ticker marg-botm">
            <div class="ticker-wrap">
                <!-- News Slider Title -->
                <div class="ticker-head up-case backg-colr col-md-2">Breaking News <i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
                <div class="tickers col-md-10">
                    <div id="top-news-slider" class="owl-carousel ">
                        @foreach ($posts as $post)
                            @if ($post->type === 'news')
                            <div class="item">
                                <a href="{{ route('frontend.posts.show',$post->slug) }}"> <img src="{{ $post->feature_image }}" alt="news image"> <span>{{ $post->title }}</span></a>
                            </div>
                            @endif
                        @endforeach
                   </div>
               </div>
            </div>
        </div>
        <!-- End News Slider -->
    </div>
