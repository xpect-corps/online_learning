
@extends('layouts.app')
@section('content')

<div class="card">

        <div class="row">
        <div class="col-lg-12 margin-tb">
            {{-- <div class="pull-left">
            <h2>Edit User</h2>
        </div> --}}


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::model($user, ['method' => 'PATCH', 'route' => ['users.update', $user->id],'enctype'=>'multipart/form-data']) !!}
    <input type="hidden" name="selected_country_id" id="selected_country_id" value="{{ $user->country }}">
    <input type="hidden" name="selected_state_id" id="selected_state_id" value="{{ $user->state }}">
    <input type="hidden" name="selected_city_id" id="selected_city_id" value="{{ $user->city }}">
    <div class="modal-body">
        <div class="pull-right">
            <a class="btn btn-danger profile-back-arrow text-white mb-3" href="{{ route('users.index') }}"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg></a>
        </div>

        <div class="row">
            <div class="col-md-4 ">
                <div class="mb-3">
                    <label for="hospital_name" class="form-label modal-field-text">First Name</label>
                    <input type="text" id="hospital_name" name="first_name" class="form-control"  readonly
                         value="{{ $user->first_name }}">
                </div>
                <div class="mb-3">
                    <label for="contact_number" class="form-label modal-field-text">Mobile Number</label>
                    <input type="text" id="contact_number" name="mobile_number" class="form-control"  readonly
                         value="{{ $user->mobile_number }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3 col-md-12">
                    <label for="responsible_person" class="form-label modal-field-text">Last Name</label>
                    <input type="text" id="responsible_person" class="form-control" value="{{ $user->last_name }}"  name="last_name"  readonly >
                </div>
                <div class="mb-3 col-md-12 row">
                   <div class="col-md-8">
                    <label for="alternative_number" class="form-label modal-field-text">Date Of Birth</label>
                    <input type="text" id="alternative_number" name="dob" value="{{date('d-m-Y',strtotime($user->dob))}}" class="form-control"  readonly >
                   </div>
                   <div class="col-md-4 pt-5">
                    ({{ \Carbon\Carbon::parse($user->dob)->diff(\Carbon\Carbon::now())->format('%y years') }})

                   </div>
                </div>

            </div>



            <div class="col-md-4">
                <div class="form-outline mb-4">
                    <label class="form-label modal-field-text" for="address ">Address</label>
                    <textarea class="form-control " style="height: 130px;" id="address" rows="4" name="address" readonly>{{ $user->address }}</textarea>
                </div>
            </div>



            <div class="col-md-4 ">
                <div class="mb-3">
                    <label for="email" class="form-label modal-field-text">Email</label>
                    <input type="text" id="email" name="email" class="form-control"  readonly
                        value="{{ $user->email }}">
                </div>
            </div>

            <div class="col-md-4 ">
                <div class="mb-3">
                    <label for="password" class="form-label modal-field-text">Password</label>
                    <input type="text" id="password" readonly name="password" class="form-control" placeholder="">
                </div>
            </div>

            <div class="col-md-4 ">
                <div class="mb-3">
                    <label for="customername-field" class="form-label modal-field-text">Country </label>
                        @foreach ($country_arr as $key => $countries)
                            @if (@$user->country == $key)
                                <input  class="form-control" value="{{ $countries }}"selected readonly>
                            @endif
                        @endforeach
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="responsible_person" class="form-label modal-field-text">Gender</label>
                    <input type="text" id="gender" name="gender" class="form-control"  readonly
                    value="{{ $user->gender }}">
                </div>
                <div class="mb-3">
                    <label for="alternative_number" class="form-label modal-field-text">Role</label>
                    {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control mb-3 form-control','disabled')) !!}
                </div>
            </div>


            <div class="col-md-4 ">
                <div class="mb-3">
                    <label for="customername-field" class="form-label modal-field-text">State</label>
                    <select disabled class="form-control mb-3 form-control" aria-label=".form-select-lg example"
                        onchange="selectCity(this.value);" name="state_id" id="state_id" required>
                        <option value="0">Select State</option>
                    </select>
                </div>

                    <div class="mb-3">
                        <label for="pincode" class="form-label modal-field-text">Pincode</label>
                        <input type="text" id="pincode" name="pincode" class="form-control" readonly placeholder=""
                            required="" value="{{ $user->pincode }}">
                    </div>

            </div>

            <div class="col-md-4 ">
                <div class="mb-3">
                    <label for="customername-field" class="form-label modal-field-text">City</label>
                    <select class="form-control mb-3 form-control" disabled aria-label=".form-select-lg example" name="city_id"
                        id="city_id" required>
                        <option value="0" selected>Select City</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="customername-field" class="form-label modal-field-text">Status</label>


                    <select class="form-control mb-3 form-control" disabled aria-label=".form-select-lg example" name="status"
                        required>
                        <option value="1" {{ $user->is_active == '1' ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ $user->is_active == '0' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
            </div>


            <div class="col-md-4 ">

                @if($user->image)
                    <div>
                        <img src="{{ Storage::disk('image')->url('uploads/profile_images/'.$user->image) }}" alt="image" width="150" height="150">
                    </div>
                @endif
            </div>
            {{-- <div class="col-md-4">
                <div class="form-outline mb-4">
                    <label class="form-label modal-field-text" for="is_coordinator">Is Admin</label>
                    <input type="checkbox" name="is_admin" id="is_coordinator" {{$user->is_admin==1?'checked':''}}>
                </div>
            </div> --}}

        </div>

</div>
</div>
        {!! Form::close() !!}
        @push('scripts')
            <script>
                $('input[name=mobile_number]').change(function() {
                    var contact_number = $('#contact_number').val();
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
                            if (result['mobile_count'] > 0) {
                                toastr.error("Mobile Already Exists");
                                $('#contact_number').val('');
                            }
                        },
                        error: function(data) {},
                    });
                });
            </script>
            <script>
                $('input[name=email]').change(function() {
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
                            if (result['email_count'] > 0) {
                                toastr.error("Email Already Exists");
                                $('#email').val('');
                            }
                        },
                        error: function(data) {},
                    });
                });
            </script>
            @include('common.country_state_city');
        @endpush
    @endsection
