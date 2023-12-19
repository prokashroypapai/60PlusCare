<!-- header start -->
<header id="masthead" class="header prt-header-style-01">
    <!-- topbar -->
    <div class="top_bar prt-topbar-wrapper bg-base-skin-Primary clearfix d-none d-xl-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-row align-items-center justify-content-between header-spacing">

                        <div class="align-self-center">
                            <div class="top_bar_contact_item" id="callIcon">
                                <div class="top_bar_icon prt-icon prt-icon_element-onlytxt">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#f00" class="bi bi-telephone-inbound-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0z"/>
                                    </svg>
                                </div>
                                <span><a href="tel:+91 8296111777" rel="nofollow noindex">+91 8296 111 777</a></span>
                            </div>
                            <div class="top_bar_contact_item" id="mailIcon">
                                <div class="top_bar_icon prt-icon prt-icon_element-onlytxt">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#f00" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                                        <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z"/>
                                        <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z"/>
                                    </svg>
                                </div>
                                <a href="mailto:care@60pluscare.in" rel="nofollow noindex">care@60pluscare.in</a>
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

                        <div class="align-self-center d-none d-lg-block">
                            <div class="appointmentBtn">
                                <button onclick='window.location.href="{{ url('schedule-an-appointment') }}"'>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                                        <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                                        <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                    </svg>
                                    Book an Appointment
                                </button>
                            </div>
                        </div>
                        <div class="align-self-center">
                            <ul class="social-icons">
                                <li>
                                    <a href="https://twitter.com/the60pluscare" aria-label="twitter" title="{{env('APP_NAME')}} on Twitter" target="_blank">
                                        <img loading="lazy" src="{{asset('static/images/twitter.png')}}" width="30" height="30" alt="{{env('APP_NAME')}} on Twitter">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/60PlusCareElderCareHomeCare" aria-label="facebook" title="{{env('APP_NAME')}} on Facebook" target="_blank">
                                        <img loading="lazy" src="{{asset('static/images/facebook.png')}}" width="30" height="30" alt="{{env('APP_NAME')}} on Facebook">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/company/60-plus-clinic-caring-for-elders/" aria-label="linkedin" title="{{env('APP_NAME')}} on LinkedIn" target="_blank">
                                        <img loading="lazy" src="{{asset('static/images/linkedin-icon.png')}}" width="30" height="30" alt="{{env('APP_NAME')}} on LinkedIn">
                                    </a>
                                </li>
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
                                            <a href="{{url('/')}}" title="{{ env('APP_NAME') }} Homepage">Home</a>
                                        </li>
                                        <li class="mega-menu-item">
                                            <a href="{{url('/elder-care')}}" title="Elder Care Service by {{ env('APP_NAME') }}">Elder Care</a>
                                        </li>
                                        <li class="mega-menu-item">
                                            <a href="{{url('/physiotherapy')}}" title="Best Physiotherapy Services provided by {{ env('APP_NAME') }}">Physiotherapy</a>
                                        </li>
                                        <li class="mega-menu-item">
                                            <a href="{{url('/packages')}}" title="Affordable Packages offered by {{ env('APP_NAME') }}">Packages</a>
                                        </li>

                                        <li class="mega-menu-item megamenu-fw">
                                            <a href="#" class="mega-menu-link">Know More</a>
                                            <ul class="mega-submenu megamenu-content" role="menu">
                                                <li>
                                                    <div class="row">
                                                        <div class="col-menu col-xl-3 col-lg-12">
                                                            <h3 class="title">About 60 Plus Care</h3>
                                                            <div class="content">
                                                                <ul class="menu-col">
                                                                    <li><a href="{{url('about')}}" title="Know About {{env('APP_NAME')}}">About</a></li>
                                                                    <li><a href="{{url('services')}}" title="Services provided by {{ env('APP_NAME') }}">Services</a></li>
                                                                    <li><a href="{{url('doctors')}}" title="Contact best doctors from {{env('APP_NAME')}}">Doctors</a></li>
                                                                    <li><a href="{{url('patient-study')}}" title="Patient Study at {{env('APP_NAME')}}">Patient Study</a></li>
                                                                    <li><a href="{{url('diet-nutrition')}}" title="Diet & Nutrition from {{env('APP_NAME')}}">Diet & Nutrition</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-menu col-xl-3 col-lg-12">
                                                            <h3 class="title">Clinics</h3>
                                                            <div class="content">
                                                                <ul class="menu-col">
                                                                    <li><a href="{{url('clinics/')}}" title="Find 60 Plus Clinic in Kolkata">Clinics</a></li>
                                                                    @foreach(\App\Models\Clinic::active()->select('clinic_name', 'clinic_slug')->get() as $clinic)
                                                                        <li><a href="{{url('clinic/' . $clinic->clinic_slug)}}" title="Visit {{ env('APP_NAME') }} Clinic at {{ $clinic->clinic_name }}">{{ $clinic->clinic_name }}</a></li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-menu col-xl-3 col-lg-12">
                                                            <h3 class="title">Other Links</h3>
                                                            <div class="content">
                                                                <ul class="menu-col">
                                                                    <li><a href="{{url('gallery')}}" title="View Gallery of {{ env('APP_NAME') }}">Gallery</a></li>
                                                                    <li><a href="{{url('article')}}" title="Read articles of {{ env('APP_NAME') }}">Article</a></li>
                                                                    <li><a href="{{url('testimonials')}}" title="Testimonials on {{ env('APP_NAME') }}">Testimonial</a></li>
                                                                    <li><a href="{{url('contact')}}" title="Contact {{ env('APP_NAME') }}">Contact</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-menu col-xl-3 col-lg-12">
                                                            <div class="content">
                                                                <ul class="menu-col-img">
                                                                    <li>
                                                                        <a href="{{asset('static/images/60clinic-banner-offer.jpg')}}" title="60Plus Banner Offer" target="_blank">
                                                                            <img loading="lazy" class="img-fluid" src="{{asset('static/images/60clinic-banner-offer-min.webp')}}" alt="60Plus Banner Offer">
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-item d-block d-xl-none">
                                            <a href="#" onclick='window.location.href="{{ url('/dashboard') }}"'>Member's Zone</a>
                                        </li>
                                        <li class="mega-menu-item d-block d-xl-none">
                                            <a href="#" onclick='window.location.href="{{ url('/admin') }}"'>Employee's Zone</a>
                                        </li>
                                        <li class="mega-menu-item d-block d-xl-none">
                                            <a href="{{url('schedule-an-appointment')}}">Book an Appointment</a>
                                        </li>
                                    </ul>
                                </nav><!-- menu end -->
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
