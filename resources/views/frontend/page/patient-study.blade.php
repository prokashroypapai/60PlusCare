@extends('frontend.layout.app')
@section('content')

    <!-- page-title -->
    <div class="prt-page-title-row prt-bg prt-bgimage-yes bgimage-pet-03">
        <div class="prt-page-title-row-inner prt-bg-layer bg-base-bodycolor">
            <div class="prt-page-title-row-wrapper-inner"></div>
        </div>
        <div class="layer-content">
            <div class="container-fluid p-0">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="prt-page-title-row-heading">
                            <div class="page-title-heading">
                                <h2 class="title">Patient Study</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a href="{{url('/')}}">Home</a>
                                </span>
                                <span>
                                    <a href="#">Patient Study</a>
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
                                    <h2>Patient Study</h2>
                                </div>
                            </div>
                            <div class="">
                                <h3>General Information</h3>

                                <p>
                                    Patient education can be defined as the process of influencing patient behavior and producing the changes in knowledge, attitudes and skills necessary to maintain or improve health.
                                </p>
                                <p>
                                    Education may be provided by any healthcare professional who has undertaken appropriate training education, education on patient communication and education is usually included in the healthcare professional's training. Health education is also a tool used by managed care plans, and may include both general preventive education or health promotion and disease or condition specific education.[4] Important elements of patient education are skill building and responsibility: patients need to know when, how, and why they need to make a lifestyle change. Group effort is equally important: each member of the patient's health care team needs to be involved. It can also help the patients by a better lifestyle, it give them the ability to learn new information.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 res-1199-mt-30 align-self-center">
                        <div class="prt_single_image-wrapper text-start">
                            <img width="686" height="568" class="img-fluid" src="{{asset('static/images/patient_book.jpg')}}" alt="single-06">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end-->

    </div><!--site-main end-->
@endsection
