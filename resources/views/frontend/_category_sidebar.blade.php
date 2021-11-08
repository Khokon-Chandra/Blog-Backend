<div id="sidebar-wrapper" class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
    <!-- Blog Single Sidebar Start Here -->
    <div class="sidebar-area theiaStickySidebar">
        <div class="like-box-area">
            <ul>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> <span class="like-page">like our facebook page <br/>210,956 likes</span> <span class="like"><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> <span class="like-page">Follow us on twitter<br/>2109 followers</span> <span class="like">
                <i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i> <span class="like-page">Subscribe to our rss <br/>210,956 likes</span> <span class="like"><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
            </ul>
        </div>
        <div class="recent-post-area hot-news">
            <h3 class="title-bg">Recent Post</h3>
            <ul class="news-post">
                @foreach ($recentPost as $post)
                <li>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                            <div class="item-post">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-right-none">
                                        <a href="{{ route('frontend.posts.show',$post->slug) }}"><img src="{{ $post->feature_image }}" alt="" title="News image" /></a>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <h4><a href="{{ route('frontend.posts.show',$post->slug) }}">{{ $post->title }}</a></h4>
                                        <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>{{ $post->created_at->format('d M Y') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="trending-post-area">
            <h3 class="title-bg">Trending Post</h3>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul>
                        @foreach ($trandingCategory as $category)

                        <li>
                            <a href="{{ route('frontend.posts.category',$category->slug) }}" class="hvr-bounce-to-right team-btn">{{ $category->name }}</a><br/>
                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                            <h4><a href="{{ route('frontend.posts.category',$category->slug) }}">{{ $category->posts[0]->excerpt }}</p>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="add">
            <img src="images/add/4.jpg" alt="Add">
        </div>
    </div>
</div>
