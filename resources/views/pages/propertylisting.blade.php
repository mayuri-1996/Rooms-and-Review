@extends('layout.base')
@section('content')


<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
{{-- 			
			<!-- ============================ Page Title Start================================== -->
			<div class="page-title">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<h2 class="ipt-title">Property List</h2>

							@if (Request::get('search_history') && Request::get('search_history') != '')
								<span class="ipn-subtitle">Property List Based on Your Search Historty</span>
							@endif
														
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Page Title End ================================== --> --}}
			
			<!-- ============================ All Property ================================== -->
			<section class="gray">
			
				<div class="container">
					<div class="row">
					
						<!-- property Sidebar -->
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="simple-sidebar sm-sidebar" id="filter_search"  style="left:0;">							
							
								<div class="search-sidebar_header">
									<h4 class="ssh_heading">Close Filter</h4>
									<button onclick="closeFilterSearch()" class="w3-bar-item w3-button w3-large"><i class="ti-close"></i></button>
								</div>
								
								<!-- Find New Property -->
								<div class="sidebar-widgets">
									
									<div class="search-inner p-0">
										
										{{-- <div class="filter-search-box">
											<div class="form-group">
												<div class="input-with-icon">
													<input type="text" class="form-control" placeholder="Search by space name…">
													<i class="ti-search"></i>
												</div>
											</div>
										</div> --}}

										<form action="{{route('pages.propertylisting')}}" method="get">
											@csrf

											@if (Request::get('search_history') && Request::get('search_history') != '')
												<input type="hidden" name="search_history" value="{{Request::get('search_history')}}">
											@else

												<input type="hidden" name="city_id" value="{{Request::get('city_id')}}">
												<input type="hidden" name="state_id" value="{{Request::get('state_id')}}">
												
											@endif
											<div class="filter_wraps">
												<!-- Single Search -->
												<div class="single_search_boxed">
													<div class="widget-boxed-header">
														<h4>
															<a href="#fptype" data-bs-toggle="collapse" aria-expanded="false" role="button" class="collapsed">Property Types<span class="selected">Apartment</span></a>
														</h4>
														
													</div>
													<div class="widget-boxed-body collapse" id="fptype" data-parent="#fptype">
														<div class="side-list no-border">
															<!-- Single Filter Card -->
															<div class="single_filter_card">
																<div class="card-body pt-0">
																	<div class="inner_widget_link">
																		<ul class="no-ul-list filter-list">
																			@foreach ($property_types as $property_type)
																				<li>
																					<input id="c{{$property_type->id}}" class="radio-custom" name="property_type" value="{{$property_type->id}}" 
																					type="radio"
																					@if (Request::get('property_type') == $property_type->id)
																						checked
																					@endif
																					>
																					<label for="c{{$property_type->id}}" class="radio-custom-label">{{$property_type->name}}</label>
																				</li>
																			@endforeach
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												
												{{-- <!-- Single Search -->
												<div class="single_search_boxed">
													<div class="widget-boxed-header">
														<h4>
															<a href="#fbedrooms" data-bs-toggle="collapse" aria-expanded="false" role="button" class="collapsed">Bedrooms<span class="selected">2 Beds</span></a>
														</h4>
														
													</div>
													<div class="widget-boxed-body collapse" id="fbedrooms" data-parent="#fbedrooms">
														<div class="side-list no-border">
															<!-- Single Filter Card -->
															<div class="single_filter_card">
																<div class="card-body pt-0">
																	<div class="inner_widget_link">
																		<ul class="no-ul-list filter-list">
																			<li>
																				<input id="a1" class="radio-custom" name="bed" type="radio">
																				<label for="a1" class="radio-custom-label">01 Bedrooms</label>
																			</li>
																			<li>
																				<input id="a2" class="radio-custom" name="bed" type="radio">
																				<label for="a2" class="radio-custom-label">02 Bedrooms</label>
																			</li>
																			<li>
																				<input id="a3" class="radio-custom" name="bed" type="radio">
																				<label for="a3" class="radio-custom-label">03 Bedrooms</label>
																			</li>
																			<li>
																				<input id="a4" class="radio-custom" name="bed" type="radio" checked>
																				<label for="a4" class="radio-custom-label">04 Bedrooms</label>
																			</li>
																			<li>
																				<input id="a5" class="radio-custom" name="bed" type="radio">
																				<label for="a5" class="radio-custom-label">05 Bedrooms</label>
																			</li>
																			<li>
																				<input id="a6" class="radio-custom" name="bed" type="radio">
																				<label for="a6" class="radio-custom-label">06+ Bedrooms</label>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div> --}}
												
												<!-- Single Search -->
												<div class="single_search_boxed">
													<div class="widget-boxed-header">
														<h4>
															<a href="#fprice" data-bs-toggle="collapse" aria-expanded="false" role="button" class="collapsed">Price Range<span class="selected">$10,000 - $15,000</span></a>
														</h4>
														
													</div>
													<div class="widget-boxed-body collapse" id="fprice" data-parent="#fprice">
														<div class="side-list no-border">
															<!-- Single Filter Card -->
															<div class="single_filter_card">
																<div class="card-body pt-0">
																	<div class="inner_widget_link">
																		<ul class="no-ul-list filter-list">
																			<li>
																				<input id="e1" class="radio-custom" name="prices" value="0-5000" type="radio"
																				@if (Request::get('prices') == '0-5000')
																					checked
																				@endif
																				>
																				<label for="e1" class="radio-custom-label">Less Then 5,000</label>
																			</li>
																			<li>
																				<input id="e2" class="radio-custom" value="5000-10000" name="prices" type="radio"
																				@if (Request::get('prices') == '5000-10000')
																					checked
																				@endif
																				>
																				<label for="e2" class="radio-custom-label">5,000 - 10,000</label>
																			</li>
																			<li>
																				<input id="e2" class="radio-custom" value="10000-15000"
																				 name="prices" type="radio"
																				 @if (Request::get('prices') == '10000-15000')
																					checked
																				@endif
																				 >
																				<label for="e2" class="radio-custom-label">10,000 - 15,000</label>
																			</li>
																			<li>
																				<input id="e3" class="radio-custom" value="15000-20000" name="prices" type="radio"
																				@if (Request::get('prices') == '15000-20000')
																					checked
																				@endif
																				>
																				<label for="e3" class="radio-custom-label">15,000 - 20,000</label>
																			</li>
																			<li>
																				<input id="e4" class="radio-custom" value="20000-25000" name="prices" type="radio" 
																				@if (Request::get('prices') == '20000-25000')
																					checked
																				@endif
																				>
																				<label for="e4" class="radio-custom-label">20,000 - 25,000</label>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
	
												{{-- <!-- Single Search -->
												<div class="single_search_boxed">
													<div class="widget-boxed-header">
														<h4>
															<a href="#ameneties" data-bs-toggle="collapse" aria-expanded="false" role="button" class="collapsed">Ameneties<span class="selected">ADA Compliant</span></a>
														</h4>
														
													</div>
													<div class="widget-boxed-body collapse" id="ameneties" data-parent="#ameneties">
														<div class="side-list no-border">
															<!-- Single Filter Card -->
															<div class="single_filter_card">
																<div class="card-body pt-0">
																	<div class="inner_widget_link">
																		<ul class="no-ul-list filter-list">
																			<li>
																				<input id="g1" class="checkbox-custom" name="ADA" type="checkbox" checked>
																				<label for="g1" class="checkbox-custom-label">ADA Compliant</label>
																			</li>
																			<li>
																				<input id="g2" class="checkbox-custom" name="Parking" type="checkbox">
																				<label for="g2" class="checkbox-custom-label">Parking Options</label>
																			</li>
																			<li>
																				<input id="g3" class="checkbox-custom" name="Coffee" type="checkbox">
																				<label for="g3" class="checkbox-custom-label">Coffee Provided</label>
																			</li>
																			<li>
																				<input id="g4" class="checkbox-custom" name="Mother" type="checkbox">
																				<label for="g4" class="checkbox-custom-label">Mother's Room</label>
																			</li>
																			<li>
																				<input id="g5" class="checkbox-custom" name="Outdoor" type="checkbox">
																				<label for="g5" class="checkbox-custom-label">Outdoor Space</label>
																			</li>
																			<li>
																				<input id="g6" class="checkbox-custom" name="Pet" type="checkbox">
																				<label for="g6" class="checkbox-custom-label">Pet Friendly</label>
																			</li>
																			<li>
																				<input id="g7" class="checkbox-custom" name="Beauty" type="checkbox">
																				<label for="g7" class="checkbox-custom-label">Beauty & Message</label>
																			</li>
																			<li>
																				<input id="g8" class="checkbox-custom" name="Bike" type="checkbox">
																				<label for="g8" class="checkbox-custom-label">Bike Parking</label>
																			</li>
																			<li>
																				<input id="g9" class="checkbox-custom" name="Phone" type="checkbox">
																				<label for="g9" class="checkbox-custom-label">Phone Line</label>
																			</li>
																			<li>
																				<input id="g11" class="checkbox-custom" name="Private" type="checkbox">
																				<label for="g11" class="checkbox-custom-label">Private Areas</label>
																			</li>
																			<li>
																				<input id="g12" class="checkbox-custom" name="Free" type="checkbox">
																				<label for="g12" class="checkbox-custom-label">Free WiFi</label>
																			</li>
																			<li>
																				<input id="g13" class="checkbox-custom" name="Swiming" type="checkbox">
																				<label for="g13" class="checkbox-custom-label">Swiming Pool</label>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div> --}}
												
											</div>
											
											<div class="form-group filter_button">
												<button type="submit" class="btn btn btn-theme-light-2 rounded full-width">Search Property</button>
											</div>
										</form>
										
										
									</div>							
								</div>
							</div>
							<!-- Sidebar End -->
						
						</div>

						@if (Request::get('search_history') && Request::get('search_history') != '')
							<div class="col-lg-8 col-md-12 list-layout">
								
								<div class="row justify-content-center">
									<div class="col-lg-12 col-md-12">
										<div class="item-shorting-box">
											
											<div class="item-shorting clearfix">
												<div class="left-column pull-left"><h4 class="m-0">Found 1-{{$searched_properties->perPage()}} of {{$searched_properties->total()}} Results</h4></div>
											</div>
											{{-- <div class="item-shorting-box-right">
												<div class="shorting-by">
													<select id="shorty" class="form-control">
														<option value="">&nbsp;</option>
														<option value="1">Low Price</option>
														<option value="2">High Price</option>
														<option value="3">Most Popular</option>
													</select>
												</div>
												<ul class="shorting-list">
													<li><a href="grid-layout-with-sidebar.html"><i class="ti-layout-grid2"></i></a></li>
													<li><a href="list-layout-with-sidebar.html" class="active"><i class="ti-view-list"></i></a></li>
												</ul>
											</div> --}}
										</div>
									</div>
								</div>
								
								<div class="row">
									@if ($searched_properties->count() == 0)
										<div class="item-shorting clearfix">
											<div class="left-column pull-left"><h5 class="m-0">No Property Found</h5></div>
										</div>
									@endif
									@foreach ($searched_properties as $searched_property)
										<!-- Single Property Start -->
										<div class="col-lg-12 col-md-12">
											<div class="property-listing property-1">
													
												<div class="listing-img-wrapper">
													<a href="{{route('pages.propertydetails',$searched_property->search_histories_to_properties->id)}}">
														@if ($searched_property->search_histories_to_properties->properties_to_images->count()>0)
															<img src="{{asset('uplaods/'.$searched_property->search_histories_to_properties->properties_to_images[0]->big_img)}}" class="img-fluid mx-auto" alt="" />
														@else
															<img src="https://via.placeholder.com/1200x800" class="img-fluid mx-auto" alt="" />
														@endif
														
													</a>
													<div class="last-visited-div">
														Last Visited : {{ date("F j, Y, g:i a", strtotime($searched_property->last_visited)) }}
													</div>
												</div>
												
												<div class="listing-content">
												
													<div class="listing-detail-wrapper-box">
														<div class="listing-detail-wrapper">
															<div class="listing-short-detail">
																<h4 class="listing-name"><a href="{{route('pages.propertydetails',$searched_property->search_histories_to_properties->id)}}">
																	{{$searched_property->search_histories_to_properties->property_title}}
																</a></h4>
																{{-- <div class="fr-can-rating">
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star"></i>
																	<span class="reviews_text">(42 Reviews)</span>
																</div> --}}
																<span class="prt-types sale">{{$searched_property->search_histories_to_properties->property_status}}</span>
															</div>
															<div class="list-price">
																<h6 class="listing-card-info-price">Rs {{$searched_property->search_histories_to_properties->property_price}}</h6>
															</div>
														</div>
													</div>
													
													<div class="price-features-wrapper">
														<div class="listing-card-info-icon">
															<div class="inc-fleat-icon"><img src="{{asset('frontend/assets/img/bed.svg')}}" width="13" alt="" /></div>
															{{$searched_property->search_histories_to_properties->no_of_bedrooms}} Beds
														</div>
														<div class="listing-card-info-icon">
															<div class="inc-fleat-icon"><img src="{{asset('frontend/assets/img/bathtub.svg')}}" width="13" alt="" /></div>{{$searched_property->search_histories_to_properties->no_of_bathrooms}} Bath
														</div>
														<div class="listing-card-info-icon">
															<div class="inc-fleat-icon"><img src="{{asset('frontend/assets/img/move.svg')}}" width="13" alt="" /></div>{{$searched_property->search_histories_to_properties->property_area}}
														</div>
													</div>
												
													<div class="listing-footer-wrapper">
														<div class="listing-locate">
															<span class="listing-location">
																<i class="ti-location-pin"></i>
																{{$searched_property->search_histories_to_properties->properties_to_property_addresses->property_addresses_to_zone_cities->city_name}}, 
																{{$searched_property->search_histories_to_properties->properties_to_property_addresses->property_addresses_to_zones->zone_name}}
															</span>
														</div>
														<div class="listing-detail-btn">
															<a href="{{route('pages.propertydetails',$searched_property->search_histories_to_properties->id)}}" class="more-btn">View</a>
														</div>
													</div>
													
												</div>
												
											</div>
										</div>
										<!-- Single Property End -->
									@endforeach					
									
								</div>
								
								<!-- Pagination -->
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12">
										<ul class="pagination p-center">
											{{ $searched_properties->appends(request()->input())->links() }}
											{{-- <li class="page-item">
											<a class="page-link" href="#" aria-label="Previous">
												<span class="ti-arrow-left"></span>
												<span class="sr-only">Previous</span>
											</a>
											</li>
											<li class="page-item"><a class="page-link" href="#">1</a></li>
											<li class="page-item"><a class="page-link" href="#">2</a></li>
											<li class="page-item active"><a class="page-link" href="#">3</a></li>
											<li class="page-item"><a class="page-link" href="#">...</a></li>
											<li class="page-item"><a class="page-link" href="#">18</a></li>
											<li class="page-item">
											<a class="page-link" href="#" aria-label="Next">
												<span class="ti-arrow-right"></span>
												<span class="sr-only">Next</span>
											</a>
											</li> --}}
										</ul>
									</div>
								</div>
						
							</div>
						@else
							<div class="col-lg-8 col-md-12 list-layout">
							
								<div class="row justify-content-center">
									<div class="col-lg-12 col-md-12">
										<div class="item-shorting-box">
											<div class="item-shorting clearfix">
												<div class="left-column pull-left"><h4 class="m-0">Found 1-{{$searched_properties->perPage()}} of {{$searched_properties->total()}} Results</h4></div>
											</div>
											{{-- <div class="item-shorting-box-right">
												<div class="shorting-by">
													<select id="shorty" class="form-control">
														<option value="">&nbsp;</option>
														<option value="1">Low Price</option>
														<option value="2">High Price</option>
														<option value="3">Most Popular</option>
													</select>
												</div>
												<ul class="shorting-list">
													<li><a href="grid-layout-with-sidebar.html"><i class="ti-layout-grid2"></i></a></li>
													<li><a href="list-layout-with-sidebar.html" class="active"><i class="ti-view-list"></i></a></li>
												</ul>
											</div> --}}
										</div>
									</div>
								</div>
								
								<div class="row">
									@if ($searched_properties->count() == 0)
										<div class="item-shorting clearfix">
											<div class="left-column pull-left"><h5 class="m-0">No Property Found</h5></div>
										</div>
									@endif
									@foreach ($searched_properties as $searched_property)
										<!-- Single Property Start -->
										<div class="col-lg-12 col-md-12">
											<div class="property-listing property-1">
													
												<div class="listing-img-wrapper">
													<a href="{{route('pages.propertydetails',$searched_property->id)}}">
														@if ($searched_property->properties_to_images->count()>0)
															<img src="{{asset('uplaods/'.$searched_property->properties_to_images[0]->big_img)}}" class="img-fluid mx-auto" alt="" />
														@else
															<img src="https://via.placeholder.com/1200x800" class="img-fluid mx-auto" alt="" />
														@endif
														
													</a>
												</div>
												
												<div class="listing-content">
												
													<div class="listing-detail-wrapper-box">
														<div class="listing-detail-wrapper">
															<div class="listing-short-detail">
																<h4 class="listing-name"><a href="{{route('pages.propertydetails',$searched_property->id)}}">
																	{{$searched_property->property_title}}
																</a></h4>
																{{-- <div class="fr-can-rating">
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star"></i>
																	<span class="reviews_text">(42 Reviews)</span>
																</div> --}}
																<span class="prt-types sale">{{$searched_property->property_status}}</span>
															</div>
															<div class="list-price">
																<h6 class="listing-card-info-price">Rs {{$searched_property->property_price}}</h6>
															</div>
														</div>
													</div>
													
													<div class="price-features-wrapper">
														<div class="listing-card-info-icon">
															<div class="inc-fleat-icon"><img src="{{asset('frontend/assets/img/bed.svg')}}" width="13" alt="" /></div>
															{{$searched_property->no_of_bedrooms}} Beds
														</div>
														<div class="listing-card-info-icon">
															<div class="inc-fleat-icon"><img src="{{asset('frontend/assets/img/bathtub.svg')}}" width="13" alt="" /></div>{{$searched_property->no_of_bathrooms}} Bath
														</div>
														<div class="listing-card-info-icon">
															<div class="inc-fleat-icon"><img src="{{asset('frontend/assets/img/move.svg')}}" width="13" alt="" /></div>{{$searched_property->property_area}}
														</div>
													</div>
												
													<div class="listing-footer-wrapper">
														<div class="listing-locate">
															<span class="listing-location">
																<i class="ti-location-pin"></i>
																{{$searched_property->properties_to_property_addresses->property_addresses_to_zone_cities->city_name}}, 
																{{$searched_property->properties_to_property_addresses->property_addresses_to_zones->zone_name}}
															</span>
														</div>
														<div class="listing-detail-btn">
															<a href="{{route('pages.propertydetails',$searched_property->id)}}" class="more-btn">View</a>
														</div>
													</div>
													
												</div>
												
											</div>
										</div>
										<!-- Single Property End -->
									@endforeach					
									
								</div>
								
								<!-- Pagination -->
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12">
										<ul class="pagination p-center">
											{{ $searched_properties->appends(request()->input())->links() }}
											{{-- <li class="page-item">
											<a class="page-link" href="#" aria-label="Previous">
												<span class="ti-arrow-left"></span>
												<span class="sr-only">Previous</span>
											</a>
											</li>
											<li class="page-item"><a class="page-link" href="#">1</a></li>
											<li class="page-item"><a class="page-link" href="#">2</a></li>
											<li class="page-item active"><a class="page-link" href="#">3</a></li>
											<li class="page-item"><a class="page-link" href="#">...</a></li>
											<li class="page-item"><a class="page-link" href="#">18</a></li>
											<li class="page-item">
											<a class="page-link" href="#" aria-label="Next">
												<span class="ti-arrow-right"></span>
												<span class="sr-only">Next</span>
											</a>
											</li> --}}
										</ul>
									</div>
								</div>
						
							</div>
						@endif
																	
					</div>
				</div>	
			</section>
			<!-- ============================ All Property ================================== -->
			
			<!-- ============================ Call To Action ================================== -->


            @endsection