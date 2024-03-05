@extends('frontend.layout.app')
@section('content')

    <!--site-main start-->
    <div class="site-main">

        <!-- services-section -->
        <section class="prt-row service03-service-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section title -->
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h1>Find 60 Plus Care & Clinics in Kolkata</h1>
                            </div>
                        </div><!-- section title end -->
                    </div>
                </div>
                <div class="row mt_15" >

                    @foreach(\App\Models\Clinic::active()->select('picture_id', 'clinic_name', 'clinic_slug', 'clinic_address')->get() as $clinic)
                    <div class="col-lg-4 col-6">
                        <div class="featured-imagebox featured-imagebox-services bg-base-grey text-center">
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>
                                        <a href="{{ url('/clinic/' . $clinic->clinic_slug) }}" title="Find 60 Plus Clinic at {{ $clinic->clinic_name }}">60 Plus Clinic at {{ $clinic->clinic_name }}</a>
                                    </h3>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        {{$clinic->clinic_address}}
                                    </p>
                                </div>
                            </div>
                            <div class="featured-thumbnail">
                                <img class="img-fluid rounded" src="{{ asset($clinic->clinicPicture->image_thumb) }}" width="447" height="191" alt="Find 60 Plus Clinic at {{ $clinic->clinic_name }}">
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bottom-direction-link">
                            Looking for Elder Care Clinic near your home? Find our 60 Plus Clinic for Elder Care ta your Doorstep. We offer best senior care support in Kolkata providing
                            best solution for geriatric treatment in Kolkata. 60 Plus Clinic provides best parent care <a href="{{ url('/services') }}" class="prt-btn prt-btn-size-md prt-btn-color-skincolor btn-inline btn-underline">services</a> in Kolkata.
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services-section -->



    </div>

@endsection
