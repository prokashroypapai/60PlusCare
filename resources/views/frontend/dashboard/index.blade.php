@extends('frontend.layout.app')
@section('content')

    <!-- page-title -->
    <div class="prt-page-title-row prt-bg prt-bgimage-yes">
        <div class="prt-page-title-row-inner prt-bg-layer bg-base-bodycolor">
            <div class="prt-page-title-row-wrapper-inner"></div>
        </div>
        <div class="layer-content">
            <div class="container-fluid p-0">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="prt-page-title-row-heading">
                            <div class="page-title-heading">
                                <h2 class="title">team details</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                    <span>
                                        <a href="{{url('/')}}">Home</a>
                                    </span>
                                <span>
                                        <a href="{{url('dashboard')}}">Dashboard</a>
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
                                                <div class="prt-team-member-detail">
                                                    <div class="prt-team-member-single-list">
                                                        <h2 class="prt-team-member-single-title">{{Auth::user()->name}}</h2>
                                                        <span class="prt-team-member-single-position">{{Auth::user()->mobile}}</span>
                                                        <div class="prt-short-desc">{{isset($user->userProfile->address) ? $user->userProfile->address : 'NA'}}, {{isset($user->userProfile->city) ? $user->userProfile->city : 'NA'}}, {{isset($user->userProfile->pin_code) ? $user->userProfile->pin_code : 'NA'}}</div>
                                                        <div class="prt-team-data">
                                                            <div class="prt-team-details-wrapper">
                                                                <ul class="prt-team-details-list clearfix">
                                                                    <li>
                                                                        <div class="prt-team-list-title">Package: </div>
                                                                        <div class="prt-team-list-value">
                                                                            <span class="badge bg-success">ACTIVE</span>
                                                                            <span class="badge bg-danger">INACTIVE</span>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="prt-team-list-title">Email: </div>
                                                                        <div class="prt-team-list-value"> {{Auth::user()->email}}</div>
                                                                    </li>
                                                                </ul>
                                                                <p>
                                                                    <a href="#">Change Password</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!--<div class="prt-team-member-social-contact">
                                                            <div class="prt-social-links-wrapper mt-20">
                                                                <ul class="social-icons">
                                                                    <li class="social-facebook">
                                                                        <a target="_blank" href="https://www.facebook.com/cymolthemes.191219"><i class="icon-facebook" aria-hidden="true"></i></a>
                                                                    </li>
                                                                    <li class="social-twitter">
                                                                        <a target="_blank" href="https://twitter.com/CymolThemes"><i class="icon-twitter" aria-hidden="true"></i></a>
                                                                    </li>
                                                                    <li class="social-pinterest">
                                                                        <a target="_blank" href="https://in.pinterest.com/cymolthemes/"><i class="icon-pinterest" aria-hidden="true"></i></a>
                                                                    </li>
                                                                    <li class="social-instagram">
                                                                        <a target="_blank" href="https://www.instagram.com/cymol_themes/"><i class="icon-instagram" aria-hidden="true"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="d-sm-flex justify-content-start align-items-center mt-20">
                                                                <div class="pl-10 pr-10 res-575-pl-0 res-575-mb-10">
                                                                    <span>Have Any Question Call us:</span>
                                                                </div>
                                                                <div class="align-self-center">
                                                                    <div class="whatsapp-contact">
                                                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                                                        <span><a href="tel:564654654455">+123 456 7890</a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="row">
                                                    <div class="col-lg-12 align-self-center">
                                                        <h3 class="fs-28 mb-0 res-991-mb-15">Packages</h3>

                                                        @foreach(\App\Models\Package::active()->get() as $package)
                                                        <div class="featured-icon-box icon-align-before-content style10">
                                                            <div class="featured-content rounded {{in_array($package->id, $subscriptions) ? 'activeClass' : null}}" style="padding-left: 0; background-color: #fff; padding: 15px;">
                                                                @if(in_array($package->id, $subscriptions))
                                                                    <span style="background-color: #009928; position: absolute; float: right; top: 0;right: 0;padding: 3px;color: #fff; font-size: 14px;">Current Package</span>
                                                                @endif

                                                                <div class="featured-title">
                                                                    <h3>{{$package->package_name}}</h3>
                                                                </div>
                                                                <div class="featured-desc">
                                                                    <p class="py-3">
                                                                        {{\Illuminate\Support\Str::limit(strip_tags($package->package_details), 150)}}
                                                                    </p>
                                                                    <h5>
                                                                        ₹ {{$package->package_price}}
                                                                        <span>per {{$package->package_price_duration}}</span>
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach

                                                        <style>
                                                            .activeClass{
                                                                border: 2px solid #009928;
                                                            }
                                                        </style>

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
