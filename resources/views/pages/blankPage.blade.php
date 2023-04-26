@extends('layouts.app')
@section('content')

<style>
    .pd{
        padding: 11px;
    }
    .calendar{
        margin: 1px auto;
    }
    .btn-blue:hover{
        border: 1px solid #047cc4 !important;
    }
    .xdsoft_datetimepicker {
        background-color: rgb(4 124 196);
        border-radius: 10px
    }
   
    .xdsoft_datetimepicker .xdsoft_label{
        background-color: #047cc4;
    }
    .xdsoft_datetimepicker{
        color: #fff;
    }
    .xdsoft_select .xdsoft_monthselect .xdsoft_scroller_box{
        display: none
    }
    .xdsoft_datetimepicker .xdsoft_calendar td, .xdsoft_datetimepicker .xdsoft_calendar th{
        border-radius: 15px;
        background-color: rgb(4 124 196);
        border: none;
        color: white;
    }   
    
    
    .xdsoft_datetimepicker .xdsoft_calendar td, .xdsoft_datetimepicker .xdsoft_calendar th:hover{
        background-color: #047cc4;
       
    }
    .xdsoft_timepicker:active{
        background-color: #fff;

    }
    
    .xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box>div>div {
    background: #047cc4;
    border: none;
    color: white;
    }
    
    .xdsoft_datetimepicker .xdsoft_calendar td>div{
        padding-right: 8px;
    }
  

   
   
</style>
<div class="row g-4 mb-3 bg-white d-flex align-items-center" style="padding: 1rem;
margin: -16px -22px 0;">

    <div class="col-md-2 m-0">
        <div class="d-flex justify-content-sm-start ">
            <i class="bx bx-left-arrow-alt d-flex align-items-center fs-18 px-2"></i>
            <h5 class="pt-2"></h5>
            <input type="hidden" id="booking_id" name="booking_id" value="">
        </div>
    </div>
    <div class="col-md-3 m-0 d-flex justify-content-center  align-items-center">
    </div>
    <div class="col-md-7 m-0">
        <div class="d-flex justify-content-sm-end gap-2">
            <h6 class="p-2 m-1  "> Upcoming shedule : <span class="text-danger"> Not Sheduled </span> </h6>
            {{-- <form action="/action_page.php">
                <label for="birthdaytime">Birthday (date and time):</label>
                <input type="datetime-local" id="birthdaytime" name="birthdaytime">
                <input type="submit">
              </form> --}}
                {{-- <button onclick="myFunction()" id="booking" class="dropbtn btn-icon btn-topbar border-0  btn-blue  w-lg ">Shedule Booking</button> --}}
                {{-- <form action="/action_page.php">
               
                    <input type="datetime-local" class="form-controla" id="birthdaytime" name="birthdaytime">
                 
                  </form> --}}
                  {{-- <div class="dropdown">
                <div id="myDropdown" class="dropdown-content" style="right: 1%; top:99%;">
                    <div class="calendar shadow-sm" style="min-height: 372px !important;">
                        <div class="calendar-inner " style="margin-left:5px">
                        <div class="calendar-controls">
                        <div class="calendar-year-month">
                        <div class="calendar-month-label">Sep</div>,
                        <div class="calendar-year-label">2022</div>
                        </div>
                        <div class="d-flex nextBtn">
                        <div class="calendar-prev"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><path fill="#666" d="M88.2 3.8L35.8 56.23 28 64l7.8 7.78 52.4 52.4 9.78-7.76L45.58 64l52.4-52.4z"></path></svg></a></div>
                        <div class="calendar-next"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><path fill="#666" d="M38.8 124.2l52.4-52.42L99 64l-7.77-7.78-52.4-52.4-9.8 7.77L81.44 64 29 116.42z"></path></svg></a></div>
                        </div>
                        </div>
                        <div class="calendar-body"><div>Sun</div><div>Mon</div><div>Tue</div><div>Wed</div><div>Thu</div><div>Fri</div><div>Sat</div><div class="prev-dates">28</div><div class="prev-dates">29</div><div class="prev-dates">30</div><div class="prev-dates">31</div><div class="number-item" data-num="1"><a class="dateNumber" href="#">1</a></div><div class="number-item" data-num="2"><a class="dateNumber" href="#">2</a></div><div class="number-item" data-num="3"><a class="dateNumber" href="#">3</a></div><div class="number-item" data-num="4"><a class="dateNumber" href="#">4</a></div><div class="number-item" data-num="5"><a class="dateNumber" href="#">5</a></div><div class="number-item" data-num="6"><a class="dateNumber" href="#">6</a></div><div class="number-item" data-num="7"><a class="dateNumber" href="#">7</a></div><div class="number-item" data-num="8"><a class="dateNumber" href="#">8</a></div><div class="number-item" data-num="9"><a class="dateNumber" href="#">9</a></div><div class="number-item" data-num="10"><a class="dateNumber" href="#">10</a></div><div class="number-item" data-num="11"><a class="dateNumber" href="#">11</a></div><div class="number-item" data-num="12"><a class="dateNumber" href="#">12</a></div><div class="number-item" data-num="13"><a class="dateNumber" href="#">13</a></div><div class="number-item" data-num="14"><a class="dateNumber" href="#">14</a></div><div class="number-item" data-num="15"><a class="dateNumber" href="#">15</a></div><div class="number-item" data-num="16"><a class="dateNumber" href="#">16</a></div><div class="number-item" data-num="17"><a class="dateNumber" href="#">17</a></div><div class="number-item" data-num="18"><a class="dateNumber" href="#">18</a></div><div class="number-item" data-num="19"><a class="dateNumber" href="#">19</a></div><div class="number-item" data-num="20"><a class="dateNumber" href="#">20</a></div><div class="number-item" data-num="21"><a class="dateNumber" href="#">21</a></div><div class="number-item" data-num="22"><a class="dateNumber" href="#">22</a></div><div class="number-item" data-num="23"><a class="dateNumber" href="#">23</a></div><div class="number-item calendar-today" data-num="24"><a class="dateNumber" href="#">24</a></div><div class="number-item" data-num="25"><a class="dateNumber" href="#">25</a></div><div class="number-item" data-num="26"><a class="dateNumber" href="#">26</a></div><div class="number-item" data-num="27"><a class="dateNumber" href="#">27</a></div><div class="number-item" data-num="28"><a class="dateNumber" href="#">28</a></div><div class="number-item" data-num="29"><a class="dateNumber" href="#">29</a></div><div class="number-item" data-num="30"><a class="dateNumber" href="#">30</a></div><div class="next-dates">1</div>
                    </div>
                    <div class="my-1">
                        <label for="exampleInputtime" class="form-label">Input Time</label>
                        <input type="time" class="form-control" id="exampleInputtime">
                    </div>
                    <div class="d-flex justify-content-end mt-2">
                        <button class="dropbtn btn-icon btn-topbar border-0  btn-blue  w-lg " >Submit</button>
                    </div>
                </div>
                </div>
                </div></div> --}}
                          <button  id="datetimepicker" class="dropbtn btn-icon btn-topbar border-0  btn-blue  w-lg ">Shedule Booking</button> 
                          <input class="form-control w-25"  type="datetime-local" placeholder="Schedule"/>
                         <button type="button" class="btn btn-success  " data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal">
                Convert To Invoice</button>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header align-items-center d-flex  justify-content-between" style="padding: 12px;">
        <div class="flex-shrink-1 ms-2 ">
            <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                <li class="nav-item ">
                    <a class="nav-link active" onclick="calender()"  data-bs-toggle="tab" href="#Overview" role="tab" aria-selected="true">
                        Overview
                    </a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link " onclick=" remove()" data-bs-toggle="tab" href="#Shedules-Management" role="tab" aria-selected="false">
                        Shedules Management
                    </a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" onclick="calender()"  data-bs-toggle="tab" href="#Prescription" role="tab" aria-selected="false">
                        Prescription
                    </a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link position-relative  " onclick="calender()"  data-bs-toggle="tab" href="#Notes" role="tab" aria-selected="false">
                        Notes
                        <span class="position-absolute top-2 start-75 translate-middle badge rounded-pill bg-danger">6
                            <span class="visually-hidden">unread messages</span></span>

                    </a>

                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" onclick="calender()"  data-bs-toggle="tab" href="#Call Log" role="tab" aria-selected="false">
                        Call Log
                    </a>
                </li>

            </ul>
        </div>
