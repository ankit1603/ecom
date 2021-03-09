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

					<!-- Page header start -->
					<div class="page-header">
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
						<!-- Breadcrumb start -->
						<ol class="breadcrumb">
							<li class="breadcrumb-item">Add Payment</li>
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
					
					<div class="row gutters">
						
						
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
							
							<div class="card h-100">
								<div class="card-body">
									<form action="{{url('/member/PayAmount')}}" method="post" enctype="multipart/form-data">{{csrf_field()}}


                                                        <div class="form-group">
                                                    <select id="placement" onchange="checkPlacement()" class="form-control" required="" name="placement">
                                                        <option value="" disabled="" selected="">Select Purpose</option>
                                                      
                                                        <option value="3">For Repurchase</option>
                                                       
                                                         
                                                    </select>
                                                    <div><p id="errorOfPlacement" style="color: red;"></p></div>
                                                </div>
                                                  <div id="activationdropdown" style="display:none;">
                                                  <div class="form-group">
                                                   <select class="form-control form-control-lg" name="package">
												
													<?php echo $activationpackage_dropdown;?>
												</select>
                                                    <div><p id="errorOfPlacement" style="color: red;"></p></div>
                                                </div></div>
                                                    <div id="updradativationdropdown" style="display:none;">
                                                  <div class="form-group">
                                                   <select class="form-control form-control-lg" name="packages">
												
													<?php echo $upgradationpackage_dropdown;?>
												</select>
                                                    <div><p id="errorOfPlacement" style="color: red;"></p></div>
                                                </div></div>

                                                 <div id="repurchase" style="display:none;">
                                                <div class="form-group">
                                                           
                                                            <input type="text" name="m_name" id="m_name" class="form-control" placeholder="Enter  Amount">
                                                           
                                                        </div></div>

                                                         
						       
									
									<div class="row gutters">
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="text-right">
												
												<input type="submit" class="btn btn-primary" value="Pay"> 
											</div>
										</div>
									</div>
								
					</form>
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
<script>
        var atRandomMemberId = Math.floor(100000 + Math.random() * 909999);
        document.getElementById('atrandam_member_id').value = atRandomMemberId;

        function getSponsor() {
        	//alert("fighter");
            var sponsor_id = document.getElementById('sponsor_id').value;
            $.ajax({
               
                url: '{{ url('getsponsor') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', sponsorid:sponsor_id},
                success: function (data) {
                    if (data == "Invalid Sponsor Id.") {
                        document.getElementById('sponsor_name').value = "";
                        document.getElementById('sponsor_nameInvalid').innerHTML = data;
                    } else {
                        document.getElementById('sponsor_name').value = data;
                        document.getElementById('sponsor_nameInvalid').innerHTML = "";
                    }

                }
            });
        }

      function checkMemId() {
            var pId = document.getElementById('placement_id').value;
         
            $.ajax({
                 url: '{{ url('checkid') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id:pId},
                success: function (data) {
                	
                    if (data.trim() == "") {
                        

                    } else {
                        document.getElementById('placement_id').value = "";
                        document.getElementById('errorOfPlacementId').innerHTML = data;
                    }
                }
            });
        }

       function checkPlacement() {
                                                            var val = document.getElementById('placement').value;
                                                           
                                                           if (val==1) {

                                                           	 $('#activationdropdown').show();
                                                           	 
                                                             $('#updradativationdropdown').hide();
                                                             $('#repurchase').hide();


                                                           }
                                                           if(val==2){

                                                           	 $('#activationdropdown').hide();
                                                             $('#updradativationdropdown').show();
                                                           
                                                             $('#repurchase').hide();
                                                           


                                                           }
                                                           if(val==3||val==4){

                                                           	 $('#activationdropdown').hide();
                                                             $('#updradativationdropdown').hide();
                                                            
                                                             $('#repurchase').show();

                                                           }

                                                        }


         function ValidatePAN() {
            var panVal = document.getElementById('m_pan').value;
            var regpan = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/;
            alert(panVal);

            if (regpan.test(panVal)) {
                // valid pan card number
               
                $.ajax({
                                                                     url: '{{ url('checkpanno') }}',
                                                                       method: "patch",
                                                                       data: {_token: '{{ csrf_token() }}', panno: panVal},
                                                                    success: function (data) {
                                                                    
                                                                        if (data.trim() == "") {
                                                                            document.getElementById('panerror').innerHTML = data;
                                                                        } else {
                                                                            document.getElementById('placement').value = "";
                                                                            document.getElementById('panerror').innerHTML = data;
                                                                        }
                                                                    }
                                                                });
            } else {
                // invalid pan card number
                document.getElementById('m_pan').value = "";
                document.getElementById('panerror').innerHTML = "Invalid Pan Number ( <b class='text-dark'>" + panVal + "</b> )";
            }


        }
    </script>

</html>