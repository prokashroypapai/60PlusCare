<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login | {{env('APP_NAME')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('backend/images/favicon.ico')}}">

    <!-- App css -->
    <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/css/theme.min.css')}}" rel="stylesheet" type="text/css" />

</head>

<body style="background-image: linear-gradient(45deg, #2e3640, #293340)">

<div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center min-vh-100">
                    <div class="w-100 d-block my-5">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-lg-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center mb-4 mt-3">
                                            <a href="{{url('/')}}">
                                                <span><img src="{{asset('backend/images/logo.png')}}" alt="" width="150" height="auto"></span>
                                            </a>
                                        </div>
                                        <form action="{{url('admin/login')}}" class="p-2" method="post">
                                            @csrf

                                            <div class="form-group">
                                                <label for="mobile">Mobile</label>
                                                @if ($errors->has('mobile'))
                                                    <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                                @endif
                                                <input class="form-control" type="text" id="mobile" name="mobile" placeholder="Enter Mobile number" value="{{old('mobile')}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                @if ($errors->has('password'))
                                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                                @endif
                                                <input class="form-control" type="password" id="password" name="password" placeholder="Enter your password">
                                            </div>

                                            <div class="mb-3 text-center">
                                                <button class="btn btnTheme btn-block" type="submit"> Sign In </button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->

                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div> <!-- end .w-100 -->
                </div> <!-- end .d-flex -->
            </div> <!-- end col-->
        </div> <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->

<!-- jQuery  -->
<script src="{{asset('backend/js/jquery.min.js')}}"></script>
<script src="{{asset('backend/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('backend/js/metismenu.min.js')}}"></script>
<script src="{{asset('backend/js/waves.js')}}"></script>
<script src="{{asset('backend/js/simplebar.min.js')}}"></script>

<!-- App js -->
<script src="{{asset('backend/js/theme.js')}}"></script>

</body>
</html>
