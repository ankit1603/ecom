<!DOCTYPE html>
<html lang="en">
 @include('storefront.layouts.head')
<body>
    <!-- loader start -->
 <div class="loader-wrapper">
    <div class=" bar">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    </div>
</div>
    <!-- loader end -->
   <?php   use \App\Http\Controllers\indexcontroller;   ?> 
<!-- header part start -->
 @include('storefront.layouts.header')
<!-- header part end -->


<!-- home slider section start-->

 @include('storefront.layouts.slider')

<!-- home slider section end-->

<!-- feature section start -->
@include('storefront.feature.featuresection')
<!-- feature section end -->

<!-- banner section start -->
<section class="section-b-space banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-content">
                    <h6>summer sale</h6>
                    <h2>are You getting your <span>weekly deals?</span></h2>
                    <h4>always saving your money</h4>
                    <div class="banner-btn">
                        <h6>use your promo code  <span>save101</span> and getting your deal</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Start Facebook Login -->
   <!--  <div class="container">
        <div class="d-flex justify-content-center mt-5">
            <a href="{{route('login.facebook')}}" class="btn btn-primary">
                <i class="fab fa-facebook-square fa-2x float-left"></i>
                <span class="float-right ml-2" style="margin-top:3px">Login with Facebook</span>
            </a>
        </div>
    </div> -->

<!-- End Facebook Login -->

<!-- banner section start -->


