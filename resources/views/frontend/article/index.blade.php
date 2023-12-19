@extends('frontend.layout.app')
@section('content')

    <!-- page-title -->
    <div class="prt-page-title-row prt-bg prt-bgimage-yes" style="background-image: url({{asset($articles[0]->articlePicture->image_full)}})">
        <div class="prt-page-title-row-inner prt-bg-layer bg-base-bodycolor">
            <div class="prt-page-title-row-wrapper-inner"></div>
        </div>
        <div class="layer-content">
            <div class="container-fluid p-0">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="prt-page-title-row-heading">
                            <div class="page-title-heading">
                                <h2 class="title">Articles</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a href="{{ url('/') }}">Home</a>
                                </span>
                                <span>
                                    <a href="{{ url('article') }}">Articles</a>
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

        <!--grid-section-->
        <section class="prt-row grid-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">

                    @foreach($articles as $article)
                    <div class="col-lg-6 col-md-6">
                        <div class="row g-0 featured-imagebox featured-imagebox-blog style3">
                            <div class="col-xl-6 col-lg-12">
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="{{asset(isset($article->articlePicture->image_thumb) ? $article->articlePicture->image_thumb : \App\Models\Picture::getDefaultImage()->image_thumb)}}" width="300" height="300" alt="blog-04">
                                    <div class="prt-box-post-date">
                                        <div class="entry-date"><span>{{\Carbon\Carbon::parse($article->posted_at)->format('d')}}</span>{{\Carbon\Carbon::parse($article->posted_at)->format('F')}}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="featured-content-wrapper">
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3><a href="{{url('article/' . $article->slug)}}">{{$article->title}}</a></h3>
                                        </div>
                                        <div class="ser_category">
                                            <span>{{$article->articleUser->name}}</span>
                                            <span>/</span>
                                            <span>{{$article->num_of_views}} Views</span>
                                        </div>
                                        <div class="prt-horizontal_sep mt-20 mb-20"></div>
                                        <div class="featured-desc">
                                            <p>{{ Str::limit(strip_tags($article->description), 155) }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <!-- row end -->
            </div>
        </section>
        <!--grid-section end-->

    </div><!--site-main end-->
@endsection
