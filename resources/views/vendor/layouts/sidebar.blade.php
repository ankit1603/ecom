<!--Sidebar wrapper start -->
			<nav id="sidebar" class="sidebar-wrapper">

				<!-- Sidebar brand start  -->
				<!-- <div class="sidebar-brand">
					<a href="index.html" class="logo">
						<img src="{{asset('upload/Logo/logo.png')}}" alt="DiamondZone Admin Dashboard" />
					</a>
				</div> -->
				<!-- Sidebar brand end  -->
				
				<!-- User profile start -->
				<div class="sidebar-user-details">
					<div class="user-profile">
						<img src="{{asset('font_assets/images/icon/user.png')}}" class="profile-thumb" alt="User Thumb">
						<h6 class="profile-name">Vendor</h6>
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
				<div class="sidebar-content">

					<!-- sidebar menu start -->
					<div class="sidebar-menu">
						<ul>
							<li class="active">
								<a href="{{url('vendor/dashboard')}}" class="current-page">
									<i class="icon-home2"></i>
									<span class="menu-text">Vendor Dashboard</span>
								</a>
							</li>
							
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-calendar1"></i>
									<span class="menu-text">Categories</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="add-category">Groups</a>
										</li>
										<li>
											<a href="add-subCategory">Sub-Groups</a>
										</li>
										<li>
							<a href="add-mainCategory">Categories</a>
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
											<a href="view">Products</a>
										</li>
										<li>
											<a href="view-inventory">Manage Inventory</a>
										</li>
										<li>
											<a href="inventory-planning">Inventory Planning</a>
										</li>

										
									
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
										<!-- <li>
											<a href="{{url('vendor/order')}}">All Orders</a>
										</li> -->
										<li>
											<a href="order">All Orders</a>
										</li>
										<li>
											<a href="productdelstatus">New Orders for Seller</a>
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
								<li>
								<a href="orderdetail">
									<i class="icon-line-graph"></i>
									<span class="menu-text">Order Details</span>
								</a>
							</li>

							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-border_all"></i>
									<span class="menu-text">Commission Charge </span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="#">Total sale </a>
										</li>
										<li>
											<a href="#">Total admin commission  </a>
										</li>
										<li>
											<a href="#">Total Paid commission </a>
										</li>
										<li>
											<a href="#">Pending Commission </a>
										</li>
										<li>
											<a href="#">Pay Now </a>
										</li>
										
									</ul>
								</div>
							</li>

							<li class="sidebar-dropdown">
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
							</li>
							
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-unlock"></i>
									<span class="menu-text">Support Desk</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="#">Messages</a>
										</li>
										<li>
											<a href="#">Dispute</a>
										</li>
										<li>
											<a href="#">Refunds</a>
										</li>
										
									</ul>
								</div>
							</li>
						</ul>
					</div>
					<!-- sidebar menu end -->

				</div>
				<!-- Sidebar content end -->
				
			</nav>
			<!-- Sidebar wrapper end