@extends('admin.layouts.admin_app')

@section('content')
    <div class="container-fluid" style="transform: none;">
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
                            <li class="nav-item  ">
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
                            <li class="nav-item active">
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
                    <div class="col-md-12">
                        <div class="card instructor-card">
                            <div class="card-header">
                                <h4>Earnings</h4>
                            </div>
                            <div class="card-body" style="position: relative;">
                                <div id="instructor_chart"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card instructor-card">
                            <div class="card-header">
                                <h4>Order</h4>
                            </div>
                            <div class="card-body" style="position: relative;">
                                <div id="order_chart"></div>
                                                       </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="settings-widget">
                            <div class="settings-inner-blk p-0">
                                <div class="sell-course-head comman-space">
                                    <h3>Payment Details</h3>
                                </div>
                                <div class="form-filter comman-space">
                                    <input type="text" class="form-control name" name="" id="">
                                    <input type="text" class="form-control email" name="" id="">
                                    <a href="" class="btn btn-primary button-search ">Search</a>
                                </div>
                                <div class="comman-space pb-0">
                                    <div class="settings-tickets-blk course-instruct-blk table-responsive">
                                    
                                    <table class="table table-nowrap mb-0">
                                    <thead>
                                    <tr>
                                    <th>COURSES</th>
                                    <th>SALES</th>
                                    <th>INVOICE</th>
                                    <th>DATE</th>
                                    <th>METHOD</th>
                                    <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                    <td class="instruct-orders-info">
                                    <p><a href="course-details.html">Information About UI/UX Design Degree</a></p>
                                    </td>
                                    <td>34</td>
                                    <td>#10021</td>
                                    <td>10-05-20</td>
                                    <td>Mastercard</td>
                                    <td><a href="javascript:;"><i class="feather-more-vertical"></i></a></td>
                                    </tr>
                                    <tr>
                                    <td class="instruct-orders-info">
                                    <p><a href="course-details.html">Wordpress for Beginners - Master Wordpress Quickly</a></p>
                                    </td>
                                    <td>30</td>
                                    <td>#12421</td>
                                    <td>10-05-20</td>
                                    <td>Visa</td>
                                    <td><a href="javascript:;"><i class="feather-more-vertical"></i></a></td>
                                    </tr>
                                    <tr>
                                    <td class="instruct-orders-info">
                                    <p><a href="course-details.html">Sketch from A to Z (2022): Become an app designer</a></p>
                                    </td>
                                    <td>24</td>
                                    <td>#11021</td>
                                    <td>10-05-20</td>
                                    <td>Mastercard</td>
                                    <td><a href="javascript:;"><i class="feather-more-vertical"></i></a></td>
                                    </tr>
                                    <tr>
                                    <td class="instruct-orders-info">
                                    <p><a href="course-details.html">Learn Angular Fundamentals From beginning to advance lavel</a></p>
                                    </td>
                                    <td>34</td>
                                    <td>#10021</td>
                                    <td>10-05-20</td>
                                    <td>Mastercard</td>
                                    <td><a href="javascript:;"><i class="feather-more-vertical"></i></a></td>
                                    </tr>
                                    <tr>
                                    <td class="instruct-orders-info">
                                    <p><a href="course-details.html">Build Responsive Real World Websites with HTML5 and CSS3</a></p>
                                    </td>
                                    <td>34</td>
                                    <td>#10021</td>
                                    <td>10-05-20</td>
                                    <td>Mastercard</td>
                                    <td><a href="javascript:;"><i class="feather-more-vertical"></i></a></td>
                                    </tr>
                                    <tr>
                                    <td class="instruct-orders-info">
                                    <p><a href="course-details.html">C# Developers Double Your Coding Speed with Visual Studio</a></p>
                                    </td>
                                    <td>34</td>
                                    <td>#10021</td>
                                    <td>10-05-20</td>
                                    <td>Mastercard</td>
                                    <td><a href="javascript:;"><i class="feather-more-vertical"></i></a></td>
                                    </tr>
                                    <tr>
                                    <td class="instruct-orders-info">
                                    <p><a href="course-details.html">Learn JavaScript and Express to become a professional JavaScript</a></p>
                                    </td>
                                    <td>34</td>
                                    <td>#10021</td>
                                    <td>10-05-20</td>
                                    <td>Mastercard</td>
                                    <td><a href="javascript:;"><i class="feather-more-vertical"></i></a></td>
                                    </tr>
                                    <tr>
                                    <td class="instruct-orders-info">
                                    <p><a href="course-details.html">Learn and Understand AngularJS to become a professional developer</a></p>
                                    </td>
                                    <td>34</td>
                                    <td>#10021</td>
                                    <td>10-05-20</td>
                                    <td>Mastercard</td>
                                    <td><a href="javascript:;"><i class="feather-more-vertical"></i></a></td>
                                    </tr>
                                    <tr>
                                    <td class="instruct-orders-info">
                                    <p><a href="course-details.html">Responsive Web Design Essentials HTML5 CSS3 and Bootstrap</a></p>
                                    </td>
                                    <td>34</td>
                                    <td>#10021</td>
                                    <td>10-05-20</td>
                                    <td>Mastercard</td>
                                    <td><a href="javascript:;"><i class="feather-more-vertical"></i></a></td>
                                    </tr>
                                    <tr>
                                    <td class="instruct-orders-info">
                                    <p><a href="course-details.html">The Complete App Design Course - UX, UI and Design Thinking</a></p>
                                    </td>
                                    <td>34</td>
                                    <td>#10021</td>
                                    <td>10-05-20</td>
                                    <td>Mastercard</td>
                                    <td><a href="javascript:;"><i class="feather-more-vertical"></i></a></td>
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
