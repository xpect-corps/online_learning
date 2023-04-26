<a href="{{ route('users.show',$data->id) }}" class="btn btn-info btn-sm">Show</a>
<a href="{{ route('users.edit',$data->id) }}" class="btn btn-primary btn-sm">Edit</a>

@can('user-delete')
@if($data->role_id <>1)
{!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $data->id],'style'=>'display:inline']) !!}
    {!! Form::submit('Delete', ['class' => 'btn btn-danger show_confirm btn-sm']) !!}
{!! Form::close() !!}
@endif

@endcan
{{-- <button class="btn btn-danger btn-sm"
            data-toggle="tooltip" title="Hapus" onclick="deleteData({{ $data->id }})" id="delete-hospital">
        {{ 'Delete' }}</button> --}}

        <script type="text/javascript">
 
            $('.show_confirm').click(function(event) {
                 var form =  $(this).closest("form");
                 var name = $(this).data("name");
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
                     form.submit();
                   }
                 });
             });
         
             @if (count($errors) > 0)
    
           @foreach ($errors->all() as $error)
          
             toastr.error("{{ $error }}");
           @endforeach
    
            @endif
    
        </script>