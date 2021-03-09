<!doctype html>
<html lang="en">
	
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="Responsive Bootstrap4 Dashboard Template">
		<meta name="author" content="ParkerThemes">
		<link rel="shortcut icon" href="{{asset('upload/Logo/logo.png')}}" />

		<!-- Title -->
		<title>Admin Dashboard</title>


		<!-- *************
			************ Common Css Files *************
		************ -->
		<!-- Bootstrap css -->
		<link rel="stylesheet" href="{{asset('admin_assets/css/bootstrap.min.css')}}">
		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="{{asset('admin_assets/fonts/style.css')}}">
		<!-- Main css -->
		<link rel="stylesheet" href="{{asset('admin_assets/css/main.css')}}">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- *************
			************ Vendor Css Files *************
		************ -->
		
		
	</head>

	<body>

		<!-- Loading starts -->
		<!-- <div id="loading-wrapper">
			<div class="spinner-border" role="status">
				<span class="sr-only">Loading...</span>
			</div>
		</div> -->
		<!-- Loading ends -->
				
		<!-- Page wrapper start -->
		<div class="page-wrapper">
			
			<!-- Sidebar wrapper start -->
			@include('admin.layouts.sidebar')

			<!-- Sidebar wrapper end -->

			<!-- Page content start  -->
			<div class="page-content">				
				
				<!-- Main container start -->
				<div class="main-container">

					<!-- Theme switch start -->
					<a href="#" class="theme-switch" target="_blank">Gradient Color Option</a>
					<!-- Theme switch end -->

					<!-- Header start -->
					
                @include('admin.layouts.topheader')

					<!-- Header end -->

					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon">
									<i class="icon-user1"></i>
								</div>
								<div class="sale-num">
							<h2>78</h2>
									<p><b>Total Customer</b></p>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon">
									<i class="icon-user1"></i>
								</div>
								<div class="sale-num">
							<h2>56</h2>
									<p><b>Total MERCHANTS</b></p>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon">
									<i class="icon-user1"></i>
								</div>
								<div class="sale-num">
							<h2>56</h2>
									<p><b>TODAY'S TOTAL</b></p>
								</div>
							</div>
						</div>

						
					</div>
<div class="row gutters">

					

					<!-- Row end -->

					
					
					<!-- Row end -->

				
					<!-- Row start -->
					<!-- Row end -->

				</div>
				<!-- Main container end -->

			</div>
			<!-- Page content end -->

		</div>
		<!-- Page wrapper end -->

		<!--**************************
			**************************
				**************************
							Required JavaScript Files
				**************************
			**************************
		**************************-->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="{{asset('admin_assets/js/jquery.min.js')}}"></script>
		<script src="{{asset('admin_assets/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('admin_assets/js/moment.js')}}"></script>


		<!-- *************
			************ Vendor Js Files *************
		************* -->
		<!-- Slimscroll JS -->
		<script src="{{asset('admin_assets/vendor/slimscroll/slimscroll.min.js')}}"></script>
		<script src="{{asset('admin_assets/vendor/slimscroll/custom-scrollbar.js')}}"></script>

		<!-- Polyfill JS -->
		<script src="{{asset('admin_assets/vendor/polyfill/polyfill.min.js')}}"></script>

		<!-- Apex Charts -->
		<script src="{{asset('admin_assets/vendor/apex/apexcharts.min.js')}}"></script>
		<script src="{{asset('admin_assets/vendor/apex/custom/home/lineRevenueGradientGraph.js')}}"></script>
		<script src="{{asset('admin_assets/vendor/apex/custom/home/radialTasks.js')}}"></script>
		<script src="{{asset('admin_assets/vendor/apex/custom/home/line-graph1.js')}}"></script>
		<script src="{{asset('admin_assets/vendor/apex/custom/home/line-graph2.js')}}"></script>
		
		<!-- Peity Charts -->
		<script src="{{asset('admin_assets/vendor/peity/peity.min.js')}}"></script>
		<script src="{{asset('admin_assets/vendor/peity/custom-peity.js')}}"></script>
		
		
		<!-- Main JS -->
		<script src="{{asset('admin_assets/js/main.js')}}"></script>

	</body>
	 <script>


        function closing() {
            var memberId = "";
          
            $.ajax({

            	url: '{{ url('dailyclosing') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', member_id:memberId},
               
                success: function (data) {
                    
                    alert(data);
                }
            });
        }
  
    </script> 


</html>