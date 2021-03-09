Sidebar wrapper start -->

			<nav id="sidebar" class="sidebar-wrapper">

				<!-- Sidebar brand start  -->
				<div class="sidebar-brand">
					<a href="index.html" class="logo">
						<img src="{{asset('upload/Logo/logo.png')}}" alt="DiamondZone Admin Dashboard" />
					</a>
				</div>
				<!-- Sidebar brand end  -->
				
				<!-- User profile start -->
				<div class="sidebar-user-details">
					<div class="user-profile">
						<?php  use \App\Http\Controllers\membercontroller; 


 ?>
						 <?php $randomsub=membercontroller::memberdetails();   ?>
   @foreach($randomsub as $rndmsub)
						<img src="../font_assets/images/member/<?php echo $rndmsub->m_photo; ?>" class="profile-thumb" alt="User Thumb">
						<h6 class="profile-name">{{ $rndmsub->m_name }} </h6> @endforeach
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
								<a href="{{url('member/dashboard')}}" class="current-page">
									<i class="icon-home2"></i>
									<span class="menu-text">Member Dashboard</span>
								</a>
							</li>

							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-calendar1"></i>
									<span class="menu-text">Profile</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
										<a href="{{url('member/EditProfile')}}">Edit Profile</a>
										</li>
										<li>
										<a href="{{url('member/ChangePassword')}}">Change Password</a>
										</li>
										
										
									
									</ul>
								</div>
							</li>
							
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-calendar1"></i>
									<span class="menu-text">Genealogy</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
										<a href="{{url('member/DirectDownline')}}">Direct Downline</a>
										</li>
										<li>
									<a href="{{url('member/LeftDownline')}}">Left Downline</a>
										</li>
										<li>
									<a href="{{url('member/RightDownline')}}">Right Downline</a>
										</li>
										<li>
									<a href="{{url('member/MatchingTree')}}">Matching Tree </a>
										</li>
										
									
									</ul>
								</div>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-calendar1"></i>
									<span class="menu-text">Photo&Talent Hunt</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
										<a href="{{url('member/FamilyPhoto')}}">Family photo</a>
										</li>
										<li>
									<a href="{{url('member/UploadSelfie')}}">Upload Selfie</a>
										</li>
										<li>
									<a href="{{url('member/TalentHunt1')}}">Talent Hunt1</a>
										</li>
										<li>
									<a href="{{url('member/TalentHunt2')}}">Talent Hunt2 </a>
										</li>
										
									
									</ul>
								</div>
							</li>

							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-calendar1"></i>
									<span class="menu-text">Payment Management</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
										<a href="{{url('member/AddPayment')}}">Add Payment</a>
										</li>

									</ul>
								</div>
							</li>

							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-calendar1"></i>
									<span class="menu-text">Report</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
										<a href="{{url('member/ClosingStatement')}}">Closing Report</a>
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