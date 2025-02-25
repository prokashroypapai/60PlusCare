@extends('frontend.layout.app')
@section('content')

    <div class="headingMain">
        <h1>{{ env('APP_NAME') }} offers Home Health Care Services in Kolkata</h1>
        <p>
            {{ env('APP_NAME') }} is the trusted & best home care service provider in Kolkata. {{ env('APP_NAME') }} Home Care Services in Kolkata offers both medical and non medical services at home and wide range of home care services,
            including doctor visits at home, emergency medical support, experienced physiotherapists, nurse care at home, specialized elderly care,
            medical equipment for rent or sale, post discharge care, post critical care, vaccinations at home, and rehab programs.
        </p>
        <h2>{{ env('APP_NAME') }}, <strong>Home Care Service Provider in Kolkata</strong></h2>
        <p>
            {{ env('APP_NAME') }} is the <strong>best & most reliable home health care service provider</strong> in Kolkata, with qualified and experienced healthcare professionals.
            Providing Home Care services to the doorsteps of the people all facilities including modalities of care, nursing and attendant care, doctor consultation, dietician care, diagnostic services, health check-up
            post stroke care, post accident care, pathology tests, vaccine services and physiotherapy and other medical <a href="{{ url('services') }}" title="Services provided by {{ env('APP_NAME') }}">services</a>.
        </p>
    </div>
    <style>.headingMain {clip: rect(1px,1px,1px,1px);height: 1px;overflow: hidden;position: absolute;white-space: nowrap;width: 1px;}</style>

    <!--site-main start-->
    <div class="site-main">

        <!-- desc-section -->
        <section class="prt-row service-detail06-desc-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="prt_single_image-wrapper text-center">
                            <img loading="lazy" class="img-fluid rounded" src="{{asset('static/images/60plus-care-physiotherapy-service-at-home.jpg')}}" alt="60 Plus Care provides Best Physiotherapy Service in Kolkata">
                        </div>
                    </div>
                </div>
                <div class="row mt-50 res-991-mt-30">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <div class="title-header">
                                <h3>Best <span>Home Nursing Care Services</span> in Kolkata</h3>
                            </div>
                            <div class="title-desc">
                                <p>
                                    Experience superior home nursing care at home with in-house trained & verified caregivers. {{ env('APP_NAME') }} is the trusted home nursing service provider in Kolkata, providing the best in health at your doorstep.
                                </p>
                                <p>
                                    Many medical conditions, such as post stroke, post accident, arthritis, physical disabilities, trauma conditions, age-related disorders, and surgical injuries
                                    prevent patients from taking care of themselves and require long-term care. In some cases family members are unable to handle the situation in a perfect way, the patients need medical help.
                                    We offer customized home care services with proper guidance and best medical manpower.
                                </p>
                                <p class="mt-2">
                                    For any kind of emergency or doctor support Call <a href="tel:+918296111777">+91 8296 111 777</a> or email at <a href="mailto:care@60pluscare.in">care@60pluscare.in</a> for Elder Care Solution in Kolkata.
                                </p>
                            </div>
                            <div class="row py-5">
                                <div class="text-center">
                                    <button class="registerBtn" onclick='window.location.href="tel:+918296111777"'>Call for Packages</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- desc-section-end -->

        <!--services-->
        <section class="prt-row service01-service-section bg-light clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <!-- section title -->
                        <div class="section-title mt-20 mb-0 res-767-mt_10">
                            <div class="title-header">
                                <h3>
                                    Types of <span>Home Nursing Services</span> at Home available in <strong>Kolkata</strong>
                                </h3>
                            </div>
                            <div class="title-desc">
                                <p>
                                    Get Complete Home Care Services at your doorstep with trained & verified care persons.
                                    {{ env('APP_NAME') }} is the most trusted & leading home healthcare solution providing Nurse Attendant Service, 24x7 Medical Emergency Services, Doctor visit, hospitalization,
                                    ambulance services, post discharge care, post stroke care, dialysis care etc.
                                </p>
                            </div>
                        </div><!-- section title end -->
                    </div>

                    <!--Nursing Service-->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="featured-imagebox featured-imagebox-services style2">
                            <div class="featured-thumbnail">
                                <img loading='lazy' class="img-fluid" src="{{asset('static/images/60pluscare-24x7-emergency.webp')}}" width="447" height="300" alt="24x7 Medical Emergency Assistance service at {{env('APP_NAME')}}">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5 class="text-white">
                                        Nursing Service at Home
                                    </h5>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        Get 24 Hours or Hour basis Nursing Service at Home from {{ env('APP_NAME') }}. We provide trained and certified nursing facility at your doorstep.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Nursing Service-->

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="featured-imagebox featured-imagebox-services style2">
                            <div class="featured-thumbnail">
                                <img loading='lazy' class="img-fluid" src="{{asset('static/images/60pluscare-doctor-consultation.webp')}}" width="447" height="300" alt="Doctor Consultation at {{env('APP_NAME')}}">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5 class="text-white">Trained Attendant Service</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        Trained Nursing Attendant service at doorstep. Avail trusted Attendant / aaya services at your home in Kolkata.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="featured-imagebox featured-imagebox-services style2">
                            <div class="featured-thumbnail">
                                <img loading='lazy' class="img-fluid" src="{{asset('static/images/60pluscare-24x7-emergency.webp')}}" width="447" height="300" alt="24x7 Medical Emergency Assistance service at {{env('APP_NAME')}}">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5 class="text-white">
                                        ICU Care at Home
                                    </h5>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        Looking for long-term ICU service at Home? {{ env('APP_NAME') }} provides complete ICU setup at your home with an inexpensive cost.
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
                                    <h5 class="text-white">Medical Devices</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        All kinds of Medical Equipments required in medical practice are available here. Buy or rent Medical devices at budget friendly prices.
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
                                <img loading='lazy' class="img-fluid" src="http://127.0.0.1:8000/static/images/vaccine.jpg" width="447" height="300" alt="Medicines & Vaccines service at 60 Plus Care">
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
                                <img loading='lazy' class="img-fluid" src="http://127.0.0.1:8000/static/images/cancer-care-support-60-plus-care.webp" width="447" height="300" alt="60 Plus Care Cancer Care & Support in Kolkata">
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
                </div>
            </div>
        </section>
        <!--services-->

        <!-- care-section -->
        <section class="prt-row about03-child-care-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 text-center">
                        <div class="prt_single_image-wrapper">
                            <img width="100%" height="auto" class="img-fluid rounded" src="{{ asset('/static/images/60-plus-care-pulmonary-rehabilitation-in-kolkata.jpg') }}" alt="Pulmonary Rehabilitation Service at 60 Plus Care">
                        </div>
                    </div>
                    <div class="col-xl-6 align-self-center">
                        <div class="pl-30 res-1199-pl-0 res-1199-mt-30">
                            <!-- section title -->
                            <div class="section-title mb-30">
                                <div class="title-header">
                                    <h2>Best Pulmonary Rehabilitation Solution <span>at Home</span></h2>
                                </div>
                                <div class="title-desc">
                                    <p class="pb-10">
                                        We understand the importance of receiving quality <strong>healthcare</strong> in the comfort of your own home.
                                        Also we keep in mind about the most <strong>affordable cost</strong> for the services.
                                        With a commitment to excellence and compassion, we bring trained nurses, attendants or caregivers to your doorstep. Our trained & experienced team is dedicated to provide personalized care tailored to your unique needs, medical supports, non medical helps as well as dementia care ensuring your health and well-being are our top priorities.
                                    </p>
                                    <p>
                                        Avail Home Nursing Service, Home Attendant Service, Physiotherapy at Home, Post Stroke Care, Post Accident Care, Dementia Care at Home, Elderly Care at Home
                                        with just one call away. Also we have dedicated <a href="{{ url('/clinics') }}" title="Find 60 Plus Clinic in Kolkata">Elder Care Clinics in Kolkata</a> at different locations in
                                        Kolkata including <a href="{{ url('/clinic/salt-lake') }}" title="Visit 60 Plus Clinic at Salt Lake">60 Plus Clinic in Salt Lake</a>,
                                        <a href="{{ url('/clinic/behala') }}" title="Visit 60 Plus Clinic at Behala">60 Plus Clinic in Behala</a>,
                                        <a href="{{ url('/clinic/joka') }}" title="Visit 60 Plus Clinic at Joka">60 Plus Clinic in Joka</a>, Rajarhat New Town.
                                        For more query you can <a href="{{ url('/contact') }}" title="Customer support at 60 Plus Care">contact with our support</a>.
                                    </p>
                                </div>
                            </div><!-- section title end -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="featured-icon-box">
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3>Why you Avail Home Care Service from {{ env('APP_NAME') }}</h3>
                                            </div>
                                            <div class="featured-desc">
                                                <p>
                                                    {{ env('APP_NAME') }} is your one-stop destination for a wide array of home healthcare services in Kolkata.
                                                    Our services encompass home nursing care, home attendant services, physiotherapy services, elder care at home, baby care, adult vaccination and more.
                                                </p>
                                                <p>
                                                    Also, we provide medical equipment rentals to further support your healthcare needs. Portable Xray, Portable ECG at Home, Halter, EEG, NCV etc we bring to our doorstep with an affordable cost.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 res-575-mt-10">
                                    <div class="featured-icon-box">
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3>Benefits of Choosing Home Care from {{ env('APP_NAME') }}</h3>
                                            </div>
                                            <div class="featured-desc">
                                                <strong>Best Home Healthcare Solution</strong>
                                                <ul>
                                                    <li>Trained Nurse & Attendants</li>
                                                    <li>Dedicated Senior Doctors</li>
                                                    <li>Personalised Home Care Services</li>
                                                    <li>Cost Effective Services</li>
                                                    <li>Home Care with Medical Devices Availability</li>
                                                    <li>One Stop solution for Medical Care</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row py-5">
                                    <div class="text-center">
                                        <button class="registerBtn" onclick='window.location.href="tel:+918296111777"'>Call our Support</button>
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

        <!-- testimonial-section -->
    @include('frontend.home.testimonial')
    <!-- testimonial-section -->
        <!-- testimonial-section -->
    @include('frontend.home.contact')
    <!-- testimonial-section -->

    </div><!--site-main end-->
@endsection
