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
		<title>Trueway </title>

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
		
		<!-- Data Tables -->

		<link rel="stylesheet" href="{{asset('admin_assets/vendor/datatables/dataTables.bs4.css')}}" />
		<link rel="stylesheet" href="{{asset('admin_assets/vendor/datatables/dataTables.bs4-custom.css')}}" />
		<link href="{{asset('admin_assets/vendor/datatables/buttons.bs.css')}}" rel="stylesheet" />

	</head>

	<body>
<?php  use \App\Http\Controllers\adminController; 
use \App\Http\Controllers\MerchantController; 
    use  App\ProductOrder; ?>
    
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
					<a href="http://bootstrap.gallery/goldfinch/design1/index.html" class="theme-switch" target="_blank">Gradient Color Option</a>
					<!-- Theme switch end -->

					<!-- Header start -->
					 @include('admin.layouts.topheader')
					<!-- Header end -->

					<!-- Page header start -->
					<div class="page-header">

						<!-- Breadcrumb start -->
						<ol class="breadcrumb">
							<li class="breadcrumb-item">Data Tables</li>
						</ol>
						<!-- Breadcrumb end -->

						<!-- App actions start -->
						<!-- <ul class="app-actions">
							<li>
								<a href="#">
									<i class="icon-export"></i> Export
								</a>
							</li>
						</ul> -->
						<!-- App actions end -->
						<ul class="app-actions">
							<li>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add Category Group</button>


						<form action="{{url('/admin/add-category')}}" method="post">{{csrf_field()}}
									<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="myLargeModalLabel">Create Coupan </h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-body">
									
									<div class="row gutters">
										<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
											<div class="form-group">
												<label for="inputName">Coupan Name</label>
												<input type="text" name="catname" class="form-control" id="inputName" placeholder="Enter full name">
											</div>
										</div>
										<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
											<div class="form-group">
												<label for="inputEmail">Coupan Code</label>
												<input type="number" name="order" class="form-control" id="inputName" placeholder="Enter email">
											</div>
										</div>
                                        <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
											<label for="inputName">Status</label>
											<div class="form-group">
												<select class="form-control form-control-lg" name="status">
													<option value="1">Active</option>
													<option value="0">Inactive</option>
												</select>
											</div>
										</div>
										
									
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							

									<div class="form-group">
										<label for="exampleFormControlTextarea1">Description</label>
										<textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
									</div>
									
								
							
						</div>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
											<div class="form-group">
												<label for="inputName">Start Date</label>
												<input type="date" name="icon" class="form-control iconpicker-input" id="inputName" placeholder="Enter full name">
											</div>
										</div>
										<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
											<div class="form-group">
												<label for="disabledInput">End Date</label>
												<input type="date" name="slug" class="form-control" id="inputName" placeholder="Enter full name">
											</div>
										</div>
									
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							

									
						</div>

									</div>

								</div>
							</div>
						</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													<input type="submit" class="btn btn-primary">
												</div>
											</div>
									  </div>

									</div>
								</form>
								</li>
						</ul>


					</div>
					<!-- Page header end -->
					
					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						
							<div class="table-container">
								<div class="t-header">No Search Field</div>
								<div class="table-responsive">
									<table id="copy-print-csv" class="table custom-table">
										<thead>
											<tr>
											  <th>id</th>
											  <th>Coupan Name</th>
											  <th>Coupan code</th>
											  <th>Start Date Or End Date</th>
											  <th>Create Date</th>
											  <th>Offer</th>
											</tr>
										</thead>
										<tbody>
											@foreach($neworder  as $ordertab) 
											<tr> 
											  <td>{{$ordertab->id }} </td>
											  <td> {{$ordertab->name }}</td>
											  <td>{{$ordertab->coupancode }}</td>
											  <td>{{$ordertab->startdate }}<br>{{$ordertab->enddate}}</td>
											  <td>{{$ordertab->createdon }}
											</td>
											  <td>{{$ordertab->offer }}
                                                </td>
                                                </tr>
											
										 @endforeach
										</tbody>
						    	</table>
								</div>
							</div>

							

							

						
							

							

							

						</div>
					</div>
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
		<script src="{{asset('admin_assets/admin_assets/js/moment.js')}}"></script>


		<!-- *************
			************ Vendor Js Files *************
		************* -->
		<!-- Slimscroll JS -->
		<script src="{{asset('admin_assets/vendor/slimscroll/slimscroll.min.js')}}"></script>
		<script src="{{asset('admin_assets/vendor/slimscroll/custom-scrollbar.js')}}"></script>
		
		<!-- Data Tables -->
		<script src="{{asset('admin_assets/vendor/datatables/dataTables.min.js')}}"></script>
		<script src="{{asset('admin_assets/vendor/datatables/dataTables.bootstrap.min.js')}}"></script>
		
		<!-- Custom Data tables -->
		<script src="{{asset('admin_assets/vendor/datatables/custom/custom-datatables.js')}}"></script>
		<script src="{{asset('admin_assets/vendor/datatables/custom/fixedHeader.js')}}"></script>

		<!-- Download / CSV / Copy / Print -->
		<script src="{{asset('admin_assets/vendor/datatables/buttons.min.js')}}"></script>
		<script src="{{asset('admin_assets/vendor/datatables/jszip.min.js')}}"></script>
		<script src="{{asset('admin_assets/cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js')}}"></script>
		<script src="{{asset('admin_assets/vendor/datatables/vfs_fonts.js')}}"></script>
		<script src="{{asset('admin_assets/vendor/datatables/html5.min.js')}}"></script>
		<script src="{{asset('admin_assets/vendor/datatables/buttons.print.min.js')}}"></script>

		<!-- Main JS -->
		<script src="{{asset('admin_assets/js/main.js')}}"></script>

	</body>


</html>