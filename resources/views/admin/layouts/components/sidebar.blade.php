<div class="">
    {{-- <div class="settings-widget dash-profile">
        <div class="settings-menu p-0">
            <div class="profile-bg">
                <h5>Beginner</h5>
                <img src="{{ asset('img/instructor-profile-bg.jpg')}}" alt>
                <div class="profile-img">
                    <a href="instructor-profile.html"><img src="{{asset('img/user/user15.jpg')}}" alt></a>
                </div>
            </div>
            <div class="profile-group">
                <div class="profile-name text-center">
                    <h4><a href="instructor-profile.html">Jenny Wilson</a></h4>
                    <p>Instructor</p>
                </div>
                <div class="go-dashboard text-center">
                    <a href="add-course.html" class="btn btn-primary">Create New Course</a>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="settings-widget account-settings mt-0">
        <div class="settings-menu">
            <h3>DASHBOARD</h3>
            <ul>
                <li class="nav-item ">
                    <a href="{{ url('/admin/home') }}" class="nav-link">
                        <i class="feather-home"></i> My Dashboard
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ url('/admin/course') }}" class="nav-link">
                        <i class="feather-book"></i> My Courses
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ url('/admin/notification') }}" class="nav-link">
                        <i class="feather-bell"></i> Notifications
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ url('/admin/students') }}" class="nav-link">
                        <i class="feather-users"></i> Students
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ url('/admin/Category') }}" class="nav-link">
                        <i class="ri-file-list-3-line"></i>Category
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ url('/admin/tutor') }}" class="nav-link">
                        <i class="ri-slideshow-line"></i>Tutor
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ url('/admin/payment') }}" class="nav-link">
                        <i class="ri-bank-card-line"></i> Payment
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ url('/admin/tag') }}" class="nav-link">
                        <i class="ri-bookmark-line"></i> Tag
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>