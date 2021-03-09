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
		<title>ISHOP </title>

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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>

	<body>
         <?php  use \App\Http\Controllers\adminController;
         use  App\ProductOrder;
         ?>
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
					<a href="http://bootstrap.gallery/goldfinch/design1/index.html" class="theme-switch" target="_blank">Gradient Color Option</a>
					<!-- Theme switch end -->

					<!-- Header start -->
					 @include('vendor.layouts.topheader')
					<!-- Header end -->

					<!-- Page header start -->
					<div class="page-header">

						<!-- Breadcrumb start -->
						<ol class="breadcrumb">
							<li class="breadcrumb-item">Order Details</li>
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
						


					</div>
					<!-- Page header end -->
					
					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						
							<div class="table-container">
								
								<div class="table-responsive">
									<table id="copy-print-csv" class="table custom-table">
										<thead>
											<tr>
											  <th>Order id</th>
											  <th>Customer Details</th>
											  <th>Tracking Status</th>
											  <th>Tracking Status Update</th>
											  <th>Check Invoice</th>
											  
											</tr>
										</thead>
										<tbody>

											@foreach($orders  as $order) 
											<?php  
										
											  
											$orders=adminController::orderdetail($order->id);?>


											
						                    <tr> 
												
											
											  <td>{{$order->orderid }} </td>
											  <td>
											  	{{$order->customer_id}}
											  	<a href="{{url('/vendor/vieworderdetail/'.$order->id)}}" type="button" class="btn btn-info" title="View {{$order->fullname}}'s Details" data-toggle="modal" data-target=".bd-edit-modal-lg-view{{$order->id }}" ><i class="fa fa-sign-in"></i></a>

											  </td>
											   <td>
										<?php	  $status=$order->status; ?>
											
												<?php
											  if($status=='1'){$statuss='<b style="color:orange">New Order Request</b>';} 
											  if($status=='2'){$statuss='<b style="color:brown">Process of Packing</b>';}
											  if($status=='3'){$statuss='<b style="color:lightblue">Process for delivery</b>';}
											  if($status=='4'){$statuss='<b style="color:blue">Delivered</b>';}  
											  if($status=='5'){$statuss='<b style="color:red">Cancelled</b>';} 
											  if($status=='6'){$statuss='<b style="color:green">Return Request</b>';} ?>
											  {{$order->name }} --<?php  echo $statuss;?><br>
										
											</td>
											  	
											
											   <td>
										<?php	  $status=$order->status; ?>
											
												<?php
											  if($status=='1'){$statuss='<b style="color:orange">New Order Request</b>';} 
											  if($status=='2'){$statuss='<b style="color:brown">Process of Packing</b>';}
											  if($status=='3'){$statuss='<b style="color:lightblue">Process for delivery</b>';}
											  if($status=='4'){$statuss='<b style="color:blue">Delivered</b>';}  
											  if($status=='5'){$statuss='<b style="color:red">Cancelled</b>';}  ?>
											   <?php  echo $statuss;?><br>
										
											</td>
											  <td><a href="{{url('vendor/checkinvoice/'.$order->id)}}" class="btn btn-success">Check Invoice</a></td>
											  
											
											  
											</tr>

											<!-- View Form Start -->
											<form action='' method="post" enctype="multipart/form-data">{{csrf_field()}}
									<div class="modal fade bd-edit-modal-lg-view{{$order->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="myLargeModalLabel">Customer Details</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-body">
									
									<div class="row gutters">
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

											<input type="hidden" name="id" value="{{$order->id }}">
							</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
											<div class="form-group">
												<label for="inputName">Customer's Name</label>
												<input type="text" name="catname" class="form-control" id="inputName" placeholder="Category name" readonly value="{{$order->fullname}}">
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
											<div class="form-group">
												<label for="inputImage">Customer's Email</label>
												
                                           <input type="text" name="catname" class="form-control" id="inputName" placeholder="Category name" readonly value="{{$order->email}}">

											</div>
										</div>

										<div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-6">
											<div class="form-group">
												<label for="inputEmail">Customer's Phone</label>
												<input type="number" name="order" class="form-control" id="inputName" placeholder="Order"readonly value="{{$order->phone_no}}">
											</div>
										</div>

										

										<div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-6">
											<label for="inputName">City</label>
											<input type="text" name="category" class="form-control" id="inputName" placeholder="Category" value="{{$order->city}}">
										</div>

										<div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-6">
											<label for="inputName">Customer's Address 1</label>
											<input type="text" name="category" class="form-control" id="inputName" placeholder="Category" value="{{$order->address_line_1}}">
										</div>

										<div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-6">
											<label for="inputName">Customer's Address 2</label>
											<input type="text" name="category" class="form-control" id="inputName" placeholder="Category" value="{{$order->address_line_2}}">
										</div>
										<div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-6">
											<label for="inputName">State</label>
											<input type="text" name="category" class="form-control" id="inputName" placeholder="Category" value="{{$order->state}}">
										</div>
										<div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-6">
											<label for="inputName">Pincode</label>
											<input type="text" name="category" class="form-control" id="inputName" placeholder="Category" value="{{$order->pincode}}">
										</div>

										
										
					
						                   
						
									</div>

								</div>
							</div>
						</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													<input type="submit" class="btn btn-primary" value="submit">
												</div>
											</div>
									  </div>

									</div>
								</form>
								<!-- View Form End -->
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