<!-- tab section start -->
<?php 

 ?>
 <section class="section-b-space tab-layout1 ratio_square">
    <div class="theme-tab">
        <div class="drop-shadow">
            <div class="left-shadow">
                <img src="{{asset('font_assets/images/left.png')}}" alt="" class=" img-fluid">
            </div>
            <div class="right-shadow">
                <img src="{{asset('font_assets/images/right.png')}}" alt="" class=" img-fluid">
            </div>
        </div>
        <ul class="tabs">
            <li class="current">
                <a href="tab-1">top rated</a>
            </li>
            <li class="">
                <a href="tab-2">on sale</a>
            </li>
            <li class="">
                <a href="tab-3">30% off</a>
            </li>
            <li class="">
                <a href="tab-4">most popular</a>
            </li>
            <li class="">
                <a href="tab-5">popular</a>
            </li>
        </ul>
        <div class="tab-content-cls">
             <div id="tab-1" class="tab-content active default" >
                <div class="container">
                    <div class="row border-row1">
                        @foreach($subcategoryrandom as $subcdscs)
                         <?php $randomsub=indexcontroller::randomsubgroup($subcdscs->id);   ?>
                    @foreach($randomsub as $rndmsub)
                   <?php $randomcat=indexcontroller::randomcategory($rndmsub->id);   ?>

                    @foreach($randomcat as $rndomcat)
                       <?php $randomprod=indexcontroller::randomproduct($rndomcat->id);   ?>
                         @foreach($randomprod as $rndomprod)
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="{{url('/product/'.$rndomprod->id)}}"><img src="upload/product/{{$rndomprod->image}}" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                         <button tabindex="0" class="addcart-box" title="Quick shop"><i class="ti-shopping-cart" ></i></button>
                                        <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                        <a href="javascript:void(0)"   title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                  
                                    
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>{{$rndomprod->name}}</h6></a>
                                    <h5><i class="fa fa-rupee"></i>{{round($rndomprod->min_price)}}</h5>
                                </div>
                                <div class="addtocart_box">
                                    <div class="addtocart_detail">
                                        <div>
                                            <div class="color">
                                                <h5>color</h5>
                                                <ul class="color-variant">
                                                    <li class="light-purple active"></li>
                                                    <li class="theme-blue"></li>
                                                    <li class="theme-color"></li>
                                                </ul>
                                            </div>
                                            <div class="size">
                                                <h5>size</h5>
                                                <ul class="size-box">
                                                    <li class="active">xs</li>
                                                    <li>s</li>
                                                    <li>m</li>
                                                    <li>l</li>
                                                    <li>xl</li>
                                                </ul>
                                            </div>
                                            <div class="addtocart_btn">
                                                <?php  if($user = Auth::user())
{   ?>
                                    <!-- <a href="{{url('/session/sets/'.$rndomprod->id)}}"  data-toggle="modal" class="closeCartbox" data-target="" tabindex="0">add to cart</a> <?php  } else { ?> -->
                                          <a href="{{url('/session/set/'.$rndomprod->id)}}"   class="closeCartbox" data-target="" tabindex="0">add to cart</a><?php }  ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                         @endforeach
                      @endforeach
                     @endforeach
                      @endforeach

                    </div>
                </div>
            </div>

            <div id="tab-2" class="tab-content" >
                <div class="container">
                    <div class="row border-row1">
                      
                         @foreach($productsrandom as $rndomprod)
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="{{url('/product/'.$rndomprod->id)}}"><img src="upload/product/{{$rndomprod->image}}" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">

                                         <button tabindex="0" class="addcart-box" title="Quick shop"><i class="ti-shopping-cart" ></i></button>
                                        <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                      
                                        
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    
                                    
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>{{$rndomprod->name}}</h6></a>
                                    <h5><i class="fa fa-rupee"></i>{{round($rndomprod->min_price)}}</h5>
                                </div>
                                <div class="addtocart_box">
                                    <div class="addtocart_detail">
                                        <div>
                                            <div class="color">
                                                <h5>color</h5>
                                                <ul class="color-variant">
                                                    <li class="light-purple active"></li>
                                                    <li class="theme-blue"></li>
                                                    <li class="theme-color"></li>
                                                </ul>
                                            </div>
                                            <div class="size">
                                                <h5>size</h5>
                                                <ul class="size-box">
                                                    <li class="active">xs</li>
                                                    <li>s</li>
                                                    <li>m</li>
                                                    <li>l</li>
                                                    <li>xl</li>
                                                </ul>
                                            </div>
                                            <div class="addtocart_btn">
                                               <?php  if($user = Auth::user())
{   ?>
                                    <a href="{{url('/session/sets/'.$rndomprod->id)}}"  data-toggle="modal" class="closeCartbox" data-target="" tabindex="0">add to cart</a> <?php  } else { ?>
                                          <a href="{{url('/session/set/'.$rndomprod->id)}}"   class="closeCartbox" data-target="" tabindex="0">add to cart</a><?php }  ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                         @endforeach
                    

                    </div>
                </div>
            </div>

             <div id="tab-3" class="tab-content" >
                <div class="container">
                    <div class="row border-row1">
                      
                        @foreach($categrandom as $rndomcat)
                       <?php $randomprod=indexcontroller::randomproduct($rndomcat->id);   ?>
                         @foreach($randomprod as $rndomprod)
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="{{url('/product/'.$rndomprod->id)}}"><img src="upload/product/{{$rndomprod->image}}" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                         <button tabindex="0" class="addcart-box" title="Quick shop"><i class="ti-shopping-cart" ></i></button>
                                       <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                  
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>{{$rndomprod->name}}</h6></a>
                                    <h5><i class="fa fa-rupee"></i>{{round($rndomprod->min_price)}}</h5>
                                </div>
                                <div class="addtocart_box">
                                    <div class="addtocart_detail">
                                        <div>
                                            <div class="color">
                                                <h5>color</h5>
                                                <ul class="color-variant">
                                                    <li class="light-purple active"></li>
                                                    <li class="theme-blue"></li>
                                                    <li class="theme-color"></li>
                                                </ul>
                                            </div>
                                            <div class="size">
                                                <h5>size</h5>
                                                <ul class="size-box">
                                                    <li class="active">xs</li>
                                                    <li>s</li>
                                                    <li>m</li>
                                                    <li>l</li>
                                                    <li>xl</li>
                                                </ul>
                                            </div>
                                            <div class="addtocart_btn">
                                                <?php  if($user = Auth::user())
{   ?>
                                    <a href="{{url('/session/sets/'.$rndomprod->id)}}"  data-toggle="modal" class="closeCartbox" data-target="" tabindex="0">add to cart</a> <?php  } else { ?>
                                          <a href="{{url('/session/set/'.$rndomprod->id)}}"   class="closeCartbox" data-target="" tabindex="0">add to cart</a><?php }  ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                         @endforeach
                           @endforeach
                    

                    </div>
                </div>
            </div>

            <div id="tab-4" class="tab-content" >
                <div class="container">
                    <div class="row border-row1">
                      
                         @foreach($subgrouprandom as $rndmsub)
                   <?php $randomcat=indexcontroller::randomcategory($rndmsub->id);   ?>

                    @foreach($randomcat as $rndomcat)
                       <?php $randomprod=indexcontroller::randomproduct($rndomcat->id);   ?>
                         @foreach($randomprod as $rndomprod)
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="{{url('/product/'.$rndomprod->id)}}"><img src="upload/product/{{$rndomprod->image}}" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                         <button tabindex="0" class="addcart-box" title="Quick shop"><i class="ti-shopping-cart" ></i></button>
                                        <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                   
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>{{$rndomprod->name}}</h6></a>
                                    <h5><i class="fa fa-rupee"></i>{{round($rndomprod->min_price)}}</h5>
                                </div>
                                <div class="addtocart_box">
                                    <div class="addtocart_detail">
                                        <div>
                                            <div class="color">
                                                <h5>color</h5>
                                                <ul class="color-variant">
                                                    <li class="light-purple active"></li>
                                                    <li class="theme-blue"></li>
                                                    <li class="theme-color"></li>
                                                </ul>
                                            </div>
                                            <div class="size">
                                                <h5>size</h5>
                                                <ul class="size-box">
                                                    <li class="active">xs</li>
                                                    <li>s</li>
                                                    <li>m</li>
                                                    <li>l</li>
                                                    <li>xl</li>
                                                </ul>
                                            </div>
                                            <div class="addtocart_btn">
                                               <?php  if($user = Auth::user())
{   ?>
                                    <a href="{{url('/session/sets/'.$rndomprod->id)}}"  data-toggle="modal" class="closeCartbox" data-target="" tabindex="0">add to cart</a> <?php  } else { ?>
                                          <a href="{{url('/session/set/'.$rndomprod->id)}}"   class="closeCartbox" data-target="" tabindex="0">add to cart</a><?php }  ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                         @endforeach
                           @endforeach
                             @endforeach
                    

                    </div>
                </div>
            </div>
            <div id="tab-5" class="tab-content" >
                <div class="container">
                    <div class="row border-row1">
                      
                        @foreach($categrandomt as $rndomcat)
                       <?php $randomprod=indexcontroller::randomproductt($rndomcat->id);   ?>
                         @foreach($randomprod as $rndomprod)
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="{{url('/product/'.$rndomprod->id)}}"><img src="upload/product/{{$rndomprod->image}}" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                         <button tabindex="0" class="addcart-box" title="Quick shop"><i class="ti-shopping-cart" ></i></button>
                                        <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                  
                                    
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>{{$rndomprod->name}}</h6></a>
                                    <h5><i class="fa fa-rupee"></i>{{round($rndomprod->min_price)}}</h5>
                                </div>
                                <div class="addtocart_box">
                                    <div class="addtocart_detail">
                                        <div>
                                            <div class="color">
                                                <h5>color</h5>
                                                <ul class="color-variant">
                                                    <li class="light-purple active"></li>
                                                    <li class="theme-blue"></li>
                                                    <li class="theme-color"></li>
                                                </ul>
                                            </div>
                                            <div class="size">
                                                <h5>size</h5>
                                                <ul class="size-box">
                                                    <li class="active">xs</li>
                                                    <li>s</li>
                                                    <li>m</li>
                                                    <li>l</li>
                                                    <li>xl</li>
                                                </ul>
                                            </div>
                                            <div class="addtocart_btn">
                                               <?php  if($user = Auth::user())
{   ?>
                                    <a href="{{url('/session/sets/'.$rndomprod->id)}}"  data-toggle="modal" class="closeCartbox" data-target="" tabindex="0">add to cart</a> <?php  } else { ?>
                                          <a href="{{url('/session/set/'.$rndomprod->id)}}"   class="closeCartbox" data-target="" tabindex="0">add to cart</a><?php }  ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                         @endforeach
                           @endforeach
                    

                    </div>
                </div>
            </div>
          
        
        </div>
    </div>
