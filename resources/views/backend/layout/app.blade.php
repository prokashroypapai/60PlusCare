<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Portal | {{env('APP_NAME')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Portal | {{env('APP_NAME')}}" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('backend/images/logo_512x512.png')}}">

    <!--Jquery library-->
    <!--<script src="{{asset('backend/js/jquery.min.js')}}"></script>-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>

    <!-- Plugins css -->
    <link href="{{asset('backend/plugins/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/plugins/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/plugins/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/plugins/datatables/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/css/theme.min.css')}}" rel="stylesheet" type="text/css" />

    <script src="https://cdn.tiny.cloud/1/sqhluka7387mo7g05nfaql5ohc4ilv1ou3ehye90iz45bxfo/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: 'textarea#product_name, textarea#product_details, textarea#product_benefit, textarea#product_uses, textarea#story_description, textarea#description',
            menubar: true,
            plugins: 'link',
            toolbar: 'link'
        });
    </script>

    <script>
        $("document").ready(function(){
            $("div.alert").delay(3000).fadeOut(300);
        });
    </script>
    <style>
        .alert-success, .alert-danger{
            position: absolute;
            float: right;
            z-index: 999;
            right: 0;
            top: 0;
        }
    </style>
</head>

<body>

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

<!-- Begin page -->
<div id="layout-wrapper">

    <div class="main-content">

        <header id="page-topbar">
            <div class="navbar-header">
                <!-- LOGO -->
                <div class="navbar-brand-box d-flex align-items-left">
                    <a href="{{url('/admin')}}">
                        <img src="{{asset('backend/images/logo.png')}}" width="100" height="auto"/>
                    </a>

                    <button type="button" class="btn btn-sm mr-2 font-size-16 d-lg-none header-item waves-effect waves-light" data-toggle="collapse" data-target="#topnav-menu-content">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                </div>

                <div class="d-flex align-items-center">

                    <div class="dropdown d-inline-block ml-2">
                        <button type="button" class="btn header-item waves-effect waves-light"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="{{asset('backend/images/logo_512x512.png')}}"
                                 alt="Header Avatar">
                            <span class="d-none d-sm-inline-block ml-1">{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                Settings
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{url('admin/logout')}}">
                                <span>Log Out</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        @include('backend.common.menubar')

        @yield('content')

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="text-center text-lg-left">
                            2023 © {{env('APP_NAME')}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-right d-none d-lg-block">
                            Design & Developed by <a href="https://algoflow.in">Algoflow</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->
</div>
<!-- END layout-wrapper -->




<!-- jQuery  -->
<script src="{{asset('backend/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('backend/js/waves.js')}}"></script>
<script src="{{asset('backend/js/simplebar.min.js')}}"></script>

<!-- third party js -->
<script src="{{asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/dataTables.bootstrap4.js')}}"></script>
<!--<script src="{{asset('backend/plugins/datatables/dataTables.responsive.min.js')}}"></script>-->
<script src="{{asset('backend/plugins/datatables/responsive.bootstrap4.min.js')}}'"></script>
<script src="{{asset('backend/plugins/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/buttons.bootstrap4.min.js')}}'"></script>
<script src="{{asset('backend/plugins/datatables/buttons.html5.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/buttons.flash.min.js')}}'"></script>
<script src="{{asset('backend/plugins/datatables/buttons.print.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/dataTables.keyTable.min.js')}}'"></script>
<script src="{{asset('backend/plugins/datatables/dataTables.select.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/pdfmake.min.js')}}'"></script>
<script src="{{asset('backend/plugins/datatables/vfs_fonts.js')}}"></script>
<!-- third party js ends -->

<!-- Datatables init -->
<script src="{{asset('backend/pages/datatables-demo.js')}}"></script>

<!-- App js -->
<script src="{{asset('backend/js/theme.js')}}"></script>

</body>
</html>
