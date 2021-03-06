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
							
							<h2 class="ipt-title">Welcome!</h2>
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
											<h4>Mayuri Roy</h4>
											<span>CoochBehar, West Bengal</span>
										</div>
										
										<div class="d-navigation">
											<ul>
												<li><a href="{{route('pages.dashboard')}}"><i class="ti-dashboard"></i>Dashboard</a></li>
												<li><a href="{{route('pages.myprofile')}}"><i class="ti-user"></i>My Profile</a></li>
												<li><a href="{{route('pages.bookmarklisting')}}"><i class="ti-bookmark"></i>Bookmarked Listings</a></li>
												<li class="active"><a href="{{route('pages.myproperty')}}"><i class="ti-layers"></i>My Properties</a></li>
												<li><a href="{{route('pages.addproperty')}}"><i class="ti-pencil-alt"></i>Add New Property</a></li>
												<li><a href="{{route('pages.changepassword')}}"><i class="ti-unlock"></i>Change Password</a></li>
												<li><a href="#"><i class="ti-power-off"></i>Log Out</a></li>
											</ul>
										</div>
										
									</div>
								</div>
								
							</div>
						</div>
						
						<div class="col-lg-9 col-md-12">
							<div class="dashboard-wraper">
							
								<!-- Bookmark Property -->
								<div class="form-submit">	
									<h4>My Property</h4>
								</div>
								
								<div class="row">
								
									<!-- Single Property -->
									<div class="col-md-12 col-sm-12 col-md-12">
										<div class="singles-dashboard-list">
											<div class="sd-list-left">
												<img src="https://via.placeholder.com/1200x800" class="img-fluid" alt="" />
											</div>
											<div class="sd-list-right">
												<h4 class="listing_dashboard_title"><a href="#" class="theme-cl">My List property Name</a></h4>
												<div class="user_dashboard_listed">
													Price: from $ 154 month
												</div>
												<div class="user_dashboard_listed">
													Listed in <a href="javascript:void(0);" class="theme-cl">Rentals</a> and <a href="javascript:void(0);" class="theme-cl">Apartments</a>
												</div>
												<div class="user_dashboard_listed">
													City: <a href="javascript:void(0);" class="theme-cl">KASIA</a> , Area:540 sq ft
												</div>
												<div class="action">
													<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="ti-pencil"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="202 User View"><i class="ti-eye"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Property" class="delete"><i class="ti-close"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Make Featured" class="delete"><i class="ti-star"></i></a>
												</div>
											</div>
										</div>
									</div>
									
									<!-- Single Property -->
									<div class="col-md-12 col-sm-12 col-md-12">
										<div class="singles-dashboard-list">
											<div class="sd-list-left">
												<img src="https://via.placeholder.com/1200x800" class="img-fluid" alt="" />
											</div>
											<div class="sd-list-right">
												<h4 class="listing_dashboard_title"><a href="#" class="theme-cl">My List property Name</a></h4>
												<div class="user_dashboard_listed">
													Price: from $ 154 month
												</div>
												<div class="user_dashboard_listed">
													Listed in <a href="javascript:void(0);" class="theme-cl">Rentals</a> and <a href="javascript:void(0);" class="theme-cl">Apartments</a>
												</div>
												<div class="user_dashboard_listed">
													City: <a href="javascript:void(0);" class="theme-cl">KASIA</a> , Area:540 sq ft
												</div>
												<div class="action">
													<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="ti-pencil"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="202 User View"><i class="ti-eye"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Property" class="delete"><i class="ti-close"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Make Featured" class="delete"><i class="ti-star"></i></a>
												</div>
											</div>
										</div>
									</div>
									
									<!-- Single Property -->
									<div class="col-md-12 col-sm-12 col-md-12">
										<div class="singles-dashboard-list">
											<div class="sd-list-left">
												<img src="https://via.placeholder.com/1200x800" class="img-fluid" alt="" />
											</div>
											<div class="sd-list-right">
												<h4 class="listing_dashboard_title"><a href="#" class="theme-cl">My List property Name</a></h4>
												<div class="user_dashboard_listed">
													Price: from $ 154 month
												</div>
												<div class="user_dashboard_listed">
													Listed in <a href="javascript:void(0);" class="theme-cl">Rentals</a> and <a href="javascript:void(0);" class="theme-cl">Apartments</a>
												</div>
												<div class="user_dashboard_listed">
													City: <a href="javascript:void(0);" class="theme-cl">KASIA</a> , Area:540 sq ft
												</div>
												<div class="action">
													<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="ti-pencil"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="202 User View"><i class="ti-eye"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Property" class="delete"><i class="ti-close"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Make Featured" class="delete"><i class="ti-star"></i></a>
												</div>
											</div>
										</div>
									</div>
									
									<!-- Single Property -->
									<div class="col-md-12 col-sm-12 col-md-12">
										<div class="singles-dashboard-list">
											<div class="sd-list-left">
												<img src="https://via.placeholder.com/1200x800" class="img-fluid" alt="" />
											</div>
											<div class="sd-list-right">
												<h4 class="listing_dashboard_title"><a href="#" class="theme-cl">My List property Name</a></h4>
												<div class="user_dashboard_listed">
													Price: from $ 154 month
												</div>
												<div class="user_dashboard_listed">
													Listed in <a href="javascript:void(0);" class="theme-cl">Rentals</a> and <a href="javascript:void(0);" class="theme-cl">Apartments</a>
												</div>
												<div class="user_dashboard_listed">
													City: <a href="javascript:void(0);" class="theme-cl">KASIA</a> , Area:540 sq ft
												</div>
												<div class="action">
													<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="ti-pencil"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="202 User View"><i class="ti-eye"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Property" class="delete"><i class="ti-close"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Make Featured" class="delete"><i class="ti-star"></i></a>
												</div>
											</div>
										</div>
									</div>
									
									<!-- Single Property -->
									<div class="col-md-12 col-sm-12 col-md-12">
										<div class="singles-dashboard-list">
											<div class="sd-list-left">
												<img src="https://via.placeholder.com/1200x800" class="img-fluid" alt="" />
											</div>
											<div class="sd-list-right">
												<h4 class="listing_dashboard_title"><a href="#" class="theme-cl">My List property Name</a></h4>
												<div class="user_dashboard_listed">
													Price: from $ 154 month
												</div>
												<div class="user_dashboard_listed">
													Listed in <a href="javascript:void(0);" class="theme-cl">Rentals</a> and <a href="javascript:void(0);" class="theme-cl">Apartments</a>
												</div>
												<div class="user_dashboard_listed">
													City: <a href="javascript:void(0);" class="theme-cl">KASIA</a> , Area:540 sq ft
												</div>
												<div class="action">
													<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="ti-pencil"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="202 User View"><i class="ti-eye"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Property" class="delete"><i class="ti-close"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Make Featured" class="delete"><i class="ti-star"></i></a>
												</div>
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
			<section class="theme-bg call-to-act-wrap">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							
							<div class="call-to-act">
								<div class="call-to-act-head">
									<h3>Want to Become a Real Estate Agent?</h3>
									<span>We'll help you to grow your career and growth.</span>
								</div>
								<a href="#" class="btn btn-call-to-act">SignUp Today</a>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Call To Action End ================================== -->

            @endsection