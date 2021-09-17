{{-- @extends('layout.base')
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
							
							<h2 class="ipt-title">Submit Property</h2>
							<span class="ipn-subtitle">Just Submit Your Property</span>
							
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Page Title End ================================== -->
			
			<!-- ============================ Submit Property Start ================================== -->
			<section class="gray-simple">
			
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
						
							<div class="alert alert-success" role="alert">
							<p>Please, Sign In before you submit a property. If you don't have an account you can create one by <a href="#">Clicking Here</a></p>
							</div>
						
						</div>
						
						<!-- Submit Form -->
						<div class="col-lg-12 col-md-12">
						
							<div class="submit-page">
								
								<!-- Basic Information -->
								<div class="form-submit">	
									<h3>Basic Information</h3>
									<div class="submit-section">
										<div class="row">
										
											<div class="form-group col-md-12">
												<label>Property Title<span class="tip-topdata" data-tip="Property Title"><i class="ti-help"></i></span></label>
												<input type="text" class="form-control">
											</div>
											
											<div class="form-group col-md-6">
												<label>Status</label>
												<select id="status" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">For Rent</option>
													<option value="2">For Sale</option>
												</select>
											</div>
											
											<div class="form-group col-md-6">
												<label>Property Type</label>
												<select id="ptypes" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">Houses</option>
													<option value="2">Apartment</option>
													<option value="3">Villas</option>
													<option value="4">Commercial</option>
													<option value="5">Offices</option>
													<option value="6">Garage</option>
												</select>
											</div>
											
											<div class="form-group col-md-6">
												<label>Price</label>
												<input type="text" class="form-control" placeholder="INR">
											</div>
											
											<div class="form-group col-md-6">
												<label>Area</label>
												<input type="text" class="form-control">
											</div>
											
											<div class="form-group col-md-6">
												<label>Bedrooms</label>
												<select id="bedrooms" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>
											</div>
											
											<div class="form-group col-md-6">
												<label>Bathrooms</label>
												<select id="bathrooms" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>
											</div>
											
										</div>
									</div>
								</div>
								
								<!-- Gallery -->
								<div class="form-submit">	
									<h3>Gallery</h3>
									<div class="submit-section">
										<div class="row">
										
											<div class="form-group col-md-12">
												<label>Upload Gallery</label>
												<form action="/upload-target" class="dropzone dz-clickable primary-dropzone">
													<div class="dz-default dz-message">
														<i class="ti-gallery"></i>
														<span>Drag & Drop To Change Logo</span>
													</div>
												</form>
											</div>
											
										</div>
									</div>
								</div>
								
								<!-- Location -->
								<div class="form-submit">	
									<h3>Location</h3>
									<div class="submit-section">
										<div class="row">
										
											<div class="form-group col-md-6">
												<label>Address</label>
												<input type="text" class="form-control">
											</div>
											
											<div class="form-group col-md-6">
												<label>City</label>
												<input type="text" class="form-control">
											</div>
											
											<div class="form-group col-md-6">
												<label>State</label>
												<input type="text" class="form-control">
											</div>
											
											<div class="form-group col-md-6">
												<label>Zip Code</label>
												<input type="text" class="form-control">
											</div>
											
										</div>
									</div>
								</div>
								
								<!-- Detailed Information -->
								<div class="form-submit">	
									<h3>Detailed Information</h3>
									<div class="submit-section">
										<div class="row">
										
											<div class="form-group col-md-12">
												<label>Description</label>
												<textarea class="form-control h-120"></textarea>
											</div>
											
											<div class="form-group col-md-4">
												<label>Building Age (optional)</label>
												<select id="bage" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">0 - 5 Years</option>
													<option value="2">0 - 10Years</option>
													<option value="3">0 - 15 Years</option>
													<option value="4">0 - 20 Years</option>
													<option value="5">20+ Years</option>
												</select>
											</div>
											
											<div class="form-group col-md-4">
												<label>Garage (optional)</label>
												<select id="garage" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>
											</div>
											
											<div class="form-group col-md-4">
												<label>Rooms (optional)</label>
												<select id="rooms" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>
											</div>
											
											<div class="form-group col-md-12">
												<label>Other Features (optional)</label>
												<div class="o-features">
													<ul class="no-ul-list third-row">
														<li>
															<input id="a-1" class="checkbox-custom" name="a-1" type="checkbox">
															<label for="a-1" class="checkbox-custom-label">Air Condition</label>
														</li>
														<li>
															<input id="a-2" class="checkbox-custom" name="a-2" type="checkbox">
															<label for="a-2" class="checkbox-custom-label">Bedding</label>
														</li>
														<li>
															<input id="a-3" class="checkbox-custom" name="a-3" type="checkbox">
															<label for="a-3" class="checkbox-custom-label">Heating</label>
														</li>
														<li>
															<input id="a-4" class="checkbox-custom" name="a-4" type="checkbox">
															<label for="a-4" class="checkbox-custom-label">Internet</label>
														</li>
														<li>
															<input id="a-5" class="checkbox-custom" name="a-5" type="checkbox">
															<label for="a-5" class="checkbox-custom-label">Microwave</label>
														</li>
														<li>
															<input id="a-6" class="checkbox-custom" name="a-6" type="checkbox">
															<label for="a-6" class="checkbox-custom-label">Smoking Allow</label>
														</li>
														<li>
															<input id="a-7" class="checkbox-custom" name="a-7" type="checkbox">
															<label for="a-7" class="checkbox-custom-label">Terrace</label>
														</li>
														<li>
															<input id="a-8" class="checkbox-custom" name="a-8" type="checkbox">
															<label for="a-8" class="checkbox-custom-label">Balcony</label>
														</li>
														<li>
															<input id="a-9" class="checkbox-custom" name="a-9" type="checkbox">
															<label for="a-9" class="checkbox-custom-label">Icon</label>
														</li>
														<li>
															<input id="a-10" class="checkbox-custom" name="a-10" type="checkbox">
															<label for="a-10" class="checkbox-custom-label">Wi-Fi</label>
														</li>
														<li>
															<input id="a-11" class="checkbox-custom" name="a-11" type="checkbox">
															<label for="a-11" class="checkbox-custom-label">Beach</label>
														</li>
														<li>
															<input id="a-12" class="checkbox-custom" name="a-12" type="checkbox">
															<label for="a-12" class="checkbox-custom-label">Parking</label>
														</li>
													</ul>
												</div>
											</div>
											
										</div>
									</div>
								</div>
								
								<!-- Contact Information -->
								<div class="form-submit">	
									<h3>Contact Information</h3>
									<div class="submit-section">
										<div class="row">
										
											<div class="form-group col-md-4">
												<label>Name</label>
												<input type="text" class="form-control">
											</div>
											
											<div class="form-group col-md-4">
												<label>Email</label>
												<input type="text" class="form-control">
											</div>
											
											<div class="form-group col-md-4">
												<label>Phone (optional)</label>
												<input type="text" class="form-control">
											</div>
											
										</div>
									</div>
								</div>
								
								<div class="form-group col-lg-12 col-md-12">
									<label>GDPR Agreement *</label>
									<ul class="no-ul-list">
										<li>
											<input id="aj-1" class="checkbox-custom" name="aj-1" type="checkbox">
											<label for="aj-1" class="checkbox-custom-label">I consent to having this website store my submitted information so they can respond to my inquiry.</label>
										</li>
									</ul>
								</div>
								
								<div class="form-group col-lg-12 col-md-12">
									<button class="btn btn-theme-light-2 rounded" type="submit">Submit & Preview</button>
								</div>
											
							</div>
						</div>
						
					</div>
				</div>
						
			</section>
			<!-- ============================ Submit Property End ================================== -->

            @endsection --}}


