@extends('frontend.layout.app')
@section('content')


    <!--site-main start-->
    <div class="site-main" style="margin-top: 100px">

        <!-- padding_bottom_zero-section -->
        <section class="prt-row faq-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="spacing-26 bg-base-grey">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-center">
                                        <h3 class="fs-28 mb-0">{{$page->page_title}}</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    {!! $page->description !!}
                                </div>
                            </div><!-- row end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- padding_bottom_zero-section end -->
    </div><!--site-main end-->

@endsection
