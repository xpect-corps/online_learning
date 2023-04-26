<script>
    $('#dc_calllog_form').on('submit',(function(e) {
        var formData = new FormData(this);
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        jQuery.ajax({
            url: "{{ url('/add_dc_calllog') }}",
            method: 'post',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
                success: function(result){
                    console.log(result);
                    var tab_id=result['tab_id'];
                    toastr.success(result['msg']);
                    location.reload();
                    $(tab_id).addClass('active');
                },
            error: function(data){
                console.log("error");
                // console.log(data.error);
                toastr.error("Please Choose Image File");
            }
        });
    }));
</script>
<script>
    function deleteDcCalllog(id)
    {
        var calllog_id = id;
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

                    url: "{{ url('/delete_dccalllog') }}",
                        method: 'get',
                        data: {
                            id:calllog_id,
                        },
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
    $('#dc_summary_form').on('submit',(function(e) {
        var formData = new FormData(this);
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        jQuery.ajax({
            url: "{{ url('/add_dc_summary') }}",
            method: 'post',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
                success: function(result){
                    console.log(result);
                    var tab_id=result['tab_id'];
                    toastr.success(result['msg']);
                    location.reload();
                    $(tab_id).addClass('active');
                },
            error: function(data){
                console.log("error");
                // console.log(data.error);
                toastr.error("Please Choose Image File");
            }
        });
    }));
</script>

<script>
    function deleteDcsummary(id)
    {
        var dc_summary_id = id;
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

                    url: "{{ url('/delete_dc_summary') }}",
                        method: 'get',
                        data: {
                            id:dc_summary_id,
                        },
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
    $('#hc_calllog_form').on('submit',(function(e) {
        var formData = new FormData(this);
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        jQuery.ajax({
            url: "{{ url('/add_hc_calllog')}}",
            method: 'post',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
                success: function(result){
                    console.log(result);
                    var tab_id=result['tab_id'];
                    toastr.success(result['msg']);
                    location.reload();
                    $(tab_id).addClass('active');
                },
            error: function(data){
                console.log("error");
                // console.log(data.error);
                toastr.error("Please Choose Image File");
            }
        });
    }));
</script>
<script>
    function editHcCalllog(v1,v2,v3,v4)
    {
        $('#hhc_calllog_form').prop('style','background-color:#003b41e6;height:280px;');
        $('#hc_calllog_id').val(v1);
        $('#imageResult').attr("src",v2);
        $('#hc_notes').val(v3);
        $('hcold-img').val(v4);
        $('#hc_calllog_submit').html('update');
        $('#hc_calllog_cancel').prop('style','display:block;background-color: rgb(233, 32, 32);margin-right:100px;');
    }
</script>
<script>
    function CancelHcCalllog()
    {
        $('#hc_calllog_id').val('');
        $('#imageResult').attr('');
        $('#hc_notes').val('');
        $('hcold-img').val('');

        $('#hhc_calllog_form').prop('style','background-color: rgba(var(--vz-light-rgb),var(--vz-bg-opacity))!important');
        $('#hc_calllog_submit').html('Submit');
        $('#hc_calllog_cancel').prop('style','display:none');

    }
</script>
<script>
    function deleteHcCalllog(id)
    {
        var hc_calllog_id = id;
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

                    url: "{{ url('/delete_hc_calllog') }}",
                        method: 'get',
                        data: {
                            id:hc_calllog_id,
                        },
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
    $('#hc_summary_form').on('submit',(function(e) {
        var formData = new FormData(this);
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        jQuery.ajax({
            url: "{{ url('/add_hc_summary') }}",
            method: 'post',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
                success: function(result){
                    console.log(result);
                    var tab_id=result['tab_id'];
                    toastr.success(result['msg']);
                    location.reload();
                    $(tab_id).addClass('active');
                },
            error: function(data){
                console.log("error");
                // console.log(data.error);
                toastr.error("Please Choose Image File");
            }
        });
    }));
</script>
<script>
    function editHcSummary(v1,v2,v3,v4)
    {
        $('#consultation_summary_form').prop('style','background-color:#003b41e6;height:400px;');
        $('#hc_summary_id').val(v1);
        $('#hc_summary_notes').val(v2);
        $('#hc_imageResult').attr("src",v3);
        $('#hcsummary_old_img').val(v4);
        $("#hc_imageResult").prop('style','display');

        $('#consultation_summary_submit').html('update');
        $('#consultation_summary_cancel').prop('style','display:block;background-color: rgb(233, 32, 32);margin-right:100px;');

    }
</script>
<script>
    function CancelConsultationSummary()
    {
        $('#hc_summary_id').val('');
        $('#hc_summary_notes').val('');
        $("#hc_imageResult").prop('style','display:none');
        $('#hcsummary_old_img').val('');

        $('#consultation_summary_form').prop('style','background-color: rgba(var(--vz-light-rgb),var(--vz-bg-opacity))!important');
        $('#consultation_summary_submit').html('Submit');
        $('#consultation_summary_cancel').prop('style','display:none');
    }
</script>
<script>
    function deleteHcSummary(id)
    {
        var hc_summary_id = id;
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

                    url: "{{ url('/delete_hc_summary') }}",
                        method: 'get',
                        data: {
                            id:hc_summary_id,
                        },
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
