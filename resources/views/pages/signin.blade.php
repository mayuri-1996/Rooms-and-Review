@extends('layout.base')
@section('content')

<!-- Log In Modal -->
       <!-- <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
					<div class="modal-content" id="registermodal">
						<span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
						<div class="modal-body">
							<h4 class="modal-header-title">Log In</h4>
							<div class="login-form">
								<form>
								
									<div class="form-group">
										<label>User Name</label>
										<div class="input-with-icon">
											<input type="text" class="form-control" placeholder="Username">
											<i class="ti-user"></i>
										</div>
									</div>
									
									<div class="form-group">
										<label>Password</label>
										<div class="input-with-icon">
											<input type="password" class="form-control" placeholder="*******">
											<i class="ti-unlock"></i>
										</div>
									</div>
									
									<div class="form-group">
										<button type="submit" class="btn btn-md full-width btn-theme-light-2 rounded">Login</button>
									</div>
								
								</form>
							</div>
							<div class="modal-divider"><span>Or login via</span></div>
							<div class="social-login mb-3">
								<ul>
									<li><a href="#" class="btn connect-fb"><i class="ti-facebook"></i>Facebook</a></li>
									<li><a href="#" class="btn connect-google"><i class="ti-google"></i>Google+</a></li>
								</ul>
							</div>
							<div class="text-center">
								<p class="mt-5"><a href="#" class="link">Forgot password?</a></p>
							</div>
						</div>
					</div>
				</div>
       </div> -->

<!-- ============================ Submit Property Start ================================== -->
<section class="bg-light">
			
			<div class="container">
				<div class="row">
					
					<!-- Submit Form -->
					<div class="col-md-12 col-md-12">
					
						<div class="submit-page">
						
							<!-- Gallery -->
							<div class="form-submit middle-logo">	
								<h1>Sign In</h3>
								<!-- <div class="submit-section">
									<div class="form-row">
									
										<div class="form-group col-md-12">
											<form action="/upload-target" class="dropzone profile-logo dz-clickable primary-dropzone">
												<div class="dz-default dz-message">
													<i class="ti-gallery"></i>
												</div>
											</form>
										</div>
										
									</div>
								</div> -->
							</div>
							
							<!-- Basic Information -->
							<div class="form-submit">	
								<h3>Basic Information</h3>
								<div class="submit-section">
									<div class="row">
									
										<div class="form-group col-md-12">
											<label>Full Name<span class="tip-topdata" data-tip="Property Title"><i class="ti-help"></i></span></label>
											<input type="text" class="form-control">
										</div>
										
										<div class="form-group col-md-6">
											<label>Designation</label>
											<input type="text" class="form-control">
										</div>
										
										<div class="form-group col-md-6">
											<label>Phone</label>
											<input type="text" class="form-control">
										</div>
										
										<div class="form-group col-md-6">
											<label>Email</label>
											<input type="text" class="form-control">
										</div>
										
										<div class="form-group col-md-6">
											<label>Landline</label>
											<input type="text" class="form-control">
										</div>
										
										<div class="form-group col-md-12">
											<label>Description</label>
											<textarea class="form-control h-120"></textarea>
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
											<label>Address 2</label>
											<input type="text" class="form-control">
										</div>
										
										<div class="form-group col-md-6">
											<label>Country</label>
											<input type="text" class="form-control">
										</div>
										
										<div class="form-group col-md-6">
											<label>State</label>
											<input type="text" class="form-control">
										</div>
										
										<div class="form-group col-md-6">
											<label>City</label>
											<input type="text" class="form-control">
										</div>
										
										<div class="form-group col-md-6">
											<label>Zip Code</label>
											<input type="text" class="form-control">
										</div>
										
									</div>
								</div>
							</div>
							
							<!-- Contact Information -->
							<div class="form-submit">	
								<h3>Social Accounts</h3>
								<div class="submit-section">
									<div class="row">
									
										<div class="form-group col-md-4">
											<label>Facebook</label>
											<input type="text" class="form-control">
										</div>
										
										<div class="form-group col-md-4">
											<label>Twitter</label>
											<input type="text" class="form-control">
										</div>
										
										<div class="form-group col-md-4">
											<label>Linkedin</label>
											<input type="text" class="form-control">
										</div>
										
										<div class="form-group col-md-4">
											<label>Google Plus</label>
											<input type="text" class="form-control">
										</div>
										
										<div class="form-group col-md-4">
											<label>Instagram</label>
											<input type="text" class="form-control">
										</div>
										
										<div class="form-group col-md-4">
											<label>Tumbler</label>
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
		

			<!-- End Modal --> 
@endsection