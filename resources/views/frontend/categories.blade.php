<x-frontend.app-layout :menus="$menus">
    <x-frontend.page-header :pagename="$pageName" />

    <div class="container" style="margin-top: 20px">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-lg-4 col-md-4 col-12 mb-3">
                <div style="margin-bottom: 15px;">
                    <div class="card shadow border text-center">
                        <h4 class="card-header">{{ $category->name }}</h4>
                        <div class="card-body">
                            <a href="{{ route('frontend.posts.category',$category->slug) }}">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</x-frontend.app-layout>
