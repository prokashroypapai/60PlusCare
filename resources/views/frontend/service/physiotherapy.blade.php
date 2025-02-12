@extends('frontend.layout.app')
@section('content')

    <div class="headingMain">
        <h1>Best Physiotherapy Clinic at home in Kolkata.</h1>
        <p>
            60 Plus Care provides best physiotherapy treatment at home in Kolkata. We have experienced physiotherapists working since 2008 provides you best treatment.
            Our senior doctors take care of every patient at home. View our best plans of your choice and start physiotherapy service with 60 Plus Care with affordable cost.
        </p>
    </div>
    <style>
        .headingMain {
            clip: rect(1px,1px,1px,1px);
            height: 1px;
            overflow: hidden;
            position: absolute;
            white-space: nowrap;
            width: 1px;
        }
    </style>

    <!-- page-title -->
    <div class="prt-page-title-row prt-bg prt-bgimage-yes bgphysiotherapy">
        <div class="prt-page-title-row-inner prt-bg-layer bg-base-bodycolor">
            <div class="prt-page-title-row-wrapper-inner"></div>
        </div>
        <div class="layer-content">
            <div class="container-fluid p-0">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="prt-page-title-row-heading">
                            <div class="page-title-heading">
                                <h2 class="title">Best Physiotherapist, Physiotherapy Doctors In Kolkata</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                    <span>
                                        <a href="{{url('/')}}">Home</a>
                                    </span>
                                <span>
                                        <a href="#">Physiotherapy</a>
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

        <!-- desc-section -->
        <section class="prt-row service-detail06-desc-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="prt_single_image-wrapper text-center">
                            <img class="img-fluid" src="{{asset('static/images/bgimage-15.jpg')}}" alt="60 Plus Care provides Best Physiotherapy Service in Kolkata">
                        </div>
                    </div>
                </div>
                <div class="row mt-50 res-991-mt-30">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <div class="title-header">
                                <h3>Trusted <span>Physiotherapy Service</span> at Home in Kolkata</h3>
                            </div>
                            <div class="title-desc">
                                <p>
                                    Revive Physiotherapy and advanced Rehabilitation centre is one of the best centre provides OPD services,Research and Innovations in the field of Physiotherapy.
                                </p>
                                <p>
                                    Equipped with Latest inventions with High Skilled Committed Physiotherapists are the strength of our success.
                                </p>
                                <p>
                                    Accurate Diagnosis and perfect Evidence Based Physiotherapy is our Success Mantra. We commit ourselves to care you and to cure your Ailments with Evidence Based treatment procedures.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="prt_single_image-wrapper">
                            <img class="img-fluid" src="{{asset('static/images/bgimage-16.jpg')}}" alt="Find best physiotherapist in Kolkata">
                        </div>
                    </div>
                    <div class="col-md-8 res-767-mt-15">
                        <div class="prt_single_image-wrapper">
                            <img class="img-fluid" src="{{asset('static/images/bgimage-17.jpg')}}" alt="Trusted physiotherapy service at home in Kolkata">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- desc-section-end -->

        <!-- service-section -->
        <section class="prt-row service-detail06-service-section clearfix">
            <div class="container">
                <div class="row g-0 row-equal-height overflow-hidden section-title">
                    <h3>Types of <span>Physiotherapy Solutions</span> We provide</h3>
                    <p>We provide physiotherapy solutions at home by our experienced doctors. 60 Plus Care is among leading clinics provides best physiotherapists with affordable cost.</p>
                    <div class="col-lg-4 col-md-6">
                        <div class="featured-icon-box icon-align-before-title style12">
                            <div class="featured-icon">
                                <img src="{{asset('static/images/neurology.png')}}" width="55" height="55" alt="Neurology Physiotherapy Service by 60 Plus Care in Kolkata">
                            </div>
                            <div class="featured-title">
                                <h6>Neurology Physiotherapy</h6>
                            </div>
                            <div class="featured-content">
                                <div class="featured-desc">
                                    <p>
                                        Neurological Physiotherapy encompasses specialized comprehensive evaluation
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="featured-icon-box icon-align-before-title style12">
                            <div class="featured-icon">
                                <img src="{{asset('static/images/Orthopaedic.png')}}" width="55" height="55" alt="Orthopaedic Physiotherapy Service by 60 Plus Care in Kolkata">
                            </div>
                            <div class="featured-title">
                                <h6>Orthopaedic Physiotherapy</h6>
                            </div>
                            <div class="featured-content">
                                <div class="featured-desc">
                                    <p>
                                        Orthopaedic Physiotherapy focus on treatment of orthopaedic problems involving joints
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="featured-icon-box icon-align-before-title style12">
                            <div class="featured-icon">
                                <img src="{{asset('static/images/pediatrics.png')}}" width="55" height="55" alt="Pediatrics Physiotherapy Service by 60 Plus Care in Kolkata">
                            </div>
                            <div class="featured-title">
                                <h6>
                                    Pediatrics Physiotherapy
                                </h6>
                            </div>
                            <div class="featured-content">
                                <div class="featured-desc">
                                    <p>
                                        Pediatrics Physiotherapy isn't physical therapy just for athletes and adults in recovery?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="featured-icon-box icon-align-before-title style12">
                            <div class="featured-icon">
                                <img src="{{asset('static/images/Geriatric.png')}}" width="55" height="55" alt="Geriatric Physiotherapy Service by 60 Plus Care in Kolkata"/>
                            </div>
                            <div class="featured-title">
                                <h6>
                                    Geriatric Physiotherapy
                                </h6>
                            </div>
                            <div class="featured-content">
                                <div class="featured-desc">
                                    <p>
                                        People in old age may lose strength, mobility, and flexibility due to aging process. Our Geriatric
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="featured-icon-box icon-align-before-title style12">
                            <div class="featured-icon">
                                <img src="{{asset('static/images/pelvis.png')}}" width="55" height="55" alt="Pelvic Health Physiotherapy Service by 60 Plus Care in Kolkata">
                            </div>
                            <div class="featured-title">
                                <h6>
                                    Pelvic Health Physiotherapy
                                </h6>
                            </div>
                            <div class="featured-content">
                                <div class="featured-desc">
                                    <p>
                                        Pelvic Floor Physiotherapy treats pain, weakness and dysfunction in the pelvic floor muscles. The
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="featured-icon-box icon-align-before-title style12">
                            <div class="featured-icon">
                                <img src="{{asset('static/images/surgical-instrument.png')}}" width="55" height="55" alt="Post Surgical Rehab Service by 60 Plus Care in Kolkata">
                            </div>
                            <div class="featured-title">
                                <h6>
                                    Post Surgical Rehab
                                </h6>
                            </div>
                            <div class="featured-content">
                                <div class="featured-desc">
                                    <p>
                                        Post surgical rehabilitation may be necessary for a variety of surgical procedures including orthopaedic,
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-section end-->

        <!-- list-section -->
        <section class="prt-row service-detail06-list-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="prt_single_image-wrapper">
                            <img class="img-fluid" src="{{asset('static/images/bgimage-18.jpg')}}" alt="Physiotherapy Services by 60 Plus Care">
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="res-991-mt-30">
                            <div class="mb-25">
                                <h4 class="fs-24">Physiotherapy Services by {{env('APP_NAME')}}</h4>
                                <p class="fs-15 mb-0">
                                    60 Plus Care is a leading <strong>senior support provider in Kolkata</strong>. We provide all kinds of physiotherapy services by our expert physiotherapists.
                                </p>
                            </div>
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <ul class="prt-list style8">
                                        <li>Orthopaedic Physiotherapy</li>
                                        <li>Neurological Physiotherapy</li>
                                        <li>Geriatric Physiotherapy</li>
                                        <li>Pediatric Physiotherapy</li>
                                    </ul>
                                </div>
                                <div class="col-md-6 res-767-mt-12">
                                    <ul class="prt-list style8">
                                        <li>Women's health Physiotherapy</li>
                                        <li>Pelvic Health physiotherapy</li>
                                        <li>Balance Rehab</li>
                                        <li>Post surgical Rehab</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- list-section-end -->

        @include('frontend.widget.facilities')

        <!-- special-treatment-section -->
        @include('frontend.widget.specialTreatment')
        <!-- special-treatment-section -->

        <!-- service-section -->
        @include('frontend.widget.bodyConditions')
        <!-- service-section-end -->

        <!-- testimonial-section -->
    @include('frontend.home.testimonial')
    <!-- testimonial-section -->
        <!-- testimonial-section -->
    @include('frontend.home.contact')
    <!-- testimonial-section -->

    </div><!--site-main end-->
@endsection
