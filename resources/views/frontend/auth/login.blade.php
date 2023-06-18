@extends('frontend.layout.app')
@section('content')

    <!-- page-title -->
    <div class="prt-page-title-row prt-bg prt-bgimage-yes" style="background-image: url({{asset('static/images/bgimage-3.jpg')}})">
        <div class="prt-page-title-row-inner prt-bg-layer bg-base-bodycolor">
            <div class="prt-page-title-row-wrapper-inner"></div>
        </div>
        <div class="layer-content">
            <div class="container-fluid p-0">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="prt-page-title-row-heading">
                            <div class="page-title-heading">
                                <h2 class="title">Login</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                    <span>
                                        <a href="{{url('/')}}">Home</a>
                                    </span>
                                <span>
                                        <a href="#">Login</a>
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

        <!-- contact-form-section -->
        <section class="prt-row contactus-contact-form-section bg-base-grey clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section title -->
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h2>Please <i class="text-base-skin">Login</i> to continue</h2>
                            </div>
                        </div><!-- section title end -->
                    </div>
                </div>
                <div class="row g-0 justify-content-center">
                    <div class="col-lg-5">
                        <div class="bg-base-white spacing-33">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <form action="{{url('login')}}" class="contact_form style2 clearfix" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="mobile">Mobile</label>
                                        @if ($errors->has('mobile'))
                                            <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                        @endif
                                        <input name="mobile" type="text" value="{{old('mobile')}}" placeholder="Enter your mobile">
                                    </div>

                                    <div class="col-md-12">
                                        <label for="password">Password</label>
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                        <input name="password" type="password" value="{{old('password')}}" placeholder="Email Address">
                                    </div>
                                    <div class="mt-5">
                                        <button type="submit" value="submit" class="registerBtn">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-form-section-end -->

    </div><!--site-main end-->
@endsection
