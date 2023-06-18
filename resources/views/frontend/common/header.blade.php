<!-- header start -->
<header id="masthead" class="header prt-header-style-03">
    <!-- topbar -->
    <div class="top_bar prt-topbar-wrapper clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-row align-items-center justify-content-between header-spacing" style="background-color: var(--primaryColor)">
                        <div class="align-self-center">
                            <div class="top_bar_contact_item">
                                <div class="top_bar_icon prt-icon prt-icon_element-onlytxt">
                                    <i class="flaticon flaticon-phone-call"></i>
                                </div>
                                <span><a href="tel:+91 8296111777">+91 8296 111 777</a></span>
                            </div>
                            <div class="top_bar_contact_item">
                                <div class="top_bar_icon prt-icon prt-icon_element-onlytxt"><i class="flaticon flaticon-email"></i></div>
                                <a href="mailto:info@60plusclinic.com">info@60plusclinic.com</a>
                            </div>
                            <div class="top_bar_contact_item">
                                <a href="{{url('dashboard')}}">Member's Zone</a>
                            </div>
                            <div class="top_bar_contact_item">
                                <a href="{{url('admin')}}">Employee's Zone</a>
                            </div>
                            @auth
                                <div class="top_bar_contact_item">
                                    <a href="{{url('logout')}}">Sign Out</a>
                                </div>
                            @endauth
                        </div>
                        <div class="align-self-center">
                            <ul class="social-icons">
                                <li>
                                    <a href="https://twitter.com/60PlusClinic" aria-label="twitter">
                                        <img src="{{asset('static/images/twitter.png')}}" width="30" height="30">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/60PlusClinic" aria-label="facebook">
                                        <img src="{{asset('static/images/facebook.png')}}" width="30" height="30">
                                    </a>
                                </li>
                                <!--<li>
                                    <a href="https://instagram.com/" aria-label="instagram">
                                        <img src="{{asset('static/images/instagram.png')}}" width="30" height="30">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com" aria-label="youtube">
                                        <img src="{{asset('static/images/youtube.png')}}" width="30" height="30">
                                    </a>
                                </li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- topbar end -->

    <!-- site-header-menu -->
    <div id="site-header-menu" class="site-header-menu">
        <div class="site-header-menu-inner prt-stickable-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!--site-navigation -->
                        <div class="site-navigation bg-base-white d-flex align-items-center justify-content-between header-spacing">
                            <div class="d-flex align-items-center justify-content-start">
                                <!-- site-branding -->
                                <div class="site-branding">
                                    <h1>
                                        <a class="home-link" href="{{url('/')}}" title="" rel="home">
                                            <img id="logo-img" width="175" height="49" class="img-fluid auto_size" src="{{ asset('static/images/logo.png') }}" alt="logo-img">
                                        </a>
                                    </h1>
                                </div><!-- site-branding end -->
                            </div>
                            <div class="d-flex align-items-center justify-content-end">
                                <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                            <span class="menubar-box">
                                                <span class="menubar-inner"></span>
                                            </span>
                                </div>
                                <!-- menu -->
                                <nav class="main-menu menu-mobile" id="menu">
                                    <ul class="menu slide-menu">
                                        <li class="mega-menu-item">
                                            <a href="{{url('/')}}">Home</a>
                                        </li>
                                        <li class="mega-menu-item">
                                            <a href="{{url('/services')}}">Services</a>
                                        </li>
                                        <li class="mega-menu-item">
                                            <a href="{{url('/services/physiotherapy')}}">Physiotherapy</a>
                                        </li>
                                        <li class="mega-menu-item megamenu-fw submenu">
                                            <a href="#" class="mega-menu-link">Knowledge</a>
                                            <ul class="mega-submenu megamenu-content" role="menu">
                                                <li>
                                                    <div class="row">
                                                        <div class="col-menu col-xl-3 col-lg-12">
                                                            <h3 class="title">About 60 Plus Care</h3>
                                                            <div class="content">
                                                                <ul class="menu-col">
                                                                    <li><a href="{{url('about')}}">About</a></li>
                                                                    <li><a href="{{url('packages')}}">Packages</a></li>
                                                                    <li><a href="{{url('doctors')}}">Doctors</a></li>
                                                                    <li><a href="{{url('patient-study')}}">Patient Study</a></li>
                                                                    <li><a href="{{url('services/diet-nutrition')}}">Diet & Nutrition</a></li>
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
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-menu col-xl-3 col-lg-12">
                                                            <div class="content">
                                                                <ul class="menu-col-img">
                                                                    <li>
                                                                        <a href="https://pbs.twimg.com/media/FDZuWk_VgAgKWZ9?format=jpg&name=medium">
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
                                            <a href="{{url('testimonials')}}">Testimonials</a>
                                        </li>
                                        <li class="mega-menu-item">
                                            <a href="{{url('contact')}}">Contact</a>
                                        </li>
                                    </ul>
                                </nav><!-- menu end -->
                                <!-- header_extra -->
                                <div class="header_extra d-flex flex-row align-items-center">
                                    <div class="header_item">
                                        <div class="widget_info">
                                            <div class="widget_icon">
                                            </div>
                                            <div class="widget_content">
                                                <button class="registerBtn" onclick='window.location.href="{{url('register')}}"'>REGISTER</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- header_extra end -->
                            </div>
                        </div><!-- site-navigation end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- site-header-menu end-->
</header><!-- header end -->
