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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
		
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

		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

		<script>
			$('.country').select2({}).on("select2:select", function (e) {
				var country_id = $(this).val();
				$('.state').empty();
				$('.state').append(`<option value="">&nbsp;</option>`);
				$.ajax({
					url: "{{route('admin.get.states')}}",
					type: 'get',
					dataType: 'json',
					data: {country_id: country_id},
					success: function(res){
						res.forEach(element => {
							var states = `<option value="`+element.id+`" >`+element.zone_name+`</option>`
							$('.state').append(states)
						});
						
					}
				});
			});

			$('.state').select2({}).on("select2:select", function (e) {
				// alert('ok')
				var state_id = $(this).val();
				$('.city').empty();
				$('.city').append(`<option value="">&nbsp;</option>`);
				$.ajax({
					url: "{{route('admin.get.cities')}}",
					type: 'get',
					dataType: 'json',
					data: {state_id: state_id},
					success: function(res){
						console.log(res)
						
						res.forEach(element => {
							var city = `<option value="`+element.id+`">`+element.city_name+`</option>`;	
							$('.city').append(city);
						})
					}
				});
			});

			$('.header-zone-search').on('click', function(){
				console.log($('.header-zone-search').text())
				// $('.search-state').val($('.header-zone-search-value').val());
				var value = $('.header-zone-search-value').val();
				$(".state").select2().select2('val',value);
				
			})

			function setValue(city, state){
				console.log(city, state)
				$(".state").select2().select2('val',state);
				$(".city").select2().select2('val',city);
			}

			$('.like_property').on('click', function(){
				

				

				var property_id = $('.like_property').data('property-id');
				$.ajax({
					url: "{{route('pages.likeProperty')}}",
					type: 'post',
					dataType: 'json',
					data: {
						"_token": "{{ csrf_token() }}",
						"property_id": property_id,
						'is_liked' : $('.like_property').data('is-liked')
					},
					success: function(res){
						console.log(res)
						$('.like_property').css('background-color', '#E95F5F');
						// swal({
						// 	title: "Success!",
						// 	text: 'You have successfully liked this property. You can also access this in near future',
						// 	type: "success",
						// 	confirmButtonText: "OK"
						// }).then(function() {
						// 	location.reload()
						// });
						swal({
							title: "Success!",
							text: "You have successfully liked this property. You can also access this in near future",
							type: "success",
							// showCancelButton: true,
							confirmButtonColor: '#DD6B55',
							confirmButtonText: 'Ok',
							// cancelButtonText: "No, cancel it!",
							closeOnConfirm: false,
							closeOnCancel: false
						},
						function(isConfirm){

						if (isConfirm){
								// swal("Shortlisted!", "Candidates are successfully shortlisted!", "success");

								location.reload()
							} else {
								swal("Cancelled", "Your imaginary file is safe :)", "error"); 
							}
						});
						
					}
				});
			});

			$('.dislike_property').on('click', function(){
				var property_id = $('.dislike_property').data('property-id');
				$.ajax({
					url: "{{route('pages.disLikeProperty')}}",
					type: 'post',
					dataType: 'json',
					data: {
						"_token": "{{ csrf_token() }}",
						"property_id": property_id,
						'is_liked' : $('.dislike_property').data('is-liked')
					},
					success: function(res){
						$('.dislike_property').css('background-color', '#0000004d');
						swal({
							title: "Success!",
							text: "You have successfully dislike this property.",
							type: "success",
							// showCancelButton: true,
							confirmButtonColor: '#DD6B55',
							confirmButtonText: 'Ok',
							// cancelButtonText: "No, cancel it!",
							closeOnConfirm: false,
							closeOnCancel: false
						},
						function(isConfirm){

						if (isConfirm){
								// swal("Shortlisted!", "Candidates are successfully shortlisted!", "success");

								location.reload()
							} else {
								swal("Cancelled", "Your imaginary file is safe :)", "error"); 
							}
						});
					}
				});
			});

			$('.apply-rent-btn').on('click', function(){
				var data = $('.apply-rent-form').serialize();
				const searchParams = new URLSearchParams(data);
				data = Object.fromEntries(searchParams);
				var desc = '"Thank you choosing GoGoal. We will be happy to give in our best service.<span class="bold-800">( We will contact you within 24 hours)</span>."'

				$.ajax({
					url: '{{route("pages.applyForRent")}}',
					type: 'post',
					dataType: 'json',
					data: {
						"_token": "{{ csrf_token() }}",
						data
					},
					success: function(res){
						if(res){
							swal({
								html: true,
								title: "Success!",
								text: desc,
								type: "success",
								confirmButtonText: "OK"
							},function(isConfirm){
								if (isConfirm){
									location.reload();
								} 
							});
						}
					}
				});				

			});

			$('.video').on('change', function(e){
				getVideoDuration = async (f) =>{
					const video = await loadVideo(e.currentTarget.files[0])
				console.log(video.duration)
				}
				
			});

			var myVideos = [];

			document.getElementById('pvideo').onchange = setFileInfo;

			function setFileInfo() {
				var files = this.files;
				myVideos = [];
				myVideos.push(files[0]);
				var video = document.createElement('video');
				video.preload = 'metadata';

				video.onloadedmetadata = function() {
					window.URL.revokeObjectURL(video.src);
					var duration = video.duration;
					myVideos[myVideos.length - 1].duration = duration;
					updateInfos();
				}

				video.src = URL.createObjectURL(files[0]);;
			}
			function updateInfos() {
				var infos = '';
				for (var i = 0; i < myVideos.length; i++) {
					infos += myVideos[i].duration;
				}
				console.log(infos)

				if(infos > 30){					
					swal({
						html: true,
						title: "",
						text: 'Please upload a 30sec video',
						type: "error",
						confirmButtonText: "OK"
					},function(isConfirm){
						if(isConfirm){
							$('#pvideo').val('');
						}
					});
				}
			}

			$('.property-submit-btn').on('click', function(event){
				// event.preventDefault();
				console.log('ok')
				var front_image = $('.front_image').prop('files')[0];
				var room_image = $('.room_image').prop('files')[0];
				var data = $('.post-property').serialize();
				console.log(data)
    			// var formData = new FormData($('.post-property'));
				// data.push('file', file_data);
				// console.log(data)

				const searchParams = new URLSearchParams(data);
				data = Object.fromEntries(searchParams);
				console.log(data)
				data.front_image = front_image;
				data.room_image = room_image;
				console.log(data)
				$.ajax({
					url: '{{route("pages.post.addproperty")}}',
					type: 'post',
					dataType: 'json',
					data: {
						"_token": "{{ csrf_token() }}",
						data
					},
					success: function(res){
						console.log(res)
					}
				});
			})

		</script>
		
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->
	</body>
</html>