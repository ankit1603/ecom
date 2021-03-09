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
		<title>Vendor Dashboard</title>


		<!-- *************
			************ Common Css Files *************
		************ -->
		<!-- Bootstrap css -->
		<link rel="stylesheet" href="{{asset('admin_assets/css/bootstrap.min.css')}}">
		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="{{asset('admin_assets/fonts/style.css')}}">
		<!-- Main css -->
		<link rel="stylesheet" href="{{asset('admin_assets/css/main.css')}}">

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
			@include('vendor.layouts.sidebar')

			<!-- Sidebar wrapper end -->

			<!-- Page content start  -->
			<div class="page-content">				
				
				<!-- Main container start -->
				<div class="main-container">

					<!-- Theme switch start -->
					<a href="#" class="theme-switch" target="_blank">Gradient Color Option</a>
					<!-- Theme switch end -->

					<!-- Header start -->
					
                @include('vendor.layouts.topheader')

					<!-- Header end -->

					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon">
									<i class="icon-eye1"></i>
								</div>
								<div class="sale-num">
									<h2>5289</h2>
									<p>Visitors</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon">
									<i class="icon-shopping-cart1"></i>
								</div>
								<div class="sale-num">
									<h2>3765</h2>
									<p>Orders</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon">
									<i class="icon-shopping-bag1"></i>
								</div>
								<div class="sale-num">
									<h2>8423</h2>
									<p>Sales</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon">
									<i class="icon-activity"></i>
								</div>
								<div class="sale-num">
									<h2>2619</h2>
									<p>Expenses</p>
								</div>
							</div>
						</div>
					</div>

					<!-- Row end -->

				

					
					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Order History</div>
								</div>
								<div class="card-body">
									<div class="customScroll5">
										<ul class="recent-orders">
											<li>
												<div class="order-img">
													<img src="{{asset('admin_assets/img/orders/order5.png')}}" alt="Food">
													<span class="badge badge-success">Delivered</span>
												</div>
												<div class="order-details">
													<h5 class="order-title">The Original Cake</h5>
													<p class="order-desc">Wedding cake with macarons.</p>
													<span class="order-date">21 mins ago</span>
												</div>
											</li>
											<li>
												<div class="order-img">
													<img src="{{asset('admin_assets/img/orders/order6.png')}}" alt="Food">
													<span class="badge badge-danger">On Hold</span>
												</div>
												<div class="order-details">
													<h5 class="order-title">Classic Sandwich</h5>
													<p class="order-desc">Creamy Sandwich with pie.</p>
													<span class="order-date">32 mins ago</span>
												</div>
											</li>
											<li>
												<div class="order-img">
													<img src="{{asset('admin_assets/img/orders/order3.png')}}" alt="Food">
													<span class="badge badge-danger">On Hold</span>
												</div>
												<div class="order-details">
													<h5 class="order-title">Strawberry Pecan</h5>
													<p class="order-desc">Homemade cheese Pecan with berries.</p>
													<span class="order-date">15 mins ago</span>
												</div>
											</li>
											<li>
												<div class="order-img">
													<img src="{{asset('admin_assets/img/orders/order1.png')}}" alt="Food">
													<span class="badge badge-info">Processing</span>
												</div>
												<div class="order-details">
													<h5 class="order-title">Double Stacker</h5>
													<p class="order-desc">Homemade cheese cake with berries.</p>
													<span class="order-date">10 mins ago</span>
												</div>
											</li>
											<li>
												<div class="order-img">
													<img src="{{asset('admin_assets/img/orders/order4.png')}}" alt="Food">
													<span class="badge badge-success">Delivered</span>
												</div>
												<div class="order-details">
													<h5 class="order-title">Veggie Burger</h5>
													<p class="order-desc">Homemade cheese cake with berries.</p>
													<span class="order-date">17 mins ago</span>
												</div>
											</li>
											
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Top Vendors</div>
								</div>
								<div class="card-body">
									<div class="customScroll5">
										<div class="timeline-activity">
											<div class="activity-log">
												<p class="log-name">Mr. William<small class="log-time">- 9 mins ago</small></p>
												<div class="log-details">DiamondZone dashboard has been created<span class="text-success ml-1">#New</span></div>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->
					
					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Sales</div>
								</div>
								<div class="card-body">
									<a href="#" class="graph-notify" data-toggle="tooltip" data-placement="left" title="" data-original-title="5 new orders placed">
										<i class="icon-alert-circle"></i>
									</a>
									<div id="lineGraph1"></div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Income</div>
								</div>
								<div class="card-body">
									<a href="#" class="graph-notify" data-toggle="tooltip" data-placement="left" title="" data-original-title="5 payment errors">
										<i class="icon-alert-circle"></i>
									</a>
									<div id="lineGraph2"></div>
								</div>
							</div>
						</div>
					</div>
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


</html>