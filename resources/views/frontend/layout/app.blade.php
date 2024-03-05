<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Link of CSS files -->
    <link rel="stylesheet" href="{{ asset('/static/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/static/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('/static/css/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('/static/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/static/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/static/css/fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('/static/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('/static/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/static/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('/static/css/dark-theme.css') }}">
    <title>Teli - Digital Healthcare & Medical Services HTML Template</title>

    <!--favicon icons-->
    <link rel="apple-touch-icon-precomposed" sizes="192x192" href="{{asset('static/images/ico/apple-touch-icon-192-precomposed.png')}}"/>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('static/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('static/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('static/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{asset('static/images/ico/apple-touch-icon-57-precomposed.png')}}">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('static/images/ico/favicon.png')}}" />

    <!--jquery cdn-->
    <script rel="dns-prefetch" src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</head>

<body>

<!--Preloader starts-->
<!--<div class="loader js-preloader">
    <div class="absCenter">
        <div class="loaderPill">
            <div class="loaderPill-anim">
                <div class="loaderPill-anim-bounce">
                    <div class="loaderPill-anim-flop">
                        <div class="loaderPill-pill"></div>
                    </div>
                </div>
            </div>
            <div class="loaderPill-floor">
                <div class="loaderPill-floor-shadow"></div>
            </div>
        </div>
    </div>
</div>-->
<!--Preloader ends-->

<!-- Theme Switcher Start -->
<div class="switch-theme-mode">
    <label id="switch" class="switch">
        <input type="checkbox" onchange="toggleTheme()" id="slider">
        <span class="slider round"></span>
    </label>
</div>
<!-- Theme Switcher End -->

@yield('content')

<!-- Back-to-top button Start -->
<a href="javascript:void(0)" class="back-to-top bounce"><i class="ri-arrow-up-s-line"></i></a>
<!-- Back-to-top button End -->

<!-- Link of JS files -->
<script src="{{ asset('/static/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/static/js/form-validator.min.js') }}"></script>
<script src="{{ asset('/static/js/contact-form-script.js') }}"></script>
<script src="{{ asset('/static/js/aos.js') }}"></script>
<script src="{{ asset('/static/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('/static/js/odometer.min.js') }}"></script>
<script src="{{ asset('/static/js/fancybox.js') }}"></script>
<script src="{{ asset('/static/js/jquery.appear.js') }}"></script>
<script src="{{ asset('/static/js/tweenmax.min.js') }}"></script>
<script src="{{ asset('/static/js/main.js') }}"></script>
</body>
</html>
