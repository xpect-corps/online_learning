@extends('layouts.app')
@section('title', 'location management')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card table-card">
                <!-- end card header -->

                <div class="card-body">
                    <div id="customerList">
                        <div class="row g-4 mb-3">
                            <div class="col-sm-auto">
                                <div>

                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="d-flex justify-content-sm-end">

                                    {{-- <button type="button" class="btn btn-light add-btn" data-bs-toggle="modal"
                                        id="create-btn" data-bs-target="showModal"><i
                                            class="ri-add-line align-bottom me-1"></i> Import</button>
                                    <button type="button" class="btn btn-Filter "><i
                                            class="ri-equalizer-fill me-1 align-bottom"></i> Filters</button> --}}
                                    <a href="{{url('locations/create')}}" class="btn btn-addlead add-btn pt-2"
                                        id="create-btn"><i
                                            class="ri-add-line align-bottom me-1"></i> Add Location</a>

                                </div>
                            </div>
                        </div>

                        <div class="table-responsive table-card mt-3 mb-1">

                            {{-- {{ $dataTable->table(['class' => 'table align-middle table-nowrap']) }} --}}
                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap mb-0 datatable">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Location Name</th>
                                            <th scope="col">Location Description</th>
                                            <th scope="col">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(count($locations) > 0)
                                            @foreach($locations as $key=>$val)
                                            <tr>
                                                <td>#{{$val->id}}</td>
                                                <td>{{$val->location_name}}</td>
                                                <td>{{$val->location_desc}}</td>
                                                <td>
                                                    <div class="hstack gap-3 fs-15">
                                                        <div class="hstack gap-3 fs-15" >
                                                            <a href="{{url('/locations/show/'.$val->id)}}" class="link-warning"><i class=" ri-file-list-line"></i></a>
                                                            <a href="{{url('/locations/edit/'.$val->id)}}" class="link-primary"><i class=" ri-edit-line"></i></a>
                                                            <a href="javascript:void(0);" class="link-danger" onclick="deleteLeadStatus('{{$val->id}}')"><i class="ri-delete-bin-5-line"></i></a>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="10" class="d-flex justify-content-center">No recored Found!</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end col -->

    </div>


    <p class="text-center text-primary"><small></small></p>
    <div> </div>



@push('scripts')

<script>
    function deleteLeadStatus(id){
            var location_id = id;
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
                    url: "locations/destroy/"+location_id,
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

        };
</script>

@endpush
@endsection

