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

						<!-- Breadcrumb start -->
						<ol class="breadcrumb">
							<li class="breadcrumb-item">Edit Profile</li>
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
					@foreach($memberdetails as $memdetails)
					<form action="{{url('/member/EditProfile')}}" method="post" enctype="multipart/form-data">{{csrf_field()}}
					<div class="row gutters">
						
						
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
							
							<div class="card h-100">
								<div class="card-body">
<div class="form-group">
                                                            <label for="m_name"> Name </label>
                                                            <input type="text" name="m_name" required="" id="m_name" class="form-control" id="useremail" placeholder="Enter  Name" value="{{$memdetails->m_name}}" readonly>
                                                           
                                                        </div>
<div class="form-group">
                                                            <label for="m_name"> PAN No.</label>
                                                           
                                                            <input type="text" name="pan_no" required="" value="{{$memdetails->m_pan}}" class="form-control"  placeholder="Enter  Pan No." onblur="ValidatePAN()"id="m_pan"readonly>
                                                             <div class="text-danger" id="panerror"></div>
                                                           
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="m_email">Email</label>
                                                            <input type="email" name="m_email" id="m_email" class="form-control" id="useremail" value="{{$memdetails->m_pan}}" placeholder="Enter email"readonly>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="m_mobile">Mobile Number</label>
                                                            <input type="text" name="m_mobile" required="" id="m_mobile" class="form-control" value="{{$memdetails->m_pan}}" id="username" placeholder="Enter Mobile Number">
                                                        </div>

                                                      

                                                        <div class="form-group">
                                                            <label for="sponsor_id">Sponsor ID</label>
                                                            <input type="text" class="form-control" value="{{$memdetails->sponsor_id}}" name="sponsor_id" id="sponsor_id" onblur="getSponsor()" onkeyup="getSponsor()" required="" placeholder="Enter Sponsor ID"readonly>
                                                            <div><p id="sponsor_nameInvalid" style="color: red;"></p></div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="sponsor_name">Sponsor Name</label>
                                                            <input type="text" value="{{$memdetails->sponsor_name}}" name="sponsor_name" id="sponsor_name" class="form-control" id="sponsor_name" readonly="" required="" placeholder="Sponsor Name">
                                                        </div>
                                                           <div class="form-group">
                                                            <input type="text" name="placement_id" value="{{$memdetails->placement_id}}" id="placement_id" onblur="checkMemId()" value="" required="" class="form-control" placeholder="Placement ID*" readonly>
                                                            <div><p id="errorOfPlacementId" style="color: red;"></p></div>
                                                        </div>

                                                        <div class="form-group">
                                                    <select id="placement" onchange="checkPlacement()" class="form-control" required="" name="placement">
                                                       
                                                        <option value="{{$memdetails->placement}}">{{$memdetails->placement}}</option>
                                                      
                                                    </select>
                                                    <div><p id="errorOfPlacement" style="color: red;"></p></div>
                                                </div>

                                                  <div class="form-group">
                                                   <select class="form-control form-control-lg" name="package">
													
													<?php echo $package_dropdown;?>
												</select>
                                                    <div><p id="errorOfPlacement" style="color: red;"></p></div>
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
					@endforeach
				    
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
                                                           
                                                            var sponsorID = document.getElementById('placement_id').value;
                                                            if (sponsorID == "") {
                                                                document.getElementById('sponsor_nameInvalid').innerHTML = "Enter Placement Id ";
                                                            }
                                                            else {
                                                                $.ajax({
                                                                     url: '{{ url('checkplacement') }}',
                                                                       method: "patch",
                                                                       data: {_token: '{{ csrf_token() }}', placement: val, sponsor_id: sponsorID},
                                                                    success: function (data) {
                                                                        if (data.trim() == "") {
                                                                            document.getElementById('errorOfPlacement').innerHTML = data;
                                                                        } else {
                                                                            document.getElementById('placement').value = "";
                                                                            document.getElementById('errorOfPlacement').innerHTML = data;
                                                                        }
                                                                    }
                                                                });
                                                            }
                                                        }


         function ValidatePAN() {
            var panVal = document.getElementById('m_pan').value;
            var regpan = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/;
          

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