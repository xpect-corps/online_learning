@extends('user.layouts.app')

@section('content')
    <div class="main-wrapper" style="padding-top: 85px;">

        <div class="inner-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="instructor-wrap border-bottom-0 m-0">
                            <div class="about-instructor align-items-center">
                                <div class="abt-instructor-img">
                                    <a href="instructor-profile.html"><img src="{{asset('img/user/user1.jpg')}}" alt="img"
                                            class="img-fluid"></a>
                                </div>
                                <div class="instructor-detail me-3">
                                    <h5><a href="instructor-profile.html">Nicole Brown</a></h5>
                                    <p>UX/UI Designer</p>
                                </div>
                                <div class="rating mb-0">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating"><span>4.5</span> (15)</span>
                                </div>
                            </div>
                            <span class="web-badge mb-3">WEB DEVELPMENT</span>
                        </div>
                        <h2>The Complete Web Developer Course 2.0</h2>
                        <p>Learn Web Development by building 25 websites and mobile apps using HTML, CSS, Javascript, PHP,
                            Python, MySQL &amp; more!</p>
                        <div class="course-info d-flex align-items-center border-bottom-0 m-0 p-0">
                            <div class="cou-info">
                                <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                <p>12+ Lesson</p>
                            </div>
                            <div class="cou-info">
                                <img src="{{asset('img/icon/timer-icon.svg')}}" alt="">
                                <p>9hr 30min</p>
                            </div>
                            <div class="cou-info">
                                <img src="{{asset('img/icon/people.svg')}}" alt="">
                                <p>32 students enrolled</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="page-content course-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">

                        <div class="card overview-sec">
                            <div class="card-body">
                                <h5 class="subs-title">Overview</h5>
                                <h6>Course Description</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a type specimen book. It has
                                    survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged.</p>
                                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                                    Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                    including versions of Lorem Ipsum.</p>
                                <h6>What you'll learn</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul>
                                            <li>Become a UX designer.</li>
                                            <li>You will be able to add UX designer to your CV</li>
                                            <li>Become a UI designer.</li>
                                            <li>Build &amp; test a full website design.</li>
                                            <li>Build &amp; test a full mobile app.</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li>Learn to design websites &amp; mobile phone apps.</li>
                                            <li>You'll learn how to choose colors.</li>
                                            <li>Prototype your designs with interactions.</li>
                                            <li>Export production ready assets.</li>
                                            <li>All the techniques used by UX professionals</li>
                                        </ul>
                                    </div>
                                </div>
                                <h6>Requirements</h6>
                                <ul class="mb-0">
                                    <li>You will need a copy of Adobe XD 2019 or above. A free trial can be downloaded from
                                        Adobe.</li>
                                    <li>No previous design experience is needed.</li>
                                    <li class="mb-0">No previous Adobe XD skills are needed.</li>
                                </ul>
                            </div>
                        </div>


                        <div class="card instructor-sec">
                            <div class="card-body">
                                <h5 class="subs-title">About the instructor</h5>
                                <div class="instructor-wrap">
                                    <div class="about-instructor">
                                        <div class="abt-instructor-img">
                                            <a href="instructor-profile.html"><img src="{{asset('img/user/user1.jpg')}}"
                                                    alt="img" class="img-fluid"></a>
                                        </div>
                                        <div class="instructor-detail">
                                            <h5><a href="instructor-profile.html">Nicole Brown</a></h5>
                                            <p>UX/UI Designer</p>
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">4.5 Instructor Rating</span>
                                    </div>
                                </div>
                                <div class="course-info d-flex align-items-center">
                                    <div class="cou-info">
                                        <img src="{{asset('img/icon/play.svg')}}" alt="">
                                        <p>5 Courses</p>
                                    </div>
                                    <div class="cou-info">
                                        <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                        <p>12+ Lesson</p>
                                    </div>
                                    <div class="cou-info">
                                        <img src="{{asset('img/icon/icon-02.svg')}}" alt="">
                                        <p>9hr 30min</p>
                                    </div>
                                    <div class="cou-info">
                                        <img src="{{asset('img/icon/people.svg')}}" alt="">
                                        <p>270,866 students enrolled</p>
                                    </div>
                                </div>
                                <p>UI/UX Designer, with 7+ Years Experience. Guarantee of High Quality Work.</p>
                                <p>Skills: Web Design, UI Design, UX/UI Design, Mobile Design, User Interface Design,
                                    Sketch, Photoshop, GUI, Html, Css, Grid Systems, Typography, Minimal, Template, English,
                                    Bootstrap, Responsive Web Design, Pixel Perfect, Graphic Design, Corporate, Creative,
                                    Flat, Luxury and much more.</p>
                                <p>Available for:</p>
                                <ul>
                                    <li>1. Full Time Office Work</li>
                                    <li>2. Remote Work</li>
                                    <li>3. Freelance</li>
                                    <li>4. Contract</li>
                                    <li>5. Worldwide</li>
                                </ul>
                            </div>
                        </div>


                        <div class="card review-sec">
                            <div class="card-body">
                                <h5 class="subs-title">Reviews</h5>
                                <div class="instructor-wrap">
                                    <div class="about-instructor">
                                        <div class="abt-instructor-img">
                                            <a href="instructor-profile.html"><img src="{{asset('img/user/user1.jpg')}}"
                                                    alt="img" class="img-fluid"></a>
                                        </div>
                                        <div class="instructor-detail">
                                            <h5><a href="instructor-profile.html">Nicole Brown</a></h5>
                                            <p>UX/UI Designer</p>
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">4.5 Instructor Rating</span>
                                    </div>
                                </div>
                                <p class="rev-info">“ This is the second Photoshop course I have completed with Cristian.
                                    Worth every penny and recommend it highly. To get the most out of this course, its best
                                    to to take the Beginner to Advanced course first. The sound and video quality is of a
                                    good standard. Thank you Cristian. “</p>
                                <a href="javascript:;" class="btn btn-reply"><i class="feather-corner-up-left"></i>
                                    Reply</a>
                            </div>
                        </div>


                        <div class="card comment-sec">
                            <div class="card-body">
                                <h5 class="subs-title">Post A comment</h5>
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Full Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Subject">
                                    </div>
                                    <div class="form-group">
                                        <textarea rows="4" class="form-control" placeholder="Your Comments"></textarea>
                                    </div>
                                    <div class="submit-section">
                                        <button class="btn submit-btn" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar-sec">

                            <div class="video-sec vid-bg">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="https://www.youtube.com/embed/1trvO6dqQUI" class="video-thumbnail"
                                            data-fancybox="">
                                            <div class="play-icon">
                                                <i class="fa-solid fa-play"></i>
                                            </div>
                                            <img class="" src="{{asset('img/video.jpg')}}" alt="">
                                        </a>
                                        <div class="video-details">
                                            <div class="course-fee">
                                                <h2>FREE</h2>
                                                <p><span>$99.00</span> 50% off</p>
                                            </div>
                                            <div class="row gx-2">
                                                <div class="col-md-6">
                                                    <a href="course-wishlist.html" class="btn btn-wish w-100"><i
                                                            class="feather-heart"></i> Add to Wishlist</a>
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="javascript:;" class="btn btn-wish w-100"><i
                                                            class="feather-share-2"></i> Share</a>
                                                </div>
                                            </div>
                                            <a href="{{url('/productcheckout')}}" class="btn btn-enroll w-100">Enroll Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card include-sec">
                                <div class="card-body">
                                    <div class="cat-title">
                                        <h4>Includes</h4>
                                    </div>
                                    <ul>
                                        <li><img src="{{asset('img/icon/import.svg')}}" class="me-2" alt=""> 11 hours
                                            on-demand video</li>
                                        <li><img src="{{asset('img/icon/play.svg')}}" class="me-2" alt=""> 69
                                            downloadable resources</li>
                                        <li><img src="{{asset('img/icon/cloud.svg')}}" class="me-2" alt="">
                                            Assignments</li>
                                        <li><img src="{{asset('img/icon/teacher.svg')}}" class="me-2" alt="">
                                            Certificate of Completion</li>
                                    </ul>
                                </div>
                            </div>


                            <div class="card feature-sec">
                                <div class="card-body">
                                    <div class="cat-title">
                                        <h4>Includes</h4>
                                    </div>
                                    <ul>
                                        <li><img src="{{asset('img/icon/users.svg')}}" class="me-2" alt=""> Enrolled:
                                            <span>32 students</span></li>
                                        <li><img src="{{asset('img/icon/timer.svg')}}" class="me-2" alt=""> Duration:
                                            <span>20 hours</span></li>
                                        <li><img src="{{asset('img/icon/chapter.svg')}}" class="me-2" alt="">
                                            Chapters: <span>15</span></li>
                                        <li><img src="{{asset('img/icon/video.svg')}}" class="me-2" alt="">
                                            Video:<span> 12 hours</span></li>
                                        <li><img src="{{asset('img/icon/chart.svg')}}" class="me-2" alt=""> Level:
                                            <span>Beginner</span></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
