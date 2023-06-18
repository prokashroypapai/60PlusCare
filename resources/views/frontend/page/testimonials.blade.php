@extends('frontend.layout.app')
@section('content')

    <!-- page-title -->
    <div class="prt-page-title-row prt-bg prt-bgimage-yes" style="background-image: url({{asset('static/images/bgimage-12.jpg')}})">
        <div class="prt-page-title-row-inner prt-bg-layer bg-base-bodycolor">
            <div class="prt-page-title-row-wrapper-inner"></div>
        </div>
        <div class="layer-content">
            <div class="container-fluid p-0">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="prt-page-title-row-heading">
                            <div class="page-title-heading">
                                <h2 class="title">Testimonials</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                    <span>
                                        <a href="{{url('/')}}">Home</a>
                                    </span>
                                <span>
                                        <a href="#">Testimonials</a>
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

        <!-- testimonial-section -->
        <section class="prt-row service02-testimonial-section bg-base-grey clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section title -->
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h2>What our <span>client say</span></h2>
                            </div>
                        </div><!-- section title end -->
                    </div>
                </div>
                <div class="row mt-75 res-420-mt-0">
                    <div class="col-lg-12">
                        <div class="spacing-35">
                            <div class="bg-base-white">
                                <div class="col-bg-img-four prt-bg prt-col-bgimage-yes spacing-5">
                                    <div class="prt-col-wrapper-bg-layer prt-bg-layer"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row spacing-6">
                    <div class="col-lg-12">
                        <div class="spacing-35">
                            <div class="slick_slider testimonial-01" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "arrows":true, "autoplay":true, "dots":false, "infinite":true, "responsive":[{"breakpoint":992,"settings":{"slidesToShow": 1}},{"breakpoint":840,"settings":{"slidesToShow": 1}}]}'>

                                @foreach(\App\Models\Testimonial::active()->get() as $testimonial)
                                <!-- testimonials -->
                                <div class="testimonials style1">
                                    <div class="testimonial-content">
                                        <div class="testimonial-avatar">
                                            <div class="testimonial-img">
                                                <img width="148" height="145" class="img-fluid" src="{{$testimonial->testimonialPicture->image_thumb}}" alt="testimonial-img">
                                            </div>
                                        </div>
                                        <div class="testimonial-caption">
                                            <h3>{{$testimonial->name}}</h3>
                                            <label> - {{$testimonial->designation}}</label>
                                        </div>
                                        <blockquote>
                                            {{$testimonial->comment}}
                                        </blockquote>
                                        <div class="star-ratings">
                                            <ul class="rating">
                                                @for($i=1;$i<=5;$i++)
                                                    @if($i <= $testimonial->rating)
                                                        <li><i class="fa fa-star"></i></li>
                                                    @else
                                                        <li><i class="fa fa-star-o"></i></li>
                                                    @endif
                                                @endfor
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- testimonials end -->
                                    @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-section-end -->

    </div><!--site-main end-->

@endsection