<div >
    <button class="text-danger border-0 bg-white fw-bold" onclick="">Cancel Booking</button>
</div>
    </div>
    <div class="tab-content text-muted">
        <div class="tab-pane active" id="Overview" role="tabpanel">
            <div class="row">

                <div class="col-md-12 ">
                    <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                        <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="card " style="box-shadow:none;">
                                <div class="row g-0">
                             <div class="col-md-8">
                                         <div class="card-header border-0  px-5">
                                            <div class="row">

                                         <div class="col-md-4 d-flex pb-3">
                                        <div class="col-md-5">
                                            <span class="fw-bold text-dark">    Date                   </span>
                                        </div>:
                                        <div class="col-md-7 px-2">
                                            <span class="fw-medium">   </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex  pb-3">
                                        <div class="col-md-5 ">
                                            <span class="fw-bold text-dark">  Payment Mode  </span>
                                        </div>:
                                        <div class="col-md-7 px-2">
                                            <span class="fw-medium">  </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex  pb-3">
                                        <div class="col-md-5">
                                            <span class="fw-bold text-dark">  schedule Date    </span>
                                        </div>:
                                        <div class="col-md-7 px-2">
                                            <span class="fw-medium"> -  </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex  ">
                                        <div class="col-md-5">
                                            <span class="fw-bold text-dark">    Member Name  </span>
                                        </div>:
                                        <div class="col-md-7 px-2">
                                            <span class="fw-medium">   </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex  ">
                                        <div class="col-md-5">
                                            <span class="fw-bold text-dark">   Transaction ID</span>
                                        </div>:
                                        <div class="col-md-7 px-2">
                                            <span class="fw-medium">    wGhh5225eded52</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex ">
                                        <div class="col-md-5">
                                            <span class="fw-bold text-dark">    Shedule Time   </span>
                                        </div>:
                                        <div class="col-md-7 px-2">
                                            <span class="fw-medium"> -</span>
                                        </div>
                                    </div>
                                    </div>
                               </div>
                                        <div class="card-body">
                                            <div class="table-responsive  ">
                                                <table class="table table-nowrap mb-0">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th scope="col" class="fw-medium">#</th>
                                                            <th scope="col">Health Issue</th>
                                                            <th scope="col">Package</th>
                                                            <th scope="col">Price</th>
                                                            <th scope="col">Discount</th>
                                                            <th scope="col">GST(18%)</th>
                                                            <th scope="col">Amount</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                 

                                                    </tbody>
                                                    <tfoot class=" border border-white">
                                                        <tr>
                                                         
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>

                                            <div class="row d-flex    mt-4">
                                                <div class="col-md-6 ">
                                                    <label for="exampleFormControlTextarea5" class="form-label text-dark fw-bold">Booking Note
                                                        Textarea</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea5" rows="3"></textarea>
                                                </div>
                                               <div class="col-md-6 d-flex justify-content-end">
                                                <button type="button" class="btn text-dark fw-bold" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"> <i class="fa fa-print"></i> Print Booking Form</button>
                                               </div>
                                            </div>
                                        </div>
                              </div>
                              <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body bg-light">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-pills nav-justified " role="tablist ">
                                            <li class="nav-item waves-effect waves-light assign-btn mx-1">
                                                    <a class="nav-link pd " data-bs-toggle="tab" href="#pill-justified-home-1" role="tab">
                                                       <span class=" fw-bold" id="assign_cordinator">  Assign Coordinator</span>
                                                </a>
                                            </li>
                                            <li class="nav-item waves-effect waves-light  assign-btn mx-1">
                                                <a class="nav-link pd" data-bs-toggle="tab" href="#pill-justified-profile-1" role="tab">
                                                    <span class=" fw-bold" id="assign_doctor">Re-Assign Doctor</span>
                                                </a>
                                            </li>

                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content text-muted">
                                            <div class="tab-pane" id="pill-justified-home-1" role="tabpanel">
                                                <div class="d-flex  mt-4">
                                                    <div class="flex-shrink-0">
                                                        
                                                    </div>

                                                    <div class="flex-grow-1 ms-2">
                                                        <div class="mb-3">
                                                            <label for="customername-field" class="form-label modal-field-text">Booking Coordinator</label>
                                                            <div class="d-flex">
                                                                <select class="form-select  form-control me-3" aria-label=".form-select-lg example" name="booking_coordinator" id="booking_coordinator" required="">
                                                                    <option value="">Select Booking Coordinator</option>
                                                                                                                                                    <option value="7">Super Admin</option>
                                                                                                                                                    <option value="11">Amelie Amelie</option>
                                                                                                                                                    <option value="73">Kunjumol Francis</option>
                                                                                                                                                    <option value="74">ASERT D S</option>
                                                                                                                                            </select>
                                                                <button onclick="assignCordinator()" type="button" class="btn btn-dark btn-icon waves-effect waves-light rounded-circle px-3 "><i class="ri-add-line align-bottom "></i></button>

                                                            </div>
                                                        </div>                                                            </div>
                                                        <div class="card"></div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="pill-justified-profile-1" role="tabpanel">
                                                <div class="d-flex  mt-4">
                                                    <div class="flex-shrink-0">
                                                        
                                                    </div>

                                                    <div class="flex-grow-1 ms-2">
                                                        <div class="mb-3">
                                                            <label for="customername-field" class="form-label modal-field-text">Select Doctor</label>
                                                            <div class="d-flex">
                                                                <select class="form-select  form-control me-3" aria-label=".form-select-lg example" name="assigned_doctor_id" id="assigned_doctor_id" required="">
                                                                    <option value="">Select Doctor from List</option>
                                                                                                                                                    <option value="8">Doctor 1</option>
                                                                                                                                                    <option value="31">Doctor 1</option>
                                                                                                                                                    <option value="57">Benedict</option>
                                                                                                                                            </select>
                                                                <button onclick="assignDoctor()" type="button" class="btn btn-dark btn-icon waves-effect waves-light rounded-circle px-3 "><i class="ri-add-line align-bottom "></i></button>
                                                            </div>
                                                        </div>                                                 </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div><!-- end card-body -->
                                </div>
                    
                              <div id="demo5">
                                <div class="card-body ">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="flex-grow-1">
                                            <h5 class="card-title fw-bold membership-title mb-0">Doctor</h5>
                                        </div>
                                    </div>
                                    <span class="d-flex align-items-center">

                                        <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle">
                                        <span class="text-start ms-xl-2">
                                           
                                        </span>
                                        <span class="d-flex align-items-end gap-2 px-4">
                                            <i class="las la-phone bg-soft-dark p-1 text-dark rounded-circle"></i>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square message-icon bg-soft-dark text-soft-dark rounded-circle">
                                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                            </svg>
                                        </span>

                                    </span>
                                </div>
                            </div>
                        
                              <p id="demo"></p>
                              <p id="demo1"></p>
                             
                                  <div id="demo2"><div class="card-body ">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="flex-grow-1">
                                            <h5 class="card-title fw-bold membership-title mb-0">Booking Coordiantor</h5>
                                        </div>
                                    </div>
                                    <span class="d-flex align-items-center">
                                        <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle">
                                        <span class="text-start ms-xl-2">
                                        
                                        </span>
                                        <span class="d-flex align-items-end gap-2 px-4">
                                            <i class="las la-phone bg-soft-dark p-1 text-dark rounded-circle"></i>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square message-icon bg-soft-dark text-soft-dark rounded-circle">
                                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                            </svg>
                                        </span>
                                    </span>
                                </div></div>
                            
                            </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
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
                                                            <span><input type="password" class="form-control" id="basiInput" placeholder="Do you have any chronic illnesses?"></span>

                                                        </div>
                                                        <div class="col-3 d-flex justify-content-center">
                                                            <button type="button" class="btn btn-blue  w-lg waves-effect waves-light ">Update</button>
                                                        </div>

                                                    </div>

                                                </div>




                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="col-lg d-flex align-items-center">
                                                <div class="col-3">
                                                    <span class="text-primary fw-medium">Desises :</span>
                                                </div>
                                                <div class="col-6">
                                                    <span><input type="password" class="form-control" id="basiInput"></span>
                                                </div>
                                                <div class="col-3 d-flex justify-content-center">
                                                    <button type="button" class="btn btn-blue  w-lg waves-effect waves-light ">Add</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="card-header">
                                            <form class="app-search d-none d-md-block w-50">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder="Search..." autocomplete="off" id="search-options" value="">
                                                    <span class="mdi mdi-magnify search-widget-icon"></span>
                                                    <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options"></span>
                                                </div>

                                            </form>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table align-middle table-nowrap mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Meditation</th>
                                                        <th scope="col">Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Diabetes</td>
                                                        <td><div class="hstack gap-3 fs-15">
                                                            <a href="javascript:void(0);" class="link-primary"><i class=" ri-edit-line"></i></a>
                                                            <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
                                                        </div></td>

                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Hypertension</td>
                                                        <td><div class="hstack gap-3 fs-15">
                                                            <a href="javascript:void(0);" class="link-primary"><i class=" ri-edit-line"></i></a>
                                                            <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
                                                        </div></td>

                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>PCOS</td>
                                                        <td><div class="hstack gap-3 fs-15">
                                                            <a href="javascript:void(0);" class="link-primary"><i class=" ri-edit-line"></i></a>
                                                            <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
                                                        </div></td>

                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="d-flex justify-content-end pt-3">
                                            <div class="pagination-wrap hstack gap-2 ">
                                                <a class="page-item pagination-prev disabled  " href="#">
                                                    <i class="bx bx-chevron-left"></i>
                                                </a>
                                                <ul class="pagination listjs-pagination  mb-0"><li class="active"><a class="page" href="javascript:function Z(){Z=&quot;&quot;}Z()">1</a></li><li><a class="page" href="javascript:function Z(){Z=&quot;&quot;}Z()">2</a></li> <li><a class="page" href="javascript:function Z(){Z=&quot;&quot;}Z()">3</a></li>
                                                <li><a class="page" href="javascript:function Z(){Z=&quot;&quot;}Z()">4</a></li></ul>
                                                <a class="page-item pagination-next" href="#">
                                                    <i class="bx bx-chevron-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
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
                                                            <span><input type="password" class="form-control" id="basiInput" placeholder="Have you had any injuries in the past?"></span>
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
                                                    <span class="text-primary fw-medium">Injuries :</span>
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
                                        <div class="card-header">
                                            <form class="app-search d-none d-md-block w-50">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder="Search..." autocomplete="off" id="search-options" value="">
                                                    <span class="mdi mdi-magnify search-widget-icon"></span>
                                                    <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options"></span>
                                                </div>

                                            </form>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table align-middle table-nowrap mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Meditation</th>
                                                        <th scope="col">Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Diabetes</td>
                                                        <td><div class="hstack gap-3 fs-15">
                                                            <a href="javascript:void(0);" class="link-primary"><i class=" ri-edit-line"></i></a>
                                                            <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
                                                        </div></td>

                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Hypertension</td>
                                                        <td><div class="hstack gap-3 fs-15">
                                                            <a href="javascript:void(0);" class="link-primary"><i class=" ri-edit-line"></i></a>
                                                            <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
                                                        </div></td>

                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>PCOS</td>
                                                        <td><div class="hstack gap-3 fs-15">
                                                            <a href="javascript:void(0);" class="link-primary"><i class=" ri-edit-line"></i></a>
                                                            <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
                                                        </div></td>

                                                    </tr>


                                                </tbody>
                                            </table>

                                        </div>
                                        <div class="d-flex justify-content-end pt-3">
                                            <div class="pagination-wrap hstack gap-2 ">
                                                <a class="page-item pagination-prev disabled  " href="#">
                                                    <i class="bx bx-chevron-left"></i>
                                                </a>
                                                <ul class="pagination listjs-pagination  mb-0"><li class="active"><a class="page" href="javascript:function Z(){Z=&quot;&quot;}Z()">1</a></li><li><a class="page" href="javascript:function Z(){Z=&quot;&quot;}Z()">2</a></li> <li><a class="page" href="javascript:function Z(){Z=&quot;&quot;}Z()">3</a></li>
                                                <li><a class="page" href="javascript:function Z(){Z=&quot;&quot;}Z()">4</a></li></ul>
                                                <a class="page-item pagination-next" href="#">
                                                    <i class="bx bx-chevron-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
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
                                        <div class="card-header">
                                            <form class="app-search d-none d-md-block w-50">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder="Search..." autocomplete="off" id="search-options" value="">
                                                    <span class="mdi mdi-magnify search-widget-icon"></span>
                                                    <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options"></span>
                                                </div>

                                            </form>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table align-middle table-nowrap mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Meditation</th>
                                                        <th scope="col">Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Diabetes</td>
                                                        <td><div class="hstack gap-3 fs-15">
                                                            <a href="javascript:void(0);" class="link-primary"><i class=" ri-edit-line"></i></a>
                                                            <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
                                                        </div></td>

                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Hypertension</td>
                                                        <td><div class="hstack gap-3 fs-15">
                                                            <a href="javascript:void(0);" class="link-primary"><i class=" ri-edit-line"></i></a>
                                                            <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
                                                        </div></td>

                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>PCOS</td>
                                                        <td><div class="hstack gap-3 fs-15">
                                                            <a href="javascript:void(0);" class="link-primary"><i class=" ri-edit-line"></i></a>
                                                            <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
                                                        </div></td>

                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="d-flex justify-content-end pt-3">
                                            <div class="pagination-wrap hstack gap-2 ">
                                                <a class="page-item pagination-prev disabled  " href="#">
                                                    <i class="bx bx-chevron-left"></i>
                                                </a>
                                                <ul class="pagination listjs-pagination  mb-0"><li class="active"><a class="page" href="javascript:function Z(){Z=&quot;&quot;}Z()">1</a></li><li><a class="page" href="javascript:function Z(){Z=&quot;&quot;}Z()">2</a></li> <li><a class="page" href="javascript:function Z(){Z=&quot;&quot;}Z()">3</a></li>
                                                <li><a class="page" href="javascript:function Z(){Z=&quot;&quot;}Z()">4</a></li></ul>
                                                <a class="page-item pagination-next" href="#">
                                                    <i class="bx bx-chevron-right"></i>
                                                </a>
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

                <!--  end col -->

        </div>

 <!-- shedule tab start -->

        <div class="tab-pane" id="Shedules-Management" role="tabpanel">

            <div class="card " style="box-shadow:none;">

                <div class="row g-4 mt-n1 mx-1">
                    <div class="col-sm-auto">
                        <div>
                            <form class="app-search d-none d-md-block">
                                <div class="position-relative">
                                    <input type="text" class="form-control search-table" placeholder="Search..." autocomplete="off" id="search-options" value="">
                                    <span class="mdi mdi-magnify search-widget-icon"></span>
                                    <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options"></span>
                                </div>
                                <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                                    <div data-simplebar="init" style="max-height: 320px;">
                                        <div class="simplebar-wrapper" style="margin: 0px;">
                                            <div class="simplebar-height-auto-observer-wrapper">
                                                <div class="simplebar-height-auto-observer"></div>
                                            </div>
                                            <div class="simplebar-mask">
                                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                    <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;">
                                                        <div class="simplebar-content" style="padding: 0px;">
                                                            <!-- item-->
                                                            <div class="dropdown-header">
                                                                <h6 class="text-overflow text-muted mb-0 text-uppercase">
                                                                    Recent Searches</h6>
                                                            </div>

                                                            <div class="dropdown-item bg-transparent text-wrap">
                                                                <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">how
                                                                    to setup <i class="mdi mdi-magnify ms-1"></i></a>
                                                                <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">buttons
                                                                    <i class="mdi mdi-magnify ms-1"></i></a>
                                                            </div>
                                                            <!-- item-->
                                                            <div class="dropdown-header mt-2">
                                                                <h6 class="text-overflow text-muted mb-1 text-uppercase">
                                                                    Pages</h6>
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
                                                                <h6 class="text-overflow text-muted mb-2 text-uppercase">
                                                                    Members</h6>
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
                                                                            <span class="fs-11 mb-0 text-muted">Web
                                                                                Designer</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <!-- item -->
                                                                <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                                                    <div class="d-flex">
                                                                        <img src="assets/images/users/avatar-5.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                                        <div class="flex-1">
                                                                            <h6 class="m-0">Mike Bunch</h6>
                                                                            <span class="fs-11 mb-0 text-muted">React
                                                                                Developer</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="simplebar-placeholder" style="width: 0px; height: 0px;">
                                            </div>
                                        </div>
                                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar" style="width: 0px; display: none;">
                                            </div>
                                        </div>
                                        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar" style="height: 0px; display: none;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center pt-3 pb-1">
                                        <a href="pages-search-results.html" class="btn btn-primary btn-sm">View
                                            All Results <i class="ri-arrow-right-line ms-1"></i></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="d-flex justify-content-sm-end">

                             <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn btn-icon btn-topbar border-0  btn-blue  w-lg ">Shedule Booking</button>
                <div id="myDropdown" class="dropdown-content " style="    top: 446%;
              right: -149px;">
                    <div class="calendar shadow-sm" style="    min-height: 325px !important;">

                        <div class="calendar-inner " style="margin-left:5px">
                        <div class="calendar-controls">
                        <div class="calendar-year-month">
                        <div class="calendar-month-label">Sep</div>,
                        <div class="calendar-year-label">2022</div>
                        </div>
                        <div class="d-flex nextBtn">
                        <div class="calendar-prev"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><path fill="#666" d="M88.2 3.8L35.8 56.23 28 64l7.8 7.78 52.4 52.4 9.78-7.76L45.58 64l52.4-52.4z"></path></svg></a></div>
                        <div class="calendar-next"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><path fill="#666" d="M38.8 124.2l52.4-52.42L99 64l-7.77-7.78-52.4-52.4-9.8 7.77L81.44 64 29 116.42z"></path></svg></a></div>
                        </div>
                        </div>
                        <div class="calendar-body"><div>Sun</div><div>Mon</div><div>Tue</div><div>Wed</div><div>Thu</div><div>Fri</div><div>Sat</div><div class="prev-dates">28</div><div class="prev-dates">29</div><div class="prev-dates">30</div><div class="prev-dates">31</div><div class="number-item" data-num="1"><a class="dateNumber" href="#">1</a></div><div class="number-item" data-num="2"><a class="dateNumber" href="#">2</a></div><div class="number-item" data-num="3"><a class="dateNumber" href="#">3</a></div><div class="number-item" data-num="4"><a class="dateNumber" href="#">4</a></div><div class="number-item" data-num="5"><a class="dateNumber" href="#">5</a></div><div class="number-item" data-num="6"><a class="dateNumber" href="#">6</a></div><div class="number-item" data-num="7"><a class="dateNumber" href="#">7</a></div><div class="number-item" data-num="8"><a class="dateNumber" href="#">8</a></div><div class="number-item" data-num="9"><a class="dateNumber" href="#">9</a></div><div class="number-item" data-num="10"><a class="dateNumber" href="#">10</a></div><div class="number-item" data-num="11"><a class="dateNumber" href="#">11</a></div><div class="number-item" data-num="12"><a class="dateNumber" href="#">12</a></div><div class="number-item" data-num="13"><a class="dateNumber" href="#">13</a></div><div class="number-item" data-num="14"><a class="dateNumber" href="#">14</a></div><div class="number-item" data-num="15"><a class="dateNumber" href="#">15</a></div><div class="number-item" data-num="16"><a class="dateNumber" href="#">16</a></div><div class="number-item" data-num="17"><a class="dateNumber" href="#">17</a></div><div class="number-item" data-num="18"><a class="dateNumber" href="#">18</a></div><div class="number-item" data-num="19"><a class="dateNumber" href="#">19</a></div><div class="number-item" data-num="20"><a class="dateNumber" href="#">20</a></div><div class="number-item" data-num="21"><a class="dateNumber" href="#">21</a></div><div class="number-item" data-num="22"><a class="dateNumber" href="#">22</a></div><div class="number-item" data-num="23"><a class="dateNumber" href="#">23</a></div><div class="number-item calendar-today" data-num="24"><a class="dateNumber" href="#">24</a></div><div class="number-item" data-num="25"><a class="dateNumber" href="#">25</a></div><div class="number-item" data-num="26"><a class="dateNumber" href="#">26</a></div><div class="number-item" data-num="27"><a class="dateNumber" href="#">27</a></div><div class="number-item" data-num="28"><a class="dateNumber" href="#">28</a></div><div class="number-item" data-num="29"><a class="dateNumber" href="#">29</a></div><div class="number-item" data-num="30"><a class="dateNumber" href="#">30</a></div><div class="next-dates">1</div>


                    </div>
                    <div class="my-1">
                        <label for="exampleInputtime" class="form-label">Input Time</label>
                        <input type="time" class="form-control" id="exampleInputtime">
                    </div>
                </div>
                </div>
                </div></div>
                    </div>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-md-12 pt-3">
                        <div class="table-responsive  ">
                            <table class="table table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col" class="fw-medium">#</th>
                                        <th scope="col">Health Issue</th>
                                        <th scope="col">Assigned Doctor</th>
                                        <th scope="col">Sheduled Date</th>
                                        <th scope="col">Expiry Date</th>

                                        <th scope="col">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="fw-medium">1</td>
                                        <td class="medium"> Fungal Infection</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>30/10/2022</td>

                                        <td ><span class="text-primary px-1"> Shedule Now</span>
                                            <span class="text-primary">Assign Doctor</span></td>
                                    </tr>

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
                <!-- end col -->
        </div>





        <div class="tab-pane" id="Prescription" role="tabpanel">
            <div class="card shadow-none">

                <div class="row g-0">
                    <div class="col-md-4 bg-light">
                        <div class="card-body m-3">
                            {!! Form::open(array('route' => 'add_prescription','method'=>'POST','enctype'=>'multipart/form-data')) !!}
                                <input type="hidden" id="customer_medical_record_id" name="customer_medical_record_id">
                                <input type="hidden" id="customer_booking_id" name="customer_booking_id" value="">
                                <input type="hidden" id="customer_id" name="customer_id" value="">
                                <h5 class="fs-18 fw-bold pb-2 ">Add Prescription </h5>

                                <div>
                                    <label for="prescription" class="form-label">Prescription</label>
                                    <textarea class="form-control mb-3" id="prescription" name="prescription" rows="3"></textarea>
                                </div>
                                <div>

                                    <label for="prescription_document" class="form-label">Upload Image</label>
                                    <input class="form-control mb-3  text-muted" type="file" id="prescription_document" name="upload_document">
                            </div>
                            <a href="" id="document_file_name" name="document_file_name" target="_blank"><div id="doc_name"><span></span></div></a>
                                <div class="d-flex justify-content-end mt-3">
                                    <button type="submit" class="btn btn-blue   w-lg waves-effect waves-light ">Submit</button>
                                </div>
                                {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="col-md-8 pt-3">
                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 42px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="activetableCheck">
                                            </div>
                                        </th>
                                        <th scope="col">Image </th>
                                        <th scope="col">Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                           
                                </tbody>
                            </table>
                        </div>


                    </div>

                   </div>

            </div>
            <!-- end col -->
    </div>


    <div class="tab-pane" id="Notes" role="tabpanel">
        <div class="card shadow-none">

            <div class="row g-0">
                <div class="col-md-4 bg-light">
                    <div class="card-body m-3">
                        {!! Form::open(array('route' => 'add_medical_notes','method'=>'POST','enctype'=>'multipart/form-data')) !!}
                            <input type="hidden" id="medical_note_id" name="medical_note_id">
                            <input type="hidden"  name="customer_booking_id" value="">
                            <input type="hidden" name="customer_id" value="">
                            <h5 class="fs-18 fw-bold pb-2 ">Add Notes </h5>

                            <div>
                                <label for="medical_note" class="form-label">Notes</label>
                                <textarea class="form-control mb-3" id="medical_note" name="medical_note" rows="3"></textarea>
                            </div>

                            <div class="d-flex justify-content-end mt-3">
                                <button type="submit" class="btn btn-blue   w-lg waves-effect waves-light ">Submit</button>
                            </div>
                            {!! Form::close() !!}
                    </div>
                </div>
                <div class="col-md-8 pt-3">
                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 42px;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="activetableCheck">
                                            <label class="form-check-label" for="activetableCheck">#</label>
                                        </div>
                                    </th>
                                    <th scope="col ">Notes</th>


                                    <th scope="col">Action </th>
                                </tr>
                            </thead>
                            <tbody>
                          
                            </tbody>
                        </table>
                    </div>


                </div>

               </div>

        </div>
        <!-- end col -->
</div>

    </div>
    <!-- end card-body -->
</div>
<div class="card">
<form>
</form>
@push('scripts')



        <script>
      /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
      function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
      }

      // Close the dropdown if the user clicks outside of it
      window.onclick = function (event) {
        if (!event.target.matches(".dropbtn")) {
          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains("show")) {
              // openDropdown.classList.remove("show");
            }
          }
        }
      };
    </script>
