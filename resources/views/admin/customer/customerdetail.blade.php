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
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" rel="stylesheet" />

	</head>

	<body>
		<?php  use \App\Http\Controllers\CustomerController;
         
         ?>
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
							<li class="breadcrumb-item">Customer Details</li>
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
					
							<ul class="nav nav-tabs">
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
  <li class="nav-item" style="width:100%;">
    <a class="nav-link active" data-toggle="tab" href="#home" style="background-color: #f8f4ee;">Personal Details</a>
  </li>
</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
  <li class="nav-item" style="width:100%; ">
    <a class="nav-link " data-toggle="tab" href="#about" style="background-color:#f8f4ee;">Product Details</a>
  </li></div>
  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
  <li class="nav-item" style="width:100%;">
    <a class="nav-link" data-toggle="tab" href="#contact" style="background-color:#f8f4ee;">Invoice Details</a>
  </li>
</div>
</ul>

<div class="container-fluid">
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="home">
    
     
													<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-body">
									

									<div class="row gutters">
										
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
											<div class="form-group">
												<label for="inputName">Customer Id</label>
												<input type="text" name="fname" class="form-control" id="inputName" placeholder="Enter full name" value="{{$orders->customer_id}}" readonly>
											</div>
										</div>
										

										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
											<div class="form-group">
												<label for="inputName">Full Name</label>
												<input type="text" name="fname" class="form-control" id="inputName" placeholder="Enter full name" value="{{$orders->fullname}}" readonly>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
											<div class="form-group">
												<label for="inputName">Phone No</label>
												<input type="text" name="fname" class="form-control" id="inputName" placeholder="Enter full name" value="{{$orders->phone_no}}" readonly>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
											<div class="form-group">
												<label for="inputName">Email</label>
												<input type="text" name="fname" class="form-control" id="inputName" placeholder="Enter full name" value="{{$orders->email}}" readonly>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
											<div class="form-group">
												<label for="inputName">Permanent Address</label>
												<input type="text" name="fname" class="form-control" id="inputName" placeholder="Enter full name" value="{{$orders->address_line_1}}" readonly>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
											<div class="form-group">
												<label for="inputName">Alternate Address</label>
												<input type="text" name="fname" class="form-control" id="inputName" placeholder="Enter full name" value="{{$orders->address_line_2}}" readonly>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
											<div class="form-group">
												<label for="inputName">City</label>
												<input type="text" name="fname" class="form-control" id="inputName" placeholder="Enter full name" value="{{$orders->city}}" readonly>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
											<div class="form-group">
												<label for="inputName">State</label>
												<input type="text" name="fname" class="form-control" id="inputName" placeholder="Enter full name" value="{{$orders->state}}" readonly>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
											<div class="form-group">
												<label for="inputName">Pincode</label>
												<input type="text" name="fname" class="form-control" id="inputName" placeholder="Enter full name" value="{{$orders->pincode}}" readonly>
											</div>
										</div>
										
									</div>
									
								</div>
							</div>
						</div>
					
				
    </div>
   
    <div role="tabpanel" class="tab-pane" id="about">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-body">
									

									<div class="row gutters">
										
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
											<div class="form-group">
												<label for="inputName">Product Id</label>
												<input type="text" name="fname" class="form-control" id="inputName" placeholder="Enter full name" value="{{$orders->product_id}}" readonly>
											</div>
										</div>
										

										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
											<div class="form-group">
												<label for="inputName">Product Name</label>
												<input type="text" name="fname" class="form-control" id="inputName" placeholder="Enter full name" value="{{$orders->name}}" readonly>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
											<div class="form-group">
												<label for="inputName">Order Id</label>
												<input type="text" name="fname" class="form-control" id="inputName" placeholder="Enter full name" value="{{$orders->orderid}}" readonly>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
											<div class="form-group">
												<label for="inputName">Order Date</label>
												<input type="text" name="fname" class="form-control" id="inputName" placeholder="Enter full name" value="{{$orders->created_at->format('d-m-yy')}}" readonly>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
											<div class="form-group">
												<label for="inputName">Quantity</label>
												<input type="text" name="fname" class="form-control" id="inputName" placeholder="Enter full name" value="{{$orders->quantity}}" readonly>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
											<div class="form-group">
												<label for="inputName">Delivery Date</label>
												<input type="text" name="fname" class="form-control" id="inputName" placeholder="Delivery Date" value="{{$orders->Deliverydate}}" readonly>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
											<div class="form-group">
												<label for="inputName">Status</label>
												<input type="text" name="fname" class="form-control" id="inputName" placeholder="Enter full name" value="{{$orders->status}}" readonly>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
											<div class="form-group">
												<label for="inputName">Payment Mode</label>
												<input type="text" name="fname" class="form-control" id="inputName" placeholder="Enter full name" value="{{$orders->payment_mode}}" readonly>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
											<div class="form-group">
												<label for="inputName">Payment Status</label>
												<input type="text" name="fname" class="form-control" id="inputName" placeholder="Enter full name" value="{{$orders->payment_status}}" readonly>
											</div>
										</div>
										
									</div>
									
								</div>
							</div>
						</div>
					
    </div>
	
    <div role="tabpanel" class="tab-pane " id="contact">
      <a href="{{url('vendor/checkinvoice/'.$orders->id)}}" class="btn btn-success">Check Invoice</a>
    </div>
  </div>
</div>
</div>
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
		<script>var triggerTabList = [].slice.call(document.querySelectorAll('#myTab a'))
triggerTabList.forEach(function (triggerEl) {
  var tabTrigger = new bootstrap.Tab(triggerEl)

  triggerEl.addEventListener('click', function (event) {
    event.preventDefault()
    tabTrigger.show()
  })
})</script>
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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.4/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js"></script>

	</body>


</html>