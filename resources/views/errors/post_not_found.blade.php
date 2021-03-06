<x-frontend.app-layout :menus="$menus">
    <!-- Inner Page Header serction start here -->
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
                                <li><a href="index.html">Home <i class="fa fa-compress" aria-hidden="true"></i> </a> Error</li>
                            </ul>
                        </div>
                        <div class="header-page-title">
                            <h1>Error 404</h1>
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
    <!-- Inner Page Header serction end here -->

   <!-- Erroe 404 Page Start Here -->
    <div class="error-page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="erroe-404">
                        <h2>404</h2>
                        <span>Sorry Page Was Not Found</span>
                    </div>
                    <p>The page you are looking is not available or has been removed.
                    Try going to Home Page by using the button below.</p>
                    <a href="index.html">Go To Home Page</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Erroe 404 Page End Here -->
</x-frontend.app-layout>
