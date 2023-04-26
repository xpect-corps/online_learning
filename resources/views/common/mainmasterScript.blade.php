<script>
    $('#master_lab_form').on('submit',(function(e) {
        var formData = new FormData(this);
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        jQuery.ajax({
            url: "{{ url('/add_master_lab') }}",
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
    function EditMasterLabs(v1,v2,v3,v4)
    {
        $('#lab-form').prop('style','background-color:#003b41e6;height:280px;');

        $('#lab_id').val(v1);
        $('#lab_name').val(v2);
        $('#Lab_description').val(v3);
        $('#lab_status').val(v4);
        $('#lab-submit-button').html('update');
        $('#lab_cancel').prop('style','display:block;background-color: rgb(233, 32, 32);margin-right:100px;');


    }
</script>
<script>
    function cancellabs()
    {
        $('#lab_id').val('');
        $('#lab_name').val('');
        $('#Lab_description').val('');
        $('#lab_status').val('Select');



        $('#lab-form').prop('style','background-color: rgba(var(--vz-light-rgb),var(--vz-bg-opacity))!important');
        $('#lab-submit-button').html('Submit');
        $('#lab_cancel').prop('style','display:none');

    }
</script>
<script>
    function deleteMasterLabs(id)
    {
        var masterlab_id = id;
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

                    url: "{{ url('/delete_masterlab') }}",
                        method: 'get',
                        data: {
                            id:masterlab_id,
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
