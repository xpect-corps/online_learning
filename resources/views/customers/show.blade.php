@extends('layouts.app')
@section('title', 'dashboard')
@section('content')
<div class="page-content" >
                <div class="container-fluid">

                        <style>
        .buttonWrapper {
            position: relative;
            background: #ffffff;
            height: 35px;
            width: auto;
            min-width: 157px;
            border: #e2e4e7 solid 2px;
            border-radius: 50px;
        }

        .buttonWrapper button {
            border: none;
            focus: none;
            width: 100%;
            height: 100%;
            background: transparent;
            padding: auto 24px;
        }

        .buttonWrapperClose {
            position: absolute;
            top: -7px;
            right: -7px;
            background: #fc0000;
            color: #fff;
            font-size: 1rem;
            width: 20px;
            height: 20px;
            border-radius: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #007bc2;
            background-color: #f3f6f9;
            font-weight: 700;
        }

        .select2-container--default .select2-selection--single {
            border-radius: 10px;
            box-shadow: 5px 8px 10px -6px #3f3f3f0f;
            border: 1px solid #0000000f
        }

        .select2-dropdown {

            border: 1px solid #0000000f;
            border-radius: 10px;
        }

        .select2-container--default .select2-search--dropdown .select2-search__field {
            border: 1px solid #f0f0f0;
        }

        .btn-outline-dark::after {
            position: relative;
            content: "";
            left: 0;
            bottom: 0;
            background-color: #007bc2
        }

        .btn-outline-dark:hover {
            background-color: #fff;
            color: #495057;

        }

        .close-icon {
            position: relative;
            background-color: #fc0000;
            color: #fff;
            padding: 3px 4px;
            border-radius: 11px;
            font-size: 11px;
            left: -17%;

            bottom: 25%;
        }
    </style>
        <div class="row pt-5">
        <input type="hidden" value="160" id="customer_id">
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


                        <a class="btn btn-danger text-white mb-3 profile-back-arrow " href="{{ url('customers') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left">
                                <line x1="19" y1="12" x2="5" y2="12"></line>
                                <polyline points="12 19 5 12 12 5"></polyline>
                            </svg></a>








                        <span class="d-flex align-items-center">
                                                            <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/users/user-dummy-img.jpg') }}" alt="Header Avatar">

                            <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-inline-block ms-1 fw-bold user-name-text membership-title"> {{ $customer->user->first_name.' '.$customer->user->last_name }}
                                     </span>
                                <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Member Since <span class="fw-bold">28th Dec 2022</span></span>
                            </span>
                        </span>



                        <div class="bg-danger   profile-back-arrow  user-icon" style="display:none;" id="user">
                            <a href="" class="text-white">App User</a>
                        </div>



                    </div>
                </div>
            </div>
            <!--end card-->


            {{-- <div class="card side-cards">
                <div class="card-body ">
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-grow-1">
                            <h5 class="card-title mb-0 fw-bold membership-title">Complete Your Profile</h5>
                        </div>
                        <div class="flex-shrink-0       px-2">
                            <a href="javascript:void(0);" class="badge bg-soft-primary text-black fs-12" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-edit-box-line align-bottom me-1"></i> Edit</a>

                        </div>
                    </div>
                    <div class="progress animated-progress custom-progress progress-label ">
                        <div class="progress-bar profie-progress" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100">
                            <div class="label">37%</div>
                        </div>
                    </div>
                </div>
            </div> --}}



            {{-- <div class="card side-cards">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-grow-1">
                            <h5 class="card-title fw-bold membership-title mb-0">Intake Coordinator</h5>
                        </div>
                        <div class="flex-shrink-0">
                            <a href="javascript:void(0);" class="badge bg-soft-primary text-black fs-12 px-2" onclick="enableAddCordinator()">Assign</a>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-2" id="assign-add" style="display:none;">
                        <div class="mb-3">
                            <label for="customername-field" class="form-label modal-field-text">Assign
                                Coordinator</label>
                            <div class="d-flex">
                                <select class="form-select  form-control me-3" aria-label=".form-select-lg example" name="booking_coordinator" id="booking_coordinator" required="">
                                    <option value="">Select Booking
                                        Coordinator</option>
                                                                            <option value="11">
                                            Amelie Amelie</option>
                                                                            <option value="73">
                                            Kunjumol Francis</option>
                                                                    </select>
                                <button onclick="assignCordinator()" type="button" class="btn btn-dark btn-icon waves-effect waves-light rounded-circle px-3 "><i class="ri-add-line align-bottom "></i></button>

                            </div>
                        </div>
                    </div>

                    <div id="coordinator">

                    </div>
                </div>
            </div>



            <div class="card side-cards">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-grow-1">
                            <h5 class="card-title mb-0 membership-title fw-bold">Call Tracker</h5>
                        </div>

                        <div class="flex-shrink-0">
                            <a href="javascript:void(0);" class="badge bg-soft-primary text-black fs-12 px-2"> View
                                details</a>
                        </div>
                    </div>
                    <span class="d-flex align-items-center">


                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check text-white bg-success p-1 rounded-circle">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>

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
                                <a href="javascript:void(0);" class="badge  text-black fs-12 "> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check text-white bg-success m-1 p-1 pending-icon rounded-circle">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg> Downloaded</a>
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
                                <a href="http://139.59.56.25/neogen_backend_application/public/customers/show_child/160" class="badge bg-soft-primary text-black fs-10 px-2">
                                    Add/Remove</a>
                            </div>
                                            </div>
                    <span class="d-flex align-items-center gap-2">
                                                    <input type="hidden" value="0" id="connected_users_count">
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
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">BUTOMY PRIVATE
                                    LIMITED</span>
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
            </div> --}}


            <!--end card-->
        </div>
        <!--end col-->

        <!---start tab-->

        <div class="col-xxl-9">
            <div class="card mt-xxl-n5">
                <div class="card-header border-0" id="profile-details-head">
                    <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                        <li class="nav-item">

                                <a class="nav-toggle nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab" aria-selected="false">
                                Profile Details
                            </a>
                        </li>

                        {{-- <li class="nav-item">
                            <a class="nav-toggle nav-link" data-bs-toggle="tab" href="#experience" role="tab" aria-selected="false">


                                Medical Records
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-toggle nav-link" data-bs-toggle="tab" href="#privacy" role="tab" aria-selected="false">


                                Documents
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-toggle nav-link" data-bs-toggle="tab" href="#booking" role="tab" aria-selected="false">


                                Bookings
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-toggle nav-link" data-bs-toggle="tab" href="#activity" role="tab" aria-selected="true">


                                Activity
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-toggle nav-link" data-bs-toggle="tab" href="#membership" role="tab" aria-selected="false">


                                Membership Plans
                            </a>
                        </li> --}}
                    </ul>
                </div>

                <div class="card-body p-0 ">
                    <div class="tab-content ">
                        <div class="tab-pane active" id="personalDetails" role="tabpanel">

                            <form action="javascript:void(0);">
                                <div class="row">
                                    <div class="card-header p-0 border-0">
                                        <div class="row bg-light py-2 px-3 border-0 ">
                                            <div class="col-md-4">
                                                <div class="d-flex justify-content-sm-start">
                                                    <h5 class="pt-2" style="font-weight: 500;"><span style="font-weight: 900;"> CUSTOMER ID </span> : {{ $customer->id }}
                                                        </h5>

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="d-flex justify-content-sm-start">
                                                    {{-- <h5 class="pt-2" style="font-weight: 500;"><span style="font-weight: 700;"> Location </span> : Trivandrum
                                                        Central </h5> --}}

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="d-flex justify-content-sm-end">

                                                    <div class="flex-shrink-0">
                                                        <ul class="nav nav-pills card-header-pills" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" data-bs-toggle="tab" href="#developers" role="tab">
                                                                    Personal Details
                                                                </a>
                                                            </li>
                                                            {{-- <li class="nav-item">
                                                                <a class="nav-link" data-bs-toggle="tab" href="#medical" role="tab">
                                                                    Medical
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-bs-toggle="tab" href="#managers" role="tab">
                                                                    Life Style
                                                                </a>
                                                            </li> --}}
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card p-0" style="-webkit-box-shadow: none; margin-bottom: 0;">
                                        <!-- end card header -->
                                        <div class="card-body">
                                            <!-- Tab panes -->
                                            <div class="tab-content text-muted">
                                                <div class="tab-pane active" id="developers" role="tabpanel">
                                                    <div class="card-body">
                                                        <!-- Tab panes -->
                                                        <div class="tab-content text-muted">
                                                            <div class="tab-pane active" id="home2" role="tabpanel">
                                                                <div class="modal-body p-0 ">
                                                                    <div class="row">

                                                                        <h4 class="fw-bold pb-2 text-primary">Member
                                                                            Overview</h4>
                                                                            <hr>
                                                                            <br>


                                                                        <div class="col-md-4 d-flex pb-3">
                                                                            <div class="col-md-5">
                                                                                <span class="fw-bold text-dark"> First
                                                                                    Name</span>
                                                                            </div>:
                                                                            <div class="col-md-7 px-2">
                                                                                <span class="fw-medium">{{ $customer->user->first_name }}</span>
                                                                            </div>
                                                                        </div>


                                                                        <div class="col-md-4 d-flex  pb-3">
                                                                            <div class="col-md-5">
                                                                                <span class="fw-bold text-dark"> Last
                                                                                    Name</span>
                                                                            </div>:
                                                                            <div class="col-md-7 px-2">
                                                                                <span class="fw-medium">{{ $customer->user->last_name }}</span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4 d-flex  pb-3">
                                                                            <div class="col-md-5">
                                                                                <span class="fw-bold text-dark"> Contact
                                                                                    Number</span>
                                                                            </div>:
                                                                            <div class="col-md-7 px-2">
                                                                                <span class="fw-medium">{{ $customer->user->mobile_number }}</span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4 d-flex  pb-3">
                                                                            <div class="col-md-5">
                                                                                <span class="fw-bold text-dark">
                                                                                    Gender</span>
                                                                            </div>:
                                                                            <div class="col-md-7 px-2">
                                                                          <span class="fw-medium">{{ $customer->user->gender }}</span>
                                                                                                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4 d-flex  pb-3">
                                                                            <div class="col-md-5">
                                                                                <span class="fw-bold text-dark"> Date of
                                                                                    Birth</span>
                                                                            </div>:
                                                                            <div class="col-md-7 px-2">
                                                                                <span class="fw-medium">{{ $customer->user->dob }}</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4 d-flex  pb-3">
                                                                            <div class="col-md-5">
                                                                                <span class="fw-bold text-dark">
                                                                                    Alternative Number</span>
                                                                            </div>:
                                                                            <div class="col-md-7 px-2">
                                                                                <span class="fw-medium"> -</span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4 d-flex  pb-3">
                                                                            <div class="col-md-5">
                                                                                <span class="fw-bold text-dark"> Email
                                                                                    Address</span>
                                                                            </div> :

                                                                            <div class="col-md-7 px-2">
                                                                                <span class="fw-medium">{{ $customer->user->email  }}</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4 d-flex  pb-3">
                                                                            <div class="col-md-5">
                                                                                <span class="fw-bold text-dark"> Residence
                                                                                    type </span>
                                                                            </div> :
                                                                            <div class="col-md-7 px-2">
                                                                                <span class="fw-medium">
                                                                                    </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4 d-flex  pb-3">
                                                                            <div class="col-md-5">
                                                                                <span class="fw-bold text-dark"> Address
                                                                                </span>
                                                                            </div> :
                                                                            <div class="col-md-7 px-2">
                                                                                <span class="fw-medium"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4 d-flex  pb-3">
                                                                            <div class="col-md-5">
                                                                                <span class="fw-bold text-dark"> State
                                                                                </span>
                                                                            </div> :
                                                                            <div class="col-md-7 px-2">
                                                                                <span class="fw-medium">
                                                                                    </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4 d-flex  pb-3">
                                                                            <div class="col-md-5">
                                                                                <span class="fw-bold text-dark"> city
                                                                                </span>
                                                                            </div> :
                                                                            <div class="col-md-7 px-2">
                                                                                <span class="fw-medium">
                                                                                    </span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4 d-flex  pb-3">
                                                                            <div class="col-md-5">
                                                                                <span class="fw-bold text-dark">
                                                                                    Age</span>
                                                                            </div>:
                                                                            <div class="col-md-7 px-2">
                                                                          <span class="fw-medium">{{ $customer->user->age }}</span>
                                                                                                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4 d-flex  pb-3">
                                                                            <div class="col-md-5">
                                                                                <span class="fw-bold text-dark">
                                                                                    Height</span>
                                                                            </div>:
                                                                            <div class="col-md-7 px-2">
                                                                          <span class="fw-medium">{{ $customer->height }} &nbsp; {{ $customer->height_unit }}</span>
                                                                                                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4 d-flex  pb-3">
                                                                            <div class="col-md-5">
                                                                                <span class="fw-bold text-dark">
                                                                                    Weight</span>
                                                                            </div>:
                                                                            <div class="col-md-7 px-2">
                                                                          <span class="fw-medium">{{ $customer->weight }} &nbsp; {{ $customer->weight_unit }}</span>
                                                                                                                                                            </div>
                                                                        </div>


                                                                        <div class="col-md-4 d-flex  pb-3">
                                                                            <div class="col-md-5">
                                                                                <span class="fw-bold text-dark">
                                                                                    Vegetarian</span>
                                                                            </div>:
                                                                            <div class="col-md-7 px-2">
                                                                          <span class="fw-medium">{{ $customer->is_vegitarian == 1 ? "Yes" : "No" }}</span>
                                                                                                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4 d-flex  pb-3">
                                                                            <div class="col-md-5">
                                                                                <span class="fw-bold text-dark">
                                                                                    Activity Level</span>
                                                                            </div>:
                                                                            <div class="col-md-7 px-2">
                                                                          <span class="fw-medium">{{ Str::ucfirst($customer->acitivity_level) }}</span>
                                                                                                                                                            </div>
                                                                        </div>


                                                                        <div class="col-md-4 d-flex  pb-3">
                                                                            <div class="col-md-5">
                                                                                <span class="fw-bold text-dark">
                                                                                    Weight Control</span>
                                                                            </div>:
                                                                            <div class="col-md-7 px-2">
                                                                          <span class="fw-medium">{{ $customer->weight_want_to }}</span>
                                                                                                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4 d-flex  pb-3">
                                                                            <div class="col-md-5">
                                                                                <span class="fw-bold text-dark">
                                                                                    Weekly Goal</span>
                                                                            </div>:
                                                                            <div class="col-md-7 px-2">
                                                                          <span class="fw-medium">{{ $customer->goal }}</span>
                                                                                                                                                            </div>
                                                                        </div>

                                                                    </div>




                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <!--end row-->
                                                </div>

                                            </div>
                                        </div><!-- end card-body -->
                                    </div>


                                </div>
                                <!--end row-->
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>

                </div>
                @endsection
