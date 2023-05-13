@extends('admin.layouts.admin_app')

@section('content')
<div class="container-fluid" style="transform: none;">
    <div class="row" style="transform: none;">

        <div class="col-xl-3 col-lg-4 col-md-12 theiaStickySidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
            
            
        <div class="theiaStickySidebar" style="padding-top: 1px; padding-bottom: 1px; position: static; transform: none; left: 76.4px; top: 0px;"><div class="settings-widget account-settings">
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
                        <li class="nav-item">
                            <a href="{{ url('/admin/notification') }}" class="nav-link">
                                <i class="feather-bell"></i> Notifications
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ url('/admin/students') }}" class="nav-link">
                                <i class="feather-users"></i> Students
                            </a>
                        </li>
                        <li class="nav-item active">
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
            </div><div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 295px; height: 1396px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></div></div>


        <div class="col-xl-9 col-lg-8 col-md-12">
            <div class="row">
                <div class="col-md-12">
                
                    <div class="settings-widget">
                        
                        <div class="settings-inner-blk p-0">
                                <div class="sell-course-head comman-space d-flex justify-content-between align-items-center">
                                    <h3>Categories</h3>
                                    <div class="go-dashboard text-center">
                                        <a href="http://127.0.0.1:8000/admin/newcourse" class="btn btn-primary">Create New Category</a>
                                    </div>
                                </div>
                            <div class="comman-space pb-0">
                                <div class="instruct-search-blk">
                                    <div class="show-filter choose-search-blk">
                                        <form action="#">
                                            <div class="row gx-2 align-items-center">
                                                <div class="col-md-6 col-item">
                                                    <div class=" search-group">
                                                        <i class="feather-search"></i>
                                                        <input type="text" class="form-control" placeholder="Search our category">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-item">
                                                    
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="settings-tickets-blk course-instruct-blk table-responsive">

                                    <table class="table table-nowrap mb-2">
                                        <thead>
                                            <tr>
                                                <th>COURSES</th>
                                                <th>STUDENTS</th>
                                                <th>STATUS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="sell-table-group d-flex align-items-center">
                                                        <div class="sell-group-img">
                                                            <a href="course-details.html">
                                                                <img src="http://127.0.0.1:8000/img/course/course-10.jpg" class="img-fluid " alt="">
                                                            </a>
                                                        </div>
                                                        <div class="sell-tabel-info">
                                                            <p><a href="course-details.html">Information About UI/UX
                                                                    Design Degree</a></p>
                                                            <div class="course-info d-flex align-items-center border-bottom-0 pb-0">
                                                                <div class="rating-img d-flex align-items-center">
                                                                    <img src="http://127.0.0.1:8000/img/icon/icon-01.svg" alt="">
                                                                    <p>10+ Lesson</p>
                                                                </div>
                                                                <div class="course-view d-flex align-items-center">
                                                                    <img src="http://127.0.0.1:8000/img/icon/timer-start.svg" alt="">
                                                                    <p>7hr 20min</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>3200</td>
                                                <td><span class="badge info-low">Live</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="sell-table-group d-flex align-items-center">
                                                        <div class="sell-group-img">
                                                            <a href="course-details.html">
                                                                <img src="http://127.0.0.1:8000/img/course/course-11.jpg" class="img-fluid " alt="">
                                                            </a>
                                                        </div>
                                                        <div class="sell-tabel-info">
                                                            <p><a href="course-details.html">Wordpress for Beginners -
                                                                    Master Wordpress Quickly</a></p>
                                                            <div class="course-info d-flex align-items-center border-bottom-0 pb-0">
                                                                <div class="rating-img d-flex align-items-center">
                                                                    <img src="http://127.0.0.1:8000/img/icon/icon-01.svg" alt="">
                                                                    <p>10+ Lesson</p>
                                                                </div>
                                                                <div class="course-view d-flex align-items-center">
                                                                    <img src="http://127.0.0.1:8000/img/icon/timer-start.svg" alt="">
                                                                    <p>7hr 20min</p>
                                                                </div>
                                                            </div>
                                                            <div class="course-stip progress-stip">
                                                                <div class="progress-bar bg-success progress-bar-striped active-stip">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>0</td>
                                                <td><span class="badge info-inter">Darft</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="sell-table-group d-flex align-items-center">
                                                        <div class="sell-group-img">
                                                            <a href="course-details.html">
                                                                <img src="http://127.0.0.1:8000/img/course/course-12.jpg" class="img-fluid " alt="">
                                                            </a>
                                                        </div>
                                                        <div class="sell-tabel-info">
                                                            <p><a href="course-details.html">Sketch from A to Z (2022):
                                                                    Become an app designer</a></p>
                                                            <div class="course-info d-flex align-items-center border-bottom-0 pb-0">
                                                                <div class="rating-img d-flex align-items-center">
                                                                    <img src="http://127.0.0.1:8000/img/icon/icon-01.svg" alt="">
                                                                    <p>10+ Lesson</p>
                                                                </div>
                                                                <div class="course-view d-flex align-items-center">
                                                                    <img src="http://127.0.0.1:8000/img/icon/timer-start.svg" alt="">
                                                                    <p>7hr 20min</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>1500</td>
                                                <td><span class="badge info-low">Live</span></td>
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

@endsection