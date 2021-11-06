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
					    <div class="item">
							<div class="single-videos">
								<div class="images">
									<a href="#"><img src="{{ asset('frontend') }}/images/fetuered/1.jpg" alt=""></a>
									<div class="overley">
										<div class="videos-icon">
											<a class="popup-videos" href="http://www.youtube.com/watch?v=Cdajfy4voyY"><img src="{{ asset('frontend') }}/images/fetuered/video-icon.png" alt=""></a>
										</div>
									</div>
								</div>
								<div class="videos-text">
									<h3><a href="#">Smart Packs Parking Sensor Tech</a></h3>
									<span class="date"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017 </span>
                                    <span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50 </a></span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="single-videos">
								<div class="images">
									<a href="#"><img src="{{ asset('frontend') }}/images/fetuered/2.jpg" alt=""></a>
									<div class="overley">
										<div class="videos-icon">
											<a class="popup-videos" href="http://www.youtube.com/watch?v=Cdajfy4voyY"><img src="{{ asset('frontend') }}/images/fetuered/video-icon.png" alt=""></a>
										</div>
									</div>
								</div>
								<div class="videos-text">
									<h3><a href="#">Woman Endure Five Year Slvery</a></h3>
									<span class="date"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017 </span><span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50 </a></span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="single-videos">
								<div class="images">
									<a href="#"><img src="{{ asset('frontend') }}/images/fetuered/3.jpg" alt=""></a>
									<div class="overley">
										<div class="videos-icon">
											<a class="popup-videos" href="http://www.youtube.com/watch?v=Cdajfy4voyY"><img src="{{ asset('frontend') }}/images/fetuered/video-icon.png" alt=""></a>
										</div>
									</div>
								</div>
								<div class="videos-text">
									<h3><a href="#">Health Benefits of Morning Running</a></h3>
									<span class="date"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017 </span><span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50 </a></span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="single-videos">
								<div class="images">
									<a href="#"><img src="{{ asset('frontend') }}/images/fetuered/4.jpg" alt=""></a>
									<div class="overley">
										<div class="videos-icon">
											<a class="popup-videos" href="http://www.youtube.com/watch?v=Cdajfy4voyY"><img src="{{ asset('frontend') }}/images/fetuered/video-icon.png" alt=""></a>
										</div>
									</div>
								</div>
								<div class="videos-text">
									<h3><a href="#">Smart Packs Parking Sensor Tech</a></h3>
									<span class="date"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017 </span><span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50 </a></span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="single-videos">
								<div class="images">
									<a href="#"><img src="{{ asset('frontend') }}/images/fetuered/5.jpg" alt=""></a>
									<div class="overley">
										<div class="videos-icon">
											<a class="popup-videos" href="http://www.youtube.com/watch?v=Cdajfy4voyY"><img src="{{ asset('frontend') }}/images/fetuered/video-icon.png" alt=""></a>
										</div>
									</div>
								</div>
								<div class="videos-text">
									<h3><a href="#">Smart Packs Parking Sensor Tech</a></h3>
									<span class="date"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017 </span><span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50 </a></span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="single-videos">
								<div class="images">
									<a href="#"><img src="{{ asset('frontend') }}/images/fetuered/2.jpg" alt=""></a>
									<div class="overley">
										<div class="videos-icon">
											<a class="popup-videos" href="http://www.youtube.com/watch?v=Cdajfy4voyY"><img src="{{ asset('frontend') }}/images/fetuered/video-icon.png" alt=""></a>
										</div>
									</div>
								</div>
								<div class="videos-text">
									<h3><a href="#">Smart Packs Parking Sensor Tech</a></h3>
									<span class="date"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017 </span><span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50 </a></span>
								</div>
							</div>
						</div>
                    </div>
                </div>
            </div>

    <!-- Fetuered videos End Here -->

    <!-- Hot News Start Here -->
    <div class="hot-news">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div id="news-Carousel" class="carousel carousel-news slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <!-- Left and right controls -->
                                    <div class="next-prev-top">
                                        <div class="row">
                                            <div class="col-sm-9 col-xs-9">
                                                <div class="view-area">
                                                    <h3 class="title-bg">Health & LIFESTYLE</h3>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 next-prev col-xs-3">
                                                <a class="left news-control" href="#news-Carousel" data-slide="prev">
                                                    <span class="news-arrow-left"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                                                </a>
                                                <a class="right news-control" href="#news-Carousel" data-slide="next">
                                                    <span class="news-arrow-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <a href="#"><img src="{{ asset('frontend') }}/images/news-slider-image/1.jpg" alt="" title="#slider-direction-1" /></a>
                                            <div class="dsc">
                                                <span class="date">
                                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                    November 28, 2017
                                                </span>
                                                <span class="comment">
                                                    <a href="#"> <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                                    </a>
                                                </span>
                                                <h4><a href="blog-single.html"> Nam suscipit pretium consectetur. Proin tristique fermentum.</a></h4>
                                                <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.</p>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <a href="#"><img src="{{ asset('frontend') }}/images/news-slider-image/3.jpg" alt="" title="#slider-direction-1" /></a>
                                            <div class="dsc">
                                                <span class="date">
                                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017
                                                </span>
                                                <span class="comment">
                                                    <a href="#"> <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                                    </a>
                                                </span>
                                                <h4><a href="blog-single.html"> Nam suscipit pretium consectetur. Proin tristique fermentum.</a></h4>
                                                <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div id="news-Carousel2" class="carousel carousel-news slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <!-- Left and right controls -->
                                    <div class="next-prev-top">
                                        <div class="row">
                                            <div class="col-sm-9 col-xs-9">
                                                <div class="view-area">
                                                    <h3 class="title-bg">Politics</h3>
                                                </div>
                                            </div>

                                            <div class="col-sm-3 col-xs-3 next-prev">
                                                <a class="left news-control" href="#news-Carousel2" data-slide="prev">
                                                    <span class="news-arrow-left"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                                                </a>
                                                <a class="right news-control" href="#news-Carousel2" data-slide="next">
                                                    <span class="news-arrow-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <a href="#"><img src="{{ asset('frontend') }}/images/news-slider-image/2.jpg" alt="" title="#slider-direction-1" /></a>
                                            <div class="dsc">
                                                <span class="date">
                                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                    November 28, 2017
                                                </span>
                                                <span class="comment">
                                                    <a href="#"> <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                                    </a>
                                                </span>
                                                <h4><a href="blog-single.html">Disabled people must be front and centre on TV – representation</a></h4>
                                                <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <a href="#"><img src="{{ asset('frontend') }}/images/news-slider-image/4.jpg" alt="" title="#slider-direction-1" /></a>
                                            <div class="dsc">
                                                <span class="date">
                                                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                November 28, 2017 </span>
                                                <span class="comment">
                                                <a href="#"> <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                                </a></span>
                                                <h4><a href="blog-single.html">After Kim Briggs’s death, cyclists must realise that they are traffic too</a></h4>
                                                <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <a href="#"><img src="{{ asset('frontend') }}/images/news-slider-image/2.jpg" alt="" title="#slider-direction-1" /></a>
                                            <div class="dsc">
                                                <span class="date">
                                                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                November 28, 2017 </span>
                                                <span class="comment">
                                                <a href="#"> <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                                </a></span>
                                                <h4><a href="blog-single.html">The new-style GCSEs show why politicians must do more explaining.</a></h4>
                                                <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Two Slider -->
                        <!--Around Area Start Here -->
                        <div class="view-area separator-large3">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h3 class="title-bg">Around the world</h3>
                                    </div>
                                    <div class="col-sm-4 text-right">
                                        <a href="#">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                            </div>
                        </div>
                    <ul class="news-post news-post2 around-news">
                        <li>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 content">
                                    <div class="item-post">

                                        <div class="blog-image">
                                            <a href="blog-single.html"><img src="{{ asset('frontend') }}/images/world/5.jpg" alt="" title="News image" /></a>
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
                                            <h4><a href="blog-single.html">Clinton campaign jilted as FBI to search emails</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestib vitae libero vel purus tincidunt aliquet at nec erat. Mauris the diam, ultrices quis leo sed lacinia egestas.The wise man there always holds in these matters.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 content">
                                    <div class="item-post">
                                        <div class="blog-image">
                                            <a href="blog-single.html"><img src="{{ asset('frontend') }}/images/world/6.jpg" alt="" title="News image" /></a>
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
                                            <h4><a href="blog-single.html">Clinton campaign jilted as FBI to search emails</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestib vitae libero vel purus tincidunt aliquet at nec erat. Mauris the diam, ultrices quis leo sed lacinia egestas.The wise man there always holds in these matters.</p>
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
                                                <a href="blog-single.html"><img src="{{ asset('frontend') }}/images/world/1.jpg" alt="" title="News image" /></a>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-9">
                                                <h4><a href="blog-single.html">Pellentesque Odio Nisi Euismod In Pharet</a></h4>
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
                                                <a href="blog-single.html"><img src="{{ asset('frontend') }}/images/world/2.jpg" alt="" title="News image" /></a>
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
                                                <a href="blog-single.html"><img src="{{ asset('frontend') }}/images/world/3.jpg" alt="" title="News image" /></a>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-9">
                                                <h4><a href="blog-single.html"> Erant Aeque Neius No Numes Electram </a></h4>
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
                                                <a href="blog-single.html"><img src="{{ asset('frontend') }}/images/world/4.jpg" alt="" title="News image" /></a>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-9">
                                                <h4><a href="blog-single.html">YouTube Acquire Twitch <br />For $1Billion</a></h4>
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
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-left-none">
                    <h3 class="title-bg featured-title">Featured News</h3>
                    <div class="sidebar">
                        <ul>
                            <li>
                                <a href="#" class="category-btn hvr-bounce-to-right">Business</a>
                                <div class="post-image"><a href="blog-single.html"><img src="{{ asset('frontend') }}/images/sidebar/1.jpg" alt="News image" /></a></div>
                                <div class="content">
                                    <h4><a href="blog-single.html">The exhibition Bankasy doesn’t want you to see</a></h4>
                                    <span class="date">
                                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017
                                    </span>
                                    <span class="comment">
                                        <a href="#">
                                            <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                        </a>
                                    </span>

                                </div>
                            </li>
                            <li>
                                <a href="category-health.html" class="category-btn hvr-bounce-to-right">Health</a>
                                <div class="post-image"><a href="blog-single.html"><img src="{{ asset('frontend') }}/images/sidebar/2.jpg" alt="News image" /></a></div>
                                <div class="content">
                                    <h4><a href="#">The exhibition Bankasy doesn’t want you to see</a></h4>
                                    <span class="date">
                                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017
                                    </span>
                                    <span class="comment">
                                        <a href="#">
                                            <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                        </a>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="category-btn hvr-bounce-to-right">Fashion</a>
                                <div class="post-image"><a href="blog-single.html"><img src="{{ asset('frontend') }}/images/sidebar/3.jpg" alt="News image" /></a></div>
                                <div class="content">
                                    <h4><a href="#">The exhibition Bankasy doesn’t want you to see</a></h4>
                                    <span class="date">
                                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017
                                    </span>
                                    <span class="comment">
                                        <a href="#">
                                            <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                        </a>
                                    </span>

                                </div>
                            </li>
                        </ul>
                        <div class="categories-home separator-large3">
                            <h3 class="title-bg">Categories</h3>
                            <ul>
                                <li><a href="category.html"> <i class="fa fa-angle-right" aria-hidden="true"></i> Business <span>45</span></a></li>
                                <li><a href="category-world.html"><i class="fa fa-angle-right" aria-hidden="true"></i> World <span>70</span></a></li>
                                <li><a href="category-fashion.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Fashion <span>45</span></a></li>
                                <li><a href="category-politics.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Politics <span>55</span></a></li>
                                <li><a href="category-sports.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Sports <span>50</span></a></li>
                                <li><a href="category-health.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Health <span>65</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- All News Section end Here -->
</x-frontend.app-layout>