</section>
<!-- tab section start -->
<section class="section-b-space banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-content">
                    
                    <div class="banner-btn">
                        <h6>Top selling <span>save101</span> and getting your deal</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="category">
    <div class="container">
        <div class="slider-7 no-arrow">
              @foreach($categrandomt as $rndomcat)
            <div>
                <div class="category-wrapper">
                    <div class="img-block">
                        <a href="{{url('/category/'.$rndomcat->id)}}"><img src="upload/categoryImage/{{$rndomcat->image}}" alt="" class=" img-fluid"></a>
                    </div>
                    <div class="category-title">
                        <a href="#"><h5><?php echo $rndomcat->name ?></h5></a>
                    </div>
                </div>
            </div>
               @endforeach

        </div>
    </div>
</section>


<!-- category section start -->

<!-- category section end -->
<!-- Category section start -->

<!-- Category section end -->
@include('storefront.layouts.banner')

<!-- Category banner section start -->
<section class="ratio_45">
    <div class="container">
        <div class="row partition-3">



            @foreach($subgrouprandomi as $subgru)
            <?php  $subgrouprandom=indexcontroller::randomcategoryo($subgru->id); 
            ?>
             @foreach($subgrouprandom as $pron)
            <div class="col-md-4">
                <a href="#">
                    <div class="collection-banner p-left">
                        <div class="img-part" style="text-align:right" >
                            <img src="upload/categoryImage/{{$pron->image}}"  alt="" style="max-width:200px!important; ">
                        </div>
                        <div class="contain-banner banner-3">
                            <div>
                                <div class="banner-deal">
                                    <h6>save 10% off</h6>
                                </div>
                                <h3>{{$subgru->name}} </h3>
                                <a href="{{url('/category/'.$pron->id)}}"><h6>shop now</h6></a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach 
            @endforeach 
        </div>
    </div>
