@extends('frontend.layout.app')
@section('content')

    <!-- page-title -->
    <div class="prt-page-title-row prt-bg prt-bgimage-yes bgAbout">
        <div class="prt-page-title-row-inner prt-bg-layer bg-base-bodycolor">
            <div class="prt-page-title-row-wrapper-inner"></div>
        </div>
        <div class="layer-content">
            <div class="container-fluid p-0">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="prt-page-title-row-heading">
                            <div class="page-title-heading">
                                <h2 class="title">About</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                    <span>
                                        <a title="Homepage" href="{{url('/')}}">Home</a>
                                    </span>
                                <span>
                                        <a href="#">About {{env('APP_NAME')}}</a>
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
        <section class="prt-row about01-about-section bg-base-grey clearfix" id="aboutSection">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="pr-30 res-1199-pr-0">
                            <div class="section-title mb-30">
                                <div class="title-header">
                                    <h2><span>A brief about us</span> - that helps you understand us better !</h2>
                                </div>
                                <div class="title-desc">
                                    <p class="pr-50">
                                        60 Plus Care is the present-day version of the decade old and the Pioneer Elder Care Services of Kolkata initiated by Dr Dipankar Debnath after completing his Post Graduation in Geriatric Medicine in 2008. He identified the lacunas and felt the urgent need for developing Geriatric Care Services for the Senior Citizens, especially who are mostly living alone due to fast growing nuclear families and migration of their children to distant places to earn their living. Being a doctor, he was the best person to identify the most important needs of them – Healthy Ageing, Medical Emergency specially at Night, Home Health Care and Training of Manpower to Care for special needs of the Seniors. He built up a highly coordinated, committed and cohesive team of Trained, Experienced and Compassionate Elder Care Professionals consisting of Doctors, Nurses, Physiotherapists, Geriatric Animators, Dieticians, Psychologists and many others. Initially the service was available only to his close contacts and patients but now it is being available for ALL the Citizens of the City of Joy.
                                    </p>
                                </div>
                            </div>
                            <div class="d-sm-flex">
                                <div class="d-flex res-575-mt-20">
                                    <div class="bg-base-grey spacing-36">
                                        <h3 class="fs-20 mb-0">
                                            Team 60 Plus Help You to Age Gracefully At Your Home !
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mt-30 res-991-mt-20">
                                <div class="col-12">
                                    <p class="pr-50">
                                        60 PLUS CARE is the present-day version of the decade old Elder Care Services of Kolkata initiated by Dr Dipankar Debnath, Geriatric Medicine specialist along with other Doctors & Elder Care Professionals in 2008. Over the past 12 years our passion to keep the Elders Healthy and Happy brought us to the present state where we have ALL Types of MEDICAL along with Non-Medical Services that provide 360 degree of care to the Elders.
                                    </p>
                                    <p class="pr-50">
                                        All our Members feel safe at Home as our Care Managers are very vigilant and are always Responsive for All of their needs 24x7. Our Geriatricians constantly monitor their Health and are always ready for providing service as per need.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 res-1199-mt-30 align-self-center">
                        <div class="prt_single_image-wrapper text-start">
                            <img width="686" height="568" class="img-fluid shadow" src="{{asset('static/images/about60pluscare.webp')}}" alt="single-06">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end-->

        <!-- our-focus-section -->
        <section class="prt-row about02-our-focus-section clearfix bg-white">
            <div class="container">
                <div class="row row-equal-height">
                    <div class="col-lg-4 col-md-4 col-sm-8 col-12" id="vision">
                        <div class="featured-icon-box style5">
                            <div class="featured-icon">
                                <div class="prt-icon prt-icon_element-size-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#fff" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>Vision</h3>
                                </div>
                                <div class="featured-desc">
                                    <p>Our Vision is to keep Elders Healthy, Happy, Independent and Productive while staying at their own Homese</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-8 col-12" id="mission">
                        <div class="featured-icon-box style5">
                            <div class="featured-icon">
                                <div class="prt-icon prt-icon_element-size-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#fff" class="bi bi-bullseye" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10zm0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
                                        <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/>
                                        <path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>Mission</h3>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        Our Mission is to provide Affordable, Need-Based, Personalised Elder Care and Assistance Services under strict Supervision and Monitoring by DOCTORS & GERIATRIC CARE MANAGERS
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-8 col-12" id="initiative">
                        <div class="featured-icon-box style5">
                            <div class="featured-icon">
                                <div class="prt-icon prt-icon_element-size-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#fff" class="bi bi-eye" viewBox="0 0 16 16">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>An Initiative by DOCTORS & Geriatric Care Specialists</h3>
                                </div>
                                <div class="featured-desc">
                                    <p>An Initiative by DOCTORS & Geriatric Care Specialists... To SIMPLYFY & ENHANCE the QUALITY of LIVES of ELDERS at Home</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- our-focus-section-end -->

        <!-- Advisors -->
    @include('frontend.home.advisors')
    <!-- Advisors -->

        <!-- team-at-60plus -->
    @include('frontend.home.team60plus')
    <!-- team-at-60plus -->

    </div><!--site-main end-->
@endsection
