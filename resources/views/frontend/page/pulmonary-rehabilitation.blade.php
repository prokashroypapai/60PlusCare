@extends('frontend.layout.app')
@section('content')

    <div class="headingMain">
        <h1>60 Plus Care Best Pulmonary Rehabilitation Centre at home in Kolkata</h1>
        <p>
            60 Plus Care is mostly trusted Rehabilitation Centre for Pulmonary in Kolkata.
            We are working since 2008 effortlessly to provide best Lung Rehab solutions at home in Kolkata.
            With experienced doctors & medical professionals we provide best Pulmonary Rehabilitation services.
        </p>
        <p>
            Photo Credits: <a href="https://www.freepik.com" rel="noindex">Freepik</a>
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
    <div class="prt-page-title-row prt-bg prt-bgimage-yes" style="background-image: url({{asset('/static/images/pulmonary-rehabilitation.webp')}})">
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
                                    Best Pulmonary Rehabilitation at home from {{ env('APP_NAME') }}
                                </strong>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a href="{{url('/')}}">Home</a>
                                </span>
                                <span>
                                    <a href="{{url('pulmonary-rehabilitation')}}">Pulmonary Rehabilitation</a>
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
                                    <h2><strong>Pulmonary Rehabilitation</strong> Centre at 60 Plus Clinic & Your Home | <span>Lung Rehab</span> in Kolkata</h2>
                                </div>
                                <div class="title-desc">
                                    <p class="pb-10">
                                        Air Pollution is the biggest health hazard now a days leading to increase dust allergy and lung diseases like Asthma
                                        and COPD along with respiratory viral infections like influenza and COVID 19. These leads to shortness of breath,
                                        decreased lung capacity, reduced physical capacity and reduced strength. Post Covid disorders are a new problem
                                        that makes one more susceptible to more frequent lung infections like seasonal flu, Influenza, Pneumonia, Asthma,
                                        Chronic Obstructive Pulmonary Disease, Lung fibrosis, Pleurisy or accumulation of fluid and many more. Smoking also
                                        a pollutant and is mostly responsible for COPD and ill health that also cause or aggravates heart disease.
                                    </p>
                                    <p class="pb-10">
                                        With ageing these symptoms increases leading to reduced vitality and more frequent suffering from influenza and
                                        pneumonitis that in turn reduces well being. While taking care of the elders we frequently encounter these life
                                        threatening lung diseases especially pneumonia and post lung disease symptoms. These need prompt and timely lung
                                        rehabilitation for faster and better recovery of the lung to provide better or improved oxygenation to ageing body.
                                    </p>
                                    <p class="pb-10">
                                        {{ env('APP_NAME') }} has taken the initiative to provides Pulmonary Rehabilitation Service at our
                                        <strong>60 Plus Clinic</strong> - Elder Care Clinics and at your home with experienced specialist Doctors and
                                        Pulmonary Rehabilitation Specialist at various locations of Kolkata and Salt Lake along with our comprehensive
                                        360 degree <a href="{{ url('services') }}" title="Services provided by {{ env('APP_NAME') }}">elder care services</a>.
                                    </p>
                                </div>
                                <div class="d-sm-flex">
                                    <div class="bg-base-grey spacing-36">
                                        <h3 class="fs-20 mb-0 fw-500">{{ env('APP_NAME') }}, Pulmonary Rehab in Kolkata Salt Lake, New Town</h3>
                                    </div>
                                </div>
                                <div class="row g-0 mt-30 res-991-mt-20">
                                    <div class="title-desc">
                                        <p class="pb-10">
                                            Pulmonary rehabilitation is a program that includes exercise training, health education, and breathing techniques if
                                            you have lung problems or other diseases that affects the lung or compromises its function. It is mostly needed to
                                            restore the normal or near normal function of the lung for elders, especially <strong>Post COVID 19</strong>, Post hospitalisation for
                                            pneumonia, cardiac disorders.
                                        </p>
                                        <p class="pb-10">
                                            Pulmonary rehab can help you regain strength, normalise breathing, reduce symptoms of anxiety or depression, and make
                                            it easier for you to manage daily activities and other necessary work, go for outings, or enjoy social activities with
                                            your friends and near ones.
                                        </p>
                                        <p class="pb-20">
                                            {{ env('APP_NAME') }} provides best Pulmonary rehabilitation services in Kolkata offering you best Pulmonary rehab solutions at
                                            home especially for the senior citizens. Our specialist and experienced <a href="{{ url('doctors') }}" title="Find Doctors at {{ env('APP_NAME') }}">doctors</a> & trained care managers dedicatedly
                                            take care of all needs of your parents night and day.
                                        </p>

                                        <div class="col-md-6 float-lg-start">
                                            <ul class="prt-list style3">
                                                <li>Pulmonary Rehab at home</li>
                                                <li>24x7 Medical Emergency</li>
                                                <li>Medical Assistant</li>
                                                <li>Nursing care – Male nurse / Brothers</li>
                                                <li>Pathology at Home – Blood Test, Portable X Ray</li>
                                                <li>Home Visit by Doctors at home</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 res-767-mt-12 float-lg-start">
                                            <ul class="prt-list style3">
                                                <li>Telemedicine / Teleconsultation at time of Medical Emergency 24x7</li>
                                                <li>Dietician / Nutritionist Care & Support</li>
                                                <li>Medical devices at home – Medical Oxygen Cylinder, Oxygen Concentrator, Nebuliser, BIPAP, CPAP, Suction Machine, Sleep Test or Polysomnography</li>
                                            </ul>
                                        </div>
                                        <p class="d-inline-block mt-20">
                                            For any kind of information about Pulomonary Rehab or Geriatric Medicine Call <a href="tel:+918296111777" title="Call 60 Plus Care Support">+91 8296 111 777</a> or email at <a href="mailto:care@60pluscare.in" title="60 Plus Care Support Email">care@60pluscare.in</a> for Pulmonary Rehab Solution in Kolkata.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 res-1199-mt-30 align-self-start">
                        <div class="prt_single_image-wrapper text-start">
                            <img width="100%" height="auto" class="img-fluid rounded" src="{{ asset('static/images/pulmonary-rehabilitation-2233.webp') }}" alt="{{ env('APP_NAME') }} Most Trusted Pulmonary Rehabilitation in Kolkata">
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
                    <div class="col-xl-6 text-center">
                        <div class="prt_single_image-wrapper">
                            <img width="450" height="auto" class="img-fluid rounded" src="{{ asset('static/images/dr-sirshendu-ray.jpg') }}" alt="Pulmonary Rehabilitation Service at {{ env('APP_NAME') }}">
                            <div class="d-inline-block">
                                <strong>Dr. Sirshendu Ray</strong> (Dr. Ray’s Pulmonary Rehabilitation)
                            </div>
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
                                        Initiated by {{ env('APP_NAME') }} associated with <strong>Dr. Sirshendu Ray</strong>, Dr. Ray’s Pulmonary Rehabilitation is one of the best Pulmonary Rehabilitation company in Kolkata providing <strong>best lung rehab solutions in Kolkata</strong>.
                                        An advanced approach for treating & managing various Respiratory Diseases like COPD, Asthma, ILD, Pulmonary fibrosis, Pneumonia, Bronchiectasis etc.
                                        We provide <strong>24x7 Emergency service</strong> with doctor consultation, nurses, medical team, physiotherapy, care manager and best part day/night ambulance service.
                                    </p>
                                    <p>
                                        We also provide <strong>diagnostic lab tests at home</strong> and other medical equipments and services.
                                        Our <a href="{{ url('clinics') }}" title="Find 60 Plus Clinic in Kolkata">clinics</a> are available at different locations in
                                        Kolkata including <a href="{{ url('/clinic/salt-lake') }}" title="Visit 60 Plus Clinic at Salt Lake">60 Plus Clinic in Salt Lake</a>,
                                        <a href="{{ url('/clinic/behala') }}" title="Visit 60 Plus Clinic at Behala">60 Plus Clinic in Behala</a>,
                                        <a href="{{ url('/clinic/joka') }}" title="Visit 60 Plus Clinic at Joka">60 Plus Clinic in Joka</a>, Rajarhat New Town.
                                        For more query you can <a href="{{ url('contact') }}" title="Customer support at {{ env('APP_NAME') }}">contact with our support</a>.
                                    </p>
                                </div>
                            </div><!-- section title end -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="featured-icon-box">
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3>When you need Pulmonary Rehab</h3>
                                            </div>
                                            <div class="featured-desc">
                                                <strong>Signs and Symptoms you must observe</strong>
                                                <ul>
                                                    <li>Shortness of breath during physical activities</li>
                                                    <li>Problem in Wheezing</li>
                                                    <li>Chest tightness</li>
                                                    <li>Frequent respiratory infections</li>
                                                    <li>Lack of energy</li>
                                                    <li>Post Covid Problems</li>
                                                    <li>Unintended weight loss</li>
                                                    <li>Swelling in ankles, feet or legs</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 res-575-mt-10">
                                    <div class="featured-icon-box">
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3>Benefits you will get</h3>
                                            </div>
                                            <div class="featured-desc">
                                                <strong>Best Lungs Care solution</strong>
                                                <ul>
                                                    <li>Best Pulmonary Doctor at Home</li>
                                                    <li>Regular monitoring of Oxygen and Carbon dioxide levels</li>
                                                    <li>Best Physiotherapy service at home</li>
                                                    <li>Routine Health check up</li>
                                                    <li>Improved Quality of Life of the patients and families</li>
                                                </ul>
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
                                {{ env('APP_NAME') }}, <span>Pulmonary Rehabilitation</span> Centre in Kolkata
                            </h2>
                        </div>
                        <div class="title-desc">
                            <p>
                                {{ env('APP_NAME') }} is the most trustworthy Pulmonary Rehabilitation Centre in Kolkata. Best Lung Rehab Centre that offers services at home in Kolkata.
                            </p>
                            <p>
                                Our expert team always support 24x7 emergency services including doctor visit at home, nurses/aaya, care manager and other medical services makes us most trusted elder care company in Kolkata. For any query please Call us at <a href="tel:+918296111777" rel="nofollow, noindex">+91 8296 111 777</a> or <a href="{{ url('contact') }}" rel="nofollow">Get Support from customer care executive</a>.
                            </p>
                        </div>
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
                                    24 Hours medical team is available including Doctors
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
                        <button class="registerBtn" onclick='window.location.href="{{ url('/schedule-an-appointment') }}"'>Book Appointment</button>
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
