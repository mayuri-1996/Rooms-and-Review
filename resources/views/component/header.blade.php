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
							
								 <!-- <li class="active"> -->
									 <li><a href="{{route('pages.index')}}">Home<span class="submenu-indicator"></span></a> 
								
								</li>

								<li><a href="{{route('pages.about')}}">About</a></li>
								<li><a href="JavaScript:Void(0);">Property<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="{{route('pages.myproperty')}}">My Property<span class="submenu-indicator"></span></a></li>
										<li><a href="#">Apply Property<span class="submenu-indicator"></span></a></li>
										<li><a href="{{route('pages.propertylisting')}}">Property Listing<span class="submenu-indicator"></span></a></li>
										<!-- <li><a href="{{route('pages.propertydetails')}}">Property Details</a></li> -->
									</ul>
								</li>

								
								<li><a href="{{route('pages.blog')}}">Blogs</a></li>

								<li><a href="{{route('pages.contact')}}">Contacts</a></li>
								<!-- <li><a href="{{route('pages.signin')}}" data-bs-toggle="modal" data-bs-target="#signup">Sign Up</a></li> -->
								
							</ul>
							
							<ul class="nav-menu nav-menu-social align-to-right">

							<li>
									<a href="{{route('pages.addproperty')}}" class="text-success"><img src="{{asset('frontend/assets/img/submit.svg')}}" width="20" alt="" class="mr-2" />Add Property</a>
								</li>
								
								<!-- <li>
									<a href="{{route('pages.signin')}}" data-bs-toggle="modal" data-bs-target="#login" class="text-success">
										<i class="fas fa-user-circle mr-2"></i>Signin</a>
								</li> -->
								<!-- <li class="add-listing theme-bg">
									<a href="submit-property.html">Add Property</a>
								</li> -->
                            	<li class="add-listing blue">
									<a href="#" data-bs-toggle="modal" data-bs-target="#login"><img src="{{asset('frontend/assets/img/user-light.svg')}}" width="12" alt="" class="mr-2" />Sign In</a>
								</li>

							</ul>
						</div>
					</nav>
				</div>
			</div>
			<!-- End Navigation -->