@extends('layout.base')
@section('content')

	<section class="bg-light pt-3 pb-3">
			
		<div class="container">
			<div class="row">
				
				<!-- Submit Form -->
				<div class="col-md-12 col-md-12">
					@if(session()->has('message'))
						<script type="text/javascript">
							$(document).ready(function() {						
								swal({
									html: true,
									title: "Success!",
									text: '"Thank you choosing GoGoal. We will be happy to give in our best service.<span class="bold-800">( We will contact you within 24 hours)</span>."',
									type: "success",
									confirmButtonText: "OK"
								},function(isConfirm){
									if (isConfirm){
										window.location.href = '{{route("pages.index")}}';
									} 
								});
							});
						</script>
					@endif
				
					<div class="submit-page p-0">
						<div class="form-submit add-property">	
							
							<div class="submit-section">
								<div class="row">
								

									{{-- <div class="col-md-6 bg-img p-0">
										<div class="w-100 h-100 register-left-col">
											<h3 class="text-white">
												Things you can enjoy with GoGoal
											</h3>
											<ul>
												<li>Post your property for free.</li>
												<li>Get 100% assurance with good environment for every room.</li>
												<li>Search rooms all over the country.</li>
											</ul>
										</div>
									</div> --}}
									<div class="col-md-12">
										<div class="p-20">
											@if ($errors->any())
												<div class="alert alert-danger">
													<ul>
														@foreach ($errors->all() as $error)
															<li>{{ $error }}</li>
														@endforeach
													</ul>
												</div>
											@endif
											<h3>Post Property for Free</h3>
											{{-- <form class="post-property"> --}}
											<form action="{{route('pages.post.addproperty')}}" method="post" enctype="multipart/form-data">
												@csrf
												<div class="form-group col-md-12">
													<div class="row">
														<div class="form-group col-md-6">
															<label>
																Full Name
															</label>
															<input type="text" class="form-control" name="name" value="{{Auth::user()->name}}" readonly>
														</div>
														<div class="form-group col-md-6">
															<label>Email</label>
															<input type="email" class="form-control" name="email" value="{{Auth::user()->email}}" readonly>
														</div>
													</div>													
												</div>

												<div class="form-group col-md-12">
													<div class="row">
														<div class="form-group col-md-6">
															<label>Phone No.</label>
															<input type="text" class="form-control" name="phone" value="{{Auth::user()->phone}}" readonly>
														</div>
														<div class="form-group col-md-6">
															<label>Alternate Phone No.</label>
															<input type="text" class="form-control" value="{{ old('alt_phone')}}" name="alt_phone">
														</div>
													</div>
												</div>
	
												<div class="form-group col-md-12">
													<div class="row">
														<div class="form-group col-md-6">
															<label>Country</label>
															<select id="country" class="form-control country add-property-control" name="country_id">
																<option value="">&nbsp;</option>
																@foreach ($countries as $country)
																	<option value="{{$country->id}}">{{$country->name}}</option>
																@endforeach
															</select>
														</div>
														<div class="form-group col-md-6">
															<label>State</label>
															<select id="ptypes" class="form-control state add-property-control" name="state_id">
																<option value="">&nbsp;</option>
															</select>
														</div>
													</div>													
												</div>

												<div class="form-group col-md-12">
													<div class="row">
														<div class="form-group col-md-6">
															<label>City</label>
															<select id="location" class="form-control add-property-control city" name="city_id">
																<option value="">&nbsp;</option>  
																                                    
															</select>
														</div>
														<div class="form-group col-md-6">
															<label>Land Mark</label>
															<input type="text" class="form-control" value="{{old('land_mark')}}" name="land_mark">
														</div>
													</div>													
												</div> 

												<div class="form-group col-md-12">
													<label>Address</label>
													<textarea class="form-control h-auto" name="address" rows="5">{{old('address')}}</textarea>
												</div>

												<div class="property_block_wrap style-2 mb-1">
						
													<div class="property_block_wrap_header mpl-0">
														<a data-bs-toggle="collapse" data-parent="#clSev"  data-bs-target="#clSev" aria-controls="clOne" href="javascript:void(0);" aria-expanded="true" class="collapsed"><h6 class="property_block_title font-size-14">Upload Image</h6></a>
													</div>
													
													<div id="clSev" class="panel-collapse collapse" aria-expanded="true">
														<div class="block-body">
															<div class="form-group col-md-12">
																<div class="row">
																	<div class="form-group col-md-6">
																		<label>Apartment's Front Image</label>
																		<input type="file" name="front_image" class="form-control front_image">
																	</div>
																	<div class="form-group col-md-6">
																		<label>Room Image</label>
																		<input type="file" name="room_image" class="form-control room_image">
																	</div>
																</div>													
															</div> 
														</div>
													</div>
													
												</div>

												<div class="property_block_wrap style-2">
						
													<div class="property_block_wrap_header mpl-0">
														<a data-bs-toggle="collapse" data-parent="#vid"  data-bs-target="#vid" aria-controls="clOne" href="javascript:void(0);" aria-expanded="true" class="collapsed"><h6 class="property_block_title font-size-14">Upload Video</h6></a>
													</div>
													
													<div id="vid" class="panel-collapse collapse" aria-expanded="true">
														<div class="block-body">
															<div class="form-group col-md-6">
																<label>Room Video</label>
																<input type="file" id="pvideo" name="room_video" class="form-control video">
															</div>
														</div>
													</div>
													
												</div>

												<div class="form-group col-lg-12 col-md-12">
													<label>GoGoal Agreement *</label>
													<ul class="no-ul-list">
														<li>
															<input id="aj-1" class="checkbox-custom agree_checkbox" name="agree" type="checkbox">
															<label for="aj-1" class="checkbox-custom-label">
																I agree to GoGoal's T&C, Privacy Policy
															</label>
														</li>
													</ul>
												</div>

												<div class="form-group col-lg-12 col-md-12">
													<button class="btn btn-theme-light-2 rounded w-100 property-submit-btn" type="submit" disabled>Request to Post</button>
												</div>
											</form>
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

	<script>
		$('.agree_checkbox').on('click', function(e){
			var checked_status = this.checked;

			if(checked_status == true){
				$('.property-submit-btn').removeAttr('disabled');
			}else {
				$(".property-submit-btn").attr("disabled", "disabled");
			}
		})
	</script>

@endsection