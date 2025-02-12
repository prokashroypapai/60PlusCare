@extends('frontend.layout.app')
@section('content')

    <!-- page-title -->
    <!--<div class="prt-page-title-row prt-bg prt-bgimage-yes" style="background-image: url({{asset($article->articlePicture->image_full)}})">
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
                                    <a href="{{ url('/') }}">Home</a>
                                </span>
                                <span>
                                    <a href="{{ url('article') }}">Articles</a>
                                </span>
                                <span>
                                    <a href="{{ url('article/' . $article->slug) }}">{{$article->title}}</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
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
                                            <img loading="lazy" class="img-fluid" src="{{asset($article->articlePicture->image_full)}}" alt="blog-img">
                                        </div>
                                    </div><!-- post-featured-wrapper end -->
                                    <!-- prt-blog-classic-content -->
                                    <div class="prt-blog-single-content">
                                        <div class="prt-post-entry-header">
                                            <div class="prt-post-by">
                                                <div class="prt-post-avatar">
                                                    <div class="prt-post-avatar-img">
                                                        <img class="img-fluid" src="{{ asset(\App\Models\Picture::getDefaultImage()->image_small) }}"
                                                             width="40" height="40" alt="image">
                                                    </div>
                                                    <div class="prt-post-caption">
                                                        <span>By<label class="fs-16 fw-600 pl-5">{{$article->author}}</label></span>
                                                    </div>
                                                </div>
                                                <div class="post-meta">
                                                    <span class="prt-meta-line date"><time class="entry-date published" datetime="{{ \Carbon\Carbon::parse($article->created_at)->toIso8601String()}}">{{ Carbon\Carbon::parse($article->created_at)->format('M d, Y') }}</time></span>
                                                    <span class="prt-meta-line comment"><a href="#">{{ $article->num_of_views }} Views</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="prt-horizontal_sep mt-20 mb-25"></div>
                                        <div class="entry-content">
                                            <div class="prt-box-desc-text">

                                                <h1 class="fs-36 mb-20">{{ $article->title }}</h1>

                                                {!! $article->description !!}

                                            </div>
                                        </div>
                                    </div><!-- prt-blog-classic-content end -->

                                    <div class="prt-horizontal_sep mt-20 res-575-mt-30"></div>


                                </article><!-- post end -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 widget-area sidebar-right">
                        <div class="prt-bg prt-col-bgcolor-yes prt-right-span bg-base-grey">
                            <div class="prt-col-wrapper-bg-layer prt-bg-layer"></div>
                            <div class="layer-content">
                                <aside class="widget widget-categories with-title">
                                    <h5>Looking for best elder care solution in Kolkata?</h5>
                                    <p>
                                        {{ env('APP_NAME') }} provides best <strong>elder care services in Kolkata</strong>. Oldest senior care service provider serving since 2008 offers best parent care solutions.
                                    </p>
                                    <ul>
                                        @foreach(\App\Models\Service::active()->get() as $service)
                                            <li><a href="#">{{ $service->service_name }}</a></li>
                                        @endforeach
                                    </ul>
                                    <p class="mt-10">
                                        Any query Please reach our customer care at <a href="tel:+918296111777">(+91) 8296 111 777</a> or email your query to us at <a href="mailto:60pcpl@gmail.com">60pcpl@gmail.com</a>.
                                    </p>
                                </aside>
                                <aside class="widget widget-recent-post with-title">
                                    <h3 class="widget-title">Related Article</h3>
                                    <ul class="widget-post prt-recent-post-list">
                                        @foreach(\App\Models\Article::active()->where('id', '!=', $article->id)->skip(0)->limit(5)->get() as $relatedArticle)
                                        <li>
                                            <div class="post-img">
                                                <img width="80" height="80" src="{{ asset($relatedArticle->articlePicture->image_thumb) }}" alt="{{ $relatedArticle->title }}">
                                            </div>
                                            <div class="post-detail">
                                                <a href="{{ url('article/' . $relatedArticle->slug) }}">
                                                    {{ $relatedArticle->title }}
                                                </a>
                                                <span class="post-date">{{ \Carbon\Carbon::parse($relatedArticle->created_at)->format('d M, Y') }}</span>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </aside>
                            </div>
                        </div>
                    </div>

                </div><!-- row end -->
            </div>
        </div>
        <!--grid-section end-->

    </div><!--site-main end-->


@endsection
