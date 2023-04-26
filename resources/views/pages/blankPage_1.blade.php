@extends('layouts.app')

@section('content')

<div class="row mt-5">
    <div class="col-xxl-3">
        <div class="card side-cards mt-n5">
            <div class="card-body p-4">
                <div class="d-flex align-items-center">

                    <div class="dropdown d-md-none topbar-head-dropdown header-item">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-search fs-22"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
    
                
    
                    <div class="bg-danger  profile-back-arrow" id="danger-arrow">
                   <a href="index.html" class="text-white"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg></a>       
                        </div>
    
    
                 
                 
    
                 
    
                    <span class="d-flex align-items-center">
                        <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                        <span class="text-start ms-xl-2">
                            <span class="d-none d-xl-inline-block ms-1 fw-bold user-name-text membership-title">Ananthapuri Hospital</span>
                            <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Triavandrum</span>
                        </span>
                    </span>


                    
                    <div class="bg-danger   profile-back-arrow  user-icon" style="display:none;" id="user">
                        <a href="" class="text-white">User</a>       
                             </div>



                </div>
            </div>
        </div>
        <!--end card-->
      

        <div class="card side-cards">
            <div class="card-body ">
                <div class="d-flex align-items-center mb-4">
                    <div class="flex-grow-1">
                        <h5 class="card-title mb-0 fw-bold membership-title">Complete Your Profile</h5>
                    </div>
                    <div class="flex-shrink-0       px-2">
                        <a href="javascript:void(0);" class="badge bg-soft-primary text-black fs-12"><i class="ri-edit-box-line align-bottom me-1"></i> Edit</a>
                    </div>
                </div>
                <div class="progress animated-progress custom-progress progress-label ">
                    <div class="progress-bar profie-progress" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                        <div class="label">30%</div>
                    </div>
                </div>
            </div>
        </div>

       
        <div class="card  side-cards" id="remove-card">
            <div class="card-body membership-card">
                <div class="d-flex align-items-center mb-3">
                    <div class="flex-grow-1">
                        <h5 class="card-title text-white mb-1 fw-bold membership-title">Memebership Plan</h5>
                        <h6 class="card-title text-white mb-0 display-5 fw-light membership-sub-title  ">Corporate Plan / Butomy</h6>
                    </div>
                    <div class="flex-shrink-0">
                        <a href="javascript:void(0);" class="badge bg-light text-black fs-12 px-2"> View Details</a>
                    </div>
                </div>
                <div class="d-flex align-items-center ">
                    <div class="flex-grow-1">
                        <h5 class="card-title text-white mb-1 fw-bold membership-title">Plan Valid Till</h5>
                        <h6 class="card-title text-white mb-0 fw-light display-5 membership-sub-title  ">25th Aug 2022</h6>
                    </div>
                    <div class="flex-shrink-0">
                       
                      <h6 class="text-white fw-light text-expire mt-4"> (25 days to Expire) </h6>
                    </div>
                </div>
             
            </div>
        </div>

        <div class="card side-cards">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <div class="flex-grow-1">
                        <h5 class="card-title fw-bold membership-title mb-0">Intake Coordinator</h5>
                    </div>
                   
                </div>
                <span class="d-flex align-items-center">
                   
                    <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle">
                    <span class="text-start ms-xl-2">
                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Manu s</span>
                        <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Coordinator Since 25th OCT 2020</span>
                    </span>
                    <span class="d-flex align-items-center gap-2">
                        <i class="las la-phone bg-soft-dark p-1 text-dark rounded-circle"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square message-icon bg-soft-dark text-soft-dark rounded-circle"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                        <i class="lab la-whatsapp bg-soft-dark p-1 text-dark rounded-circle"></i>
                       
                        <!-- <span class="text-start ms-xl-2">
                            <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Welcome Call</span>
                           
                        </span> -->
                    </span>
                    
                </span>
            </div>
        </div>



        <div class="card side-cards">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <div class="flex-grow-1">
                        <h5 class="card-title mb-0 membership-title fw-bold">Call Tracker</h5>
                    </div>
                    
                    <div class="flex-shrink-0">
                        <a href="javascript:void(0);" class="badge bg-soft-primary text-black fs-12 px-2"> View details</a>
                    </div>
                </div>
                <span class="d-flex align-items-center">
                   
                   
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check text-white bg-success p-1 rounded-circle"><polyline points="20 6 9 17 4 12"></polyline></svg> 
                 
                    <span class="text-start ms-xl-2">
                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Welcome Call</span>
                       
                    </span>
                </span>
            </div>
        </div>

       

        <div class="card side-cards">
            <div class="card-body">
                <div class="d-flex align-items-center ">
                    <div class="flex-grow-1">
                        <h5 class="card-title mb-0">App Download Status</h5>
                    </div>
                    <div class="flex-shrink-0   m-1    ">
                        <a href="javascript:void(0);" class="badge  text-black fs-12 ">    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check text-white bg-soft-dark m-1 p-1 pending-icon rounded-circle"><polyline points="20 6 9 17 4 12"></polyline></svg>  Pending</a>
                    </div>
            
                 
                </div>
                
            </div>
        </div>

        <div class="card side-cards">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <div class="flex-grow-1">
                        <h5 class="card-title mb-0 membership-title fw-bold">Connected Users</h5>
                    </div>
                    
                    <div class="flex-shrink-0">
                        <a href="javascript:void(0);" class="badge bg-soft-primary text-black fs-10 px-2"> Add/Remove</a>
                    </div>
                </div>
                <span class="d-flex align-items-center gap-2">
                   
                    <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle border border-primary border-2">
                    <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle border border-bg-soft-dark border-2">
                    <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle border border-bg-soft-dark opacity-50 border-2" "="">
                    <!-- <span class="text-start ms-xl-2">
                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Welcome Call</span>
                       
                    </span> -->
                </span>
            </div>
        </div>

        <div class="card side-cards" id="card-remove">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <div class="flex-grow-1">
                        <h5 class="card-title mb-0 membership-title fw-bold">Corporate Connection</h5>
                    </div>
                    
                 
                </div>
                <div class="d-flex align-items-center mb-1">
                    <div class="flex-grow-1">
                        <span class="text-start ms-xl-2">
                            <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">BUTOMY PRIVATE LIMITED</span>
                            <!-- <div class="flex-shrink-0">
                                <a href="javascript:void(0);" class="badge bg-light text-black fs-12"> View details</a>
                            </div> -->
                        </span>
                    </div>
                    
                    <div class="flex-shrink-0">
                        <a href="javascript:void(0);" class="badge bg-soft-primary text-black fs-10 px-2"> Remove</a>
                    </div>
                </div>
                <span class="d-flex align-items-center">
                   
                 
                   
                </span>
            </div>
        </div>

      
        <!--end card-->
    </div>
    <!--end col-->

