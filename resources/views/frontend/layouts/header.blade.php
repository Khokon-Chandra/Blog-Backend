<header>
    <div class="header-top-area">
        <div class="container">
            {{-- Email verification status --}}
            @if (session('status') == 'verification-link-sent')
                <div class="alert alert-warning" role="alert">
                    A new verification link has been sent to the email address you provided during registration.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
            @endif
            {{-- Email verification status --}}
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="header-top-left">
                        <ul>
                            <li><span id="today"></span></li>
                            @if (Auth::check())
                                
                                @if (Auth::user()->email_verified_at == null)
                                    <li>
                                        <form method="POST" action="{{ route('verification.send') }}">
                                            @csrf
                                            <button type="submit" class="btn text-danger">Verify email</button>
                                        </form>
                                    </li>
                                @else
                                    <li>
                                        <img style="width: 30px;height:auto;border-radius:50%"
                                            src="{{ Auth::user()->avatar }}" alt="">
                                    </li>
                                    <li>
                                        <form action="/logout" method="POST" class="dropdown-item">
                                            @csrf
                                            <input type="submit" value="Log out" class="btn btn-block btn-danger text-left">
                                        </form>
                                    </li>
                                @endif

                                @if (Auth::user()->type == 'admin')
                                    <li><a href="{{ route('dashboard') }}" class="btn btn-sm btn-success">Dashboard</a></li>
                                @endif

                            @else
                                <li>
                                    <a href="{{ route('login') }}">Sign In</a>
                                    /
                                    <a href="{{ route('register') }}">Join</a>
                                </li>
                            @endif
                            <li><a href="{{ route('frontend.contactPage') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="social-media-area">
                        <nav>
                            <ul>
                                <li><a href="#" class="active"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="{{ route('frontend.home') }}"><img src="{{ asset('frontend/images/logo.png') }}"
                                alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="right-banner">
                        <img src="{{ asset('frontend/images/add/1.png') }}" alt="add image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom-area" id="sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                    <div class="navbar-header">
                        <div class="col-sm-8 col-xs-8 padding-null">
                            <button class="navbar-toggle" type="button" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="col-sm-4 col-xs-4 hidden-desktop text-right search">
                            <a href="#search-mobile" data-toggle="collapse" class="search-icon"><i
                                    class="fa fa-search" aria-hidden="true"></i></a>
                            <div id="search-mobile" class="collapse search-box">
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                        </div>
                    </div>
                    @include('frontend.layouts.navigation')
                </div>
                <div class="col-lg-2 col-md-2 col-sm-hidden col-xs-hidden text-right search hidden-mobile">
                    <a href="#search" data-toggle="collapse" class="search-icon"><i class="fa fa-search"
                            aria-hidden="true"></i></a>
                    <div id="search" class="collapse search-box">
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
