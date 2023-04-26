@extends('layouts.app')
@section('title', 'user roles')
@section('content')
<div class="row ml-5">




<div class="table-responsive card ml-3 mb-3 p-0">

    <div class="col-lg-12 ">
        {{-- <div class="pull-left">
            <h2>Role Management</h2>
        </div> --}}
        <div class="pull-right">
        @can('role-create')
            <a class="btn btn-success m-3" href="{{ route('roles.create') }}"> Create New Role</a>
            @endcan
        </div>
    </div>
    <table class="table align-middle  table-responsive ">
        <thead class="bg-light">
        <tr class="py-3">
           <th>No</th>
           <th>Name</th>
           <th width="280px">Action</th>
        </tr>
    </thead>
        @php
           $i = 1 ;
        @endphp
          @foreach ($roles as $key => $role)
          <tr>
              <td>{{ ++$i }}</td>
              <td>{{ $role->name }}</td>
              <td>
                @if($role->is_protected == 0)
                  {{-- <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a> --}}
                  @can('role-edit')
                      <a class="btn btn-primary btn-sm " href="{{ route('roles.edit',$role->id) }}">Edit</a>
                  @endcan
                  @can('role-delete')
                      {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                          {!! Form::submit('Delete', ['class' => 'btn btn-danger rounded-1 btn-sm  show_confirm delete-button ']) !!}
                      {!! Form::close() !!}
                      {{-- <form method="POST" action="{{ route('users.delete', $user->id) }}">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                    </form> --}}
                  @endcan
                  @else
                  @can('role-edit')
                  <a class="btn btn-primary btn-sm" href="{{ route('roles.edit',$role->id) }}">Permissions</a>
                    @endcan
                  @endif
              </td>
          </tr>
          @endforeach
      </table>

</div>
</div>







{{-- {!! $roles->render() !!} --}}


@endsection
