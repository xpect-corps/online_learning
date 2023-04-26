@extends('layouts.app')
@section('title', 'search members')
@section('content')
<style>

    .filterBox{
        display: none;
    }
    .filterBoxAppear{
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 14px;
    }
    .multiple-dropdown{
  width: 100%;
  min-height: 100px;
  border-radius: 3px;
  border: 1px solid #444;
  padding: 10px;
  color: #444444;
  font-size: 14px;
}
.select2-container--default .select2-selection--single {
  border-radius: 10px;
  box-shadow: 5px 8px 10px -6px #3f3f3f0f;
  border: 1px solid #0000000f;

}
.select2-dropdown {

    border: 1px solid #0000000f;
    border-radius: 10px;

}
.select2-container--default .select2-search--dropdown .select2-search__field {
    border: 1px solid #f0f0f0;
}


.select2-container{
   width: 342px !important;
}
</style>

<div class="row">
    <div class="col-lg-12">
        <div class="card table-card">

        <!-- end card header -->

            <div class="card-body">
                <div id="customerList">
                    <div class="row g-4 mb-3" >
                        <div class="col-sm-auto">
                            <div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="d-flex justify-content-sm-end">
                                {{-- <button type="button" class="btn btn-light add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="showModal"><i class="ri-add-line align-bottom me-1"></i> Import</button>
                                <button type="button" onclick="showFilter()" class="btn btn-Filter "><i class="ri-equalizer-fill me-1 align-bottom"></i> Filters</button> --}}
                                {{-- <button type="button" class="btn btn-addlead add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#add_customer"><i class="ri-add-line align-bottom me-1"></i> Add Customer</button> --}}
                            </div>
                        </div>
                    <div id="filter_show" class="filterBox">
                        <div class="col-md-3 px-1 d-flex flex-column">
                            <label for="document_name" class="form-label"> Name</label>
                            <select id="e13" class="form-control ">
                                <option value="AL">Alabama</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                        <div class="col-md-3 px-1  d-flex flex-column">
                            <label for="document_name" class="form-label"> Name</label>
                            <select id="e13" class="form-control">
                                <option value="AL">Alabama</option>

                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                        <div class="col-md-3 d-flex mt-4">
                            <button type="submit" class="btn btn-blue   w-lg waves-effect waves-light ">Search</button>
                        </div>
                    </div>

                    <div class="table-responsive table-card mt-3 mb-1">

                        {{-- {{$dataTable->table(['class' => 'table align-middle table-nowrap'])}} --}}
                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap mb-0 datatable">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">Sl</th>
                                        <th scope="col">User ID</th>
                                        <th scope="col">Date Of Join</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Number</th>
                                        {{-- <th scope="col">Source</th>
                                        <th scope="col">Member Status</th> --}}
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no= 1;?>
                                    @foreach($customer_data as $val)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{$val->id}}</td>
                                        <td><span> {{ \Carbon\Carbon::parse($val->created_at)->format('d/m/Y') }} </span></td>
                                        <td>{{$val->patient_name}}</td>
                                        <td>{{$val->contact_number}}</td>
                                        {{-- <td><div style="border-redius:10px;">
                                            <span style="color:{{ $val->source_color }}">{{ $val->source_name }}</span></div>
                                        </td>
                                        <td><div><span class="btn btn"
                                             style="background-color:{{ $val->status_color }};border-radius:20px;color:white">
                                             {{ $val->status_name }}</span></div>
                                            </td> --}}

                                        <td><a href="{{ route('customers.show',$val->id) }}" class="link-success "><i class="ri-arrow-right-line align-middle"></i></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

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
    </div>
  <!-- end col -->

