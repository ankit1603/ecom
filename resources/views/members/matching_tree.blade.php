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
		<title>Tow true Way</title>

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

	<style>
        .tooltipme {
            position: relative;
            display: inline-block;
            /*//border-bottom: 1px dotted black;*/
            margin-top: 10px;
            margin-bottom: 0px;

        }

        .tooltipme .tooltipmetext {
            z-index: 888!important;
            visibility: hidden;
            font-size: 14px;
            font-weight: 100;
            line-height: 18px;
            width: 240px;
            background-color: #555;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;
            position: absolute;
            top: 125%;
            left: 50%;
            margin-left: -120px;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .tooltipme .tooltipmetext::after {
            content: "";
            position: absolute;
            bottom: 100%;
            left: 50%;
            margin-left: -10px;
            border-width: 10px;
            border-style: solid;
            border-color: transparent transparent #555  transparent;
        }

        .tooltipme:hover .tooltipmetext {
            visibility: visible;
            opacity: 1;
            border: #007bff solid 2px;
        }
        /*        .tooltipme::after{
                    content: "|";
                    font-size: 20px;
                    color: black;
                    position: absolute;
                    top: 100%;
                    left: 80%;
                    margin-left: -10px;
                }*/
        .green-bg{
            border: #00ff00 solid 2px;
        }
        .silver-bg{
            border: #ccc solid 2px;
        }
        .gold-bg{
            border: #ffff00 solid 2px;
        }
        .diamond-bg{
            border: #007bff solid 2px;
        }
    </style>

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
							<li class="breadcrumb-item">Matching Tree</li>
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
							
				</ul>
			</div>

			
					<!-- Page header end -->
					
					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						
                                    <div id="getTree" class="card card-body text-center" style=" padding-top: 30px; padding-bottom: 100px;">
                                        <div class="row">
                                            <div class="col-12">
                                            	<?php  use \App\Http\Controllers\membercontroller; 

 ?>
                                              @foreach($member as $product)

                                              <?php   $memberID = $product->m_id;  ?>

                                           
                                               
                                                <i onmouseover="generateTree(<?php echo $memberID; ?>)" class="tooltipme">
                                                    <img class="user-img-radious-style" height="50" src="../font_assets/images/icon/{{$product->m_photo}}" alt="Member Photo"/><br/>
                                                         
                                                    <span class="tooltipmetext" tabindex="1">ID : <?php
                                                        echo $memberID;
                                                         ?> <br/> Name : <?php echo $product->m_name;
                                                         ?> <br/>Mobile : <?php echo $product->m_mobile;
                                                         ?><br/>Email : <?php echo $product->m_email;
                                                         ?><br/>Joining date : <?php echo $product->m_date;
                                                         ?> </span>
                                                </i>
                                                   @endforeach
                                            </div>
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

	 <script>
        function generateTree(id) {
            $.ajax({
                url: '{{ url('generatetreee') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', member_id:id},
                success: function (data) {
                    document.getElementById('getTree').innerHTML = data;
                }
            });
        }
    </script> 


</html>