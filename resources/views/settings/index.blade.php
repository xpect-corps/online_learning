@extends('layouts.app')
@section('title', 'settings')
@section('content')

<div class="card">

    @php
        $activeTab = Session::get('active_tab','general');
    @endphp
    <div class="tab-content text-muted">
        <div class="tab-pane active" id="home2" role="tabpanel">
            <div class="row">
             <div class="col-md-2 bg-light">
                    <div class="nav flex-column nav-pills text-left" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link mb-2 @if ($activeTab == 'general') active  @endif" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">General</a>
                        <a class="nav-link mb-2 @if ($activeTab == 'upi') active  @endif" id="v-pills-upi-tab" data-bs-toggle="pill" href="#v-pills-upi" role="tab" aria-controls="v-pills-upi" aria-selected="false">UPI Credentials</a>
                        <a class="nav-link mb-2 @if ($activeTab == 'payment') active  @endif" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Payment Credentials</a>
                        <a class="nav-link mb-2 @if ($activeTab == 'sms') active @endif" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">SMS</a>
                        {{-- <a class="nav-link mb-2  @if ($activeTab == 'tax') active @endif" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-tax" role="tab" aria-controls="v-pills-tax" aria-selected="true">TAX</a> --}}
                        {{-- <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Surgeries</a> --}}
                        {{-- <a class="nav-link mb-2 @if ($activeTab == 'child-limit') active  @endif" id="v-pills-child-limit-tab" data-bs-toggle="pill" href="#v-pills-child-limit" role="tab" aria-controls="v-pills-child-limit" aria-selected="true">Member Limit under Guardian</a> --}}

                    </div>
                </div><!-- end col -->
                <div class="col-md-10 ps-0">
                    <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">

                        <div class="tab-pane fade @if ($activeTab == 'general') active show @endif" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <form action="{{route('setting.general')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card " style="box-shadow:none;">
                                    <div class="row g-0">
                                        <div class="col-md-12">
                                            <div class="card-header ">
                                                <span>General Settings</span>
                                            </div>

                                            <div class="card-body">
                                                <div id="customerList">
                                                    <div class="row g-4 ">
                                                        <div class="col-lg d-flex align-items-center">
                                                            <div class="col-2">
                                                                <span class="text-primary fw-medium">App Name :</span>
                                                            </div>
                                                            <div class="col-9">
                                                                <span><input type="text" class="form-control" id="app_name" name="app_name" placeholder="App Name" value="{{@$settings->app_name}}"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row g-4 ">
                                                        <div class="col-lg d-flex align-items-center">
                                                            <div class="col-2">
                                                                <span class="text-primary fw-medium">Email :</span>
                                                            </div>
                                                            <div class="col-9">
                                                                <span><input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{@$settings->email}}"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row g-4 ">
                                                        <div class="col-lg d-flex align-items-center">
                                                            <div class="col-2">
                                                                <span class="text-primary fw-medium">Footer Text :</span>
                                                            </div>
                                                            <div class="col-9">
                                                                <span><input type="text" class="form-control" id="footer_text" name="footer_text" placeholder="Footer Text" value="{{@$settings->footer_text}}"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row g-4 ">
                                                        <div class="col-lg d-flex align-items-center">
                                                            <div class="col-2">
                                                                <span class="text-primary fw-medium">App Image :</span>
                                                            </div>
                                                            <div class="col-5">
                                                                <label class="label">Logo Image</label>
                                                                <span><input type="file" class="form-control" id="app_image" name="app_image"></span>
                                                                <br>
                                                                @if($settings->logo)
                                                                <div >
                                                                    <img src="{{ Storage::disk('image')->url('uploads/app_images/'.$settings->logo) }}" alt="image" width="250" height="150">
                                                                    {{-- <div class="d-flex justify-content">
                                                                            <a href="" class="btn btn-danger" id="delete-logo" onclick="deleteLogo()">Delete</a>
                                                                    </div> --}}
                                                                </div>

                                                            @endif
                                                            </div>
                                                            <div class="col-5">
                                                                <label class="label">Small Logo Image</label>
                                                                <span><input type="file" class="form-control" id="app_image_small" name="app_image_small"></span>
                                                                <br>
                                                                @if($settings->small_logo)
                                                                <div >
                                                                    <img src="{{ Storage::disk('image')->url('uploads/app_images/'.$settings->small_logo) }}" alt="image" width="250" height="150">
                                                                    {{-- <div class="d-flex justify-content">
                                                                        <a href="" class="btn btn-danger" id="delete-small-logo" onclick="deleteSmallLogo()">Delete</a>
                                                                    </div> --}}
                                                                </div>
                                                            @endif
                                                            </div>
                                                        </div>


                                                    </div>
                                            </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-blue  w-lg waves-effect waves-light ">Update</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade  @if ($activeTab == 'upi') active show @endif" id="v-pills-upi" role="tabpanel" aria-labelledby="v-pills-upi-tab">
                            <form action="{{url('/settings/upi_update')}}" method="POST">
                                @csrf
                                <div class="card" style="box-shadow:none;">
                                    <div class="row g-0">
                                        <div class="col-md-12">
                                            <div class="card-header ">
                                               <span>UPI Credentials</span>
                                            </div>
                                            <div class="card-body">
                                                <div id="customerList">
                                                    <div class="row g-4 ">
                                                        <div class="col-lg d-flex align-items-center">
                                                            <div class="col-2">
                                                                <span class="text-primary fw-medium">UPI Account ID</span>
                                                            </div>
                                                            <div class="col-9">
                                                                <span><input type="text" class="form-control" id="upi_account_id" name="upi_account_id" value="{{@$settings->upi_account_id}}"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row g-4">
                                                        <div class="col-lg d-flex align-items-center">
                                                            <div class="col-2">
                                                                <span class="text-primary fw-medium">UPI Mobile Number</span>
                                                            </div>
                                                            <div class="col-9">
                                                                <span><input type="text" class="form-control" id="upi_mobile_number" name="upi_mobile_number" value="{{@$settings->upi_mobile_number}}"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-blue  w-lg waves-effect waves-light ">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-5">

                                        </div>  --}}
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade  @if ($activeTab == 'payment') active show @endif" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <form action="{{url('/settings/payment_update')}}" method="POST">
                                @csrf
                                <div class="card" style="box-shadow:none;">
                                    <div class="row g-0">
                                        <div class="col-md-12">
                                            <div class="card-header ">
                                               <span>Payment Credentials</span>
                                            </div>
                                            <div class="card-body">
                                                <div id="customerList">
                                                    <div class="row g-4 ">
                                                        <div class="col-lg d-flex align-items-center">
                                                            <div class="col-2">
                                                                <span class="text-primary fw-medium">Razorpay API Key ID</span>
                                                            </div>
                                                            <div class="col-9">
                                                                <span><input type="text" class="form-control" id="rezorpay_key_id" name="rezorpay_key_id" value="{{@$settings->rezorpay_key_id}}"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row g-4">
                                                        <div class="col-lg d-flex align-items-center">
                                                            <div class="col-2">
                                                                <span class="text-primary fw-medium">Razorpay Key Secret</span>
                                                            </div>
                                                            <div class="col-9">
                                                                <span><input type="text" class="form-control" id="razorpay_key_secret" name="razorpay_key_secret" value="{{@$settings->razorpay_key_secret}}"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-blue  w-lg waves-effect waves-light ">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-5">

                                        </div>  --}}
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade @if ($activeTab == 'sms') active show  @endif" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <form action="{{url('/settings/sms_update')}}" method="POST">
                                @csrf
                                <div class="card" style="box-shadow:none;">
                                    <div class="row g-0">
                                        <div class="col-md-12">
                                            <div class="card-header ">
                                               <span>SMS Credentials</span>
                                            </div>
                                            <div class="card-body">
                                                <div id="customerList">
                                                    <div class="row g-4 ">
                                                        <div class="col-lg d-flex align-items-center">
                                                            <div class="col-2">
                                                                <span class="text-primary fw-medium"> 2 Factor API Key</span>
                                                            </div>
                                                            <div class="col-9">
                                                                <span><input type="text" class="form-control" id="two_factor_api_key" name="two_factor_api_key" value="{{@$settings->two_factor_api_key}}"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row g-4">
                                                        <div class="col-lg d-flex align-items-center">
                                                            <div class="col-2">
                                                                <span class="text-primary fw-medium"> 2 Factor OTP Template</span>
                                                            </div>
                                                            <div class="col-9">
                                                                <span><input type="text" class="form-control" id="login_otp_template" name="login_otp_template" value="{{@$settings->login_otp_template}}"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-blue  w-lg waves-effect waves-light ">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-5">

                                        </div>  --}}
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade @if ($activeTab == 'child-limit') active show  @endif" id="v-pills-child-limit" role="tabpanel" aria-labelledby="v-pills-child-limit-tab">
                            <form action="{{url('/settings/child_limit_update')}}" method="POST">
                                @csrf
                                <div class="card" style="box-shadow:none;">
                                    <div class="row g-0">
                                        <div class="col-md-12">
                                            <div class="card-header ">
                                               <span>Memeber Limit under a Guardian</span>
                                            </div>
                                            <div class="card-body">
                                                <div id="customerList">
                                                    <div class="row g-4 ">
                                                        <div class="col-lg d-flex align-items-center">
                                                            <div class="col-2">
                                                                <span class="text-primary fw-medium">Child Limit</span>
                                                            </div>
                                                            <div class="col-9">
                                                                <span><input type="text" class="form-control" id="child_limit" name="child_limit" value="{{@$settings->child_limit}}"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-blue  w-lg waves-effect waves-light ">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade  @if ($activeTab == 'tax') active show  @endif" id="v-pills-tax" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            {{-- <form action="{{url('/settings/tax_update')}}" method="POST">
                                @csrf --}}
                                <div class="card" style="box-shadow:none;">
                                    <div class="row g-0">
                                        <div class="col-md-12">
                                            <div class="card-header ">
                                               <span>TAX Credentials</span>
                                            </div>
                                            <!-- harshal start-->
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex" style="      padding: 8px 3px 3px;">

                                                    <div class="col-md-6 ms-2 ">
                                                        <ul class="nav justify-content-start nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                                            <li class="nav-item ">
                                                                <a class="nav-link active" data-bs-toggle="tab" href="#Overview" role="tab" aria-selected="true">
                                                                  Tax Groups
                                                                </a>
                                                            </li>
                                                            <li class="nav-item px-3">
                                                                <a class="nav-link" data-bs-toggle="tab" href="#Shedules-Management" role="tab" aria-selected="false">
                                                                   Taxes
                                                                </a>
                                                            </li>

                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6 ms-2 d-flex justify-content-end">
                                                        {{-- <form class="app-search d-none d-md-block w-50 mx-4">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" placeholder="Search..." autocomplete="off" id="search-options" value="">
                                                                <div>
                                                                </div>
                                                                <span class="mdi mdi-magnify search-widget-icon"></span>
                                                                <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options"></span>
                                                            </div>
                                                        </form> --}}
                                                    </div>
                                                </div>
                                                {{-- <div class="tab-content text-muted">
                                                    <div class="tab-pane active" id="Overview" role="tabpanel">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                                                                    <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                                        <div class="card " style="box-shadow:none;">
                                                                            <div class="row g-0">
                                                                                <div class="col-md-8 pt-3">
                                                                                    <div class="table-responsive">
                                                                                        <table class="table align-middle table-nowrap mb-0 ">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th scope="col">Tax Group ID</th>
                                                                                                    <th scope="col">Tax Group Name </th>
                                                                                                    <th scope="col">Description </th>
                                                                                                    <th scope="col">status </th>
                                                                                                    <th scope="col">Action</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <?php
                                                                                                $no=1;
                                                                                                 ?>
                                                                                                @foreach ($taxGroups as $taxGroup)

                                                                                                <tr>
                                                                                                    <td>{{$no++}}</td>
                                                                                                    <td>{{$taxGroup->tax_group_name}}</td>
                                                                                                    <td>{{$taxGroup->description}}</td>
                                                                                                    <?php if($taxGroup["is_active"]==1){ ?>
                                                                                                    <td><button class="btn btn-primary">Active</button></td>
                                                                                                    <?php }
                                                                                                    elseif ($taxGroup["is_active"]==0) {
                                                                                                        ?>
                                                                                                         <td><button class="btn btn-danger">Deactive</button></td>
                                                                                                        <?php
                                                                                                    }
                                                                                                    ?>
                                                                                                     <td>
                                                                                                        <a href="javascript:void(0);" class="link-dark" onclick="editTaxGroup('{{$taxGroup->id}}');"><i class=" ri-edit-line"></i></a>
                                                                                                        <a href="javascript:void(0);" class="link-dark" onclick="deletetaxGroup('{{$taxGroup->id}}')"><i class="ri-delete-bin-5-line"></i></a>
                                                                                                        </td>
                                                                                                </tr>
                                                                                                @endforeach
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4 bg-light">
                                                                                    <div class="card-body m-3" id="tax-form">
                                                                                        <form action="{{url('/settings/tax_group')}}" method="POST">
                                                                                            @csrf
                                                                                            <h5 class="fs-18 fw-bold pb-2 ">Add Tax</h5>
                                                                                            <div>
                                                                                                <label for="tax_group_name" class="form-label">Tax Group Name  </label>
                                                                                                <input type="text" class="form-control text-muted mb-3" id="tax_group_name" placeholder="Enter Tax Group Name" name="tax_group_name">
                                                                                            </div>
                                                                                            <div>
                                                                                                <label for="image" class="form-label modal-field-text">description</label>
                                                                                                <input type="hidden" class="form-control text-muted mb-3" id="group_id"  name="group_id">
                                                                                                <input type="text" id="description" name="description" class="form-control mb-3" placeholder="Enter description">
                                                                                            </div>
                                                                                            <div>
                                                                                                <label for="status" class="form-label">Status </label>
                                                                                                <select class="form-control Control-select status" style="width: 100%"  value=""  id="consumable" name="status" >

                                                                                                    <option value="1">Active</option>
                                                                                                    <option value="0">Deactive</option>
                                                                                                </select>
                                                                                             </div>
                                                                                             <br>
                                                                                            <div>
                                                                                                <div class="d-flex justify-content-end">
                                                                                                    <a class="btn btn-blue  w-lg waves-effect waves-light "  id="tax-group-cancel" style="background-color: rgb(233, 32, 32);margin-right:20px;display:none" onclick="cleartaxgroup();">Cancel</a>

                                                                                                    <button type="submit" class="btn btn-blue   w-lg waves-effect waves-light " id="tax-submit-button">Submit</button>
                                                                                                </div>
                                                                                            </div>

                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!--  end col -->
                                                        </div>
                                                         <!-- end col -->

                                                            <!--  end col -->

                                                    </div>

                                                    <div class="tab-pane" id="Shedules-Management" role="tabpanel">
                                                        <div class="row">

                                                            <div class="col-md-12 ">
                                                                <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                                                                    <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                                        <div class="card " style="box-shadow:none;">
                                                                            <div class="row g-0">
                                                                                <div class="col-md-8 pt-3">
                                                                                    <div class="table-responsive">
                                                                                        <table class="table align-middle table-nowrap mb-0 datatable">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th scope="col">Tax ID</th>
                                                                                                    <th scope="col">Tax Name </th>
                                                                                                    <th scope="col">Tax percentage </th>
                                                                                                    <th scope="col">Group name</th>
                                                                                                    <th scope="col" colspan="2">Action</th>
                                                                                                </tr>
                                                                                            </thead>

                                                                                            <tbody>
                                                                                                <?php $no=1;?>
                                                                                                @foreach ($taxes as $tax)
                                                                                                <tr>
                                                                                                <td>{{$no++}}</td>
                                                                                                <td>{{$tax->name}}</td>
                                                                                                <td>{{$tax->percentage}}</td>
                                                                                                <td>{{$tax->tax_group_name}}</td>
                                                                                                <td>
                                                                                                <a href="javascript:void(0);" class="link-dark" onclick="editTaxes('{{$tax->id}}');"><i class=" ri-edit-line"></i></a>
                                                                                                <a href="javascript:void(0);" class="link-dark" onclick="deletetaxes('{{$tax->id}}')"><i class="ri-delete-bin-5-line"></i></a>
                                                                                                </td>
                                                                                              </tr>
                                                                                                @endforeach
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>


                                                                                </div>
                                                                                <div class="col-md-4 bg-light">
                                                                                    <div class="card-body m-3" id="taxes-form">
                                                                                        <form action="{{url('/settings/tax_save')}}" method="POST">
                                                                                            @csrf
                                                                                            <input type="hidden" class="form-control text-muted mb-3" id="tax_id"  name="tax_id">
                                                                                            <h5 class="fs-18 fw-bold pb-2 ">Add Taxes</h5>
                                                                                            <div>
                                                                                                <label for="tax_name" class="form-label">Tax Groups  </label>
                                                                                                <input type="text" class="form-control text-muted mb-3" id="tax_name" placeholder="Enter Tax Name" name="tax_name">
                                                                                            </div>
                                                                                            <div>
                                                                                                <label for="percentage" class="form-label modal-field-text">percentage</label>

                                                                                                <input type="text" id="percentage" name="percentage" class="form-control mb-3" placeholder="Enter percentage %">
                                                                                            </div>
                                                                                            <div>
                                                                                                <label for="tax_group" class="form-label modal-field-text">Select Tax Groups</label>
                                                                                                <select class="form-select form-control mb-3" aria-label="Default select example" id="group_name" name="group_name">
                                                                                                    <option selected="">Select Tax Groups </option>
                                                                                                    @foreach ($taxGroups as $taxGroup)
                                                                                                        <option value="{{$taxGroup->id}}">{{$taxGroup->tax_group_name}}</option>
                                                                                                    @endforeach
                                                                                                </select>
                                                                                            </div>
                                                                                             <br>
                                                                                            <div>
                                                                                                <div class="d-flex justify-content-end">
                                                                                                    <a class="btn btn-blue  w-lg waves-effect waves-light "  id="taxes-cancel" style="background-color: rgb(233, 32, 32);margin-right:20px;display:none" onclick="cleartaxes();">Cancel</a>

                                                                                                    <button type="submit" class="btn btn-blue   w-lg waves-effect waves-light " id="taxes-submit-button">Submit</button>
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
                                                                </div>
                                                            </div><!--  end col -->
                                                        </div>
                                                            <!-- end col -->

                                                    </div>







                                                </div> --}}
                                                <!-- end card-body -->
                                            </div>
                                            <!-- harshal end-->



                                            {{-- <div class="card-body">
                                                <div id="customerList">
                                                    <div class="row g-4 ">
                                                        <div class="col-lg d-flex align-items-center">
                                                            <div class="col-2">
                                                                <span class="text-primary fw-medium">Default Tax(%)</span>
                                                            </div>
                                                            <div class="col-9">
                                                                <span><input type="text" class="form-control" id="tax" name="tax" value="{{ @$settings->default_tax_percentage }}"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            {{-- <div class="card-footer">
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-blue  w-lg waves-effect waves-light ">Update</button>
                                                </div> --}}
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-5">

                                        </div>  --}}
                                    </div>
                                </div>
                            {{-- </form> --}}
                        </div>
                        {{-- <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <div class="card " style="box-shadow:none;">
                                <div class="row g-0">
                                    <div class="col-md-7">
                                        <div class="card-header ">
                                            <div id="customerList">
                                                <div class="row g-4 ">
                                                    <div class="col-lg d-flex align-items-center">
                                                        <div class="col-3">
                                                            <span class="text-primary fw-medium">Question :</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span><input type="password" class="form-control" id="basiInput" placeholder="Any past surgeries ?"></span>
                                                        </div>
                                                        <div class="col-3 d-flex justify-content-center">
                                                            <button type="button" class="btn btn-blue w-lg waves-effect waves-light ">Update</button>
                                                        </div>

                                                    </div>

                                                </div>




                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="col-lg d-flex align-items-center">
                                                <div class="col-3">
                                                    <span class="text-primary fw-medium">Allergy Name :</span>
                                                </div>
                                                <div class="col-6">
                                                    <span><input type="password" class="form-control" id="basiInput"></span>
                                                </div>
                                                <div class="col-3 d-flex justify-content-center">
                                                    <button type="button" class="btn btn-blue w-lg waves-effect waves-light ">Add</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">

                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div><!--  end col -->
            </div>
             <!-- end col -->

                <!--  end col -->

        </div>


    </div>
    <!-- end card-body -->
</div>


@push('scripts')
    {{-- <script>
          $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        function deleteLogo(){
            event.preventDefault();
             swal({
                 title: `Are you sure you want to delete this record?`,
                 text: "If you delete this, it will be gone forever.",
                 icon: "warning",
                 buttons: true,
                 dangerMode: true,
             })
             .then((willDelete) => {
               if (willDelete) {
                    $.ajax({
                    type: "get",
                    url: "{{ url('/settings/delete-logo') }}",
                    success: function (data) {

                        toastr.success("Image Successfull Removed");
                        location.reload();
                        },
                        error: function (data) {
                            console.log('Error:', data);
                        }
                    });
               }
             });

        };
        function deleteSmallLogo(){
            event.preventDefault();
             swal({
                 title: `Are you sure you want to delete this record?`,
                 text: "If you delete this, it will be gone forever.",
                 icon: "warning",
                 buttons: true,
                 dangerMode: true,
             })
             .then((willDelete) => {
               if (willDelete) {
                    $.ajax({
                    type: "get",
                    url: "{{ url('/settings/delete-small-logo') }}",
                    success: function (data) {

                        toastr.success("Image Successfull Removed");
                        location.reload();
                        },
                        error: function (data) {
                            console.log('Error:', data);
                        }
                    });
               }
             });

        };
    </script> --}}

    <script>
        function deletetaxGroup(id)
        {
            event.preventDefault();
                swal({
                    title: `Are you sure you want to delete this record?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                        $.ajax({
                        type: "get",
                        url: "settings/delete_group/"+id,
                        success: function (data) {
                            toastr.success("Deleted Successfully");
                            location.reload();
                            },
                            error: function (data) {
                                console.log('Error:', data);
                            }
                        });
                }
                });
        }
    </script>

<script>
    function deletetaxes(id)
    {
        event.preventDefault();
            swal({
                title: `Are you sure you want to delete this record?`,
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                    $.ajax({
                    type: "get",
                    url: "settings/delete_tax/"+id,
                    success: function (data) {
                        toastr.success("Deleted Successfully");
                        location.reload();
                        },
                        error: function (data) {
                            console.log('Error:', data);
                        }
                    });
            }
            });
    }
</script>
<!-- edit of taxgroups-->
<script>
    function editTaxGroup(id)
    {
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
        });
        jQuery.ajax({
            url: "{{ url('/get_tax_group') }}",
            method: 'get',
            data: {
                key: "edit_tax_group",
                group_id: id,
            },
            success: function(result) {
                // console.log(result);
                var group_name=result['tax_group']['tax_group_name'];
                // console.log(symptom_name);
                var group_id=result['tax_group']['id'];
                var group_descrption=result['tax_group']['description'];
                var group_status=result['tax_group']['is_active'];
                $('#tax_group_name').val(group_name);
                $('#group_id').val(group_id);
                $("#description").val(group_descrption);
                $(".status").val(group_status);

                $('#tax-form').prop('style','background-color:#003b41e6');
                $('#tax-submit-button').html('update');
                $('#tax-group-cancel').prop('style','display:block;background-color: rgb(233, 32, 32);margin-right:50px;');
            },
            error: function(data) {
                console.log("error");
                console.log(data);
            }
        });
    }
    function cleartaxgroup(){
    $('#tax_group_name').val('');
    $('#group_id').val('');
    $('#description').val('');
    $('.status').val('');

    $('#tax-form').prop('style','background-color: rgba(var(--vz-light-rgb),var(--vz-bg-opacity))!important');
    $('#tax-submit-button').html('Submit');
    $('#tax-group-cancel').prop('style','display:none');
}

</script>
<!--edit taxes-->
<script>
    function editTaxes(id)
    {
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
        });
        jQuery.ajax({
            url: "{{ url('/get_tax_group') }}",
            method: 'get',
            data: {
                key: "edit_tax",
                tax_id: id,
            },
            success: function(result) {
                // console.log(result);
                var tax_name=result['taxes']['name'];
                // console.log(symptom_name);
                var tax_id=result['taxes']['id'];
                var tax_percentage=result['taxes']['percentage'];
                var tax_group=result['taxes']['tax_group'];
                $('#tax_name').val(tax_name);
                $('#tax_id').val(tax_id);
                $("#percentage").val(tax_percentage);
                $("#group_name").val(tax_group);

                $('#taxes-form').prop('style','background-color:#003b41e6');
                $('#taxes-submit-button').html('update');
                $('#taxes-cancel').prop('style','display:block;background-color: rgb(233, 32, 32);margin-right:50px;');
            },
            error: function(data) {
                console.log("error");
                console.log(data);
            }
        });
    }
    function cleartaxes(){
    $('#tax_name').val('');
    $('#tax_id').val('');
    $('#percentage').val('');
    $('#group_name').val('');

    $('#taxes-form').prop('style','background-color: rgba(var(--vz-light-rgb),var(--vz-bg-opacity))!important');
    $('#taxes-submit-button').html('Submit');
    $('#taxes-cancel').prop('style','display:none');
}

</script>
<!-- end edit groups-->

@endpush



@endsection
