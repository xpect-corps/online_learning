<script>
    $(document).ready(function() {
        var selected_country_id=$('#selected_country_id').val();
        var selected_state_id=$('#selected_state_id').val();
        var selected_city_id=$('#selected_city_id').val();
        if(selected_country_id!='')
        {
            selectState(selected_country_id);
        }
        if(selected_state_id!='')
        {
            selectCity(selected_state_id);
        }
    });

        function selectState(id)
        {
            var saved_state_id=$('#selected_state_id').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
                });
                jQuery.ajax({
                url: "{{ url('/get_datas') }}",
                method: 'get',
                data: {
                    key:"statelist",
                    country_id:id,
                },
                success: function(result){
                    opt="<option value=''>Select State</option>";
                    for (i = 0; i < result['states'].length; i++)
                    {
                        if(saved_state_id==result['states'][i]['id'])
                        {
                            opt+="<option selected='selected' value='"+result['states'][i]['id']+"' >"+result['states'][i]['state_name']+"</option>";
                        }
                        else{
                            opt+="<option value='"+result['states'][i]['id']+"'>"+result['states'][i]['state_name']+"</option>";
                        }
                    }
                    opt+="";
                    $("#state_id").html(opt);
                    // $("#stateid").html(opt);
                },
                error: function(data){
                    console.log("error");
                    console.log(data);
                }
            });
        }
    </script>

<script>
    function selectCity(id)
    {
        var saved_district_id=$('#selected_city_id').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
            });
            jQuery.ajax({
            url: "{{ url('/get_datas') }}",
            method: 'get',
            data: {
                key:"districtlist",
                state_id:id,
            },
            success: function(result){
                opt="<option value=''>Select City</option>";
                for (i = 0; i < result['cities'].length; i++)
                {
                    if(saved_district_id==result['cities'][i]['id'])
                    {
                        opt+="<option selected='selected' value='"+result['cities'][i]['id']+"'>"+result['cities'][i]['name']+"</option>";
                    }
                    else{
                        opt+="<option value='"+result['cities'][i]['id']+"'>"+result['cities'][i]['name']+"</option>";
                    }
                }
                opt+="";
                $("#city_id").html(opt);
                // $("#cityid").html(opt);
            },
            error: function(data){
                console.log("error");
                console.log(data);
            }
        });
    }
</script>
<script>
     $(document).ready(function() {
        var selected_emergency_country_id=$('#selected_emergency_country_id').val();
        var selected_emergency_state_id=$('#selected_emergency_state_id').val();
        var selected_city_id=$('#selected_emergency_city_id').val();
        if(selected_emergency_country_id!='')
        {
            selectemergencyState(selected_emergency_country_id);
        }
        if(selected_emergency_state_id!='')
        {
            selectemergencyCity(selected_emergency_state_id);
        }
    });

    function selectemergencyState(id)
        {

            var saved_emergency_state_id=$('#selected_emergency_state_id').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
                });
                jQuery.ajax({
                url: "{{ url('/get_datas') }}",
                method: 'get',
                data: {
                    key:"statelist",
                    country_id:id,
                },
                success: function(result){
                    opt="<option value=''>Select State</option>";
                    for (i = 0; i < result['states'].length; i++)
                    {
                        if(saved_emergency_state_id==result['states'][i]['id'])
                        {
                            opt+="<option selected='selected' value='"+result['states'][i]['id']+"' >"+result['states'][i]['state_name']+"</option>";
                        }
                        else{
                            opt+="<option value='"+result['states'][i]['id']+"'>"+result['states'][i]['state_name']+"</option>";
                        }
                    }
                    opt+="";
                    $("#emergency_state").html(opt);
                    // $("#stateid").html(opt);
                },
                error: function(data){
                    console.log("error");
                    console.log(data);
                }
            });
        }
    </script>
    <script>
        function selectemergencyCity(id)
        {
            var saved_emergency_district_id=$('#selected_emergency_city_id').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
                });
                jQuery.ajax({
                url: "{{ url('/get_datas') }}",
                method: 'get',
                data: {
                    key:"districtlist",
                    state_id:id,
                },
                success: function(result){
                    opt="<option value=''>Select City</option>";
                    for (i = 0; i < result['cities'].length; i++)
                    {
                        if(saved_emergency_district_id==result['cities'][i]['id'])
                        {
                            opt+="<option selected='selected' value='"+result['cities'][i]['id']+"'>"+result['cities'][i]['name']+"</option>";
                        }
                        else{
                            opt+="<option value='"+result['cities'][i]['id']+"'>"+result['cities'][i]['name']+"</option>";
                        }
                    }
                    opt+="";
                    $("#emergency_city").html(opt);
                },
                error: function(data){
                    console.log("error");
                    console.log(data);
                }
            });
        }
    </script>
