<div class="like-section">
    <h3 class="title-bg">YOU MIGHT ALSO LIKE</h3>
    <div class="row">
        @foreach ($post->categories as $category)

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="popular-post-img">
                    <a href="{{ route('frontend.posts.show', $category->posts[0]->slug) }}"><img src="{{ $category->posts[0]->feature_image }}"
                            alt="Blog single photo"></a>
                </div>
                <h3>
                    <a href="{{ route('frontend.posts.show', $category->posts[0]->slug) }}">{{ $category->posts[0]->title }}</a>
                </h3>
                <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                    {{ $post->created_at->diffForHumans() }}</span>
            </div>

        @endforeach
    </div>

</div>
