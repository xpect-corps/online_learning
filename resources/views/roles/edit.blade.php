@extends('layouts.app')


@section('content')

<div class="card p-3">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            {{-- <div class="pull-left">
                <h2>Create New Role</h2>
            </div> --}}
            <a class="btn btn-danger text-white  profile-back-arrow mb-2" href="{{ route('roles.index') }}"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg></a>

            
            
        </div>
    </div>
    
    
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif
    
    
    {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group bg-light p-2 mb-3">
                <span class="fs-15 fw-medium ">Name:</span>
                @if($role->is_protected == 0)
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                @else
                <Span class="fs-18 fw-bold "> 
                    {{$role->name}}
                    <input type="hidden" name="name" value="{{$role->name}}">
                </span>
                @endif
            </div>
        </div>
        <div class="col-md-3">
            <span class="fs-15 fw-bold ">Permission</span>
                <div></div>
            <div class="form-group">
                <div class="form-check form-switch">
                
                <br/>
                @foreach($permission as $value)
                    <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'form-check-input' , 'role' => 'switch')) }}
                    {{ $value->name }}</label>
                <br/>
                @endforeach

               
            </div>
        </div>
      
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn  modal-submit mt-5">Submit</button>
    </div>
    {!! Form::close() !!}


</div>




@endsection