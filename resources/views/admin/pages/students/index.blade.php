@extends('admin.layouts.admin_app')

@section('content')
    <div class="container" style="transform: none;">
        <div class="row" style="transform: none;">

            <div class="col-xl-3 col-lg-4 col-md-12 theiaStickySidebar">

                <div class="settings-widget account-settings">
                    <div class="settings-menu">
                        <h3>DASHBOARD</h3>
                        <ul>
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
                                <li class="nav-item active">
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
                                                <a href="{{ route('admin.student.create') }}" class="btn btn-primary">Add
                                                    Student</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="student-grid-blk">

                                            <div class="row">
                                                @foreach ($students as $student)
                                                    <div class="col-md-12">
                                                        <div class="instructor-list flex-fill">
                                                            <div class="instructor-img">
                                                                <a href="{{ route('admin.student.show', $student->id) }}">
                                                                    <img class="img-fluid" alt=""
                                                                        src="{{ asset('img/user/user11.jpg') }}">
                                                                </a>
                                                            </div>
                                                            <div class="instructor-content">
                                                                <h6 class="mb-2">#123456</h6>
                                                                <h5><a href="{{ asset('/images/student/'.$student->image) }}">{{ $student->user->name }}</a></h5>
                                                                <div class="instructor-info">
                                                                    <div class="rating-img d-flex align-items-center">
                                                                        <img src="{{ asset('img/new-icons/email.png') }}"
                                                                            class="me-1" alt="">
                                                                        <p>{{ $student->email }}</p>
                                                                    </div>
                                                                    <div class="course-view d-flex align-items-center ms-0">
                                                                        <img src="{{ asset('img/new-icons/phone.png') }}"
                                                                            class="me-1" alt="">
                                                                        <p>{{ $student->mobile_no }}</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach

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
