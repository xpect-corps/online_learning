@extends('admin.layouts.admin_app')

@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-xl-3 col-lg-4 col-md-12 theiaStickySidebar">
                {{-- <div class="settings-widget dash-profile">
                    <div class="settings-menu p-0">
                        <div class="profile-bg">
                            <h5>Beginner</h5>
                            <img src="{{ asset('img/instructor-profile-bg.jpg')}}" alt>
                            <div class="profile-img">
                                <a href="instructor-profile.html"><img src="{{asset('img/user/user15.jpg')}}" alt></a>
                            </div>
                        </div>
                        <div class="profile-group">
                            <div class="profile-name text-center">
                                <h4><a href="instructor-profile.html">Jenny Wilson</a></h4>
                                <p>Instructor</p>
                            </div>
                            <div class="go-dashboard text-center">
                                <a href="add-course.html" class="btn btn-primary">Create New Course</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="settings-widget account-settings ">
                    <div class="settings-menu">
                        <h3>DASHBOARD</h3>
                        <ul>
                            <li class="nav-item  ">
                                <a href="{{ url('/admin/home') }}" class="nav-link">
                                    <i class="feather-home"></i> My Dashboard
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ url('/admin/course') }}" class="nav-link">
                                    <i class="feather-book"></i> My Courses
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ url('/admin/notification') }}" class="nav-link">
                                    <i class="feather-bell"></i> Notifications
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ url('/admin/students') }}" class="nav-link">
                                    <i class="feather-users"></i> Students
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ url('/admin/Category') }}" class="nav-link">
                                    <i class="ri-file-list-3-line"></i>Category
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ url('/admin/tutor') }}" class="nav-link">
                                    <i class="ri-slideshow-line"></i>Tutor
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ url('/admin/payment') }}" class="nav-link">
                                    <i class="ri-bank-card-line"></i> Payment
                                </a>
                            </li>
                            <li class="nav-item active ">
                                <a href="{{ url('/admin/tag') }}" class="nav-link">
                                    <i class="ri-bookmark-line"></i> Tag
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-xl-9 col-lg-8 col-md-12">


                <div class="row">
                    <div class="col-md-12">
                        <div class="settings-widget">
                            <div class="settings-inner-blk p-0">
                                <div class="sell-course-head comman-space">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3>Tags</h3>
                                        <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                            data-bs-target="#addModal">Add Tag</button>
                                    </div>

                                </div>
                                <div class="comman-space pb-0">
                                    <div class="settings-tickets-blk course-instruct-blk table-responsive">

                                        <table class="table table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Sl No</th>
                                                    <th>Tag Name</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = 1;
                                                @endphp
                                                @foreach ($tag_lists as $value)
                                                    <tr>
                                                        <td>
                                                            {{ $no++ }}
                                                        </td>
                                                        <td>{{ $value->name }}</td>
                                                        <td>
                                                            @if ($value->status == 1)
                                                                <span class="badge info-low">Live</span>
                                                            @elseif($value->status == 0)
                                                                <span class="badge info-low bg-danger text-white">Off</span>
                                                            @endif
                                                            {{-- <td><span class="badge info-low">Live</span></td> --}}
                                                        <td>
                                                            <div class="d-flex align-items-center gap-2">
                                                                <button class="btn bg-primary text-white px-3 py-1"
                                                                    type="button" data-bs-toggle="modal"
                                                                    data-bs-target="#editModal"
                                                                    onclick="TagEdit('{{ $value->id }}','{{ $value->name }}','{{ $value->status }}')">Edit</button>
                                                                <a href="{{ url('admin/delete_tag/'.$value->id) }}"><button class="btn  bg-danger text-white px-3 py-1"
                                                                    onclick="return myConfirm();" type="button"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#deleteModal">Delete</button></a>

                                                            </div>

                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- add modal --}}

    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="post" action="{{ route('add_tag') }}">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Add Tag</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="add-course-label">Tag name</label>
                            <input type="text" class="form-control" placeholder="Tag Name" name="tag_name" />
                        </div>
                        <div class="form-group">
                            <label class="add-course-label">Status</label>
                            <select class="form-select" aria-label="Default select example" name="status">
                                <option value="1">Live</option>
                                <option value="0">Off</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- edit modal --}}

    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="post" action="{{ route('update_tag') }}">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Tag</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="tag_id" id="tag_id">
                            <label class="add-course-label">Tag name</label>
                            <input type="text" class="form-control" placeholder="Tag Name" name="edit_name"
                                id="edit_name" />
                        </div>
                        <div class="form-group">
                            <label class="add-course-label">Status</label>
                            <select class="form-select" aria-label="Default select example" name="edit_status"
                                id="edit_status">
                                <option value="1">Live</option>
                                <option value="0">Off</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Update </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- delet modal  --}}



    @push('scripts')
        <script>
            function myConfirm() {
                var result = confirm("Want to delete?");
                if (result == true) {
                    return true;
                } else {
                    return false;
                }
            }
        </script>
        <script>
            function TagEdit(v1, v2, v3) {
                $('#tag_id').val(v1);
                $('#edit_name').val(v2);
                $('#edit_status').val(v3);
            }
        </script>
    @endpush
@endsection
