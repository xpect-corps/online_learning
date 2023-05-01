@extends('admin.layouts.admin_app')

@section('content')
    <div class="container" style="transform: none;">
        <div class="row" style="transform: none;">

            <div class="col-xl-3 col-md-4 theiaStickySidebar"
                style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">


                <div class="theiaStickySidebar"
                    style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                    <div class="settings-widget dash-profile mb-3">
                        <div class="settings-menu p-0">
                            <div class="profile-bg">
                                <img src="{{ asset('img/profile-bg.jpg') }}" alt="">
                                <div class="profile-img">
                                    <a href="student-profile.html"><img alt=""
                                            src="{{ asset('img/students/student-01.jpg') }}"></a>
                                </div>
                            </div>
                            <div class="profile-group">
                                <div class="profile-name text-center">
                                    <h4><a href="student-profile.html">Rolands R</a></h4>
                                    <p class="mb-1">jennywilson@example.com
                                    </p>
                                    <p class="mb-1">+1(452) 125-6789
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="resize-sensor"
                        style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                        <div class="resize-sensor-expand"
                            style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                            <div
                                style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 295px; height: 1291px;">
                            </div>
                        </div>
                        <div class="resize-sensor-shrink"
                            style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                            <div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%">
                            </div>
                        </div>
                    </div>
                    <div class="card-body overview-sec-body bg-white">
                        <h5 class="subs-title">Professional Skills</h5>
                        <div class="sidebar-tag-labels">
                        <ul class="list-unstyled">
                        <li><a href="javascript:;" class="">User Interface Design</a></li>
                        <li><a href="javascript:;">Web Development</a></li>
                        <li><a href="javascript:;">Web Design</a></li>
                        <li><a href="javascript:;">UI Design</a></li>
                        <li><a href="javascript:;">Mobile App Design</a></li>
                        </ul>
                        </div>
                        </div>
                </div>
             
            </div>


            <div class="col-xl-9 col-md-8">
                <div class="settings-widget profile-details">
                    <div class="card wish-card mb-0">
                        <div class="card-header p-4">
                            <h5>Purchased Courses (03 items)</h5>
                        </div>
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 ">
                                    <div class="student-box flex-fill">
                                        <div class="student-img">
                                            <a href="student-profile.html">
                                                <img class="w-100" alt=""
                                                src="{{ asset('img/course/course-01.jpg') }}">
                                            </a>
                                        </div>
                                        <div class="student-content pb-0">
                                            <h5><a href="course-details.html">Information About UI/UX Design
                                                Degree</a></h5>
                                                <div class="rating-img d-flex align-items-center mb-2">
                                                    <img src="{{ asset('img/icon/icon-01.svg') }}"
                                                        alt="">
                                                    <p>12+ Lesson</p>
                                                </div>
                                                <div class="course-view d-flex align-items-center mb-3">
                                                    <img src="http://127.0.0.1:8000/img/icon/icon-02.svg" alt="">
                                                    <p>9hr 30min</p>
                                                </div>
                                                <div class="remove-btn">
                                                    <a href="javascript:;" class="btn">Remove</a>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 ">
                                    <div class="student-box flex-fill">
                                        <div class="student-img">
                                            <a href="student-profile.html">
                                                <img class="w-100" alt=""
                                                src="{{ asset('img/course/course-01.jpg') }}">
                                            </a>
                                        </div>
                                        <div class="student-content pb-0">
                                            <h5><a href="course-details.html">Information About UI/UX Design
                                                Degree</a></h5>
                                                <div class="rating-img d-flex align-items-center mb-2">
                                                    <img src="{{ asset('img/icon/icon-01.svg') }}"
                                                        alt="">
                                                    <p>12+ Lesson</p>
                                                </div>
                                                <div class="course-view d-flex align-items-center mb-3">
                                                    <img src="http://127.0.0.1:8000/img/icon/icon-02.svg" alt="">
                                                    <p>9hr 30min</p>
                                                </div>
                                                <div class="remove-btn">
                                                    <a href="javascript:;" class="btn">Remove</a>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 ">
                                    <div class="student-box flex-fill">
                                        <div class="student-img">
                                            <a href="student-profile.html">
                                                <img class="w-100" alt=""
                                                src="{{ asset('img/course/course-01.jpg') }}">
                                            </a>
                                        </div>
                                        <div class="student-content pb-0">
                                            <h5><a href="course-details.html">Information About UI/UX Design
                                                Degree</a></h5>
                                                <div class="rating-img d-flex align-items-center mb-2">
                                                    <img src="{{ asset('img/icon/icon-01.svg') }}"
                                                        alt="">
                                                    <p>12+ Lesson</p>
                                                </div>
                                                <div class="course-view d-flex align-items-center mb-3">
                                                    <img src="http://127.0.0.1:8000/img/icon/icon-02.svg" alt="">
                                                    <p>9hr 30min</p>
                                                </div>
                                                <div class="remove-btn">
                                                    <a href="javascript:;" class="btn">Remove</a>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="settings-widget profile-details">
                    <div class="card wish-card mb-0">
                        <div class="card-header p-4">
                            <h5>Wishlisted Course (03 items)</h5>
                        </div>
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 ">
                                    <div class="student-box flex-fill">
                                        <div class="student-img">
                                            <a href="student-profile.html">
                                                <img class="w-100" alt=""
                                                src="{{ asset('img/course/course-01.jpg') }}">
                                            </a>
                                        </div>
                                        <div class="student-content pb-0">
                                            <h5><a href="course-details.html">Information About UI/UX Design
                                                Degree</a></h5>
                                                <div class="rating-img d-flex align-items-center mb-2">
                                                    <img src="{{ asset('img/icon/icon-01.svg') }}"
                                                        alt="">
                                                    <p>12+ Lesson</p>
                                                </div>
                                                <div class="course-view d-flex align-items-center mb-3">
                                                    <img src="http://127.0.0.1:8000/img/icon/icon-02.svg" alt="">
                                                    <p>9hr 30min</p>
                                                </div>
                                                <div class="remove-btn">
                                                    <a href="javascript:;" class="btn">Remove</a>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 ">
                                    <div class="student-box flex-fill">
                                        <div class="student-img">
                                            <a href="student-profile.html">
                                                <img class="w-100" alt=""
                                                src="{{ asset('img/course/course-01.jpg') }}">
                                            </a>
                                        </div>
                                        <div class="student-content pb-0">
                                            <h5><a href="course-details.html">Information About UI/UX Design
                                                Degree</a></h5>
                                                <div class="rating-img d-flex align-items-center mb-2">
                                                    <img src="{{ asset('img/icon/icon-01.svg') }}"
                                                        alt="">
                                                    <p>12+ Lesson</p>
                                                </div>
                                                <div class="course-view d-flex align-items-center mb-3">
                                                    <img src="http://127.0.0.1:8000/img/icon/icon-02.svg" alt="">
                                                    <p>9hr 30min</p>
                                                </div>
                                                <div class="remove-btn">
                                                    <a href="javascript:;" class="btn">Remove</a>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 ">
                                    <div class="student-box flex-fill">
                                        <div class="student-img">
                                            <a href="student-profile.html">
                                                <img class="w-100" alt=""
                                                src="{{ asset('img/course/course-01.jpg') }}">
                                            </a>
                                        </div>
                                        <div class="student-content pb-0">
                                            <h5><a href="course-details.html">Information About UI/UX Design
                                                Degree</a></h5>
                                                <div class="rating-img d-flex align-items-center mb-2">
                                                    <img src="{{ asset('img/icon/icon-01.svg') }}"
                                                        alt="">
                                                    <p>12+ Lesson</p>
                                                </div>
                                                <div class="course-view d-flex align-items-center mb-3">
                                                    <img src="http://127.0.0.1:8000/img/icon/icon-02.svg" alt="">
                                                    <p>9hr 30min</p>
                                                </div>
                                                <div class="remove-btn">
                                                    <a href="javascript:;" class="btn">Remove</a>
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
    </div>
    @push('scripts')
        <script></script>
    @endpush
@endsection
