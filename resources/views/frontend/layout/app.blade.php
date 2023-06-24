<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="https://60pluscare.in/">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow"/>

    <!--favicon-->
    <link rel="shortcut icon" href="{{asset('static/images/favicon.ico')}}">

    <!--meta tags-->
    <title>{!! isset($metaseo['meta_title']) ? $metaseo['meta_title'] : env('APP_NAME') !!}</title>

    <meta name="title" content="{!! isset($metaseo['meta_title']) ? $metaseo['meta_title'] : env('APP_NAME') !!}">
    <!-- description -->
    <meta name="description" content="{!! isset($metaseo['meta_description']) ? $metaseo['meta_description'] : env('APP_NAME') !!}">
    <!-- keywords -->
    <meta name="keywords" content="{!! isset($metaseo['meta_keywords']) ? $metaseo['meta_keywords'] : env('APP_NAME') !!}">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{asset('static/css/all.min.css')}}">


    <!--<link rel="stylesheet" type="text/css" href="{{asset('static/css/aos.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static/css/animate.css')}}">-->
<!--<link rel="stylesheet" type="text/css" href="{{asset('static/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static/css/themify-icons.css')}}">-->
<!--<link rel="stylesheet" type="text/css" href="{{asset('static/css/prettyPhoto.css')}}">-->

    <link rel="stylesheet" type="text/css" href="{{asset('static/css/flaticon.css')}}"><!--need to delete-->

    <link rel="stylesheet" type="text/css" href="{{asset('static/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static/css/shortcodes.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static/css/megamenu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('static/css/responsive.css')}}">
    <!-- REVOLUTION LAYERS STYLES -->
    <!--<link rel='stylesheet' id='rs-plugin-settings-css' href="{{asset('static/revolution/css/rs6.css')}}">-->

    <!--jquery cdn-->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <!--Facebook-->
    <meta property="og:title" content="{!! isset($metaseo['meta_title']) ? $metaseo['meta_title'] : env('APP_NAME') !!}" />
    <meta property="og:type" content="Website" />
    <meta property="og:url" content="https://60pluscare.in/" />
    <meta property="og:site_name" content="60pluscare.in" />
    <meta property="og:description" content="{!! isset($metaseo['meta_description']) ? $metaseo['meta_description'] : env('APP_NAME') !!}" />
    <meta property="og:image" content="{{isset($metaseo->SeoPicture->image_full) ? asset($metaseo->SeoPicture->image_full) : asset(\App\Models\Picture::getDefaultImage()->image_full)}}" />
    <meta property="og:image:secure" content="{{isset($metaseo->SeoPicture->image_full) ? asset($metaseo->SeoPicture->image_full) : asset(\App\Models\Picture::getDefaultImage()->image_full)}}" />
    <meta property="al:ios:url" content="https://60pluscare.in/" />
    <!--end facebook-->

    <!--twitter cards-->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@algoflowindia">
    <meta name="twitter:creator" content="@algoflowindia">
    <meta name="twitter:title" content="{!! isset($metaseo['meta_title']) ? $metaseo['meta_title'] : env('APP_NAME') !!}">
    <meta name="twitter:description" content="{!! isset($metaseo['meta_description']) ? $metaseo['meta_description'] : env('APP_NAME') !!}">
    <meta name='twitter:app:country' content="in">
    <meta name="twitter:image" content="{{isset($metaseo->SeoPicture->image_full) ? asset($metaseo->SeoPicture->image_full) : asset(\App\Models\Picture::getDefaultImage()->image_full)}}" />
    <!--card end-->

    <!--canonical-->
    <link rel="canonical" href="{{ Request::fullUrl() }}" />

    <!--Structured Data-->
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "60 Plus Care",
        "url": "https://60pluscare.in",
        "logo": "{{asset('static/images/logo.png')}}",
        "sameAs": [
            "https://www.facebook.com/algoflow.in",
            "https://twitter.com/algoflowindia",
            "https://in.pinterest.com/algoflow/",
            "https://www.linkedin.com/in/algoflow-india/"
        ]
    }
</script>

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="{{asset('static/js/main.js')}}"></script>

<!--<script src="{{asset('static/js/jquery-migrate-3.3.2.min.js')}}"></script>-->
<!--<script src="{{asset('static/js/aos.js')}}"></script>
<script src="{{asset('static/js/jquery-validate.js')}}"></script>
<script src="{{asset('static/js/jquery.prettyPhoto.js')}}"></script>-->

<script src="{{asset('static/js/slick.min.js')}}"></script>
<script src="{{asset('static/js/jquery-waypoints.js')}}"></script>
<!--<script src="{{asset('static/js/numinate.min.js')}}"></script>-->
<!--<script src="{{asset('static/js/imagesloaded.min.js')}}"></script>-->
<script src="{{asset('static/js/jquery-isotope.js')}}"></script>
<!--<script src="{{asset('static/js/circle-progress.min.js')}}"></script>-->


<!-- Revolution Slider -->
<!--<script src="{{asset('static/revolution/js/rbtools.min.js')}}"></script>
<script src="{{asset('static/revolution/js/rs6.min.js')}}"></script>
<script src="{{asset('static/revolution/js/slider.js')}}"></script>-->
<!-- Javascript end-->

</body>
</html>
