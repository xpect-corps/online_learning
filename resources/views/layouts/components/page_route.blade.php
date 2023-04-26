<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            {{-- <h4 class="mb-sm-0">{{ucfirst(str_replace('_',' ',Route::getFacadeRoot()->current()->uri()))}}</h4> --}}
            <h4 class="mb-sm-0">@yield('title')</h4>


            <div class="page-title-right">
                <ol class="breadcrumb m-0">
@if(!request()->is('home'))
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
@endif
                    <li class="breadcrumb-item active">{{ucfirst((str_replace('_',' ',Route::getFacadeRoot()->current()->uri())))}}</li>

                {{-- {{  ucfirst(Route::getFacadeRoot()->current()->uri()) }} --}}
                {{-- {{$request->segment(1)}} --}}
                {{-- {{\Request::route()->getName()}} --}}
                </ol>
            </div>

        </div>
    </div>
</div>
