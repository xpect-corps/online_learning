<style>
    .app-menu {
        background-color: #111125 !important;
    }
</style>

<div class="app-menu navbar-menu">
    <!-- LOGO -->
    @php
        $settings = \App\Models\Settings::where('id', 1)->first();
    @endphp
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{ route('home') }}" class="logo logo-dark">
            <span class="logo-sm">
                @if ($settings->small_logo == null)
                    <img src="assets/images/logo-1.png" alt="" height="22">
                @else
                    <img src="{{ Storage::disk('image')->url('uploads/app_images/' . $settings->small_logo) }}"
                        alt="image" height="22">
                @endif
            </span>
            <span class="logo-lg">
                @if ($settings->logo == null)
                    <img class="logo-img" src="assets/images/logo.png" alt="" height="17">
                @else
                    <img class="logo-img" src="{{ Storage::disk('image')->url('uploads/app_images/' . $settings->logo) }}"
                        alt="image" height="17">
                @endif
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{ route('home') }}" class="logo logo-light">
            <span class="logo-sm">
                @if ($settings->small_logo == null)
                    <img src="assets/images/logo-1.png" alt="" height="22">
                @else
                    <img src="{{ Storage::disk('image')->url('uploads/app_images/' . $settings->small_logo) }}"
                        alt="image" height="22">
                @endif
            </span>
            <span class="logo-lg">
                @if ($settings->logo == null)
                    <img class="logo-img" src="assets/images/logo.png" alt="" height="">
                @else
                    {{-- <img class="logo-img" src="{{ Storage::disk('image')->url('uploads/app_images/'.$settings->logo) }}"
                    alt="image" style="width: 20%; height:20%;" >  --}}
                    <h2 class="text-bold text-white"> ADMIN </h2>
                @endif
            </span>
        </a>
        {{-- <button type="button" class="btn btn-sm mt-3 fs-20  header-item  float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button> --}}
    </div>

    <div id="scrollbar" data-simplebar="init" class="h-100">
        <div class="simplebar-wrapper" style="margin: 0px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content"
                        style="height: 100%; overflow: hidden scroll;">
                        <div class="simplebar-content" style="padding: 0px;">
                            <div class="container-fluid">

                                <div id="two-column-menu">
                                </div>
                                <ul class="navbar-nav" id="navbar-nav" data-simplebar="init">
                                    <div class="simplebar-wrapper" style="margin: 0px;">
                                        <div class="simplebar-height-auto-observer-wrapper">
                                            <div class="simplebar-height-auto-observer"></div>
                                        </div>
                                        <div class="simplebar-mask">
                                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                                    aria-label="scrollable content"
                                                    style="height: auto; overflow: hidden;">
                                                    <div class="simplebar-content" style="padding: 0px;">
                                                        <a class="nav-link menu-link  {{ request()->is('home') ? 'active' : '' }}"
                                                            id=" admin" href="{{ route('home') }}" role="button"
                                                            aria-controls="sidebarDashboards">

                                                            <i class="las la-tachometer-alt"></i> <span
                                                                data-key="t-dashboards">Dashboards</span>
                                                        </a>
                                                        <li class="menu-title"><i class="ri-more-fill"></i> <span
                                                                data-key="t-pages">Pages</span></li>

                                                        {{-- @if (Gate::check('access-mobileapp-users')) --}}


                                                        @if (Gate::check('user-management-roles') || Gate::check('acces-member-category'))
                                                            <li class="nav-item">
                                                                <a class="nav-link menu-link {{ request()->is('users') ? 'active' : '' }}"
                                                                    href="#User-Management" data-bs-toggle="collapse"
                                                                    role="button" aria-expanded="false"
                                                                    aria-controls="User-Management">
                                                                    <i class="lar la-user-circle"></i><span
                                                                        data-key="t-pages">User Management</span>
                                                                </a>
                                                                <div class="collapse menu-dropdown"
                                                                    id="User-Management">
                                                                    <ul class="nav nav-sm flex-column">
                                                                        {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ url('users') }}"> <span data-key="t-leadmanagement">System Users</span>
                                </a>

                            </li> --}}
                                                                        @can('acces-member-category')
                                                                            <li class="nav-item">
                                                                                <a class="nav-link"
                                                                                    href="{{ url('users') }}"> <span
                                                                                        data-key="t-leadmanagement">System
                                                                                        Users</span>
                                                                                </a>

                                                                            </li>
                                                                        @endcan
                                                                        @can('user-management-roles')
                                                                            <li class="nav-item">
                                                                                <a href="{{ url('roles') }}"
                                                                                    class="nav-link" data-key="t-starter">
                                                                                    User Roles</a>
                                                                            </li>
                                                                        @endcan


                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        @endif


                                                        <li class="nav-item">

                                                            <div class="collapse menu-dropdown" id="lead-Management">
                                                                <ul class="nav nav-sm flex-column">
                                                                    {{-- @can('access-diet-list') --}}
                                                                    {{-- <li class="nav-item">
                                <a class="nav-link menu-link " {{ (request()->is('lead_management')) ? 'active' : '' }}  href="{{ url('diet_management') }}">
                                   <span data-key="t-leadmanagement">Diet list</span>
                                </a>
                            </li> --}}
                                                                    {{-- @endcan --}}

                                                                    <li class="nav-item">
                                                                        {{-- <a href="{{url('web_scrapping')}}" {{ (request()->is('serving_size')) ? 'active' : '' }}  class="nav-link" data-key="t-starter"> Web_scrapping </a> --}}
                                                                    </li>



                                                                    <li class="nav-item">

                                                                        <div class="collapse menu-dropdown"
                                                                            id="mastersmember">
                                                                            <ul class="nav nav-sm flex-column">
                                                                                {{-- @can('access-lead-roles') --}}
                                                                                <li class="nav-item">
                                                                                    <a href="{{ url('roles') }}"
                                                                                        class="nav-link"
                                                                                        data-key="t-starter"> User
                                                                                        Roles</a>
                                                                                </li>
                                                                                {{-- @endcan --}}
                                                                            </ul>
                                                                        </div>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </li>




                                                        {{-- @can('location-management')
                <a class="nav-link menu-link " href="{{ url('locations') }}">
                    <i class="ri-settings-4-line fs-20"></i> <span data-key="t-Settings">Location Management</span>
                </a>
                @endcan --}}
                                                        @can('settings')
                                                            <a class="nav-link menu-link " href="{{ url('settings') }}">
                                                                <i class="ri-settings-4-line fs-20"></i> <span
                                                                    data-key="t-Settings">Settings</span>
                                                            </a>
                                                        @endcan



                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="simplebar-placeholder" style="width: 249px; height: 1020px;">
                                        </div>
                                    </div>
                                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar"
                                            style="width: 0px; display: none; transform: translate3d(0px, 0px, 0px);">
                                        </div>
                                    </div>
                                    <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                                    </div>
                                </ul>
                            </div>
                            <!-- Sidebar -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="simplebar-placeholder" style="width: auto; height: 1020px;"></div>
        </div>
        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
            <div class="simplebar-scrollbar"
                style="width: 0px; transform: translate3d(0px, 0px, 0px); display: none;"></div>
        </div>
        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
            <div class="simplebar-scrollbar"
                style="height: 132px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
        </div>
    </div>
</div>
