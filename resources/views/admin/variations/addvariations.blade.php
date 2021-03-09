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
							<li class="breadcrumb-item">Variations List</li>
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
						<ul class="breadcrumb">
							<li>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add Variations</button>


						<form action="{{url('/admin/addvariation')}}" method="post">{{csrf_field()}}
									<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="myLargeModalLabel">Add Variations</h5>
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
												<label for="inputName"> Name</label>
												<input type="text" name="catname" class="form-control" id="inputName" placeholder="Enter full name" style="height:37px;">
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
										<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
											<label for="inputName">Type</label>
											<div class="form-group">
											<select class="form-control form-control-lg" name="type">
												 @foreach($categorygroups as $cats)
												<option value="{{$cats->id }}">{{$cats->name}}</option>
													
													@endforeach
												</select>
											</div>
										</div>
										<div class="col-xl-12 col-lglg-4 col-md-4 col-sm-4 col-12">
											<label for="inputName">Category</label>
											<div class="form-group">
											
												 @foreach($categorygroupss as $catss)
												<div class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox" name="category[]" value="{{$catss->id }}">
										<label class="form-check-label" for="inlineCheckbox1">{{$catss->name}}</label>
									</div>
													
													@endforeach
											
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
											  <th>Name</th>
											  <th>Status</th>
											   <th>Type</th>
											    <th>Category</th>
											   <th>Action</th>
											
											</tr>
										</thead>
										<tbody>
											 @foreach($categorygroupsss as $catsss)
                                          <tr>
                                          <td>{{$catsss->name}}</td>
                                          <td><?php if ($catsss->status==1) echo "Active";
                                          if ($catsss->status==0) echo "Inactive";
                                          
                                           ?></td>
                                            <td><?php $categoryid=$catsss->types;   ?> @foreach($categorygroups as $cats)
                                            	<?php if ($cats->id==$categoryid) {
                                            		echo $cats->name;
                                            	}        ?>
                                            @endforeach</td>
                                             <td><?php $variationsid=$catsss->id;   ?> @foreach($categorygroupssss as $catssss)
                                            	<?php if ($catssss->variationsid==$variationsid) {
                                            	$ctegoryid=$catssss->categoryid; ?>
                                            		@foreach($categorygroupss as $catss)

                                            		<?php if ($catss->id==$ctegoryid) {

                                            			echo $catss->name; ?> , <?php

                                            		} ?>

                                            		 @endforeach
                                            	<?php }        ?>
                                            @endforeach</td>
                                          
                                           <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bd-edit-modal-lg{{$cats->id }}" title="Edit"><i class="fa fa-edit"></i></button><a href="{{url('/admin/variations/addvalues/'.$catsss->id)}}"type="button" class="btn btn-primary" title="Add Value"><i class="fa fa-plus"></i></a><a href="{{url('/admin/variations/deletevariations/'.$catsss->id)}}"type="button" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a></td>
                                      </tr>
                                      <form action='/manishedit' method="post" enctype="multipart/form-data">{{csrf_field()}}
									<div class="modal fade bd-edit-modal-lg{{$cats->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="myLargeModalLabel">Edit Attributes</h5>
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

											<input type="hidden" name="id" value="{{$cats->id }}">
							

									
									
								
							
						</div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="form-group">
												<label for="inputName">Category Name</label>
												<input type="text" name="catname" class="form-control" id="inputName" placeholder="Category name" value="{{$cats->name}}">
											</div>
										</div>

										<div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-6">
											<div class="form-group">
												<label for="inputEmail">Order</label>
												<input type="number" name="order" class="form-control" id="inputName" placeholder="Order"value="{{$cats->order}}">
											</div>
										</div>

										<div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-6">
											<label for="inputName">Status</label>
											<div class="form-group">
												<select class="form-control form-control-lg" name="status">
													<option>--Select--</option>
													<option value="1">Active</option>
													<option value="0">Inactive</option>
												</select>
											</div>
										</div>

										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							

									<div class="form-group">
										<label for="exampleFormControlTextarea1">Description(Optional)</label>
										<textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="2" placeholder="Start from here">{{$cats->description}}</textarea>
									</div>
									
						</div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="form-group">
												<label for="disabledInput">Slug</label>
												<input type="text" name="slug" class="form-control" id="inputName" placeholder="SEO friendly URL"value="{{$cats->slug }}">
											</div>
										</div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="form-group">
												<label for="disabledInput">Meta Title</label>
												<input type="text" name="metatitle" class="form-control" id="inputName" placeholder="Meta Title"value="{{$cats->meta_title }}">
											</div>
										</div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							

									<div class="form-group">
										<label for="exampleFormControlTextarea1">Meta Description</label>
										<textarea class="form-control" name="metadescription" id="exampleFormControlTextarea1" rows="2" placeholder="Start from here">{{$cats->meta_description }}</textarea>
									</div>
									
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							

									<div class="form-group">
										<label for="exampleFormControlTextarea1">Cover Image</label>

										
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
													</div>
													<div class="custom-file">
														<input type="file" name="image" class="custom-file-input" id="inputGroupFile02" aria-describedby="inputGroupFileAddon02">
														<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
													</div>
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