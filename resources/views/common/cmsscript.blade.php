<script>
    $('#homepage_slider_form').on('submit',(function(e) {
        var formData = new FormData(this);
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        jQuery.ajax({
            url: "{{ url('/add_homepage_slider') }}",
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
    function showCmsDatas(v1,v2,v3,v4)
    {
        $('#cms_datas_id').val(v1);
        $('#heading').val(v2);
        $('#text').val(v3);
        $('#new_image').attr("src",v4);
        $('#new_image').prop('style','display:');
        // $('#old-img').val(v5);

        $('#home_slider_form').prop('style','background-color:#003b41e6');
        $('#cms_submit').html('update');
        $('#cms_cancel').prop('style','display:block;background-color: rgb(233, 32, 32);margin-right:100px;');
    }

    function clearcunsultation(){
                $("#cms_datas_id").val('');    
                $('#heading').val('');
                $('#text').val('');
                $('#new_image').empty('');
                $('#new_image').prop('style','display:none');

                $('#home_slider_form').prop('style','background-color: rgba(var(--vz-light-rgb),var(--vz-bg-opacity))!important');
                $('#cms_submit').html('Submit');
                $('#cms_cancel').prop('style','display:none');
             }
</script>
<script>
    function deleteCmsDatas(id) {
        var cmsdatas_id = id;
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

                        url: "{{ url('/delele_cmsdatas') }}",
                        method: 'get',
                        data: {
                            id: cmsdatas_id,
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
    $('#common_banner_form').on('submit',(function(e) {
        var formData = new FormData(this);
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        jQuery.ajax({
            url: "{{ url('/add_common_banner') }}",
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
                // console.log(data);
                toastr.error("Please Choose Image File");
            }
        });
    }));
</script>
<script>
    function showCommon(v1,v2,v3,v4,v5)
    {
        console.log(v1);
        $('#edit_common_id').val(v1);
        $('#common_heading').val(v2);
        $('#common_text').val(v3);
        $('#new_commonimage').attr("src",v4);
        $('#new_commonimage').prop('style','display:');
        $('#oldcommon-img').val(v5);

        $('#common_form').prop('style','background-color:#003b41e6');
        $('#common_submit').html('update');
        $('#common_cancel').prop('style','display:block;background-color: rgb(233, 32, 32);margin-right:100px;');
    }

    function clearcommon(){
                $("#edit_common_id").val('');    
                $('#common_heading').val('');
                $('#common_text').val('');
                $('#new_commonimage').val('');
                // $('#oldcommon-img').val('');
                $('#new_commonimage').prop('style','display:none');
                // alert("hy");
                $('#common_form').prop('style','background-color: rgba(var(--vz-light-rgb),var(--vz-bg-opacity))!important');
                $('#common_submit').html('Submit');
                $('#common_cancel').prop('style','display:none');
             }
</script>
<script>
    function deleteCommon(id) {
        var common_id = id;
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

                        url: "{{ url('/deletecommon') }}",
                        method: 'get',
                        data: {
                            id: common_id,
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

