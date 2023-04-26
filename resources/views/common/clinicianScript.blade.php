<script>
    $(document).ready(function() {

        var saved_role_id=$('#selected_role_id').val();
        var saved_qualification_id=$('#selected_qualification_id').val();
        var saved_department_id=$('#selected_department_id').val();
        var saved_designation_id=$('#selected_designation_id').val();
        if(saved_role_id != '')
        {
            getValues(saved_role_id);
        }

    });

    function getValues(id){
        var saved_department_id=$('#selected_department_id').val();
        var saved_qualification_id=$('#selected_qualification_id').val();
        var saved_designation_id=$('#selected_designation_id').val();

        // var parsedSavedQualification = jQuery.parseJSON( saved_qualification_id );

        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                jQuery.ajax({
                url: "{{ url('/get_datas') }}",
                method: 'get',
                data: {
                    key:"clinician",
                    id:id,
                },
                success: function(result){
                   department(result);
                   qualification(result);
                  designation(result);
                },
                error: function(data){
                    console.log("error");
                    console.log(data);
                }
            });

            function department(result){
                 // departments
                 opt1="<option>Select Department</option>";
                    if(saved_department_id)
                    {    for (i = 0; i < result['departments'].length; i++)
                        {
                            if(saved_department_id==result['departments'][i]['id'])
                            {
                                opt1+="<option selected='selected' value='"+result['departments'][i]['id']+"' >"+result['departments'][i]['name']+"</option>";
                            }
                            else{
                                opt1+="<option value='"+result['departments'][i]['id']+"'>"+result['departments'][i]['name']+"</option>";
                            }
                        }
                    }else{
                        opt1+="<option value='"+result['departments'][i]['id']+"'>"+result['departments'][i]['name']+"</option>";
                    }
                    opt1+="";
                    $("#department_id").html(opt1);
                    return true;

            }

            function qualification(result){
                console.log(saved_qualification_id);
                var qualification=JSON.parse(saved_qualification_id);
                 // qualifications
                 opt2="<option>Select Qualification</option>";
                    if(qualification)
                        {for (i = 0; i < result['qualifications'].length; i++)
                        {

                            if(qualification==result['qualifications'][i]['id'])
                            {
                                opt2+="<option selected='selected' value='"+result['qualifications'][i]['id']+"' >"+result['qualifications'][i]['name']+"</option>";

                            } else
                            {
                                opt2+="<option value='"+result['qualifications'][i]['id']+"'>"+result['qualifications'][i]['name']+"</option>";

                            }
                        }
                    }else{
                        opt2+="<option value='"+result['qualifications'][i]['id']+"'>"+result['qualifications'][i]['name']+"</option>";

                    }
                    opt2+="";
                    $("#qualification_id").html(opt2);
                    for (i = 0; i < qualification.length; i++)
                    {
                        $('#qualification_id option[value=' + qualification[i] + ']').attr('selected', true).trigger('change');
                    }
                    return true;
            }

            function designation(result){
                  // designation
                  opt3="<option>Select Designation</option>";

                    if(saved_designation_id)
                    {
                        for (i = 0; i < result['designations'].length; i++)
                        {
                            if(saved_designation_id==result['designations'][i]['id'])
                            {
                                opt3+="<option selected='selected' value='"+result['designations'][i]['id']+"' >"+result['designations'][i]['name']+"</option>";
                            }
                            else{
                            opt3+="<option value='"+result['designations'][i]['id']+"'>"+result['designations'][i]['name']+"</option>";

                            }
                    }
                    }else{
                        opt3+="<option value='"+result['designations'][i]['id']+"'>"+result['designations'][i]['name']+"</option>";
                    }
                    opt3+="";
                    $("#designation_id").html(opt3);
                    return true;
            }
    }
</script>

<script>
    function selectDoctor(id)
    {
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        jQuery.ajax({
            url: "{{ url('/get_datas') }}",
            method: 'get',
            data: {
                key:"get_doctor_list",
                id:id,
            },
            success: function(result){
               console.log(result);
               opt="<option value=''>Select Clinician</option>";
                    for (i = 0; i < result['clinician_list'].length; i++)
                    {
                        opt+="<option value='"+result['clinician_list'][i]['id']+"'>"+result['clinician_list'][i]['first_name']+"</option>";
                    }
                    opt+="";
                    $("#clinician").html(opt);
            },
            error: function(data){
                console.log("error");
                console.log(data);
            }
        });
    }
</script>

<script>
    function hideCorporateUser(id)
    {
        $('#corporative_client_div').css('display','none');
        $('#corporate_client_name').prop('required',false);
    }
</script>
<script>
    function showCorporateUser(id)
    {
        $('#corporative_client_div').css('display','block');
        $('#corporate_client_name').prop('required',true);

    }
