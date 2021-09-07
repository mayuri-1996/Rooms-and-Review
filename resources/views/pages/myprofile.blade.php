@extends('layout.base')
@section('content')


<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			<!-- ============================ Page Title Start================================== -->
			<div class="page-title">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<h2 class="ipt-title">Welcome! {{Auth::user()->name}}</h2>
							<span class="ipn-subtitle">Welcome To Your Account</span>
							
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Page Title End ================================== -->
			
			<!-- ============================ User Dashboard ================================== -->
			<section class="bg-light">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="filter_search_opt">
								<a href="javascript:void(0);" onclick="openFilterSearch()">Dashboard Navigation<i class="ml-2 ti-menu"></i></a>
							</div>
						</div>
					</div>
								
					<div class="row">
						
						<div class="col-lg-3 col-md-12">
							
							<div class="simple-sidebar sm-sidebar" id="filter_search">
								
								<div class="search-sidebar_header">
									<h4 class="ssh_heading">Close Filter</h4>
									<button onclick="closeFilterSearch()" class="w3-bar-item w3-button w3-large"><i class="ti-close"></i></button>
								</div>
								
								<div class="sidebar-widgets">
									<div class="dashboard-navbar">
										
										<div class="d-user-avater">
											<img src="assets/img/user-3.jpg" class="img-fluid avater" alt="">
											<h4>{{Auth::user()->name}}</h4>
											<span>{{Auth::user()->city}} {{Auth::user()->state}}, {{Auth::user()->country}}</span>
										</div>
										
										<div class="d-navigation">
											<ul>
												<li><a href="dashboard.html"><i class="ti-dashboard"></i>Dashboard</a></li>
												<li class="active"><a href="my-profile.html"><i class="ti-user"></i>My Profile</a></li>
												<li><a href="bookmark-list.html"><i class="ti-bookmark"></i>Bookmarked Listings</a></li>
												<li><a href="my-property.html"><i class="ti-layers"></i>My Properties</a></li>
												<li><a href="{{route('pages.addproperty')}}"><i class="ti-pencil-alt"></i>Submit New Property</a></li>
												{{-- <li><a href="change-password.html"><i class="ti-unlock"></i>Change Password</a></li> --}}
												<li>
													<a href="{{ route('buyer.auth.logout') }}"
														onclick="event.preventDefault();
														document.getElementById('logout-form').submit();"
													>
														<i class="ti-power-off"></i>
														Log Out
													</a>
													<form id="logout-form" action="{{ route('buyer.auth.logout') }}" method="POST" style="display: none;">
														{{ csrf_field() }}
													</form>
												</li>
											</ul>
										</div>
										
									</div>
								</div>
								
							</div>
						</div>
						
						<div class="col-lg-9 col-md-12">
							<div class="dashboard-wraper">
							
								<!-- Basic Information -->
								<div class="form-submit">	
									<h4>My Account</h4>
									<div class="submit-section">
										<div class="row">
										
											<div class="form-group col-md-6">
												<label>Your Name</label>
												<input type="text" class="form-control" value="{{Auth::user()->name}}">
											</div>
											
											<div class="form-group col-md-6">
												<label>Email</label>
												<input type="email" class="form-control" value="{{Auth::user()->email}}">
											</div>
											
											<div class="form-group col-md-6">
												<label>Your Title</label>
												<input type="text" class="form-control" value="Web Designer">
											</div>
											
											<div class="form-group col-md-6">
												<label>Phone</label>
												<input type="text" class="form-control" value="{{Auth::user()->phone}}">
											</div>
											
											<div class="form-group col-md-6">
												<label>Address</label>
												<input type="text" class="form-control" value="{{Auth::user()->street_name}}">
											</div>
											
											<div class="form-group col-md-6">
												<label>City</label>
												<input type="text" class="form-control" value="{{Auth::user()->city}}">
											</div>
											
											<div class="form-group col-md-6">
												<label>State</label>
												<input type="text" class="form-control" value="{{Auth::user()->state}}">
											</div>
											
											<div class="form-group col-md-6">
												<label>Zip</label>
												<input type="text" class="form-control" value="{{Auth::user()->pincode}}">
											</div>
											
											<div class="form-group col-md-12">
												<label>About</label>
												<textarea class="form-control">Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper</textarea>
											</div>
											
										</div>
									</div>
								</div>
								
								<div class="form-submit">	
									<h4>Social Accounts</h4>
									<div class="submit-section">
										<div class="row">
										
											<div class="form-group col-md-6">
												<label>Facebook</label>
												<input type="text" class="form-control" value="https://facebook.com/">
											</div>
											
											<div class="form-group col-md-6">
												<label>Twitter</label>
												<input type="email" class="form-control" value="https://twitter.com/">
											</div>
											
											<div class="form-group col-md-6">
												<label>Google Plus</label>
												<input type="text" class="form-control" value="https://googleplus.com">
											</div>
											
											<div class="form-group col-md-6">
												<label>LinkedIn</label>
												<input type="text" class="form-control" value="https://linkedin.com/">
											</div>
											
											<div class="form-group col-lg-12 col-md-12">
												<button class="btn btn-theme-light-2 rounded" type="submit">Save Changes</button>
											</div>
											
										</div>
									</div>
								</div>
								
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- ============================ User Dashboard End ================================== -->
			
			<!-- ============================ Call To Action ================================== -->
			

            @endsection