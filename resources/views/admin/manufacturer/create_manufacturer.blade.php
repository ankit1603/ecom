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
							<li class="breadcrumb-item"> Manufacturer List</li>
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
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add Manufacturer</button>

			<form action="{{url('/admin/manufacturer')}}" method="post" enctype="multipart/form-data">
				@csrf
									<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="myLargeModalLabel">Add Manufacturer</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							               <div class="card">
								<div class="card-body">
									<div class="row gutters">
										<div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-6">
											<div class="form-group">
												<label for="inputName">Name</label>
												<input type="text" name="name" class="form-control" id="inputName" placeholder="Manufacturer name" required>
											</div>
										</div>
										

										<div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-6">
											<label for="inputName">Status</label>
											<div class="form-group">
												<select class="form-control form-control-lg" name="status" required>
													<option>--Select--</option>
													<option value="1">Active</option>
													<option value="0">Inactive</option>
												</select>
											</div>
										</div>
										
										<div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-6">
											<div class="form-group">
												<label for="inputEmail">URL</label>
												<input type="text" name="url" class="form-control" id="inputName" placeholder="Web address" required>
											</div>
										</div>
										<div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-6">
											<label for="inputName">Country</label>
											<div class="form-group">
												<select class="form-control form-control-lg" name="country" required>
													@foreach($country as $countrys)
													<option value="{{$countrys->id}}">{{$countrys->name}}</option>
												
													@endforeach
												</select>
											</div>
										</div>
										<div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-6">
											<div class="form-group">
												<label for="inputName">Email Address</label>
												<input type="text" name="email" class="form-control" id="inputName" placeholder="Enter a valid email address" required>
											</div>
										</div>
										<div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-6">
											<div class="form-group">
												<label for="inputName">Phone</label>
												<input type="text" name="phone" class="form-control" id="inputName" placeholder="Phone number" required>
											</div>
										</div>

										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							
								
									<label for="inputName">Description</label>
<textarea name="test" class="form-group summernote" placeholder="Start from here" required></textarea>

							
						</div>
									
					<div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-6">
							
							
												<div class="input-group">
										<label for="exampleFormControlTextarea1"> Brand Logo</label>
                                        <input type="file" name="image" required>
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
												
											  <th>Name</th>
											  <th>Phone</th>
											  <th>Email</th>
											  <th>Country</th>
											 
											  <th>Action</th>
											 
											</tr>
										</thead>
										<tbody>
											
											@foreach($manufacturers as $manufacturer)
											<tr>

											  <td>{{$manufacturer->id}}</td>
												
											  <td>{{$manufacturer->name}}</td>
											  <td>{{$manufacturer->phone}}</td>
											  <td>{{$manufacturer->email}}</td>
											  <td>{{$manufacturer->country_id}}</td>
											  <td>
											  	<a href="{{url('/admin/editmanufacturer/'.$manufacturer->id)}}" type="button" class="btn btn-primary" title="Update Coupon"  	
											  data-toggle="modal" data-target=".bd-edit-modal-lg-edit"><i class="fa fa-edit"></i></a>

											 
											  <a href="{{url('/admin/deletemanufacturer/'.$manufacturer->id)}}">
											  <button type="button" class="btn btn-danger" title="Delete Coupon"onclick="return confirm('Are you sure you want to delete this?')" ><i class="fa fa-trash"></i></button></a>
											  </td>
											  
											</tr>
											       
											<!-- Edit Form Start -->
											<form action="" method="post" enctype="multipart/form-data">
												{{csrf_field()}}
									<div class="modal fade bd-edit-modal-lg-edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="myLargeModalLabel">Update Manufacturer</h5>
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

											<input type="hidden" name="id" value="">
							</div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="form-group">
												<label for="inputName">Id</label>
												<input type="text" name="couponname" class="form-control" id="inputName" placeholder="Enter Coupon name" value="{{$manufacturer->id}}">
											</div>
										</div>
										

										<div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-6">
											<div class="form-group">
												<label for="inputName">Name</label>
												<input type="text" name="coupocode" class="form-control" id="inputName" placeholder="Enter Coupon Code" value="{{$manufacturer->name}}">
											</div>
										</div>
										<div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-6">
											<div class="form-group">
												<label for="inputName">Phone</label>
												<input type="text" name="couponname" class="form-control" id="inputName" placeholder="Enter Coupon name" value="{{$manufacturer->phone}}">
											</div>
										</div>
										<div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-6">
											<div class="form-group">
												<label for="inputName">Email</label>
												<input type="text" name="couponname" class="form-control" id="inputName" placeholder="Enter Coupon name" value="{{$manufacturer->email}}">
											</div>
										</div>

										<div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-6">
											<div class="form-group">
												<label for="inputName">Country</label>
												<input type="text" name="couponname" class="form-control" id="inputName" placeholder="Enter Coupon name" value="{{$manufacturer->country_id}}">
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
								<!-- Edit Form End -->
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