@extends('frontend.layout.app')
@section('content')

    <!-- page-title -->
    <div class="prt-page-title-row prt-bg prt-bgimage-yes" style="background-image: url({{asset('static/images/bgimage-9.webp')}})">
        <div class="prt-page-title-row-inner prt-bg-layer bg-base-bodycolor">
            <div class="prt-page-title-row-wrapper-inner"></div>
        </div>
        <div class="layer-content">
            <div class="container-fluid p-0">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="prt-page-title-row-heading">
                            <div class="page-title-heading">
                                <h2 class="title">Team Of Doctors & Elder care Professionals</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a href="{{url('/')}}">Home</a>
                                </span>
                                <span>
                                    <a href="#">
                                        Doctors
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

        <!-- team-section -->
        <section class="prt-row team-section bg-base-grey clearfix">
            <div class="container">
                <div class="row mt_15">

                    @foreach(\App\Models\Doctor::active()->get() as $doctor)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="featured-imagebox featured-imagebox-team">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset($doctor->doctorPicture->image_thumb)}}" width="277" height="301" alt="{{$doctor->doctor_name}} at {{env('APP_NAME')}}">
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
            </div>
        </section>
        <!-- team-section -->

    </div><!--site-main end-->
@endsection
