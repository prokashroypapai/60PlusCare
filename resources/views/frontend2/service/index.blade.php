@extends('frontend.layout.app')
@section('content')

    <div class="headingMain">
        <h1>60 Plus Care provides Most Trusted Elder Care Services in Kolkata</h1>
        <p>
            60 Plus Care is mostly trusted elder care service provider in Kolkata. We are working since 2008 effortlessly to provide best parent care solutions in Kolkata.
            With experienced doctors & medical professionals we provide best Home Care Services in Kolkata.
        </p>
    </div>
    <style>
        .headingMain{
            clip: rect(1px,1px,1px,1px);
            height: 1px;
            overflow: hidden;
            position: absolute;
            white-space: nowrap;
            width: 1px;
        }
    </style>
    <!-- page-title -->
    <div class="prt-page-title-row prt-bg prt-bgimage-yes" style="background-image: url({{asset('static/images/bgimage-14.jpg')}})">
        <div class="prt-page-title-row-inner prt-bg-layer bg-base-bodycolor">
            <div class="prt-page-title-row-wrapper-inner"></div>
        </div>
        <div class="layer-content">
            <div class="container-fluid p-0">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="prt-page-title-row-heading">
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a href="{{url('/')}}">Home</a>
                                </span>
                                <span>
                                    <a href="{{url('services')}}">Services</a>
                                </span>
                            </div>
                            <div class="page-title-heading">
                                <strong class="title">
                                    Best Elder Care Services from {{ env('APP_NAME') }}
                                </strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-title end -->

    <!--site-main start-->
    <div class="site-main">

        <!-- service-section -->
        <section class="prt-row service02-service-section clearfix" style="padding-bottom: 45px;">
            <div class="container">
                <div class="row">
                    <!-- section title -->
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            <h2>Get <span>Best Parent Care Solutions</span> in Kolkata</h2>
                        </div>
                        <!--<div class="title-desc">
                            <p>To ensure that our seniors have the support of resources and they need to live the lives they  deserve as elders of our next generation.</p>
                        </div>-->
                    </div>
                    <!-- section title-end -->
                </div>
                <div class="row g-0 overflow-hidden">

                    @foreach(\App\Models\Service::active()->get() as $service)
                    <div class="col-lg-4 col-md-6">
                        <div class="featured-icon-box icon-align-top-content style8">
                            <div class="featured-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-heart-pulse" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053.918 3.995.78 5.323 1.508 7H.43c-2.128-5.697 4.165-8.83 7.394-5.857.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17c3.23-2.974 9.522.159 7.394 5.856h-1.078c.728-1.677.59-3.005.108-3.947C13.486.878 10.4.28 8.717 2.01L8 2.748ZM2.212 10h1.315C4.593 11.183 6.05 12.458 8 13.795c1.949-1.337 3.407-2.612 4.473-3.795h1.315c-1.265 1.566-3.14 3.25-5.788 5-2.648-1.75-4.523-3.434-5.788-5Z"/>
                                    <path d="M10.464 3.314a.5.5 0 0 0-.945.049L7.921 8.956 6.464 5.314a.5.5 0 0 0-.88-.091L3.732 8H.5a.5.5 0 0 0 0 1H4a.5.5 0 0 0 .416-.223l1.473-2.209 1.647 4.118a.5.5 0 0 0 .945-.049l1.598-5.593 1.457 3.642A.5.5 0 0 0 12 9h3.5a.5.5 0 0 0 0-1h-3.162l-1.874-4.686Z"/>
                                </svg>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <strong>{{$service->service_name}}</strong>
                                </div>
                                <div class="featured-desc">
                                    {!! $service->description !!}
                                </div>
                            </div>
                            <!--<div class="featured-bottom">
                                <a class="prt-btn btn-inline prt-btn-color-dark" href="#">explore more</a>
                            </div>-->
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- service-section end-->

    @include('frontend.widget.facilities')

    <!-- special-treatment-section -->
    @include('frontend.widget.specialTreatment')
    <!-- special-treatment-section -->

        <!-- testimonial-section -->
        @include('frontend.home.testimonial')
        <!-- testimonial-section -->

        <!-- contact-section -->
    @include('frontend.home.contact')
    <!-- contact-section -->

    </div><!--site-main end-->
@endsection
