@extends('frontend.layout.app')
@section('content')

    <div class="col-12">
        @if(count(\App\Models\Noticeboard::active()->get()) > 0)
        <div class="noticeBoard">
            <h3>Important Infos</h3>
            <div class="col-12 noticeboardItems">
                @foreach(\App\Models\Noticeboard::active()->get() as $noticeboard)
                <div class="d-flex noticeboardItem">
                    <div class="col-2 text-center">
                        <h6>
                            {{\Carbon\Carbon::parse($noticeboard->created_at)->format('F')}}
                            <span>{{$noticeboard->created_at->format('d')}}</span>
                            {{$noticeboard->created_at->format('Y')}}
                        </h6>
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

        <div class="slider">
            <div class="slide"></div>
            <div class="slide"></div>
            <div class="slide"></div>
            <div class="slide"></div>
            <div class="slide"></div>
        </div>
        <style>
            .slider {
                overflow: hidden;
                width: 100vw;
                height: 80vh;
                position: relative;
            }

            .slider .slide {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-size: cover;
                background-position: center;
                animation: slider 9s infinite;
            }

            .slider .slide:nth-child(1) {
                background-image: url({{asset('static/images/slider/slider-1.jpg')}});
                animation-delay: 0s;
            }

            .slider .slide:nth-child(2) {
                background-image: url({{asset('static/images/slider/slider-2.jpg')}});
                animation-delay: -4.5s;
            }


            @keyframes slider {
                0%, 44%, 100% {
                    opacity: 1;
                    animation-timing-function: ease;
                    z-index: 0;
                }
                50% {
                    opacity: 0;
                    animation-timing-function: step-end;
                    z-index: 0;
                }
                94% {
                    opacity: 1;
                    animation-timing-function: step-end;
                    z-index: -1;
                }
            }
            .noticeBoard{
                background-color: #fff;position: absolute; top: 2%; z-index: 1;
            }
            @media only screen and (max-height: 450px) {
                .slider {
                    height: 20vh;
                }
            }
            @media only screen and (min-width: 1024px) {
                .noticeBoard{
                    width: 30%;
                    right: 2%;
                }
            }
            @media only screen and (min-width: 1200px) {
                .noticeBoard{
                    width: 25%;
                    right: 1.5%;
                }
            }
            @media only screen and (min-width: 1600px) {
                .noticeBoard{
                    width: 25%;
                    right: 13.5%;
                }
            }
            .noticeBoard h3{
                background-color: #191579;
                color: #fff;
                padding: 10px 5px;
            }
            .noticeBoard .noticeboardItems{
                height: 30vh;
                overflow: scroll;
            }
            .noticeBoard .noticeboardItem {
                border-bottom: 1px solid #cccccc;
                padding-top: 10px;
            }
            .noticeboardItem h6{
                font-size: 13px;
                font-weight: 500;
                color: #191579;
            }
            .noticeboardItem h6 span{
                font-size: 20px;
                display: block;
            }
            .noticeboardItem a p{
                font-size: 13px;
                font-weight: 600;
                color: #111111;
                text-transform: none;
                line-height: 20px;
            }
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