</section>
<!-- Category banner section end -->


<!-- Product slider section start -->


<!-- product section start -->
 @foreach($subcategoryrandoms as $subcdsc)
  
   
<section class="section-b-space ratio_square product-related">
    <div class="container">
        <div class="row">
            <div class="col-12 product-related">
                <h2 class="title pt-0">Best Sellers in {{$subcdsc->name}}</h2></div>
        </div>
        <div class="slide-6">
            <?php $randomsub=indexcontroller::randomsubgroup($subcdsc->id);   ?>
                    @foreach($randomsub as $rndmsub)
                   <?php $randomcat=indexcontroller::randomcategory($rndmsub->id);   ?>

                    @foreach($randomcat as $rndomcat)
                       <?php $randomprod=indexcontroller::randomproduct($rndomcat->id);   ?>
                         @foreach($randomprod as $rndomprod)
            <div class="">
                <div class="product-box">
                    <div class="img-block">
                        <a href="{{url('/product/'.$rndomprod->id)}}"><img src="upload/product/{{$rndomprod->image}}" class=" img-fluid bg-img" alt=""></a>
                        <div class="cart-details">
                            <button tabindex="0" class="addcart-box" title="Quick shop"><i class="ti-shopping-cart" ></i></button>
                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                            <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#"><h6>{{$rndomprod->name}}</h6></a>
                        <h5>{{round($rndomprod->min_price)}}</h5>
                    </div>
                    <div class="addtocart_box">
                        <div class="addtocart_detail">
                            <div>
                                <div class="color">
                                    <h5>color</h5>
                                    <ul class="color-variant">
                                        <li class="light-purple active"></li>
                                        <li class="theme-blue"></li>
                                        <li class="theme-color"></li>
                                    </ul>
                                </div>
                                <div class="size">
                                    <h5>size</h5>
                                    <ul class="size-box">
                                        <li class="active">xs</li>
                                        <li>s</li>
                                        <li>m</li>
                                        <li>l</li>
                                        <li>xl</li>
                                    </ul>
                                </div>
                                <div class="addtocart_btn">
                                    <?php  if($user = Auth::user())
{   ?>
                                    <a href="{{url('/session/sets/'.$rndomprod->id)}}"  data-toggle="modal" class="closeCartbox" data-target="" tabindex="0">add to cart</a> <?php  } else { ?>
                                          <a href="{{url('/session/set/'.$rndomprod->id)}}"   class="closeCartbox" data-target="" tabindex="0">add to cart</a><?php }  ?>
                                </div>
                            </div>
                        </div>
                        <div class="close-cart">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
  @endforeach
                      @endforeach
                     @endforeach
        </div>
    </div>
