<div class="like-section">
    <h3 class="title-bg">YOU MIGHT ALSO LIKE</h3>
    <div class="row">
        @foreach ($post->categories as $category)
            @foreach ($category->posts as $post)
            @if ($loop->iteration ==7)
            @break
            @endif
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="popular-post-img">
                    <a href="{{ route('frontend.posts.show',$post->slug) }}"><img src="{{ $post->feature_image }}" alt="Blog single photo"></a>
                </div>
                <h3>
                    <a href="{{ route('frontend.posts.show',$post->slug) }}">{{ $post->title }}</a>
                </h3>
                <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> {{ $post->created_at->diffForHumans() }}</span>
            </div>
            @endforeach
        @endforeach
    </div>
</div>
