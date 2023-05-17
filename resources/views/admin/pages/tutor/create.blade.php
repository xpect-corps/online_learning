@extends('admin.layouts.admin_app')

@section('content')
    <div class="container" style="transform: none;">
        <div class="row" style="transform: none;">

            {{-- <div class="col-xl-3 col-md-4 theiaStickySidebar"
                style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px; transform: none;">


                <div class="theiaStickySidebar"
                    style="padding-top: 1px; padding-bottom: 1px; position: static; transform: none; overflow: visible; box-sizing: border-box; min-height: 1px;">


                    <div class="theiaStickySidebar"
                        style="padding-top: 1px; padding-bottom: 1px; position: relative; transform: none;">
                        <div class="settings-widget dash-profile mb-3">
                            <div class="settings-menu p-0">
                                <div class="profile-bg">
                                    <img src="http://127.0.0.1:8000/img/profile-bg.jpg" alt="">
                                    <div class="profile-img">
                                        <a href="{{ url('admin/tutorshow') }}">
                                            <img class="img-fluid" alt="" src="{{ asset('img/user/user11.jpg') }}">
                                        </a>
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
                        <div class="resize-sensor"
                            style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                            <div class="resize-sensor-expand"
                                style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                <div
                                    style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 271px; height: 342px;">
                                </div>
                            </div>
                            <div class="resize-sensor-shrink"
                                style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                <div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%">
                                </div>
                            </div>
                        </div>
                        <div class="resize-sensor"
                            style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                            <div class="resize-sensor-expand"
                                style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                <div
                                    style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 271px; height: 342px;">
                                </div>
                            </div>
                            <div class="resize-sensor-shrink"
                                style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                <div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="add-course-header pb-0">
                        <h2>Add New Tutor</h2>
                        <div class="add-course-btns">
                            <ul class="nav">
                                <li>
                                    <a href="{{ url('/admin/tutor') }}" class="btn btn-black">Back to Tutor</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="btn btn-success-dark">Save</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-12 col-md-12">
                <div class="settings-widget profile-details">
                    <div class="settings-menu p-0">
                        <div class="page-banner student-bg-blk bg-white">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-12 d-flex justify-content-center">
                                        <div class="course-name d-flex align-items-center">
                                            <div class="form-group">
                                                <div class=" profile-image-circle">
                                                    <img id="ImagePreview" class="h-100 Profile-img" src="">
                                                </div>
                                            </div>
                                            <div class=" upload-profile-icon">
                                                <label class="">
                                                    <img src="{{asset('img/new-icons/upload.png')}}" alt="">
                                                    <input type="file" name="file" class="InputFile" id="myFile"
                                                        onchange="document.getElementById('ImagePreview').src = window.URL.createObjectURL(this.files[0])">
                                                </label>
        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
              
                        <div class="checkout-form personal-address add-course-info ">
                            <div class="personal-info-head">
                                <h4>Personal Details</h4>
                                <p>Edit your personal information and address.</p>
                            </div>
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">First Name</label>
                                            <input type="text" class="form-control" placeholder="Enter your first Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Last Name</label>
                                            <input type="text" class="form-control" placeholder="Enter your last Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Phone</label>
                                            <input type="text" class="form-control" placeholder="Enter your Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Email</label>
                                            <input type="text" class="form-control" placeholder="Enter your Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Birthday</label>
                                            <input type="text" class="form-control" placeholder="Birth of Date">
                                        </div>
                                    </div>
                                
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Country</label>
                                            <select class="form-select select country-select select2-hidden-accessible"
                                                name="sellist1" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                <option data-select2-id="3">Select country</option>
                                                <option>India</option>
                                                <option>America</option>
                                                <option>London</option>
                                            </select>
                                        </div>
                                    </div>
                               
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Address Line 1</label>
                                            <input type="text" class="form-control" placeholder="Address">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Address Line 2 (Optional)</label>
                                            <input type="text" class="form-control" placeholder="Address">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">City</label>
                                            <input type="text" class="form-control" placeholder="Enter your City">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">ZipCode</label>
                                            <input type="text" class="form-control" placeholder="Enter your Zipcode">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Category</label>
                                            <select class="form-select select country-select select2-hidden-accessible"
                                                name="sellist1" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                <option data-select2-id="3">Course Category</option>
                                                <option>India</option>
                                                <option>America</option>
                                                <option>London</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Course Tags</label>
                                            <select class="form-select select select2-hidden-accessible" id="course_Tags"
                                             data-select2-id="1" tabindex="-1" aria-hidden="true" name="states[]" multiple="multiple>
                                                <option data-select2-id="3">Select Tags</option>
                                                <option>India</option>
                                                <option>America</option>
                                                <option>London</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-0">
                                            <label class="add-course-label"
                                              >Course Description</label
                                            >
                                           <textarea class="form-control" name="" id="" cols="30" rows="3"></textarea>
                                          </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-0">
                                            <label class="add-course-label"
                                              >Profile Description</label
                                            >
                                            <div id="editor"></div>
                                          </div>
                                    </div>
                                    
                                   
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
