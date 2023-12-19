@extends('frontend.layout.app')
@section('content')
    <div class="headingMain">
        <h1>60 Plus Care provides best elder care services in Kolkata</h1>
        <p>60 Plus Care is the oldest <strong>elder care service provider in Kolkata</strong> serving from 2008. We are ready to provide 24 hours duty for Senior Care Services in Kolkata. Our experienced doctors and nurses are best in Home Care Assistant Services.</p>
        <h2>Get Best Elderly Care Services in Kolkata</h2>
    </div>
    <style>
        .headingMain {clip: rect(1px,1px,1px,1px);height: 1px;overflow: hidden;position: absolute;white-space: nowrap;width: 1px;}
    </style>

    <!-- home section -->
    <div class="col-12 d-md-flex position-relative">
        <!--slider-->
        @include('frontend.home.slider')
        <!--slider-->
        <div class="col-12 col-sm-12 col-md-4 d-inline-block noticeSideMain">
            <div id="loadNoticeBoard"></div>
            <script>
                $(document).ready(function (){
                    if (window.navigator.userAgent.indexOf("Mobile") > -1) {
                        $("#loadNoticeBoard").load("{{url('loadNoticeBoard/mobile')}}");
                    }
                    else{
                        $("#loadNoticeBoard").load("{{url('loadNoticeBoard/desktop')}}");
                    }
                });
            </script>
        </div>
    </div>
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

        <!-- video -->
    @include('frontend.home.video')
    <!-- video -->

        <!-- doctors -->
    @include('frontend.home.doctors')
    <!-- doctors -->


        <!-- services-section -->
    @include('frontend.home.service')
    <!-- services-section-end -->

@if(app('request')->input('test') == 'true')
        <!-- team-professional -->
@include('frontend.home.memory')
    <!-- team-professional -->
@endif
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
