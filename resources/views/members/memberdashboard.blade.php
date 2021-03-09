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
		<title>Tow True Way</title>


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
			<?php  use \App\Http\Controllers\membercontroller; 


 ?>

			
			<!-- Sidebar wrapper start -->
			@include('members.layouts.sidebar')

			<!-- Sidebar wrapper end -->

			<!-- Page content start  -->
			<div class="page-content">				
				
				<!-- Main container start -->
				<div class="main-container">

					<!-- Theme switch start -->
					<a href="#" class="theme-switch" target="_blank">Gradient Color Option</a>
					<!-- Theme switch end -->

					<!-- Header start -->
					
                @include('members.layouts.topheader')

					<!-- Header end -->

					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon">
									<i class="icon-user1"></i>
								</div>
								<div class="sale-num">
									<h2>
 <?php $randomsubsss=membercontroller::memberdetails(); ?>
 @foreach ($randomsubsss as $ranubsss) 

 <?php  $memberid=$ranubsss->m_id;

  	
   $i=0; $randomsubs=membercontroller::getdownlinecount($memberid); echo $randomsubs; ?>@endforeach</h2>
									<p>Total Downline</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon">
									<i class="icon-user-check"></i>
								</div>
								<div class="sale-num">
									<h2>
 <?php $i='totalactivemember'; $randomsubs=membercontroller::getactivedownlinecount($memberid); echo $randomsubs; ?></h2>
									<p> Active Downline</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon">
									<i class="icon-user-x"></i>
								</div>
								<div class="sale-num">
									<h2>
 <?php $i='totalinactivemember'; $randomsubs=membercontroller::getinactivedownlinecount($memberid); echo $randomsubs; ?></h2>
									<p> Inactive Downline</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon">
									<i class="icon-user1"></i>
								</div>
								<div class="sale-num">
									<h2>
 <?php $i='totalinactivemember'; $randomsubs=membercontroller::DirectDownlineCount(); echo $randomsubs; ?></h2>
									<p> Direct Downline</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon">
									<i class="icon-activity"></i>
								</div>
								<div class="sale-num">
									
 
						<h2><?php $i='pairincome'; $randomsubs=membercontroller::Memberssdashboarddetails($i); echo $randomsubs; ?></h2>
									<p>Pair Income</p>
								</div>
							</div>
						</div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon">
									<i class="icon-activity"></i>
								</div>
								<div class="sale-num">
									
 
						<h2><?php $i='repurchase'; $randomsubs=membercontroller::Memberssdashboarddetails($i); echo $randomsubs; ?></h2>
									<p>Repurchase</p>
								</div>
							</div>
						</div>
                                            
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon">
									<i class="icon-activity"></i>
								</div>
								<div class="sale-num">
									
 
						<h2><?php $i='leftrepurchase'; $randomsubs=membercontroller::Memberssdashboarddetails($i); echo $randomsubs; ?></h2>
									<p>Left Repurchase</p>
								</div>
							</div>
						</div>
                                            
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon">
									<i class="icon-activity"></i>
								</div>
								<div class="sale-num">
									
 
						<h2><?php $i='rightrepurchase'; $randomsubs=membercontroller::Memberssdashboarddetails($i); echo $randomsubs; ?></h2>
									<p>Right Repurchase</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon">
									<i class="icon-activity"></i>
								</div>
								<div class="sale-num">
									<h2><?php $i='ewallet'; $randomsubs=membercontroller::Memberssdashboarddetails($i); echo $randomsubs; ?></h2>
									<p>E-Wallet</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon">
									<i class="icon-activity"></i>
								</div>
								<div class="sale-num">
									<h2><?php $i='fwallet'; $randomsubs=membercontroller::Memberssdashboarddetails($i); echo $randomsubs; ?></h2>
									<p>F-wallet</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon">
									<i class="icon-activity"></i>
								</div>
								<div class="sale-num">
									<h2><?php $i='photowallet'; $randomsubs=membercontroller::Memberssdashboarddetails($i); echo $randomsubs; ?></h2>
									<p>Photo wallet</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon">
									<i class="icon-activity"></i>
								</div>
								<div class="sale-num">
									<h2><?php $i='wallet'; $randomsubs=membercontroller::Memberssdashboarddetails($i); echo $randomsubs; ?></h2>
									<p>Wallet</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon">
									<i class="icon-activity"></i>
								</div>
								<div class="sale-num">
									<h2><?php $i='repurchasewallet'; $randomsubs=membercontroller::Memberssdashboarddetails($i); echo $randomsubs; ?></h2>
									<p>Repurchase Wallet</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon">
									<i class="icon-activity"></i>
								</div>
								<div class="sale-num">
									<h2><?php $i='activationwallet'; $randomsubs=membercontroller::Memberssdashboarddetails($i); echo $randomsubs; ?></h2>
									<p>Activation  Wallet</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="info-stats2">
								<div class="info-icon">
									<i class="icon-activity"></i>
								</div>
								<div class="sale-num">
									<h2><?php $i='upgradewallet'; $randomsubs=membercontroller::Memberssdashboarddetails($i); echo $randomsubs; ?></h2>
									<p>Upgradation Wallet</p>
								</div>
							</div>
						</div>
						
					</div>

					<!-- Row end -->

					<!-- Row start -->

					<!-- Row end -->

					<!-- Row start -->

					<!-- Row end -->

					<!-- Row start -->

					<!-- Row end -->
					
					<!-- Row start -->
					
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