{{-- <html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel 9 ') }}</title>
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    @vite([
        'resources/assets/sass/app.scss',
         'resources/assets/js/app.js',
         ])
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Laravel 9
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto"></ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li><a class="nav-link" href="{{ route('users.index') }}">Manage Users</a></li>
                            <li><a class="nav-link" href="{{ route('roles.index') }}">Manage Role</a></li>
                            <li><a class="nav-link" href="{{ route('products.index') }}">Manage Product</a></li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>


                            </li>
                            <li>

                                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <main class="py-4">
            <div class="container">
            @yield('content')
            </div>
        </main>
    </div>
</body>
</html> --}}

<!doctype html>
<html lang="{{ app()->getLocale() }}" data-layout="vertical" data-topbar="light" data-sidebar="dark"
    data-sidebar-size="sm-hover">

<head>

    <meta charset="utf-8" />
    <title>LARAVEL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo-1.png') }}">

    <!-- Layout config Js -->
    <!-- Bootstrap Css -->

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/app.scss') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/libs/gridjs/theme/mermaid.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/font-style.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />


    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">

    <link href="{{ asset('assets/css/calender.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/toastr.min.css') }}">
    {{-- <link rel="stylesheet" href="./jSunPicker.v1.css"> --}}
    <link rel="stylesheet" type="text/css"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css') }}">

    <style>
        .datepicker td,
        .datepicker th {
            width: 35px;
            height: 30px;
        }

        .datepicker td,
        .datepicker th:hover {
            border-radius: 50px;
        }

        .datepicker table td.active,
        .datepicker table td.active.disabled,
        .datepicker table td.active.disabled:hover,
        .datepicker table td.active:hover {
            border-radius: 50px;
        }

        .datepicker .datepicker-dropdown .dropdown-menu .datepicker-orient-left .datepicker-orient-top {
            /* top: 83px !important; */
        }

        .dataTables_wrapper {
            width: 100%;
            /* overflow: hidden; */
        }

        .dataTables_filter {
            position: absolute;
            display: flex;
            align-items: center;
            padding: 12px;
            right: 0;
            top: -7px;

        }

        div.dataTables_wrapper div.dataTables_filter input {
            margin-left: 0.5em;
            display: inline-block;
            width: 80%;
        }


        .dataTables_filter .form-control-sm {
            padding: 0.5rem 0.5rem;
            background-color: #f3f3f9;
            width: 82%;
            margin-right: 48px;

        }

        .table>thead {
            background-color: #f4f4f4;
        }

        table.dataTable {

            margin-top: 23px !important;
        }

        #select2-data-1-c1i3 {
            width: 100%;
            border-radius: 10px;
            box-shadow: 5px 8px 10px -6px #3f3f3f0f;
            border: 0px solid #0000000f;

        }

        .select2-data-1-c1i3:focus {
            border: 0px solid #0000000f;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #007bc2;
            color: white;
            border-radius: 4px;
            box-sizing: border-box;
            display: inline-block;
            margin-left: 5px;
            margin-top: 0;
            padding: 0;
            padding-left: 20px;
            position: relative;
            max-width: 100%;
            overflow: hidden;
            text-overflow: ellipsis;
            vertical-align: bottom;
            white-space: nowrap;
            border: 1px solid #007bc2
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
            background-color: transparent;
            border: none;
            /* border-right: 1px solid #007bc2; */
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
            color: #999;
            cursor: pointer;
            font-size: 1em;
            font-weight: bold;
            padding: 0 4px;
            position: absolute;
            left: 0;
            top: 0;
            color: white
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
            background-color: #007bc2;
            color: white;
        }

        .select2-container--default .select2-selection--multiple {

            background-color: #f3f6f9;
            border: 1px solid #0000000f;
            cursor: text;
            padding: 0.5rem 0.4rem;
            position: relative;
            border-radius: 10px
        }

        .select2-container--default.select2-container--focus .select2-selection--multiple {
            border: 0.5px solid #51b6f179;
            outline: 0;
            border-bottom-left-radius: 1;
            border-bottom-right-radius: 1;
        }

        [data-layout=vertical][data-sidebar-size=sm-hover] .navbar-menu .navbar-nav .nav-link i {
            font-size: 25px;
        }

        .navbar-menu .navbar-nav .nav-link i {
            font-size: 22px;
        }

        .swal-footer {
            text-align: center;
        }

        .swal-button {
            padding: 6px 22px;

        }

        .swal-button--cancel {
            background-color: #e64942;
            color: white;
            border: none;
        }

        .swal-button--danger {
            background-color: #007bc2;
        }

        .swal-button--danger:hover {
            background-color: #ffff;
            border: 1px solid #e64942;
            color: #e64942;
            transition: 0.3s;
        }

        .swal-button--danger:hover {
            background-color: #007bc223;
            border: 1px solid #007bc2;
            color: #007bc2;
            transition: 0.3s;

        }

        .swal-button--danger:focus {
            background-color: #fff;
            border: 1px solid #007bc2;
            color: #007bc2;

        }

        #map_canvas {
            height: 500px;
            width: 500px;
            margin: 0px;
            padding: 0px
        }

        div.dataTables_wrapper div.dataTables_length label {
            margin: 6px 0 0 25px;
        }
        .navbar-nav .nav-item
        .nav-link .menu-link .active{
            color: #007bc2 !important;
        }
    </style>



