@extends('admin.layouts.admin_app')

@section('content')
<div class="container-fluid" style="transform: none;">
    <div class="row" style="transform: none;">

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">

                        <div class="">

                            <div class="settings-inner-blk p-0">
                                <div
                                    class="sell-course-head comman-space d-flex justify-content-between align-items-center">
                                    <h3>Categories</h3>
                                    <div class="go-dashboard text-center">
                                        <a href="{{ route('admin.category.create') }}" class="btn btn-primary">Create New
                                            Category</a>
                                    </div>
                                </div>
                                <div class="form-filter comman-space">
                                    <input type="text" class="form-control name" name="" id="">
                                    <input type="text" class="form-control email" name="" id="">
                                    <a href="" class="btn btn-primary button-search ">Search</a>
                                </div>
                                <div class="comman-space pb-0">
                                    
                                    <div class="settings-tickets-blk course-instruct-blk table-responsive">

                                        <table class="table table-nowrap mb-2">
                                            <thead>
                                                <tr>
                                                   <th>COURSES</th>
                                                <th>AMOUNT</th>
                                                <th>STUDENTS</th>
                                                <th>STATUS</th>
                                                <th>ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($categories as $category)
                                                    <tr>
                                                        <td>
                                                            <div class="sell-table-group d-flex align-items-center">
                                                                <div class="sell-group-img">
                                                                    <a href="course-details.html">
                                                                        <img src="{{ asset('/images/category/' . $category->image) }}"
                                                                            class="img-fluid " alt="">
                                                                    </a>
                                                                </div>
                                                                <div class="sell-tabel-info">
                                                                    <p><a
                                                                            href="course-details.html">{{ $category->name }}</a>
                                                                    </p>
                                                                    <div
                                                                        class="course-info d-flex align-items-center border-bottom-0 pb-0">
                                                                        <div class="rating-img d-flex align-items-center">
                                                                            <img src="http://127.0.0.1:8000/img/icon/icon-01.svg"
                                                                                alt="">
                                                                            <p>10+ Lesson</p>
                                                                        </div>
                                                                        <div class="course-view d-flex align-items-center">
                                                                            <img src="http://127.0.0.1:8000/img/icon/timer-start.svg" 
                                                                                alt="">
                                                                            <p>7hr 20min</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>RS 1200/-</td>
                                                        <td>3200</td>
                                                        <td>
                                                            @if ($category->status == 1)
                                                                <span class="badge info-low">Live</span>
                                                            @else
                                                                <span class="badge info-inter">Darft</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-info text-white">
                                                                <span class="glyphicon glyphicon-edit"></span> Edit
                                                              </a>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                                {{-- <tr>
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
                                                <td>RS 1200/-</td>
                                                <td>0</td>
                                                <td><span class="badge info-inter">Darft</span></td>
                                            </tr> --}}
                                                {{-- <tr>
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
                                                <td>RS 1200/-</td>
                                                <td>1500</td>
                                                <td><span class="badge info-low">Live</span></td>
                                            </tr> --}}

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
