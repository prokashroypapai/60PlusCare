@extends('frontend.layout.app')
@section('content')

    <!-- page-title -->
    <div class="prt-page-title-row prt-bg prt-bgimage-yes bgimage-baby-01">
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
        <section class="prt-row about01-about-section bg-base-grey clearfix">
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
                            <img width="686" height="568" class="img-fluid" src="{{asset('static/images/bgimage_2.jpg')}}" alt="single-06">
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
                    <div class="col-lg-4 col-md-4 col-sm-8 col-12">
                        <div class="featured-icon-box style5">
                            <div class="featured-icon">
                                <div class="prt-icon prt-icon_element-size-md">
                                    <i class="flaticon-history-1"></i>
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
                    <div class="col-lg-4 col-md-4 col-sm-8 col-12">
                        <div class="featured-icon-box style5">
                            <div class="featured-icon">
                                <div class="prt-icon prt-icon_element-size-md">
                                    <i class="flaticon-target"></i>
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
                    <div class="col-lg-4 col-md-4 col-sm-8 col-12">
                        <div class="featured-icon-box style5">
                            <div class="featured-icon">
                                <div class="prt-icon prt-icon_element-size-md">
                                    <i class="flaticon-eye"></i>
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

    </div><!--site-main end-->
@endsection
