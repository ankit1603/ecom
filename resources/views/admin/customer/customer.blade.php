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
		<title>ISHOP</title>

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
		<link rel="stylesheet" href="{{asset('admin_assets/vendor/summernote/summernote-bs4.css')}}" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>

	<body>

		<!-- Page wrapper start -->
		
<div class="page-wrapper">
			
			<!-- Sidebar wrapper start -->
			@include('admin.layouts.sidebar')
			<!-- Sidebar wrapper end -->

			<!-- Page content start  -->
			<div class="page-content">
				
				<!-- Main container start -->
				<div class="main-container">


					<!-- Header start -->
					 @include('admin.layouts.topheader')
					<!-- Header end -->

					<!-- Page header start -->
					<div class="page-header">

						<!-- Breadcrumb start -->
						<ol class="breadcrumb">
							<li class="breadcrumb-item">Customers List</li>
						</ol>
						<!-- Breadcrumb end -->

						<!-- App actions start -->
						<ul class="app-actions">
							<li>
						<!-- App actions end -->
						
						<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add Customer</button> -->

						<form action="#" method="post">{{csrf_field()}}
									<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="myLargeModalLabel">Add Customer</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-body">
									
									<div class="row gutters">
										
										<div class="col-xl-8 col-lglg-8 col-md-8 col-sm-8 col-8">
											<div class="form-group">
												<label for="inputName">Full Name</label>
												<input type="text" name="fname" class="form-control" id="inputName" placeholder="Enter full name">
											</div>
										</div>
										

										<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-4">
											<label for="inputName">Status</label>
											<div class="form-group">
												<select class="form-control form-control-lg" name="status">
													<option>--Select--</option>
													<option value="1">Active</option>
													<option value="0">Inactive</option>
												</select>
											</div>
										</div>
										<div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-6">
											<div class="form-group">
												<label for="inputEmail">Nice Name</label>
												<input type="text" name="nname" class="form-control" id="inputName" placeholder="Enter nice name">
											</div>
										</div>
										<div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-6">
											<div class="form-group">
												<label for="inputEmail">Email Address</label>
												<input type="email" name="email" class="form-control" id="inputName" placeholder="Enter a valid email address">
											</div>
										</div>
										<div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-6">
											<div class="form-group">
												<label for="inputName">Password</label>
												<input type="password" name="password" class="form-control" id="inputName" placeholder="Password">
											</div>
										</div>
										<div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-6">
											<div class="form-group">
												<label for="inputName">Confirm Password</label>
												<input type="password" name="cpassword" class="form-control" id="inputName" placeholder="Confirm password">
											</div>
										</div>

										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							
								<div class="form-group">
									<label for="inputName">Description</label>
								<input type="text" name="email" class="summernote" id="inputName" placeholder="Start from here">

							</div>
						</div>
							<div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-6">
								<label for="inputName">Date of Birth</label>
									<div class="form-group">
												
												<input type="password" name="cpassword" class="form-control" id="inputName" placeholder="Confirm password">
											</div>

							</div>
								<div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-6">
									<label for="inputName">Gender</label>
												<div class="form-group">
												<select class="form-control form-control-lg" name="status">
													<option>--Select--</option>
													<option value="1">Male</option>
													<option value="0">Female</option>
													<option value="0">Other</option>
												</select>
											
											</div>

								</div>

								<div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-6">
								<label for="inputName">Address Line 1</label>
									<div class="form-group">
												
												<input type="text" name="addresslinef" class="form-control" id="inputName" placeholder="Address line 1">
											</div>

							      </div>
								<div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-6">
									<label for="inputName">Address Line 2</label>
												<div class="form-group">
												<input type="text" name="addresslines" class="form-control" id="inputName" placeholder="Address line 2">
											
									</div>

								</div>
								<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-4">
								<label for="inputName">City</label>
									<div class="form-group">
												
												<input type="text" name="city" class="form-control" id="inputName" placeholder="Address line 1">
											</div>

							     </div>
								<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-4">
									<label for="inputName">Zip/Postal Code</label>
												<div class="form-group">
												<input type="text" name="pincode" class="form-control" id="inputName" placeholder="Zip/Postal code">
											
											</div>

								</div>
								<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-4">
									<label for="inputName">Phone</label>
												<div class="form-group">
												<input type="text" name="phone" class="form-control" id="inputName" placeholder="Phone number">
											
											</div>

								</div>
								<div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-6">
								<label for="inputName">Country</label>
									<div class="form-group">
												
												<select class="form-control form-control-lg" name="status">
													<option>--Select--</option>
													
													
												</select>
											</div>

							      </div>
								<div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-6">
									<label for="inputName">State/Province/Region</label>
												<div class="form-group">
												<select class="form-control form-control-lg" name="status">
													<option>--Select--</option>
													<option value="us">UP</option>
													<option value="india">MP</option>
													<option value="0">UK</option>
												</select>
											
									</div>

								</div>


										
										
						<div class="col-xl-12 col-lglg-12 col-md-12 col-sm-12 col-12">
							

									<label for="exampleFormControlTextarea1">Image</label>
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
													</div>
													<div class="custom-file">
														<input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
														<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
													</div>
												</div>
									
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
								<div class="table-responsive">
									<table id="copy-print-csv" class="table custom-table">
										<thead>
											<tr>
											   <th>Id</th>
											  
											  <th>Full Name</th>
											  <th>Phone</th>
											  <th>Email</th>
											  
											  <th>Address</th>
											   <th>Action</th>
											  
											</tr>
										</thead>
										<tbody>
											
											@foreach($orders as $order)
											

											<tr>
											 <td>{{$order->id}}</td>
								
											  <td>{{$order->fullname}}</td>
											  <td>{{$order->phone_no}}</td>
											  <td>{{$order->email}}</td>
											  <td><b>Address-1</b> {{$order->address_line_1}}<br>
											  	<b>Address-2</b> {{$order->address_line_2}}</td>
											  	 <td><a href="{{url('admin/customerdetail/'.$order->id)}}" class="btn btn-info" title="More Details"><i class="fa fa-sign-in"></i></a></td>
											  	
											  
											  
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

		<!-- Summernote JS -->
		<script src="{{asset('admin_assets/vendor/summernote/summernote-bs4.js')}}"></script>
		<script>
			$(document).ready(function() {
				$('.summernote').summernote({
					height: '50px',
					tabsize: 2
				});
			});
		</script>
		
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