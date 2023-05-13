
<header class="header-five">

<div class="header-fixed">
    <nav class="navbar navbar-expand-lg header-nav scroll-sticky">
        <div class="container">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="{{url('/home')}}" class="navbar-brand logo">
                    <img src="assets/img/logo/logo-five.png" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="index.html" class="menu-logo">
                        <img src="assets/img/logo/logo-five.svg" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
                
            </div>
            
            <ul class="nav header-navbar-rht header-navbar-five">
                <li class="nav-item user-nav p-0">
                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                      <span class="user-img">
                        <img src="{{asset('img/user/user11.jpg')}}" alt="">
                        <span class="status online"></span>
                      </span>
                    </a>
                    <div class="users dropdown-menu dropdown-menu-right" data-popper-placement="bottom-end">
                      <div class="user-header">
                        <div class="avatar avatar-sm">
                          <img src="{{asset('img/user/user11.jpg')}}" alt="User Image" class="avatar-img rounded-circle">
                        </div>
                        <div class="user-text">
                          <h6>Rolands R</h6>
                          <p class="text-muted mb-0">Student</p>
                        </div>
                      </div>
                      <a class="dropdown-item" href="{{url('/user_profile')}}"><i class="feather-user me-1"></i> Profile</a>
                      <a class="dropdown-item" href="{{url('/Courses')}}"><i class="feather-user me-1"></i> Course</a>
                      @if(auth()->user())
                      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();"><i class="feather-log-out me-1"></i>Logout</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                      @else
                          <a class="" href="login.html">Login</a>
                      @endif
                    </div>
                  </li>
             
               
           
            </ul>
        </div>
    </nav>
    <div class="sidebar-overlay"></div>
</div>


</header>
