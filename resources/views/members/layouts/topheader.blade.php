<header class="header">
	<?php  use \App\Http\Controllers\membercontroller; 


 ?>					
						<div class="toggle-btns">
							<a id="toggle-sidebar" href="#">
								<i class="icon-list"></i>
							</a>
							<a id="pin-sidebar" href="#">
								<i class="icon-list"></i>
							</a>
						</div>
						 <?php $randomsub=membercontroller::memberdetails();   ?>
                        @foreach($randomsub as $rndmsub)
						<div class="header-items">
							<!-- logo -->
							<div class="brand-logo">
                        <a href="http://127.0.0.1:8000"><img src="{{('/upload/Logo/logo.png')}}" class="logohome"></a>
                    </div>


                        <a href="http://127.0.0.1:8000"><img src="http://127.0.0.1:8000/upload/Logo/logo.png" class="logohome"></a>
                    </div>
							<!--end logo -->
							<!-- Custom search start -->
							<div class="custom-search">
								<input type="text" class="search-query" placeholder="Search here ...">
								<i class="icon-search1"></i>
							</div>
							<!-- Custom search end -->

							<!-- Header actions start -->
							<ul class="header-actions">
													
								<li class="dropdown selected">
									<a href="#" id="userSettings" data-toggle="dropdown" aria-haspopup="true">
										<i class="icon-user1"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
										<div class="header-profile-actions">
											<div class="header-user-profile">
												<div class="header-user">
													<img src="../font_assets/images/member/<?php echo $rndmsub->m_photo; ?>" alt="<?php echo $rndmsub->m_photo; ?>">
												</div>
												{{ $rndmsub->m_name }} 
											</div>
											<a href="user-profile.html"><i class="icon-user1"></i> My Profile</a>
											
											<a href="{{url('/logout')}}"><i class="icon-log-out1"></i> Sign Out</a>
										</div>
									</div>
								</li>
								<li class="balance">
									<h6>Member-Id:{{$rndmsub->m_id}}</h6>
									<h6>Package:<?php $randomsubs=membercontroller::packagedetails($rndmsub->package);   ?>
   @foreach($randomsubs as $rndmsubs)
   {{$rndmsubs->package_name }}
@endforeach</h6>
								</li>
							</ul>						
							<!-- Header actions end -->
						</div>@endforeach
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