</section>

 @endforeach
 


<!-- product section end -->

<!-- banner section start -->
<section class="section-b-space banner-sec landscape-layout ">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-6 pr-0">
                <a href="#">
                    <div class="left-banner">
                        <h2>5% off</h2>
                        <img src="{{asset('font_assets/images/banner/5.png')}}" class=" img-fluid" alt="">
                    </div>
                </a>
            </div>
            <div class="col-lg-7 col-12 pl-0 order-class">
                <div class="center-banner">
                    <div class="center">
                        <a href="#"><img src="{{asset('font_assets/images/banner/4.jpg')}}" alt="" class=" img-fluid"></a>
                    </div>
                    <div class="contain-left">
                        <div>
                            <h4>today</h4>
                            <h4><span>money savers</span></h4>
                        </div>
                    </div>
                    <div class="contain-right">
                        <div>
                            <a href="#"><h6>Richard McClintock</h6></a>
                            <h5>$963.00</h5>
                            <h6><span>sale ending</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <a href="#">
                    <div class="right-banner">
                        <div>
                            <h5>summer sale</h5>
                            <h2>sale</h2>
                            <h6>save 30% off</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- banner section end -->


@include('storefront.groupssection.groupsection2')

@include('storefront.groupssection.groupsection1')

<!-- detail section start -->

<!-- detail section end -->


<!-- logo section start -->

@include('storefront.brand.ourbrand')
<!-- logo section end -->

<!-- footer section start -->

 @include('storefront.layouts.footer')


<!-- footer section end -->



<!--modal popup start-->

<!--Code Here-->

<!--modal popup end-->


<!-- Add to cart bar -->
<div id="cart_side" class="add_to_cart right">
    <a href="javascript:void(0)" class="overlay" onclick="closeCart()"></a>
    <div class="cart-inner">
        <div class="cart_top">
            <h3>my cart</h3>
            <div class="close-cart">
                <a href="javascript:void(0)" onclick="closeCart()">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="cart_media">
            <ul class="cart_product">
                 <?php  if($user = Auth::user())
{

    
     $randomsub=indexcontroller::userproductdetails($user->id);$total = 0 ;   ?>
   @foreach($randomsub as $rndmsub) 
 <?php $total += $rndmsub->price * $rndmsub->quantity ; ?>
    <li>
                    <div class="media">
                        <a href="#">
                            <img alt="" class="mr-3" src="upload/product/{{ $rndmsub->image }}">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                <h4>{{ $rndmsub->name }}</h4>
                            </a>
                            <h4>
                                <span>{{$rndmsub->quantity }} x <i class="fa fa-rupee"></i> {{ round($rndmsub->price) }}</span>
                            </h4>
                        </div>
                    </div>
                    <div style="margin-top: 30px;" class="close-circle">
                        <a href="{{url('/removes/'.$rndmsub->id)}}" type="button" title="delete">
                            <i class="ti-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </li> 

                  @endforeach


<?php } else {  ?>
                 <?php $total = 0 ?>
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                <?php $total += $details['price'] * $details['quantity'] ?>
                <li>
                    <div class="media">
                        <a href="#">
                            <img alt="" class="mr-3" src="upload/product/{{ $details['photo'] }}">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                <h4>{{ $details['name'] }}</h4>
                            </a>
                            <h4>
                                <span>{{ $details['quantity'] }} x <i class="fa fa-rupee"></i> {{ round($details['price']) }}</span>
                            </h4>
                        </div>
                    </div>
                    <div style="margin-top: 30px;" class="close-circle">
                        <a href="{{url('/remove/'.$id)}}" type="button" title="delete">
                            <i class="ti-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
                  @endforeach
                  @endif 
              <?php  }  ?>
               
            
            </ul>
            <ul class="cart_total">
                <li>
                    <div class="total">
                        <h5>Total : <span><i class="fa fa-rupee"></i>{{ $total }}</span></h5>
                    </div>
                </li>
                <li>
                    <div class="buttons">
                        <a href="{{url('/myKart')}}" class="btn btn-solid btn-block btn-solid-sm view-cart">view cart</a>
                        <a href="{{url('/checkout')}}" class="btn btn-solid btn-solid-sm btn-block checkout">checkout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Add to cart bar end-->


