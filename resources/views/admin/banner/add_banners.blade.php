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
							<li class="breadcrumb-item">Data Tables</li>
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
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add Category</button>

						<form action="#" method="post" enctype="multipart/form-data"><!-- {{csrf_field()}} -->
									<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="myLargeModalLabel">Add Category</h5>
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
										<label for="exampleFormControlTextarea1">Select Sub-Group</label>
										<select class="form-control form-control-lg" name="subgroup">
											<option value="1">--Select-sub-groups--</option>
													
												</select>
									</div>
									
								
							
						</div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="form-group">
												<label for="inputName">Category Name</label>
												<input type="text" name="catname" class="form-control" id="inputName" placeholder="Category name">
											</div>
										</div>

										<div class="col-xl-6 col-lglg-6 col-md-6 col-sm-6 col-6">
											<div class="form-group">
												<label for="inputEmail">Order</label>
												<input type="number" name="order" class="form-control" id="inputName" placeholder="Order">
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
										<textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="2" placeholder="Start from here"></textarea>
									</div>
									
						</div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="form-group">
												<label for="disabledInput">Slug</label>
												<input type="text" name="slug" class="form-control" id="inputName" placeholder="SEO friendly URL">
											</div>
										</div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="form-group">
												<label for="disabledInput">Meta Title</label>
												<input type="text" name="metatitle" class="form-control" id="inputName" placeholder="Meta Title">
											</div>
										</div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							

									<div class="form-group">
										<label for="exampleFormControlTextarea1">Meta Description</label>
										<textarea class="form-control" name="metadescription" id="exampleFormControlTextarea1" rows="2" placeholder="Start from here"></textarea>
									</div>
									
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							

									<div class="form-group">
										<label for="exampleFormControlTextarea1">Cover Image</label>

										
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
													</div>
													<div class="custom-file">
														<input type="file" name="image" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
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
								</li>
						</ul>


					</div>
					<!-- Page header end -->
					
					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						
							<div class="table-container">
								<div class="t-header">No Search Field</div>
								<div class="table-responsive">
									<table id="copy-print-csv" class="table custom-table">
										<thead>
											<tr>
											  <th>Name</th>
											  <th>Position</th>
											  <th>Office</th>
											  <th>Age</th>
											  <th>Start date</th>
											  <th>Salary</th>
											</tr>
										</thead>
										<tbody>
											<tr>
											  <td>Tiger Nixon</td>
											  <td>System Architect</td>
											  <td>Edinburgh</td>
											  <td>61</td>
											  <td>2011/04/25</td>
											  <td>$320,800</td>
											</tr>
											<tr>
											  <td>Garrett Winters</td>
											  <td>Accountant</td>
											  <td>Tokyo</td>
											  <td>63</td>
											  <td>2011/07/25</td>
											  <td>$170,750</td>
											</tr>
											<tr>
											  <td>Ashton Cox</td>
											  <td>Junior Technical Author</td>
											  <td>San Francisco</td>
											  <td>66</td>
											  <td>2009/01/12</td>
											  <td>$86,000</td>
											</tr>
											<tr>
											  <td>Cedric Kelly</td>
											  <td>Senior Javascript Developer</td>
											  <td>Edinburgh</td>
											  <td>22</td>
											  <td>2012/03/29</td>
											  <td>$433,060</td>
											</tr>
											<tr>
											  <td>Airi Satou</td>
											  <td>Accountant</td>
											  <td>Tokyo</td>
											  <td>33</td>
											  <td>2008/11/28</td>
											  <td>$162,700</td>
											</tr>
											<tr>
											  <td>Brielle Williamson</td>
											  <td>Integration Specialist</td>
											  <td>New York</td>
											  <td>61</td>
											  <td>2012/12/02</td>
											  <td>$372,000</td>
											</tr>
											<tr>
											  <td>Herrod Chandler</td>
											  <td>Sales Assistant</td>
											  <td>San Francisco</td>
											  <td>59</td>
											  <td>2012/08/06</td>
											  <td>$137,500</td>
											</tr>
											<tr>
											  <td>Rhona Davidson</td>
											  <td>Integration Specialist</td>
											  <td>Tokyo</td>
											  <td>55</td>
											  <td>2010/10/14</td>
											  <td>$327,900</td>
											</tr>
											<tr>
											  <td>Colleen Hurst</td>
											  <td>Javascript Developer</td>
											  <td>San Francisco</td>
											  <td>39</td>
											  <td>2009/09/15</td>
											  <td>$205,500</td>
											</tr>
											<tr>
											  <td>Sonya Frost</td>
											  <td>Software Engineer</td>
											  <td>Edinburgh</td>
											  <td>23</td>
											  <td>2008/12/13</td>
											  <td>$103,600</td>
											</tr>
											<tr>
											  <td>Jena Gaines</td>
											  <td>Office Manager</td>
											  <td>London</td>
											  <td>30</td>
											  <td>2008/12/19</td>
											  <td>$90,560</td>
											</tr>
											<tr>
											  <td>Quinn Flynn</td>
											  <td>Support Lead</td>
											  <td>Edinburgh</td>
											  <td>22</td>
											  <td>2013/03/03</td>
											  <td>$342,000</td>
											</tr>
											<tr>
											  <td>Charde Marshall</td>
											  <td>Regional Director</td>
											  <td>San Francisco</td>
											  <td>36</td>
											  <td>2008/10/16</td>
											  <td>$470,600</td>
											</tr>
											<tr>
											  <td>Haley Kennedy</td>
											  <td>Senior Marketing Designer</td>
											  <td>London</td>
											  <td>43</td>
											  <td>2012/12/18</td>
											  <td>$313,500</td>
											</tr>
											<tr>
											  <td>Tatyana Fitzpatrick</td>
											  <td>Regional Director</td>
											  <td>London</td>
											  <td>19</td>
											  <td>2010/03/17</td>
											  <td>$385,750</td>
											</tr>
											<tr>
											  <td>Michael Silva</td>
											  <td>Marketing Designer</td>
											  <td>London</td>
											  <td>66</td>
											  <td>2012/11/27</td>
											  <td>$198,500</td>
											</tr>
											<tr>
											  <td>Paul Byrd</td>
											  <td>Chief Financial Officer (CFO)</td>
											  <td>New York</td>
											  <td>64</td>
											  <td>2010/06/09</td>
											  <td>$725,000</td>
											</tr>
											<tr>
											  <td>Gloria Little</td>
											  <td>Systems Administrator</td>
											  <td>New York</td>
											  <td>59</td>
											  <td>2009/04/10</td>
											  <td>$237,500</td>
											</tr>
											<tr>
											  <td>Bradley Greer</td>
											  <td>Software Engineer</td>
											  <td>London</td>
											  <td>41</td>
											  <td>2012/10/13</td>
											  <td>$132,000</td>
											</tr>
											<tr>
											  <td>Dai Rios</td>
											  <td>Personnel Lead</td>
											  <td>Edinburgh</td>
											  <td>35</td>
											  <td>2012/09/26</td>
											  <td>$217,500</td>
											</tr>
											<tr>
											  <td>Jenette Caldwell</td>
											  <td>Development Lead</td>
											  <td>New York</td>
											  <td>30</td>
											  <td>2011/09/03</td>
											  <td>$345,000</td>
											</tr>
											<tr>
											  <td>Yuri Berry</td>
											  <td>Chief Marketing Officer (CMO)</td>
											  <td>New York</td>
											  <td>40</td>
											  <td>2009/06/25</td>
											  <td>$675,000</td>
											</tr>
											<tr>
											  <td>Caesar Vance</td>
											  <td>Pre-Sales Support</td>
											  <td>New York</td>
											  <td>21</td>
											  <td>2011/12/12</td>
											  <td>$106,450</td>
											</tr>
											<tr>
											  <td>Doris Wilder</td>
											  <td>Sales Assistant</td>
											  <td>Sidney</td>
											  <td>23</td>
											  <td>2010/09/20</td>
											  <td>$85,600</td>
											</tr>
											<tr>
											  <td>Angelica Ramos</td>
											  <td>Chief Executive Officer (CEO)</td>
											  <td>London</td>
											  <td>47</td>
											  <td>2009/10/09</td>
											  <td>$1,200,000</td>
											</tr>
											<tr>
											  <td>Gavin Joyce</td>
											  <td>Developer</td>
											  <td>Edinburgh</td>
											  <td>42</td>
											  <td>2010/12/22</td>
											  <td>$92,575</td>
											</tr>
											<tr>
											  <td>Jennifer Chang</td>
											  <td>Regional Director</td>
											  <td>Singapore</td>
											  <td>28</td>
											  <td>2010/11/14</td>
											  <td>$357,650</td>
											</tr>
											<tr>
											  <td>Brenden Wagner</td>
											  <td>Software Engineer</td>
											  <td>San Francisco</td>
											  <td>28</td>
											  <td>2011/06/07</td>
											  <td>$206,850</td>
											</tr>
											<tr>
											  <td>Fiona Green</td>
											  <td>Chief Operating Officer (COO)</td>
											  <td>San Francisco</td>
											  <td>48</td>
											  <td>2010/03/11</td>
											  <td>$850,000</td>
											</tr>
											<tr>
											  <td>Shou Itou</td>
											  <td>Regional Marketing</td>
											  <td>Tokyo</td>
											  <td>20</td>
											  <td>2011/08/14</td>
											  <td>$163,000</td>
											</tr>
											<tr>
											  <td>Michelle House</td>
											  <td>Integration Specialist</td>
											  <td>Sidney</td>
											  <td>37</td>
											  <td>2011/06/02</td>
											  <td>$95,400</td>
											</tr>
											<tr>
											  <td>Suki Burks</td>
											  <td>Developer</td>
											  <td>London</td>
											  <td>53</td>
											  <td>2009/10/22</td>
											  <td>$114,500</td>
											</tr>
											<tr>
											  <td>Prescott Bartlett</td>
											  <td>Technical Author</td>
											  <td>London</td>
											  <td>27</td>
											  <td>2011/05/07</td>
											  <td>$145,000</td>
											</tr>
											<tr>
											  <td>Gavin Cortez</td>
											  <td>Team Leader</td>
											  <td>San Francisco</td>
											  <td>22</td>
											  <td>2008/10/26</td>
											  <td>$235,500</td>
											</tr>
											<tr>
											  <td>Martena Mccray</td>
											  <td>Post-Sales support</td>
											  <td>Edinburgh</td>
											  <td>46</td>
											  <td>2011/03/09</td>
											  <td>$324,050</td>
											</tr>
											<tr>
											  <td>Unity Butler</td>
											  <td>Marketing Designer</td>
											  <td>San Francisco</td>
											  <td>47</td>
											  <td>2009/12/09</td>
											  <td>$85,675</td>
											</tr>
											<tr>
											  <td>Howard Hatfield</td>
											  <td>Office Manager</td>
											  <td>San Francisco</td>
											  <td>51</td>
											  <td>2008/12/16</td>
											  <td>$164,500</td>
											</tr>
											<tr>
											  <td>Hope Fuentes</td>
											  <td>Secretary</td>
											  <td>San Francisco</td>
											  <td>41</td>
											  <td>2010/02/12</td>
											  <td>$109,850</td>
											</tr>
											<tr>
											  <td>Vivian Harrell</td>
											  <td>Financial Controller</td>
											  <td>San Francisco</td>
											  <td>62</td>
											  <td>2009/02/14</td>
											  <td>$452,500</td>
											</tr>
											<tr>
											  <td>Timothy Mooney</td>
											  <td>Office Manager</td>
											  <td>London</td>
											  <td>37</td>
											  <td>2008/12/11</td>
											  <td>$136,200</td>
											</tr>
											<tr>
											  <td>Jackson Bradshaw</td>
											  <td>Director</td>
											  <td>New York</td>
											  <td>65</td>
											  <td>2008/09/26</td>
											  <td>$645,750</td>
											</tr>
											<tr>
											  <td>Olivia Liang</td>
											  <td>Support Engineer</td>
											  <td>Singapore</td>
											  <td>64</td>
											  <td>2011/02/03</td>
											  <td>$234,500</td>
											</tr>
											<tr>
											  <td>Bruno Nash</td>
											  <td>Software Engineer</td>
											  <td>London</td>
											  <td>38</td>
											  <td>2011/05/03</td>
											  <td>$163,500</td>
											</tr>
											<tr>
											  <td>Sakura Yamamoto</td>
											  <td>Support Engineer</td>
											  <td>Tokyo</td>
											  <td>37</td>
											  <td>2009/08/19</td>
											  <td>$139,575</td>
											</tr>
											<tr>
											  <td>Thor Walton</td>
											  <td>Developer</td>
											  <td>New York</td>
											  <td>61</td>
											  <td>2013/08/11</td>
											  <td>$98,540</td>
											</tr>
											<tr>
											  <td>Finn Camacho</td>
											  <td>Support Engineer</td>
											  <td>San Francisco</td>
											  <td>47</td>
											  <td>2009/07/07</td>
											  <td>$87,500</td>
											</tr>
											<tr>
											  <td>Serge Baldwin</td>
											  <td>Data Coordinator</td>
											  <td>Singapore</td>
											  <td>64</td>
											  <td>2012/04/09</td>
											  <td>$138,575</td>
											</tr>
											<tr>
											  <td>Zenaida Frank</td>
											  <td>Software Engineer</td>
											  <td>New York</td>
											  <td>63</td>
											  <td>2010/01/04</td>
											  <td>$125,250</td>
											</tr>
											<tr>
											  <td>Zorita Serrano</td>
											  <td>Software Engineer</td>
											  <td>San Francisco</td>
											  <td>56</td>
											  <td>2012/06/01</td>
											  <td>$115,000</td>
											</tr>
											<tr>
											  <td>Jennifer Acosta</td>
											  <td>Junior Javascript Developer</td>
											  <td>Edinburgh</td>
											  <td>43</td>
											  <td>2013/02/01</td>
											  <td>$75,650</td>
											</tr>
											<tr>
											  <td>Cara Stevens</td>
											  <td>Sales Assistant</td>
											  <td>New York</td>
											  <td>46</td>
											  <td>2011/12/06</td>
											  <td>$145,600</td>
											</tr>
											<tr>
											  <td>Hermione Butler</td>
											  <td>Regional Director</td>
											  <td>London</td>
											  <td>47</td>
											  <td>2011/03/21</td>
											  <td>$356,250</td>
											</tr>
											<tr>
											  <td>Lael Greer</td>
											  <td>Systems Administrator</td>
											  <td>London</td>
											  <td>21</td>
											  <td>2009/02/27</td>
											  <td>$103,500</td>
											</tr>
											<tr>
											  <td>Jonas Alexander</td>
											  <td>Developer</td>
											  <td>San Francisco</td>
											  <td>30</td>
											  <td>2010/07/14</td>
											  <td>$86,500</td>
											</tr>
											<tr>
											  <td>Shad Decker</td>
											  <td>Regional Director</td>
											  <td>Edinburgh</td>
											  <td>51</td>
											  <td>2008/11/13</td>
											  <td>$183,000</td>
											</tr>
											<tr>
											  <td>Michael Bruce</td>
											  <td>Javascript Developer</td>
											  <td>Singapore</td>
											  <td>29</td>
											  <td>2011/06/27</td>
											  <td>$183,000</td>
											</tr>
											<tr>
											  <td>Donna Snider</td>
											  <td>Customer Support</td>
											  <td>New York</td>
											  <td>27</td>
											  <td>2011/01/25</td>
											  <td>$112,000</td>
											</tr>
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