<!DOCTYPE html>
<html lang="eng">
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
        <title>GoGoal Rooms & Reviews</title>	


		<link rel="icon" type="image/x-icon" href="{{asset('fav.png')}}">
		
        <!-- Custom CSS -->
        <link href="{{asset('frontend/assets/css/styles.css')}}" rel="stylesheet">
		
		<!-- Custom Color Option -->
		<link href="{{asset('frontend/assets/css/colors.css')}}" rel="stylesheet">
		
    </head>
    <body class="blue-skin">
	
        <!-- ============================================================== -->
       <!-- Preloader - style you can find in spinners.css -->
       <!-- ============================================================== -->
       <div id="preloader"><div class="preloader"><span></span><span></span></div></div>

        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
            @include('component.header')
            @yield('content')
            @include('component.footer')
        </div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->

       

        <!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
		<script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
		<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('frontend/assets/js/rangeslider.js')}}"></script>
		<script src="{{asset('frontend/assets/js/select2.min.js')}}"></script>
		<script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('frontend/assets/js/slick.js')}}"></script>
		<script src="{{asset('frontend/assets/js/slider-bg.js')}}"></script>
		<script src="{{asset('frontend/assets/js/lightbox.js')}}"></script> 
		<script src="{{asset('frontend/assets/js/imagesloaded.js')}}"></script>
		 
		<script src="{{asset('frontend/assets/js/custom.js')}}"></script>

		<script>
			$('.country').select2({}).on("select2:select", function (e) {
				var country_id = $(this).val();
				$.ajax({
					url: "{{route('admin.get.states')}}",
					type: 'get',
					dataType: 'json',
					data: {country_id: country_id},
					success: function(res){
						console.log(res)
						res.forEach(element => {
							var states = `<option value="`+element.id+`">`+element.zone_name+`</option>`
							$('.state').append(states)
						});
						
					}
				});
			});

			$('.state').select2({}).on("select2:select", function (e) {
				// alert('ok')
				var state_id = $(this).val();
				$.ajax({
					url: "{{route('admin.get.cities')}}",
					type: 'get',
					dataType: 'json',
					data: {state_id: state_id},
					success: function(res){
						console.log(res)
						res.forEach(element => {
							var city = `<option value="`+element.id+`">`+element.city_name+`</option>`
							$('.city').append(city);
						})
					}
				});
			})

		</script>
		
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->
	</body>
</html>