<!-- Add to wishlist bar -->
<div id="wishlist_side" class="add_to_cart right">
    <a href="javascript:void(0)" class="overlay" onclick="closeWishlist()"></a>
    <div class="cart-inner">
        <div class="cart_top">
            <h3>my wishlist</h3>
            <div class="close-cart">
                <a href="javascript:void(0)" onclick="closeWishlist()">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="cart_media">
            <ul class="cart_product">
                  <?php  if($user = Auth::user())
{

    
     $custodrshjjj=indexcontroller::wishlistsss();$total = 0 ;   ?>
   @foreach($custodrshjjj as $custodrs) 
 <?php $total += 1 ; ?>
  <?php $randomsub=indexcontroller::productdetails($custodrs->product_id);   ?>
            @foreach($randomsub as $rndmsub)
                <li>
                    <div class="media">
                        <a href="#">
                           <img alt="" class="mr-3" src="upload/product/{{ $rndmsub->image }}">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                 <h4>{{ $rndmsub->name }}</h4>
                            </a>
                           
                            <h4>
                                <span><i class="fa fa-rupee"></i>{{ round($rndmsub->max_price) }}</span>
                            </h4>
                        </div>
                    </div>
                    <div class="close-circle"style="margin-top: 30px;">
                       <a href="{{url('wishlistdelete/'.$custodrs->id)}}" type="button" title="delete">
                            <i class="ti-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
                  @endforeach
                    @endforeach


<?php }  ?>
            
              
            </ul>
            <ul class="cart_total">
                <li>
                    <div class="total">
                        <h5>Total : <span>{{ $total }}</span></h5>
                    </div>
                </li>
                <li>
                    <div class="buttons">
                        <a href="{{url('/myWishlist')}}" class="btn btn-solid btn-block btn-solid-sm view-cart">view wishlist</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Add to wishlist bar end-->


<!-- My account bar -->
<div id="myAccount" class="add_to_cart right">
    <a href="javascript:void(0)" class="overlay" onclick="closeAccount()"></a>
    <div class="cart-inner">
        <div class="cart_top">
            <h3><a href="{{url('/myAccount')}}">my account</a></h3>
            <div class="close-cart">
                <a href="javascript:void(0)" onclick="closeAccount()">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <form class="theme-form"action="{{url('admins')}}" method="post">{{csrf_field()}}
             <h3> <?php  if($user = Auth::user())
{
    echo $user->name; ?></h3><br><a href="{{url('/logouts')}}"class="btn btn-solid btn-solid-sm btn-block"><i class="icon-log-out1"></i> Log Out</a><?php 
} else{ ?>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="username" id="email" placeholder="Email" required="">
            </div>
            <div class="form-group">
                <label for="review">Password</label>
                <input type="password" class="form-control" name="password" id="review" placeholder="Enter your password" required="">
            </div>
            <button type="submit" class="btn btn-solid btn-solid-sm btn-block">Login</button>

      
         
            <h5 class="forget-class"><a href="{{url('/forgotPassword')}}" class="d-block">forget password?</a></h5>
            <h5 class="forget-class"><a href="{{url('/register')}}" class="d-block">new to store? Signup now</a></h5>  <?php  }  ?>
        </form>
    </div>