</div>
<div class="modal fade" id="add_customer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    {!! Form::open(array('route' => 'customers.store','method'=>'POST','enctype'=>'multipart/form-data')) !!}
    <div class="modal-header  p-3 ">
        <h5 class="modal-title" id="exampleModalLabel"> Create New Customer</h5>
        <div class="radio-button ">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="customer_type" id="normal_user"
                    value="0" checked>
                <label class="form-check-label modal-field-text" for="normal_user">Normal User</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="customer_type" id="corporate_user"
                    value="1">
                <label class="form-check-label modal-field-text" for="corporate_user">Corporate User</label>
            </div>
        </div>
        <button type="button" class="btn-modal-close" data-bs-dismiss="modal" aria-label="Close"
            id="close-modal"><i class="ri-close-fill"></i></button>
        </div>
          <div class="modal-body customer_modal_body">
              <div class="row">
                <div class="col-md-4 ">
                    <div class="mb-3">
                        <label for="first_name" class="form-label modal-field-text">First Name</label>
                        <input type="text" id="first_name" name="first_name" class="form-control" placeholder="Enter First Name" required="">
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="mb-3">
                        <label for="middle_name" class="form-label modal-field-text">Middle Name</label>
                        <input type="text" id="middle_name" name="middle_name" class="form-control" placeholder="Enter Middle Name">
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="mb-3">
                        <label for="last_name" class="form-label modal-field-text">Last Name</label>
                        <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Enter Last Name" required="" >
                    </div>
                </div>
                <div class="row">
                <div class="col-md-4 ">
                    <div class="mb-3">
                        <label for="mobile_number" class="form-label modal-field-text">Mobile Number</label>
                        <input type="number" minlength="10" maxlength="10" id="mobile_number" name="mobile_number" class="form-control" placeholder="Enter Mobile Number" required="" >
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mb-3">
                        <label for="gender" class="form-label modal-field-text">Gender</label>
                        <select id="gender" name="gender" class="form-control">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mb-3">
                        <label for="age" class="form-label modal-field-text">Age</label>
                        <input type="number" class="form-control" name="age" id="age" placeholder="Enter Age">
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="form-label modal-field-text" for="address ">DOB</label>
                    <div class="input-group date datepickerclass" data-date-format='dd-mm-yyyy' id="dob_datepicker">
                        <input type="text" id="dob" class="form-control" name="dob" onkeydown="return false"/>
                        <span class="input-group-append">
                        <span class="input-group-text bg-light d-block">
                            <i class="fa fa-calendar"></i>
                        </span>
                        </span>
                    </div>
                </div>
                </div>
                {{-- <div class="col-md-4">
                    <div class="form-outline mb-3">
                        <label class="form-label modal-field-text" for="address ">Is Parent</label><br>
                        <input class="form-check-input" type="radio" name="is_parent" id="is_parent" value="1">
                        <label class="form-check-label modal-field-text" for="is_parent">Yes</label>
                        <input class="form-check-input" type="radio" name="is_parent" id="is_child" value="0">
                        <label class="form-check-label modal-field-text" for="is_child">No</label>
                    </div>
                </div> --}}

                <div class="col-md-4 ">
                    <div class="mb-3">
                        <label for="password" class="form-label modal-field-text">Password</label>
                        <input type="text" id="password" name="password" class="form-control" placeholder="" required="" autocomplete="false">
                    </div>
                </div>
                {{-- <div class="col-md-4">
                    <div class="form-outline mb-3">
                        <label class="form-label modal-field-text" for="address ">Customer Plan</label>
                        <select name="customer_plan" id="customer_plan" class="form-select mb-3 form-control" aria-label=".form-select-lg example"  required>
                            <option value="0">Select Customer Plan</option>
                            @foreach ($customer_plans as $key=>$customer_plan)
                            <option value="{{$key}}">{{$customer_plan}}</option>
                            @endforeach
                        </select>
                    </div>
                </div> --}}
                {{-- <div class="col-md-4">
                    <div class="form-outline mb-3">
                        <label class="form-label modal-field-text" for="address ">DOB</label>
                        <input type="date" id="dob" class="form-control" name="dob" placeholder="" required="">
                    </div>
                </div> --}}

                <div class="col-md-4 ">
                    <div class="mb-3">
                        <label for="email" class="form-label modal-field-text">Email</label>
                        <input type="text" id="email" name="email" class="form-control" placeholder="" required="" autocomplete="false">
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="mb-3">
                        <label for="customername-field" class="form-label modal-field-text">Country </label>
                        <select name="country_id" id="country_id" class="form-select mb-3 form-control" aria-label=".form-select-lg example" onchange="selectState(this.value);" required>
                            <option value="0">Select Country</option>
                            @foreach ($country_arr as $key=>$country)
                            <option value="{{$key}}">{{$country}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-4 ">
                    <div class="mb-3">
                        <label for="customername-field" class="form-label modal-field-text">State</label>
                            <select class="form-select mb-3 form-control" aria-label=".form-select-lg example" onchange="selectCity(this.value);" name="state_id" id="state_id" required>
                                <option value="0">Select State</option>
                            </select>
                    </div>
                </div>

                <div class="col-md-4 ">
                    <div class="mb-3">
                        <label for="customername-field" class="form-label modal-field-text">City</label>
                            <select class="form-select mb-3 form-control" aria-label=".form-select-lg example" name="city_id" id="city_id" required>
                            <option value="0" selected>Select City</option>
                            </select>
                    </div>
                </div>

                {{-- <div class="col-md-4 ">
                    <div class="mb-3">
                        <label for="latitude" class="form-label modal-field-text">Latitude</label>
                        <input type="text" id="latitude" name="latitude" class="form-control" placeholder="" required="">
                    </div>
                </div> --}}

                {{-- <div class="col-md-4 ">
                    <div class="mb-3">
                        <label for="longitude" class="form-label modal-field-text">Longitude</label>
                        <input type="text" id="longitude" name="longitude" class="form-control" placeholder="" required="">
                    </div>
                </div> --}}
                <div class="col-md-4 ">
                    <div class="mb-3">
                        <label for="pincode" class="form-label modal-field-text">Pincode</label>
                        <input type="number" id="pincode" name="pincode" class="form-control" placeholder="" required="">
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="mb-3">
                        <label for="blood_group" class="form-label modal-field-text">Blood Group</label>
                        <select name="blood_group" id="blood_group" required class="form-select mb-3 form-control" aria-label=".form-select-lg example">
                            <option value="">Select Blood Group</option>
                            @foreach ($blood_group_arr as $key=>$blood_group_arr)
                                <option value="{{$key}}">{{$blood_group_arr}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="mb-3">
                        <label for="height" class="form-label modal-field-text">Height</label>
                        <input type="number" id="height" name="height" class="form-control" placeholder="" required="">
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="mb-3">
                        <label for="height_unit" class="form-label modal-field-text">Height Unit</label>
                        <select name="height_unit" id="height_unit" required class="form-select mb-3 form-control" aria-label=".form-select-lg example" required>
                            <option value="">Select Height Unit</option>
                                <option value="Ft">Ft</option>
                                <option value="Cm">Cm</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="mb-3">
                        <label for="weight" class="form-label modal-field-text">Weight</label>
                        <input type="number" id="weight" name="weight" class="form-control" placeholder="" required="">
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="mb-3">
                        <label for="weight_unit" class="form-label modal-field-text">Weight</label>
                        <select name="weight_unit" id="weight_unit" required class="form-select mb-3 form-control" aria-label=".form-select-lg example" required>
                            <option value="">Select Weight Unit</option>
                                <option value="Kg">Kg</option>
                                <option value="Lbs">Lbs</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="mb-3">
                        <label for="weight" class="form-label modal-field-text">Is Married &nbsp</label>

                        <div class="py-2">
                            <div class="form-check form-check-inline">
                                <input type="radio" id="married_yes" name="is_married" class="form-check-input " placeholder="" required="" value="1">
                                <label for="married_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="married_no" name="is_married" class="form-check-input " placeholder="" required="" value="0">
                                <label for="married_no">No</label>                            </div>
                        </div>
                      </div>
                </div>
                <div class="col-md-4 ">
                    <div class="mb-3">
                        <label for="landmark" class="form-label modal-field-text">Landmark</label>
                        <input type="text" id="landmark" name="landmark" class="form-control" placeholder="" >
                    </div>
                </div>
                {{-- <div class="col-md-4 ">
                    <div class="mb-3">
                        <label for="residence_type_id" class="form-label modal-field-text">Residence</label>
                        <select name="residence_type_id" id="residence_type_id" class="form-select mb-3 form-control" aria-label=".form-select-lg example">
                            <option value="0">Select Residence</option>
                            @foreach ($residenceTypeArr as $key=>$residence)
                                <option value="{{$key}}">{{$residence}}</option>
                            @endforeach
                        </select>
                    </div>
                </div> --}}
                {{-- <div class="col-md-4 ">
                    <div class="mb-3">
                        <label for="customer_source_id" class="form-label modal-field-text">Source</label>
                            <select class="form-select mb-3 form-control" aria-label=".form-select-lg example" name="customer_source_id" id="customer_source_id">
                            <option value="0" selected disabled>Select Source</option>
                            @foreach ($customerSourceArr as $key=>$source)
                                <option value="{{$key}}">{{$source}}</option>
                            @endforeach
                            </select>
                    </div>
                </div> --}}
                <div class="col-md-4">
                    <div class="form-outline mb-4">
                        <label class="form-label modal-field-text" for="address">Address</label>
                        <textarea class="form-control" rows="3" id="address" name="address" ></textarea>

                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="mb-3">
                        <label for="image" class="form-label modal-field-text">Image</label>
                        <input type="file" id="image" name="image" class="form-control" >
                    </div>
                </div>
        </div>
        <div class="card-header border-bottom-0 px-0">
            <h5 class="modal-title " id="exampleModalLabel">Emergency Contact</h5>
        </div>
        <div class="row mt-1">

            <div class="col-md-4 ">
                <div class="mb-3">
                    <label for="emergency_name" class="form-label modal-field-text">Name</label>
                    <input type="text" id="emergency_name" name="emergency_name" class="form-control" placeholder="Person Name">
                </div>
            </div>
            {{-- <div class="col-md-4 ">
                <div class="mb-3">
                    <label for="relation_id" class="form-label modal-field-text">Relationship</label>
                    <select name="relation_id" id="relation_id" class="form-select mb-3 form-control" aria-label=".form-select-lg example">
                        <option value="0">Select Relationship</option>
                        @foreach ($relationshipArr as $key=>$relation)
                            <option value="{{$key}}">{{$relation}}</option>
                        @endforeach
                    </select>
                </div>
            </div> --}}
            <div class="col-md-4 ">
                <div class="mb-3">
                    <label for="emergency_contact_no" class="form-label modal-field-text">Contact Number</label>
                    <input type="number" id="emergency_contact_no" name="emergency_contact_no" class="form-control" placeholder="Contact Number" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="customername-field" class="form-label modal-field-text">Country</label>
                    <select id="emergency_country" name="emergency_country" class="form-select mb-3 form-control" onchange="selectemergencyState(this.value);" required>
                        <option value="0">Select Country</option>
                            @foreach ($country_arr as $key=>$country)
                            <option value="{{$key}}">{{$country}}</option>
                            @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="mb-3">
                    <label for="customername-field" class="form-label modal-field-text">State</label>
                        <select class="form-select mb-3 form-control" aria-label=".form-select-lg example" onchange="selectemergencyCity(this.value);" name="emergency_state" id="emergency_state" required>
                            <option value="0">Select State</option>
                        </select>
                </div>
            </div>

            <div class="col-md-4 ">
                <div class="mb-3">
                    <label for="customername-field" class="form-label modal-field-text">City</label>
                        <select class="form-select mb-3 form-control" aria-label=".form-select-lg example" name="emergency_city" id="emergency_city" required>
                        <option value="0" selected>Select City</option>
                        </select>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="mb-3">
                    <label for="emergency_pincode" class="form-label modal-field-text">Pincode</label>
                    <input type="number" id="emergency_pincode" name="emergency_pincode" class="form-control" placeholder="Pincode" >
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="mb-3">
                    <label for="emergency_address" class="form-label modal-field-text"> Address</label>
                    <textarea class="form-control" id="emergency_address" name="emergency_address" rows="3" placeholder="Address"></textarea>
                 </div>
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

{{-- <p class="text-center text-primary"><small></small></p>
<div>  </div> --}}


@push('scripts')
    {{-- {{$dataTable->scripts()}} --}}
<script>
    oTable = $('#customer-table').DataTable();
    $('#myInputTextField').keyup(function(){
        oTable.search($(this).val()).draw() ;
    })
</script>

<script>
$("#e13").select2();
$("#e13_ca").click(function() { $("#e13").val("CA").trigger("change"); });
$("#e13_ak_co").click(function() { $("#e13").val(["AK","CO"]).trigger("change"); });
</script>





    <script>
        function deleteData(id){
            var customer_id = id;

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
                    type: 'get',
                    url: 'customers/destroy/'+customer_id,
                    success: function (data) {
                        var oTable = $('#customer-table').dataTable();
                        oTable.fnDraw(false);
                        toastr.success("Deleted Successfully");
                        },
                        error: function (data) {
                            console.log('Error:', data);
                        }
                    });
               }
             });

        };
    </script>


    <script>
        $('input[name=contact_number]').change(function() {
            var contact_number=$('#contact_number').val();
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
            });
            jQuery.ajax({
                url: "{{ url('/get_datas') }}",
                method: 'get',
                data: {
                    key:"get_mobile_count",
                    value:contact_number,
                },
                success: function(result){
                    if(result['mobile_count']> 0)
                    {
                        toastr.error("Mobile Already Exists");
                        $('#contact_number').val('');
                    }
                },
                error: function(data){
                },
            });
        });
    </script>
      <script>
        $('input[name=email]').on('input', function(){
            var email=$('#email').val();
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
            });
            jQuery.ajax({
                url: "{{ url('/get_datas') }}",
                method: 'get',
                data: {
                    key:"get_email_count",
                    value:email,
                },
                success: function(result){
                    // alert(result['email_count']);
                    if(result['email_count']> 0)
                    {

                        toastr.error("Email Already Exists");
                        $('#email').val('');
                    }
                },
                error: function(data){
                },
            });
        });


        $(document).ready(function () {
 $('.datatable').DataTable({
    otherOptions: {},
    initComplete: function() {
        $(this.api().table().container()).find('input').parent().wrap('<form>').parent().attr('autocomplete', 'off');
    }
});
});
    </script>
    <script>
        $('input[name=mobile_number]').change(function() {
            var userType = $("input[type='radio'][name='customer_type']:checked").val();
            var contact_number=$('#mobile_number').val();
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
            });
            jQuery.ajax({
                url: "{{ url('/get_datas') }}",
                method: 'get',
                data: {
                    key : "get_mobile_count_by_type",
                    value : contact_number,
                    user_type: userType,
                },
                success: function(result){
                    if(result['mobile_count']> 0)
                    {
                        toastr.error("Mobile Already Exists");
                        $('#mobile_number').val('');
                    }
                },
                error: function(data){
                },
            });
        });
    </script>
    <script>

        function showFilter(){

                $('#filter_show').toggleClass('filterBoxAppear')

        }
    </script>
    <script>
        $(function(){
            $('.datepickerclass').datepicker({
                autoclose: true
            });
        });

    </script>
@endpush

@include('common.country_state_city');
@endsection
