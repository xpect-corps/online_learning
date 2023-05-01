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
                                    <i class="feather-users"></i>Category
                                </a>
                            </li>
                            <li class="nav-item active">
                                <a href="{{ url('/admin/tutor') }}" class="nav-link">
                                    <i class="feather-users"></i> Tutor
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ url('/admin/payment') }}" class="nav-link">
                                    <i class="feather-users"></i> Payment
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-xl-9 col-lg-8 col-md-12">
                <div class="settings-widget py-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="showing-list">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="d-flex align-items-center">
                                                <div class="view-icons">
                                                    <a href="students-list.html" class="list-view active"><i
                                                            class="feather-list"></i></a>
                                                </div>
                                                <div class="show-result">
                                                    <h4>Showing 1-9 of 50 results</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="go-dashboard text-end">
                                                <a href="{{url('admin/tutorcreate')}}" class="btn btn-primary">Add Tutor</a>
                                                </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-lg-12 d-flex">
                                        <div class="instructor-list flex-fill">
                                            <div class="instructor-img">
                                                <a href="{{url('admin/tutorshow')}}">
                                                    <img class="img-fluid" alt="" src="{{asset('img/user/user11.jpg')}}">
                                                </a>
                                            </div>
                                            <div class="instructor-content">
                                                <h5><a href="{{url('admin/tutorshow')}}">Rolands R</a></h5>
                                                <h6>Instructor</h6>
                                                <div class="instructor-info">
                                                    <div class="rating-img d-flex align-items-center">
                                                        <img src="{{asset('img/icon/icon-01.svg')}}" class="me-1"
                                                            alt="">
                                                        <p>12+ Lesson</p>
                                                    </div>
                                                    <div class="course-view d-flex align-items-center ms-0">
                                                        <img src="{{asset('img/icon/icon-02.svg')}}" class="me-1"
                                                            alt="">
                                                        <p>9hr 30min</p>
                                                    </div>
                                                    <div class="rating-img d-flex align-items-center">
                                                        <img src="{{asset('img/icon/user-icon.svg')}}" class="me-1"
                                                            alt="">
                                                        <p>50 Students</p>
                                                    </div>
                                            
                                                </div>
                                                <div class="instructor-badge">
                                                    <span class="web-badge">Web Design</span>
                                                    <span class="web-badge">web development</span>
                                                    <span class="web-badge">UI Design</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="pagination lms-page">
                                            <li class="page-item prev">
                                                <a class="page-link" href="javascript:void(0);" tabindex="-1"><i
                                                        class="fas fa-angle-left"></i></a>
                                            </li>
                                            <li class="page-item first-page active">
                                                <a class="page-link" href="javascript:void(0);">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0);">2</a>
                                            </li>
                                            <li class="page-item next">
                                                <a class="page-link" href="javascript:void(0);"><i
                                                        class="fas fa-angle-right"></i></a>
                                            </li>
                                        </ul>
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