<!---start tab-->

<div class="col-xxl-9">
<div class="card mt-xxl-n5">
<div class="card-header border-0" id="profile-details-head">
                <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                    <li class="nav-item">
                        <a class=" nav-link active" onclick="add()" data-bs-toggle="tab" href="#personalDetails" role="tab">
                            <i class="ri-home-3-line"></i>
                            Profile Details
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="remove()" data-bs-toggle="tab" href="#changePassword" role="tab">
                            <svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="far" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M272 304h-96C78.8 304 0 382.8 0 480c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32C448 382.8 369.2 304 272 304zM48.99 464C56.89 400.9 110.8 352 176 352h96c65.16 0 119.1 48.95 127 112H48.99zM224 256c70.69 0 128-57.31 128-128c0-70.69-57.31-128-128-128S96 57.31 96 128C96 198.7 153.3 256 224 256zM224 48c44.11 0 80 35.89 80 80c0 44.11-35.89 80-80 80S144 172.1 144 128C144 83.89 179.9 48 224 48z"></path></svg><!-- <i class="far fa-user"></i> Font Awesome fontawesome.com -->
                           Doctor List
                        </a>
                    </li>
                
                   
                    
                </ul>
            </div>
           
<div class="card-body p-0 ">
<div class="tab-content ">
<div class="tab-pane profile-tab-card active" id="personalDetails" role="tabpanel">
<form action="javascript:void(0);">
<div class="row">
    <div class="card-header p-0 border-0">
        <div class="row bg-light py-2 px-3 border-0 ">
            <div class="col-md-6">
                <div class="d-flex justify-content-sm-start">
                   <h5 class="pt-2" style="font-weight: 500;"><span style="font-weight: 900;"> MRN </span> : NIL</h5>
               
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-sm-end">
                   
              
                    <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"> Update</button>
                  
                </div>
            </div>
            
        </div>
    </div>
    <div class="modal-body  ">
        <div class="row">
         <div class="modal-body  ">
    <div class="row">
        {{-- <div class="choices" data-type="select-multiple" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
            <div class="choices__inner">
               
                <div class="choices__list choices__list--multiple">
                    <div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="Choice 1" data-custom-properties="[object Object]" aria-selected="true" data-deletable="">Choice 1
                        <button type="button" class="choices__button" aria-label="Remove item: 'Choice 1'" data-button="">Remove item</button>
                </div>
                </div>
            </div>
        </div> --}}

         {{-- <select class="js-example-basic-multiple" name="states[]" multiple="multiple" >
                <option value="AL" data-custom-properties="[object Object]">Choice 1</option>
                <option value="Choice 3" data-custom-properties="[object Object]">Choice 3</option></select> --}}

              
{{-- <div class="col-md-4 ">
            <div class="mb-3">
                <select class="js-example-basic-multiple border-0 p-5 " id="select2-data-1-c1i3" name="states[]" multiple="multiple">
                    <option value="AL">Alabama</option>
                      ...
                    <option value="WY">Wyoming</option>
                  </select>
                </div>
</div> --}}


        <div class="col-md-4 ">
            <div class="mb-3">
                <label for="customername-field" class="form-label modal-field-text">Hospital ID</label>
                <input type="text" id="customername-field" class="form-control bg-light" placeholder="" required="">
                </div>

           <div class="mb-3">
