@extends('frontend.layout.app')
@section('content')

    <div class="headingMain">
        <h1>60 Plus Care provides Most Trusted Elder Care Services in Kolkata</h1>
        <p>
            60 Plus Care is mostly trusted elder care service provider in Kolkata. We are working since 2008 effortlessly to provide best parent care solutions in Kolkata.
            With experienced doctors & medical professionals we provide best Home Care Services in Kolkata.
        </p>
        <p>
            Photo Credits: <a href="https://www.freepik.com">Freepik</a>
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
    <div class="prt-page-title-row prt-bg prt-bgimage-yes" style="background-image: url({{asset('/static/images/elder-care-kolkata-2323.webp')}})">
        <div class="prt-page-title-row-inner prt-bg-layer bg-base-bodycolor">
            <div class="prt-page-title-row-wrapper-inner"></div>
        </div>
        <div class="layer-content">
            <div class="container-fluid p-0">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="prt-page-title-row-heading">
                            <div class="page-title-heading">
                                <strong class="title">
                                    Best Elder Care Services from {{ env('APP_NAME') }}
                                </strong>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a href="{{url('/')}}">Home</a>
                                </span>
                                <span>
                                    <a href="{{url('elder-care')}}">Elder Care</a>
                                </span>
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

        <!-- about-section -->
        <section class="prt-row about01-about-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="pr-30 res-1199-pr-0">
                            <div class="section-title mb-30">
                                <div class="title-header">
                                    <h2>{{ env('APP_NAME') }}, Most <strong><span>Trusted elder care</span> solution in Kolkata</strong></h2>
                                </div>
                                <div class="title-desc">
                                    <p class="pr-50">
                                        Serving as the Most <strong>Trusted Elder Care Service Provider</strong> in Kolkata, we provide best elder care solutions including geriatric care, emergency services, doctors, nurses, diagnostic tests and other medical <a href="{{ url('services') }}" title="Services provided by {{ env('APP_NAME') }}">services</a>.
                                    </p>
                                </div>
                            </div>
                            <div class="d-sm-flex">
                                <div class="d-flex res-575-mt-20">
                                    <div class="bg-base-grey spacing-36">
                                        <h3 class="fs-20 mb-0">Why {{ env('APP_NAME') }} is Best Elder Care in Kolkata</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mt-30 res-991-mt-20">
                                <p>
                                    Are you staying far away from your parents for office or study purpose. And you are worried about your parents as they are getting old as they <strong>need someone to take care of their health</strong>.
                                </p>
                                <p>
                                    If you are looking for an agency who can take care of your parents, 60 Plus Care provides <strong>most trusted elder care services</strong> in Kolkata offering you best senior care solutions. Our senior <a href="{{ url('doctors') }}" title="Find Doctors at {{ env('APP_NAME') }}">doctors</a> & trained staffs properly take care of every needs of your parents.
                                </p>
                                <div class="col-md-6">
                                    <ul class="prt-list style3">
                                        <li>24x7 Medical Emergency</li>
                                        <li>Day/Night Ambulance Service</li>
                                        <li>Doctor Consultation</li>
                                    </ul>
                                </div>
                                <div class="col-md-6 res-767-mt-12">
                                    <ul class="prt-list style3">
                                        <li>Regular Care Manager Visit</li>
                                        <li>Doctors at home</li>
                                        <li>Lab Tests at home</li>
                                    </ul>
                                </div>
                                <p class="mt-3">
                                    For any kind of emergency or doctor support Call <a href="tel:+918296111777" title="Call 60 Plus Care Support">+91 8296 111 777</a> or email at <a href="mailto:care@60pluscare.in" title="60 Plus Care Support Email">care@60pluscare.in</a> for Elder Care Solution in Kolkata.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 res-1199-mt-30 align-self-center">
                        <div class="prt_single_image-wrapper text-start">
                            <img width="100%" height="auto" class="img-fluid rounded" src="{{ asset('static/images/elder-care-kolkata-3345.webp') }}" alt="{{ env('APP_NAME') }} Most Trusted Elder Care Solution in Kolkata">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end-->

        <!-- care-section -->
        <section class="prt-row about03-child-care-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="prt_single_image-wrapper text-start">
                            <img width="685" height="546" class="img-fluid" src="{{ asset('static/images/elder-care-kolkata-5544.webp') }}" alt="Nurse AAya Service at {{ env('APP_NAME') }}">
                        </div>
                    </div>
                    <div class="col-xl-6 align-self-center">
                        <div class="pl-30 res-1199-pl-0 res-1199-mt-30">
                            <!-- section title -->
                            <div class="section-title mb-30">
                                <div class="title-header">
                                    <h2>Get Best Elderly Care <span>at Home</span></h2>
                                </div>
                                <div class="title-desc">
                                    <p>
                                        {{ env('APP_NAME') }} is one of the oldest elder care company in Kolkata providing <strong>best senior care solutions in Kolkata</strong>. We provide <strong>24x7 Emergency service</strong> with doctor consultation, nurses, medical team, physiotherapy, care manager and best part day/night ambulance service.
                                    </p>
                                    <p>
                                        We also provide diagnostic <strong>lab tests at home</strong> and other medical equipments and services. Our <a href="{{ url('clinics') }}" title="Find 60 Plus Clinic in Kolkata">clinics</a> are available at different locations in Kolkata including <a href="{{ url('/clinic/salt-lake') }}" title="Visit 60 Plus Clinic at Salt Lake">60 Plus Clinic in Salt Lake</a>, <a href="{{ url('/clinic/behala') }}" title="Visit 60 Plus Clinic at Behala">60 Plus Clinic in Behala</a>, <a href="{{ url('/clinic/joka') }}" title="Visit 60 Plus Clinic at Joka">60 Plus Clinic in Joka</a>, Rajarhat New Town. For more query you can <a href="{{ url('contact') }}" title="Customer support at {{ env('APP_NAME') }}">contact with our support</a>.
                                    </p>
                                </div>
                            </div><!-- section title end -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="featured-icon-box">
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3>Lab Tests At Home</h3>
                                            </div>
                                            <div class="featured-desc">
                                                <p>Providing best diagnostic lab tests facility at home we also arrange medical equipments along with best medical support</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 res-575-mt-10">
                                    <div class="featured-icon-box">
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3>Best Care Ever</h3>
                                            </div>
                                            <div class="featured-desc">
                                                <p>Our well trained medical staffs and medical support team makes you realize as your family member by providing best care</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="prt-horizontal_sep spacing-37"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- care-section-end -->





        <!-- service-section -->
        <section class="prt-row service02-service-section clearfix" style="padding-bottom: 45px;">
            <div class="container">
                <div class="row">
                    <!-- section title -->
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            <h2>
                                {{ env('APP_NAME') }}, <span>Best Medical Support</span> for elders in Kolkata
                            </h2>
                        </div>
                        <!--<div class="title-desc">
                            <p>To ensure that our seniors have the support of resources and they need to live the lives they  deserve as elders of our next generation.</p>
                        </div>-->
                    </div>
                    <!-- section title-end -->
                </div>
                <div class="row g-0 overflow-hidden">

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
                                    <strong>24 Hours Medical Service</strong>
                                </div>
                                <div class="featured-desc">
                                    On Call We are ready for Emergency service 24 Hours
                                </div>
                            </div>
                        </div>
                    </div>
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
                                    <strong>Medical Assistant</strong>
                                </div>
                                <div class="featured-desc">
                                    24 Hours Nurse/aaya, medical team is available
                                </div>
                            </div>
                        </div>
                    </div>
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
                                    <strong>Doctor's Visit at Day/Night</strong>
                                </div>
                                <div class="featured-desc">
                                    For any emergency get Doctor visit at day or night
                                </div>
                            </div>
                        </div>
                    </div>
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
                                    <strong>Health Checkup</strong>
                                </div>
                                <div class="featured-desc">
                                    Regular checkup is done by our care managers
                                </div>
                            </div>
                        </div>
                    </div>
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
                                    <strong>Diagnostic Tests at home</strong>
                                </div>
                                <div class="featured-desc">
                                    Avail Diagnostic lab tests at home
                                </div>
                            </div>
                        </div>
                    </div>
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
                                    <strong>Medical Equipment at home</strong>
                                </div>
                                <div class="featured-desc">
                                    We arrange medical equipments at anytime
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row py-5">
                    <div class="section-title title-style-center_text">
                        <button class="registerBtn" onclick='window.location.href="{{ url('/packages') }}"'>View Packages</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-section end-->


        <!-- testimonial-section -->
    @include('frontend.home.testimonial')
    <!-- testimonial-section -->

        <!-- contact-section -->
    @include('frontend.home.contact')
    <!-- contact-section -->

    </div><!--site-main end-->
@endsection
