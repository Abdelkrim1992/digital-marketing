<?php $setting = App\Models\Setting::find(1); ?>


<div class="header">
    <div class="header-left active">
        <a href="{{route('dashboard')}}" class="logo">
            <img src="{{asset('frontend/img/logo/'.$setting->logo)}}" alt="logo">
        </a>
        <a href="index.html" class="logo-small">
            <img src="{{asset('frontend/img/logo/'.$setting->logo)}}" alt="">
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
        <li class="nav-item dropdown has-arrow main-drop">
            <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                <span class="user-img">
                    <img src="{{asset('backend/img/profiles/avator1.jpg')}}" alt="">
                    <span class="status online"></span>
                </span>
            </a>
            <div class="dropdown-menu menu-drop-user">
                <div class="profilename">
                    <div class="profileset">
                        <span class="user-img">
                            <img src="{{asset('backend/img/user/'.$user->image)}}" alt="">
                            <span class="status online"></span>
                        </span>
                        <div class="profilesets">
                            <h6>{{($user->name)}}</h6>
                            <h5>Admin</h5>
                        </div>
                    </div>
                    <a class="dropdown-item" href="{{route('setting.index')}}">
                        <i class="me-2" data-feather="settings"></i> Settings
                    </a>
                    <hr class="m-0">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf
                    </form>
                    <a class="dropdown-item logout pb-0" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <img src="{{asset('backend/img/icons/log-out.svg')}}" class="me-2" alt="img"> Logout
                    </a>
                </div>
            </div>
        </li>
    </ul>

    <div class="dropdown mobile-user-menu">
        <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-ellipsis-v"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="profile.html">My Profile</a>
            <a class="dropdown-item" href="{{route('setting.index')}}">Settings</a>
            <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
        </div>
    </div>
</div>
