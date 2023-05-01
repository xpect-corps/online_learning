@extends('admin.layouts.admin_app')

@section('content')
    <div class="container" style="transform: none;">
        <div class="row" style="transform: none;">

            <div class="col-xl-3 col-lg-4 col-md-12 theiaStickySidebar">
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
                <div class="settings-widget account-settings">
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
                            <li class="nav-item active">
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
                                    <i class="feather-users"></i>Category
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/admin/tutor') }}" class="nav-link">
                                    <i class="feather-users"></i> Tutor
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/admin/payment') }}" class="nav-link">
                                    <i class="feather-users"></i> Payment
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-xl-9 col-lg-8 col-md-12">
                <div class="settings-widget pt-3">
                    <div class="container">
                        <div class="title-sec">
                            <div class="row">
                                <div class="col-sm-6 col-lg-5">
                                    <h4>Notifications</h4>

                                </div>
                            </div>
                        </div>

                        <div class="notify-sec">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="add-course-label">Title</label>
                                        <input type="text" class="form-control" placeholder="Notification Title ">
                                    </div>
                                    <div class="form-group">
                                        <label class="add-course-label">Notification Poster</label>

                                        <div class="relative-form">
                                            <span id="fileName"><input type="text" class="border-0 bg-white"
                                                    disabled="" placeholder="No file choose"> </span>
                                            <label class="relative-file-upload">
                                                Upload Poster
                                                <input type="file" name="file" class="InputFile" id="myFile"
                                                    onchange="document.getElementById('ImagePreview').src = window.URL.createObjectURL(this.files[0])">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="add-image-box">
                                            <img id="ImagePreview" src="">

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                     
                    </div>

                </div>
                <div class="settings-widget p-4">

                    <div class="notify-sec">
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Today</h5>
                                <div class="notify-item">
                                    <div class="row align-items-center">
                                        <div class="col-md-9">
                                            <div class="notify-content">
                                                <a href="instructor-profile.html">
                                                    <img class="avatar-img semirounded-circle"
                                                        src="assets/img/user/user2.jpg" alt="User Image">
                                                </a>
                                                <div class="notify-detail">
                                                    <h6><a href="instructor-profile.html">Rolands R </a><span>Today at 9:42
                                                            AM</span></h6>
                                                    <p>It is a long established fact that a reader will be distracted by the
                                                        readable content of a page when looking at its layout. The point of
                                                        using Lorem Ipsum is that it has a more-or-less normal distribution
                                                        of letters, as opposed to using 'Content here,</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="text-md-end">
                                                <a href="javascript:;" class="btn">Mark as Read</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="notify-item">
                                    <div class="row align-items-center">
                                        <div class="col-md-9">
                                            <div class="notify-content">
                                                <a href="instructor-profile.html">
                                                    <img class="avatar-img semirounded-circle"
                                                        src="assets/img/user/user1.jpg" alt="User Image">
                                                </a>
                                                <div class="notify-detail">
                                                    <h6><a href="instructor-profile.html">Jenis R. </a><span>Today at 10:08
                                                            AM</span></h6>
                                                    <p>It is a long established fact that a reader will be distracted by the
                                                        readable content of a page when looking at its layout. The point of
                                                        using Lorem Ipsum is that it has a more-or-less normal distribution
                                                        of letters, as opposed to using 'Content here,</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="text-md-end">
                                                <a href="javascript:;" class="btn">Mark as Read</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h5>Yesterday</h5>
                                <div class="notify-item">
                                    <div class="row align-items-center">
                                        <div class="col-md-9">
                                            <div class="notify-content">
                                                <a href="instructor-profile.html">
                                                    <img class="avatar-img semirounded-circle"
                                                        src="assets/img/user/user3.jpg" alt="User Image">
                                                </a>
                                                <div class="notify-detail">
                                                    <h6><a href="instructor-profile.html">Jesse Stevens</a> <span>Yesterday
                                                            at 9:42 AM</span></h6>
                                                    <p>It is a long established fact that a reader will be distracted by the
                                                        readable content of a page when looking at its layout. The point of
                                                        using Lorem Ipsum is that it has a more-or-less normal distribution
                                                        of letters, as opposed to using 'Content here,</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="text-md-end">
                                                <a href="javascript:;" class="btn">Mark as Read</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="notify-item">
                                    <div class="row align-items-center">
                                        <div class="col-md-9">
                                            <div class="notify-content">
                                                <a href="instructor-profile.html">
                                                    <img class="avatar-img semirounded-circle"
                                                        src="assets/img/user/user7.jpg" alt="User Image">
                                                </a>
                                                <div class="notify-detail">
                                                    <h6><a href="instructor-profile.html">Rolands R</a> <span>Yesterday at
                                                            5:40 AM</span></h6>
                                                    <p>It is a long established fact that a reader will be distracted by the
                                                        readable content of a page when looking at its layout. The point of
                                                        using Lorem Ipsum is that it has a more-or-less normal distribution
                                                        of letters, as opposed to using 'Content here,</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="text-md-end">
                                                <a href="javascript:;" class="btn">Mark as Read</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="notify-item">
                                    <div class="row align-items-center">
                                        <div class="col-md-9">
                                            <div class="notify-content">
                                                <a href="instructor-profile.html">
                                                    <img class="avatar-img semirounded-circle"
                                                        src="assets/img/user/user11.jpg" alt="User Image">
                                                </a>
                                                <div class="notify-detail">
                                                    <h6><a href="instructor-profile.html">John Michael</a> <span>Yesterday
                                                            at 7:40 AM</span></h6>
                                                    <p>It is a long established fact that a reader will be distracted by the
                                                        readable content of a page when looking at its layout. The point of
                                                        using Lorem Ipsum is that it has a more-or-less normal distribution
                                                        of letters, as opposed to using 'Content here,</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="text-md-end">
                                                <a href="javascript:;" class="btn">Mark as Read</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        @push('scripts')
            <script></script>
        @endpush
    @endsection
