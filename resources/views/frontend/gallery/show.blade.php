@extends('frontend.layout.app')
@section('content')

    <!-- page-title -->
    <div class="prt-page-title-row prt-bg prt-bgimage-yes bgimage-pet-01" style="background-image: url({{ asset(isset($gallery->galleryImages[0]->GalleryPicture->image_thumb) ? $gallery->galleryImages[0]->GalleryPicture->image_thumb : \App\Models\Picture::getDefaultImage()->image_thumb) }})">
        <div class="prt-page-title-row-inner prt-bg-layer bg-base-bodycolor">
            <div class="prt-page-title-row-wrapper-inner"></div>
        </div>
        <div class="layer-content">
            <div class="container-fluid p-0">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="prt-page-title-row-heading">
                            <div class="page-title-heading">
                                <h2 class="title">{{$gallery->gallery_name}}</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                    <span>
                                        <a title="Homepage" href="{{url('/')}}">Home</a>
                                    </span>
                                <span>
                                        <a href="{{url('gallery')}}">Gallery</a>
                                    </span>
                                <span>
                                        <a href="#">{{$gallery->gallery_name}}</a>
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

        <!-- gallery section -->
        <section class="prt-row about03-team-section bg-base-grey pt-20 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section title -->
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h2><span>{{$gallery->gallery_name}}</span></h2>
                            </div>
                        </div><!-- section title end -->
                    </div>
                </div>
                <div class="row slick_slider team-01 mt_15" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "arrows":false, "autoplay":true, "dots":false, "infinite":true, "responsive":[{"breakpoint":992,"settings":{"slidesToShow": 3}},{"breakpoint":767,"settings":{"slidesToShow": 2}},{"breakpoint":575,"settings":{"slidesToShow": 1}},{"breakpoint":480,"settings":{"slidesToShow": 1}}]}'>

                    @foreach($gallery->galleryImages as $gImage)
                        <div class="col-lg-3">
                            <div class="featured-imagebox featured-imagebox-team style2">
                                <div class="featured-thumbnail">
                                    <a href="{{asset(isset($gImage->GalleryPicture->image_full) ? $gImage->GalleryPicture->image_full : \App\Models\Picture::getDefaultImage()->image_full)}}">
                                        <img class="img-fluid" src="{{asset(isset($gImage->GalleryPicture->image_thumb) ? $gImage->GalleryPicture->image_thumb : \App\Models\Picture::getDefaultImage()->image_thumb)}}" width="277" height="301" alt="image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section>
        <!-- gallery section -->

    </div><!--site-main end-->

@endsection
