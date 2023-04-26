@extends('layouts.app')

@section('content')
    <div class="row pt-5">
        <input type="hidden" value="37" id="customer_id">
        <div class="col-xxl-3">
            <div class="card side-cards mt-n5">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center">

                        <div class="dropdown d-md-none topbar-head-dropdown header-item">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="bx bx-search fs-22"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..."
                                                aria-label="Recipient's username">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <a class="btn btn-danger text-white mb-3 profile-back-arrow " href=""
                            onclick="window.history.go(-1); return false;"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-arrow-left">
                                <line x1="19" y1="12" x2="5" y2="12"></line>
                                <polyline points="12 19 5 12 12 5"></polyline>
                            </svg></a>








                        <span class="d-flex align-items-center">
                            @if (Auth::user()->image != null)
                                <img class="rounded-circle header-profile-user"
                                    src="{{ Storage::disk('image')->url('uploads/profile_images/' . Auth::user()->image) }}"
                                    alt="Header Avatar">
                            @else
                                <img class="rounded-circle header-profile-user"
                                    src="{{ asset('assets/images/users/user-dummy-img.jpg') }}" alt="Header Avatar">
                            @endif

                            <span class="text-start ms-xl-2">
                                <span
                                    class="d-none d-xl-inline-block ms-1 fw-bold user-name-text membership-title">{{ Auth::user()->first_name }}
                                    {{ Auth::user()->middle_name }} {{ Auth::user()->last_name }}</span>
                                <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Member Since <span
                                        class="fw-bold">{{ \Carbon\Carbon::parse(Auth::user()->created_at)->format('jS M Y') }}</span></span>
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
                        <a href="javascript:void(0);" class="badge bg-soft-primary text-black fs-12" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-edit-box-line align-bottom me-1"></i> Edit</a>

                    </div>
                </div>
                {{-- <div class="progress animated-progress custom-progress progress-label ">
                    <div class="progress-bar profie-progress" role="progressbar" style="width: {{ $percentage }}%" aria-valuenow="{{ $percentage }}" aria-valuemin="0" aria-valuemax="100">
                        <div class="label">{{ $percentage }}%</div>
                    </div>
                </div> --}}
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
                            <a class="nav-link ">

                                Profile Details
                            </a>
                        </li>


                    </ul>
                </div>

                <div class="card-body p-0 ">
                    <div class="tab-content ">
                        <div class="tab-pane profile-tab-card active" id="personalDetails" role="tabpanel">
                            <form action="javascript:void(0);">
                                <div class="row">
                                    <div class="card-header p-0 ">

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

                                                                        <div class="col-md-4 d-flex pb-3">
                                                                            <div class="col-md-5">
                                                                                <span class="fw-bold text-dark"> First
                                                                                    Name</span>
                                                                            </div>:
                                                                            <div class="col-md-7 px-2">
                                                                                <span
                                                                                    class="fw-medium">{{ Auth::user()->first_name }}</span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4 d-flex  pb-3">
                                                                            <div class="col-md-5 ">
                                                                                <span class="fw-bold text-dark"> Middle
                                                                                    Name</span>
                                                                            </div>:
                                                                            <div class="col-md-7 px-2">
                                                                                <span
                                                                                    class="fw-medium">{{ Auth::user()->middle_name }}</span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4 d-flex  pb-3">
                                                                            <div class="col-md-5">
                                                                                <span class="fw-bold text-dark"> Last
                                                                                    Name</span>
                                                                            </div>:
                                                                            <div class="col-md-7 px-2">
                                                                                <span
                                                                                    class="fw-medium">{{ Auth::user()->last_name }}</span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4 d-flex  pb-3">
                                                                            <div class="col-md-5">
                                                                                <span class="fw-bold text-dark"> Contact
                                                                                    Number</span>
                                                                            </div>:
                                                                            <div class="col-md-7 px-2">
                                                                                <span
                                                                                    class="fw-medium">{{ Auth::user()->mobile_number }}</span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4 d-flex  pb-3">
                                                                            <div class="col-md-5">
                                                                                <span class="fw-bold text-dark">
                                                                                    Gender</span>
                                                                            </div>:
                                                                            <div class="col-md-7 px-2">
                                                                                @if (Auth::user()->gender == 'male')
                                                                                    <span class="fw-medium">Male</span>
                                                                                @elseif(Auth::user()->gender == 'female')
                                                                                    <span class="fw-medium">Female</span>
                                                                                @else
                                                                                    <span class="fw-medium">Other</span>
                                                                                @endif
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4 d-flex  pb-3">
                                                                            <div class="col-md-5">
                                                                                <span class="fw-bold text-dark"> Date of
                                                                                    Birth</span>
                                                                            </div>:
                                                                            <div class="col-md-7 px-2">
                                                                                <span
                                                                                    class="fw-medium">{{ Auth::user()->dob }}</span>
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
                                                                                <span
                                                                                    class="fw-medium">{{ Auth::user()->email }}</span>
                                                                            </div>
                                                                        </div>
                                                                        {{-- <div class="col-md-4 d-flex  pb-3">
                                                                            <div class="col-md-5">
                                                                                <span class="fw-bold text-dark"> Residence
                                                                                    type </span>
                                                                            </div> :
                                                                            <div class="col-md-7 px-2">
                                                                                <span class="fw-medium"> {{ Auth::user()->residence->name }}</span>
                                                                            </div>
                                                                        </div> --}}
                                                                        <div class="col-md-4 d-flex  pb-3">
                                                                            <div class="col-md-5">
                                                                                <span class="fw-bold text-dark"> Address
                                                                                </span>
                                                                            </div> :
                                                                            <div class="col-md-7 px-2">
                                                                                <span
                                                                                    class="fw-medium">{{ Auth::user()->address }}</span>
                                                                            </div>
                                                                        </div>
                                                                        {{-- <div class="col-md-4 d-flex  pb-3">
                                                                            <div class="col-md-5">
                                                                                <span class="fw-bold text-dark"> State
                                                                                </span>
                                                                            </div> :
                                                                            <div class="col-md-7 px-2">
                                                                                <span class="fw-medium">
                                                                                    {{ Auth::user()->statename->name }}</span>
                                                                            </div>
                                                                        </div> --}}
                                                                        {{-- <div class="col-md-4 d-flex  pb-3">
                                                                            <div class="col-md-5">
                                                                                <span class="fw-bold text-dark"> Landmark
                                                                                </span>
                                                                            </div> :
                                                                            <div class="col-md-7 px-2">
                                                                                <span
                                                                                    class="fw-medium">{{ Auth::user()->landmark }}</span>
                                                                            </div>
                                                                        </div> --}}
                                                                    </div>




                                                                    {{-- <div class="row mt-3">

                                                                        <h4 class="fw-bold pb-2 text-primary">Emergency
                                                                            Contact</h4>

                                                                        <div class="col-md-4 d-flex pb-3">
                                                                            <div class="col-md-5">
                                                                                <span class="fw-bold text-dark"> Name
                                                                                </span>
                                                                            </div>:
                                                                            <div class="col-md-7 px-2">
                                                                                <span class="fw-medium"></span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4 d-flex  pb-3">
                                                                            <div class="col-md-5 ">
                                                                                <span class="fw-bold text-dark">
                                                                                    Relationship </span>
                                                                            </div>:
                                                                            <div class="col-md-7 px-2">
                                                                                <span class="fw-medium"></span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4 d-flex  pb-3">
                                                                            <div class="col-md-5">
                                                                                <span class="fw-bold text-dark"> Contact
                                                                                    Number </span>
                                                                            </div>:
                                                                            <div class="col-md-7 px-2">
                                                                                <span class="fw-medium"></span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4 d-flex  pb-3">
                                                                            <div class="col-md-5">
                                                                                <span class="fw-bold text-dark"> State
                                                                                </span>
                                                                            </div>:
                                                                            <div class="col-md-7 px-2">
                                                                                <span class="fw-medium"></span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4 d-flex  pb-3">
                                                                            <div class="col-md-5">
                                                                                <span class="fw-bold text-dark">District
                                                                                </span>
                                                                            </div>:
                                                                            <div class="col-md-7 px-2">
                                                                                <span class="fw-medium"></span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4 d-flex  pb-3">
                                                                            <div class="col-md-5">
                                                                                <span class="fw-bold text-dark">
                                                                                    Pincode</span>
                                                                            </div>:
                                                                            <div class="col-md-7 px-2">
                                                                                <span class="fw-medium"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4 d-flex  pb-3">
                                                                            <div class="col-md-5">
                                                                                <span class="fw-bold text-dark"> Address
                                                                                </span>
                                                                            </div>:
                                                                            <div class="col-md-7 px-2">
                                                                                <span class="fw-medium"></span>
                                                                            </div>
                                                                        </div>




                                                                    </div> --}}


                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                {{-- <div class="tab-pane" id="medical" role="tabpanel">
                                                    <div class="card-body py-0 ">
                                                        <div class="col-lg d-flex align-items-center bg-light px-4 py-2 "
                                                            style="   margin: 13px -34px 13px; ">
                                                            <div class="col-2">
                                                                <span class="text-primary fw-bold"> Allergies</span>
                                                            </div>
                                                            <div class="col-4" data-select2-id="select2-data-6-996k">

                                                                <div class="form-group">
                                                                    <select
                                                                        class="form-control select2 select2-hidden-accessible"
                                                                        style="width: 100%;" tabindex="-1"
                                                                        aria-hidden="true" id="allergy" name="allergy"
                                                                        data-select2-id="select2-data-allergy">
                                                                        <option selected="" disabled=""
                                                                            data-select2-id="select2-data-2-de4w">Select
                                                                            Allergy</option>
                                                                        <option value="1">pet allergy</option>
                                                                        <option value="2">pollen allergy</option>
                                                                        <option value="3">drug allergy</option>
                                                                    </select><span
                                                                        class="select2 select2-container select2-container--default"
                                                                        dir="ltr"
                                                                        data-select2-id="select2-data-1-z8bz"
                                                                        style="width: 100%;"><span class="selection"><span
                                                                                class="select2-selection select2-selection--single"
                                                                                role="combobox" aria-haspopup="true"
                                                                                aria-expanded="false" tabindex="-1"
                                                                                aria-disabled="false"
                                                                                aria-labelledby="select2-allergy-container"
                                                                                aria-controls="select2-allergy-container"><span
                                                                                    class="select2-selection__rendered"
                                                                                    id="select2-allergy-container"
                                                                                    role="textbox" aria-readonly="true"
                                                                                    title="Select Allergy">Select
                                                                                    Allergy</span><span
                                                                                    class="select2-selection__arrow"
                                                                                    role="presentation"><b
                                                                                        role="presentation"></b></span></span></span><span
                                                                            class="dropdown-wrapper"
                                                                            aria-hidden="true"></span></span>
                                                                </div>

                                                            </div>
                                                            <div class="col-1 d-flex justify-content-center">
                                                                <button onclick="addAllergy()" type="button"
                                                                    class="btn btn-dark btn-icon waves-effect waves-light rounded-circle px-3"><i
                                                                        class="ri-add-line align-bottom "></i></button>
                                                            </div>

                                                        </div>

                                                        <div class="d-flex flex-wrap gap-2" id="allergy_list">
                                                            <input type="hidden" name="all_allergies" id="all_allergies"
                                                                value="[]">


                                                        </div>

                                                        <div class="col-lg d-flex align-items-center bg-light px-4 py-2 "
                                                            style=" margin: 13px -34px 13px; ">
                                                            <div class="col-2">
                                                                <span class="text-primary fw-bold"> Chronic Diseases</span>
                                                            </div>
                                                            <div class="col-4" data-select2-id="select2-data-6-996k">

                                                                <div class="form-group">
                                                                    <select
                                                                        class="form-control select2 select2-hidden-accessible"
                                                                        style="width: 100%;" tabindex="-1"
                                                                        aria-hidden="true" id="disease" name="disease"
                                                                        data-select2-id="select2-data-disease">
                                                                        <option selected="" disabled=""
                                                                            data-select2-id="select2-data-4-yc3x">Select
                                                                            Disease</option>
                                                                        <option value="1">Alzheimer's</option>
                                                                        <option value="2">Arthritis</option>
                                                                        <option value="3">Asthma</option>
                                                                        <option value="4">Cancer</option>
                                                                        <option value="5">Cystic Fibrosis</option>
                                                                    </select><span
                                                                        class="select2 select2-container select2-container--default"
                                                                        dir="ltr"
                                                                        data-select2-id="select2-data-3-z726"
                                                                        style="width: 100%;"><span class="selection"><span
                                                                                class="select2-selection select2-selection--single"
                                                                                role="combobox" aria-haspopup="true"
                                                                                aria-expanded="false" tabindex="-1"
                                                                                aria-disabled="false"
                                                                                aria-labelledby="select2-disease-container"
                                                                                aria-controls="select2-disease-container"><span
                                                                                    class="select2-selection__rendered"
                                                                                    id="select2-disease-container"
                                                                                    role="textbox" aria-readonly="true"
                                                                                    title="Select Disease">Select
                                                                                    Disease</span><span
                                                                                    class="select2-selection__arrow"
                                                                                    role="presentation"><b
                                                                                        role="presentation"></b></span></span></span><span
                                                                            class="dropdown-wrapper"
                                                                            aria-hidden="true"></span></span>
                                                                </div>

                                                            </div>
                                                            <div class="col-1 d-flex justify-content-center">
                                                                <button onclick="addDisease()" type="button"
                                                                    class="btn btn-dark btn-icon waves-effect waves-light rounded-circle px-3 "><i
                                                                        class="ri-add-line align-bottom "></i></button>
                                                            </div>
                                                        </div>

                                                        <div class="d-flex flex-wrap gap-2" id="disease_list">
                                                            <input type="hidden" name="all_diesases" id="all_diesases"
                                                                value="[]">


                                                        </div>


                                                        <div class="col-lg d-flex align-items-center bg-light px-4 py-2 "
                                                            style=" margin: 13px -34px 13px; ">
                                                            <div class="col-2">
                                                                <span class="text-primary fw-bold">Injuries</span>
                                                            </div>
                                                            <div class="col-4" data-select2-id="select2-data-6-996k">
                                                                <div class="form-group">
                                                                    <select
                                                                        class="form-control select2 select2-hidden-accessible"
                                                                        style="width: 100%;" tabindex="-1"
                                                                        aria-hidden="true" id="injury" name="injury"
                                                                        data-select2-id="select2-data-injury">
                                                                        <option selected="" disabled=""
                                                                            data-select2-id="select2-data-6-qz7z">Select
                                                                            Injury</option>
                                                                        <option value="1">Head injury</option>
                                                                        <option value="2">abdominal injury</option>
                                                                        <option value="3">Electrical injuries</option>
                                                                        <option value="4">Fractures (broken bones
                                                                        </option>
                                                                    </select><span
                                                                        class="select2 select2-container select2-container--default"
                                                                        dir="ltr"
                                                                        data-select2-id="select2-data-5-qwoi"
                                                                        style="width: 100%;"><span class="selection"><span
                                                                                class="select2-selection select2-selection--single"
                                                                                role="combobox" aria-haspopup="true"
                                                                                aria-expanded="false" tabindex="-1"
                                                                                aria-disabled="false"
                                                                                aria-labelledby="select2-injury-container"
                                                                                aria-controls="select2-injury-container"><span
                                                                                    class="select2-selection__rendered"
                                                                                    id="select2-injury-container"
                                                                                    role="textbox" aria-readonly="true"
                                                                                    title="Select Injury">Select
                                                                                    Injury</span><span
                                                                                    class="select2-selection__arrow"
                                                                                    role="presentation"><b
                                                                                        role="presentation"></b></span></span></span><span
                                                                            class="dropdown-wrapper"
                                                                            aria-hidden="true"></span></span>
                                                                </div>

                                                            </div>
                                                            <div class="col-1 d-flex justify-content-center">
                                                                <button onclick="addInjury()" type="button"
                                                                    class="btn btn-dark btn-icon waves-effect waves-light rounded-circle px-3 "><i
                                                                        class="ri-add-line align-bottom "></i></button>
                                                            </div>

                                                        </div>
                                                        <div class="d-flex flex-wrap gap-2" id="injury_list">
                                                            <input type="hidden" name="all_injuries" id="all_injuries"
                                                                value="[]">


                                                        </div>

                                                        <div class="col-lg d-flex align-items-center bg-light px-4 py-2 "
                                                            style=" margin: 13px -34px 13px; ">
                                                            <div class="col-2">
                                                                <span class="text-primary fw-bold"> Surgeries</span>
                                                            </div>
                                                            <div class="col-4" data-select2-id="select2-data-6-996k">

                                                                <div class="form-group">
                                                                    <select
                                                                        class="form-control select2 select2-hidden-accessible"
                                                                        style="width: 100%;" tabindex="-1"
                                                                        aria-hidden="true" id="surgery" name="surgery"
                                                                        data-select2-id="select2-data-surgery">
                                                                        <option selected="" disabled=""
                                                                            data-select2-id="select2-data-8-9u25">Select
                                                                            Surgery</option>
                                                                        <option value="1">Thoracic Surgery</option>
                                                                        <option value="2">Hand Surgery</option>
                                                                        <option value="3">Neurosurgery</option>
                                                                        <option value="4">Orthopedic Surgery</option>
                                                                    </select><span
                                                                        class="select2 select2-container select2-container--default"
                                                                        dir="ltr"
                                                                        data-select2-id="select2-data-7-7i1q"
                                                                        style="width: 100%;"><span class="selection"><span
                                                                                class="select2-selection select2-selection--single"
                                                                                role="combobox" aria-haspopup="true"
                                                                                aria-expanded="false" tabindex="-1"
                                                                                aria-disabled="false"
                                                                                aria-labelledby="select2-surgery-container"
                                                                                aria-controls="select2-surgery-container"><span
                                                                                    class="select2-selection__rendered"
                                                                                    id="select2-surgery-container"
                                                                                    role="textbox" aria-readonly="true"
                                                                                    title="Select Surgery">Select
                                                                                    Surgery</span><span
                                                                                    class="select2-selection__arrow"
                                                                                    role="presentation"><b
                                                                                        role="presentation"></b></span></span></span><span
                                                                            class="dropdown-wrapper"
                                                                            aria-hidden="true"></span></span>
                                                                </div>

                                                            </div>
                                                            <div class="col-1 d-flex justify-content-center">
                                                                <button onclick="addSurgery()" type="button"
                                                                    class="btn btn-dark btn-icon waves-effect waves-light rounded-circle px-3 "><i
                                                                        class="ri-add-line align-bottom "></i></button>
                                                            </div>

                                                        </div>
                                                        <div class="d-flex flex-wrap gap-2" id="surgery_list">
                                                            <input type="hidden" name="all_surgeries" id="all_surgeries"
                                                                value="[]">



                                                        </div>

                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="tab-pane" id="managers" role="tabpanel">
                                                    <div>
                                                        <div class="col-lg d-flex align-items-center bg-light px-4 py-2 question"
                                                            style=" margin: 13px -34px 13px; ">
                                                            <input type="hidden" name="question_id" id="question_id"
                                                                value="1">
                                                            <div class="col-4">
                                                                <div>
                                                                    Title : <span class="text-primary fw-bold">Alcoholic
                                                                        Consuption</span>
                                                                </div>
                                                                <div>
                                                                    Question : <span class="text-primary fw-bold">How many
                                                                        times do you drink per day ?</span>
                                                                </div>

                                                            </div>
                                                            <div class="col-4" data-select2-id="select2-data-6-996k">
                                                                <div class="form-group">
                                                                    <select
                                                                        class="form-control select2 select2-hidden-accessible"
                                                                        style="width: 100%;" tabindex="-1"
                                                                        aria-hidden="true" id="answer" name="answer"
                                                                        data-select2-id="select2-data-answer">
                                                                        <option selected="" disabled=""
                                                                            data-select2-id="select2-data-10-kzd2">Select
                                                                            Answer</option>
                                                                        <option value="1">One time</option>
                                                                        <option value="2">Two time</option>
                                                                        <option value="3">More than two times</option>
                                                                    </select><span
                                                                        class="select2 select2-container select2-container--default"
                                                                        dir="ltr"
                                                                        data-select2-id="select2-data-9-u89i"
                                                                        style="width: 100%;"><span class="selection"><span
                                                                                class="select2-selection select2-selection--single"
                                                                                role="combobox" aria-haspopup="true"
                                                                                aria-expanded="false" tabindex="-1"
                                                                                aria-disabled="false"
                                                                                aria-labelledby="select2-answer-container"
                                                                                aria-controls="select2-answer-container"><span
                                                                                    class="select2-selection__rendered"
                                                                                    id="select2-answer-container"
                                                                                    role="textbox" aria-readonly="true"
                                                                                    title="Select Answer">Select
                                                                                    Answer</span><span
                                                                                    class="select2-selection__arrow"
                                                                                    role="presentation"><b
                                                                                        role="presentation"></b></span></span></span><span
                                                                            class="dropdown-wrapper"
                                                                            aria-hidden="true"></span></span>
                                                                </div>

                                                            </div>
                                                            <div class="col-1 d-flex justify-content-center">
                                                                <button onclick="addLifeStyle(1)" type="button"
                                                                    value="1"
                                                                    class="btn btn-dark btn-icon waves-effect waves-light rounded-circle px-3 "><i
                                                                        class="ri-add-line align-bottom "></i></button>
                                                            </div>

                                                        </div>

                                                        <div class="d-flex flex-wrap gap-2" id="answer_list">
                                                            <div id="answer-parent-1">
                                                                <button class="btn rounded-pill btn-outline-dark">Two
                                                                    time</button>
                                                                <i type="button" class="ri-close-fill close-icon"
                                                                    onclick="removeAnswer(1,2);"></i>
                                                            </div>

                                                        </div>
                                                    </div>



                                                    <!--end row-->
                                                </div> --}}
                                            </div>
                                        </div><!-- end card-body -->
                                    </div>





                                    <!--end col-->

                                    <!--end col-->




                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                        <!--end tab-pane-->
                        <!--end tab-pane-->
                    </div>
                </div>
            </div>
        </div>
        


        <!---end--->



        <!--end col-->
        <!--  -->
    </div>
    <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header  p-3 ">
                    <h5 class="modal-title" id="exampleModalLabel"> Member Overview</h5>

                    <button type="button" class="btn-modal-close" data-bs-dismiss="modal" aria-label="Close"
                        id="close-modal"
                        style="    position: relative;
                                           left: 29px;bottom: 27px;"><i
                            class="ri-close-fill"></i></button>
                </div>

                {!! Form::model(Auth::user(), [
                    'method' => 'POST',
                    'route' => 'profile.update',
                    'enctype' => 'multipart/form-data',
                ]) !!}
                {{ csrf_field() }}

                {{-- <input type="hidden" name="selected_country_id" id="selected_country_id"
                    value="{{ Auth::user()->country }}">
                <input type="hidden" name="selected_state_id" id="selected_state_id"
                    value="{{ Auth::user()->state }}">
                <input type="hidden" name="selected_city_id" id="selected_city_id"
                    value="{{ Auth::user()->city }}"> --}}

                <div class="modal-body customer_modal_body">
                    <div class="row">
                        <div class="col-md-4 ">
                            <div class="mb-3">
                                <label for="first_name" class="form-label modal-field-text">First Name</label>
                                <input type="text" id="first_name" name="first_name" class="form-control"
                                    placeholder="" required="" value="{{ Auth::user()->first_name }}">
                            </div>


                        </div>
                        <div class="col-md-4 ">

                            <div class="mb-3">
                                <label for="middle_name" class="form-label modal-field-text">Middle Name Name</label>
                                <input type="text" id="middle_name" name="middle_name" class="form-control"
                                    placeholder="" value="{{ Auth::user()->middle_name }}">
                            </div>

                        </div>
                        <div class="col-md-4 ">
                            <div class="mb-3">
                                <label for="last_name" class="form-label modal-field-text">Last Name</label>
                                <input type="text" id="last_name" name="last_name" class="form-control"
                                    placeholder="" required="" value="{{ Auth::user()->last_name }}">
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="mb-3">
                                <label for="mobile_number" class="form-label modal-field-text">Mobile Number</label>
                                <input type="text" id="mobile_number" name="mobile_number" class="form-control"
                                    placeholder="" required="" value="{{ Auth::user()->mobile_number }}">
                            </div>
                        </div>
            
                  
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="dob" class="form-label modal-field-text">Date Of Birth</label>
                                <input type="date" id="dob" name="dob" class="form-control"
                                    placeholder="" required="" value="{{ Auth::user()->dob }}">
                            </div>

                        </div>
                        {{-- <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="customername-field" class="form-label modal-field-text">Alternative Number</label>
                                            <input type="text" id="customername-field" class="form-control" placeholder="" required="">
                                        </div>

                                    </div> --}}

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="email" class="form-label modal-field-text">Email Address</label>
                                <input type="text" id="email" name="email" class="form-control"
                                    placeholder="" required="" value="{{ Auth::user()->email }}">
                            </div>

                        </div>
                        {{-- <div class="col-md-4">
                            <div class="mb-3">
                                <label for="residence_type_id" class="form-label modal-field-text">Residence
                                    Type</label>
                                <select name="residence_type_id" id="residence_type_id"
                                    class="form-select mb-3 form-control" aria-label=".form-select-lg example">
                                    <option value="0">Select Residence</option>
                                    @foreach ($residenceTypeArr as $key => $residence)
                                        <option value="{{ $key }}"
                                            {{ Auth::user()->residence_type == $key ? 'selected' : '' }}>
                                            {{ $residence }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div> --}}
                        {{-- <div class="col-md-4 ">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label modal-field-text">Country </label>
                                <select name="country_id" id="country_id" class="form-select mb-3 form-control"
                                    aria-label=".form-select-lg example" onchange="selectState(this.value);" required>
                                    <option value="0">Select Country</option>
                                    @foreach ($country_arr as $key => $country)
                                        <option value="{{ $key }}"
                                            {{ Auth::user()->country == $key ? 'selected' : '' }}>
                                            {{ $country }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4 ">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label modal-field-text">State</label>
                                <select class="form-select mb-3 form-control" aria-label=".form-select-lg example"
                                    onchange="selectCity(this.value);" name="state_id" id="state_id" required>
                                    <option value="0">Select State</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4 ">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label modal-field-text">City</label>
                                <select class="form-select mb-3 form-control" aria-label=".form-select-lg example"
                                    name="city_id" id="city_id" required>
                                    <option value="0" selected>Select City</option>
                                </select>
                            </div>
                        </div> --}}
                   
                        <div class="col-md-4">
                            <div class="form-outline mb-4">
                                <label class="form-label modal-field-text" for="address ">Address</label>
                                <textarea class="form-control" id="address" name="address" rows="3">{{ Auth::user()->address }}</textarea>

                            </div>
                        </div>
                        {{-- <div class="col-md-4">
                            <div class="">
                                <label for="landmark" class="form-label modal-field-text">Landmark</label>
                                <input type="text" id="landmark" name="landmark" class="form-control"
                                    placeholder="" value="{{ Auth::user()->landmark }}">
                            </div>

                        </div> --}}
                        <div class="col-md-4">
                            <div class="">
                                <label for="password" class="form-label modal-field-text">Password</label>
                                <input type="password" id="password" name="password" class="form-control"
                                    placeholder="Password">
                            </div>

                        </div>

                        

                        <div class="col-md-4 ">
                            <div class="mb-3">
                                <label for="image" class="form-label modal-field-text">Image</label>
                                <input type="file" id="image" name="image" class="form-control">
                            </div>
                            @if (Auth::user()->image)
                                <div>
                                    <img src="{{ Storage::disk('image')->url('uploads/profile_images/' . Auth::user()->image) }}"
                                        alt="image" width="100" height="100">
                                </div>
                            @endif
                        </div>
                     
                    </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">

                        <button type="submit" class="btn  modal-submit" id="add-btn">Submit</button>

                    </div>
                </div>
            </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
