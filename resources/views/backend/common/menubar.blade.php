<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/admin')}}">
                            <i class="bx bx-home-smile"></i>Dashboard
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-cookie"></i>Business <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-components">
                            <a href="{{url('admin/packages')}}" class="dropdown-item">Packages</a>
                            <a href="{{url('admin/services')}}" class="dropdown-item">Services</a>
                            <a href="{{url('admin/registeredUsers')}}" class="dropdown-item">Registered Users</a>
                            <a href="{{url('admin/members')}}" class="dropdown-item">Members</a>
                            <a href="{{url('admin/subscriptions')}}" class="dropdown-item">Subscriptions</a>
                            <a href="{{url('admin/memberships')}}" class="dropdown-item">Memberships Requests</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-file"></i>Common <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-pages">
                            <a href="{{url('admin/pages')}}" class="dropdown-item">Pages</a>
                            <a href="{{ url('admin/galleries') }}" class="dropdown-item">Gallery</a>
                            <a href="{{ url('admin/sliders') }}" class="dropdown-item">Sliders</a>
                            <a href="{{url('admin/articles')}}" class="dropdown-item">Articles</a>
                            <a href="{{url('admin/testimonials')}}" class="dropdown-item">Testimonials</a>
                            <a href="{{url('admin/noticeboards')}}" class="dropdown-item">Notice Boards</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-forms" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bxs-eraser"></i>Settings <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-forms">
                            <a href="{{url('admin/info')}}" class="dropdown-item">Info</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-charts" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-doughnut-chart"></i>Care <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-charts">
                            <a href="{{url('admin/contacts')}}" class="dropdown-item">Contacts</a>
                            <a href="{{url('admin/appointments')}}" class="dropdown-item">Appointments</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-share-alt"></i>Office <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-more">
                            <a href="{{url('admin/staffs')}}" class="dropdown-item">Staffs</a>
                            <a href="{{url('admin/doctors')}}" class="dropdown-item">Doctors</a>
                            <a href="{{url('admin/clinics')}}" class="dropdown-item">Clinics</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-abacus"></i>Directory <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-more">
                            <a href="{{url('admin/directories')}}" class="dropdown-item">Directories</a>
                            <a href="{{url('admin/categories')}}" class="dropdown-item">Categories</a>
                            <a href="{{url('admin/zones')}}" class="dropdown-item">Zones</a>
                        </div>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>