</script>
<script>
    $('#lead_status_form').on('submit',(function(e) {
        var formData = new FormData(this);
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        jQuery.ajax({
            url: "{{ url('/lead_status_save') }}",
            method: 'post',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
                success: function(result){
                    console.log(result);
                    // var activeTab='Shedules-Management';
                    // location.reload();
                    // $('#myTab a[href="' + activeTab + '"]').tab('show');
                    if(result['msg']){
                        toastr.success(result['msg']);
                    }else if(result['error']){
                        toastr.error(result['error']);
                    }
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
    $(document).ready(function(){
        $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
            alert(1);
            localStorage.setItem('activeTab', $(e.target).attr('href'));
        });
        var activeTab = localStorage.getItem('activeTab');
        if(activeTab){
            $('#myTab a[href="' + activeTab + '"]').tab('show');
        }
    });
    </script>
<script>
    function showDetails(name,color,id,status)
    {
        $('#final_status').val(name);
        $('#edit_status_color').val(color);
        $('#status_id').val(id);
        if(status == 1)
        {
            $('#edit_status').prop('checked',true);
        }
        else
        {
            $('#edit_status').prop('checked',false);
        }
    }
</script>
<script>
    function deleteLeadStatus(id){
            var status_id = id;
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
                    url: "lead_status/destroy/"+status_id,
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
<script>
    $('#lead_source_form').on('submit',(function(e) {
        var formData = new FormData(this);
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        jQuery.ajax({
            url: "{{ url('/lead_source_save') }}",
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
                console.log(data);
            }
        });
    }));
</script>
<script>
    function showLeadSource(name,id,status)
    {
        $('#lead_source_id').val(id);
        $('#lead_sources').val(name);
        if(status == 1)
        {
            $('#source_status').prop('checked',true);
        }
        else
        {
            $('#source_status').prop('checked',false);
        }

    }
</script>

<script>
    function deleteLeadSource(id)
    {
        var source_id = id;
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
                    url: "lead_source/destroy/"+source_id,
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
    function showDocumentType(name,id)
    {
        $('#documenttype_form').prop('style','background-color:#003b41e6;height:150px;');
        $('#document_type_id').val(id);
        $('#document_type').val(name);
        $('#add_document_type').html('update');
        $('#document_type_cancel').prop('style','display:block;background-color: rgb(233, 32, 32);margin-right:100px;');
    }
</script>
<script>
    function CancelDocumentType()
    {
        $('#document_type_id').val('');
        $('#document_type').val('');


        $('#documenttype_form').prop('style','background-color: rgba(var(--vz-light-rgb),var(--vz-bg-opacity))!important');
        $('#add_document_type').html('Submit');
        $('#document_type_cancel').prop('style','display:none');
    }
</script>
<script>
    $('#document_type_form').on('submit',(function(e) {
        var formData = new FormData(this);
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        jQuery.ajax({
            url: "{{ url('/document_type_save') }}",
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
    function deleteDocumentType(id)
    {
        var document_type_id = id;
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
                    url: "document_type/destroy/"+document_type_id,
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
    function showCustomerSource(v1,v2,v3,v4)
    {
        $('#membersource_form').prop('style','background-color:#003b41e6;height:250px;');
        $('#customer_source_id').val(v1);
        $('#name').val(v2);
        $('#color').val(v3);
        $('#customer_source_status').val(v4);
        $('#add_member_source').html('update');
        $('#member_source_cancel').prop('style','display:block;background-color: rgb(233, 32, 32);margin-right:100px;');
    }
</script>
<script>
    function CancelMemberSource()
    {
        $('#customer_source_id').val('');
        $('#name').val('');
        $('#color').val('');
        $('#customer_source_status').val('Select');

        $('#membersource_form').prop('style','background-color: rgba(var(--vz-light-rgb),var(--vz-bg-opacity))!important');
        $('#add_member_source').html('Submit');
        $('#member_source_cancel').prop('style','display:none');
    }
</script>
<script>
    $('#customer_source_form').on('submit',(function(e) {
        var formData = new FormData(this);
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        jQuery.ajax({
            url: "{{ url('/customer_source_save') }}",
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
    function deleteCustomerSource(id)
    {
        var membersource_id = id;
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
                    url: "member_source/destroy/"+membersource_id,
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
    $('#member_status_form').on('submit',(function(e) {
        var formData = new FormData(this);
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        jQuery.ajax({
            url: "{{ url('/member_status_save') }}",
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
    function showCustomerStatus(v1,v2,v3,v4)
    {
        $('#memberstatus_form').prop('style','background-color:#003b41e6;height:250px;');
        $('#member_status_id').val(v1);
        $('#members_status').val(v2);
        $('#status_color').val(v3);
        $('#customer_status').val(v4);
        $('#member_status_add').html('update');
        $('#member_status_cancel').prop('style','display:block;background-color: rgb(233, 32, 32);margin-right:100px;');

    }
</script>
<script>
    function CancelMemberStatus()
    {
        $('#member_status_id').val('');
        $('#members_status').val('');
        $('#status_color').val('');
        $('#customer_status').val('Select');



        $('#memberstatus_form').prop('style','background-color: rgba(var(--vz-light-rgb),var(--vz-bg-opacity))!important');
        $('#member_status_add').html('Submit');
        $('#member_status_cancel').prop('style','display:none');
    }
</script>
<script>
    function deleteCustomerStatus(id)
    {
        var memberstatus_id = id;
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
                    url: "member_status/destroy/"+memberstatus_id,
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
    $('#healthcare_masters_form').on('submit',(function(e) {
        var formData = new FormData(this);
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        jQuery.ajax({
            url: "{{ url('/add_healthcare_masters') }}",
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
    function ShowHealthMasters(v1,v2,v3)
    {
        $('#hhc_masters_form').prop('style','background-color:#003b41e6;height:200px;');
        $('#hc_masters_id').val(v1);
        $('#hc_masters_name').val(v2);
        $('#hc_masters_status').val(v3);
        $('#hhc_masters_add').html('update');
        $('#hhc_masters_cancel').prop('style','display:block;background-color: rgb(233, 32, 32);margin-right:100px;');
    }
</script>
<script>
    function CancelHcMasters()
    {
        $('#hc_masters_id').val('');
        $('#hc_masters_name').val('');
        $('#hc_masters_status').val('');

        $('#hhc_masters_form').prop('style','background-color: rgba(var(--vz-light-rgb),var(--vz-bg-opacity))!important');
        $('#hhc_masters_add').html('Submit');
        $('#hhc_masters_cancel').prop('style','display:none');

    }
</script>
<script>
    function DeleteHealthMasters(id)
    {
        var healthc_masters_id = id;
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

                    url: "{{ url('/delete_health_master') }}",
                        method: 'get',
                        data: {
                            id:healthc_masters_id,
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
    $('#enquiry_type_form').on('submit',(function(e) {
        var formData = new FormData(this);
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        jQuery.ajax({
            url: "{{ url('/add_enquiry_type') }}",
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
    function EditEnquiryType(v1,v2,v3)
    {
        $('#enquiry_types_id').val(v1);
        $('#enquiry_types').val(v2);
        if(v3 == 1)
        {
            $('#enquiry_type_status').prop('checked',true);
        }
        else
        {
            $('#enquiry_type_status').prop('checked',false);

        }
    }
</script>
<script>
    function DeleteEnquiryType(id)
    {
        var enquiry_type_id = id;
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

                    url: "{{ url('/destroy_enquiry_types') }}",
                        method: 'get',
                        data: {
                            id:enquiry_type_id,
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
    $('#call_status_form').on('submit',(function(e) {
        var formData = new FormData(this);
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        jQuery.ajax({
            url: "{{ url('/add_call_status') }}",
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
    function EditCallStatus(v1,v2,v3,v4)
    {
        $('#call_status_id').val(v1);
        $('#edit_callstatus').val(v2);
        // $('#status_types').val(v3);
        if(v3 =='contactable')
        {
            $('#status_types').prop('checked', true);
        }
        else
        {
            $('#status_types').prop('checked', false);
        }
        if(v4 ==1)
        {
            $('#callstat').prop('checked', true);
        }
        else
        {
            $('#callstat').prop('checked', false);
        }

    }
</script>
<script>
    function DeleteCallStatus(id)
    {
        var call_status_id = id;
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

                    url: "{{ url('/destroy_call_status') }}",
                        method: 'get',
                        data: {
                            id:call_status_id,
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
    $('#converted_type_form').on('submit',(function(e) {
        var formData = new FormData(this);
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        jQuery.ajax({
            url: "{{ url('/add_converted_type') }}",
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
    function EditConvertedType(v1,v2,v3)
    {
        $('#converted_types_id').val(v1);
        $('#converted_types').val(v2);
        if(v3 ==1)
        {
            $('#converted-status').prop('checked', true);
        }
        else
        {
            $('#converted-status').prop('checked', false);

        }

    }
</script>
<script>
    function DeleteConvertedType(id)
    {
        var converted_type_id = id;
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

                    url: "{{ url('/destroy_converted_type') }}",
                        method: 'get',
                        data: {
                            id:converted_type_id,
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
    $('#converted_discipline_form').on('submit',(function(e) {
        var formData = new FormData(this);
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        jQuery.ajax({
            url: "{{ url('/add_converted_discipline') }}",
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
    function EditConvertedDiscipline(v1,v2,v3)
    {
        $('#converted_disciplines_id').val(v1);
        $('#converted_disciplines').val(v2);
        if(v3 ==1)
        {
            $('#discipline_status').prop('checked',true);
        }
        else
        {
            $('#discipline_status').prop('checked',false);

        }
    }
</script>
<script>
    function DeleteConvertedDiscipline(id)
    {
        var converted_discipline_id = id;
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

                    url: "{{ url('/destroy_converted_discipline') }}",
                        method: 'get',
                        data: {
                            id:converted_discipline_id,
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


