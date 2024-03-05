@extends('frontend.layout.app')
@section('content')

    <!-- page-title -->
    <div class="prt-page-title-row prt-bg prt-bgimage-yes" style="background-image: url({{asset('static/images/single-img-25.jpg')}})">
        <div class="prt-page-title-row-inner prt-bg-layer bg-base-bodycolor">
            <div class="prt-page-title-row-wrapper-inner"></div>
        </div>
        <div class="layer-content">
            <div class="container-fluid p-0">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="prt-page-title-row-heading">
                            <div class="page-title-heading">
                                <h2 class="title">Error</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                    <span>
                                        <a href="{{url('/')}}">Home</a>
                                    </span>
                                <span>
                                    <a href="#">Page Not Found</a>
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

        <!--error-404-->
        <section class="error-404">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <div class="page-header">
                                <div class="page-title">
                                    <h2>404</h2>
                                </div>
                            </div>
                            <div class="page-content">
                                <h3>Page Not Found</h3>
                                <p>Sorry, this page may has been moved, deleted or maybe you just mis-typed the URL.</p>
                            </div>
                            <a class="prt-btn prt-btn-shape-round prt-btn-style-fill prt-btn-color-skin" href="{{url('/')}}">BACK TO HOME</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--error-404 end-->

    </div><!--site-main end-->
@endsection
