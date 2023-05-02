<div id="site-header-menu" class="site-header-menu">
    <div class="site-header-menu-inner prt-stickable-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!--site-navigation -->
                    <div class="site-navigation d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center justify-content-start">
                            <!-- site-branding -->
                            <div class="site-branding">
                                <h1>
                                    <a class="home-link" href="{{url('/')}}" title="60pluscare" rel="home">
                                        <img id="logo-img" width="172" height="48" class="img-fluid auto_size" src="{{ asset('static/images/logo.png') }}" alt="Logo">
                                    </a>
                                </h1>
                            </div><!-- site-branding end -->
                            <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                <span class="menubar-box">
                                    <span class="menubar-inner"></span>
                                </span>
                            </div>
                            <!-- menu -->
                            <nav class="main-menu menu-mobile" id="menu">
                                <ul class="menu slide-menu">
                                    <li class="">
                                        <a href="{{url('/')}}">Home</a>
                                    </li>
                                    <li class="">
                                        <a href="{{url('/about')}}">About</a>
                                    </li>
                                    <li class="mega-menu-item">
                                        <a href="#" class="mega-menu-link">Services</a>
                                        <ul class="mega-submenu">
                                            <li>
                                                <div class="row">
                                                    <div class="col-menu col-xl-12 col-lg-12">
                                                        <div class="content">
                                                            <ul class="menu-col">
                                                                <li><a href="{{url('services')}}">All Services</a></li>
                                                                <li><a href="{{url('services/physiotherapy')}}">Physiotherapy</a></li>
                                                                <li><a href="{{url('services/diet-nutrition')}}">Diet & Nutrition</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-item megamenu-fw">
                                        <a href="#" class="mega-menu-link">Knowledge</a>
                                        <ul class="mega-submenu megamenu-content" role="menu">
                                            <li>
                                                <div class="row">
                                                    <div class="col-menu col-xl-3 col-lg-12">
                                                        <h3 class="title">About 60 Plus Care</h3>
                                                        <div class="content">
                                                            <ul class="menu-col">
                                                                <li><a href="{{url('packages')}}">Packages</a></li>
                                                                <li><a href="{{url('doctors')}}">Doctors</a></li>
                                                                <li><a href="{{url('patient-study')}}">Patient Study</a></li>
                                                                <li><a href="{{url('physiotherapy')}}">Physiotherapy</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-menu col-xl-3 col-lg-12">
                                                        <h3 class="title">Locations</h3>
                                                        <div class="content">
                                                            <ul class="menu-col">
                                                                @foreach(\App\Models\Location::active()->select('location_name', 'location_slug')->get() as $location)
                                                                    <li><a href="{{url('city/' . $location->location_slug)}}">{{ $location->location_name }}</a></li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-menu col-xl-3 col-lg-12">
                                                        <h3 class="title">Other Links</h3>
                                                        <div class="content">
                                                            <ul class="menu-col">
                                                                <li><a href="{{url('gallery')}}">Gallery</a></li>
                                                                <li><a href="{{url('article')}}">Article</a></li>
                                                                <li><a href="{{url('faq')}}">FAQ</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-menu col-xl-3 col-lg-12">
                                                        <div class="content">
                                                            <ul class="menu-col-img">
                                                                <li>
                                                                    <a href="about.html">
                                                                        <img class="img-fluid" src="https://pbs.twimg.com/media/FDZuWk_VgAgKWZ9?format=jpg&name=medium" alt="bimg">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-item">
                                        <a href="{{url('contact')}}">Contact</a>
                                    </li>
                                </ul>
                            </nav><!-- menu end -->
                        </div>
                        <div class="d-flex align-items-center justify-content-end">
                            <!-- header_extra -->
                            <div class="header_extra d-flex flex-row align-items-center">
                                <div class="header_item">
                                    <a class="" href="mailto:info@60plusclinic.com">info@60plusclinic.com</a>
                                </div>
                                <div class="header_item">
                                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                    <span><a href="tel:+918296111777">+91 8296 111 777</a></span>
                                </div>
                                <div class="header_item">
                                    <ul class="social-icons">
                                        <li><a href="https://www.facebook.com/" aria-label="facebook"><i class="fontello icon-facebook"></i></a>
                                        </li>
                                        <li><a href="https://twitter.com/" aria-label="twitter"><i class="fontello icon-twitter"></i></a>
                                        </li>
                                        <li><a href="https://instagram.com/" aria-label="instagram"><i class="fontello icon-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- header_extra end -->
                        </div>
                    </div><!-- site-navigation end-->
                </div>
            </div>
        </div>
    </div>
</div>
