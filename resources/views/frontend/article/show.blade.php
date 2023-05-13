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
                                <h2 class="title">{{$article->title}}</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                    <span>
                                        <a href="{{url('/')}}">Home</a>
                                    </span>
                                <span>
                                        <a href="{{url('articles')}}">Articles</a>
                                    </span>
                                <span>
                                        <a href="#">{{$article->title}}</a>
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
        <div class="sidebar prt-sidebar-right bg-layer-equal-height clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-8 content-area">
                        <div class="prt-bg prt-col-bgcolor-yes prt-left-span">
                            <div class="prt-col-wrapper-bg-layer prt-bg-layer"></div>
                            <div class="layer-content">
                                <!-- post -->
                                <article class="post prt-blog-single clearfix">
                                    <!-- post-featured-wrapper -->
                                    <div class="prt-post-featured-wrapper prt-featured-wrapper">
                                        <div class="prt-post-featured">
                                            <img class="img-fluid" src="{{asset($article->articlePicture->image_full)}}" alt="blog-img">
                                        </div>
                                    </div><!-- post-featured-wrapper end -->
                                    <!-- prt-blog-classic-content -->
                                    <div class="prt-blog-single-content">
                                        <div class="prt-post-entry-header">
                                            <div class="prt-post-by">
                                                <div class="prt-post-avatar">
                                                    <div class="prt-post-avatar-img">
                                                        <img class="img-fluid" src="{{asset('static/images/favicon.png')}}"
                                                             width="40" height="40" alt="image">
                                                    </div>
                                                    <div class="prt-post-caption">
                                                        <span>By<label class="fs-16 fw-600 pl-5">{{$article->articleUser->name}}</label></span>
                                                    </div>
                                                </div>
                                                <div class="post-meta">
                                                    <span class="prt-meta-line date"><time class="entry-date published">{{\Carbon\Carbon::parse($article->posted_at)->format('F d, Y')}}</time></span>
                                                    <span class="prt-meta-line comment"><a href="#">{{$article->num_of_views}} Views</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="prt-horizontal_sep mt-20 mb-25"></div>
                                        <div class="entry-content">
                                            <div class="prt-box-desc-text">
                                                {!! $article->description !!}
                                            </div>
                                        </div>
                                    </div><!-- prt-blog-classic-content end -->

                                    <div class="prt-horizontal_sep mt-20 res-575-mt-30"></div>

                                </article><!-- post end -->
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </div>
        <!--grid-section end-->

    </div><!--site-main end-->

@endsection