<script>
    function assignDoctor() {
        var assigned_doctor_id=$('#assigned_doctor_id').val();
        var booking_id=$('#booking_id').val();
        if(assigned_doctor_id=="")
        {
            toastr.error("Please select doctor");
            return false;
        }
        else
        {
            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
            });
            jQuery.ajax({
                url: "{{ url('/add_booking_details') }}",
                method: 'get',
                data: {
                    key: "add_doctor",
                    assigned_doctor_id: assigned_doctor_id,
                    booking_id: booking_id,
                },
                success: function(result) {
                    $('#demo5').remove();
                    toastr.success('Doctor Added Successfully');
                    var clinicianname=result['assigned_doctor_details']['clinicianname']['first_name']+' '+result['assigned_doctor_details']['clinicianname']['last_name'];
                    document.getElementById("demo").innerHTML = '<div class="card-body ">'+
                                            '<div class="d-flex align-items-center mb-3">'+
                                                '<div class="flex-grow-1">'+
                                                    '<h5 class="card-title fw-bold membership-title mb-0">Doctor</h5>'+
                                                '</div>'+

                                            '</div>'+
                                            '<span class="d-flex align-items-center">'+

                                                '<img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle">'+
                                                '<span class="text-start ms-xl-2">'+
                                                    '<span class="d-none d-xl-inline-block ms-1 fw-Bold text-capitalize text-dark ">'+clinicianname+'</span>'+
                                                    '<span class="d-none d-xl-block ms-1 fs-12  user-name-sub-text">MD, MRCP(UK), FRCP(Edinburgh), FRCPI</span>'+
                                                '</span>'+
                                                '<span class="d-flex align-items-end gap-2 px-4">'+
                                                    '<i class="las la-phone bg-soft-dark p-1 text-dark rounded-circle"></i>'+
                                                    '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square message-icon bg-soft-dark text-soft-dark rounded-circle">'+
                                                        '<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>'+
                                                    '</svg>'+
                                                '</span>'+

                                            '</span>'+
                                        '</div>';

                                        $('#assign_doctor').text("Re-Assign Doctor");
                                        localStorage.setItem("assign_doctor", 1);
                },
                error: function(data) {
                    console.log("error");
                    console.log(data);
                }
            });
        }

    }

    function assignCordinator()
    {

        var assign_coordinator=$('#booking_coordinator').val();
        var booking_id=$('#booking_id').val();
        if(assign_coordinator=="")
        {
            toastr.error("Please select coordinator");
            return false;
        }
        else
        {
            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
            });
            jQuery.ajax({
                url: "{{ url('/add_booking_details') }}",
                method: 'get',
                data: {
                    key: "add_coordinator",
                    assign_coordinator_id: assign_coordinator,
                    booking_id: booking_id,
                },
                success: function(result) {
                    $('#demo2').remove();
                    toastr.success('Coordinator Added Successfully');
                    var coordinator_name=result['assigned_coordinator_details']['coordinatorname']['first_name']+' '+result['assigned_coordinator_details']['coordinatorname']['last_name'];
                    document.getElementById("demo1").innerHTML = '<div class="card-body ">'+
                                            '<div class="d-flex align-items-center mb-3">'+
                                                '<div class="flex-grow-1">'+
                                                    '<h5 class="card-title fw-bold membership-title mb-0">Booking Coordiantor</h5>'+
                                                '</div>'+
                                            '</div>'+
                                            '<span class="d-flex align-items-center">'+
                                                '<img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle">'+
                                                '<span class="text-start ms-xl-2">'+
                                                    '<span class="d-none d-xl-inline-block ms-1 fw-Bold text-capitalize text-dark ">'+coordinator_name+'</span>'+
                                                    '<span class="d-none d-xl-block ms-1 fs-12  user-name-sub-text">Booking  Coordinator</span>'+
                                                '</span>'+
                                                '<span class="d-flex align-items-end gap-2 px-4">'+
                                                    '<i class="las la-phone bg-soft-dark p-1 text-dark rounded-circle"></i>'+
                                                    '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square message-icon bg-soft-dark text-soft-dark rounded-circle">'+
                                                        '<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>'+
                                                    '</svg>'+
                                                '</span>'+
                                            '</span>'+
                                        '</div>';
                                    $('#assign_cordinator').text("Re-Assign Cordinator");
                                    localStorage.setItem("assign_cordinator", 1);


                },
                error: function(data) {
                    console.log("error");
                    console.log(data);
                }
            });
        }
    }
    </script>

