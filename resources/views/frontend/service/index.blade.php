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

        <!--service-->
        <section class="prt-row service01-service-section bg-light clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <!-- section title -->
                        <div class="section-title mt-20 mb-0 res-767-mt_10">
                            <div class="title-header">
                                <h3>We provide best <span>Elder Care</span> Services at Home in <strong>Kolkata</strong>, <strong>Behala</strong>, <strong>Salt Lake</strong>, <strong>New Town</strong> & <strong>Garia</strong>.</h3>
                            </div>
                            <div class="title-desc">
                                <p>
                                    Get Complete 360 Degree Elder Care Services in Kolkata. 60 Plus Care is the most trusted senior care solution providing 24x7 Medical Emergency Services, Doctor consultation, hospitalization, ambulance services etc.
                                </p>
                            </div>
                        </div><!-- section title end -->
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="featured-imagebox featured-imagebox-services style2">
                            <div class="featured-thumbnail">
                                <img loading='lazy' class="img-fluid" src="{{asset('static/images/60pluscare-24x7-emergency.webp')}}" width="447" height="300" alt="24x7 Medical Emergency Assistance service at {{env('APP_NAME')}}">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5 class="text-white">
                                        24x7 Medical Emergency Assistance*
                                    </h5>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        Members can avail 24/7 round the clock assistance for Medical or Non-Medical Emergency even in the case of hospitalization.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="featured-imagebox featured-imagebox-services style2">
                            <div class="featured-thumbnail">
                                <img loading='lazy' class="img-fluid" src="{{asset('static/images/60pluscare-doctor-consultation.webp')}}" width="447" height="300" alt="Doctor Consultation at {{env('APP_NAME')}}">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5 class="text-white">24x7 Doctor Consultation*</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        We are privileged to have the most experienced and renowned Doctors of the City in our Team and led by Specialist Doctor of Geriatric Medicine. Members can avail Prioritised Appointment & Teleconsultation.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="featured-imagebox featured-imagebox-services style2">
                            <div class="featured-thumbnail">
                                <img loading='lazy' class="img-fluid" src="{{asset('static/images/hospital.jpg')}}" width="447" height="300" alt="Prioritised Hospitalisation service at {{env('APP_NAME')}}">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5 class="text-white">Prioritised Hospitalisation</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        We arrange Prioritised Hospitalisation for our Members and we regularly be in touch with the Doctors for daily updates.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="featured-imagebox featured-imagebox-services style2">
                            <div class="featured-thumbnail">
                                <img loading='lazy' class="img-fluid" src="{{asset('static/images/60pluscare-medial-packages.webp')}}" width="447" height="300" alt="Affordable & Customised at {{env('APP_NAME')}}">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5 class="text-white">Affordable & Customised</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>We provide the Most Affordable, Tailor made, Comprehensive, Coordinated Elder Care & Home Care Packages as per your need. No Yearly RENEWAL Charges</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="featured-imagebox featured-imagebox-services style2">
                            <div class="featured-thumbnail">
                                <img loading='lazy' class="img-fluid" src="{{asset('static/images/60pluscare-care-managers.webp')}}" width="447" height="300" alt="Care Managers service at {{env('APP_NAME')}}">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5 class="text-white">Care Managers</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Our Professional Elder Care Managers or Geriatric Animators serve and take care of social needs of the elders for better living and healing.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="featured-imagebox featured-imagebox-services style2">
                            <div class="featured-thumbnail">
                                <img loading='lazy' class="img-fluid" src="{{asset('static/images/postdischarge.jpg')}}" width="447" height="300" alt="Trained Nurses services at {{env('APP_NAME')}}">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5 class="text-white">Trained Nurses</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        Our team of Well Trained Nurses care for your medical treatment needs at home to serve and pamper the elders for better recovery and healing.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="featured-imagebox featured-imagebox-services style2">
                            <div class="featured-thumbnail">
                                <img loading='lazy' class="img-fluid" src="{{asset('static/images/60pluscare-post-discharge-care-at-home.webp')}}" width="447" height="300" alt="Post Discharge Care At Home service at {{env('APP_NAME')}}">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5 class="text-white">Post Discharge Care At Home</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        We provide Post Discharge Care & Support at home ensuring comfort and healing with proper monitoring, after hospitalization.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="featured-imagebox featured-imagebox-services style2">
                            <div class="featured-thumbnail">
                                <img loading='lazy' class="img-fluid" src="{{asset('static/images/physiotherapy.jpg')}}" width="447" height="300" alt="Physiotherapy & Rehabilitation service at {{env('APP_NAME')}}">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5 class="text-white">Physiotherapy & Rehabilitation</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        Offering home service by Trained & Certified Neuro and Ortho Physiotherapist along with most Modern CLASS IV LASER Therapy.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="featured-imagebox featured-imagebox-services style2">
                            <div class="featured-thumbnail">
                                <img loading='lazy' class="img-fluid" src="{{asset('static/images/60pluscare-medical-devices.webp')}}" width="447" height="300" alt="Medical Devices service at {{env('APP_NAME')}}">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5 class="text-white">Medical Devices</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        All types of Devices for Home Care & Monitoring are available from Oxygen concentrators to Patient Beds.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="featured-imagebox featured-imagebox-services style2">
                            <div class="featured-thumbnail">
                                <img loading='lazy' class="img-fluid" src="{{asset('static/images/telemedicine.jpg')}}" width="447" height="300" alt="Telemedicine service at {{env('APP_NAME')}}">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5 class="text-white">Telemedicine 24x7</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        We coordinate and organise Teleconsultation with our Doctors, Nurses, Dietitians, Psychologists & Counsellors.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="featured-imagebox featured-imagebox-services style2">
                            <div class="featured-thumbnail">
                                <img loading='lazy' class="img-fluid" src="{{asset('static/images/vaccine.jpg')}}" width="447" height="300" alt="Medicines & Vaccines service at {{env('APP_NAME')}}">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5 class="text-white">Medicines & Vaccines</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        With our network, we are able to source required Medicines & Vaccines including Influenza & Pneumococcal delivered at your home. We also do COVID 19 Vaccination at our Partner's Center.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="featured-imagebox featured-imagebox-services style2">
                            <div class="featured-thumbnail">
                                <img loading='lazy' class="img-fluid" src="{{asset('static/images/pathology.jpg')}}" width="447" height="300" alt="Pathology & Diagnostic Tests service at {{env('APP_NAME')}}">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5 class="text-white">Pathology & Diagnostic Tests</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        We do Lab tests through NABL Certified Labs with Home Collection. Tests like ECG, NCV, EEG HOLTER, Portable X- are done at your home ensuring proper monitoring.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="featured-imagebox featured-imagebox-services style2">
                            <div class="featured-thumbnail">
                                <img loading='lazy' class="img-fluid" src="{{asset('static/images/60plus-care-clinic-kolkata.webp')}}" width="447" height="300" alt="{{env('APP_NAME')}} Elder Care Clinic in Kolkata">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5 class="text-white">Elder Care Clinic</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        Introducing 60 Plus Clinics for dedicated Elder Care Services at different regions of Kolkata including Behala, Parnashree, Joka, Hazra, Golf Green, EM Bypass, Jadavpur, Salt Lake & New Town.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="featured-imagebox featured-imagebox-services style2">
                            <div class="featured-thumbnail">
                                <img loading='lazy' class="img-fluid" src="{{asset('static/images/dialysis-support-60-plus-care.webp')}}" width="447" height="300" alt="{{env('APP_NAME')}} Dialysis Support in Kolkata">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5 class="text-white">Dialysis Support</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        We provide best Dialysis Care & Support for patients facing Kidney disease. Our Care persons give you the best support over kidney problems.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="featured-imagebox featured-imagebox-services style2">
                            <div class="featured-thumbnail">
                                <img loading='lazy' class="img-fluid" src="{{asset('static/images/cancer-care-support-60-plus-care.webp')}}" width="447" height="300" alt="{{env('APP_NAME')}} Cancer Care & Support in Kolkata">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5 class="text-white">Cancer Care & Support</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        Get best Cancer Care & Support from team 60 Plus Care. We offer best Medical support & care along with mental support after Chemotherapy.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="featured-imagebox featured-imagebox-services style2">
                            <div class="featured-thumbnail">
                                <img loading='lazy' class="img-fluid" src="{{asset('static/images/home-dental-care-60-plus-care.webp')}}" width="447" height="300" alt="{{env('APP_NAME')}} Home Dental Care in Kolkata">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5 class="text-white">Home Dental Care</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        Top Dental Care & Service at Home in Kolkata. Take Care of your dental problems with expert Dentists at doorstep.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>* For Members only</p>
                </div>
            </div>
        </section>
        <!--service-->

        <!-- service-section -->
        <section class="prt-row service02-service-section clearfix" style="padding-bottom: 45px;">
            <div class="container">
                <div class="row">
                    <!-- section title -->
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            <h2>Get <span>Best Parent Care Services</span> in Kolkata</h2>
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
