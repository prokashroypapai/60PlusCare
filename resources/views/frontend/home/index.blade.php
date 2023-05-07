@extends('frontend.layout.app')
@section('content')

    <!-- home slider -->
    @include('frontend.home.slider')
    <!-- home slider -->

    <!-- site-main start -->
    <div class="site-main">

        <!-- about-section -->
        <section class="prt-row home01-about-section bg-base-grey clearfix pb-10">
            <div class="container">
                <div class="row bg-layer-equal-height mt-50 res-991-mt-0">
                    <div class="col-xl-6">
                        <div class="section-title mt-20">
                            <div class="title-header">
                                <h2>
                                    An Initiative by Doctors to Simplify the Quality of Lives of Elders at home <span>since 2008.</span>
                                </h2>
                            </div>
                            <div class="title-desc">
                                <p class="pr-50">
                                    FIRST EVER ELDER CARE & HOME CARE FOR SENIOR CITIZENS UNDER SUPERVISION OF DOCTORS.
                                </p>
                            </div>
                        </div>
                        <div class="row g-0 mr_250 res-1199-mr-0">
                            <div class="col-xl-12">
                                <div class="row g-0 row-equal-height position-relative z-index-2">

                                    <div class="col-md-6 col-sm-6">
                                        <div class="featured-icon-box icon-align-top-content style1">
                                            <div class="featured-icon">
                                                <div class="prt-icon prt-icon_element-onlytxt prt-icon_element-size-lg prt-icon_element-color-skin">
                                                    <i class="flaticon flaticon-toys"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3>
                                                        Vision
                                                    </h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>To help keep elders healthy, jovial , happy and productive, yet being in their own homes.</p>
                                                </div>
                                            </div>
                                            <div class="featured-bottom">
                                                <a class="prt-btn btn-inline prt-btn-color-dark" href="{{url('about')}}">explore more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="featured-icon-box icon-align-top-content style1">
                                            <div class="featured-icon">
                                                <div class="prt-icon prt-icon_element-onlytxt prt-icon_element-size-lg prt-icon_element-color-skin">
                                                    <i class="flaticon flaticon-pediatrics"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3>
                                                        Mission
                                                    </h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>
                                                        To provide cost effective & personalized care for elderly people, under doctor supervision.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="featured-bottom">
                                                <a class="prt-btn btn-inline prt-btn-color-dark" href="{{url('about')}}">explore more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="featured-icon-box icon-align-top-content style1">
                                            <div class="featured-icon">
                                                <div class="prt-icon prt-icon_element-onlytxt prt-icon_element-size-lg prt-icon_element-color-skin">
                                                    <i class="flaticon flaticon-baby-changing-1"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3>
                                                        Why Us?
                                                    </h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>
                                                        Because we understand the Elders Better
                                                    </p>
                                                    <p>
                                                        We are passionate about Caring for the Elders and help them Live Healthy, Happily, Independently with Dignity and Enjoy the Golden Days of their Life.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="featured-bottom">
                                                <a class="prt-btn btn-inline prt-btn-color-dark" href="{{url('about')}}">explore more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="featured-icon-box icon-align-top-content style1">
                                            <div class="featured-icon">
                                                <div class="prt-icon prt-icon_element-onlytxt prt-icon_element-size-lg prt-icon_element-color-skin">
                                                    <i class="flaticon flaticon-maternity"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3>Caring For Elders</h3>
                                                </div>
                                                <div class="featured-desc text-start">
                                                    <ul>
                                                        <li>Doctors owned and Doctors operated Elder Care Services in Kolkata.</li>
                                                        <li>Highly Coordinated, Connected, Compassionate, Caring, Committed & Cohesive Team of Elder Care Professionals – 6S Team of Doctors and Elder Care Professionals are our backbone for providing 360-degree care and All Types of Medical & Non-medical services.</li>
                                                        <li>Proactive Geriatric Care Services & Regular Monitoring.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="featured-bottom">
                                                <a class="prt-btn btn-inline prt-btn-color-dark" href="{{url('about')}}">Explore more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 pb-100 res-1199-pb-0 res-1199-mt-30 align-self-start">
                        <div class="col-bg-img-one prt-bg prt-col-bgimage-yes prt-right-span spacing-1">
                            <div class="prt-col-wrapper-bg-layer prt-bg-layer res-991-mr-0"></div>
                            <div class="layer-content"></div>
                        </div>
                        <img class="prt-equal-height-image img-fluid w-100" src="{{asset('static/images/bgimage-1.jpg')}}" alt="bg-image">
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end-->

        <!-- team-section -->
        <section class="prt-row home02-team-section bg-white clearfix">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section title -->
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h2>Team At <span>60 Plus Care</span></h2>
                            </div>
                        </div><!-- section title end -->
                        <div class="title-desc">
                            <p>Our Team 60 Plus Care has been working for the Care of the Elders since 2008. Our cohesive, coordinated and committed team consists of Specialist Doctors like Prof. Dr. Sukumar Mukherjee, Chief Advisor on Health to Government of West Bengal, Prof. Dr. Suvro Banerjee, Senior Consultant Cardiologist of Apollo Hospital, Dr Pawan Agarwal, Senior Consultant Pulmonologist, Mr Ritwik Mukherjee, Ex-Regional Manager Disney Broadcasting India, Mr Milan Chakraborty, Advisor; Growth & Development, Founder & Director of Advantage Bengal Infrastructure Limited, Mr Koushik Nath, Security Architect, CISCO Systems, USA, alongwith Advisors from IIT Kharagpur, AIIMS Hospital, Gauhati & Kalyani, Chartered Accountants, Lawyers, business administrators from IIMs and myself Dr Dipankar Debnath, Consultant in Geriatric Medicine, Diabetes Care and Family Medicine practicing since 2003 and Founder Director of Sixty Plus Clinic Private Limited.</p>

                            <p>We also have experienced and trained Geriatric Animators or Caregivers, Psychologists, Nutritionists or Dieticians, Physiotherapists, Nurses, Phlebotomists, Counsellors, Vaccinators and other professionals from the field of geriatrics. We are also the authorised partners of Apollo Diagnostics, Genu Path Labs recently taken up by Flipkart Health Plus, Yana Diet Clinic and other organisations like Maritime Medical Consultancy through whom we provide COVID 19 Vaccines, Medilink and other organisations who provide us with ambulance and other required medical facilities all over Kolkata.</p>
                        </div>
                    </div>
                </div>
                <div class="row slick_slider team-01 mt_15" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "arrows":false, "autoplay":true, "dots":false, "infinite":true, "responsive":[{"breakpoint":992,"settings":{"slidesToShow": 3}},{"breakpoint":767,"settings":{"slidesToShow": 2}},{"breakpoint":575,"settings":{"slidesToShow": 1}},{"breakpoint":480,"settings":{"slidesToShow": 1}}]}'>

                    @foreach(\App\Models\Doctor::active()->get() as $doctor)
                    <div class="col-lg-3">
                        <div class="featured-imagebox featured-imagebox-team">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset($doctor->doctorPicture->image_thumb)}}" width="277" height="301" alt="image">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="{{url('doctors/?id=' . $doctor->id)}}">{{$doctor->doctor_name}}</a></h3>
                                </div>
                                <div class="featured-desc">
                                    <p>{{$doctor->doctor_designation}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bottom-direction-link">We dedicated in creating added value for our customers by modern <br>technology in our work. <a href="contact-us.html" class="prt-btn prt-btn-size-md prt-btn-color-skincolor btn-inline btn-underline">Find Your Solution</a></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-section -->

        <!-- team-section -->
        <section class="prt-row about01-team-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section title -->
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h2>Our Team Of <span>Doctors & Elder care</span> Professionals</h2>
                            </div>
                            <div class="title-desc">
                                <p>
                                    Doctors owned and Doctors operated Elder Care Services in Kolkata.
                                </p>
                            </div>
                        </div><!-- section title end -->
                    </div>
                </div>
                <div class="row slick_slider team-01 mt_15" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "arrows":false, "autoplay":true, "dots":false, "infinite":true, "responsive":[{"breakpoint":992,"settings":{"slidesToShow": 3}},{"breakpoint":767,"settings":{"slidesToShow": 2}},{"breakpoint":575,"settings":{"slidesToShow": 1}},{"breakpoint":480,"settings":{"slidesToShow": 1}}]}'>
                    @foreach(\App\Models\Doctor::active()->get() as $doctor)
                        <div class="col-lg-3">
                            <div class="featured-imagebox featured-imagebox-team">
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="{{asset($doctor->doctorPicture->image_thumb)}}" width="277" height="301" alt="image">
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3><a href="{{url('doctors/?id=' . $doctor->id)}}">{{$doctor->doctor_name}}</a></h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>{{$doctor->doctor_designation}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="row">
                    <div class="col-lg-12 py-5 text-center">
                        <button class="btn btn-success" onclick='window.location.href="{{url('doctors')}}"'>See All Our Associate Doctors</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-section -->

        <!-- choose-us-section -->
        <section class="prt-row about02-choose-us-section bg-base-dark clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 align-self-center">
                        <video class="img-fluid" controls loop muted>
                            <source src="{{asset('static/video/carers.mp4')}}" type="video/mp4">
                        </video>
                    </div>
                    <div class="col-xl-6 align-self-center">
                        <div class="pl-30 res-1199-pl-0 res-1199-mt-30">
                            <!-- section title -->
                            <div class="section-title mt-0">
                                <div class="title-header">
                                    <h3>About {{env('APP_NAME')}}</h3>
                                    <h2>
                                        Team <span class="text-base-skin">60 Plus</span> Help You to Age Gracefully <span class="text-base-skin">At Your Home</span>!
                                    </h2>
                                </div>
                            </div>
                            <div class="mt_24 res-991-mt-20">
                                <a class="prt-btn prt-btn-shape-round prt-btn-style-fill prt-btn-color-skin" href="{{url('about')}}">Learn More!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- choose-us-section-section -->

        <!-- services-section -->
        <section class="prt-row service01-service-section bg-img5 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <!-- section title -->
                        <div class="section-title mt-20 mb-0 res-767-mt_10">
                            <div class="title-header">
                                <h2>We provide a best Elder Care <span>Services in Kolkata.</span></h2>
                            </div>
                            <div class="title-desc">
                                <p>
                                    We urge you to view our services, as listed above. It will help you to place a very concise inquiry, and assess us better. I am sure, you would find many of our services useful for the elders at your home.You can let us know about your query, using the form below so that, one of our health experts can get in touch with you and provide the required information.
                                </p>
                            </div>
                        </div><!-- section title end -->
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="featured-imagebox featured-imagebox-services style2">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="https://60pluscare.in/static/img/portfolio/24X7.jpg" width="447" height="300" alt="image">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>
                                        <a href="#">24x7 Medical Emergency Assistance</a>
                                    </h3>
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
                                <img class="img-fluid" src="https://60pluscare.in/static/img/gallery/hospital.jpg" width="447" height="300" alt="image">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="#">Prioritised Hospitalisation</a></h3>
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
                                <img class="img-fluid" src="https://60pluscare.in/static/img/portfolio/package.jpg" width="447" height="300" alt="image">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="#">Affordable & Customised</a></h3>
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
                                <img class="img-fluid" src="https://60pluscare.in/static/img/portfolio/doctor_consultation2.jpg" width="447" height="300" alt="image">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="#">Doctor Consultation</a></h3>
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
                                <img class="img-fluid" src="https://60pluscare.in/static/img/gallery/Elder_care2.jpg" width="447" height="300" alt="image">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="#">Care Managers</a></h3>
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
                                <img class="img-fluid" src="https://60pluscare.in/static/img/portfolio/postdischarge.jpg" width="447" height="300" alt="image">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="#">Trained Nurses</a></h3>
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
                                <img class="img-fluid" src="https://60pluscare.in/static/img/portfolio/care.jpg" width="447" height="300" alt="image">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="#">Post Discharge Care At Home</a></h3>
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
                                <img class="img-fluid" src="https://60pluscare.in/static/img/portfolio/physiotherapy.jpg" width="447" height="300" alt="image">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="#">Physiotherapy & Rehabilitation</a></h3>
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
                                <img class="img-fluid" src="https://60pluscare.in/static/img/portfolio/medicaldevice.jpg" width="447" height="300" alt="image">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="#">Medical Devices</a></h3>
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
                                <img class="img-fluid" src="https://60pluscare.in/static/img/portfolio/telemedicine.jpg" width="447" height="300" alt="image">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="#">Telemedicines</a></h3>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        We coordinate and organise Teleconsultation with our Doctors, Nurses, Dieticians, Psychologists & Counsellors.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="featured-imagebox featured-imagebox-services style2">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="https://60pluscare.in/static/img/portfolio/vaccine.jpg" width="447" height="300" alt="image">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="#">Medicines & Vaccines</a></h3>
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
                                <img class="img-fluid" src="https://60pluscare.in/static/img/portfolio/pathology.jpg" width="447" height="300" alt="image">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="#">Pathology & Diagnostic Tests</a></h3>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        We do Lab tests through NABL Certified Labs with Home Collection. Tests like ECG, NCV, EEG HOLTER, Portable X- are done at your home ensuring proper monitoring.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- services-section-end -->

        <!-- team-section -->
        <section class="prt-row about03-team-section bg-base-grey clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section title -->
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h2>Our Team Of <span>Elder Care </span> Professionals</h2>
                            </div>
                            <div class="title-desc">
                                <p>Highly Coordinated, Connected, Compassionate, Caring, Committed & Cohesive Team of Elder Care Professionals – 6S Team of Doctors and Elder Care Professionals are our backbone for providing 360-degree care and All Types of Medical & Non-medical services.</p>
                            </div>
                        </div><!-- section title end -->
                    </div>
                </div>
                <div class="row slick_slider team-01 mt_15" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "arrows":false, "autoplay":true, "dots":false, "infinite":true, "responsive":[{"breakpoint":992,"settings":{"slidesToShow": 3}},{"breakpoint":767,"settings":{"slidesToShow": 2}},{"breakpoint":575,"settings":{"slidesToShow": 1}},{"breakpoint":480,"settings":{"slidesToShow": 1}}]}'>
                    <div class="col-lg-3">
                        <div class="featured-imagebox featured-imagebox-team style2">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="https://60pluscare.in/static/img/team/Picture9.jpg" width="277" height="301" alt="image">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="{{url('doctors/?id=' . $doctor->id)}}">Ms.Chandana Jana</a></h3>
                                </div>
                                <div class="featured-desc">
                                    <p>Nursing In-Charge</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="featured-imagebox featured-imagebox-team style2">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="https://60pluscare.in/static/img/team/Picture10.jpg" width="277" height="301" alt="image">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="{{url('doctors/?id=' . $doctor->id)}}">Saibal Dhar</a></h3>
                                </div>
                                <div class="featured-desc">
                                    <p>Manager - Customer Relation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="featured-imagebox featured-imagebox-team style2">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="https://60pluscare.in/static/img/team/Picture11.jpg" width="277" height="301" alt="image">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="{{url('doctors/?id=' . $doctor->id)}}">Raj Hossain</a></h3>
                                </div>
                                <div class="featured-desc">
                                    <p>Manager - Elder Care</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="featured-imagebox featured-imagebox-team style2">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="https://60pluscare.in/static/img/team/Picture12.jpg" width="277" height="301" alt="image">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="{{url('doctors/?id=' . $doctor->id)}}">Foud Bin Poyen</a></h3>
                                </div>
                                <div class="featured-desc">
                                    <p>Area Manager - Elder Care</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <button class="btn btn-success" onclick='window.location.href="{{url('doctors')}}"'>See All Care Managers</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-section -->

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
                        <img class="prt-equal-height-image img-fluid w-100" src="images/bg-image/col-bgimage-1.jpg" alt="bg-image">
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
                                    <p>Get 24/7 Emergency <br>Call us: <a href="tel:8296 111 777">(+91) 8296 111 777</a></p>
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
                                    <h3>Register for Elder Care Services!</h3>
                                </div>
                                <div class="featured-desc">
                                    <p><a href="{{url('register')}}">Register Now</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- our-contact-section-end -->

    </div><!-- site-main end-->


@endsection
