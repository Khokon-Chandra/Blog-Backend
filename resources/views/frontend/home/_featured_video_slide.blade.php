<div class="fetuered-videos">
    <div class="container">
        <div class="row">
            <div class="view-area">
                <div class="col-sm-12">
                    <h3 class="title-bg">Fetuered Videos</h3>
                </div>
            </div>
        </div>
        <div id="featured-videos-section" class="owl-carousel">

            @foreach ($featuredVideoes as $video)
            <div class="item">
                <div class="single-videos">
                    <div class="images">
                        <a href="{{ route('frontend.posts.show',$video->slug) }}"><img src="{{ $video->feature_image }}" alt=""></a>
                        <div class="overley">
                            <div class="videos-icon">
                                <a class="popup-videos" href="http://www.youtube.com/watch?v=Cdajfy4voyY"><img src="{{ asset('frontend') }}/images/fetuered/video-icon.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="videos-text">
                        <h3><a href="#">{{ $video->title }}</a></h3>
                        <span class="date"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i>{{ $video->created_at->format('d M, Y') }}</span>
                        <span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>{{ $video->comments_count }}</a></span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
