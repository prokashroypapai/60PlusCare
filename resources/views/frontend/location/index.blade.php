@extends('frontend.layout.app')
@section('content')

    <!-- page-title -->
    <div class="prt-page-title-row prt-bg prt-bgimage-yes" style="background-image: url({{asset(isset($location->locationPicture->image_full) ? $location->locationPicture->image_full : \App\Models\Picture::getDefaultImage()->image_full)}})">
        <div class="prt-page-title-row-inner prt-bg-layer bg-base-bodycolor">
            <div class="prt-page-title-row-wrapper-inner"></div>
        </div>
        <div class="layer-content">
            <div class="container-fluid p-0">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="prt-page-title-row-heading">
                            <div class="page-title-heading">
                                <h2 class="title">{{$location->location_name}}</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a href="{{url('/')}}">Home</a>
                                </span>
                                <span>
                                    <a href="{{url('city/' . $location->location_slug)}}">{{$location->location_name}}</a>
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
                                                        <img width="672" height="472" class="img-fluid" src="{{asset(isset($location->locationPicture->image_full) ? $location->locationPicture->image_full : \App\Models\Picture::getDefaultImage()->image_full)}}" alt="image">
                                                    </div>
                                                </div><!-- prt-featured-wrapper end-->
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="prt-team-member-detail">
                                                    <div class="prt-team-member-single-list">
                                                        <h2 class="prt-team-member-single-title"><span>60 Plus Care in </span>{{$location->location_name}}</h2>
                                                        <div class="prt-short-desc">
                                                            {{$location->location_address}}
                                                        </div>
                                                        <div class="prt-team-data">
                                                            <div class="prt-team-details-wrapper">
                                                                <p>
                                                                    {{$location->location_description}}
                                                                </p>
                                                                <p>
                                                                    {!! $location->location_map !!}
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
