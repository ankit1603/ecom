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

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


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
			@include('admin.layouts.sidebar')
			<!-- Sidebar wrapper end -->

			<!-- Page content start  -->
			<div class="page-content">
				
				<!-- Main container start -->
				<div class="main-container">

					<!-- Theme switch start -->
					<a href="#" class="theme-switch" target="_blank">Gradient Color Option</a>
					<!-- Theme switch end -->

					<!-- Header start -->
					 @include('admin.layouts.topheader')
					<!-- Header end -->

					<!-- Page header start -->
					<div class="page-header">

						<!-- Breadcrumb start -->
						<ol class="breadcrumb">
							<li class="breadcrumb-item">Account Settings</li>
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
					<form action="{{url('/admin/add-attribute/'.$productsDetails->id)}}" method="post" name="add_attribute" id="add_attribute" enctype="multipart/form-data">{{csrf_field()}}
						<div class="row gutters">
						
						
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							
							<div class="card h-100">
								<div class="card-body">
									<div class="row gutters">
										
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
											<div class="form-group">
												<label for="fullName" style="font-size: 14px;">Title:&nbsp;{{$productsDetails->name}}</label>

												
											</div>
											<div class="form-group">
												<label for="fullName">Model Number:&nbsp;{{$productsDetails->model_number}}</label>

											</div>
											<div class="form-group">
												<label for="fullName">Manufacturer:&nbsp;</label>

											</div>
										</div>
										
									</div>
						       
									
									
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="row gutters">
						
						
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							
							<div class="card h-100">
								<div class="card-body">
									<div class="row gutters">
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<h6 class="mb-3 text-primary">Add Product Attributes</h6>
										</div>
										<input type="hidden" value="{{$productsDetails->id}}" name="productid">
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="form-group">
												<label for="fullName">Title&nbsp;*&nbsp;<i class="fa fa-question-circle" style="font-size:14px" data-toggle="tooltip" data-placement="top" title="Customers will not see this. This name only helps merchants to find the item for listing." aria-hidden="true"></i></label>

												<input type="text" name="title" class="form-control" id="fullName" placeholder="Title" required>

											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="inputName">WareHouse&nbsp;<i class="fa fa-question-circle" style="font-size:14px" data-toggle="tooltip" data-placement="top" title="Choose the warehouse from where the product will be shipped." aria-hidden="true"></i></label>
											
												<select class="form-control form-control-lg" name="warehouse">
													<option>--Select--</option>
													<option value="1">Active</option>
													<option value="0">Inactive</option>
												</select>
											
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="phone">Supplier&nbsp;<i class="fa fa-question-circle" style="font-size:14px" data-toggle="tooltip" data-placement="top" title="Recommended field. This will helps to generate reports" aria-hidden="true"></i></label>
									<select class="form-control form-control-lg" name="supplier">
													<option>--Select--</option>
													<option value="1">Active</option>
													<option value="0">Inactive</option>
												</select>
											</div>
										</div>
								         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="website">Available From &nbsp;<i class="fa fa-question-circle" style="font-size:14px" data-toggle="tooltip" data-placement="top" title="The date when the stock will be available. Default = immediately" aria-hidden="true"></i></label>
						<input type="date" name="availablefrom" class="form-control"  placeholder="GTIN">
											</div>
										</div>

										
										  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="website">Status&nbsp;<i class="fa fa-question-circle" style="font-size:14px" data-toggle="tooltip" data-placement="top" title="Is the item is open to sale? Inactive item will not be shown on the marketplace" aria-hidden="true"></i></label>
							<select class="form-control form-control-lg" name="status">
													<option>--Select--</option>
													<option value="1">Active</option>
													<option value="0">Inactive</option>
													
												</select>
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="fullName">Min Order Quantity&nbsp;<i class="fa fa-question-circle" style="font-size:14px" data-toggle="tooltip" data-placement="top" title="The quantity allowed to take orders. Must be an integer value. Default = 1" aria-hidden="true"></i></label>

												<input type="number" name="minorder" class="form-control" id="fullName" placeholder="Min Order Quantity">
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="fullName">Weight&nbsp;<i class="fa fa-question-circle" style="font-size:14px" data-toggle="tooltip" data-placement="top" title="The will be used to calculate the shipping cost." aria-hidden="true"></i></label>

												<input type="number" name="weight" class="form-control" id="fullName" placeholder="Weight">

											</div>
										</div>

										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="fullName">Free Shipping&nbsp;*&nbsp;<i class="fa fa-question-circle" style="font-size:14px" data-toggle="tooltip" data-placement="top" title="Customers will not see this. This name only helps merchants to find the item for listing." aria-hidden="true"></i></label>

												<input type="number" name="freeshipping" class="form-control" id="fullName" placeholder="Weight">

											</div>
										</div>

										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="fullName">Packaging&nbsp;*&nbsp;<i class="fa fa-question-circle" style="font-size:14px" data-toggle="tooltip" data-placement="top" title="Customers will not see this. This name only helps merchants to find the item for listing." aria-hidden="true"></i></label>

												<input type="number" name="packaging" class="form-control" id="fullName" placeholder="Weight">

											</div>
										</div>

										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<h6 class="mb-3 text-primary">Variants</h6>

									<hr>  
										</div>

									<!-- <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">	
											
											<div class="form-group">
												<label for="fullName">SKU&nbsp;<i class="fa fa-question-circle" style="font-size:10px;" data-toggle="tooltip" data-placement="top" title="SKU (Stock Keeping Unit) is the seller specific identifier. It will help to manage your inventory" aria-hidden="true"></i></label>

											<input type="text" name="sku" value="" class="form-control" placeholder="SKU"/>

											</div>
										
								</div>

								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
											
											<div class="form-group">
												<label for="fullName">Condition&nbsp;<i class="fa fa-question-circle" style="font-size:10px;" data-toggle="tooltip" data-placement="top" title="What is the current condition of the product?" aria-hidden="true"></i></label>

												<select class="form-control form-control-lg" name="condision">
													
													<option value="New">New</option>
													<option value="Used">Used</option>
													<option value="Refurbished">Refurbished</option>
													
												</select>

											</div>
										
								</div>

								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
											
											<div class="form-group">
										<label for="fullName">Stock quantity&nbsp;<i class="fa fa-question-circle" style="font-size:10px;" data-toggle="tooltip" data-placement="top" title="Number of items you have on your warehouse" aria-hidden="true"></i></label>

			<input type="number" name="stock" value="" class="form-control" placeholder="Stock quantity"/>

											</div>
										
								</div>

							<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
											
											<div class="form-group">
										<label for="fullName">Purchase price&nbsp;<i class="fa fa-question-circle" style="font-size:10px;" data-toggle="tooltip" data-placement="top" title="Recommended field. This will helps to calculate profits and generate reports" aria-hidden="true"></i></label>

								<input type="number" name="purchaseprice" value="" class="form-control" placeholder="SKU"/>

											</div>
										
								</div>

								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
											
											<div class="form-group">
										<label for="fullName">Price&nbsp;<i class="fa fa-question-circle" style="font-size:10px;" data-toggle="tooltip" data-placement="top" title="The price without any tax. Tax will be calculated autometically based on shipping zone" aria-hidden="true"></i></label>

												<input type="number" name="field_name[]" value="" class="form-control" placeholder="Price"/>

											</div>
										
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
											
											<div class="form-group">
										<label for="fullName">Offer price&nbsp;<i class="fa fa-question-circle" style="font-size:10px;" data-toggle="tooltip" data-placement="top" title="The offer price will be effected between the offer start and end dates" aria-hidden="true"></i></label>

												<input type="number" name="field_name[]" value="" class="form-control" placeholder="Offer price"/>

											</div>
										
								</div> -->


            <div class="form-group fieldGroup">
            <div class="input-group">
            	<?php  $hasvariant=$productsDetails->has_variant;
            	$i=0;
										if ($hasvariant==1) {
											
										  ?> 
										

										  @foreach($variationscategories as $vc)
										  <?php $variat=$vc->variationsid;  ?>
					<select class="form-control form-control-lg" name="variations[<?php echo $i;  ?>][]">
													<option value="">Select @foreach($variationsdetails as $vd)
												 <?php if ($vd->id==$variat) echo $vd->name ;  ?>@endforeach </option>
												 @foreach($valuesdetails as $vald)
                                                   <?php if ($vald->variationsid==$variat) {
                                                   $unitidd=$vald->unitid; ?>
													<option value="{{$vald->id}}">{{$vald->values}}@foreach($unitdetails as $ud)
												 <?php if ($ud->id==$unitidd) echo $ud->name ;  ?>@endforeach</option>
												<?php  }  ?>@endforeach
													
													<?php $i=$i+1;    ?>
												</select> @endforeach <?php   }  ?>
												  <input type="hidden" value="<?php echo $i;  ?>" name="variationscount">
      <input type="text" name="sku[]" value="" class="form-control" style="height: 37px;" placeholder="SKU"/>
           <select class="form-control form-control-lg" name="condision[]">
													
													<option value="New">New</option>
													<option value="Used">Used</option>
													<option value="Refurbished">Refurbished</option>
													
												</select>
             <input type="number" name="stock[]" value="" class="form-control"style="height: 37px;" placeholder="Stock quantity"/>
              <input type="number" name="purchaseprice[]" value="" style="height: 37px;"class="form-control" placeholder="Purchase Price"/>

               <input type="number" name="price[]" value=""style="height: 37px;" class="form-control" placeholder="Price"/>
                <input type="number" name="offerprice[]" style="height: 37px;"value="" class="form-control" placeholder="Offer price"/>
            <div class="input-group-addon"> 
                <a href="javascript:void(0)" class="btn btn-primary addMore"style="height: 37px;" title="Add More"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> <i class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>
    
   

