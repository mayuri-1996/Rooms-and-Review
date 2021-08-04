{{-- @php
    dd(auth())
@endphp --}}
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile">
            <!-- User profile image -->
            <div class="profile-img">
                @if (Auth::user()->image != null)
                    <img src="{{asset('adminPanel/assets/images/users/profile.png')}}" alt="user" />
                @else
                    <div  style="width: 70px;
                    padding: 5px;
                    border: 1px solid rgba(120, 130, 140, 0.13);
                    border-radius: 100%;height: 70px; text-align: center" >
                    <i class="mdi mdi-account" style="font-size: 38px;"></i>
                    </div>
                @endif               
                <!-- this is blinking heartbit-->
                <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
            </div>
            <!-- User profile text-->
            <div class="profile-text">
                <h5>{{Auth::user()->name}}</h5>
                
                <a href="{{ route('admin.auth.logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
                <form id="logout-form" action="{{ route('admin.auth.logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li>
                     <a  href="{{route('admin.dashboard')}}" aria-expanded="false" style="background: white">
                        <i class="mdi mdi-home"></i><span class="hide-menu">Dashboard </span>
                    </a>
                    
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Users</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin.all.admin')}}">Admin List</a></li>
                        <li><a href="{{route('admin.all.buyerOwner')}}">Buyer/Owner</a></li>
                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Area Listing</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin.all.propertytype')}}">Country Lists</a></li>
                        <li><a href="{{route('admin.all.propertytype')}}">State Lists</a></li>
                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Property</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin.all.propertytype')}}">Property Type</a></li>
                        <li><a href="{{route('admin.all.property')}}">Property Lists</a></li>
                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Feachures</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin.all.otherfeachure')}}">Other Feachures</a></li>
                    </ul>
                </li>

            </ul>
        </nav> 
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
        