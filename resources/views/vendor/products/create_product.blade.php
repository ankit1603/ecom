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
		<link rel="stylesheet" href="{{asset('admin_assets/vendor/summernote/summernote-bs4.css')}}" />

		<!-- Input Tags css -->
		<link rel="stylesheet" href="{{asset('admin_assets/vendor/input-tags/tagsinput.css')}}" />

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>



<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
		
	</head>

	<body>
		
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

					<!-- Page header start -->
					<div class="page-header">

						<!-- Breadcrumb start -->
						<ol class="breadcrumb">
							<li class="breadcrumb-item">Add Products</li>
						</ol>
						<!-- Breadcrumb end -->

						<!-- App actions start -->
						<ul class="app-actions">
							<li>
								<a href="#">
									<i class="icon-export"></i> Export
								</a>
							</li>
						</ul>
						<!-- App actions end -->

					</div>
					<!-- Page header end -->

					<!-- Row start -->
					<form action="{{url('/vendor/create')}}" method="post" enctype="multipart/form-data">{{csrf_field()}}
					<div class="row gutters">
						
						
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
							
							<div class="card h-100">
								<div class="card-body">
									<div class="row gutters">
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<h6 class="mb-3 text-primary">Add Product</h6>
										</div>
										<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
											<div class="form-group">
												<label for="fullName">Name&nbsp;*&nbsp;<i class="fa fa-question-circle" style="font-size:14px" data-toggle="tooltip" data-placement="top" title="Customers will not see this. This name only helps merchants to find the item for listing." aria-hidden="true"></i></label>

												<input type="text" name="name" class="form-control" id="fullName" placeholder="Title">

											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
											<div class="form-group">
												<label for="inputName">Status&nbsp;*&nbsp;<i class="fa fa-question-circle" style="font-size:14px" data-toggle="tooltip" data-placement="top" title="Merchants will find active items only." aria-hidden="true"></i></label>
											
												<select class="form-control form-control-lg" name="status">
													<option>--Select--</option>
													<option value="1">Active</option>
													<option value="0">Inactive</option>
												</select>
											
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
											<div class="form-group">
												<label for="phone">MPN&nbsp;*&nbsp;<i class="fa fa-question-circle" style="font-size:14px" data-toggle="tooltip" data-placement="top" title="Manufacturer Part Number (MPN) is an unique identifier issued by the manufacturer. You can obtain MPNs from the manufacturer. Not required but recommended" aria-hidden="true"></i></label>
												<input type="text" name="mpn" class="form-control" placeholder="Enter phone number">
											</div>
										</div>
								         <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
											<div class="form-group">
												<label for="website">GTIN&nbsp;*&nbsp;<i class="fa fa-question-circle" style="font-size:14px" data-toggle="tooltip" data-placement="top" title="Global Trade Item Number (GTIN) is a unique identifier of a product in the global marketplace. If you like to obtain an ISBN or UPC code for your product, you will find more information at the following websites: http://www.isbn.org/ and http://www.uc-council.org/" aria-hidden="true"></i></label>
						<input type="text" name="gtin" class="form-control"  placeholder="GTIN">
											</div>
										</div>

										
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
											<div class="form-group">
												<label for="website">GTIN Type</label>
							<select class="form-control form-control-lg" name="gtintype">
													<option>GTIN Type</option>
													<option value="1">EAN</option>
													<option value="2">ISBN</option>
													<option value="3">ITF</option>
													<option value="4">JAN</option>
													<option value="5">UPC</option>
												</select>
											</div>
										</div>

										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							
								<div class="form-group">
									<label for="inputName">Description&nbsp;*&nbsp;<i class="fa fa-question-circle" style="font-size:14px" data-toggle="tooltip" data-placement="top" title="Customers will see this. This is the core and common product description." aria-hidden="true"></i></label>
								<textarea name="description" class="form-group summernote" placeholder="Start from here"></textarea>

								

							</div>
						</div>

						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							
								<div class="form-group">
									<label for="inputName">Tag</label>
								<input type="text" name="tag" class="form-control" data-role="tagsinput">

							</div>
						</div>


						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							
								<div class="form-group">
									<div class="input-group">
										<label for="exampleFormControlTextarea1"> Image</label>
                                        <input type="file" name="image" required>
                                    </div>

							</div>
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							
								<div class="form-group">
												<label for="fullName">Video Link(URL)</label>

												<input type="text" name="videolink" class="form-control" id="fullName" placeholder="Title">

											</div>
						</div>



									</div>
						       
									
									<div class="row gutters">
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="text-right">
												<button type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button>
												<input type="submit" class="btn btn-primary">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>


						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
							<div class="card h-100">
								<div class="card-body">
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<h6 class="mb-3 text-primary">Organization</h6>
										</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="form-group">
												<label for="fullName">Categories&nbsp;*&nbsp;<i class="fa fa-question-circle" style="font-size:14px" data-toggle="tooltip" data-placement="top" title="Customers will not see this. This name only helps merchants to find the item for listing." aria-hidden="true"></i></label>

												<select class="form-control form-control-lg" name="category">
													<option>--Select Category--</option>
													@foreach($category as $categories)
													<option value="{{$categories->id}}">
														{{$categories->name}}</option>
														@endforeach
												</select>
												

												

											</div>
										</div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<h6 class="mb-3 text-primary">Featured Image</h6>
										</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
													</div>
													<div class="custom-file">
														<input type="file" name="featuredimage" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
														<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
													</div>
												</div>
										</div>



										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="form-group">
										<label for="fullName">Min Price</label>
										<input type="number" name="minprice" class="form-control"  placeholder="Min price">
												

											</div>
										</div>

										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="form-group">
										<label for="fullName">Max Price</label>

												<input type="number" name="maxprice" class="form-control"  placeholder="Max price">

											</div>
										</div>

										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="form-group">
										<label for="fullName">Variation</label>

												<select class="form-control form-control-lg" name="has_variant">
													<option>--Select Variation--</option>
													
													<option value="1">Yes</option>
													<option value="0">No</option>
													
												</select>

											</div>
										</div>

										
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="form-group">
										<label for="fullName">Origin</label>

												<select class="form-control form-control-lg" name="origin">
													<option>--Origin Country--</option>
													@foreach($country as $countries)
													<option value="{{$countries->id}}">{{$countries->name}}</option>
													@endforeach
												</select>

											</div>
										</div>

										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="form-group">
												<label for="fullName">Brand&nbsp;*&nbsp;<i class="fa fa-question-circle" style="font-size:14px" data-toggle="tooltip" data-placement="top" title="Customers will not see this. This name only helps merchants to find the item for listing." aria-hidden="true"></i></label>

											<select class="form-control form-control-lg" name="brand">
													<option>--Select Brand--</option>
													@foreach($brand as $brands)
													<option value="{{$brands->id}}">{{$brands->name}}</option>
													@endforeach
												</select>

											</div>
										</div>

										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="form-group">
												<label for="fullName">Model Number&nbsp;*&nbsp;<i class="fa fa-question-circle" style="font-size:14px" data-toggle="tooltip" data-placement="top" title="An identifier of a product given by its manufacturer. Not required but recommended" aria-hidden="true"></i></label>

												<input type="text" name="modelnumber" class="form-control"  placeholder="Model Number">

											</div>
										</div>

										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="form-group">
												<label for="fullName">Manufacturer</label>

												<select class="form-control form-control-lg" name="manufacturer">
										<option>--Manufacturer--</option>
										@foreach($manufacturer as $manufacturers)
													<option value="{{$manufacturers->id}}">{{$manufacturers->name}}</option>
													@endforeach
													
												</select>
											</div>
										</div>
								</div>
							</div>
							
						</div>
						
					</div>
					</form>
				    
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

		<!-- Input Tags JS -->
		<script src="{{asset('admin_assets/vendor/input-tags/tagsinput.min.js')}}"></script>
		<script src="{{asset('admin_assets/vendor/input-tags/typeahead.js')}}"></script>
		<script src="{{asset('admin_assets/vendor/input-tags/tagsinput-custom.js')}}"></script>
		
		
		<!-- Main JS -->
		<script src="{{asset('admin_assets/js/main.js')}}"></script>

	</body>


</html>