</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('layouts.components.header')
        <!-- ========== App Menu ========== -->
        @include('layouts.components.navbar')
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content"
                style="
    padding: calc(70px + 1.5rem) calc(1.5rem / 2) 70px calc(1.5rem / 2);
">
                <div class="container-fluid">

                    <!-- start page title -->
                    @include('layouts.components.page_route')
                    <!-- end page title -->

                    @yield('content')


                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            @include('layouts.components.footer')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->



    <!-- Theme Settings -->

    <!-- JAVASCRIPT -->

    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        --}}
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/js/layout.js') }}"></script>

    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('assets/js/all.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script
        src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js') }}">
    </script>



    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/calender.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- projects js -->
    <script src="{{ asset('assets/js/pages/dashboard-projects.init.js') }}"></script>

    <!-- App js -->
    {{-- <script src="{{asset('assets/js/app.js')}}"></script>
        <script src= "{{ asset('assets/js/app.js') }}"></script> --}}

    {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
    {{-- <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script> --}}
    <script src=" {{ asset('assets/js/bootstrap.js') }}"></script>

    {{-- notifications --}}

    {{-- <script src=" {{ asset('assets/js/pages/notifications.init.js') }}"></script> --}}
    <script src="{{ asset('assets/js/toastr.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.full.min.js"></script>
        <script src="http://cdn.craig.is/js/rainbow-custom.min.js"></script> --}}

    @stack('scripts')



</body>


<script>
    function vertical - hover() {

    }
</script>



<script>
    $(function() {
        $('#datepicker').datepicker({
            autoclose: true
        });

    });
</script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>
<script>
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "37777777700",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

    @if (Session::has('success'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.success("{{ session('success') }}");
    @endif

    @if (Session::has('error'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.error("{{ session('error') }}");
    @endif

    @if (Session::has('danger'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.error("{{ session('danger') }}");
    @endif

    @if (Session::has('info'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.info("{{ session('info') }}");
    @endif

    @if (Session::has('warning'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.warning("{{ session('warning') }}");
    @endif
</script>

<script type="text/javascript">
    $('.show_confirm').click(function(event) {
        var form = $(this).closest("form");
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

<script>
    $('.dataTables_filter').click(function(event) {
        alert("hellos");
        event.focus();
        event.style.background = "yellow";
        console.log('here');


    });
</script>

<script>
    $(function() {
        var current = location.pathname;
        console.log(current);
        if (current === '/home') {
            $('#navbar-nav .nav-item #admin').addClass('sidebarLink');
        } else if (current === '/lead_management') {
            $('#navbar-nav .nav-item #lead_user').addClass('sidebarLink');
        } else if (current === '/lead/master') {
            $('#navbar-nav .nav-item #lead_user').addClass('sidebarLink');
        } else if (current === '/customers') {
            $('#navbar-nav .nav-item #customer_user').addClass('sidebarLink');
        } else if (current === '/users') {
            $('#navbar-nav .nav-item #customer_user').addClass('sidebarLink');
        } else if (current === '/member/master') {
            $('#navbar-nav .nav-item #customer_user').addClass('sidebarLink');
        } else if (current === '/doctor_booking') {
            $('#navbar-nav .nav-item #doctor_user').addClass('sidebarLink');
        } else if (current === '/plans_pricing') {
            $('#navbar-nav .nav-item #doctor_user').addClass('sidebarLink');
        } else if (current === '/doctor_master') {
            $('#navbar-nav .nav-item #doctor_user').addClass('sidebarLink');
        } else if (current === '/healthcare_booking') {
            $('#navbar-nav .nav-item #home_booking').addClass('sidebarLink');
        } else if (current === '/healthcare_services') {
            $('#navbar-nav .nav-item #home_booking').addClass('sidebarLink');
        }

    })
</script>

{{-- <script>
    $(".nav-item .nav-link").on("click", function(){
   $(".nav-item").find(".active").removeClass("active");
   $(this).addClass("active");
});
</script> --}}



{{-- get web token fot web notification --}}
{{-- <script src="https://www.gstatic.com/firebasejs/8.2.0/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.2.0/firebase-messaging.js"></script>

<script type="module">
    const firebaseConfig = {
      apiKey: "AIzaSyA_lk8sSHbOdlSrpaIFWb_yxcWdRn8J1vs",
      authDomain: "neogen-app.firebaseapp.com",
      projectId: "neogen-app",
      storageBucket: "neogen-app.appspot.com",
      messagingSenderId: "40891023335",
      appId: "1:40891023335:web:8a8dc951359d49e30d8742",
      measurementId: "G-BFZ172P844"
    };

// Get registration token. Initially this makes a network call, once retrieved
// subsequent calls to getToken will return from cache.
        firebase.initializeApp(firebaseConfig);
        const messaging = firebase.messaging();
        messaging.getToken(messaging, { vapidKey: 'BMN_BKU8XCs-0v2QFd8pJ1aTNJfKy_0Ro4I2O4yFZL9c01jRN6-ktWD-FEOoFl5ikR7ZGOFbkX6lH_GWVb8NcmQ' })
        .then((currentToken) => {
            if (currentToken) {
                // Send the token to your server and update the UI if necessary
                console.log(currentToken);
            } else {
                // Show permission request UI
                console.log('No registration token available. Request permission to generate one.');
                // ...
            }
        }).catch((err) => {
        console.log('An error occurred while retrieving token. ', err);
        // ...
        });
</script> --}}

</html>
