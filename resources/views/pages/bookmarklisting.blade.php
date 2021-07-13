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
											<h4>Adam Harshvardhan</h4>
											<span>Canada USA</span>
										</div>
										
										<div class="d-navigation">
											<ul>
												<li><a href="dashboard.html"><i class="ti-dashboard"></i>Dashboard</a></li>
												<li><a href="my-profile.html"><i class="ti-user"></i>My Profile</a></li>
												<li class="active"><a href="bookmark-list.html"><i class="ti-bookmark"></i>Bookmarked Listings</a></li>
												<li><a href="my-property.html"><i class="ti-layers"></i>My Properties</a></li>
												<li><a href="submit-property-dashboard.html"><i class="ti-pencil-alt"></i>Submit New Property</a></li>
												<li><a href="change-password.html"><i class="ti-unlock"></i>Change Password</a></li>
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
									<h4>Bookmark Property</h4>
								</div>
								
								<table class="property-table-wrap responsive-table bkmark">

									<tbody>
										<tr>
											<th><i class="fa fa-file-text"></i> Property</th>
											<th></th>
										</tr>

										<!-- Item #1 -->
										<tr>
											<td class="property-container">
												<img src="https://via.placeholder.com/1200x800" alt="">
												<div class="title">
													<h4><a href="#">Serene Uptown</a></h4>
													<span>6 Bishop Ave. Perkasie, PA </span>
													<span class="table-property-price">$900 / monthly</span>
												</div>
											</td>
											<td class="action">
												<a href="#" class="delete"><i class="ti-close"></i> Delete</a>
											</td>
										</tr>

										<!-- Item #2 -->
										<tr>
											<td class="property-container">
												<img src="https://via.placeholder.com/1200x800" alt="">
												<div class="title">
													<h4><a href="#">Oak Tree Villas</a></h4>
													<span>71 Lower River Dr. Bronx, NY</span>
													<span class="table-property-price">$535,000</span>
												</div>
											</td>
											<td class="action">
												<a href="#" class="delete"><i class="ti-close"></i> Delete</a>
											</td>
										</tr>

										<!-- Item #3 -->
										<tr>
											<td class="property-container">
												<img src="https://via.placeholder.com/1200x800" alt="">
												<div class="title">
													<h4><a href="#">Selway Villas</a></h4>
													<span>33 William St. Northbrook, IL </span>
													<span class="table-property-price">$420,000</span>
												</div>
											</td>
											<td class="action">
												<a href="#" class="delete"><i class="ti-close"></i> Delete</a>
											</td>
										</tr>

										<!-- Item #4 -->
										<tr>
											<td class="property-container">
												<img src="https://via.placeholder.com/1200x800" alt="">
												<div class="title">
													<h4><a href="#">Town Manchester</a></h4>
													<span> 7843 Durham Avenue, MD  </span>
													<span class="table-property-price">$420,000</span>
												</div>
											</td>
											<td class="action">
												<a href="#" class="delete"><i class="ti-close"></i> Delete</a>
											</td>
										</tr>

									</tbody>
								</table>
								
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