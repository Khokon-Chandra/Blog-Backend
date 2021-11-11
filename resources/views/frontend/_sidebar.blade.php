<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-left-none sidebar-latest">
    <!--Like Box Start Here -->
    <div class="like-box">
        <ul>
            <li>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> </a><span>210,956 <br />likes</span>
            </li>
            <li>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a><span>350,580 <br />followers</span>
            </li>
            <li class="last">
                <a href="#"><i class="fa fa-rss" aria-hidden="true"></i> </a><span>210,956 <br />subscribers</span>
            </li>
        </ul>
    </div>
    <!--Like Box End Here -->

    <!--Add Start Here -->
    <div class="add-section">
        <img src="{{ asset('frontend/images/add/2.jpg') }}" alt="add image">
    </div>
    <!--Add Box End Here -->

    <!--Newsletter Start Here -->

    <div class="newsletter-info">
        @error('email')
        <div class="invalid-feedback text-danger bg-white">{{ $message }}</div>
    @enderror
        <x-alert />
        <form method="POST" action="{{ route('subscription.store') }}">
            @csrf
            <fieldset>
                <div class="form-group">
                    <h4>Subscribe to Newsletter</h4>
                    <div class="newsletter">
                    <input class="form-control" placeholder="Email address..." type="email" name="email">
                    <button class="btn-send" type="submit">Subscribe</button>
                    <p>Get the latest news stories in your inbox</p>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>

    <!--Newsletter End Here -->

    <!--Recent comments Start Here -->
        <div class="recent-comments separator-large">
            <div id="comments-Carousel" class="carousel carousel-comments slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <!-- Left and right controls -->
                <div class="next-prev-top">
                    <div class="row">
                        <div class="col-sm-9 col-xs-9">
                            <div class="view-area">
                                <h3 class="title-bg">Recent Comments</h3>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-3 next-prev">
                            <a class="left news-control" href="#comments-Carousel" data-slide="prev">
                                <span class="news-arrow-left"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                            </a>
                            <a class="right news-control" href="#comments-Carousel" data-slide="next">
                                <span class="news-arrow-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-inner">
                    @foreach ($recentComments as $comment)
                    <div class="item {{ $loop->index<1?'active':'' }}">
                        <div class="dsc">
                            <p>{{ $comment->message }}</p>
                            <span>- {{ $comment->author->name }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    <!--Recent comments Start Here -->
</div>
