<!-- header start -->
<header id="masthead" class="header prt-header-style-01">
    <!-- site-header-menu -->
    <div id="site-header-menu" class="site-header-menu">
        <div class="site-header-menu-inner prt-stickable-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!--site-navigation -->
                        <div class="site-navigation d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-start">
                                <!-- site-branding -->
                                <div class="site-branding">
                                    <a class="home-link" href="{{url('/')}}" title="{{env('APP_NAME')}} Homepage" rel="home">
                                        <img loading="lazy" id="logo-img" class="header01Logo" src="{{ asset('static/images/logo.webp') }}" alt="{{env('APP_NAME')}} Homepage">
                                    </a>
                                </div><!-- site-branding end -->
                                <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                    <span class="menubar-box">
                                        <span class="menubar-inner"></span>
                                    </span>
                                </div>
                                <!-- menu -->
                                <nav class="main-menu menu-mobile" id="menu">
                                    <ul class="menu slide-menu">
                                        <li class="mega-menu-item">
                                            <a href="{{url('/elder-care')}}" title="Elder Care Service by {{ env('APP_NAME') }}">Elder Care</a>
                                        </li>
                                        <li class="mega-menu-item">
                                            <a href="{{url('/packages')}}" title="Affordable Packages offered by {{ env('APP_NAME') }}">Packages</a>
                                        </li>

                                        <li class="mega-menu-item">
                                            <a href="{{ url('clinics') }}" class="mega-menu-link" title="All Clinics at {{ env('APP_NAME') }}">Clinics</a>
                                            <ul class="mega-submenu">
                                                <li>
                                                    <div class="row">
                                                        <div class="col-menu col-xl-12 col-lg-12">
                                                            <div class="content">
                                                                <ul class="menu-col">
                                                                    @foreach(\App\Models\Clinic::active()->select('clinic_name', 'clinic_slug')->get() as $clinic)
                                                                        <li><a href="{{url('clinic/' . $clinic->clinic_slug)}}" title="Visit {{ env('APP_NAME') }} Clinic at {{ $clinic->clinic_name }}">{{ $clinic->clinic_name }}</a></li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="mega-menu-item">
                                            <a href="{{url('/contact')}}" title="Contact {{ env('APP_NAME') }}">Contact</a>
                                        </li>
                                        <li class="mega-menu-item d-block d-xl-none">
                                            <a onclick='window.location.href="{{ url('/dashboard') }}"'>Member's Zone</a>
                                        </li>
                                        <li class="mega-menu-item d-block d-xl-none">
                                            <a onclick='window.location.href="{{ url('/admin') }}"'>Employee's Zone</a>
                                        </li>
                                        <li class="mega-menu-item d-block d-xl-none">
                                            <a href="tel:+919830303450" title="Teleconsultation at {{env('APP_NAME')}}">Teleconsultation</a>
                                        </li>
                                    </ul>
                                </nav><!-- menu end -->
                            </div>
                            <div class="align-self-center d-none d-lg-block">
                                <div class="appointmentBtn">
                                    <button onclick='window.location.href="tel:+919830303450"'>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                                            <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                                            <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                        </svg>
                                        Teleconsultation
                                    </button>
                                </div>
                            </div>
                            <div class="justify-content-end mr-50 mr-md-0 d-none d-lg-block">
                                <!-- header_extra -->
                                <div class="flex-row align-items-center header_item">
                                    <button class="registerBtn" onclick='window.location.href="{{url('register')}}"'>REGISTER</button>
                                </div>
                            </div>
                        </div><!-- site-navigation end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- site-header-menu end-->
</header>
<!-- header end -->
