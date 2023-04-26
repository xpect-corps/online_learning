@extends('layouts.app')
@section('title', 'system users')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card table-card">
                <!-- end card header -->

                <div class="card-body">
                    <div id="customerList">
                        <div class="row g-4 mb-3">

                            <div class="col-sm">
                                <div class="d-flex justify-content-sm-end">

                                    {{-- <button type="button" class="btn btn-light add-btn" data-bs-toggle="modal"
                                        id="create-btn" data-bs-target="showModal"><i
                                            class="ri-add-line align-bottom me-1"></i> Import</button>
                                    <button type="button" class="btn btn-Filter "><i
                                            class="ri-equalizer-fill me-1 align-bottom"></i> Filters</button> --}}
                                    <button type="button" class="btn btn-addlead add-btn" data-bs-toggle="modal"
                                        id="create-btn" data-bs-target="#showModal">
                              <i class="ri-add-line align-bottom me-1"></i> Add User
                                    </button>

                                </div>
                            </div>
                        </div>

                        <div class="table-responsive table-card mt-3 mb-1">

                            {{-- {{ $dataTable->table(['class' => 'table align-middle table-nowrap ']) }}

                            <div class="noresult" style="display: none">
                                <div class="text-center">
                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                        colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                    </lord-icon>
                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                    <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any
                                        orders for you search.</p>
                                </div>
                            </div> --}}
                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap mb-0 datatable">
                                    <thead class="table-light">
                                        <tr>
                                            <th scop="col">Sl</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Role</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>
                                                    @if ($user->image != null)
                                                        <img src="{{ Storage::disk('image')->url('uploads/profile_images/' . $user->image) }}"
                                                            alt="image" width="30" height="30">
                                                    @else
                                                        <img class="img-circle"
                                                            src="{{ asset('assets/images/users/user-dummy-img.jpg') }}"
                                                            alt="image" width="30" height="30">
                                                    @endif
                                                </td>
                                                <td>{{ $user->first_name }}</td>
                                                <td>{{ $user->last_name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->role }}</td>
                                                <td>
                                                    @if ($user->is_active == 1)
                                                        <span style="color:green">Active</span>
                                                    @else
                                                        <span style="color:red">In-Active</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('users.show', $user->id) }}"
                                                        class="btn btn-info btn-sm">Show</a>
                                                    <a href="{{ route('users.edit', $user->id) }}"
                                                        class="btn btn-primary btn-sm">Edit</a>
                                                        @if ($user->is_admin == 0)
                                                    <a href="" class="btn btn-danger btn-sm"
                                                        onclick="deleteData({{ $user->id }})"
                                                        id="delete-clinician">Delete</a>
                                                        @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        {{-- <div class="gridjs-footer"><div class="gridjs-pagination"><div role="status" aria-live="polite" class="gridjs-summary" title="Page 1 of 1">Showing <b>1</b> to <b>10</b> of <b>10</b> results</div><div class="gridjs-pages"><button tabindex="0" role="button" disabled="" title="Previous" aria-label="Previous" class="">Previous</button><button tabindex="0" role="button" class="gridjs-currentPage" title="Page 1" aria-label="Page 1">1</button><button tabindex="0" role="button" disabled="" title="Next" aria-label="Next" class="">Next</button></div></div></div> --}}


                    </div>
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end col -->

    </div>
    <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header  p-3 ">
                    <h5 class="modal-title" id="exampleModalLabel"> Create New User</h5>
                    <button type="button" class="btn-modal-close" data-bs-dismiss="modal" aria-label="Close"
                        id="close-modal"><i class="ri-close-fill"></i></button>
                </div>
                {!! Form::open(['route' => 'users.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4 ">
                            <div class="mb-3">
                                <label for="hospital_name" class="form-label modal-field-text">First Name</label><span
                                    style="color: red">*</span>
                                <input type="text" id="hospital_name" name="first_name" class="form-control"
                                    placeholder="" required="">
                            </div>
                            <div class="mb-3">
                                <label for="mobile_number" class="form-label modal-field-text">Contact Number</label><span
                                    style="color: red">*</span>
                                <input type="number" id="mobile_number" name="mobile_number" class="form-control"
                                    minlength="10" maxlength="10" placeholder="" required="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="responsible_person" class="form-label modal-field-text">Last Name</label><span
                                    style="color: red">*</span>
                                <input type="text" id="responsible_person" class="form-control" name="last_name"
                                    placeholder="" required="">
                            </div>
                            {{-- <div class="mb-3">
                            <label for="alternative_number" class="form-label modal-field-text">Date Of Birth</label><span style="color: red">*</span>
                            <input type="date" id="alternative_number" name="dob" class="form-control" placeholder="" required="">
                        </div> --}}
                            <label for="alternative_number" class="form-label modal-field-text">Date Of Birth</label><span
                                style="color: red">*</span>
                            <div class="input-group date datepickerclass" data-date-format='dd-mm-yyyy'
                                id="dob_datepicker">
                                <input type="text" id="alternative_number" class="form-control" name="dob"
                                    onkeydown="return false" />
                                <span class="input-group-append">
                                    <span class="input-group-text bg-light d-block">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="responsible_person" class="form-label modal-field-text">Gender</label><span
                                    style="color: red">*</span>
                                <select name="gender" class="form-select mb-3 form-control">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="alternative_number" class="form-label modal-field-text">Role</label><span
                                    style="color: red">*</span>
                                {!! Form::select('roles[]', $roles, [], ['class' => 'form-select mb-3 form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-outline mb-4">
                                <label class="form-label modal-field-text" for="address">Address</label><span
                                    style="color: red">*</span>
                                <textarea class="form-control " style="height: 130px;" id="address" rows="4" name="address"></textarea>
                            </div>
                        </div>
                        {{-- <div class="col-md-4">
                            <div class="form-outline mb-4">
                                <label class="form-label modal-field-text" for="is_coordinator">Is Admin</label>
                                <input type="checkbox" name="is_admin" id="is_coordinator">
                            </div>
                        </div> --}}

                        <div class="col-md-4 ">
                            <div class="mb-3">
                                <label for="email" class="form-label modal-field-text">Email</label><span
                                    style="color: red">*</span>
                                <input type="email" id="email" name="email" class="form-control" placeholder=""
                                    required="" autocomplete="false">
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="mb-3">
                                <label for="password" class="form-label modal-field-text">Password</label><span
                                    style="color: red">*</span>
                                <input type="text" id="password" name="password" class="form-control"
                                    placeholder="" required="" autocomplete="false">
                            </div>
                        </div>

                        <div class="col-md-4 ">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label modal-field-text">Country</label><span
                                    style="color: red">*</span>
                                <select name="country" id="country_id" class="form-select mb-3 form-control"
                                    aria-label=".form-select-lg example" onchange="selectState(this.value);" required>
                                    <option value="0">Select Country</option>
                                    @foreach ($country_arr as $key => $country)
                                        <option value="{{ $key }}">{{ $country }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4 ">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label modal-field-text">State</label><span
                                    style="color: red">*</span>
                                <select class="form-select mb-3 form-control" aria-label=".form-select-lg example"
                                    onchange="selectCity(this.value);" name="state" id="state_id" required>
                                    <option value="0">Select State</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4 ">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label modal-field-text">City</label><span
                                    style="color: red">*</span>
                                <select class="form-select mb-3 form-control" aria-label=".form-select-lg example"
                                    name="city" id="city_id" required>
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
                                <label for="pincode" class="form-label modal-field-text">Pincode</label><span
                                    style="color: red">*</span>
                                <input type="number" id="pincode" name="pincode" class="form-control" placeholder=""
                                    required="">
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="mb-3">
                                <label for="image" class="form-label modal-field-text">Image</label>
                                <input type="file" id="image" name="image" class="form-control"
                                    placeholder="Enter Image">
                            </div>
                        </div>
                    </div>


                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="submit" class="btn  modal-submit" id="add-btn">Submit</button>
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>

        <p class="text-center text-primary"><small></small></p>
        <div> </div>
        {{-- <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.js')}}"></script> --}}




        @push('scripts')
            {{-- {{$dataTable->scripts()}} --}}

            {{-- <script>
        function deleteData(id){
            var hospital_id = id;


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
                    url: "hospitals/destroy/"+hospital_id,
                    success: function (data) {
                        var oTable = $('#hospitals-table').dataTable();
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
    </script> --}}
            <script>
                function deleteData(id) {
                    var users_id = id;
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

                                    url: "{{ url('/users_destroy') }}",
                                    method: 'get',
                                    data: {
                                        id: users_id,
                                    },
                                    success: function(data) {
                                        toastr.success("Deleted Successfully");
                                        location.reload();
                                    },
                                    error: function(data) {
                                        console.log('Error:', data);
                                    }
                                });
                            }
                        });
                }
            </script>
            <script>
                $('input[name=mobile_number]').change(function() {
                    var contact_number = $('#mobile_number').val();
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    });
                    jQuery.ajax({
                        url: "{{ url('/get_datas') }}",
                        method: 'get',
                        data: {
                            key: "get_mobile_count",
                            value: contact_number,
                        },
                        success: function(result) {
                            console.log(result);
                            if (result['mobile_count'] > 0) {
                                toastr.error("Mobile Already Exists");
                                $('#mobile_number').val('');
                            }
                        },
                        error: function(data) {},
                    });
                });
            </script>
            <script>
                $('input[name=email]').on('input', function() {
                    var email = $('#email').val();
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    });
                    jQuery.ajax({
                        url: "{{ url('/get_datas') }}",
                        method: 'get',
                        data: {
                            key: "get_email_count",
                            value: email,
                        },
                        success: function(result) {
                            // alert(result['email_count']);
                            if (result['email_count'] > 0) {

                                toastr.error("Email Already Exists");
                                $('#email').val('');
                            }
                        },
                        error: function(data) {},
                    });
                });
            </script>
            <script>
                $(function() {
                    $('.datepickerclass').datepicker({
                autoclose: true
            });
                });
            </script>
            <script>
                $(document).ready(function() {
                    $('.datatable').DataTable({
                        otherOptions: {},
                        initComplete: function() {
                            $(this.api().table().container()).find('input').parent().wrap('<form>').parent()
                                .attr('autocomplete', 'off');
                        }
                    });
                });
            </script>
            @include('common.country_state_city');
        @endpush

    @endsection
