@props(['page'])

<div class="inner-page-header">
    <div class="banner">
        <img src="{{ asset('img/banner/3.jpg') }}" alt="Banner">
    </div>
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="header-page-locator">
                        <ul>
                            <li><a href="{{ route('frontend.home') }}">Home <i class="fa fa-compress" aria-hidden="true"></i></a>{{ $page->name??'Single Post' }}</li>
                        </ul>
                    </div>
                    <div class="header-page-title">
                        <h1>{{ $page->name??'Single Post' }}</h1>
                    </div>
                    <div class="header-page-subtitle">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                            <br>alteration in some form, by injected humou</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
