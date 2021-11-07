<x-frontend.app-layout :menus="$menus">
  <x-frontend.page-header :page="$post"/>
    <!-- Inner Page Header serction end here -->

   <!-- Blog Single Start Here -->
    <div class="single-blog-page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="single-image">
                        <img src="{{ $post->feature_image }}" alt="Blog single photo">
                    </div>
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->description }}</p>
                    <div class="share-section">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 life-style">
                                <span class="author">
                                    <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Admin </a>
                                </span>
                                <span class="comment">
                                <a href="#">
                                    <i class="fa fa-comment-o" aria-hidden="true"></i> 12</a>
                                </span>
                                <span class="date">
                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>{{ $post->created_at->diffForHumans() }}
                                </span>
                                <span class="cat">
                                    <a href="#"><i class="fa fa-folder-o" aria-hidden="true"></i> Life Style </a>
                                </span>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul class="share-link">
                                    <li class="hvr-bounce-to-right"><a href="#"> Tags:</a></li>
                                    <li class="hvr-bounce-to-right"><a href="#"> Food</a></li>
                                    <li class="hvr-bounce-to-right"><a href="#"> Fashion</a></li>
                                    <li class="hvr-bounce-to-right"><a href="#"> Travel</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="share-section share-section2">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <span> You Can Share It : </span>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul class="share-link">
                                    <li class="hvr-bounce-to-right"><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                    <li class="hvr-bounce-to-right"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                    <li class="hvr-bounce-to-right"><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <ul class="next-pre-section">
                                <li class="left-arrow"><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i> Previous Post</a></li>
                                <li class="right-arrow"><a href="#">Next Post <i class="fa fa-angle-right" aria-hidden="true"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="like-section">
                        <h3 class="title-bg">YOU MIGHT ALSO LIKE</h3>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="popular-post-img">
                                    <a href="#"><img src="images/single/2.jpg" alt="Blog single photo"></a>
                                </div>
                                <h3>
                                    <a href="#">Easy to Use Your Gallery</a>
                                </h3>
                                <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Sep 13, 2017</span>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="popular-post-img">
                                    <a href="#"><img src="images/single/4.jpg" alt="Blog single photo"></a>
                                </div>
                                <h3>
                                    <a href="#">Easy to Use Your Gallery</a>
                                </h3>
                                <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Sep 13, 2017</span>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="popular-post-img">
                                    <a href="#"><img src="images/single/5.jpg" alt="Blog single photo"></a>
                                </div>
                                <h3>
                                    <a href="#">Easy to Use Your Gallery</a>
                                </h3>
                                <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Sep 13, 2017</span>
                            </div>
                        </div>
                    </div>
                    <div class="author-comment">
                        <h3 class="title-bg">Recent Comments</h3>
                        <ul>
                            <li>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <div class="image-comments"><img src="images/single/3.jpg" alt="Blog single photo"></div>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                        <span class="reply"> <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Sep 13, 2017</span></span>
                                        <div class="dsc-comments">
                                            <h4>Thesera Minton</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do they eiusmod tempor incidi dunt ut labore et dolore magna aliquat enim ad minim veniam ad minim veniam.</p>
                                            <a href="#"> Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <div class="image-comments"><img src="images/single/3.jpg" alt="Blog single photo"></div>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                        <span class="reply"> <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Sep 13, 2017</span></span>
                                        <div class="dsc-comments">
                                            <h4>Thesera Minton</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do they eiusmod tempor.</p>
                                            <a href="#"> Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <div class="image-comments"><img src="images/single/3.jpg" alt="Blog single photo"></div>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                        <span class="reply"><span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Sep 13, 2017</span></span>
                                        <div class="dsc-comments">
                                            <h4>Thesera Minton</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do they eiusmod tempor incidi dunt ut labore et dolore magna aliquat enim ad minim veniam ad minim veniam.</p>
                                            <a href="#"> Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                       <div class="leave-comments-area">
                            <h4 class="title-bg">Leave Comments</h4>
                            <form>
                                <fieldset>
                                    <div class="form-group">
                                        <label>Name*</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Email*</label>
                                        <input type="email" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Website</label>
                                        <input type="website" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Your comment here...</label>
                                        <textarea cols="40" rows="10" class="textarea form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn-send" type="submit">Post Comment</button>
                                    </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                @include('frontend._category_sidebar')
            </div>
        </div>
    </div>
</x-frontend.app-layout>
