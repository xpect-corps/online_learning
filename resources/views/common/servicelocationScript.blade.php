<script>
    $('#services_location_form').on('submit',(function(e) {
        var formData = new FormData(this);
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        jQuery.ajax({
            url: "{{ url('/add_hcservices_pricing') }}",
            method: 'post',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
                success: function(result){
                    toastr.success(result['msg']);
                    location.reload();
                },
            error: function(data){
                console.log("error");
                console.log(data);
            }
        });
    }));
</script>
<script>
    function EditServiceLocation(v1,v2,v3,v4,v5,v6,v7,v8)
    {
        $('#service_location_id').val(v1);
        $('#locations').val(v2);
        $('#amounts').val(v3);
        $('#offer_amounts').val(v4);
        if (v5 == 1) {
            $('#offers_active').prop('checked', true);
        }
        else
        {
            $('#offers_active').prop('checked', false);
        }
        if (v6 == 1) {
            $('#is_active').prop('checked', true);
        }
        else
        {
            $('#is_active').prop('checked', false);
        }
        if(v7 == 1)
        {
            $('#featureds').prop('checked', true);
        }
        else
        {
            $('#featureds').prop('checked', false);
        }
        if(v8 == 1)
        {
            $('#is_trendings').prop('checked', true);
        }
        else
        {
            $('#is_trendings').prop('checked', false);
        }
    }
</script>
<script>
    function DeleteServiceLocation(id) {
        var services_location_id = id;
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

                        url: "{{ url('/delele_services_location') }}",
                        method: 'get',
                        data: {
                            id: services_location_id,
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
    $('#healthcare_labtest_form').on('submit',(function(e) {
        var formData = new FormData(this);
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        jQuery.ajax({
            url: "{{ url('/add_healthcare_labtest') }}",
            method: 'post',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
                success: function(result){
                    toastr.success(result['msg']);
                    location.reload();
                },
            error: function(data){
                console.log("error");
                console.log(data);
            }
        });
    }));
</script>
<script>
    function Show_hc_labtest(v1,v2,v3,v4,v5,v6,v7,v8,v9)
    {
        $('#hc_labtest_id').val(v1);
        $('#hc_test_name').val(v2);
        $('#rols').val(v3);
        $('#hc_desc').val(v4);
        if(v5 == 1)
        {
            $('#edit_is_featured').prop('checked',true);
        }
        else
        {
            $('#edit_is_featured').prop('checked',false);
        }
        if(v6 == 1)
        {
            $('#edit_is_trending').prop('checked',true);
        }
        else
        {
            $('#edit_is_trending').prop('checked',false);
        }
        $('#imageResult').attr("src",v7);
        $('#old-img').val(v8);
        $('#hc_edit_code').val(v9);
    }
</script>
<script>
    function DeleteHealthCareLabtest(id) {
        var hc_labtest_id = id;
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

                        url: "{{ url('/deleteLabtest') }}",
                        method: 'get',
                        data: {
                            id: hc_labtest_id,
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
