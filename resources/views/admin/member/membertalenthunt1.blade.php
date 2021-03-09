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
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
	
						<!-- Breadcrumb start -->
						<ol class="breadcrumb">
							<li class="breadcrumb-item">Talent Hunt 1 List</li>
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
						

			<form action="{{url('member/TalentHunt1')}}" method="post" enctype="multipart/form-data">{{csrf_field()}}
								<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="myLargeModalLabel">Take Participate</h5>
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
							

									<div class="form-group">
												<label for="inputName">Video Link</label>
												<input type="text" name="videolink" class="form-control" id="inputName" placeholder="Video Link">
									</div>
									<div class="form-group">
												<label for="inputName">Amount</label>
												<input type="text" name="amount" class="form-control" id="amount" value="101" placeholder="Video Link" readonly>
									</div>

									<div class="form-group">
												<label for="inputName">E-wallet</label>
												<input type="text" name="ewallet" class="form-control" id="ewallet" placeholder="E-wallet" onkeyup="checkewallet()"onblur="checkewallet()">
												<div id="errorOfPlacementId" style="color: red"></div>
									</div>

									<div class="form-group">
												<label for="inputName">Online Payment</label>
												<input type="text" name="onlinepayment" class="form-control" id="onlinepayment" placeholder="Online Payment"readonly>
									</div>
									<div class="form-group">
												<label for="inputName">Transaction Id</label>
												<input type="text" name="transactionid" class="form-control" id="inputName" placeholder="Transaction Id">
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
                                              <th>S.No.</th>
											  <th>videolink</th>
											   <th>Status</th>
											     <th>E-Wallet</th>
											     <th>online payment</th>
											        <th>Action</th>
											 
											</tr>
										</thead>
										<tbody>
											<?php  use \App\Http\Controllers\membercontroller; 


 ?>
 <?php $randomsubs=membercontroller::talenthunt1detailsss(); $i=1;  ?>
   @foreach($randomsubs as $rndmsubs)
   <tr>
											  <td>{{$i}}</td>
											   <td>{{$rndmsubs->Image}}</td>
											    <td>{{$rndmsubs->Status}}</td>
											     <td>{{$rndmsubs->E_Wallet}}</td>
											      <td>{{$rndmsubs->online_payment}}</td>

											       <td>
                                                <?php if ($rndmsubs->Status=="Pending") { ?>

                                               <a href="{{url('/admin/approvetalenthunt1/'.$rndmsubs->id)}}" type="button" class="btn btn-primary" title="Approve"><i class="fa fa-check"></i></a>
											   <a href="{{url('/admin/rejecttalenthunt1/'.$rndmsubs->id)}}" type="button" class="btn btn-primary" title="Reject"><i class="fa fa-close"></i></a><?php
                                                 	
                                                 } else{  ?>

                                                 <a type="button" class="btn btn-primary">{{$rndmsubs->Status}}</a><?php



                                                 }      ?>
											     	</td>
											 
											 
											</tr>
  <?php  $i=$i+1;     ?>
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

	<script language="JavaScript">
   
  
    function checkewallet() {

    	var ewallet=document.getElementById('ewallet').value; 
    	var amount=document.getElementById('amount').value; 
    	var balance=amount-ewallet;

    	if (ewallet>100) {
    		data="E-wallet Amount should not be greater than 100"
        document.getElementById('ewallet').value = "";
        document.getElementById('errorOfPlacementId').innerHTML = data;

    	}
    	else{

    	 $.ajax({
                 url: '{{ url('checkewallet') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id:ewallet},
                success: function (data) {
                	
                    if (data.trim() == "") {
                    	
                       document.getElementById('onlinepayment').value = balance; 
                        document.getElementById('errorOfPlacementId').innerHTML = "";

                    } else {
                        document.getElementById('ewallet').value = "";
                        document.getElementById('errorOfPlacementId').innerHTML = data;
                    }
                }
            });

    	}

       
    }
</script>
 


</html>