<label for="customername-field" class="form-label modal-field-text">Alternate Number</label>
<input type="text" id="customername-field" class="form-control bg-light" placeholder="" required="">
</div>
            
            </div>

            <div class="col-md-4 ">
                <div class="mb-3">
                    <label for="customername-field" class="form-label modal-field-text">Hospital Name</label>
                    <input type="text" id="customername-field" class="form-control bg-light" placeholder="" required="">
                    </div>

               <div class="mb-3">
<label for="customername-field" class="form-label modal-field-text">Contact Number</label>
<input type="text" id="customername-field" class="form-control bg-light" placeholder="" required="">
</div>
                
                </div>


<div class="col-md-4">
<div class="form-outline mb-4">
<label class="form-label modal-field-text" for="form4Example3 ">Address</label>
<textarea class="form-control bg-light " style="height: 123px;" id="form4Example3" rows="4"></textarea>

</div>
</div>

<div class="col-md-4 ">
    <div class="mb-3">
    <label for="customername-field" class="form-label modal-field-text">Status</label>
    <select class="form-select mb-3 form-control bg-light" aria-label=".form-select-lg example">
    <option selected=""></option>
    <option value="1">Active</option>
    <option value="2">Inactive</option>
   
    </select>
    
    
    </div>
</div>



<div class="col-md-4 ">
<div class="mb-3">
    <label for="customername-field" class="form-label modal-field-text">Adress Landmark</label>
    <input type="text" id="customername-field" class="form-control bg-light" placeholder="" required="">
    </div>
