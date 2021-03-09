<!--header part start -->
<?php  use \App\Http\Controllers\indexcontroller; 


 ?>
<header class="header-1">
    <div class="mobile-fix-header">
    </div>
    <div class="container">
        <div class="row header-content">
          
            <div class="col-lg-9 col-6">
                <div class="right-part">
                    <ul>
                        <li><a href="{{url('pages/11')}}">Today's deal</a></li>
                        <li><a href="{{url('pages/4')}}">Terms & conditions</a></li>
                        <li><a href="{{url('pages/5')}}">Return & exchanges</a></li>
                        <li><a href="{{url('pages/6')}}">Shipping & delivery</a></li>
                    
                </ul>
                </div>
            </div>
        </div>
        <div class="row header-content">
            <div class="col-12">
                <div class="header-section">
                    <div class="navbar">
                        <a href="javascript:void(0)" onclick="openNav()">
                            <div class="bar-style"><i class="fa fa-bars sidebar-bar" aria-hidden="true"></i></div>
                        </a>
                        <div id="mySidenav" class="sidenav">
                            <a href="javascript:void(0)" class="sidebar-overlay" onclick="closeNav()"></a>
                            <nav class="">
                                <div onclick="closeNav()">
                                    <div class="sidebar-back text-left"><i class="fa fa-angle-left pr-2" aria-hidden="true"></i> Back</div>
                                </div>
                                <ul id="sub-menu" class="sm pixelstrap sm-vertical ">

                                     @foreach($subcategory as $subcat)

                                    <li class="mega"><a href="{{url('/groups/'.$subcat->id)}}">{{$subcat->name}}</a>
                                        <ul class="mega-menu vertical-mega-menu">
                                            <li>
                                                <div class="container"> 
                                                    <div class="row">

                                                        <?php  $group= $subcat->id;   ?>

                                                         @foreach($subgroup as $b)
                                                         <?php $sgroup=$b->category_group_id ;
                                                         if ($sgroup ==$group) {
                                                          
                                                           ?>
                                                        <div class="col-xl-4 mega-box">
                                                            <div class="link-section">
                                                                <div class="demo">
                                            <div class="menu-title">
                                            <h6>{{$b->name}}</h6>
                                                                    </div>

                                                                   
                                            <div class="menu-content">

                                                 @foreach($maincategory as $m)
                                            <?php $ssssgroup=$b->id; $ssgroup=$m->category_sub_group_id  ;
                                            if ($ssgroup ==$ssssgroup) {
                                                          
                                                           ?>  
                                                                        <ul>
                                 <li><a target="_blank" href="{{url('/category/'.$m->id)}}">{{$m->name}}</a></li>
                               
                                                                        </ul>
                                                                        <?php  }  ?>
                                                                        
                                                                        @endforeach 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><?php  }  ?>
                                                         @endforeach

                          
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    @endforeach
                                    <!-- <li><a href="#">Appliances, Electronics</a>
                                        <ul>
                                            <li><a href="#">tvs</a></li>
                                            <li><a href="#">refrigerator</a></li>
                                            <li><a href="#">computers</a></li>
                                            <li><a href="#">more</a>
                                                <ul>
                                                    <li><a href="#">speakers</a></li>
                                                    <li><a href="#">washing</a></li>
                                                    <li><a href="#">laptops</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Men's Fashion</a>
                                        <ul>
                                            <li><a href="#">indian wear</a></li>
                                            <li><a href="#">western wear</a></li>
                                            <li><a href="#">sports wear</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Women's Fashion</a>
                                        <ul>
                                            <li><a href="#">fashion jewellery</a></li>
                                            <li><a href="#">caps and hats</a></li>
                                            <li><a href="#">precious jewellery</a></li>
                                            <li><a href="#">more..</a>
                                                <ul>
                                                    <li><a href="#">necklaces</a></li>
                                                    <li><a href="#">earrings</a></li>
                                                    <li><a href="#">wrist wear</a></li>
                                                    <li><a href="#">belts & more</a></li>
                                                    <li><a href="#">wearable</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Home, Kitchen, Pets</a>
                                    </li>
                                    <li><a href="#">Beauty, Health, Grocery</a>
                                        <ul>
                                            <li><a href="#">makeup</a></li>
                                            <li><a href="#">skincare</a></li>
                                            <li><a href="#">premium beaty</a></li>
                                            <li><a href="#">more</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Sports, Bags, Luggage</a>
                                    </li>
                                    <li><a href="#">Toys, Baby Products</a>
                                    </li>
                                    <li><a href="#">Books</a>
                                    </li> -->
                                </ul>
                            </nav>
                        </div>
                    </div>

                 

                    <div class="search-bar">
                        <input class="search__input" type="text" placeholder="Search a product">
                        <div class="search-icon "></div>
                    </div>
                    <div class="nav-icon">
                        <ul>
                            <li class="onhover-div setting-icon">
                                <div><img src="{{asset('font_assets/images/icon/settings.png')}}" class=" img-fluid setting-img" alt="">
                                    <i class="ti-settings mobile-icon"></i>
                                </div>
                               
                            </li>
                            <li class="onhover-div search-3">
                                <div onclick="openSearch()">
                                    <i class="ti-search mobile-icon-search" ></i>
                                    <img src="{{asset('font_assets/images/icon/l-1/search.png')}}" class=" img-fluid search-img" alt="">
                                </div>
                                <div id="search-overlay" class="search-overlay">
                                    <div>
                                        <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                                        <div class="overlay-content">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <form>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Search a Product">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li><?php
                            if($user = Auth::user())
            {   ?>
             
        
                            <li class="onhover-div wishlist-icon" onclick="openWishlist()">
                                <img src="{{asset('font_assets/images/icon/l-1/wishlist.png')}}" alt=""  class="wishlist-img">
                                <i class="ti-heart mobile-icon"></i>
                                <div class="wishlist icon-detail">
                                    <h6 class="up-cls"><span>  <?php  $randomsub=indexcontroller::totalwishlist();   ?>
                                          {{$randomsub}} item</span></h6>
                                    <h6><a href="{{url('/myAccount')}}">wish list</a></h6>
                                </div>
                            </li><?php   }  ?>
                            <li class="onhover-div user-icon" onclick="openAccount()">
                                <img src="{{asset('font_assets/images/icon/l-1/user.png')}}" alt="" class="user-img">
                                <i class="ti-user mobile-icon"></i>
                                <div class="wishlist icon-detail">
                                    <h6 class="up-cls"><span>my account</span></h6>
                                    <h6><a href="{{url('/myAccount')}}">login/sign up</a></h6>
                                </div>
                            </li>
                            <li class="onhover-div cart-icon" onclick="openCart()">
                                <img src="{{asset('font_assets/images/icon/l-1/shopping-cart.png')}}" alt="" class="cart-image">
                                <i class="ti-shopping-cart mobile-icon"></i>
                                <div class="cart icon-detail">
                                    <h6 class="up-cls"><span><b><?php  $randomsub=indexcontroller::totalitemincart();   ?>
                                          {{$randomsub}}</b> item</span></h6>
                                    <h6><a href="#">my cart</a></h6>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-class">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav id="main-nav">
                        <div class="toggle-nav">
                            <i class="ti-menu-alt"></i>
                        </div>
                        <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                            <li>
                                <div class="mobile-back text-right">
                                    Back<i class="fa fa-angle-right pl-2" aria-hidden="true"></i>
                                </div>
                            </li>
                            <li class="icon-cls"><a href="{{url('/')}}"><i class="fa fa-home home-icon" aria-hidden="true"></i></a></li>
                            <!-- <li><a href="#">Home</a>
                                <ul>
                                    <li><a href="index.html">mega store 1</a></li>
                                    <li><a href="layout-2.html">mega store 2</a></li>
                                    <li><a href="layout-3.html">mega store 3</a></li>
                                    <li><a href="layout-4.html">mega store 4</a></li>
                                    <li><a href="layout-5.html">kids</a></li>
                                    <li><a href="layout-6.html">furniture</a></li>
                                    <li><a href="layout-7.html">eletronics</a></li>
                                    <li><a href="layout-8.html">sports</a></li>
                                    <li><a href="layout-9.html">fashion</a></li>
                                    <li><a href="layout-10.html">cosmetic</a></li>
                                    <li><a href="layout-11.html">tools</a></li>
                                    <li><a href="layout-12.html">vegetables</a></li>
                                </ul>
                            </li> -->
                            @foreach($subcategory as $subcat)
                            <li><a href="{{url('/groups/'.$subcat->id)}}">{{$subcat->name}}</a></li>
                            @endforeach 
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End header part 