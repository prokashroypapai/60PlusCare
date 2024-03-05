<!-- Header Section Start -->
<header class="header-wrap style1">

    <div class="header-bottom">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html">
                    <img class="logo-light" src="{{ asset('/static/images/logo.png') }}" alt="{{ env('APP_NAME') }} Logo" width="113" height="50">
                    <img class="logo-dark" src="{{ asset('/static/images/logo.png') }}" alt="{{ env('APP_NAME') }} Logo" width="113" height="50">
                </a>
                <div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent">
                    <div class="menu-close d-lg-none">
                        <a href="javascript:void(0)"> <i class="ri-close-line"></i></a>
                    </div>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Our Services
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{ url('/elder-care') }}" class="nav-link">Elder Care</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/physiotherapy') }}" class="nav-link">Physiotherapy</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/pulmonary-rehabilitation') }}" class="nav-link">Pulmonary Rehab</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/diet-nutrition') }}" class="nav-link">Diet Nutrition</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/vaccination') }}" class="nav-link">Vaccination</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/about') }}" class="nav-link">
                                About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/packages') }}" class="nav-link">
                                Packages
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/clinics') }}" class="nav-link">
                                Clinics
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/articles') }}" class="nav-link">
                                Articles
                            </a>
                        </li>
                    </ul>
                    <div class="other-options md-none">
                        <div class="option-item">
                            <button class="searchbtn">
                                +91 8013647571
                                <i class="ri-arrow-down-s-line"></i>
                            </button>
                        </div>
                        <div class="option-item">
                            <button class="btn style1">Book Appointment</button>
                        </div>
                    </div>

                </div>
            </nav>
            <div class="search-area">
                <input type="search" placeholder="Search Here..">
                <button type="submit"><i class="ri-search-line"></i></button>
            </div>
            <div class="mobile-bar-wrap">
                <button class="searchbtn d-lg-none"><i class="ri-search-line"></i></button>
                <div class="mobile-menu d-lg-none">
                    <a href="javascript:void(0)"><i class="ri-menu-line"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Section End -->
