<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamslms.dreamguystech.com/html/instructor-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Apr 2023 11:13:02 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Dreams LMS</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.svg')}}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/feather.css')}}">
    <link rel="stylesheet" href="{{ asset('css/custom.css')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">

    <link
      rel="stylesheet"
      href="{{asset('plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css')}}"
    />

    <link rel="stylesheet" href="{{ asset('css/style.css')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <div class="main-wrapper " >

        @include('admin.layouts.components.header')
        @include('admin.layouts.components.sidebar')
        <div class="page-content instructor-page-content " style="margin-left: 261px;     padding-top: 15px !important;">
          
            @yield('content')
        </div>
        {{-- @include('admin.layouts.components.footer') --}}

    </div>
    <script data-cfasync="false" src="{{ asset('js/cloudflare/email-decode.min.js')}}"></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js')}}"></script>

    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('plugins/select2/js/select2.min.js')}}"></script>

    <script src="{{asset('js/ckeditor.js')}}"></script>

    <script src="{{asset('plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js')}}"></script>
    <script src="{{ asset('plugins/feather/feather.min.js')}}"></script>

    <script src="{{ asset('plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script>
    <script src="{{ asset('plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script>

    <script src="{{ asset('plugins/apexchart/apexcharts.min.js')}}"></script>
    <script src="{{ asset('plugins/apexchart/chart-data.js')}}"></script>

    <script src="{{ asset('js/script.js')}}"></script>

    <script src="{{asset('js/owl.carousel.min.js')}}"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    @stack('scripts')

</body>

<!-- Mirrored from dreamslms.dreamguystech.com/html/instructor-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Apr 2023 11:13:11 GMT -->

</html>