<!-- copy of input fields group -->
<div class="form-group fieldGroupCopy" style="display: none;">
    <div class="input-group">
    	<?php   $hasvariant=$productsDetails->has_variant;
    	$i=0;
										if ($hasvariant==1) {
											
										  ?> @foreach($variationscategories as $vc)
										  <?php $variat=$vc->variationsid;  ?>
						<select class="form-control form-control-lg" name="variations[<?php echo $i;  ?>][]">
													<option value="">Select @foreach($variationsdetails as $vd)
												 <?php if ($vd->id==$variat) echo $vd->name ;  ?>@endforeach </option>
												 @foreach($valuesdetails as $vald)
                                                   <?php if ($vald->variationsid==$variat) {
                                                   $unitidd=$vald->unitid; ?>
													<option value="{{$vald->id}}">{{$vald->values}}@foreach($unitdetails as $ud)
												 <?php if ($ud->id==$unitidd) echo $ud->name ;  ?>@endforeach</option>
												<?php  }  ?>@endforeach
													
													<?php $i=$i+1;    ?>
												</select> @endforeach <?php   }  ?>
       <input type="text" name="sku[]" value="" class="form-control" placeholder="SKU"/>
           <select class="form-control form-control-lg" name="condision[]">
													
													<option value="New">New</option>
													<option value="Used">Used</option>
													<option value="Refurbished">Refurbished</option>
													
												</select>
             <input type="number" name="stock[]" value="" class="form-control" placeholder="Stock quantity"/>
              <input type="number" name="purchaseprice[]" value="" class="form-control" placeholder="Purchase Price"/>

               <input type="number" name="price[]" value="" class="form-control" placeholder="Price"/>
                <input type="number" name="offerprice[]" value="" class="form-control" placeholder="Offer price"/>
        <div class="input-group-addon"> 
            <a href="javascript:void(0)" class="btn btn-danger remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Remove</a>
        </div>
    </div>
