@extends('frontend.layout.app')
@section('content')
    <div class="headingMain">
        <h1>60 Plus Care provides best & Most Trusted Elder Care Services in Kolkata</h1>
        <p>60 Plus Care is the oldest & most Trusted <strong>Elder Care Service Provider in Kolkata</strong> serving since 2008.
            We provide 24x7 Medical Emergency, 360 Degree Medical Care, Proactive Health Care, Senior Care Services in Kolkata.
            Our experienced doctors and nurses are best in Home Care Assistant Services making us best parent care solution in Kolkata.</p>
        <h2>Get Best Elderly Home Care Services in Kolkata | Trusted Senior Care Solution</h2>
    </div>
    <style>
        .headingMain {clip: rect(1px,1px,1px,1px);height: 1px;overflow: hidden;position: absolute;white-space: nowrap;width: 1px;}
    </style>

    <!-- home section -->
    <div class="col-12 d-md-flex position-relative">
        <!--slider-->
        @include('frontend.home.slider')
        <!--slider-->
        <div class="col-12 col-sm-12 col-md-4 d-inline-block noticeSideMain">
            <div id="loadNoticeBoard"></div>
        </div>
    </div>
    <!-- home slider -->

    <!-- site-main start -->
    <div class="site-main">

        <!-- service-section -->
        <section class="prt-row service02-service-section pb-15 clearfix">
            <div class="container">
                <div class="row">
                    <!-- section title -->
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            <h3>
                                {{ env('APP_NAME') }} <span>Best Parent Care</span> Solution At Home
                            </h3>
                        </div>
                        <div class="title-desc">
                            <p>
                                {{ env('APP_NAME') }} is the oldest Elderly Care Service provider in Kolkata.
                                We are the only platform providing complete 360 degree Medical & non Medical Services in Kolkata. Discover our affordable packages giving you the best Doctor visit, Attendant, Nurse, Care Manager Services with lowest cost compared to others.
                            </p>
                            <p>
                                Our expert team always support 24x7 emergency services including doctor visit at home, nurses/aaya, care manager and other medical services makes us most trusted elder care company in Kolkata. For any query please Call us at
                                <a href="tel:+918296111777" rel="nofollow, noindex" title="{{ env('APP_NAME') }} Customer Support">+91 8296 111 777</a> or <a href="{{ url('contact') }}" rel="nofollow" title="{{env('APP_NAME')}} Contact Number">Get Support from customer care executive</a>.
                            </p>
                            <h4 class="pt-3" onclick='window.location.href="{{ url('/elder-care') }}"'>
                                Avail Kolkata's most demanding Elder Care Services at Home
                            </h4>
                        </div>
                    </div>
                    <!-- section title-end -->
                </div>

            </div>
        </section>
        <!-- service-section end-->

        <!-- about-section -->
    @include('frontend.home.about')
    <!-- about-section end-->

        <!--temp section-->
        <section class="prt-row about01-about-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="pr-30 res-1199-pr-0">
                            <div class="section-title mb-30">
                                <div class="title-header">
                                    <h2><span>Elderly Care India,</span> Thank you for the collaboration with {{ env('APP_NAME') }}</h2>
                                </div>
                                <div class="title-desc">
                                    <p class="pr-50">
                                        A resource platform to deliver best practices on Eldercare across the Globe. Elderly Care India is a free online resource and knowledge sharing website committed to bridge the gap in the Senior Care
                                        sector in India.
                                    </p>
                                </div>
                            </div>
                            <div class="d-sm-flex">
                                <div class="ttm_single_image-wrapper text-center flex-grow-0 flex-shrink-0 flex-basis-auto p-3">
                                    <img class="img-fluid rounded" width="182" height="109" src="{{ asset('/static/images/elderly-care-india-logo.webp') }}" alt="single-07">
                                </div>
                                <div class="d-flex res-575-mt-20">
                                    <div class="bg-base-grey spacing-36">
                                        <h3 class="fs-20 mb-0">Free online resource and knowledge sharing website regarding Elder Care</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mt-30 res-991-mt-20">
                                <div class="col-md-6">
                                    <button class="registerBtn shadow" onclick="window.location.href='https://elderlycareindia.org/'">Visit Website</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 res-1199-mt-30 align-self-center">
                        <div class="prt_single_image-wrapper text-start">
                            <img width="686" height="568" class="img-fluid" src="{{ asset('/static/images/elder-care-india-org-60-plus-care.jpg') }}" alt="single-06">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--temp section-->

        <!-- services-section -->
    @include('frontend.home.service')
    <!-- services-section-end -->

        <!-- our-contact-section -->
    @include('frontend.home.contact')
    <!-- our-contact-section-end -->

        <!-- service-section -->
        <section class="prt-row service02-service-section clearfix" style="padding-bottom: 45px;">
            <div class="container">
                <div class="row">
                    <!-- section title -->
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            <h3>
                                {{ env('APP_NAME') }}, Leading <span>Elder Care in Kolkata</span>
                            </h3>
                        </div>
                        <div class="title-desc">
                            <p>
                                Tired of searching for best Elder Care in Kolkata who can look after your parents at home. {{ env('APP_NAME') }} is the leading Home Care Service Provider making us best Elder Care Service provider in Kolkata as per Member's feedback.
                                We provide <strong>24x7 Medical Emergency</strong> Service, Doctor visits, Regular Care Manager Visits, Nurse, Attendant Services & other medical services.
                            </p>
                            <p>
                                We value medical checkups along with mental health, wellness, recreation and most importantly security.
                                {{ env('APP_NAME') }} also provides physiotherapy, pulmonary Rehabilitation, Medical Lab Tests, Telemedicine, Medical Devices, Dental Care, Post Discharge Care & other Services at Home.
                            </p>
                        </div>
                    </div>
                    <!-- section title-end -->
                </div>

            </div>
        </section>
        <!-- service-section end-->

        <!-- doctors -->
    @include('frontend.home.doctors')
    <!-- doctors -->

        <!-- video -->
    @include('frontend.home.video')
    <!-- video -->

        <!-- highlights -->
    @include('frontend.home.highlights')
    <!-- highlights -->

        <!-- team-memory -->
    @include('frontend.home.memory')
    <!-- team-memory -->

        <!-- testimonial-section -->
        <section class="prt-row home01-testimonial-section bg-base-grey clearfix">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section title -->
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h6>What our <span>Members say</span></h6>
                            </div>
                        </div><!-- section title end -->
                    </div>
                </div>
                <div class="row mt-75 res-420-mt-0">
                    <div class="col-lg-12">
                        <div class="spacing-35">
                            <div class="bg-base-white">
                                <div class="col-bg-img-four prt-bg prt-col-bgimage-yes spacing-5">
                                    <div class="prt-col-wrapper-bg-layer prt-bg-layer"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row spacing-6">
                    <div class="col-lg-12">
                        <div class="spacing-35">
                            <div class="slick_slider testimonial-01" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "arrows":false, "autoplay":true, "dots":false, "infinite":true, "responsive":[{"breakpoint":992,"settings":{"slidesToShow": 1}},{"breakpoint":840,"settings":{"slidesToShow": 1}}]}'>

                            @foreach(\App\Models\Testimonial::active()->skip(0)->limit(3)->get() as $testimonial)
                                <!-- testimonials -->
                                <div class="testimonials style1">
                                    <div class="testimonial-content">
                                        <div class="testimonial-avatar">
                                            <div class="testimonial-img">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="#b6c134" class="bi bi-person" viewBox="0 0 16 16">
                                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="testimonial-caption">
                                            <span>{{$testimonial->name}}</span>
                                            <label> - {{$testimonial->designation}}</label>
                                        </div>
                                        <blockquote>
                                            {{$testimonial->comment}}
                                        </blockquote>
                                        <div class="star-ratings">
                                            <ul class="rating">
                                                @for($i=0; $i < 5; $i++)
                                                    @if($i <= $testimonial->rating)
                                                        <li>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                            </svg>
                                                        </li>
                                                    @else
                                                        <li>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                            </svg>
                                                        </li>
                                                    @endif
                                                @endfor
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- testimonials end -->
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-section-end -->
    <!-- testimonial-section -->

        <!--medical associates-->
        <section class="prt-row home01-about-section bg-base-white clearfix pb-10">
            <div class="container">
                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 spacing-2">
                        <div class="col-12 text-center">
                            <h6>Medical Associates</h6>
                        </div>
                        <!-- slick_slider -->
                        <div class="slick_slider client-01" data-slick='{"slidesToShow": 6, "slidesToScroll": 1, "arrows":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1200,"settings":{"slidesToShow": 4}}, {"breakpoint":1024,"settings":{"slidesToShow": 3}}, {"breakpoint":777,"settings":{"slidesToShow": 2}},{"breakpoint":575,"settings":{"slidesToShow": 1}},{"breakpoint":380,"settings":{"slidesToShow": 1}}]}'>
                            <div class="client-box">
                                <div class="prt-client-logo-tooltip">
                                    <div class="prt-client-logo-tooltip-inner">
                                        <div class="client-thumbnail">
                                            <img loading='lazy' width="120" height="auto" class="img-fluid" src="{{asset('static/images/apollo-diagnostics-logo.webp')}}" alt="Apollo Diagnostics Associate of {{env('APP_NAME')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="client-box">
                                <div class="prt-client-logo-tooltip">
                                    <div class="prt-client-logo-tooltip-inner">
                                        <div class="client-thumbnail">
                                            <img loading='lazy' width="120" height="auto" class="img-fluid" src="{{asset('static/images/apollo24x7-logo.webp')}}" alt="Apollo 24x7 Associate of {{env('APP_NAME')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="client-box">
                                <div class="prt-client-logo-tooltip">
                                    <div class="prt-client-logo-tooltip-inner">
                                        <div class="client-thumbnail">
                                            <img loading='lazy' width="120" height="auto" class="img-fluid" src="{{asset('static/images/techno-india-dama-logo.webp')}}" alt="Techno India Dama Hospital Associate of {{env('APP_NAME')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="client-box">
                                <div class="prt-client-logo-tooltip">
                                    <div class="prt-client-logo-tooltip-inner">
                                        <div class="client-thumbnail">
                                            <img loading='lazy' width="280" height="auto" class="img-fluid" src="{{asset('static/images/park-clinic-logo.webp')}}" alt="Park Clinic Associate of {{env('APP_NAME')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="client-box">
                                <div class="prt-client-logo-tooltip">
                                    <div class="prt-client-logo-tooltip-inner">
                                        <div class="client-thumbnail">
                                            <img loading='lazy' width="100" height="auto" class="img-fluid" src="{{asset('static/images/sanitas-logo.webp')}}" alt="Sanitas Associate of {{env('APP_NAME')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- prt-client end -->
                    </div>
                </div>
            </div>
        </section>
        <!--medical associates-->

        <!-- our-associates-section -->
    @include('frontend.home.associates')
    <!-- our-associates-section-end -->

        <!--logo-->
        <section class="prt-row home01-about-section bg-dark clearfix pb-10">
            <div class="container">
                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 pb-25">
                        <!-- slick_slider -->
                        <div class="slick_slider client-01" data-slick='{"slidesToShow": 6, "slidesToScroll": 1, "arrows":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1200,"settings":{"slidesToShow": 4}}, {"breakpoint":1024,"settings":{"slidesToShow": 3}}, {"breakpoint":777,"settings":{"slidesToShow": 2}},{"breakpoint":575,"settings":{"slidesToShow": 1}},{"breakpoint":380,"settings":{"slidesToShow": 1}}]}'>
                            <div class="client-box">
                                <div class="prt-client-logo-tooltip">
                                    <div class="prt-client-logo-tooltip-inner">
                                        <div class="client-thumbnail">
                                            <img loading='lazy' width="180" height="auto" class="img-fluid rounded" src="{{asset('/static/images/etrade.webp')}}" alt="Apollo Diagnostics Associate of {{env('APP_NAME')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="client-box">
                                <div class="prt-client-logo-tooltip">
                                    <div class="prt-client-logo-tooltip-inner">
                                        <div class="client-thumbnail">
                                            <img loading='lazy' width="180" height="auto" class="img-fluid rounded" src="{{asset('/static/images/msme.webp')}}" alt="Apollo 24x7 Associate of {{env('APP_NAME')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="client-box">
                                <div class="prt-client-logo-tooltip">
                                    <div class="prt-client-logo-tooltip-inner">
                                        <div class="client-thumbnail">
                                            <img loading='lazy' width="180" height="auto" class="img-fluid rounded" src="{{asset('static/images/startup-india.webp')}}" alt="Titan Eye Plus Associate of {{env('APP_NAME')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- prt-client end -->
                    </div>
                </div>
            </div>
        </section>
        <!--logo-->

    </div><!-- site-main end-->

    <script>
        $(document).ready(function (){
            if (window.navigator.userAgent.indexOf("Mobile") > -1) {
                $("#loadNoticeBoard").load("{{url('loadNoticeBoard/mobile')}}");
            }
            else{
                $("#loadNoticeBoard").load("{{url('loadNoticeBoard/desktop')}}");
            }
        });
    </script>
@endsection
