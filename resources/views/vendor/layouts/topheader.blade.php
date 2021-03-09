<header class="header">
						<div class="toggle-btns">
							<a id="toggle-sidebar" href="#">
								<i class="icon-list"></i>
							</a>
							<a id="pin-sidebar" href="#">
								<i class="icon-list"></i>
							</a>
						</div>
						<div class="header-items">
							<!-- Custom search start -->
							<div class="custom-search">
								<input type="text" class="search-query" placeholder="Search here ...">
								<i class="icon-search1"></i>
							</div>
							<!-- Custom search end -->

							<!-- Header actions start -->
							<ul class="header-actions">
								<li class="dropdown">
									<a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
										<i class="icon-bell"></i>
										<span class="count-label">1</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
										<div class="dropdown-menu-header">
											Notifications (40)
										</div>
										<ul class="header-notifications">
											<li>
												<a href="#">
													<div class="user-img away">
														<img src="{{asset('admin_assets/img/user21.png')}}" alt="User">
													</div>
													<div class="details">
														<div class="user-title">Vijay</div>
														<div class="noti-details">Create Seller Account.</div>
														<div class="noti-date">Oct 20, 07:30 pm</div>
													</div>
													
												</a>
											</li>
											<li>
												<a href="#">
													<div class="user-img away">
														<img src="{{asset('admin_assets/img/user21.png')}}" alt="User">
													</div>
													<div class="details">
														<div class="user-title">Vijay</div>
														<div class="noti-details">Create Seller Account.</div>
														<div class="noti-date">Oct 20, 07:30 pm</div>
													</div>
													
												</a>
											</li>
											
										</ul>
									</div>
								</li>							
								<li class="dropdown selected">
									<a href="#" id="userSettings" data-toggle="dropdown" aria-haspopup="true">
										<i class="icon-user1"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
										<div class="header-profile-actions">
											<div class="header-user-profile">
												<div class="header-user">
													<img src="{{asset('admin_assets/img/user2.png')}}" alt="Admin Template">
												</div>
												{{ Auth::user()->name }} 
											</div>
											<a href="user-profile.html"><i class="icon-user1"></i> My Profile</a>
											<a href="account-settings.html"><i class="icon-settings1"></i> Account Settings</a>
											<a href="{{url('/logout')}}"><i class="icon-log-out1"></i> Sign Out</a>
										</div>
									</div>
								</li>
								<li class="balance">
									<h6>Balance</h6>
									<h3>25,700</h3>
								</li>
							</ul>						
							<!-- Header actions end -->
						</div>
					</header>
					<!-- Page header start -->
					<!-- <div class="page-header"> -->
						
						<!-- Breadcrumb start -->
						<!-- <ol class="breadcrumb">
							<li class="breadcrumb-item">Admin Dashboard</li>
						</ol> -->
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

					<!-- </div> -->
					<!-- Page header end -->