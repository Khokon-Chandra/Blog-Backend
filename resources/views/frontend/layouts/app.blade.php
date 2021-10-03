<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from rstheme.com/products/html/news24/news-magazine/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 May 2021 18:52:00 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Darpan | Home</title>
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/images/fav.png') }}">
    <!-- Place favicon.ico in the root directory -->
    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <!-- hover-min css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/hover-min.css') }}">
      <!-- magnific-popup css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/meanmenu.min.css') }}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}">
    <!-- lightbox css -->
    <link href="{{ asset('frontend/css/lightbox.min.css') }}" rel="stylesheet">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/inc/custom-slider/css/nivo-slider.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/inc/custom-slider/css/preview.css') }}" type="text/css" media="screen" />
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <!-- modernizr js -->
    <script src="{{ asset('frontend/js/modernizr-2.8.3.min.js') }}"></script>
</head>

<body class="home">
	<!--Preloader area Start here-->
	{{-- @include('frontend.layouts.preloader') --}}
	<!--Preloader area end here-->

    <!--Header area start here-->
    @include('frontend.layouts.header')
    <!--Header area end here-->
     {{ $slot }}
    <!-- Footer Area Section Start Here -->
    @include('frontend.layouts.footer')

    <!-- Start scrollUp  -->
    <div id="return-to-top">
        <span>Top</span>
    </div>
    <!-- End scrollUp  -->

    <!-- Footer Area Section End Here -->

    <!-- all js here -->
	<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <!-- jquery latest version -->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
	 <!-- jquery-ui js -->
    <script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <!-- meanmenu js -->
    <script src="{{ asset('frontend/js/jquery.meanmenu.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
	<!-- owl.carousel js -->
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <!-- magnific-popup js -->
    <script src="{{ asset('frontend/js/jquery.magnific-popup.js') }}"></script>

    <!-- jquery.counterup js -->
    <script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
    <!-- jquery light box -->
    <script src="{{ asset('frontend/') }}js/lightbox.min.js"></script>
    <!-- Nivo slider js -->
    <script src="{{ asset('frontend/inc/custom-slider/js/jquery.nivo.slider.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/inc/custom-slider/home.js') }}" type="text/javascript"></script>
    <!-- main js -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>


<!-- Mirrored from rstheme.com/products/html/news24/news-magazine/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 May 2021 18:53:01 GMT -->
</html>
