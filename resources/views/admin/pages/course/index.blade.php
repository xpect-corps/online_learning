@extends('admin.layouts.admin_app')

@section('content')
    <div class="container-fluid" style="transform: none;">
        <div class="row" style="transform: none;">

            <div class=" col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-4">

                            <div class="settings-inner-blk p-0">
                                <div class="sell-course-head comman-space d-flex justify-content-between align-items-center">
                                    <h3>Top Courses</h3>
                                </div>
                                <div class="comman-space pb-0">
                                    <div class="instruct-search-blk">
                                        <div class="show-filter choose-search-blk">
                                            <form action="#">
                                                <div class="row gx-2 align-items-center">
                                                    <div class="col-md-6 col-item">
                                                        <div class=" search-group">
                                                            <i class="feather-search"></i>
                                                            <input type="text" class="form-control"
                                                                placeholder="Search our courses">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-6 col-item">
                                                        {{-- <div class="form-group select-form mb-0">
                                                            <select class="form-select select select2-hidden-accessible"
                                                                name="sellist1" data-select2-id="1" tabindex="-1"
                                                                aria-hidden="true">
                                                                <option data-select2-id="3">Choose</option>
                                                                <option>Angular</option>
                                                                <option>React</option>
                                                                <option>Node</option>
                                                            </select><span
                                                                class="select2 select2-container select2-container--default"
                                                                dir="ltr" data-select2-id="2"
                                                                style="width: 100%;"><span class="selection"><span
                                                                        class="select2-selection select2-selection--single"
                                                                        role="combobox" aria-haspopup="true"
                                                                        aria-expanded="false" tabindex="0"
                                                                        aria-disabled="false"
                                                                        aria-labelledby="select2-sellist1-eq-container"><span
                                                                            class="select2-selection__rendered"
                                                                            id="select2-sellist1-eq-container"
                                                                            role="textbox" aria-readonly="true"
                                                                            title="Choose">Choose</span><span
                                                                            class="select2-selection__arrow"
                                                                            role="presentation"><b
                                                                                role="presentation"></b></span></span></span><span
                                                                    class="dropdown-wrapper"
                                                                    aria-hidden="true"></span></span>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="settings-tickets-blk course-instruct-blk ">

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
                                                                    <img src="{{ asset('img/course/course-10.jpg') }}"
                                                                        class="img-fluid " alt="">
                                                                </a>
                                                            </div>
                                                            <div class="sell-tabel-info">
                                                                <p><a href="course-details.html">Information About UI/UX
                                                                        Design Degree</a></p>
                                                                <div
                                                                    class="course-info d-flex align-items-center border-bottom-0 pb-0">
                                                                    <div class="rating-img d-flex align-items-center">
                                                                        <img src="{{ asset('img/icon/icon-01.svg') }}"
                                                                            alt="">
                                                                        <p>10+ Lesson</p>
                                                                    </div>
                                                                    <div class="course-view d-flex align-items-center">
                                                                        <img src="{{ asset('img/icon/timer-start.svg') }}"
                                                                            alt="">
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
                                                                    <img src="{{ asset('img/course/course-11.jpg') }}"
                                                                        class="img-fluid " alt="">
                                                                </a>
                                                            </div>
                                                            <div class="sell-tabel-info">
                                                                <p><a href="course-details.html">Wordpress for Beginners -
                                                                        Master Wordpress Quickly</a></p>
                                                                <div
                                                                    class="course-info d-flex align-items-center border-bottom-0 pb-0">
                                                                    <div class="rating-img d-flex align-items-center">
                                                                        <img src="{{ asset('img/icon/icon-01.svg') }}"
                                                                            alt="">
                                                                        <p>10+ Lesson</p>
                                                                    </div>
                                                                    <div class="course-view d-flex align-items-center">
                                                                        <img src="{{ asset('img/icon/timer-start.svg') }}"
                                                                            alt="">
                                                                        <p>7hr 20min</p>
                                                                    </div>
                                                                </div>
                                                                <div class="course-stip progress-stip">
                                                                    <div
                                                                        class="progress-bar bg-success progress-bar-striped active-stip">
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
                                                                    <img src="{{ asset('img/course/course-12.jpg') }}"
                                                                        class="img-fluid " alt="">
                                                                </a>
                                                            </div>
                                                            <div class="sell-tabel-info">
                                                                <p><a href="course-details.html">Sketch from A to Z (2022):
                                                                        Become an app designer</a></p>
                                                                <div
                                                                    class="course-info d-flex align-items-center border-bottom-0 pb-0">
                                                                    <div class="rating-img d-flex align-items-center">
                                                                        <img src="{{ asset('img/icon/icon-01.svg') }}"
                                                                            alt="">
                                                                        <p>10+ Lesson</p>
                                                                    </div>
                                                                    <div class="course-view d-flex align-items-center">
                                                                        <img src="{{ asset('img/icon/timer-start.svg') }}"
                                                                            alt="">
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
                        <div class="s">

                            <div class="settings-inner-blk p-0">
                                <div
                                    class="sell-course-head comman-space d-flex justify-content-between align-items-center">
                                    <h3>Courses</h3>
                                    <div class="go-dashboard text-center">
                                        <a href="{{ url('/admin/course/create') }}" class="btn btn-primary">Create New
                                            Course</a>
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
                                                            <input type="text" class="form-control"
                                                                placeholder="Search our courses">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-6 col-item">
                                                        {{-- <div class="form-group select-form mb-0">
                                                            <select class="form-select select select2-hidden-accessible"
                                                                name="sellist1" data-select2-id="1" tabindex="-1"
                                                                aria-hidden="true">
                                                                <option data-select2-id="3">Choose</option>
                                                                <option>Angular</option>
                                                                <option>React</option>
                                                                <option>Node</option>
                                                            </select><span
                                                                class="select2 select2-container select2-container--default"
                                                                dir="ltr" data-select2-id="2"
                                                                style="width: 100%;"><span class="selection"><span
                                                                        class="select2-selection select2-selection--single"
                                                                        role="combobox" aria-haspopup="true"
                                                                        aria-expanded="false" tabindex="0"
                                                                        aria-disabled="false"
                                                                        aria-labelledby="select2-sellist1-eq-container"><span
                                                                            class="select2-selection__rendered"
                                                                            id="select2-sellist1-eq-container"
                                                                            role="textbox" aria-readonly="true"
                                                                            title="Choose">Choose</span><span
                                                                            class="select2-selection__arrow"
                                                                            role="presentation"><b
                                                                                role="presentation"></b></span></span></span><span
                                                                    class="dropdown-wrapper"
                                                                    aria-hidden="true"></span></span>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="settings-tickets-blk course-instruct-blk ">

                                        <table class="table table-nowrap mb-2">
                                            <thead>
                                                <tr>
                                                    <th>COURSES</th>
                                                    <th>STUDENTS</th>
                                                    <th>STATUS</th>
                                                    <th>ACTIONS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($courses as $course)
                                                    <tr>
                                                        <td>
                                                            <div class="sell-table-group d-flex align-items-center">
                                                                <div class="sell-group-img">
                                                                    <a href="course-details.html">
                                                                        <img src="{{ asset('images/course/cover_image/' . $course->cover_photo) }}"
                                                                            class="img-fluid " alt="">
                                                                    </a>
                                                                </div>
                                                                <div class="sell-tabel-info">
                                                                    <p><a
                                                                            href="course-details.html">{{ $course->title }}</a>
                                                                    </p>
                                                                    <div
                                                                        class="course-info d-flex align-items-center border-bottom-0 pb-0">
                                                                        <div class="rating-img d-flex align-items-center">
                                                                            <img src="{{ asset('img/icon/icon-01.svg') }}"
                                                                                alt="">
                                                                            <p>10+ Lesson</p>
                                                                        </div>
                                                                        <div class="course-view d-flex align-items-center">
                                                                            <img src="{{ asset('img/icon/timer-start.svg') }}"
                                                                                alt="">
                                                                            <p>7hr 20min</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>3200</td>
                                                        <td>
                                                            @if ($course->status == 1)
                                                                <span class="badge info-low">Live</span>
                                                            @else
                                                                <span class="badge info-inter">Darft</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <div class="actionBtn">
                                                                <span class="more">
                                                                    <button type="button" onclick="showDropdown()"> <i
                                                                            class="feather-more-vertical" id="showDropdown"></i></button>
                                                                </span>
                                                                <ul class="more-details hidden" id="more-details">
                                                                    <li> <a href="">Top Rated</a></li>
                                                                    <li> <a href="">Trending</a></li>
                                                                    <li> <a href="">Most Purchased</a></li>
                                                                    <li> <a href="">Newly Added</a></li>
                                                                    <li> <a href="">Free</a></li>
                                                                    <li> <a href="">Handpicked</a></li>
                                                                </ul>
                                                            </div>


                                                        </td>
                                                    </tr>
                                                @endforeach
                                                {{-- <tr>
                                                    <td>
                                                        <div class="sell-table-group d-flex align-items-center">
                                                            <div class="sell-group-img">
                                                                <a href="course-details.html">
                                                                    <img src="{{ asset('img/course/course-11.jpg') }}"
                                                                        class="img-fluid " alt="">
                                                                </a>
                                                            </div>
                                                            <div class="sell-tabel-info">
                                                                <p><a href="course-details.html">Wordpress for Beginners -
                                                                        Master Wordpress Quickly</a></p>
                                                                <div
                                                                    class="course-info d-flex align-items-center border-bottom-0 pb-0">
                                                                    <div class="rating-img d-flex align-items-center">
                                                                        <img src="{{ asset('img/icon/icon-01.svg') }}"
                                                                            alt="">
                                                                        <p>10+ Lesson</p>
                                                                    </div>
                                                                    <div class="course-view d-flex align-items-center">
                                                                        <img src="{{ asset('img/icon/timer-start.svg') }}"
                                                                            alt="">
                                                                        <p>7hr 20min</p>
                                                                    </div>
                                                                </div>
                                                                <div class="course-stip progress-stip">
                                                                    <div
                                                                        class="progress-bar bg-success progress-bar-striped active-stip">
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
                                                                    <img src="{{ asset('img/course/course-12.jpg') }}"
                                                                        class="img-fluid " alt="">
                                                                </a>
                                                            </div>
                                                            <div class="sell-tabel-info">
                                                                <p><a href="course-details.html">Sketch from A to Z (2022):
                                                                        Become an app designer</a></p>
                                                                <div
                                                                    class="course-info d-flex align-items-center border-bottom-0 pb-0">
                                                                    <div class="rating-img d-flex align-items-center">
                                                                        <img src="{{ asset('img/icon/icon-01.svg') }}"
                                                                            alt="">
                                                                        <p>10+ Lesson</p>
                                                                    </div>
                                                                    <div class="course-view d-flex align-items-center">
                                                                        <img src="{{ asset('img/icon/timer-start.svg') }}"
                                                                            alt="">
                                                                        <p>7hr 20min</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
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



    @push('scripts')
        <script>
            const list = document.querySelector('.more-details');
            const btn = document.querySelector('#showDropdown')

            btn.addEventListener('click', (e) => {

                list.classList.toggle('hidden')
                e.stopPropagation()
            })

            document.addEventListener('click', (e) => {
                if (e.target.closest('.more-details')) return

                list.classList.add('hidden')
            })
        </script>
    @endpush
@endsection
