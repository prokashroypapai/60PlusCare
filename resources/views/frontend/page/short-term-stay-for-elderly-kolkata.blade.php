@extends('frontend.layout.app')
@section('content')

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
                                    <h1>Short Term Stay Facility for Elderly in Kolkata</h1>
                                </div>
                            </div>
                            <div class="">
                                <p>
                                    Planning for vacation or occasion while concerned about your elderly parents alone at home? {{ env('APP_NAME') }} offers Short Term Staying Facility for Elders in Kolkata.
                                    Providing dedicating medical & non medical care for your parents, giving complete home atmosphere with Male,/Female Attendant (24x7 Service), Doctor visits, Emergency medical assurance.
                                </p>
                                <h3>Benefits from {{ env('APP_NAME') }} Short Term Stay Facility for Elders</h3>
                                <p>
                                    Well, it is important why you avail the Short Term Stay Facility from {{ env('APP_NAME') }}. We are providing Short Term Stay Facility with both Medical & non Medical Services.
                                    Not only giving staying facility also Doctor visit, care manager visits, 24x7 Attendant Services with regular monitoring and top most priority is security. We completely take care of your elder parents while you are away.
                                </p>
                                <ul>
                                    <li>At Home Ecg, Holter, Portable X-Ray, Eeg, Ncv</li>
                                    <li>360 Degree Proactive Elder Care Service*</li>
                                    <li>24x7 Medical Emergency</li>
                                    <li>Doctor Home Visit | Complete Home Care Solutions</li>
                                </ul>
                                <button class="registerBtn" onclick='window.location.href="tel:+918296111777"'>Call our Customer Support</button>
                                <h3 class="pt-5">{{env('APP_NAME')}} is the best & most trusted Temporary Stay Facility for Elders in Kolkata</h3>
                                <p>
                                    With Complete 360 Degree Medical Care facility along with 24x7 Medical Emergency we provide best & most Trusted Temporary Stay facility like your home in Kolkata.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 res-1199-mt-30 align-self-center">
                        <div class="prt_single_image-wrapper text-start">
                            <img width="686" height="568" class="img-fluid rounded" src="{{asset('static/images/short-term-stay-elderly-kolkata.webp')}}" alt="Patient Study at 60 Plus Care">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end-->

    </div><!--site-main end-->
@endsection
