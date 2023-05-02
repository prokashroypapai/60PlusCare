@extends('frontend.layout.app')
@section('content')

    <!-- page-title -->
    <div class="prt-page-title-row prt-bg prt-bgimage-yes bgimage-baby-02">
        <div class="prt-page-title-row-inner prt-bg-layer bg-base-bodycolor">
            <div class="prt-page-title-row-wrapper-inner"></div>
        </div>
        <div class="layer-content">
            <div class="container-fluid p-0">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="prt-page-title-row-heading">
                            <div class="page-title-heading">
                                <h2 class="title">Services</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a href="{{url('/')}}">Home</a>
                                </span>
                                <span>
                                    <a href="{{url('/services')}}">Services</a>
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

        <!-- care-section -->
        <section class="prt-row service01-child-care-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="prt_single_image-wrapper text-start">
                            <img width="685" height="546" class="img-fluid" src="{{asset('static/images/image-1.jpg')}}" alt="single-11">
                        </div>
                    </div>
                    <div class="col-xl-6 align-self-center">
                        <div class="pl-30 res-1199-pl-0 res-1199-mt-30">
                            <!-- section title -->
                            <div class="section-title mb-30">
                                <div class="title-header">
                                    <h2>We think your little ones justify the very <span>best care.</span></h2>
                                </div>
                                <div class="title-desc">
                                    <p>Our service is very simple, as soon as you register, we will choose and arrange the right babysitter for your family and then you can feel free to contact that babysitter at any time, Points required for extra booking.</p>
                                </div>
                            </div><!-- section title end -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="featured-icon-box style6">
                                        <div class="featured-icon">
                                            <div class="prt-icon prt-icon_element-size-sm prt-icon_element-color-skin">
                                                <i class="flaticon flaticon-broken"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3>Physiotherapy</h3>
                                            </div>
                                            <div class="featured-desc">
                                                <p>We provide the best physiotherapy services.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 res-575-mt-10">
                                    <div class="featured-icon-box style6">
                                        <div class="featured-icon">
                                            <div class="prt-icon prt-icon_element-size-sm prt-icon_element-color-skin">
                                                <i class="flaticon flaticon-notes"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3>Diet & Nutrition</h3>
                                            </div>
                                            <div class="featured-desc">
                                                <p>Get diet & nutrition suggestions from best doctors.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="prt-horizontal_sep spacing-37"></div>
                            <div class="d-sm-flex">
                                <div class="ttm_single_image-wrapper text-center flex-grow-0 flex-shrink-0 flex-basis-auto">
                                    <img class="img-fluid" width="182" height="109" src="{{asset('static/images/image-2.jpg')}}" alt="single-07">
                                </div>
                                <div class="d-flex res-575-mt-20">
                                    <div class="bg-base-grey spacing-36">
                                        <h3 class="fs-20 mb-0">Youtube Video Title Youtbe Video Title Youtbe Video Title</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- care-section-end -->

        <!-- services-section -->
        <section class="prt-row service01-service-section bg-img5 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <!-- section title -->
                        <div class="section-title mt-20 mb-0 res-767-mt_10">
                            <div class="title-header">
                                <h2>We provide best <span>Elder Care services in Kolkata.</span></h2>
                            </div>
                            <div class="title-desc">
                                <p>
                                    We provide best Elder Care services in Kolkata. We provide best Elder Care services in Kolkata. We provide best Elder Care services in Kolkata.
                                    We provide best Elder Care services in Kolkata. We provide best Elder Care services in Kolkata.
                                </p>
                            </div>
                        </div><!-- section title end -->
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="featured-imagebox featured-imagebox-services style2">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset('static/images/image-2.jpg')}}" width="447" height="300" alt="image">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>
                                        <a href="#">
                                            24x7 medical emergency assistance
                                        </a>
                                    </h3>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        Members can avail 24/7 round the clock assistance for Medical or Non-Medical Emergency even in the case of hospitalization.
                                    </p>
                                </div>
                                <div class="featured-bottom">
                                    <a class="prt-btn btn-inline prt-btn-color-dark" href="#">explore more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="featured-imagebox featured-imagebox-services style2">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset('static/images/image-2.jpg')}}" width="447" height="300" alt="image">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>
                                        <a href="#">
                                            Prioritised hospitalisation
                                        </a>
                                    </h3>
                                </div>
                                <div class="featured-desc">
                                    <p>We arrange Prioritised Hospitalisation for our Members and we regularly be in touch with the Doctors for daily updates.</p>
                                </div>
                                <div class="featured-bottom">
                                    <a class="prt-btn btn-inline prt-btn-color-dark" href="#">explore more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="featured-imagebox featured-imagebox-services style2">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset('static/images/image-2.jpg')}}" width="447" height="300" alt="image">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="services-details-1.html">Get Basic Care</a></h3>
                                </div>
                                <div class="featured-desc">
                                    <p>Develop, nurture and care for children at the client's home.</p>
                                </div>
                                <div class="featured-bottom">
                                    <a class="prt-btn btn-inline prt-btn-color-dark" href="services-details-1.html">explore more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="featured-imagebox featured-imagebox-services style2">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset('static/images/image-2.jpg')}}" width="447" height="300" alt="image">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="services-details-2.html">Get Household Injuries</a></h3>
                                </div>
                                <div class="featured-desc">
                                    <p>Looking after the baby to prevent injuries, hold them rightly to ensure proper care.</p>
                                </div>
                                <div class="featured-bottom">
                                    <a class="prt-btn btn-inline prt-btn-color-dark" href="services-details-2.html">explore more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="featured-imagebox featured-imagebox-services style2">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset('static/images/image-2.jpg')}}" width="447" height="300" alt="image">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="services-details-1.html">Various Teaching Skills</a></h3>
                                </div>
                                <div class="featured-desc">
                                    <p>They grown up babies in playful manner and help with a home work.</p>
                                </div>
                                <div class="featured-bottom">
                                    <a class="prt-btn btn-inline prt-btn-color-dark" href="services-details-1.html">explore more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services-section-end -->

        <!-- testimonial-section -->
        <section class="prt-row service01-testimonial-section bg-layer-equal-height clearfix">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-6">
                        <div class="col-bg-img-eleven prt-bg prt-col-bgimage-yes prt-left-span bg-base-dark spacing-19 z-index-2">
                            <div class="prt-col-wrapper-bg-layer prt-bg-layer">
                                <div class="prt-col-wrapper-bg-layer-inner"></div>
                            </div>
                            <div class="layer-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="slick_slider testimonial-02" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "arrows":false, "autoplay":true, "dots":false, "infinite":true, "responsive":[{"breakpoint":992,"settings":{"slidesToShow": 1}},{"breakpoint":840,"settings":{"slidesToShow": 1}}]}'>
                                            <!-- testimonials -->
                                            <div class="testimonials style2">
                                                <div class="testimonial-content">
                                                    <div class="testimonial-avatar">
                                                        <div class="testimonial-img">
                                                            <img width="90" height="90" class="img-fluid" src="images/testimonial/04.png" alt="testimonial-img">
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-caption">
                                                        <h3>Alexsam Jhon Martin</h3>
                                                        <label> - Chairman and founder</label>
                                                    </div>
                                                    <div class="star-ratings">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <blockquote>Thank you so much for providing such caring and kind childcare on our recent visit to Madrid. This was our second time using MissBabysitter.<br>We’ll definitely use you again on our next trip.</blockquote>
                                                </div>
                                            </div><!-- testimonials end -->
                                            <!-- testimonials -->
                                            <div class="testimonials style2">
                                                <div class="testimonial-content">
                                                    <div class="testimonial-avatar">
                                                        <div class="testimonial-img">
                                                            <img width="90" height="90" class="img-fluid" src="images/testimonial/05.png" alt="testimonial-img">
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-caption">
                                                        <h3>Sam Curran</h3>
                                                        <label> - Businessman</label>
                                                    </div>
                                                    <div class="star-ratings">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <blockquote>Thank you so much Miss Babysitter! the boys had such a great time with her.Thanks for helping make our stay so much easier. We were able to get out on a couple as adults without a care in the world!</blockquote>
                                                </div>
                                            </div><!-- testimonials end -->
                                            <!-- testimonials -->
                                            <div class="testimonials style2">
                                                <div class="testimonial-content">
                                                    <div class="testimonial-avatar">
                                                        <div class="testimonial-img">
                                                            <img width="90" height="90" class="img-fluid" src="images/testimonial/06.png" alt="testimonial-img">
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-caption">
                                                        <h3>Nathan Smith</h3>
                                                        <label> - Journalist</label>
                                                    </div>
                                                    <div class="star-ratings">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <blockquote>One of the most complete themes here. Thanks a lot for such great features, pages, shortcodes. great prices. Customer support! sometimes and really help you with when you need them.</blockquote>
                                                </div>
                                            </div><!-- testimonials end -->
                                        </div>
                                    </div>
                                </div>
                                <div class="pl-15 pr-15">
                                    <div class="prt-horizontal_sep"></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="home02-fid">
                                            <div class="row g-0">
                                                <div class="col-lg-4 col-md-6 col-sm-12">
                                                    <div class="prt-fid inside prt-fid-with-icon style4">
                                                        <div class="prt-fid-icon-wrapper">
                                                            <i class="flaticon-couple"></i>
                                                        </div>
                                                        <div class="prt-fid-contents">
                                                            <h4 class="prt-fid-inner">
                                                                <span data-appear-animation="animateDigits" data-from="0" data-to="580" data-interval="25" data-before="" data-before-style="sup" data-after="+" data-after-style="sub" class="numinate">580</span>
                                                                <span class="fid-sup">k</span>
                                                            </h4>
                                                        </div>
                                                        <h3 class="prt-fid-title">Happy Patients</h3>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12">
                                                    <div class="prt-fid inside prt-fid-with-icon style4">
                                                        <div class="prt-fid-icon-wrapper">
                                                            <i class="flaticon-family"></i>
                                                        </div>
                                                        <div class="prt-fid-contents">
                                                            <h4 class="prt-fid-inner">
                                                                <span data-appear-animation="animateDigits" data-from="0" data-to="650" data-interval="25" data-before="" data-before-style="sup" data-after="+" data-after-style="sub" class="numinate">650</span>
                                                                <span class="fid-sup">+</span>
                                                            </h4>
                                                        </div>
                                                        <h3 class="prt-fid-title">Agency follower</h3>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12">
                                                    <div class="prt-fid inside prt-fid-with-icon style4">
                                                        <div class="prt-fid-icon-wrapper">
                                                            <i class="flaticon-nursing-home"></i>
                                                        </div>
                                                        <div class="prt-fid-contents">
                                                            <h4 class="prt-fid-inner">
                                                                <span data-appear-animation="animateDigits" data-from="0" data-to="30" data-interval="5" data-before="" data-before-style="sup" data-after="+" data-after-style="sub" class="numinate">30</span>
                                                                <span class="fid-sup">+</span>
                                                            </h4>
                                                        </div>
                                                        <h3 class="prt-fid-title">Worldwide Partners</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="col-bg-img-one prt-bg prt-col-bgimage-yes prt-right-span">
                            <div class="prt-col-wrapper-bg-layer prt-bg-layer"></div>
                            <div class="layer-content"></div>
                        </div>
                        <img class="prt-equal-height-image img-fluid w-100" src="{{asset('static/images/bgimage_2.jpg')}}" alt="bg-image">
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-section -->

        <!-- our-contact-section -->
        <section class="prt-row service01-our-contact-section bg-base-skin clearfix">
            <div class="container">
                <div class="row prt-vertical_sep">
                    <div class="col-lg-4">
                        <div class="featured-icon-box style7">
                            <div class="featured-icon">
                                <div class="prt-icon prt-icon_element-size-lg prt-icon_element-color-skin">
                                    <i class="flaticon-happiness"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>Find An Agents</h3>
                                </div>
                                <div class="featured-desc">
                                    <p>Get the babysitter agency for a good support.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="featured-icon-box style7">
                            <div class="featured-icon">
                                <div class="prt-icon prt-icon_element-size-lg prt-icon_element-color-skin">
                                    <i class="flaticon-customer-support"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>Call us Any Question?</h3>
                                </div>
                                <div class="featured-desc">
                                    <p>Get 24/7 Emergency <br>Call us: (+14) 1456-7890.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="featured-icon-box style7">
                            <div class="featured-icon">
                                <div class="prt-icon prt-icon_element-size-lg prt-icon_element-color-skin">
                                    <i class="flaticon-children"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>Enroll Your Child Now!</h3>
                                </div>
                                <div class="featured-desc">
                                    <p>Need advises?? <br>Call us (+18) 2222-3555.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- our-contact-section-end -->

        <!-- service-section -->
        <section class="prt-row service02-service-section clearfix">
            <div class="container">
                <div class="row">
                    <!-- section title -->
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            <h2>We think your old age justify the very <span>best care.</span></h2>
                        </div>
                        <div class="title-desc">
                            <p>To ensure that our seniors have the support of resources and they need to live the lives they  deserve as elders of our next generation.</p>
                        </div>
                    </div>
                    <!-- section title-end -->
                </div>
                <div class="row g-0 overflow-hidden">
                    <div class="col-lg-4 col-md-6">
                        <div class="featured-icon-box icon-align-top-content style8">
                            <div class="featured-icon">
                                <div class="prt-icon prt-icon_element-onlytxt prt-icon_element-size-lg prt-icon_element-color-skin">
                                    <i class="flaticon flaticon-maternity"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="services-details-3.html">24X7 MEDICAL EMERGENCY ASSISTANCE</a></h3>
                                </div>
                                <div class="featured-desc">
                                    <p>Various types of Home Health Care services are available 24 hours a day, 7 days a week.</p>
                                </div>
                            </div>
                            <div class="featured-bottom">
                                <a class="prt-btn btn-inline prt-btn-color-dark" href="services-details-3.html">explore more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="featured-icon-box icon-align-top-content style8">
                            <div class="featured-icon">
                                <div class="prt-icon prt-icon_element-onlytxt prt-icon_element-size-lg prt-icon_element-color-skin">
                                    <i class="flaticon flaticon-toys"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="services-details-4.html">Home Physical Therapy</a></h3>
                                </div>
                                <div class="featured-desc">
                                    <p>Our physical therapist will work with you to improve and restore mobility and strength.</p>
                                </div>
                            </div>
                            <div class="featured-bottom">
                                <a class="prt-btn btn-inline prt-btn-color-dark" href="services-details-4.html">explore more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="featured-icon-box icon-align-top-content style8">
                            <div class="featured-icon">
                                <div class="prt-icon prt-icon_element-onlytxt prt-icon_element-size-lg prt-icon_element-color-skin">
                                    <i class="flaticon flaticon-pediatrics"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="services-details-3.html">Home Occupational Therapy</a></h3>
                                </div>
                                <div class="featured-desc">
                                    <p>The various types of goal is to improve efficiency, positive outcomes for patients.</p>
                                </div>
                            </div>
                            <div class="featured-bottom">
                                <a class="prt-btn btn-inline prt-btn-color-dark" href="services-details-3.html">explore more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="featured-icon-box icon-align-top-content style8">
                            <div class="featured-icon">
                                <div class="prt-icon prt-icon_element-onlytxt prt-icon_element-size-lg prt-icon_element-color-skin">
                                    <i class="flaticon flaticon-nursing-home"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="services-details-4.html">Home Diabetes Care</a></h3>
                                </div>
                                <div class="featured-desc">
                                    <p>Our various types of diabetes care services focus on education, monitoring and treatment.</p>
                                </div>
                            </div>
                            <div class="featured-bottom">
                                <a class="prt-btn btn-inline prt-btn-color-dark" href="services-details-4.html">explore more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="featured-icon-box icon-align-top-content style8">
                            <div class="featured-icon">
                                <div class="prt-icon prt-icon_element-onlytxt prt-icon_element-size-lg prt-icon_element-color-skin">
                                    <i class="flaticon flaticon-baby-changing-1"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="services-details-3.html">Home Cardiac Care</a></h3>
                                </div>
                                <div class="featured-desc">
                                    <p>To learn more about Home Cardiac Rehabilitation and the benefits you can expect.</p>
                                </div>
                            </div>
                            <div class="featured-bottom">
                                <a class="prt-btn btn-inline prt-btn-color-dark" href="services-details-3.html">explore more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="featured-icon-box icon-align-top-content style8">
                            <div class="featured-icon">
                                <div class="prt-icon prt-icon_element-onlytxt prt-icon_element-size-lg prt-icon_element-color-skin">
                                    <i class="flaticon flaticon-couple"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="services-details-4.html">Home Pediatric Care</a></h3>
                                </div>
                                <div class="featured-desc">
                                    <p>Our various types of highest priority is your child’s medical needs and safety.</p>
                                </div>
                            </div>
                            <div class="featured-bottom">
                                <a class="prt-btn btn-inline prt-btn-color-dark" href="services-details-4.html">explore more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-section end-->

    </div><!--site-main end-->
@endsection
