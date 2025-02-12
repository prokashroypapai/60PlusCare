@extends('frontend.layout.app')
@section('content')

    <!--site-main start-->
    <div class="site-main">
        <!-- contact-form-section -->
        <section class="prt-row conatct-section bg-layer-equal-height clearfix" style="background-image: linear-gradient(#f9fcf2, #f2f3fc)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="mt-15 mb-15">
                            <div class="conatct-section-item block-01 rounded shadow" style="padding-top: 15px;" id="formDiv">
                                <form action="{{url('login')}}" method="post" id="registerForm">
                                    @csrf
                                    <div class="form-group mb-3 text-center">
                                        <img src="{{ asset('static/images/logo.png') }}" class="img-fluid" style="max-width: 200px; height: auto"/>
                                    </div>
                                    <h5 class="text-center">Login</h5>
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
                                    <div class="form-group mb-3">
                                        @if ($errors->has('mobile'))
                                            <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                        @endif
                                        <input type="text" id="mobile" name="mobile" placeholder="Mobile" value="{{old('mobile')}}">
                                    </div>

                                    <div class="form-group mb-3">
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                        <input type="password" id="password" name="password" placeholder="Password" value="{{old('password')}}">
                                    </div>
                                    <div class="form-group py-3">
                                        <button type="submit" class="btn btn-success" id="registerBtn">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-form-section-end -->

    </div><!--site-main end-->
    <style>
        #registerForm label{
            font-size: 16px;
            font-weight: 500;
            color: #333333;
            margin-bottom: 8px;
        }
        #registerForm input[type=text], #registerForm input[type=password]{
            color: #000;
            border-radius: 6px;
            border: 1px solid #cccccc;
            font-size: 14px;
            font-weight: 500;
        }
        #registerForm input[type=text]:focus, #registerForm input[type=password]:focus{
            border: 1px solid #d80065;
        }
        #registerForm button{
            width: 100%;
            background-color: #d80065;
            color: #fff;
            border: 0;
            padding: 10px 0;
            font-size: 18px;
            font-weight: 600;
            outline: none;
        }
        #registerForm button:focus{
            outline: none;
        }
    </style>
@endsection
