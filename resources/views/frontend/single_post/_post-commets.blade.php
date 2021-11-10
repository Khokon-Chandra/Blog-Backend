<div class="author-comment">
    <h3 class="title-bg">Recent Comments</h3>
    <ul class="ml-0">
        @foreach ($post->comments as $comment)
            <div>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                        <div class="rounded"><img style="border-radius: 50%;" src="{{ $comment->author->avatar??'' }}" alt="Blog single photo"></div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                        <span class="reply"> <span class="date"><i class="fa fa-calendar-check-o"
                                    aria-hidden="true"></i>{{ $comment->created_at->diffForHumans() }}</span></span>
                        <div class="dsc-comments">
                            <h4>{{ $comment->author->name??'' }}</h4>
                            <p>{{ $comment->message??'' }}</p>
                            <a href="#"> Reply</a>
                        </div>
                    </div>
                </div>
               @isset($comment->childs)
                <ul>
                   @foreach ($comment->childs as $comment)
                   <li>
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <div class="image-comments"><img src="{{ $comment->author->avatar }}" alt="Blog single photo"></div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                            <span class="reply"> <span class="date"><i class="fa fa-calendar-check-o"
                                        aria-hidden="true"></i>{{ $comment->created_at->diffForHumans() }}</span></span>
                            <div class="dsc-comments">
                                <h4>{{ $comment->author->name }}</h4>
                                <p>{{ $comment->message }}</p>
                                <a href="#"> Reply</a>
                            </div>
                        </div>
                    </div>
                </li>
                   @endforeach
                </ul>
               @endisset
            </li>
        @endforeach
    </ul>
</div>
