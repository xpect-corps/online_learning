@extends('admin.layouts.admin_app')

@section('content')
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="add-course-header">
                    <h2>Add New Course</h2>
                    <div class="add-course-btns">
                        <ul class="nav">
                            <li>
                                <a href="{{url('/admin/course')}}" class="btn btn-black">Back to Course</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="btn btn-success-dark">Save</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="widget-set">
                        <div class="widget-setcount">
                            <ul id="progressbar">
                                <li class="progress-active">
                                    <p><span></span> Basic Information</p>
                                </li>
                                <li>
                                    <p><span></span> Courses Media</p>
                                </li>
                                <li>
                                    <p><span></span> Curriculum</p>
                                </li>
                                <li>
                                    <p><span></span> Settings</p>
                                </li>
                            </ul>
                        </div>
                        <div class="widget-content multistep-form">
                            <fieldset id="first">
                                <div class="add-course-info">
                                    <div class="add-course-inner-header">
                                        <h4>Basic Information</h4>
                                    </div>
                                    <div class="add-course-form">
                                        <form action="#">
                                            <div class="form-group">
                                                <label class="add-course-label">Title</label>
                                                <input type="text" class="form-control" placeholder="Course Title" />
                                            </div>
                                            <div class="form-group">
                                                <label class="add-course-label">Tutor</label>
                                                <input type="text" class="form-control" placeholder="Course Title" />
                                            </div>
                                            <div class="form-group">
                                                <label class="add-course-label">Courses Category</label>
                                                <select class="form-control select">
                                                    <option>Category 01</option>
                                                    <option>Category 02</option>
                                                    <option>Category 03</option>
                                                    <option>Category 04</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-0">
                                                <label class="add-course-label">Course Description</label>
                                                <div id="editor"></div>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="widget-btn">
                                        <a class="btn btn-black">Back</a>
                                        <a class="btn btn-info-light next_btn">Continue</a>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="field-card">
                                <div class="add-course-info">
                                    <div class="add-course-inner-header">
                                        <h4>Courses Media</h4>
                                    </div>
                                    <div class="add-course-form">
                                        <form action="#">
                                            <div class="form-group">
                                                <label class="add-course-label">Course cover image</label>

                                                <div class="relative-form">
                                                    <span id="fileName"><input type="text" class="border-0 bg-white"
                                                            disabled placeholder="No file choose"> </span>
                                                    <label class="relative-file-upload">
                                                        Upload Image
                                                        <input type="file" name="file" class="InputFile"
                                                            id="myFile"
                                                            onchange="document.getElementById('ImagePreview').src = window.URL.createObjectURL(this.files[0])">
                                                    </label>

                                                </div>



                                            </div>
                                            <div class="form-group">
                                                <div class="add-image-box">
                                                    <img id="ImagePreview" src="">

                                                </div>

                                            </div>

                                            <input type="file" accept="video/*" id="input-tag" />
                                            <hr>
                                            <div class="video-div">
                                                <video controls id="video-tag" class="w-100">
                                                    <source id="video-source" src="splashVideo">
                                                    Your browser does not support the video tag.
                                                </video>
                                            </div>


                                            {{-- <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Video URL" />
                                            </div>
                                            <div class="form-group">
                                                <div class="add-image-box add-video-box">
                                                    <a href="javascript:void(0);">
                                                        <i class="fas fa-circle-play"></i>
                                                    </a>
                                                </div>
                                            </div> --}}
                                        </form>
                                    </div>
                                    <div class="widget-btn">
                                        <a class="btn btn-black prev_btn">Previous</a>
                                        <a class="btn btn-info-light next_btn">Continue</a>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="field-card">
                                <div class="add-course-info">
                                    <div class="add-course-inner-header">
                                        <h4>Curriculum</h4>
                                    </div>
                                    <div class="add-course-section">
                                        <a href="javascript:void(0);" class="btn">Add Section</a>
                                    </div>
                                    <div class="add-course-form">
                                        <div class="curriculum-grid">
                                            <div class="curriculum-head">
                                                <p>Section 1: Introduction</p>
                                                <a href="javascript:void(0);" class="btn">Add Lecture</a>
                                            </div>
                                            <div class="curriculum-info">
                                                <div id="accordion">
                                                    <div class="faq-grid">
                                                        <div class="faq-header">
                                                            <a class="collapsed faq-collapse" data-bs-toggle="collapse"
                                                                href="#collapseOne">
                                                                <i class="fas fa-align-justify"></i>
                                                                Introduction
                                                            </a>
                                                            <div class="faq-right">
                                                                <a href="javascript:void(0);">
                                                                    <i class="far fa-pen-to-square me-1"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" class="me-0">
                                                                    <i class="far fa-trash-can"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div id="collapseOne" class="collapse"
                                                            data-bs-parent="#accordion">
                                                            <div class="faq-body">
                                                                <div class="add-article-btns">
                                                                    <a href="javascript:void(0);" class="btn">Add
                                                                        Article</a>
                                                                    <a href="javascript:void(0);" class="btn me-0">Add
                                                                        Description</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-grid">
                                                        <div class="faq-header">
                                                            <a class="collapsed faq-collapse" data-bs-toggle="collapse"
                                                                href="#collapseTwo">
                                                                <i class="fas fa-align-justify"></i>
                                                                Installing Development Software
                                                            </a>
                                                            <div class="faq-right">
                                                                <a href="javascript:void(0);">
                                                                    <i class="far fa-pen-to-square me-1"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" class="me-0">
                                                                    <i class="far fa-trash-can"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div id="collapseTwo" class="collapse"
                                                            data-bs-parent="#accordion">
                                                            <div class="faq-body">
                                                                <div class="add-article-btns">
                                                                    <a href="javascript:void(0);" class="btn">Add
                                                                        Article</a>
                                                                    <a href="javascript:void(0);" class="btn me-0">Add
                                                                        Description</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-grid mb-0">
                                                        <div class="faq-header">
                                                            <a class="collapsed faq-collapse" data-bs-toggle="collapse"
                                                                href="#collapseThree">
                                                                <i class="fas fa-align-justify"></i> Hello
                                                                World Project from GitHub
                                                            </a>
                                                            <div class="faq-right">
                                                                <a href="javascript:void(0);">
                                                                    <i class="far fa-pen-to-square me-1"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" class="me-0">
                                                                    <i class="far fa-trash-can"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div id="collapseThree" class="collapse"
                                                            data-bs-parent="#accordion">
                                                            <div class="faq-body">
                                                                <div class="add-article-btns">
                                                                    <a href="javascript:void(0);" class="btn">Add
                                                                        Article</a>
                                                                    <a href="javascript:void(0);" class="btn me-0">Add
                                                                        Description</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="curriculum-grid mb-0">
                                            <div class="curriculum-head">
                                                <p>Section 1: JavaScript Beginnings</p>
                                                <a href="javascript:void(0);" class="btn">Add Lecture</a>
                                            </div>
                                            <div class="curriculum-info">
                                                <div id="accordion-one">
                                                    <div class="faq-grid">
                                                        <div class="faq-header">
                                                            <a class="collapsed faq-collapse" data-bs-toggle="collapse"
                                                                href="#collapseFour">
                                                                <i class="fas fa-align-justify"></i>
                                                                Introduction
                                                            </a>
                                                            <div class="faq-right">
                                                                <a href="javascript:void(0);">
                                                                    <i class="far fa-pen-to-square me-1"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" class="me-0">
                                                                    <i class="far fa-trash-can"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div id="collapseFour" class="collapse"
                                                            data-bs-parent="#accordion-one">
                                                            <div class="faq-body">
                                                                <div class="add-article-btns">
                                                                    <a href="javascript:void(0);" class="btn">Add
                                                                        Article</a>
                                                                    <a href="javascript:void(0);" class="btn me-0">Add
                                                                        Description</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-grid">
                                                        <div class="faq-header">
                                                            <a class="collapsed faq-collapse" data-bs-toggle="collapse"
                                                                href="#collapseFive">
                                                                <i class="fas fa-align-justify"></i>
                                                                Installing Development Software
                                                            </a>
                                                            <div class="faq-right">
                                                                <a href="javascript:void(0);">
                                                                    <i class="far fa-pen-to-square me-1"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" class="me-0">
                                                                    <i class="far fa-trash-can"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div id="collapseFive" class="collapse"
                                                            data-bs-parent="#accordion-one">
                                                            <div class="faq-body">
                                                                <div class="add-article-btns">
                                                                    <a href="javascript:void(0);" class="btn">Add
                                                                        Article</a>
                                                                    <a href="javascript:void(0);" class="btn me-0">Add
                                                                        Description</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-grid">
                                                        <div class="faq-header">
                                                            <a class="collapsed faq-collapse" data-bs-toggle="collapse"
                                                                href="#collapseSix">
                                                                <i class="fas fa-align-justify"></i> Hello
                                                                World Project from GitHub
                                                            </a>
                                                            <div class="faq-right">
                                                                <a href="javascript:void(0);">
                                                                    <i class="far fa-pen-to-square me-1"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" class="me-0">
                                                                    <i class="far fa-trash-can"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div id="collapseSix" class="collapse"
                                                            data-bs-parent="#accordion-one">
                                                            <div class="faq-body">
                                                                <div class="add-article-btns">
                                                                    <a href="javascript:void(0);" class="btn">Add
                                                                        Article</a>
                                                                    <a href="javascript:void(0);" class="btn me-0">Add
                                                                        Description</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-grid mb-0">
                                                        <div class="faq-header">
                                                            <a class="collapsed faq-collapse" data-bs-toggle="collapse"
                                                                href="#collapseSeven">
                                                                <i class="fas fa-align-justify"></i> Our
                                                                Sample Website
                                                            </a>
                                                            <div class="faq-right">
                                                                <a href="javascript:void(0);">
                                                                    <i class="far fa-pen-to-square me-1"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" class="me-0">
                                                                    <i class="far fa-trash-can"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div id="collapseSeven" class="collapse"
                                                            data-bs-parent="#accordion-one">
                                                            <div class="faq-body">
                                                                <div class="add-article-btns">
                                                                    <a href="javascript:void(0);" class="btn">Add
                                                                        Article</a>
                                                                    <a href="javascript:void(0);" class="btn me-0">Add
                                                                        Description</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-btn">
                                        <a class="btn btn-black prev_btn">Previous</a>
                                        <a class="btn btn-info-light next_btn">Continue</a>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="field-card">
                                <div class="add-course-info">
                                    <div class="add-course-inner-header">
                                        <h4>Requirements</h4>
                                    </div>
                                    <div class="add-course-form">
                                        <form action="#">
                                            <div class="form-group form-group-tagsinput">
                                                <input type="text" data-role="tagsinput"
                                                    class="input-tags form-control" name="html"
                                                    value="jquery, bootstrap" id="html" />
                                            </div>
                                            <div class="form-group mb-0">
                                                <label class="add-course-label">Price</label>
                                                <input type="text" class="form-control" placeholder="10.00" />
                                            </div>
                                        </form>
                                    </div>
                                    <div class="widget-btn">
                                        <a class="btn btn-black prev_btn">Previous</a>
                                        <a class="btn btn-info-light next_btn">Continue</a>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="field-card">
                                <div class="add-course-info">
                                    <div class="add-course-msg">
                                        <i class="fas fa-circle-check"></i>
                                        <h4>The Course Added Succesfully</h4>
                                        <p>Admin will be Approve soon.</p>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    @endpush
@endsection
