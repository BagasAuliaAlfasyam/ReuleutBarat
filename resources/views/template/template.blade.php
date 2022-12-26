<!doctype html>
<html class="no-js" lang="zxx">

<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Reuleut Barat</title>

    <!--====== Favicon ======-->
    <link rel="shortcut icon" href="/assets/images/logo/favicon.png" type="images/x-icon" />

    <!--====== CSS Here ======-->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/lightcase.css">
    <link rel="stylesheet" href="/assets/css/meanmenu.css">
    <link rel="stylesheet" href="/assets/css/nice-select.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/odometer.css">
    <link rel="stylesheet" href="/assets/css/animate.min.css">
    <link rel="stylesheet" href="/assets/css/preloader.css">
    <link rel="stylesheet" href="/assets/css/style.css">

</head>

<body id="header">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- preloader  -->
    @include('partials.loader')
    <!-- preloader end -->

    <!-- header start -->
    @include('partials.header')
    <!-- header end -->

    @yield('main')

    <!-- footer start -->
    @include('partials.footer')
    <!-- footer end -->

    <!--========= JS Here =========-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfpGBFn5yRPvJrvAKoGIdj1O1aO9QisgQ"></script>
    <script src="/assets/js/jquery-2.2.4.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery.meanmenu.min.js"></script>
    <script src="/assets/js/jquery.nice-select.min.js"></script>
    <script src="/assets/js/counterup.min.js"></script>
    <script src="/assets/js/lightcase.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/tilt.jquery.min.js"></script>
    <script src="/assets/js/jquery.easing.min.js"></script>
    <script src="/assets/js/scrollwatch.js"></script>
    <script src="/assets/js/sticky-header.js"></script>
    <script src="/assets/js/waypoint.js"></script>
    <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/js/isotope.pkgd.min.js"></script>
    <script src="/assets/js/jquery.appear.js"></script>
    <script src="/assets/js/odometer.min.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/ajax-form.js"></script>
    <script src="/assets/js/main.js"></script>
</body>

</html>
