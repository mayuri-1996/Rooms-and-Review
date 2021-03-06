<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html">
                <!-- Logo icon -->
                <b>
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="{{asset('fav.png')}}" alt="homepage" class="dark-logo" />
                    <!-- Light Logo icon -->
                    <img src="{{asset('fav.png')}}" alt="homepage" class="light-logo" />
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span>
                    <!-- dark Logo text -->
                    <img src="{{asset('adminPanel/assets/images/logo-text.png')}}" alt="homepage" class="dark-logo" />
                    <!-- Light Logo text -->    
                    <img src="{{asset('adminPanel/assets/images/logo-light-text.png')}}" class="light-logo" alt="homepage" />
                </span> 
            </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav mr-auto mt-md-0">
                <!-- This is  -->
                <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
            </ul>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <ul class="navbar-nav my-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{-- <img src="../assets/images/users/1.jpg" alt="user" class="profile-pic" /> --}}
                        <div class="profile-pic text-center">
                            <i class="mdi mdi-account" style="color: white;font-size: 25px"></i>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right scale-up">
                        <ul class="dropdown-user">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img">
                                        @if(Auth::user()->image == null)
                                            <div style="text-align: center;border: 1px solid #67757c;border-radius: 5px;">
                                                <i class="mdi mdi-account" style="font-size: 38px;color: #67757c;"></i>
                                            </div>                                        
                                        @else
                                            <img src="../assets/images/users/1.jpg" alt="user">
                                        @endif                                       
                                    </div>
                                    <div class="u-text">
                                        <h4 class="text-center">{{Auth::user()->name}}</h4>
                                        <p class="text-muted text-center">Admin</p><a href="pages-profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                                    </div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                            
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="{{ route('admin.auth.logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-power-off"></i> Logout
                                </a>
                                <form id="logout-form" action="{{ route('admin.auth.logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
        