</div>
<!-- Add to wishlist bar end-->


<!-- Add to cart modal popup start-->
<div class="modal fade bd-example-modal-lg theme-modal cart-modal" id="addtocart" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body modal1">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="modal-bg addtocart">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="media">
                                    <a href="#">
                                        <img class="img-fluid  pro-img" src="{{asset('font_assets/images/product/4.jpg')}}" alt="">
                                    </a>
                                    <div class="media-body align-self-center text-center">
                                        <a href="#">
                                            <h6>
                                                <i class="fa fa-check"></i>Item
                                                <span>men full sleeves</span>
                                                <span> successfully added to your Cart -</span>
                                                <span>blue,</span>
                                                <span>XS</span>
                                            </h6>
                                        </a>
                                        <div class="buttons">
                                            <a href="cart.html" class="view-cart btn btn-solid">Your cart</a>
                                            <a href="checkout.html" class="checkout btn btn-solid">Check out</a>
                                            <a href="#" data-dismiss="modal" class="continue btn btn-solid">Continue shopping</a>
                                        </div>

                                        <div class="upsell_payment">
                                            <img src="{{asset('font_assets/images/payment_cart.png')}}" class="img-fluid " alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="product-section">
                                    <div class="col-12 product-upsell text-center">
                                        <h4>Customers who bought this item also.</h4>
                                    </div>
                                    <div class="row" id="upsell_product">
                                        <div class="product-box col-sm-3 col-6">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page.html">
                                                        <img src="{{asset('font_assets/images/product/1.jpg')}}" class="img-fluid  mb-1" alt="cotton top">
                                                    </a>
                                                </div>
                                                <div class="product-detail">
                                                    <h6><a href="#"><span>cotton top</span></a></h6>
                                                    <h4><span>$25</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-box col-sm-3 col-6">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page.html">
                                                        <img src="{{asset('font_assets/images/product/6.jpg')}}" class="img-fluid  mb-1" alt="cotton top">
                                                    </a>
                                                </div>
                                                <div class="product-detail">
                                                    <h6><a href="#"><span>cotton top</span></a></h6>
                                                    <h4><span>$25</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-box col-sm-3 col-6">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page.html">
                                                        <img src="{{asset('font_assets/images/product/13.jpg')}}" class="img-fluid  mb-1" alt="cotton top">
                                                    </a>
                                                </div>
                                                <div class="product-detail">
                                                    <h6><a href="#"><span>cotton top</span></a></h6>
                                                    <h4><span>$25</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-box col-sm-3 col-6">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page.html#">
                                                        <img src="{{asset('font_assets/images/product/19.jpg')}}" class="img-fluid  mb-1" alt="cotton top">
                                                    </a>
                                                </div>
                                                <div class="product-detail">
                                                    <h6><a href="#"><span>cotton top</span></a></h6>
                                                    <h4><span>$25</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add to cart modal popup end-->


<!-- Quick-view modal popup start-->

<!-- Quick-view modal popup end-->


<!-- tap to top -->
<div class="tap-top top-cls">
    <div>
        <i class="fa fa-angle-double-up"></i>
    </div>
</div>
<!-- tap to top End -->


<!-- Start theme setting -->
<!-- Code theme setting -->
<!-- End theme setting -->

<!-- facebook chat section start -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- Your customer chat code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="2123438804574660"
     theme_color="#0084ff"
     logged_in_greeting="Hi! Welcome to SPVAIG How can we help you?"
     logged_out_greeting="Hi! Welcome to SPVAIG  How can we help you?">
</div>
<!-- facebook chat section end -->


 @include('storefront.layouts.script')

</body>

</html>
