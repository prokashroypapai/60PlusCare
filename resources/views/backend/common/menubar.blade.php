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
                            <a href="{{url('admin/members')}}" class="dropdown-item">Members</a>
                            <a href="{{url('admin/subscriptions')}}" class="dropdown-item">Subscriptions</a>
                            <a href="{{url('admin/memberships')}}" class="dropdown-item">Memberships</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-file"></i>Common <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-pages">
                            <a href="{{url('admin/pages')}}" class="dropdown-item">Pages</a>
                            <a href="{{ url('admin/galleries') }}" class="dropdown-item">Gallery</a>
                            <a href="{{url('sliders')}}" class="dropdown-item">Sliders</a>
                            <a href="{{url('articles')}}" class="dropdown-item">Articles</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-forms" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bxs-eraser"></i>Settings <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-forms">
                            <a href="{{url('info')}}" class="dropdown-item">Info</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-charts" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-doughnut-chart"></i>Care <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-charts">
                            <a href="{{url('contacts')}}" class="dropdown-item">Contacts</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-share-alt"></i>Office <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-more">
                            <a href="{{url('admin/staffs')}}" class="dropdown-item">Staffs</a>
                            <a href="{{url('admin/doctors')}}" class="dropdown-item">Doctors</a>
                            <a href="{{url('admin/locations')}}" class="dropdown-item">Locations</a>
                        </div>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>
