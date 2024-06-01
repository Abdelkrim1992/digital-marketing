<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="active">
                    <a href="{{route('dashboard')}}"><img src="{{asset('backend/img/icons/dashboard.svg')}}" alt="img"><span> Dashboard</span> </a>
                </li>
                <li class="submenu" >
                    <a href="javascript:void(0);"><img src="{{asset('backend/img/icons/product.svg')}}" alt="img"><span> Service Management</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route('service.index')}}">Service List</a></li>
                        <li><a href="{{route('service.create')}}">Add New Service</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{asset('backend/img/icons/clients.svg')}}" alt="img"><span> Clients Management</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('client.index') }}">Client List</a></li>
                        <li><a href="">Add New Client </a></li>
                    </ul>
                </li> 
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{asset('backend/img/icons/team.svg')}}" alt="img"><span> Team Management</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route('team.index')}}">Member List</a></li>
                        <li><a href="{{route('team.create')}}">Add New Member </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{asset('backend/img/icons/purchase1.svg')}}" alt="img"><span> Testimonials Management</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route('testimonial.index')}}">Testimonial List</a></li>
                        <li><a href="{{route('testimonial.create')}}">Add New Testimonial </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{asset('backend/img/icons/contact-form.svg')}}" alt="img"><span> Contact Form Management</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route('client.index')}}">Clients List</a></li>
                        <li><a href="addcustomer.html">Add Client </a></li>
                    </ul>
                </li> 
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{asset('backend/img/icons/return1.svg')}}" alt="img"><span> Pages</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="salesreturnlist.html">About Us </a></li>
                        <li><a href="createsalesreturn.html">Contact Us </a></li>
                        <li><a href="createsalesreturn.html">FAQ </a></li>
                    </ul>
                </li> 
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{asset('backend/img/icons/users1.svg')}}" alt="img"><span> Users</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('user.index') }}">User List</a></li>
                        <li><a href="{{ route('user.create') }}">Add New User</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>