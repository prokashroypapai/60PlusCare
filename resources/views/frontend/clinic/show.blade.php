@extends('frontend.layout.app')
@section('content')

    <!-- page-title -->
    <!--<div class="prt-page-title-row prt-bg prt-bgimage-yes" style="background-image: url({{asset(isset($clinic->clinicPicture->image_full) ? $clinic->clinicPicture->image_full : \App\Models\Picture::getDefaultImage()->image_full)}})">
        <div class="prt-page-title-row-inner prt-bg-layer bg-base-bodycolor">
            <div class="prt-page-title-row-wrapper-inner"></div>
        </div>
        <div class="layer-content">
            <div class="container-fluid p-0">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="prt-page-title-row-heading">
                            <div class="page-title-heading">
                                <h2 class="title">{{$clinic->clinic_name}}</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a href="{{url('/')}}">Home</a>
                                </span>
                                <span>
                                    <a href="{{url('clinic/' . $clinic->clinic_slug)}}">{{$clinic->clinic_name}}</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
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
                                                        <img width="672" height="472" class="img-fluid" src="{{asset(isset($clinic->clinicPicture->image_full) ? $clinic->clinicPicture->image_full : \App\Models\Picture::getDefaultImage()->image_full)}}" alt="image">
                                                    </div>
                                                </div><!-- prt-featured-wrapper end-->
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="prt-team-member-detail">
                                                    <div class="prt-team-member-single-list">
                                                        <h1 class="prt-team-member-single-title"><span>60 Plus Clinic</span> in {{$clinic->clinic_name}}</h1>
                                                        <div class="prt-short-desc">
                                                            {{$clinic->clinic_address}}
                                                        </div>
                                                        <div class="prt-team-data">
                                                            <div class="prt-team-details-wrapper">
                                                                <p>
                                                                    {{$clinic->clinic_description}}
                                                                </p>
                                                                <p>
                                                                    {!! $clinic->clinic_map !!}
                                                                </p>
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
                </div>
            </div>
        </section>
        <!--member-info-section-end-->

    </div><!--site-main end-->
@endsection
