<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="{{route("dashboard")}}" class="nav-link">
                <div class="nav-profile-image">
                    <img src="{{asset("admin\assets\images\dashboard\photo1681994016.jpeg")}}" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>

                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">Dashbord</span>
                </div>

            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('admin/users')}}">
                <span class="menu-title">Users</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('admin/doctors')}}">
                <span class="menu-title">Doctors</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('admin/categories')}}">
                <span class="menu-title">Categories</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('admin/emotions')}}">
                <span class="menu-title">Emotions</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('admin/quotes')}}">
                <span class="menu-title">Quotes</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('admin/articles')}}">
                <span class="menu-title">Articles</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('admin/podcasts')}}">
                <span class="menu-title">Podcasts</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('admin/sports')}}">
                <span class="menu-title">Sports</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('admin/yoga')}}">
                <span class="menu-title">Yoga</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('admin/quick')}}">
                <span class="menu-title">Quick_and_easy</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('admin/sleep')}}">
                <span class="menu-title">Sleep_better_meditation</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('admin/stress')}}">
                <span class="menu-title">Stress_management_meditation</span>
            </a>
        </li>



    </ul>
</nav>
