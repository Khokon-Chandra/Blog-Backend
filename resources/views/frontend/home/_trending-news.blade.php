<div class="trending-news separator-large">
    <div class="row">
        <div class="view-area">
            <div class="col-sm-8">
                <h3 class="title-bg">Trending News</h3>
            </div>
            <div class="col-sm-4 text-right">
                <a href="#">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
            </div>
        </div>


        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="list-col">
                <a href="{{ route('frontend.posts.show',$trendingNews[0]->slug) }}"> <img src="{{ $trendingNews[0]->feature_image }}" alt="" title="Trending image" /></a>
                <div class="dsc">
                    <span class="date"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017 </span> <span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50</a></span>
                    <h3><a href="{{ route('frontend.posts.show',$trendingNews[0]->slug) }}">{{ $trendingNews[0]->title }}</a></h3>
                    <p>{{ $trendingNews[0]->excerpt??Str::limit($trendingNews[0]->description,100, '...') }}</p>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <ul class="news-post">
                @foreach ($trendingNews as $post)
                    @if ($loop->index > 0)
                    <li>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                <div class="item-post">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3 paddimg-right-none">
                                            <a href="{{ route('frontend.posts.show',$post->slug) }}"> <img src="{{ $post->feature_image }}" alt="" title="Trending image"></a>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-9 col-xs-9">
                                            <h4><a href="{{ route('frontend.posts.show',$post->slug) }}">{{ $post->title }}</a></h4>
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>{{ $post->created_at->format('d M, Y') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endif
                @endforeach

            </ul>
        </div>
    </div>
</div>
