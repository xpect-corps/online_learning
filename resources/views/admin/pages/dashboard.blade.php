@extends('admin.layouts.admin_app')

@section('content')
    <div class="container-fluid">
        <div class="row">

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
                <div class="settings-widget account-settings ">
                    <div class="settings-menu">
                        <h3>DASHBOARD</h3>
                        <ul>
                            <li class="nav-item active ">
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


            <div class="col-xl-9 col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-3 d-flex">
                        <div class="card instructor-card w-100">
                            <div class="card-body">
                                <div class="instructor-inner">
                                    <h6>Total Courses</h6>
                                    <h4 class="instructor-text-success">$467.34</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="card instructor-card w-100">
                            <div class="card-body">
                                <div class="instructor-inner">
                                    <h6>Total Students</h6>
                                    <h4 class="instructor-text-info">12,000</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="card instructor-card w-100">
                            <div class="card-body">
                                <div class="instructor-inner">
                                    <h6>Total Earnings</h6>
                                    <h4 class="instructor-text-warning">4.80</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="card instructor-card w-100">
                            <div class="card-body">
                                <div class="instructor-inner">
                                    <h6>Total Tutors</h6>
                                    <h4 class="instructor-text-warning">4.80</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card instructor-card">
                            <div class="card-header">
                                <h4>Earnings</h4>
                            </div>
                            <div class="card-body">
                                <div id="instructor_chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card instructor-card">
                            <div class="card-header">
                                <h4>Order</h4>
                            </div>
                            <div class="card-body">
                                <div id="order_chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="settings-widget">
                            <div class="settings-inner-blk p-0">
                                <div class="sell-course-head comman-space">
                                    <h3>Best Selling Courses</h3>
                                </div>
                                <div class="comman-space pb-0">
                                    <div class="settings-tickets-blk course-instruct-blk table-responsive">

                                        <table class="table table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th>COURSES</th>
                                                    <th>SALES</th>
                                                    <th>AMOUNT</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="sell-table-group d-flex align-items-center">
                                                            <div class="sell-group-img">
                                                                <a href="course-details.html">
                                                                    <img src="assets/img/course/course-10.jpg"
                                                                        class="img-fluid " alt>
                                                                </a>
                                                            </div>
                                                            <div class="sell-tabel-info">
                                                                </p>
                                                                <p><a href="course-details.html">Information About UI/UX
                                                                        Design Degree</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>34</td>
                                                    <td>$3,145.23</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="sell-table-group d-flex align-items-center">
                                                            <div class="sell-group-img">
                                                                <a href="course-details.html">
                                                                    <img src="assets/img/course/course-11.jpg"
                                                                        class="img-fluid " alt>
                                                                </a>
                                                            </div>
                                                            <div class="sell-tabel-info">
                                                                <p><a href="course-details.html">Wordpress for Beginners -
                                                                        Master Wordpress Quickly</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>34</td>
                                                    <td>$3,145.23</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="sell-table-group d-flex align-items-center">
                                                            <div class="sell-group-img">
                                                                <a href="course-details.html">
                                                                    <img src="assets/img/course/course-12.jpg"
                                                                        class="img-fluid " alt>
                                                                </a>
                                                            </div>
                                                            <div class="sell-tabel-info">
                                                                <p><a href="course-details.html">Sketch from A to Z (2022):
                                                                        Become an app designer</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>34</td>
                                                    <td>$3,145.23</td>
                                                </tr>
                                            </tbody>
                                        </table>

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
