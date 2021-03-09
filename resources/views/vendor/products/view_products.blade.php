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
							<li class="breadcrumb-item">Product Lists</li>
						</ol>
		
						<!-- App actions end -->
						<ul class="app-actions">
							<li>
						<a href="{{url('vendor/create')}}">Add Product</a>
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
												<th>Image</th>
												
											  <th>Name</th>
											  <th>GTIN</th>
											  <th>Category</th>

											  <th>Model Number</th>
											  
											  <th>SKU</th>
											  <th>UPC</th>
											  <th>MPN</th>
											  <th>Disable/Enable</th>
											  <th>Action</th>
											  
											 
											</tr>
										</thead>
										<tbody>
											@foreach($Products as $product)
											<?php $catid=$product->categoryid;  ?>
											<tr>
												@if(!empty($product->image))
								            <td>
					<img src="{{asset('/upload/product/'.$product->image)}}" style="width:25px;"></td>
										      @endif
												
											  <td>{{$product->name}}</td>
											  <td>{{$product->gtin}}</td>
											  <td>@foreach($categorydetails as $vd)
												 <?php if ($vd->id==$catid) 
												 echo $vd->name ;  ?>@endforeach</td>
											  <td>{{$product->model_number}}</td>
											  <td>{{$product->sku}}</td>
											  <td>{{$product->upc}}</td>
											  <td>{{$product->mpn}}</td>
											  <td>
											<label class="switch">
											  <input type="checkbox" checked>
											  <span class="slider round"></span>
											</label></td>
											 

											  
											  <td>
											  	<a href="{{url('/vendor/viewproducts/'.$product->id)}}" type="button" class="btn btn-info" title="View Product" data-toggle="modal" data-target=".bd-edit-modal-lg-view{{$product->id }}"><i class="fa fa-eye"></i></a>
											 
											  <a href="{{url('/vendor/editproducts/{id}'.$product->id)}}" type="button" class="btn btn-primary" title="Update Product"  	
											  data-toggle="modal" data-target=".bd-edit-modal-lg-edit{{$product->id }}"><i class="fa fa-edit"></i></a>

											  <!-- <a href="#"type="button" class="btn btn-info"><i class="fa fa-eye" title="View Inventory"></i></a> -->


											  <a href="{{url('/vendor/deleteproducts/'.$product->id)}}">
											  <button type="button" class="btn btn-danger" title="Delete Product"onclick="return confirm('Are you sure you want to delete this?')" ><i class="fa fa-trash"></i></button></a>
											</td>


											</tr>

											<!-- View Form Start -->
											<form action='' method="post" enctype="multipart/form-data">{{csrf_field()}}
									<div class="modal fade bd-edit-modal-lg-view{{$product->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="myLargeModalLabel">View Products</h5>
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

											<input type="hidden" name="id" value="{{$product->id }}">
							</div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="form-group">
												<label for="inputName">Name</label>
												<input type="text" name="catname" class="form-control" id="inputName" placeholder="Category name" value="{{$product->name}}">
											</div>
										</div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="form-group">
												<label for="inputImage">Images</label>
												
                                            <img src="{{asset('/upload/product/'.$product->image) }}" id="Image" name="image" class="form-control" placeholder="Category Image" style="width:50px;" />

											</div>
										</div>

										<div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-6">
											<div class="form-group">
												<label for="inputEmail">GTIN</label>
												<input type="number" name="order" class="form-control" id="inputName" placeholder="Order"value="{{$product->gtin}}">
											</div>
										</div>

										<div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-6">
											<label for="inputName">Category</label>
											<input type="text" name="category" class="form-control" id="inputName" placeholder="Category" value="{{$product->categoryid}}">
										</div>

										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							

									<div class="form-group">
										<label for="exampleFormControlTextarea1">Model Number</label>
										<textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="2" placeholder="Start from here">{{$product->model_number}}</textarea>
									</div>
									
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


								<!-- Edit Form Start -->
											<form action="{{ url('/vendor/editproducts', ['id' => $product->id]) }}" method="post" enctype="multipart/form-data">{{csrf_field()}}
									<div class="modal fade bd-edit-modal-lg-edit{{$product->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="myLargeModalLabel">Edit Products</h5>
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

											<input type="hidden" name="id" value="{{$product->id }}">
							</div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="form-group">
												<label for="inputName">Name</label>
												<input type="text" name="catname" class="form-control" id="inputName" placeholder="Category name" value="{{$product->name}}">
											</div>
										</div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="form-group">
												<label for="inputImage">Images</label>
												<img src="{{asset('/upload/product/'.$product->image) }}" id="Image" name="image" class="form-control" placeholder="Category Image" style="width:50px;" />
												

												<div class="form-group">
									             <div class="input-group">
													 <label for="exampleFormControlTextarea1"> </label>
                                                    <input type="file" name="image">
												</div>

							</div>

											</div>
										</div>

										<div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-6">
											<div class="form-group">
												<label for="inputEmail">GTIN</label>
												<input type="text" name="gtin" class="form-control" placeholder="GTIN" value="{{$product->gtin}}">
											</div>
										</div>

										<div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-6">
											<label for="inputName">Category</label>
											<input type="text" name="category" class="form-control" id="inputName" placeholder="Category" value="{{$product->categoryid}}">
										</div>

										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							

									<div class="form-group">
										<label for="exampleFormControlTextarea1">Model Number</label>
										<textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="2" placeholder="Start from here">{{$product->model_number}}</textarea>
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
								@if($errors->any())


                                    <ul>
                                        @foreach($errors->all() as $err)
                                        <tr>
                                            <td>
                                                <li>{{$err}}</li>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </ul>
                                    @endif
								<!-- Edit Form End -->

								<!-- Add images form -->

									 <form action="#" method="post">
								<div class="modal fade bd-edit-modal-lg{{$product->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="myLargeModalLabel">Add More Images</h5>
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
										<input type="hidden" name="productid" value="{{$product->id }}">
							
						    </div>
										
										
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							

									<div class="form-group">
									<div class="input-group">
													 <label for="exampleFormControlTextarea1">Featured Image</label>
                        <input type="file" name="image" value="{{url(asset('/upload/product/'.$product->image))}}"  required>
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
								<!-- End Add images form -->
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