</div>

<div class="col-md-4 ">
    <div class="mb-3">
    <label for="customername-field" class="form-label modal-field-text">District</label>
    <select class="form-select mb-3 form-control bg-light" aria-label=".form-select-lg example">
    <option selected=""></option>
    <option value="1">Trivandrum</option>
    <option value="2">Kollam</option>
    <option value="2">Ernamkulam</option>
    </select>
    
    
    </div>
    </div>

<div class="col-md-4 ">
<div class="mb-3">
<label for="customername-field" class="form-label modal-field-text">State</label>
<select class="form-select mb-3 form-control bg-light" aria-label=".form-select-lg example">
<option selected=""></option>
<option value="1">Kerala</option>
<option value="2">Tamilnadu</option>
<option value="2">Karnataka</option>
</select>


</div>
</div>

<div class="col-md-4">
<div class="mb-3">
<label for="customername-field" class="form-label modal-field-text">Pincode</label>
<input type="text" id="customername-field" class="form-control bg-light" placeholder="" required="">
</div>
</div>

</div>
  
</div>













</div>

    </div>
    
    <!--end col-->
  
    <!--end col-->
  
 

  
    <!--end col-->
</div>
<!--end row-->
</form>
</div>
<!--end tab-pane-->

<div class="tab-pane" id="changePassword" role="tabpanel">
    <div class="row">
        <div class="col-lg-12">
            <div class="card table-card" style="    margin: 2px 0px;">
            <!-- end card header -->
    
                <div class="card-body">
                    <div id="customerList">
                        <div class="row g-4 mb-3">
                            <div class="col-sm-auto">
                                <div>
                                    <!-- <div class="search-box ms-2">
                                        <input type="text" class="form-control search" placeholder="Search...">
                                        <i class="ri-search-line search-icon"></i>
                                    </div> -->
                                    <form class="app-search d-none d-md-block">
                                        <div class="position-relative">
                                            <input type="text" class="form-control search-table" placeholder="Search..." autocomplete="off" id="search-options" value="">
                                            <span class="mdi mdi-magnify search-widget-icon"></span>
                                            <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options"></span>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                                            <div data-simplebar="init" style="max-height: 320px;"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;">
                                                <!-- item-->
                                                <div class="dropdown-header">
                                                    <h6 class="text-overflow text-muted mb-0 text-uppercase">Recent Searches</h6>
                                                </div>
                    
                                                <div class="dropdown-item bg-transparent text-wrap">
                                                    <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">how to setup <i class="mdi mdi-magnify ms-1"></i></a>
                                                    <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">buttons <i class="mdi mdi-magnify ms-1"></i></a>
                                                </div>
                                                <!-- item-->
                                                <div class="dropdown-header mt-2">
                                                    <h6 class="text-overflow text-muted mb-1 text-uppercase">Pages</h6>
                                                </div>
                    
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                    <i class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"></i>
                                                    <span>Analytics Dashboard</span>
                                                </a>
                    
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                    <i class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
                                                    <span>Help Center</span>
                                                </a>
                    
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                    <i class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
                                                    <span>My account settings</span>
                                                </a>
                    
                                                <!-- item-->
                                                <div class="dropdown-header mt-2">
                                                    <h6 class="text-overflow text-muted mb-2 text-uppercase">Members</h6>
                                                </div>
                    
                                                <div class="notification-list">
                                                    <!-- item -->
                                                    <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                                        <div class="d-flex">
                                                            <img src="assets/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                            <div class="flex-1">
                                                                <h6 class="m-0">Angela Bernier</h6>
                                                                <span class="fs-11 mb-0 text-muted">Manager</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <!-- item -->
                                                    <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                                        <div class="d-flex">
                                                            <img src="assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                            <div class="flex-1">
                                                                <h6 class="m-0">David Grasso</h6>
                                                                <span class="fs-11 mb-0 text-muted">Web Designer</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <!-- item -->
                                                    <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                                        <div class="d-flex">
                                                            <img src="assets/images/users/avatar-5.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                            <div class="flex-1">
                                                                <h6 class="m-0">Mike Bunch</h6>
                                                                <span class="fs-11 mb-0 text-muted">React Developer</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></div>
                    
                                            <div class="text-center pt-3 pb-1">
                                                <a href="pages-search-results.html" class="btn btn-primary btn-sm">View All Results <i class="ri-arrow-right-line ms-1"></i></a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="d-flex justify-content-end">
                                   
                                    
                                    <button type="button" class="btn btn-Filter "><i class="ri-equalizer-fill align-bottom"></i> Filters</button>
                                    <button type="button" class="btn btn-addlead add-btn py-2 px-4" "="" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Add Doctor</button>
                                  
                                </div>
                            </div>



                        </div>
                        
                        {{-- <div class="table-responsive table-card mt-3 mb-1">
                            <table class="table align-middle table-nowrap" id="customerTable">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col" style="width: 50px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                #
                                            </div>
                                        </th>
                                        <th data-column-id="company" class="gridjs-th gridjs-th-sort" tabindex="0" style="Border:none;"><div class="gridjs-th-content">Lead ID</div><button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending" class="gridjs-sort gridjs-sort-neutral"></button></th>
                                        <th data-column-id="company" class="gridjs-th gridjs-th-sort" tabindex="0" style="Border:none;"><div class="gridjs-th-content">Date</div><button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending" class="gridjs-sort gridjs-sort-neutral"></button></th>
                                        <th class="sort" data-sort="phone">Patient Name</th>
                                        <th class="sort" data-sort="date">Client Name</th>
                                        <th class="sort" data-sort="status">Contact Number</th>  
                                        <th class="sort" data-sort="action">Sales Agent</th>
                                        <th class="sort" data-sort="action">Lead Source</th>
                                        <th class="sort" data-sort="action">Lead Status</th>
                                        <th><a href="javascript:void(0);" class="link-success d-none"><i class="ri-arrow-right-line align-middle"></i></a></th>
                                        </tr>
                                </thead>
                                <tbody class="list form-check-all">
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                10
                                            </div>
                                        </th>
                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                        <td class="customer_ID">1236</td>
                                        <td class="date">01/07/222</td>
                                        <td class="patient_name">Tojo Thomas</td>
                                        <td class="client name">BUTOMY Private Limited</td>
                                        <td class="contact_number">+918086595642</td>
                                        <td>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle">
                                                </div>
                                                <div class="flex-grow-1">
                                                    Rahul Raj
                                                </div>
                                            </div>
                                        </td>
                                        <td class="lead_source">Refferance</td>
                                        
                                        <td>
                                            <div class="d-flex gap-2">
                                                <div class="edit">
                                                    <button class="btn btn-sm btn-lead edit-item-btn" data-bs-toggle="modal" data-bs-target="">New Lead</button>
                                                </div>
                                              
                                            </div>
                                        </td>
                                        <td><a href="user-management.html" class="link-success "><i class="ri-arrow-right-line align-middle"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                9
                                            </div>
                                        </th>
                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                        <td class="customer_ID">1236</td>
                                        <td class="date">01/07/222</td>
                                        <td class="patient_name">Tojo Thomas</td>
                                        <td class="client name">BUTOMY Private Limited</td>
                                        <td class="contact_number">+918086595642</td>
                                        <td>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle">
                                                </div>
                                                <div class="flex-grow-1">
                                                    Rahul Raj
                                                </div>
                                            </div>
                                        </td>
                                        <td class="lead_source">Refferance</td>
                                        
                                        <td>
                                            <div class="d-flex gap-2">
                                                <div class="edit">
                                                    <button class="btn btn-sm btn-lead edit-item-btn" data-bs-toggle="modal" data-bs-target="">New Lead</button>
                                                </div>
                                              
                                            </div>
                                        </td>
                                        <td><a href="user-management.html" class="link-success "><i class="ri-arrow-right-line align-middle"></i></a></td>
                                    </tr>
                                  
                                 
                                
                                   
                                </tbody>
                            </table>
                            <div class="noresult" style="display: none">
                                <div class="text-center">
                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                    </lord-icon>
                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                    <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any
                                        orders for you search.</p>
                                </div>
                            </div>
                        </div> --}}
    
                        <div class="table-responsive mt-3 mb-1">
                            <table class="table align-middle table-nowrap" id="customerTable">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col" style="width: 50px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                #
                                            </div>
                                        </th>
                                      
                                        <th data-column-id="company" class="gridjs-th gridjs-th-sort" tabindex="0" style="Border:none;"><div class="gridjs-th-content">Date</div><button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending" class="gridjs-sort gridjs-sort-neutral"></button></th>
                                        <th class="sort" data-sort="phone">Task ID</th>
                                        <th class="sort" data-sort="date">Task</th>
                                        <th class="sort" data-sort="status">Assigned</th>  
                                        <th class="sort" data-sort="action">Status</th>
                                       
                                        <th><a href="javascript:void(0);" class="link-success d-none"><i class="ri-arrow-right-line align-middle"></i></a></th>
                                        </tr>
                                </thead>
                                <tbody class="list form-check-all">
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                6
                                            </div>
                                        </th>
                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                        
                                        <td class="date">01/07/222</td>
                                        <td class="Task ID">175</td>
                                        <td class="Task">Doctor Visit</td>
                                        <td class="Assigned">Dr Naveen S</td>
                                        <td><span class="badge bg-success  schedule-badge">Scheduled</span></td>
                                      
                                    
                                        <td><a href="user-management.html" class="link-success text-primary fs-12 fw-bold ">View Details</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                5
                                            </div>
                                        </th>
                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                        
                                        <td class="date">01/07/222</td>
                                        <td class="Task ID">175</td>
                                        <td class="Task">Complete Blood Count</td>
                                        <td class="Assigned">Jancy M C + 1</td>
                                        <td><span class="badge bg-danger not-scheduled-badge">Not Scheduled</span></td>
                                      
                                    
                                        <td><a href="user-management.html" class="link-success text-primary fs-12 fw-bold ">View Details</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                4
                                            </div>
                                        </th>
                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                        
                                        <td class="date">01/07/222</td>
                                        <td class="Task ID">175</td>
                                        <td class="Task">Doctor Visit</td>
                                        <td class="Assigned">Dr Naveen S</td>
                                        <td><span class="badge bg-danger not-scheduled-badge">Not Scheduled</span></td>
                                      
                                    
                                        <td><a href="user-management.html" class="link-success text-primary fs-12 fw-bold ">View Details</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                3
                                            </div>
                                        </th>
                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                        
                                        <td class="date">01/07/222</td>
                                        <td class="Task ID">175</td>
                                        <td class="Task">Complete Blood Count</td>
                                        <td class="Assigned">Dr Naveen S</td>
                                        <td><span class="badge bg-danger not-scheduled-badge">Not Scheduled</span></td>
                                      
                                    
                                        <td><a href="user-management.html" class="link-success text-primary fs-12 fw-bold ">View Details</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                2
                                            </div>
                                        </th>
                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                        
                                        <td class="date">01/07/222</td>
                                        <td class="Task ID">175</td>
                                        <td class="Task">Doctor Visit</td>
                                        <td class="Assigned">Dr Naveen S</td>
                                        <td><span class="badge bg-primary rescheduled-badge">Re-Scheduled</span></td>
                                      
                                    
                                        <td><a href="user-management.html" class="link-success text-primary fs-12 fw-bold ">View Details</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                1
                                            </div>
                                        </th>
                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                        
                                        <td class="date">01/07/222</td>
                                        <td class="Task ID">175</td>
                                        <td class="Task">Doctor Visit</td>
                                        <td class="Assigned">Dr Naveen S</td>
                                        <td><span class="badge completed-badge">Completed</span></td>
                                      
                                    
                                        <td><a href="user-management.html" class="link-success text-primary fs-12 fw-bold ">View Details</a></td>
                                    </tr>
                                
                                
                                   
                                </tbody>
                            </table>
                            <div class="gridjs-footer p-0"><div class="gridjs-pagination m-4"><div role="status" aria-live="polite" class="gridjs-summary" title="Page 1 of 1">Showing <b>1</b> to <b>10</b> of <b>10</b> results</div><div class="gridjs-pages"><button tabindex="0" role="button" disabled="" title="Previous" aria-label="Previous" class="">Previous</button><button tabindex="0" role="button" class="gridjs-currentPage" title="Page 1" aria-label="Page 1">1</button><button tabindex="0" role="button" disabled="" title="Next" aria-label="Next" class="">Next</button></div></div></div>
                            
                            
                            
                            
                            <div class="noresult" style="display: none">
                                <div class="text-center">
                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                    </lord-icon>
                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                    <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any
                                        orders for you search.</p>
                                </div>
                            </div>
                            </div>
                        
                       
                    </div>
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end col -->
        
    </div>
