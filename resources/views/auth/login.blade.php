
<!doctype html>
<html lang="en" data-layout="twocolumn" data-sidebar="light" data-sidebar-size="lg">

    <head>

        <meta charset="utf-8" />
        <title>{{ __('Login') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/logo-1.png') }}">

        <!-- Layout config Js -->
        <script src="{{asset('assets/js/layout.js')}}"></script>
        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- custom Css-->
        <link href="{{asset('assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />


    </head>

    <body>

        <div class="auth-page-content d-flex align-items-center " style="background-color: #007BC2; height:100vh;">
            <div class="container">


                <div class="row justify-content-center align-items-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        {{-- <div class="card mt-4">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Lock Screen</h5>
                                    <p class="text-muted">Enter your password to unlock the screen!</p>
                                </div>
                                <div class="user-thumb text-center">
                                    <img src="assets/images/users/avatar-1.jpg" class="rounded-circle img-thumbnail avatar-lg" alt="thumbnail">
                                    <h5 class="font-size-15 mt-3">Anna Adame</h5>
                                </div>
                                <div class="p-2 mt-4">
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label" for="userpassword">Password</label>
                                            <input type="password" class="form-control" id="userpassword" placeholder="Enter password" required="">
                                        </div>
                                        <div class="mb-2 mt-4">
                                            <button class="btn btn-success w-100" type="submit">Unlock</button>
                                        </div>
                                    </form><!-- end form -->

                                </div>
                            </div>
                            <!-- end card body -->
                        </div> --}}
                        <div class="wrapper">
                            <div class="logo text-center pt-2 pb-2  mb-3">
                                {{-- <img class="logo-img" src="{{asset('assets/images/logo_old.png')}}" alt="" height="18"> --}}
                                <h1>Nagarasabhapadanam</h1>
                                </div>
                            <div>
                                <h5 class=" text-center welcome">Welcome Back !</h5>
                                <p class="text-muted text-center mb-3">Sign in to continue to Application.</p>
                            </div>
                            <div class="mt-4">
                            <form method="POST" action="{{ route('login') }}">
                            @csrf
                                    <div class="mb-4">
                                        <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                        <input type="email" class="form-control" id="username" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                       <p class="text-danger mt-1"> {{ $message }}</p>

                                     @enderror
                                    </div>


                                    <div class="mb-4">
                                        <div class="float-end">
                                             @if(Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="text-muted">Forgot password?</a>
                                            @endif
                                        </div>
                                        <label class="form-label" for="password-input">{{ __('Password') }}</label>
                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                            <input type="password" class="form-control pe-5" placeholder="Enter password"  class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password">
                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted" type="button"
                                             id="password-addon"><i class="ri-eye-fill align-middle"></i></button>

                                     </div>
                                    </div>



                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="auth-remember-check"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="auth-remember-check">{{ __('Remember Me') }}</label>
                                    </div>

                                    <div class="mt-4">


                                    <button type="submit" class="btn btn-Sign w-100">
                            {{ __('Sign In') }}
                                    </button>

                                    </div>




                                    </div>

                                </form>
                            </div>
                        <!-- end card -->



                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>

        <!-- auth-page wrapper -->

    <!-- end auth page content -->

        <!-- end auth-page-wrapper -->

        <!-- JAVASCRIPT -->
        <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"> </script>
        <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>
        <script src="{{asset('assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <!-- password-addon init -->
        <script src="{{asset('assets/js/pages/password-addon.init.js')}}"></script>
    </body>

</html>
