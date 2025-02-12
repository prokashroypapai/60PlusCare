<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="60pluscare.in">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="copyright" content="Copyright 2023 - 60 Plus Care"/>
    <meta name="expires" content="never"/>
    <meta content="telephone=no" name="format-detection">

    <link rel="dns-prefetch" href="https://fonts.googleapis.com">

    <!--favicon icons-->
    <link rel="apple-touch-icon-precomposed" sizes="192x192" href="{{asset('static/images/ico/apple-touch-icon-192-precomposed.png')}}"/>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('static/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('static/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('static/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{asset('static/images/ico/apple-touch-icon-57-precomposed.png')}}">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('static/images/ico/favicon.png')}}" />

    <!--meta tags-->
    <title>{{ $metaseo['meta_title'] }}</title>

    <meta name="title" content="{{ $metaseo['meta_title'] }}">
    <!-- description -->
    <meta name="description" content="{{ $metaseo['meta_description'] }}">
    <!-- keywords -->
    <meta name="keywords" content="{{ $metaseo['meta_keywords'] }}">

    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" as="font" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"></noscript>
    <!--google fonts-->

    <!--jquery cdn-->
    <script rel="dns-prefetch" src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"></noscript>

    <script rel="dns-prefetch" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


    <script>
        /*$("img").one("load", function() {
        }).each(function() {
            if(this.complete) {
                $(this).trigger('load'); // For jQuery >= 3.0
            }
        });*/
    </script>
    <link rel="preload" href="{{asset('static/css/main.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{asset('static/css/main.css')}}"></noscript>

    <!--Facebook-->
    <meta property="og:title" content="{!! isset($metaseo['meta_title']) ? $metaseo['meta_title'] : env('APP_NAME') !!}" />
    <meta property="og:type" content="Website" />
    <meta property="og:url" content="{{env('APP_URL')}}" />
    <meta property="og:site_name" content="{{env('APP_NAME')}}" />
    <meta property="og:description" content="{!! isset($metaseo['meta_description']) ? $metaseo['meta_description'] : env('APP_NAME') !!}" />
    <meta property="og:image" content="{{isset($metaseo->SeoPicture->image_full) ? asset($metaseo->SeoPicture->image_full) : asset(\App\Models\Picture::getDefaultImage()->image_full)}}" />
    <meta property="og:image:secure" content="{{isset($metaseo->SeoPicture->image_full) ? asset($metaseo->SeoPicture->image_full) : asset(\App\Models\Picture::getDefaultImage()->image_full)}}" />
    <meta property="al:ios:url" content="{{env('APP_URL')}}" />
    <!--end facebook-->

    <!--twitter cards-->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@the60pluscare">
    <meta name="twitter:creator" content="@the60pluscare">
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
        "logo": "{{asset('static/images/logo.webp')}}",
        "sameAs": [
            "https://www.facebook.com/60PlusCareElderCareHomeCare",
            "https://twitter.com/the60pluscare",
            "https://in.pinterest.com/60pluscare/",
            "https://www.linkedin.com/company/60-plus-clinic-caring-for-elders/"
        ]
    }
</script>

    <!-- Google tag (gtag.js) -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=G-FJ691SBD3J"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-FJ691SBD3J');

        gtag('config', 'AW-950671218');
    </script>

    <!-- Event snippet for Website sale conversion page --> <script> gtag('event', 'conversion', { 'send_to': 'AW-950671218/zsPICIyuqdQBEPKuqMUD', 'transaction_id': '' }); </script>

    @laravelPWA
</head>
<body>

<div id="load"></div>
<style>
    #load{
        width:100%;
        height:100%;
        position:fixed;
        z-index:9999;
        background:url("/static/images/loader-logo.png") no-repeat center center rgba(255,255,255,1)
    }
</style>
<script>
    document.onreadystatechange = function () {
        var state = document.readyState
        if (state === 'complete') {
            document.getElementById('interactive');
            document.getElementById('load').style.visibility="hidden";
        }
    }
</script>
<!-- page start -->
<div class="page">
<!--cyclone-->
    <div style="width: 100%; position: relative; display: inline-block" data-bs-toggle="modal" data-bs-target="#exampleModal2">
        <div class="col-12 mb-2 d-flex text-white" style="background-color: #041dbf">
            <span class="bg-danger text-white px-3 me-2 py-2"><strong>WARNING</strong></span>
            <div class="py-2">
                <img src="{{ asset('/static/images/caution-icon.png') }}" width="25" height="25"/>
                Cyclonic Warning for 60 Plus Care Members
            </div>
        </div>
    </div>
    <!--cyclone-->

    @include('frontend.common.header2')

    @yield('content')

<!-- footer start -->
    @include('frontend.common.footer')
    <!-- footer end -->

    <!-- back-to-top start -->
    <a id="totop" href="#top">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
        </svg>
    </a>
    <!-- back-to-top end -->