</div>
<!--end tab-pane-->

</div>
</div>
</div>
</div>



<!---end--->



</div>


<div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header  p-3 ">
                <h5 class="modal-title" id="exampleModalLabel"> Create New Doctor</h5>
                {{-- <div class="radio-button ">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1">Normal User
                        <label class="form-check-label modal-field-text" for="inlineRadio1"></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2">
                        <label class="form-check-label modal-field-text" for="inlineRadio2">Corporate User</label>
                    </div>
                </div> --}}
                <button type="button" class="btn-modal-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal"><i class="ri-close-fill"></i></button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4 ">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label modal-field-text">First Name</label>
                                <input type="text" id="customername-field" class="form-control" placeholder=""
                                    required="">
                            </div>
                            {{-- <div class="mb-3">
                                <label for="customername-field" class="form-label modal-field-text">Contact
                                    Number</label>
                                <input type="text" id="customername-field" class="form-control" placeholder=""
                                    required="">
                            </div> --}}
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label modal-field-text">Middle Name</label>
                                <input type="text" id="customername-field" class="form-control" placeholder=""
                                    required="">
                            </div>
                            {{-- <div class="mb-3">
                                <label for="customername-field" class="form-label modal-field-text">Alternative
                                    Number</label>
                                <input type="text" id="customername-field" class="form-control" placeholder=""
                                    required="">
                            </div> --}}
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label modal-field-text">Last Name</label>
                                <input type="text" id="customername-field" class="form-control" placeholder=""
                                    required="">
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="md-form md-outline input-with-post-icon datepicker mb-3">
                                <label for="example " class="modal-field-text">Date of Birth</label>
                                <input placeholder="" type="date" id="example" class="form-control text-select ">

                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="md-form md-outline input-with-post-icon ">
                                <label for="example " class="modal-field-text">Record Date</label>
                                <input placeholder="" type="date" id="example" class="form-control text-select ">

                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="md-form md-outline input-with-post-icon mb-3">
                                <label for="example " class="modal-field-text">Record Time</label>
                                <input placeholder="" type="date" id="example" class="form-control text-select ">

                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="md-form md-outline input-with-post-icon mb-3">
                                <label for="example " class="modal-field-text">Record Time</label>
                                <input placeholder="" type="date" id="example" class="form-control text-select ">

                            </div>
                        </div>
                     
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">

                        <button type="submit" class="btn  modal-submit" id="add-btn">Submit</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection


