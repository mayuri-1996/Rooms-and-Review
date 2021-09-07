 <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			<!-- <div class="header header-transparent dark">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand" href="#">
								<img src="{{asset('frontend/assets/img/logo.png')}}" class="logo" alt="" />
							</a>
							<div class="nav-toggle"></div>
						</div>
						<div class="nav-menus-wrapper" style="transition-property: none;">
							<ul class="nav-menu">
							
								<li class="active"><a href="#">Home<span class="submenu-indicator"></span></a></li>

								<li><a href="{{route('pages.about')}}">About</a></li>
								
								<li><a href="JavaScript:Void(0);">Listings<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="JavaScript:Void(0);">List Layout<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="list-layout-with-sidebar.html">With Sadebar</a></li>                                    
												<li><a href="list-layout-with-map.html">With Map</a></li>                                    
												<li><a href="list-layout-full.html">Full Width</a></li>
											</ul>
										</li>
										<li><a href="JavaScript:Void(0);">Grid Layout<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="grid-layout-with-sidebar.html">With Sidebar</a></li>                                    
												<li><a href="classical-layout-with-sidebar.html">Classical With Sidebar</a></li>                                    
												<li><a href="grid-layout-with-map.html">With Map</a></li>                                    
												<li><a href="grid.html">Full Width</a></li>
												<li><a href="classical-property.html">Classical Full Width</a></li>	 
											</ul>
										</li>
										<li><a href="JavaScript:Void(0);">With Map Property<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="list-layout-with-map.html">List With Map</a></li>                                    
												<li><a href="grid-layout-with-map.html">Grid With Map</a></li>                                    
												<li><a href="classical-layout-with-map.html">Classical With Map</a></li>                                    
												<li><a href="half-map.html">Half Map Search</a></li> 
											</ul>
										</li>
									</ul>
								</li>
								
								<li><a href="JavaScript:Void(0);">Features<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="JavaScript:Void(0);">Single Property<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="single-property-1.html">Single Property 1</a></li>                                    
												<li><a href="single-property-2.html">Single Property 2</a></li>                                    
												<li><a href="single-property-3.html">Single Property 3</a></li>   
											</ul>
										</li>
										<li><a href="JavaScript:Void(0);">Agencies & Agents<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="agents.html">Agents List</a></li>                                    
												<li><a href="agent-page.html">Agent Page</a></li>                                    
												<li><a href="agencies.html">Agencies List</a></li>                                    
												<li><a href="agency-page.html">Agency Page</a></li> 
											</ul>
										</li>
										<li><a href="JavaScript:Void(0);">My Account<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="dashboard.html">User Dashboard</a></li><li><a href="payment.html">Payment Confirmation</a></li>
												<li><a href="my-profile.html">My Profile</a></li>                                    
												<li><a href="my-property.html">Property List</a></li>                                    
												<li><a href="bookmark-list.html">Bookmarked Listings</a></li>                                    
												<li><a href="change-password.html">Change Password</a></li> 
											</ul>
										</li>
										<li>
											<a href="compare-property.html">Compare Property</a>                                
										</li>
										<li>
											<a href="submit-property.html">Submit Property</a>                                
										</li>
									</ul>
								</li>
								
								<li><a href="JavaScript:Void(0);">Pages<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="blog.html">Blogs Page</a></li>                                    
										<li><a href="blog-detail.html">Blog Detail</a></li>                                    
										<li><a href="component.html">Shortcodes</a></li> 
										<li><a href="pricing.html">Pricing</a></li>  
										<li><a href="404.html">Error Page</a></li>
										<li><a href="contact.html">Contacts</a></li>
									</ul>
								</li>
								<li><a href="JavaScript:Void(0);{{route('pages.contact')}}">Contacts</a>
				
										 <li><a href="contact.html">Contacts</a></li> -->
									
								<!-- </li>
								
								<li><a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#signup">Sign Up</a></li>
								
							</ul>
							
							<ul class="nav-menu nav-menu-social align-to-right">
								
								<li>
									<a href="submit-property.html" class="text-success"><img src="{{asset('frontend/assets/img/submit.svg')}}" width="20" alt="" class="mr-2" />Add Property</a>
								</li>
								<li class="add-listing blue">
									<a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#login"><img src="assets/img/user-light.svg" width="12" alt="" class="mr-2" />Sign In</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div> --> 
			<!-- End Navigation -->



			 <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			<div class="header header-light head-shadow">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand" href="{{route('pages.index')}}">
							<img src="{{asset('logo.png')}}" class="logo" alt="" />
							</a>
							<div class="nav-toggle"></div>
						</div>
						<div class="nav-menus-wrapper" style="transition-property: none;">
							<ul class="nav-menu">
								<li>
									<a href="JavaScript:Void(0);" class="flag-menu">
										<img src="{{asset('india.png')}}">
										<span class="submenu-indicator"></span>
									</a>
									<ul class="nav-dropdown nav-submenu">
										<li style="margin-bottom: 20px;">
											<i class="icofont-google-map"></i> India
										</li>
										@foreach ($states as $state)
										<li>
											<a href="JavaScript:Void(0);"
											@if ($state->zones_to_zone_cities->count() == 0)
												onclick="setValue('','{{$state->id}}')"
											@endif
											>{{$state->zone_name}}<span class="submenu-indicator"></span></a>
											@if ($state->zones_to_zone_cities->count() > 0)
												<ul class="nav-dropdown nav-submenu">
													@foreach ($state->zones_to_zone_cities as $city)
														<li><a href="JavaScript:Void(0);" onclick="setValue('{{$city->id}}','{{$state->id}}')">{{$city->city_name}}</a></li> 
													@endforeach                                													
												</ul>
											@endif											
										</li>
										@endforeach
									</ul>
								</li>

								
								{{-- <li><a href="{{route('pages.blog')}}">Blogs</a></li> --}}

								{{-- <li><a href="{{route('pages.contact')}}">Contacts</a></li> --}}
								<!-- <li><a href="{{route('pages.signin')}}" data-bs-toggle="modal" data-bs-target="#signup">Sign Up</a></li> -->
								
							</ul>
							
							<ul class="nav-menu nav-menu-social align-to-right">

								{{-- @guest
									<li>
										<a href="{{route('pages.signin')}}" class="text-success"><img src="{{asset('frontend/assets/img/submit.svg')}}" width="20" alt="" class="mr-2" />Add Property</a>
									</li>
								@else 
									<li>
										<a href="{{route('pages.addproperty')}}" class="text-success"><img src="{{asset('frontend/assets/img/submit.svg')}}" width="20" alt="" class="mr-2" />Add Property</a>
									</li>
								@endguest
								 --}}
								
								<!-- <li>
									<a href="{{route('pages.signin')}}" data-bs-toggle="modal" data-bs-target="#login" class="text-success">
										<i class="fas fa-user-circle mr-2"></i>Signin</a>
								</li> -->
								<!-- <li class="add-listing theme-bg">
									<a href="submit-property.html">Add Property</a>
								</li> -->

								@guest
								<li>
									<a href="JavaScript:Void(0);" class="mr-3" style="margin-right: 15px;">

										Login<span class="submenu-indicator"></span>
									</a>

									{{-- <a href="JavaScript:Void(0);" style="padding: 18px 12px;">
										<button type="submit" class="btn btn-outline-theme">Hello, Mayuri Roy</button>
									</a> --}}

									<ul class="nav-dropdown nav-submenu" style="right: auto !important;width: 300px;white-space: initial;">
										<li>
											<div class="row mt-2">
												{{-- <div class="col-md-6">
													<p style="padding-left: 10px;">
														My Activities 
													</p>
												</div>
												<div class="col-md-6 pl-0" style="padding-left: 0;">
													<hr>
												</div> --}}
												<div >
													<blockquote style="font-size: 15px">
														<span>"Life is not a problem to be solved, but a reality to be experienced."</span>
														<span class="quote-auther"><br>– Soren Kierkegaard</span>
													</blockquote>
												</div>
											</div>											
										</li>
										
										<li>
											<a href="{{route('pages.signup')}}">
												<button type="submit" class="btn btn-theme btn-rounded w-100 mt-4" style="padding-top: 8px;padding-bottom: 8px;">Login</button>
											</a>
											
											
										</li>
										<li>
											<p class="text-center">
												New to GoGoal? 
												<a href="{{route('pages.signin')}}"><strong>Sign Up</strong></a>
											</p>
										</li>
									</ul>
								</li>

								@else 

								<li>
									<a href="JavaScript:Void(0);" class="hide-indicator" style="padding: 18px 12px;">
										<button type="submit" class="btn btn-outline-theme" style="    border-radius: 50px;
										padding-top: 8px;
										padding-bottom: 8px;">Hello, {{Auth::user()->name}}</button>
									</a>

									<ul class="nav-dropdown nav-submenu" style="right: auto !important;width: 300px;white-space: initial;">
										<li>
											<div class="row mt-2">
												{{-- <div class="col-md-6">
													<p style="padding-left: 10px;">
														My Activities 
													</p>
												</div>
												<div class="col-md-6 pl-0" style="padding-left: 0;">
													<hr>
												</div> --}}
												<div >
													<blockquote style="font-size: 15px">
														<span>
															"The way I see it, if you want the rainbow, you gotta put up with the rain."
														</span>
														<span class="quote-auther"><br>– Dolly Parton</span>
													</blockquote>
												</div>
											</div>											
										</li>
										{{-- <li>
											<a href="{{route('pages.myproperty')}}">Contacted Properties</a>
										</li>
										<li>
											<a href="{{route('pages.myproperty')}}">Bookmarked Properties</a>
										</li>
										<li>
											<a href="{{route('pages.myprofile')}}">My Profile<span class="submenu-indicator"></span></a>
										</li> --}}
										<li>
											
											<a href="{{ route('buyer.auth.logout') }}"
											onclick="event.preventDefault();
																document.getElementById('logout-form').submit();">
												
												<button type="submit" class="btn btn-theme btn-rounded w-100 mt-4" style="padding-top: 8px;padding-bottom: 8px;"> <i class="fa fa-power-off"></i> Logout</button> 
											</a>
											<form id="logout-form" action="{{ route('buyer.auth.logout') }}" method="POST" style="display: none;">
												{{ csrf_field() }}
											</form>
										</li>
									</ul>
								</li>
								@endguest

								@guest
									<li class="post-property-btn mb-1">
										<a href="{{route('pages.signin')}}" class="btn btn-call-to-act btn-outline-theme" style="padding-top: 8px;
										padding-bottom: 8px;">Post Property</a>										
									</li>
								@else 
									{{-- <li>
										<a href="{{route('pages.addproperty')}}" class="text-success"><img src="{{asset('frontend/assets/img/submit.svg')}}" width="20" alt="" class="mr-2" />Post Property</a>
									</li> --}}
									<li class="post-property-btn mb-1">
										<a href="{{route('pages.addproperty')}}" class="btn btn-call-to-act btn-outline-theme" style="padding-top: 8px;
										padding-bottom: 8px;">Post Property</a>										
									</li>
									
								@endguest


								
								
								{{-- @guest
									<li class="add-listing blue">
										<a href="{{route('pages.signin')}}"><img src="{{asset('frontend/assets/img/user-light.svg')}}" width="12" alt="" class="mr-2" />Sign In</a>
									</li>
								@else
									<li class="add-listing blue">
										<a href="{{route('pages.signin')}}"><img src="{{asset('frontend/assets/img/user-light.svg')}}" width="12" alt="" class="mr-2" />{{Auth::user()->name}}</a>
									</li>
								@endguest --}}

								

								<li id="show">
									<a href="" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#sidebar_right">
										<i class="fa fa-bars"></i></a>
									{{-- <i class="fa fa-bars" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#signup"></i> --}}
								</li>
                            	
							</ul>
						</div>
					</nav>
				</div>
			</div>


			<!-- Sign Up Modal -->
			<div class="modal right fade sidebar-right" id="sidebar_right" tabindex="-1" role="dialog" aria-labelledby="sidebar_right" aria-hidden="true">
				<div class="modal-dialog sidebar-right-modal-dialog modal-dialog-centered login-pop-form" role="document" style="max-width: 350px;">
					<div class="modal-content sidebar-right-modal-content" id="sign-up">
						<div class="modal-header">
							<h5 class="modal-title">
								<a href="{{route('pages.signup')}}">Login</a> / <a href="{{route('pages.signin')}}">Register</a>
							</h5>
							<span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
						</div>
						
						<div class="modal-body p-0">
							{{-- <ul class="nav-menu">
								<li>Post Your Property</li>
								<li>Explore Our Services</li>
							</ul> --}}
							<ul class="list-group">
								<li class="list-group-item" style="border-left: none;
								border-top: none;
								border-right: none;">Post Your Property</li>
								<li class="list-group-item" style="border-left: none;
								border-top: none;
								border-right: none;">Explore Our Services</li>
								<li class="mt-2 pl-3 pr-3">
									<div class="form-group borders">
										<div class="input-with-icon">
											<input type="text" name="street_name" class="form-control" placeholder="Search by property code">
											<i class="ti-search"></i>
										</div>
									</div>
								</li>
							  </ul>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			{{-- <div id="show_div" style="display: none">
				@include('component.right-sidebar')
			</div> --}}

			<script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
			<script>
				$('#show').on('click', function(){
					$('#show_div').show();
				});
			</script>

			<style>
				.sidebar-right.right.fade .sidebar-right-modal-dialog {
						right: 0%;
						-webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
						-moz-transition: opacity 0.3s linear, right 0.3s ease-out;
							-o-transition: opacity 0.3s linear, right 0.3s ease-out;
								transition: opacity 0.3s linear, right 0.3s ease-out;
					}
					
					/* .sidebar-right.right.fade.in .idebar-right-modal-dialog {
						left: 39%;
					} */
				.sidebar-right {
					left: 39%;
				}
				.sidebar-right .sidebar-right-modal-dialog {
					margin-top: 0 !important;
					-webkit-transform: translate3d(0%, 0, 0);
					/* -ms-transform: translate3d(0%, 0, 0);
					-o-transform: translate3d(0%, 0, 0);
						transform: translate3d(0%, 0, 0); */
				}
				/* ..sidebar-rightal.fade .sidebar-right-modal-dialog {
					-webkit-transform: translate3d(25%, 0, 0);
					transform: translate3d(25%, 0, 0);
				} */
				/* @media (min-width: 576px)
				.sidebar-right .modal-dialog-centered {
					min-height: calc(100vh - 18.5rem);
				} */
				@media (min-width: 576px){
					.sidebar-right .sidebar-right-modal-dialog  {
						max-width: 500px;
						margin: 0rem auto;
					}
					.sidebar-right .sidebar-right-modal-content{
						height: calc(100vh - 0rem);
					}
				}
				
			</style>

			

			