</div>
<!--sticky sidebarItem-->
<div class="sidebarItem">
    <div class="social emergency">
        <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <p>
                Emergency
                <img loading="lazy" src="{{ asset('static/images/red-cross-emergency.gif') }}" width="40" height="auto" alt="emergency icon of {{env('APP_NAME')}}"/>
            </p>
        </a>
    </div>
    <div class="social whatsapp">
        <a href="https://api.whatsapp.com/send?phone=918296111777" target="_blank">
            <p>Whatsapp
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                </svg>
            </p>
        </a>
    </div>
    <div class="social call">
        <a href="tel:+918296111777" target="_blank">
            <p>Call Now
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                </svg>
            </p>
        </a>
    </div>
</div>
<!--End Sticky Icon-->
<style>
    .modal{
        border: 4px solid #f00;
    }
    .modal-backdrop
    {
        opacity:0.9 !important;
    }
    .sidebarItem .social a {text-decoration: none;vertical-align: middle;text-align: center;line-height: 3;}.sidebarItem .social a p {color: white;margin: 0px;font-weight: 600;}.sidebarItem {height: auto;width: 0px;position: fixed;text-align: center;top: 35vh;padding: 10px;z-index: 1001;}.sidebarItem p .bi {left: 45px;position: relative;vertical-align: middle;text-align: center;}.sidebarItem p img {left: 40px;position: relative;vertical-align: middle;}.sidebarItem .social {margin-left: -200px;width: 230px;padding: 0;display: inline-table;height: 0px;background-color: rgba(128, 128, 128, 0.73);-moz-transition-property: margin-left;-moz-transition-duration: 0.2s;-moz-transition-delay: 0.2s;-ms-transition-property: margin-left;-ms-transition-duration: 0.2s;-ms-transition-delay: 0.2s;-o-transition-property: margin-left;-o-transition-duration: 0.2s;-o-transition-delay: 0.2s;-webkit-transition-property: margin-left;-webkit-transition-duration: 0.2s;-webkit-transition-delay: 0.2s;box-shadow: 0px 0px 6px 0px #3E3D3D;cursor: pointer;}.sidebarItem .social:hover {margin-left: -30px;width: 230px;}.sidebarItem .social.emergency {background-color: #f00;padding: 15px 0;}.sidebarItem .social.whatsapp {background-color: #26d367;}.sidebarItem .social.call {background-color: #184f34;}
</style>
<!--sticky sidebarItem-->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    60 Plus Care Emergency
                    <img loading="lazy" src="{{ asset('static/images/red-cross-emergency.gif') }}" width="40" height="auto" alt="Emergency Banner of {{env('APP_NAME')}}"/>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-12 py-3 border-bottom">
                    <img loading="lazy" src="{{ asset('static/images/call-ambulance.jpg') }}" class="img-fluid" onclick='window.location.href="tel:+918296111777"' alt="Ambulance Calling banner of {{env('APP_NAME')}}"/>
                </div>
                <div class="col-12 py-3 border-bottom">
                    <img loading="lazy" src="{{ asset('static/images/call-doctor.jpg') }}" class="img-fluid" onclick='window.location.href="tel:+918296111777"' alt="Doctor Calling Banner of {{env('APP_NAME')}}"/>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal2Label">
                    Cyclonic Warning
                    <img loading="lazy" src="{{ asset('static/images/caution-icon.png') }}" width="40" height="auto" alt="Emergency Banner of {{env('APP_NAME')}}"/>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="{{ asset('static/images/caution-banner.png') }}" class="img-fluid"/>
            </div>
        </div>
    </div>
</div>
<!-- page end -->

<script>
    function loadjscssfile(filename, filetype){
        if (filetype === "js"){ //if filename is a external JavaScript file
            var fileref=document.createElement('script')
            fileref.setAttribute("async", true);
            fileref.setAttribute("type","text/javascript")
            fileref.setAttribute("src", filename)
        }
        else if (filetype === "css"){ //if filename is an external CSS file
            var fileref=document.createElement("link")
            fileref.setAttribute("rel", "stylesheet")
            fileref.setAttribute("type", "text/css")
            fileref.setAttribute("href", filename)
        }
        if (typeof fileref!="undefined")
            document.getElementsByTagName("head")[0].appendChild(fileref)
    }
    //loadjscssfile("{{asset('static/css/all.min.css')}}", "css")
    loadjscssfile("{{asset('static/css/slick.css')}}", "css")
    loadjscssfile("{{asset('static/css/shortcodes.css')}}", "css")
    loadjscssfile("{{asset('static/css/responsive.css')}}", "css")
    loadjscssfile("{{asset('static/css/megamenu.css')}}", "css")


    loadjscssfile("{{asset('static/js/main.js')}}", "js")
    loadjscssfile("{{asset('static/js/slick.min.js')}}", "js")

</script>

</body>
</html>
