@extends('layout.base')
@section('content')

	<div class="clearfix"></div>
						
	<!-- ============================ Hero Banner  Start================================== -->
	<div class="featured_slick_gallery gray">
		<div class="featured_slick_gallery-slide">
			@if ($property->properties_to_images->count() > 0)
										
				@foreach ($property->properties_to_images as $image)
					<div class="featured_slick_padd">
						<a href="{{asset('uplaods/'.$image->big_img)}}" class="mfp-gallery">
							<img src="{{asset('uplaods/'.$image->big_img)}}" class="img-fluid mx-auto" alt="" />
						</a>
					</div>
					
				@endforeach

			@else

				<div class="featured_slick_padd"><a href="https://via.placeholder.com/1200x800" class="mfp-gallery"><img src="https://via.placeholder.com/1200x800" class="img-fluid mx-auto" alt="" /></a></div>
				<div class="featured_slick_padd"><a href="https://via.placeholder.com/1200x800" class="mfp-gallery"><img src="https://via.placeholder.com/1200x800" class="img-fluid mx-auto" alt="" /></a></div>
				<div class="featured_slick_padd"><a href="https://via.placeholder.com/1200x800" class="mfp-gallery"><img src="https://via.placeholder.com/1200x800" class="img-fluid mx-auto" alt="" /></a></div>
				<div class="featured_slick_padd"><a href="https://via.placeholder.com/1200x800" class="mfp-gallery"><img src="https://via.placeholder.com/1200x800" class="img-fluid mx-auto" alt="" /></a></div>	

			@endif
			
		</div>
		<a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#view_image" data-toggle="tooltip" data-original-title="Share" class="btn-view-pic">View photos</a>
	</div>
	<!-- ============================ Hero Banner End ================================== -->
	
	<!-- ============================ Property Detail Start ================================== -->
	<section class="gray-simple">
		<div class="container">
			<div class="row">
				@if (session()->has('success'))
					<div class="alert alert-success">
						<h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>

						@if(is_array(session()->get('success')))
								@foreach (session()->get('success') as $message)
									{{ $message }}
								@endforeach
						@else
							{{ session()->get('success') }}
						@endif
					</div>
				@endif
				<!-- property main detail -->
				<div class="col-lg-8 col-md-12 col-sm-12">
				
					<div class="property_block_wrap style-2 p-4 pt-2">
						
						<div class="prt-detail-title-desc mb-4">
							<div class="detaile-header d-flex justify-content-between align-item-baseline">
								<span class="prt-types sale">{{$property->property_status}}</span>
								<div class="lpc-right">
									<a href="compare-property.html" data-toggle="tooltip" data-placement="top" title="Share this property">
										<i class="ti-share"></i>
									</a>
									@guest
										<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#signup"title="Save this property"><i class="ti-heart"></i></a>
									@else 
										@if ($is_liked == 1)
											{{-- <div class="div_append"> --}}
												<a href="javascript:void(0);" data-toggle="tooltip" data-property-id="{{$property->id}}" class="dislike_property" data-is-liked="0" id="property_dislike" data-placement="top" title="Save this property"
													style=""
												><i class="ti-heart"></i></a>
											{{-- </div> --}}
											
										@else 
											{{-- <div class="div_append"> --}}
												<a href="javascript:void(0);" data-toggle="tooltip" data-property-id="{{$property->id}}" class="like_property" id="property_liked" data-is-liked="1" data-placement="top" title="Save this property"><i class="ti-heart"></i></a>
											{{-- </div> --}}
											
										@endif										
									@endguest
								</div>
							</div>
							
							
							<h3 class="mt-3">
								{{$property->property_title}}
									{{-- In 
									{{$property->properties_to_property_addresses->street_name}},
									{{$property->properties_to_property_addresses->property_addresses_to_zone_cities->city_name}} --}}
							</h3>
							<span><i class="lni-map-marker"></i>
								{{$property->properties_to_property_addresses->property_addresses_to_zone_cities->city_name}}.
								{{$property->properties_to_property_addresses->property_addresses_to_zones->zone_name}}
								{{-- {{$property->properties_to_property_addresses->street_name}},
								{{$property->properties_to_property_addresses->land_mark}} --}}
							</span>
							<h3 class="prt-price-fix red-color">
								Rs {{$property->property_price}}<sub>/month</sub>
							</h3>
							<div class="list-fx-features">
								<div class="listing-card-info-icon">
									<div class="inc-fleat-icon"><img src="{{asset('frontend/assets/img/bed.svg')}}" width="13" alt="" /></div>
									{{$property->no_of_bedrooms}} Beds
								</div>
								<div class="listing-card-info-icon">
									<div class="inc-fleat-icon"><img src="{{asset('frontend/assets/img/bathtub.svg')}}" width="13" alt="" /></div>{{$property->no_of_bathrooms}} Bath
								</div>
								<div class="listing-card-info-icon">
									<div class="inc-fleat-icon"><img src="{{asset('frontend/assets/img/move.svg')}}" width="13" alt="" /></div>{{$property->property_area}}
								</div>
							</div>
						</div>
					</div>
					
					<!-- Single Block Wrap -->
					<div class="property_block_wrap style-2">
						
						<div class="property_block_wrap_header">
							<a data-bs-toggle="collapse" data-parent="#features" data-bs-target="#clOne" aria-controls="clOne" href="javascript:void(0);" aria-expanded="false"><h4 class="property_block_title">Detail & Features</h4></a>
						</div>
						<div id="clOne" class="panel-collapse collapse show" aria-labelledby="clOne" aria-expanded="true">
							<div class="block-body">
								<ul class="deatil_features">
									<li><strong>Bedrooms:</strong>{{$property->no_of_bedrooms}} Beds</li>
									<li><strong>Bathrooms:</strong>{{$property->no_of_bathrooms}} Bath</li>
									<li><strong>Areas:</strong>{{$property->property_area}}</li>
									<li><strong>Garage</strong>{{$property->no_of_garage}}</li>
									<li><strong>Property Type:</strong>{{$property->properties_to_property_types->name}}</li>
									<li><strong>Building Age:</strong>{{$property->building_age}}</li>											
								</ul>
							</div>
						</div>
						
					</div>
					
					<!-- Single Block Wrap -->
					<div class="property_block_wrap style-2">
						
						<div class="property_block_wrap_header">
							<a data-bs-toggle="collapse" data-parent="#dsrp" data-bs-target="#clTwo" aria-controls="clTwo" href="javascript:void(0);" aria-expanded="true"><h4 class="property_block_title">Description</h4></a>
						</div>
						<div id="clTwo" class="panel-collapse collapse show" aria-expanded="true">
							<div class="block-body">
								@if ($property->detailed_info != null)
									<p>
										{{$property->detailed_info}}
									</p>
								@else
									<p>
										No Description
									</p>
								@endif										
							</div>
						</div>
					</div>
					
					<!-- Single Block Wrap -->
					<div class="property_block_wrap style-2">
						
						<div class="property_block_wrap_header">
							<a data-bs-toggle="collapse" data-parent="#amen"  data-bs-target="#clThree" aria-controls="clThree" href="javascript:void(0);" aria-expanded="true"><h4 class="property_block_title">Ameneties</h4></a>
						</div>
						
						<div id="clThree" class="panel-collapse collapse show" aria-expanded="true">
							<div class="block-body">
								<ul class="avl-features third color">
									@foreach ($property->properties_to_property_to_other_features as $feature)
										<li>{{$feature->property_to_other_features_to_other_features->name}}</li>
									@endforeach
								</ul>
							</div>
						</div>
					</div>
					
					<!-- Single Block Wrap -->
					<div class="property_block_wrap style-2">
						
						<div class="property_block_wrap_header">
							<a data-bs-toggle="collapse" data-parent="#vid"  data-bs-target="#clFour" aria-controls="clFour" href="javascript:void(0);" aria-expanded="true" class="collapsed"><h4 class="property_block_title">Property video</h4></a>
						</div>
						
						<div id="clFour" class="panel-collapse collapse" aria-expanded="true">
							<div class="block-body">
								<div class="property_video">
									<div class="thumb">
										<img class="pro_img img-fluid w100" src="https://via.placeholder.com/1200x800" alt="7.jpg">
										<div class="overlay_icon">
											<div class="bb-video-box">
												<div class="bb-video-box-inner">
													<div class="bb-video-box-innerup">
														<a href="https://www.youtube.com/watch?v=A8EI6JaFbv4" data-bs-toggle="modal" data-bs-target="#popup-video" class="theme-cl"><i class="ti-control-play"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					
					
					
					{{-- <!-- Single Block Wrap -->
					<div class="property_block_wrap style-2">
						
						<div class="property_block_wrap_header">
							<a data-bs-toggle="collapse" data-parent="#loca"  data-bs-target="#clSix" aria-controls="clSix" href="javascript:void(0);" aria-expanded="true" class="collapsed"><h4 class="property_block_title">Location</h4></a>
						</div>
						
						<div id="clSix" class="panel-collapse collapse" aria-expanded="true">
							<div class="block-body">
								<div class="map-container">
									<div id="singleMap" data-latitude="40.7427837" data-longitude="-73.11445617675781" data-mapTitle="Our Location"></div>
								</div>

							</div>
						</div>
						
					</div> --}}
					
					<!-- Single Block Wrap -->
					<div class="property_block_wrap style-2">
						
						<div class="property_block_wrap_header">
							<a data-bs-toggle="collapse" data-parent="#clSev"  data-bs-target="#clSev" aria-controls="clOne" href="javascript:void(0);" aria-expanded="true" class="collapsed"><h4 class="property_block_title">Gallery</h4></a>
						</div>
						
						<div id="clSev" class="panel-collapse collapse" aria-expanded="true">
							<div class="block-body">
								<ul class="list-gallery-inline">
									@if ($property->properties_to_images->count() > 0)
										
										@foreach ($property->properties_to_images as $image)
											<li>
												<a href="https://via.placeholder.com/1200x800" class="mfp-gallery">
													<img src="{{asset('uplaods/'.$image->big_img)}}" class="img-fluid mx-auto" alt="" />
												</a>
											</li>
										@endforeach

									@endif
									
								</ul>
							</div>
						</div>
						
					</div>
					
					<!-- All over Review -->
					<div class="rating-overview">
						<div class="rating-overview-box">
							<span class="rating-overview-box-total">4.2</span>
							<span class="rating-overview-box-percent">out of 5.0</span>
							<div class="star-rating" data-rating="5"><i class="ti-star"></i><i class="ti-star"></i><i class="ti-star"></i><i class="ti-star"></i><i class="ti-star"></i>
							</div>
						</div>

						<div class="rating-bars">
								<div class="rating-bars-item">
									<span class="rating-bars-name">Service</span>
									<span class="rating-bars-inner">
										<span class="rating-bars-rating high" data-rating="4.7">
											<span class="rating-bars-rating-inner" style="width: 85%;"></span>
										</span>
										<strong>4.7</strong>
									</span>
								</div>
								<div class="rating-bars-item">
									<span class="rating-bars-name">Value for Money</span>
									<span class="rating-bars-inner">
										<span class="rating-bars-rating good" data-rating="3.9">
											<span class="rating-bars-rating-inner" style="width: 75%;"></span>
										</span>
										<strong>3.9</strong>
									</span>
								</div>
								<div class="rating-bars-item">
									<span class="rating-bars-name">Location</span>
									<span class="rating-bars-inner">
										<span class="rating-bars-rating mid" data-rating="3.2">
											<span class="rating-bars-rating-inner" style="width: 52.2%;"></span>
										</span>
										<strong>3.2</strong>
									</span>
								</div>
								<div class="rating-bars-item">
									<span class="rating-bars-name">Cleanliness</span>
									<span class="rating-bars-inner">
										<span class="rating-bars-rating poor" data-rating="2.0">
											<span class="rating-bars-rating-inner" style="width:20%;"></span>
										</span>
										<strong>2.0</strong>
									</span>
								</div>
						</div>
					</div>
					<!-- All over Review -->
					
					<!-- Single Reviews Block -->
					<div class="property_block_wrap style-2">
						
						<div class="property_block_wrap_header">
							<a data-bs-toggle="collapse" data-parent="#rev"  data-bs-target="#clEight" aria-controls="clEight" href="javascript:void(0);" aria-expanded="true"><h4 class="property_block_title">102 Reviews</h4></a>
						</div>
						
						<div id="clEight" class="panel-collapse collapse show" aria-expanded="true">
							<div class="block-body">
								<div class="author-review">
									<div class="comment-list">
										<ul>
											<li class="article_comments_wrap">
												<article>
													<div class="article_comments_thumb">
														<img src="https://via.placeholder.com/400x400" alt="">
													</div>
													<div class="comment-details">
														<div class="comment-meta">
															<div class="comment-left-meta">
																<h4 class="author-name">Rosalina Kelian</h4>
																<div class="comment-date">19th May 2018</div>
															</div>
														</div>
														<div class="comment-text">
															<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborumab.
																perspiciatis unde omnis iste natus error.</p>
														</div>
													</div>
												</article>
											</li>
											<li class="article_comments_wrap">
												<article>
													<div class="article_comments_thumb">
														<img src="https://via.placeholder.com/400x400" alt="">
													</div>
													<div class="comment-details">
														<div class="comment-meta">
															<div class="comment-left-meta">
																<h4 class="author-name">Rosalina Kelian</h4>
																<div class="comment-date">19th May 2018</div>
															</div>
														</div>
														<div class="comment-text">
															<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborumab.
																perspiciatis unde omnis iste natus error.</p>
														</div>
													</div>
												</article>
											</li>
										</ul>
									</div>
								</div>
								<a href="#" class="reviews-checked theme-cl"><i class="fas fa-arrow-alt-circle-down mr-2"></i>See More Reviews</a>
							</div>
						</div>
						
					</div>
			
				</div>
				
				<!-- property Sidebar -->
				<div class="col-lg-4 col-md-12 col-sm-12">
					
					<!-- Like And Share -->
					<div class="like_share_wrap b-0" style="display: none">
						<ul class="like_share_list">
							@guest
								<li>
									<a href="JavaScript:Void(0);"  data-bs-toggle="modal" data-bs-target="#signup" class="btn btn-likes" data-toggle="tooltip" data-original-title="Share"><i class="fas fa-share"></i> Share</a>
								</li>

								{{-- <li>
									
									<button data-bs-toggle="modal" data-bs-target="#signup" type="submit" class="btn btn-outline-theme" style="width: 100%;border-radius: 0.4rem;">Apply</button>
								</li> --}}
								
								{{-- <li>
									<a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#signup" class="btn btn-likes" data-toggle="tooltip" data-original-title="Bookmark"><i class="fa fa-bookmark"></i> Bookmark</a>
								</li> --}}

								{{-- <li>
									<a href="JavaScript:Void(0);" class="btn btn-likes" data-toggle="tooltip" data-original-title="Save" style="    background: rgba(249, 93, 2,0.1);
									color: #f95d02 !important;
									border-color: #f95d02;"><i class="fas fa-heart"></i>Save</a>
								</li> --}}
								

							@else 
								<li><a href="JavaScript:Void(0);" class="btn btn-likes" data-toggle="tooltip" data-original-title="Like"><i class="fa fa-thumbs-up"></i> Like</a></li>
								<li>
									<a href="JavaScript:Void(0);" class="btn btn-likes" data-toggle="tooltip" data-original-title="Bookmark"><i class="fa fa-bookmark"></i> Bookmark</a>
								</li>
							@endguest
							
						</ul>
					</div>
					
					<div class="details-sidebar">
					
						<!-- Agent Detail -->
						<div class="sides-widget">
							@guest
								<div class="sides-widget-header red-bg">
									<div class="sides-widget-details ">
										<h4><a href="#" data-bs-toggle="modal" data-bs-target="#apply">Apply for rent</a></h4>
										{{-- <span>Fill the below information</span> --}}
									</div>
									<div class="clearfix"></div>
								</div>
							@else 
								@if ($is_applied_for_rent)
									<div class="sides-widget-header red-bg d-block">
										<div class="sides-widget-details">
											<p>
												You have already applied this property. To see the status click one the below button.
											</p>
										</div>
										<div class="clearfix"></div>
										<button type="button" class="btn btn-black btn-md rounded full-width apply-rent-btn mt-3">
											See Status
										</button>
									</div>
									
								@else
									<div class="sides-widget-header red-bg">
										<div class="agent-photo buyer_name_div">{{$abbName}}</div>
										<div class="sides-widget-details">
											<h4><a href="#">{{Auth::user()->name}}</a></h4>
											<span class="text-white"><i class="lni-phone-handset"></i>(91) {{Auth::user()->phone}}</span>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="sides-widget-body simple-form">
											
										<form class="apply-rent-form">
											{{-- <form action="{{route('pages.applyForRent')}}" method="POST"> --}}
											{{-- @csrf --}}
											<input type="hidden" name="property_id" value="{{$property->id}}">
											<div class="form-group">
												<label>Email</label>
												<input type="email" class="form-control" name="email" placeholder="Your Email" readonly value="{{Auth::user()->email}}">
											</div>
											<div class="form-group">
												<label>Phone No.</label>
												<input type="text" class="form-control" name="phone" placeholder="Your Phone" readonly value="{{Auth::user()->phone}}">
											</div>
											<div class="form-group">
												<label>Description</label>
												<textarea class="form-control" name="description">I'm interested in this property.</textarea>
											</div>
											<button type="button" class="btn btn-black btn-md rounded full-width apply-rent-btn">Apply for rent</button>
										</form>	
																	
									</div>
								@endif
								
							@endguest
							
							
							
						</div>
						
						<!-- Mortgage Calculator -->
						<!-- <div class="sides-widget">

							<div class="sides-widget-header">
								<div class="sides-widget-details">
									<h4><a href="#">Shivangi Preet</a></h4>
									<span>View your Interest Rate</span>
								</div>
								<div class="clearfix"></div>
							</div>
							
							<div class="sides-widget-body simple-form">
								<div class="form-group">
									<div class="input-with-icon">
										<input type="text" class="form-control" placeholder="Sale Price">
										<i class="ti-money"></i>
									</div>
								</div>
								
								<div class="form-group">
									<div class="input-with-icon">
										<input type="text" class="form-control" placeholder="Down Payment">
										<i class="ti-money"></i>
									</div>
								</div>
								
								<div class="form-group">
									<div class="input-with-icon">
										<input type="text" class="form-control" placeholder="Loan Term (Years)">
										<i class="ti-calendar"></i>
									</div>
								</div>
								
								<div class="form-group">
									<div class="input-with-icon">
										<input type="text" class="form-control" placeholder="Interest Rate">
										<i class="fa fa-percent"></i>
									</div>
								</div>
								
								<button class="btn btn-black btn-md rounded full-width">Calculate</button>
							
							</div>
						</div> -->
						
						<!-- Featured Property -->
						<div class="sidebar-widgets">
							
							<h4>Featured Property</h4>
							
							<div class="sidebar_featured_property">
								
								<!-- List Sibar Property -->
								<div class="sides_list_property">
									<div class="sides_list_property_thumb">
										<img src="https://via.placeholder.com/1200x800" class="img-fluid" alt="">
									</div>
									<div class="sides_list_property_detail">
										<h4><a href="single-property-1.html">Loss vengel New Apartment</a></h4>
										<span><i class="ti-location-pin"></i>Sans Fransico</span>
										<div class="lists_property_price">
											<div class="lists_property_types">
												<div class="property_types_vlix sale">For Sale</div>
											</div>
											<div class="lists_property_price_value">
												<h4>$4,240</h4>
											</div>
										</div>
									</div>
								</div>
								
								<!-- List Sibar Property -->
								<div class="sides_list_property">
									<div class="sides_list_property_thumb">
										<img src="https://via.placeholder.com/1200x800" class="img-fluid" alt="">
									</div>
									<div class="sides_list_property_detail">
										<h4><a href="single-property-1.html">Montreal Quriqe Apartment</a></h4>
										<span><i class="ti-location-pin"></i>Liverpool, London</span>
										<div class="lists_property_price">
											<div class="lists_property_types">
												<div class="property_types_vlix">For Rent</div>
											</div>
											<div class="lists_property_price_value">
												<h4>$7,380</h4>
											</div>
										</div>
									</div>
								</div>
								
								<!-- List Sibar Property -->
								<div class="sides_list_property">
									<div class="sides_list_property_thumb">
										<img src="https://via.placeholder.com/1200x800" class="img-fluid" alt="">
									</div>
									<div class="sides_list_property_detail">
										<h4><a href="single-property-1.html">Curmic Studio For Office</a></h4>
										<span><i class="ti-location-pin"></i>Montreal, Canada</span>
										<div class="lists_property_price">
											<div class="lists_property_types">
												<div class="property_types_vlix buy">For Buy</div>
											</div>
											<div class="lists_property_price_value">
												<h4>$8,730</h4>
											</div>
										</div>
									</div>
								</div>
								
								<!-- List Sibar Property -->
								<div class="sides_list_property">
									<div class="sides_list_property_thumb">
										<img src="https://via.placeholder.com/1200x800" class="img-fluid" alt="">
									</div>
									<div class="sides_list_property_detail">
										<h4><a href="single-property-1.html">Montreal Quebec City</a></h4>
										<span><i class="ti-location-pin"></i>Sreek View, New York</span>
										<div class="lists_property_price">
											<div class="lists_property_types">
												<div class="property_types_vlix">For Rent</div>
											</div>
											<div class="lists_property_price_value">
												<h4>$6,240</h4>
											</div>
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
	<!-- ============================ Property Detail End ================================== -->
	
	<!-- ============================ Call To Action ================================== -->
	@guest
    <section class="theme-bg call-to-act-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">                   
                    <div class="call-to-act">
                        <div class="call-to-act-head">
                            <h3 class="mb-0">Be a part of GoGoal</h3>
                            <span class="text-center">#FulFillYourGoal</span>
                        </div>
                        <a href="{{route('pages.signin')}}" class="btn btn-call-to-act">Register Now</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    @endguest
	<!-- ============================ Call To Action End ================================== -->


	<!-- Sign Up Modal -->
	<div class="modal fade signup" id="signup" tabindex="-1" role="dialog" aria-labelledby="sign-up" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered login-pop-form" role="document" style="max-width: 500px;">
			<div class="modal-content" id="sign-up">
				<span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
				<div class="modal-body">
					<div class="login-form">
						<div class="row" style="margin-bottom: 20px">
							<h4 class="text-center">
								You are not logged in
							</h4>
							<h6 class="text-center">
								To like this property please logged in first
							</h6>										
						</div>
						<a href="{{route('pages.signup')}}">
							<button type="submit" class="btn btn-md full-width btn-theme-light-2 rounded">Log In</button>				
						</a>
					</div>														
				</div>
			</div>
		</div>
	</div>
	<!-- End Modal -->

	<!-- Sign Up Modal -->
	<div class="modal fade apply" id="apply" tabindex="-1" role="dialog" aria-labelledby="apply" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered login-pop-form" role="document" style="max-width: 500px;">
			<div class="modal-content" id="sign-up">
				<span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
				<div class="modal-body">
					<div class="login-form">
						<div class="row" style="margin-bottom: 20px">
							<h4 class="text-center">
								You are not logged in
							</h4>
							<h6 class="text-center">
								To apply this property please log in first
							</h6>										
						</div>
						<a href="{{route('pages.signup')}}">
							<button type="submit" class="btn btn-md full-width btn-theme-light-2 rounded">Log In</button>				
						</a>
					</div>														
				</div>
			</div>
		</div>
	</div>
	<!-- End Modal -->

	<!-- Image/Video Show Modal -->
	<div class="modal fade view_image" id="view_image" tabindex="-1" role="dialog" aria-labelledby="sign-up" aria-hidden="true">
		<div class="modal-dialog" role="document" style="max-width: 1000px;">
			<div class="modal-content" id="sign-up">
				<span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
				<div class="modal-body">
					<div class="block-wraps">
						<div class="block-wraps-header">
						
							<div class="block-header">
								<ul class="nav nav-tabs customize-tab" id="myTab" role="tablist">
								  <li class="nav-item" role="presentation">
									<a class="nav-link active" id="rental-tab" data-bs-toggle="tab" href="#rental" role="tab" aria-controls="rental" aria-selected="true">Image</a>
								  </li>
								  <li class="nav-item" role="presentation">
									<a class="nav-link" id="sale-tab" data-bs-toggle="tab" href="#sale" role="tab" aria-controls="sale" aria-selected="false">Video</a>
								  </li>
								</ul>
							</div>
							
							<div class="block-body p-0">
								<div class="tab-content" id="myTabContent">								
									<div class="tab-pane fade active show" id="rental" role="tabpanel" aria-labelledby="rental-tab">
										<div class="block-body p-0">
											<ul class="list-gallery-inline">
												@if ($property->properties_to_images->count() > 0)
													@foreach ($property->properties_to_images as $image)
														<li>
															<img src="{{asset('uplaods/'.$image->big_img)}}" class="img-fluid mx-auto" alt="" />
														</li>
													@endforeach			
												@endif												
											</ul>
										</div>										
									</div>
									
									<div class="tab-pane fade" id="sale" role="tabpanel" aria-labelledby="sale-tab">
										<!-- row -->
										<div class="row">
											<!-- Single Property -->
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="property-listing property-2">
													
													<div class="listing-img-wrapper">
														<div class="list-img-slide">
															<div class="clicks">
																<div><img src="https://via.placeholder.com/1200x800" class="img-fluid mx-auto" alt=""></div>
															</div>
														</div>
													</div>													
												</div>
											</div>
											<!-- End Single Property -->											
										</div>
										<!-- // row -->
									</div>								  
								</div>
							</div>						
						</div>
					</div>														
				</div>
			</div>
		</div>
	</div>
	<!-- End Modal -->
			

@endsection