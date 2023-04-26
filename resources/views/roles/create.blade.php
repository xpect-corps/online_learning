@extends('layouts.app')


@section('content')
<div class="card p-3">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            {{-- <div class="pull-left">
                <h2>Create New Role</h2>
            </div> --}}
            <div class=" ">
                <a href="{{ route('roles.index') }}"  class="btn bg-danger  profile-back-arrow  mb-3 text-white"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg></a>       
                     </div>
            {{-- <div class="pull-right">
                <a class="btn btn-addlead" href="{{ route('roles.index') }}"><i class="las la-arrow-left"></i></a>
            </div> --}}
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
    
    
    {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group">
                <strong>Name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control bg-light')) !!}
            </div>
        </div>
        <div class="col-md-3">
            
               <span class="fs-15 fw-bold ">Permission</span>
               <div></div>
               
                <br/>
                @foreach($permission as $value)
                <div class="form-group">
                    <div class="form-check form-switch">
                    <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'form-check-input' , 'role' => 'switch')) }}
                    {{ $value->name }}</label>
                    </div></div>
              
                @endforeach
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn  modal-submit mt-5">Submit</button>
        </div>
    </div>
    {!! Form::close() !!}

    

</div>


@endsection