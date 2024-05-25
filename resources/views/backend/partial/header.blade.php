<div class="header">
    <div class="header-left active">
        <a href="index.html" class="logo">
            <img src="{{ asset('backend/img/logo.png') }}" alt="Logo">
        </a>
        <a href="index.html" class="logo-small">
            <img src="{{ asset('backend/img/logo-small.png') }}" alt="Small Logo">
        </a>
        <a id="toggle_btn" href="javascript:void(0);"></a>
    </div>

    <a id="mobile_btn" class="mobile_btn" href="#sidebar">
        <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </a>

    <ul class="nav user-menu">
        <!-- Search functionality -->
        <li class="nav-item">
            <div class="top-nav-search">
                <a href="javascript:void(0);" class="responsive-search">
                    <i class="fa fa-search"></i>
                </a>
                <form action="#">
                    <div class="searchinputs">
                        <input type="text" placeholder="Search Here ...">
                        <div class="search-addon">
                            <span><img src="{{ asset('backend/img/icons/closes.svg') }}" alt="Close"></span>
                        </div>
                    </div>
                    <a class="btn" id="searchdiv">
                        <img src="{{ asset('backend/img/icons/search.svg') }}" alt="Search">
                    </a>
                </form>
            </div>
        </li>

        <!-- Language dropdown -->
        <li class="nav-item dropdown has-arrow flag-nav">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);" role="button">
                <img src="{{ asset('backend/img/flags/us1.png') }}" alt="US Flag" height="20">
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="javascript:void(0);" class="dropdown-item">
                    <img src="{{ asset('backend/img/flags/us.png') }}" alt="US Flag" height="16"> English
                </a>
                <a href="javascript:void(0);" class="dropdown-item">
                    <img src="{{ asset('backend/img/flags/fr.png') }}" alt="French Flag" height="16"> French
                </a>
                <a href="javascript:void(0);" class="dropdown-item">
                    <img src="{{ asset('backend/img/flags/es.png') }}" alt="Spanish Flag" height="16"> Spanish
                </a>
                <a href="javascript:void(0);" class="dropdown-item">
                    <img src="{{ asset('backend/img/flags/de.png') }}" alt="German Flag" height="16"> German
                </a>
            </div>
        </li>

        <!-- Notifications dropdown -->
        <li class="nav-item dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                <img src="{{ asset('backend/img/icons/notification-bing.svg') }}" alt="Notifications"> 
                <span class="badge rounded-pill">4</span>
            </a> 
            <div class="dropdown-menu notifications">
                <div class="topnav-dropdown-header">
                    <span class="notification-title">Notifications</span>
                    <a href="javascript:void(0)" class="clear-noti">Clear All</a>
                </div>
                <div class="noti-content">
                    <ul class="notification-list">
                        <!-- Notification items -->
                        <li class="notification-message">
                            <a href="activities.html">
                                <div class="media d-flex">
                                    <span class="avatar flex-shrink-0">
                                        <img alt="Avatar" src="{{ asset('backend/img/profiles/avatar-02.jpg') }}">
                                    </span>
                                    <div class="media-body flex-grow-1">
                                        <p class="noti-details">
                                            <span class="noti-title">John Doe</span> added new task 
                                            <span class="noti-title">Patient appointment booking</span>
                                        </p>
                                        <p class="noti-time">
                                            <span class="notification-time">4 mins ago</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="activities.html">
                                <div class="media d-flex">
                                    <span class="avatar flex-shrink-0">
                                        <img alt="Avatar" src="{{ asset('backend/img/profiles/avatar-03.jpg') }}">
                                    </span>
                                    <div class="media-body flex-grow-1">
                                        <p class="noti-details">
                                            <span class="noti-title">Tarah Shropshire</span> changed the task name 
                                            <span class="noti-title">Appointment booking with payment gateway</span>
                                        </p>
                                        <p class="noti-time">
                                            <span class="notification-time">6 mins ago</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- More notification items -->
                    </ul>
                </div>
                <div class="topnav-dropdown-footer">
                    <a href="activities.html">View all Notifications</a>
                </div>
            </div>
        </li>

        <!-- User dropdown -->
        <li class="nav-item dropdown has-arrow main-drop">
            <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                <span class="user-img">
                    <img src="{{ asset('backend/img/profiles/avatar-1.jpg') }}" alt="User">
                    <span class="status online"></span>
                </span>
            </a>
            <div class="dropdown-menu menu-drop-user">
                <div class="profilename">
                    <div class="profileset">
                        <span class="user-img">
                            <img src="{{ asset('backend/img/profiles/avatar-1.jpg') }}" alt="User">
                            <span class="status online"></span>
                        </span>
                        <div class="profilesets">
                            <h6>John Doe</h6>
                            <h5>Admin</h5>
                        </div>
                    </div>
                    <hr class="m-0">
                    <a class="dropdown-item" href="profile.html">
                        <i class="me-2" data-feather="user"></i> My Profile
                    </a>
                    <a class="dropdown-item" href="{{ route('setting.index') }}">
                        <i class="me-2" data-feather="settings"></i> Settings
                    </a>
                    <hr class="m-0">
                    <a class="dropdown-item logout pb-0" href="{{route('logout')}}">
                        <img src="{{ asset('backend/img/icons/log-out.svg') }}" class="me-2" alt="Logout">Logout
                    </a>
                </div>
            </div>
        </li>
    </ul>
