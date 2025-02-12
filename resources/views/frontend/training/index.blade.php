@extends('frontend.layout.app')
@section('content')

    <!--site-main start-->
    <div class="site-main">

        <!--service-->
        <section class="prt-row service01-service-section bg-light clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <!-- section title -->
                        <div class="section-title mt-20 mb-0 res-767-mt_10">
                            <div class="title-header">
                                <h3><span>Trainings</span> at {{ env('APP_NAME') }}</h3>
                            </div>
                            <div class="title-desc">
                                <p>
                                    <button class="registerBtn" onclick='window.location.href="{{ url('/checkCertificate') }}"'>
                                        Check Certificate
                                    </button>
                                </p>
                            </div>
                        </div><!-- section title end -->
                    </div>

                    @foreach($trainings as $training)
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="featured-imagebox featured-imagebox-services style2">
                            <div class="featured-thumbnail">
                                <img loading='lazy' class="img-fluid" src="{{asset(isset($training->trainingPicture->image_thumb) ? $training->trainingPicture->image_thumb : \App\Models\Picture::getDefaultImage()->image_thumb)}}" width="447" height="300" alt="{{ $training->training_title }}">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>
                                        <a class="text-white" href="{{ url('/training/' . $training->training_slug) }}">
                                            {{ $training->training_title }}
                                        </a>
                                    </h5>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        {{ \Illuminate\Support\Str::limit($training->training_details, 100) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!--service-->

    </div><!--site-main end-->
@endsection
