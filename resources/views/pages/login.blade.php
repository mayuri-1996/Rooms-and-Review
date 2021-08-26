@extends('layout.base')
@section('content')

	<section class="bg-light pt-3 pb-3">
			
		<div class="container">
			<div class="row">
				
				<!-- Submit Form -->
				<div class="col-md-12 col-md-12">
				
					<div class="submit-page p-0">
						<div class="form-submit">	
							
							<div class="submit-section">
								<div class="row">
									<div class="col-md-6 bg-img p-0">
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
									</div>
									<div class="col-md-6">
										<div class="p-20">
											<h3>Login with GoGoal</h3>
											<form action="{{route('buyer.auth.login')}}" method="post">
												@csrf
												<div class="form-group col-md-12">
													<label>Email</label>
													<input type="email" class="form-control" name="email">
												</div>
												<div class="form-group col-md-12">
													<label>Password</label>
													<input type="password" class="form-control" name="password">
												</div>
												<div class="form-group col-lg-12 col-md-12">
													<button class="btn btn-theme-light-2 rounded w-100 register-btn" type="submit">Login</button>
												</div>
											</form>
											
											<div class="form-group col-lg-12 col-md-12 auth-bottom-div">
												<label>New to GoGoal?
													<a href="{{route('pages.signin')}}" title="Login Now">Register Now</a>
												</label>
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

@endsection