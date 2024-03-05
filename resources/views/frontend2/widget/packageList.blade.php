@extends('frontend.layout.app')
@section('content')

    <!-- page-title -->
    <div class="prt-page-title-row prt-bg prt-bgimage-yes" style="background-image: url({{asset('static/images/bgimage-10.jpg')}})">
        <div class="prt-page-title-row-inner prt-bg-layer bg-base-bodycolor">
            <div class="prt-page-title-row-wrapper-inner"></div>
        </div>
        <div class="layer-content">
            <div class="container-fluid p-0">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="prt-page-title-row-heading">
                            <div class="page-title-heading">
                                <h2 class="title">Packages</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a href="{{url('/')}}">Home</a>
                                </span>
                                <span>
                                    <a href="#">
                                        Packages
                                    </a>
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

        <!-- services-section -->
        <section class="prt-row team-section bg-base-grey clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <div class="title-header">
                                <h2>Select Package to Continue</h2>
                            </div>
                            <div class="title-desc">
                                <p>
                                    We provide best packages on Elder Care services. Please select any package to continue
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-50 prt-vertical_sep">

                    @foreach(\App\Models\Package::active()->get() as $package)
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="featured-icon-box icon-align-top-content style11">
                            <div class="featured-icon">
                                <div class="prt-icon prt-icon_element-onlytxt prt-icon_element-size-lg prt-icon_element-color-skin">
                                    <i class="flaticon flaticon-nursing-home"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>{{$package->package_name}}</h3>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        {{$package->package_summary}}
                                    </p>
                                </div>
                                <p>
                                    <a href="{{url('register?package_id=' . $package->id)}}" style="color: var(--primaryColor)">
                                        Proceed with {{$package->package_name}} Package
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- services-section-end -->

    </div><!--site-main end-->

    <style>
        .featured-content p a{
            text-transform: capitalize;
            text-decoration: underline;
            text-underline-offset: 5px;
            color: #d80065;
        }
    </style>
@endsection
