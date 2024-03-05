@extends('frontend.layout.app')
@section('content')

    <!-- page-title -->
    <div class="prt-page-title-row prt-bg prt-bgimage-yes" style="background-image: url({{asset('static/images/bgimage-9.jpg')}})">
        <div class="prt-page-title-row-inner prt-bg-layer bg-base-bodycolor">
            <div class="prt-page-title-row-wrapper-inner"></div>
        </div>
        <div class="layer-content">
            <div class="container-fluid p-0">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="prt-page-title-row-heading">
                            <div class="page-title-heading">
                                <h2 class="title">{{$doctor->doctor_name}}</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                    <span>
                                        <a href="{{url('/')}}">Home</a>
                                    </span>
                                <span>
                                        <a href="{{url('doctors')}}">Doctors</a>
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

        <!--member-info-section-->
        <section class="prt-row team-details-member-info-section bg-base-grey clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="prt-team-member-single-content">
                            <div class="prt-team-member-single-content-area">
                                <div class="prt-bg prt-col-bgcolor-yes bg-base-grey overflow-visible">
                                    <div class="prt-col-wrapper-bg-layer prt-bg-layer"></div>
                                    <div class="layer-content">
                                        <div class="row g-0">
                                            <div class="col-xl-6">
                                                <!-- prt-featured-wrapper -->
                                                <div class="prt-featured-wrapper">
                                                    <div class="featured-thumbnail">
                                                        <img width="672" height="472" class="img-fluid" src="{{asset($doctor->doctorPicture->image_full)}}" alt="image">
                                                    </div>
                                                </div><!-- prt-featured-wrapper end-->
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="prt-team-member-detail">
                                                    <div class="prt-team-member-single-list">
                                                        <h2 class="prt-team-member-single-title">{{$doctor->doctor_name}}</h2>
                                                        <span class="prt-team-member-single-position">{{$doctor->doctor_designation}}</span>
                                                        <div class="prt-short-desc">
                                                            {{$doctor->doctor_experience}}
                                                        </div>
                                                        <!--<div class="prt-team-data">
                                                            <div class="prt-team-details-wrapper">
                                                                <ul class="prt-team-details-list clearfix">
                                                                    <li>
                                                                        <div class="prt-team-list-title">Speciality: </div>
                                                                        <div class="prt-team-list-value">Care taker</div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="prt-team-list-title">Email: </div>
                                                                        <div class="prt-team-list-value"> <a href="mailto:info@60plusclinic.com">info@60plusclinic.com</a></div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="prt-team-list-title">Website: </div>
                                                                        <div class="prt-team-list-value"><a href="https://60pluscare.in/">www.60pluscare.in</a></div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="prt-team-list-title">Experiences: </div>
                                                                        <div class="prt-team-list-value">7 Years</div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>-->
                                                        <!--<div class="prt-team-member-social-contact">
                                                            <div class="prt-social-links-wrapper mt-20">
                                                                <ul class="social-icons">
                                                                    <li class="social-facebook">
                                                                        <a target="_blank" href="https://www.facebook.com/"><i class="icon-facebook" aria-hidden="true"></i></a>
                                                                    </li>
                                                                    <li class="social-twitter">
                                                                        <a target="_blank" href="https://twitter.com/"><i class="icon-twitter" aria-hidden="true"></i></a>
                                                                    </li>
                                                                    <li class="social-pinterest">
                                                                        <a target="_blank" href="https://in.pinterest.com/"><i class="icon-pinterest" aria-hidden="true"></i></a>
                                                                    </li>
                                                                    <li class="social-instagram">
                                                                        <a target="_blank" href="https://www.instagram.com/"><i class="icon-instagram" aria-hidden="true"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--member-info-section-end-->

        <!-- achivement-section -->
        <!--<section class="prt-row team-details-achivement-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="">
                            <div class="mt_9">
                                <h3 class="fs-28">Over View</h3>
                                <p>Babysitter's Training:This in-person childcare certification course is designed for those ages 11 to 15, and builds on the skills in our Babysitting Basics class. With leadership development, information on building your business, tips for keeping children safe, helping children behave, basic first aid, and more, it's the next step in your training.</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mt-15">
                                        <div class="prt-progress-bar style1" data-percent="92%">
                                            <div class="progressbar-title">Built Homes for Homeless</div>
                                            <div class="progress-bar-inner">
                                                <div class="progress-bar progress-bar-color-bar_skincolor">
                                                    <div class="progress-bar-percent" data-percentage="92">92%</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="prt-progress-bar style1" data-percent="85%">
                                            <div class="progressbar-title">The National Fund</div>
                                            <div class="progress-bar-inner">
                                                <div class="progress-bar progress-bar-color-bar_skincolor">
                                                    <div class="progress-bar-percent" data-percentage="85">85%</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="prt-progress-bar style1" data-percent="78%">
                                            <div class="progressbar-title">Funding Child Dreams</div>
                                            <div class="progress-bar-inner">
                                                <div class="progress-bar progress-bar-color-bar_skincolor">
                                                    <div class="progress-bar-percent" data-percentage="78">78%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="res-991-mt-30">
                            <div class="row mt_15 mb_15">
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="prt_single_image-wrapper text-center pt-15 pb-15">
                                        <img class="img-fluid" src="images/certificate/01.jpg" width="208" height="140" alt="image">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="prt_single_image-wrapper text-center pt-15 pb-15">
                                        <img class="img-fluid" src="images/certificate/02.jpg" width="208" height="140" alt="image">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="prt_single_image-wrapper text-center pt-15 pb-15">
                                        <img class="img-fluid" src="images/certificate/03.jpg" width="208" height="140" alt="image">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="prt_single_image-wrapper text-center pt-15 pb-15">
                                        <img class="img-fluid" src="images/certificate/04.jpg" width="208" height="140" alt="image">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="prt_single_image-wrapper text-center pt-15 pb-15">
                                        <img class="img-fluid" src="images/certificate/05.jpg" width="208" height="140" alt="image">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="prt_single_image-wrapper text-center pt-15 pb-15">
                                        <img class="img-fluid" src="images/certificate/06.jpg" width="208" height="140" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!-- achivement-section -->

        <!-- qualification-section -->
        <!--<section class="prt-row team-details-qualification-section bg-base-grey clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <h3 class="fs-28 mb-0 res-991-mb-15">Honors,Awards,Education & Qualification </h3>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <p class="mb-0">Babysitter's Training:This in-person childcare certification course is designed for those ages 11 to 15, and builds on the skills in our Babysitting Basics class.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="featured-icon-box icon-align-before-content style10">
                            <div class="featured-icon">
                                <div class="prt-icon">
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>2012 World Health Organized Awards</h3>
                                </div>
                                <div class="featured-desc">
                                    <p>The course takes approximately 4 hours to complete, and includes a final exam. Upon successful completion, you will receive a printable certificate.</p>
                                </div>
                            </div>
                        </div>
                        <div class="featured-icon-box icon-align-before-content style10">
                            <div class="featured-icon">
                                <div class="prt-icon">
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>2020 World Health Organized Awards</h3>
                                </div>
                                <div class="featured-desc">
                                    <p>how to choose age-appropriate activities, and recognizing and handling specific behaviors, this class gain the skills and confidence needed for babysitting.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mt-30 mb-20 res-991-mt-0">
                            <h3 class="fs-20 mb-0">Medical University of South Carolina</h3>
                            <span class="fs-14 text-base-skin">2004-2007</span>
                            <p class="mb-0">Babysitting training and certification fast, simple and easy. And with Red Cross Digital Certificates you'll get anytime, anywhere access to your certificates.</p>
                        </div>
                        <div class="">
                            <h3 class="fs-20 mb-0">Medical University of South Carolina</h3>
                            <span class="fs-14 text-base-skin">2004-2007</span>
                            <p class="mb-0">Babysitting training and certification fast, simple and easy. And with Red Cross Digital Certificates you'll get anytime, anywhere access to your certificates.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!-- qualification-section-end -->

    </div><!--site-main end-->
@endsection