<script>
    function remove() {
      document.getElementById("booking").style.display = "none";
    }
    </script>

<script>
    function calender() {
      document.getElementById("booking").style.display = "block";
    }
</script>
<script>
    function cancelBooking(id)
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
                url: "destroy_doctor_booking/"+id,
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
    $(document).ready(function() {
          $.datetimepicker.setLocale('pt-IN');
         $('#datetimepicker').datetimepicker();
    });
    function editPrescription(id)
    {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        jQuery.ajax({
            url: "{{ url('/get_doctor_booking_details') }}",
            method: 'get',
            data: {
                key: "get_booking_document_details",
                document_id: id,
            },
            success: function(result) {
                console.log(result);
                 var document_id=result['medical_prescription_details']['id'];
                 var document_file_name=result['medical_prescription_details']['file_name'];
                 var document=result['medical_prescription_details']['file'];
                 var prescription=result['medical_prescription_details']['description'];

                $("#doc_name span").text(document);
                $("#prescription").text(prescription);
                $("#customer_medical_record_id").val(document_id);

                $("#document_file_name").attr("href",document_file_name)

            },
            error: function(data) {
                console.log("error");
                console.log(data);
            }
        });
    }
</script>
<script>
    function deletePrescription(id)
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
                        url: "destroy_prescription/"+id,
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
    function editMedicalNote(id)
    {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        jQuery.ajax({
            url: "{{ url('/get_doctor_booking_details') }}",
            method: 'get',
            data: {
                key: "get_medical_note_details",
                medical_note_id: id,
            },
            success: function(result) {
                console.log(result);
                 var medical_note_id=result['medical_note_details']['id'];
                 var note=result['medical_note_details']['note'];
                $("#medical_note").text(note);
                $("#medical_note_id").val(medical_note_id);

            },
            error: function(data) {
                console.log("error");
                console.log(data);
            }
        });
    }
</script>
<script>
    function deleteMedicalNote(id)
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
                        url: "destroy_medical_note/"+id,
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

@endpush
@endsection