</div>
 <script type="text/javascript">
$(document).ready(function(){
    //group add limit
    var maxGroup = 10;
    
    //add more fields group
    $(".addMore").click(function(){
        if($('body').find('.fieldGroup').length < maxGroup){
            var fieldHTML = '<div class="form-group fieldGroup">'+$(".fieldGroupCopy").html()+'</div>';
            $('body').find('.fieldGroup:last').after(fieldHTML);
        }else{
            alert('Maximum '+maxGroup+' groups are allowed.');
        }
    });
    
    //remove fields group
    $("body").on("click",".remove",function(){ 
        $(this).parents(".fieldGroup").remove();
    });
});
</script>

								

								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									
											<div class="form-group">
												<label for="fullName">Condition Note&nbsp;<i class="fa fa-question-circle" style="font-size:14px" data-toggle="tooltip" data-placement="top" title="Input more details about the item condition. This will help customers to understand the item." aria-hidden="true"></i></label>

												<input type="text" name="conditionnote" class="form-control" id="fullName" placeholder="Condition Note" required>

											</div>
										

							</div>

							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<h6 class="mb-3 text-primary">Key Features</h6>
									<hr>  
										</div>

										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 field_wrapper">
											
												<label for="fullName">key Feature</label>

										<input type="text" name="keyfeature" class="form-control" placeholder="Key Feature">

									
								</div>

	
              
   
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							
								<div class="form-group">
									<label for="inputName">Description&nbsp;*&nbsp;<i class="fa fa-question-circle" style="font-size:14px" data-toggle="tooltip" data-placement="top" title="Customers will see this. This is the core and common product description." aria-hidden="true"></i></label>
								<textarea name="description" class="form-group summernote" placeholder="Start from here"></textarea>
							   </div>
						    </div>

						    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											
											<div class="form-group">
											<label for="fullName">Linked Items&nbsp;<i class="fa fa-question-circle" style="font-size:14px" data-toggle="tooltip" data-placement="top" title="The linked items will display on the product page as frequently bought together items. This is optional but important." aria-hidden="true"></i></label>

												<input type="text" name="linkeditem" class="form-control" id="fullName" placeholder="Key Feature">

											</div>
										
								</div>

								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<h6 class="mb-3 text-primary">SEO</h6>
									<hr>  
										</div>

								  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											
											<div class="form-group">
											<label for="fullName">Slug&nbsp;<i class="fa fa-question-circle" style="font-size:14px" data-toggle="tooltip" data-placement="top" title="Slug are usually a search engine friendly URL" aria-hidden="true"></i></label>

												<input type="text" name="slug" class="form-control" id="fullName" placeholder="SEO Friendly URL" required>

											</div>
										
								</div>



								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											
											<div class="form-group">
											<label for="fullName">Meta Title&nbsp;<i class="fa fa-question-circle" style="font-size:14px" data-toggle="tooltip" data-placement="top" title="Title tags—technically called title elements—define the title of a document. Title tags are often used on search engine results pages (SERPs) to display preview snippets for a given page, and are important both for SEO and social sharing" aria-hidden="true"></i></label>

												<input type="text" name="metatitle" class="form-control" id="fullName" placeholder="SEO Friendly URL">

											</div>
										
								</div>


								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											
											<div class="form-group">
											<label for="fullName">Meta Description&nbsp;<i class="fa fa-question-circle" style="font-size:14px" data-toggle="tooltip" data-placement="top" title="Meta descriptions are HTML attributes that provide concise explanations of the contents of web pages. Meta descriptions are commonly used on search engine result pages (SERPs) to display preview snippets for a given pag" aria-hidden="true"></i></label>

												<input type="text" name="metadescription" class="form-control" id="fullName" placeholder="SEO Friendly URL">

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

    <!--  <script type="text/javascript">
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div><input type="text" name="key[]" value="" class="form-group"/><a href="javascript:void(0);" class="remove_button" >Remove</a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script> -->


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