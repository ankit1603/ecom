
			<nav id="sidebar" class="sidebar-wrapper" style="overflow: scroll;">

				<!-- Sidebar brand start  -->
				<!-- <div class="sidebar-brand">
					<a href="index.html" class="logo">
						<img src="{{asset('upload/Logo/logos.png')}}" alt="Admin Dashboard" style="width: 300px;height: 300px;" />
					</a>
				</div> -->
				<!-- Sidebar brand end  -->
				
				<!-- User profile start -->
				<div class="sidebar-user-details" >
					<div class="user-profile">
						<img src="{{asset('font_assets/images/icon/user.png')}}" class="profile-thumb" alt="User Thumb">
						<h6 class="profile-name">Admin</h6>
						<ul class="profile-actions">
							<li>
								<a href="javascript:void(0)">
									<i class="icon-gitlab"></i>
									<span class="count-label green"></span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									<i class="icon-twitter1"></i>
								</a>
							</li>
							<li>
								<a href="{{url('/logout')}}">
									<i class="icon-exit_to_app"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- User profile end -->

				<!-- Sidebar content start -->
				<div class="sidebar-content" >

					<!-- sidebar menu start -->
					<div class="sidebar-menu"  >
						<ul>
							<li class="active">
								<a href="{{url('admin/dashboard')}}" class="current-page">
									<i class="icon-home2"></i>
									<span class="menu-text">Admin Dashboard</span>
								</a>
							</li>
							


							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-calendar1"></i>
									<span class="menu-text">Category Management</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="{{url('admin/add-category')}}">Categories</a>
										</li>
										<li>
											<a href="{{url('admin/add-subCategory')}}">Sub-Categories</a>
										</li>
										<li>
											<a href="{{url('admin/add-mainCategory')}}">Main-Categories</a>
										</li>
										<li>
											<a href="{{url('admin/brand')}}">Brands</a>
										</li>
										
									</ul>
								</div>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-calendar1"></i>
									<span class="menu-text">Product Management</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										
										<li>
											<a href="{{url('admin/view')}}">Products</a>
										</li>
										<li>
											<a href="{{url('admin/coupanm')}}">Coupons</a>
										</li>
										<li>
											<a href="{{url('admin/variationparameters')}}">Attributes</a>
										</li>
										<li>
											<a href="{{url('admin/addvariation')}}">Variations</a>
										</li>
										<li>
											<a href="{{url('admin/view-inventory')}}">Manage Inventory</a>
										</li>
									
									</ul>
								</div>
							</li>
							<!-- <li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-box"></i>
									<span class="menu-text">Member Management</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
									<a href="{{url('admin/memberRegistration')}}">Member Registration</a>
										</li>
										<li>
								   <a href="{{url('admin/memberList')}}">Member List</a>
										</li>
										<li>
								   <a href="{{url('admin/DirectDownline')}}">Direct Downline</a>
										</li>
										<li>
									<a href="{{url('admin/LeftDownline')}}">Left Downline</a>
										</li>
										<li>
									<a href="{{url('admin/RightDownline')}}">Right Downline</a>
										</li>
										<li>
									<a href="{{url('admin/MatchingTree')}}">Matching Tree </a>
										</li>

										<li>
									<a href="{{url('admin/MemberSelfieList')}}">Selfie List </a>
										</li>
										<li>
									<a href="{{url('admin/MemberTalentHuntList1')}}">Talent Hunt List1 </a>
										</li>
										<li>
									<a href="{{url('admin/MemberTalentHuntList2')}}">Talent Hunt List2 </a>
										</li>
										<li>
									<a href="{{url('admin/MemberRewardedList')}}">Member Rewarded List </a>
										</li>

										<li>
									<a href="{{url('admin/MemberClosingStatement')}}">Closing Statement </a>
										</li>
										
									</ul>
								</div>
							</li> -->
							<li>
								<a href="{{url('admin/manufacturer')}}">
									<i class="icon-line-graph"></i>
									<span class="menu-text">Manufacturers</span>
								</a>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-calendar1"></i>
									<span class="menu-text">User Management</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										
										
										<li>
											<a href="{{url('admin/customer')}}">Customers</a>
										</li>
										
									</ul>
								</div>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-box"></i>
									<span class="menu-text">Vendor Management</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
									<a href="{{url('admin/merchant')}}">Vendor Details</a>
										</li>
										<li>
											<a href="vendorlist">Vendor List</a>
											</li>
											<li>
												<a href="vendorreq">New Vendor Request</a>
												</li>
										
										<!-- <li>
									<a href="{{url('admin/Vendor-commision')}}">Vendor Commission</a>
										</li> -->
										
									</ul>
								</div>
							</li>

							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-star2"></i>
									<span class="menu-text">Order Management</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="order">New Orders</a>
										</li>
										<li>
											<a href="productdelstatus">New Orders for vendor</a>
										</li>
										<li>
											<a href="pendingv">Pending to vendor</a>
										</li>
										<li>
											<a href="deliverys">Delivery Process</a>
										</li>
										<li>
											<a href="delivered">Delivered</a>
										</li>
										<li>
											<a href="cancelled">Cancelled</a>
										</li>
										<li>
											<a href="returnreq">Return request</a>
										</li>
										
									</ul>
								</div>
							</li>

							
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-pie-chart1"></i>
									<span class="menu-text">Pages</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
								<?php 	
									use \App\Http\Controllers\adminController; 
									$pagecount=adminController::sidepages();  ?>
								@foreach($pagecount as $pcount) 

                                <?php $id=$pcount->id; ?>
										<li>
											<a href="{{url('pagesr/'.$id.'')}}">{{$pcount->pagename}}</a>
										</li>
										
										@endforeach
									</ul>
								</div>
							</li>

						
							
							
							
							<!-- <li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-book-open"></i>
									<span class="menu-text">Stock</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="{{url('admin/stock/inventory')}}">Inventories</a>
										</li>										
										<li>
											<a href="{{url('admin/stock/warehouse')}}">WareHouses</a>
										</li>

										<li>
											<a href="{{url('admin/stock/supplier')}}">Supplier</a>
										</li>

									
									</ul>
								</div>
							</li>	 -->	
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-edit1"></i>
									<span class="menu-text">Appearance</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="{{url('admin/slider')}}">Sliders</a>
										</li>
										<li>
											<a href="#">Banners</a>
										</li>
										
									</ul>
								</div>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-edit1"></i>
									<span class="menu-text">Support Desk</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="newticket">New Tickets</a>
										</li>
										<li>
											<a href="openticket">Open Ticket</a>
										</li>
										<li>
											<a href="closedticket">Closed Ticket</a>
										</li>
										<li>
											<a href="esclatedticket">Esclated Ticket</a>
										</li>
										
									</ul>
								</div>
							</li>
							
						
							
							
							<!-- <li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-border_all"></i>
									<span class="menu-text">Shipping</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="deliverys">Shipping Zone</a>
										</li>
										
									</ul>
								</div>
							</li> -->
							<!-- <li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-pie-chart1"></i>
									<span class="menu-text">Promotions</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="coupanm">Coupons</a>
										</li>
										
									</ul>
								</div>
							</li> -->
						
							
						</ul>
					</div>
					<!-- sidebar menu end -->

				</div>
				<!-- Sidebar content end -->
				
			</nav>
			<!-- Sidebar wrapper end