<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Famado Baby and Older Care Taker HTML Template">
    <meta name=”keywords” content="Famado-Baby and Old Care Html template,Famado-Baby and old Care Taker WordPress Theme, themes & template, html5 template, WordPress theme, unlimited colors available, ui/ux,ui/ux design, best html template, html template, html, JavaScript, best css theme,css3, elementor theme, latest premium themes 2023, latest premium templates 2023, preyan technosys Pvt.Ltd,cymol themes, themetech mount,multi-theme, website theme and template, woocommerce, bootstrap template, web templates, responsive theme,services,web design and development, business, company,oldage,childcare,petcare service, charity business, landing pages, landscapers, latest ui/ux design, seo friendly, landing pages, charity maintenance, pet care clinic, babysitting services, childcare centre, day care prices, childcare facilities, baby sitting, professional babysitter, babysitting near me ,charity business, pet care, pet shop, pet accessories, home care, old age house template">
    <meta name="author" content="https://www.algoflow.in/">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{env('APP_NAME')}}</title>
    <link rel="shortcut icon" href="{{asset('static/images/favicon.ico')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static/css/aos.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static/css/abuget.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static/css/fontello.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static/css/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static/css/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static/css/prettyPhoto.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static/css/shortcodes.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static/css/megamenu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static/css/responsive.css')}}">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel='stylesheet' id='rs-plugin-settings-css' href="{{asset('static/revolution/css/rs6.css')}}">

    <script src="{{asset('static/js/jquery-3.6.0.min.js')}}"></script>

</head>
<body>

<!-- page start -->
<div class="page">

    @include('frontend.common.header')

    @yield('content')

<!-- footer start -->
    @include('frontend.common.footer')
    <!-- footer end -->

    <!-- back-to-top start -->
    <a id="totop" href="#top">
        <i class="icon-angle-up"></i>
    </a>
    <!-- back-to-top end -->

</div><!-- page end -->


<!-- Javascript -->
<script src="{{asset('static/js/jquery-migrate-3.3.2.min.js')}}"></script>
<script src="{{asset('static/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('static/js/aos.js')}}"></script>
<script src="{{asset('static/js/jquery-validate.js')}}"></script>
<script src="{{asset('static/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('static/js/slick.min.js')}}"></script>
<script src="{{asset('static/js/jquery-waypoints.js')}}"></script>
<script src="{{asset('static/js/numinate.min.js')}}"></script>
<script src="{{asset('static/js/imagesloaded.min.js')}}"></script>
<script src="{{asset('static/js/jquery-isotope.js')}}"></script>
<script src="{{asset('static/js/circle-progress.min.js')}}"></script>
<script src="{{asset('static/js/main.js')}}"></script>

<!-- Revolution Slider -->
<script src="{{asset('static/revolution/js/rbtools.min.js')}}"></script>
<script src="{{asset('static/revolution/js/rs6.min.js')}}"></script>
<script src="{{asset('static/revolution/js/slider.js')}}"></script>
<!-- Javascript end-->

</body>
</html>
