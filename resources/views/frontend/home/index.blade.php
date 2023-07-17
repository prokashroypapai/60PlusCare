@extends('frontend.layout.app')
@section('content')
    <div class="headingMain">
        <h1>Best Elder Care Services in Kolkata.</h1><p>60Plus Care is the oldest elder care service provider in Kolkata serving from 2008. We are ready to provide 24 hours duty for Senior Care Services in Kolkata. Our experienced doctors and nurses are best in Home Care Assistant Services.</p><h2>Get Best Elderly Care Services in Kolkata</h2>
    </div>
    <style>
        .headingMain {clip: rect(1px,1px,1px,1px);height: 1px;overflow: hidden;position: absolute;white-space: nowrap;width: 1px;}
    </style>
    <div class="col-12 position-relative">
        @if(count(\App\Models\Noticeboard::active()->get()) > 0)
        <div class="noticeBoard">
            <h5>Important Infos</h5>
            <div class="col-12 noticeboardItems">
                @foreach(\App\Models\Noticeboard::active()->get() as $noticeboard)
                <div class="noticeboardItem">
                    <div class="col-2 text-center">
                        <strong>
                            {{\Carbon\Carbon::parse($noticeboard->created_at)->format('F')}}
                            <span>{{$noticeboard->created_at->format('d')}}</span>
                            {{$noticeboard->created_at->format('Y')}}
                        </strong>
                    </div>
                    <div class="col-10 px-2">
                        <a href="{{url($noticeboard->notice_file)}}" target="_blank">
                            <p>{{$noticeboard->notice_title}}</p>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif

        <div class="homeslider">
            <div class="slide"></div>
            <div class="slide"></div>
            <div class="slide"></div>
            <div class="slide"></div>
            <div class="slide"></div>
        </div>
        <style>
            .homeslider {overflow: hidden;width: 100vw;height: 80vh;position: relative;}.homeslider .slide {position: absolute;top: 0;left: 0;width: 100%;height: 100%;background-size: cover;background-position: center;animation: slider 9s infinite;}
            .homeslider .slide:nth-child(1) {background-image: url({{asset('static/images/slider/slider-1.webp')}});animation-delay: 0s;}
            .homeslider .slide:nth-child(2) {background-image: url({{asset('static/images/slider/slider-2.webp')}});animation-delay: -4.5s;}
            .noticeBoard{background-color: #fff;position: absolute; top: 22%; z-index: 1;border: 2px solid #191579;}
            .noticeBoard h5{background-color: #191579;color: #fff;padding: 10px 5px;}
            .noticeBoard .noticeboardItems{height: 30vh;overflow: scroll;}
            .noticeBoard .noticeboardItem {border-bottom: 1px solid #cccccc;padding-top: 10px;display: flex;}
            .noticeboardItem strong{font-size: 13px;font-weight: 500;color: #191579;}
            .noticeboardItem strong span{font-size: 20px;display: block;}
            .noticeboardItem a p{font-size: 13px;font-weight: 600;color: #111111;text-transform: none;line-height: 20px;}
            @keyframes slider {0%, 44%, 100% {opacity: 1;animation-timing-function: ease;z-index: 0;} 50% {opacity: 0;animation-timing-function: step-end;z-index: 0;}94% {opacity: 1;animation-timing-function: step-end;z-index: -1;}}
            /*@media only screen and (max-height: 479px){.homeslider{height: 30vh;}.noticeBoard .noticeboardItems{height: 10vh;}}
            @media only screen and (min-height: 480px){.homeslider{height: 50vh;}.noticeBoard .noticeboardItems{height: 10vh;}}
            @media only screen and (min-height: 575px){.noticeBoard .noticeboardItems{height: 10vh;}}
            @media only screen and (min-width: 1024px){.noticeBoard{width: 30%;right: 2%;}.homeslider{height: 80vh;}}
            @media only screen and (max-width: 1200px){.noticeBoard{width: 25%;right: 1.5%;}}
            @media only screen and (min-width: 1600px){.homeslider{height: 80vh;}.noticeBoard{width: 25%;right: 13.5%;}.noticeBoard .noticeboardItems{height: 30vh}}*/


            @media only screen and (min-width: 1601px){.noticeBoard{width: 25%;right: 13.5%;}.noticeBoard .noticeboardItems{height: 30vh}}
            @media only screen and (max-width: 1601px){.noticeBoard{width: 25%;right: 6.2%;}.noticeBoard .noticeboardItems{height: 30vh}}
            @media only screen and (max-width: 1201px){.homeslider{height: 60vh;}.noticeBoard{width: 30%;top: 30%;right: 1.3%;}.noticeBoard .noticeboardItems{height: 30vh}}
            @media (max-width: 991px) {.homeslider{height: 50vh;}.noticeBoard{width: 30%;top: 14%;right: 1.3%;}.noticeBoard .noticeboardItems{height: 30vh}}
            @media (max-width: 767px) {.homeslider{height: 30vh;}.noticeBoard{width: 30%;top: 6%;right: 1.3%;}.noticeBoard .noticeboardItems{height: 20vh}.noticeboardItem strong{font-size: 10px;}.noticeboardItem strong span{font-size: 13px;}.noticeboardItem a p{font-size: 12px;}}
            @media (max-width: 680px) {.homeslider{height: 30vh;}.noticeBoard{width: 30%;top: 6%;right: 1.3%;}.noticeBoard .noticeboardItems{height: 20vh}.noticeboardItem strong{font-size: 10px;}.noticeboardItem strong span{font-size: 13px;}.noticeboardItem a p{font-size: 12px;}}
            @media (max-width: 575px) {.noticeBoard{width: 45%;}}
            @media only screen and (max-width: 480px) {.noticeBoard{width: 100%; bottom: 10px;} .noticeBoard .noticeboardItems{height: 10vh;}}
            @media only screen and (max-width: 420px) {}
        </style>
    </div>

    <!-- home slider -->

    <!-- home slider -->

    <!-- site-main start -->
    <div class="site-main">

        <!-- Advisors -->
        @include('frontend.home.advisors')
        <!-- Advisors -->

        <!-- about-section -->
        @include('frontend.home.about')
        <!-- about-section end-->

        <!-- team-at-60plus -->
        @include('frontend.home.team60plus')
        <!-- team-at-60plus -->

        <!-- doctors -->
        @include('frontend.home.doctors')
        <!-- doctors -->

        <!-- video -->
        @include('frontend.home.video')
        <!-- video -->

        <!-- services-section -->
        @include('frontend.home.service')
        <!-- services-section-end -->

        <!-- team-professional -->
        @include('frontend.home.professional')
        <!-- team-professional -->

        <!-- testimonial-section -->
        @include('frontend.home.testimonial')
        <!-- testimonial-section -->

        <!-- our-contact-section -->
        @include('frontend.home.contact')
        <!-- our-contact-section-end -->

        <!-- our-associates-section -->
        @include('frontend.home.associates')
        <!-- our-associates-section-end -->

    </div><!-- site-main end-->


@endsection
