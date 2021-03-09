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



<!-- header part start -->
 @include('storefront.layouts.header')
<!-- header part end -->


<!-- home slider section start-->


<!-- header part end -->

<?php  use \App\Http\Controllers\indexcontroller; 


 ?>
 

<!-- breadcrumb start -->
<?php  if($user = Auth::user())
{  ?>
<section class="breadcrumb-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title">
                    <h2>Address Book</h2>
                </div>
            </div>
            <div class="col-12">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Address Book</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb End -->


<!-- section start -->
<section class="section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="account-sidebar"><a class="popup-btn">my account</a></div>
                <div class="dashboard-left">
                    <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i> back</span></div>
                    <div class="block-content">
                        <ul>
                            <li class="active"><a href="#">Account Info</a></li>
                          <li><a href="{{url('/AddressBook')}}">Address Book</a></li>
                            <li><a href="{{url('/myOrders')}}">My Orders</a></li>
                            <li><a href="{{url('/myWishlist')}}">My Wishlist</a></li>
                            <li><a href="{{url('/myAccount')}}">Newsletter</a></li>
                            <li><a href="{{url('/myAccount')}}">My Account</a></li>
                            <li><a href="{{url('/ChangePassword')}}">Change Password</a></li>
                            <li class="last"><a href="{{url('/logouts')}}">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="dashboard-right">
                    <div class="dashboard">
                    <div class="theme-card">
                          <div class="row">
                     @foreach($customeraddress as $custaddrs)
                                  
                                           <?php
                                     
                                            $address = $custaddrs->address_line_1;
                                            $colony = $custaddrs->area;
                                            $landmark = $custaddrs->landmark;
                                            $pincode = $custaddrs->zip_code;
                                            $state = $custaddrs->state;
                                            $district = $custaddrs->city;
                                          


                                            $name = $custaddrs->name;
                                            $acc_mobile = $custaddrs->phone; ?>

                                          
                                        
                                            <div class="card col-md-3 col-sl-6">
                                                <?php
                                                echo '<address>' ; ?>
                                               
                                              
                                                <?php
                                                echo '<b>' . $name . '&nbsp;&nbsp;' . $acc_mobile . '</b></p>
                                              ' . $address . '&nbsp; ' . $colony . '<br>
                                              ' . $landmark . '&nbsp; ' . $district . '<br>
                                              ' . $pincode . '&nbsp; ' . $state . '
                                                
                                                
                                            </address>';
                                                ?>
                                                 <form class="theme-form"action="{{url('editaddress')}}" method="post">{{csrf_field()}}
                                        <input type="hidden" value="{{$custaddrs->id}}" name="orderid">
                        <button type="submit" class="btn btn-warning"><i class="fa fa-edit" title="View"></i></button></form>
                                               

                                            </div>&nbsp;&nbsp;
                                           
                                        @endforeach </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php   } else{  ?>
<section class="breadcrumb-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title">
                    <h2>Login</h2>
                </div>
            </div>
            <div class="col-12">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Login</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb End -->


<!-- section start -->
 <section class="login-page section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="title">Login</h3>
                <div class="theme-card">
                    <form class="theme-form"action="{{url('admins')}}" method="post">{{csrf_field()}}
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control"name="username" placeholder="Email" required="">
                        </div>
                        <div class="form-group">
                            <label for="review">Password</label>
                            <input type="password" class="form-control"name="password" placeholder="Enter your password" required="">
                        </div> <button type="submit" class="btn btn-solid">Login</button></form>
                </div>
            </div>
            <div class="col-lg-6 right-login">
                <h3 class="title">New Customer</h3>
                <div class="theme-card authentication-right">
                    <h6 class="title-font">Create A Account</h6>
                    <p>Sign up for a free account at our store. Registration is quick and easy. It allows you to be able to order from our shop. To start shopping click register.</p><a href="{{url('/register')}}" class="btn btn-solid">Create an Account</a></div>
            </div>
        </div>
    </div>
</section>

    <?php  }  ?>
<!-- product section end -->


<!-- footer section start -->
<footer>
    <div class="subscribe-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="subscribe-content">
                        <h4> <i class="fa fa-envelope-o" aria-hidden="true"></i>newsletter</h4>
                        <p>If you are going to use a passage of Lorem you need. </p>
                        <form class="form-inline subscribe-form">
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Email...">
                            </div>
                            <button type="submit" class="btn btn-solid">subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-section">
        <div class="container">
            <div class="row section-t-space section-b-space">
                <div class="col-xl-4 col-lg-4 about-section">
                    <div class="footer-title footer-mobile-title">
                        <h4>about</h4>
                    </div>
                    <div class="footer-content">
                        <div class="footer-logo">
                            <img src="../assets/images/icon/logo3.png" alt="">
                        </div>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum. </p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 footer-link">
                    <div>
                        <div class="footer-title">
                            <h4>my account</h4>
                        </div>
                        <div class="footer-content">
                            <ul>
                                <li><a href="#">about us</a></li>
                                <li><a href="#">contact us</a></li>
                                <li><a href="#">terms & conditions</a></li>
                                <li><a href="#">return & exchanges</a></li>
                                <li><a href="#">shipping & delivery</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 footer-link">
                    <div>
                        <div class="footer-title">
                            <h4>quick link</h4>
                        </div>
                        <div class="footer-content">
                            <ul>
                                <li><a href="#">store location</a></li>
                                <li><a href="#">my account</a></li>
                                <li><a href="#">order tracking</a></li>
                                <li><a href="#">size guide</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 ratio_square">
                    <div class="instagram">
                        <div>
                            <div class="instagram-banner">
                                <h5>follow us <span>#big market</span></h5>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col p-0">
                                        <a href="#">
                                            <div class="instagram-box">
                                                <div>
                                                    <img src="../assets/images/insta/1.jpg" alt="" class=" img-fluid">
                                                </div>
                                                <div class="overlay">
                                                    <i class="fa fa-instagram"  aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col p-0">
                                        <a href="#">
                                            <div class="instagram-box">
                                                <div>
                                                    <img src="../assets/images/insta/2.jpg" alt="" class=" img-fluid">
                                                </div>
                                                <div class="overlay">
                                                    <i class="fa fa-instagram"  aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col p-0">
                                        <a href="#">
                                            <div class="instagram-box">
                                                <div>
                                                    <img src="../assets/images/insta/3.jpg" alt="" class=" img-fluid">
                                                </div>
                                                <div class="overlay">
                                                    <i class="fa fa-instagram"  aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col p-0">
                                        <a href="#">
                                            <div class="instagram-box">
                                                <div>
                                                    <img src="../assets/images/insta/4.jpg" alt="" class=" img-fluid">
                                                </div>
                                                <div class="overlay">
                                                    <i class="fa fa-instagram"  aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col p-0">
                                        <a href="#">
                                            <div class="instagram-box">
                                                <div>
                                                    <img src="../assets/images/insta/5.jpg" alt="" class=" img-fluid">
                                                </div>
                                                <div class="overlay">
                                                    <i class="fa fa-instagram"  aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col p-0">
                                        <a href="#">
                                            <div class="instagram-box">
                                                <div>
                                                    <img src="../assets/images/insta/6.jpg" alt="" class=" img-fluid">
                                                </div>
                                                <div class="overlay">
                                                    <i class="fa fa-instagram"  aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col p-0">
                                        <a href="#">
                                            <div class="instagram-box">
                                                <div>
                                                    <img src="../assets/images/insta/7.jpg" alt="" class=" img-fluid">
                                                </div>
                                                <div class="overlay">
                                                    <i class="fa fa-instagram"  aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col p-0">
                                        <a href="#">
                                            <div class="instagram-box">
                                                <div>
                                                    <img src="../assets/images/insta/8.jpg" alt="" class=" img-fluid">
                                                </div>
                                                <div class="overlay">
                                                    <i class="fa fa-instagram"  aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col p-0">
                                        <a href="#">
                                            <div class="instagram-box">
                                                <div>
                                                    <img src="../assets/images/insta/9.jpg" alt="" class=" img-fluid">
                                                </div>
                                                <div class="overlay">
                                                    <i class="fa fa-instagram"  aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col p-0">
                                        <a href="#">
                                            <div class="instagram-box">
                                                <div>
                                                    <img src="../assets/images/insta/10.jpg" alt="" class=" img-fluid">
                                                </div>
                                                <div class="overlay">
                                                    <i class="fa fa-instagram"  aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="call-us">
                        <img src="{{asset('font_assets/images/call-us.jpg')}}" alt="" class="bg-img bg-left">
                        <div class="footer-banner-content">
                            <div class="call-text">
                                <div>
                                    <h3>call us:</h3>
                                    <span class="call-no">+18002127724<span>(24 X 7)</span></span>
                                </div>
                            </div>
                            <div class="footer-social">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="address-section">
                                <h6>address</h6>
                                <p>Maa Narmada Ki Pawan Dharti Amarkantak Anuppur <br>104/105,Anuppur,Madhya Pradesh-484224</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="footer-end">
                        <p><i class="fa fa-copyright" aria-hidden="true"></i>  2019-20 SPVAIG PVT LTD.</p>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="payment-card-bottom">
                        <ul>
                            <li>
                                <a href="#"><img src="../assets/images/icon/visa.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="../assets/images/icon/mastercard.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="../assets/images/icon/paypal.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="../assets/images/icon/american-express.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="../assets/images/icon/discover.png" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer section end -->


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
                <li>
                    <div class="media">
                        <a href="#">
                            <img alt="" class="mr-3" src="../assets/images/product/1.jpg">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                <h4>item name</h4>
                            </a>
                            <h4>
                                <span>sm</span>
                                <span>, blue</span>
                            </h4>
                            <h4>
                                <span>$ 299.00</span>
                            </h4>
                        </div>
                    </div>
                    <div class="close-circle">
                        <a href="#">
                            <i class="ti-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="media">
                        <a href="#">
                            <img alt="" class="mr-3" src="../assets/images/product/2.jpg">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                <h4>item name</h4>
                            </a>
                            <h4>
                                <span>sm</span>
                                <span>, blue</span>
                            </h4>
                            <h4>
                                <span>$ 299.00</span>
                            </h4>
                        </div>
                    </div>
                    <div class="close-circle">
                        <a href="#">
                            <i class="ti-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="media">
                        <a href="#"><img alt="" class="mr-3" src="../assets/images/product/3.jpg"></a>
                        <div class="media-body">
                            <a href="#"><h4>item name</h4></a>
                            <h4>
                                <span>sm</span>
                                <span>, blue</span>
                            </h4>
                            <h4><span>$ 299.00</span></h4>
                        </div>
                    </div>
                    <div class="close-circle">
                        <a href="#">
                            <i class="ti-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
            </ul>
            <ul class="cart_total">
                <li>
                    <div class="total">
                        <h5>subtotal : <span>$299.00</span></h5>
                    </div>
                </li>
                <li>
                    <div class="buttons">
                        <a href="wishlist.html" class="btn btn-solid btn-block btn-solid-sm view-cart">view wislist</a>
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

      
         
            <h5 class="forget-class"><a href="forget_pwd.html" class="d-block">forget password?</a></h5>
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
                                        <img class="img-fluid  pro-img" src="../assets/images/product/4.jpg" alt="">
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
                                            <img src="../assets/images/payment_cart.png" class="img-fluid " alt="">
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
                                                        <img src="../assets/images/product/1.jpg" class="img-fluid  mb-1" alt="cotton top">
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
                                                        <img src="../assets/images/product/6.jpg" class="img-fluid  mb-1" alt="cotton top">
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
                                                        <img src="../assets/images/product/13.jpg" class="img-fluid  mb-1" alt="cotton top">
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
                                                        <img src="../assets/images/product/19.jpg" class="img-fluid  mb-1" alt="cotton top">
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
<div class="modal fade bd-example-modal-lg theme-modal" id="quick-view" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content quick-view-modal">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <div class="quick-view-img"><img src="../assets/images/product/14.jpg" alt="" class="img-fluid "></div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">
                            <h2>Women Pink Shirt</h2>
                            <h3>$32.96</h3>
                            <div class="border-product">
                                <h6 class="product-title">product details:</h6>
                                <p>this brand is a t-shirt led value brand for men, women and kids. Our range consists of basic and updated basic knit apparel. We offer both singles and packs with the right blend of quality, style and value aimed to delight our customers.</p>
                            </div>
                            <div class="product-description border-product">
                                <h6 class="product-title">color:</h6>
                                <ul class="color-variant">
                                    <li class="light-purple active"></li>
                                    <li class="theme-blue"></li>
                                    <li class="theme-color"></li>
                                </ul>
                                <h6 class="product-title">size:</h6>
                                <div class="size-box">
                                    <ul class="size-box">
                                        <li class="active">xs</li>
                                        <li>s</li>
                                        <li>m</li>
                                        <li>l</li>
                                        <li>xl</li>
                                    </ul>
                                </div>
                                <h6 class="product-title">quantity:</h6>
                                <div class="qty-box">
                                    <div class="input-group"><span class="input-group-prepend"><button type="button" class="btn quantity-left-minus" data-type="minus" data-field=""><i class="ti-angle-left"></i></button> </span>
                                        <input type="text" name="quantity" class="form-control input-number" value="1"> <span class="input-group-prepend"><button type="button" class="btn quantity-right-plus" data-type="plus" data-field=""><i class="ti-angle-right"></i></button></span></div>
                                </div>
                            </div>
                            <div class="product-buttons">
                                <a href="cart.html" class="btn btn-solid">add to cart</a>
                                <a href="product-page.html" class="btn btn-solid">view detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quick-view modal popup end-->


<!-- tap to top -->
<div class="tap-top">
    <div>
        <i class="fa fa-angle-double-up"></i>
    </div>
</div>
<!-- tap to top End -->


<!-- theme setting -->
<a href="javascript:void(0)" onclick="openSetting()">
    <div class="setting-sidebar" id="setting-icon">
        <div>
            <i class="fa fa-cog" aria-hidden="true"></i>
        </div>
    </div>
</a>
<div id="setting_box" class="setting-box">
    <a href="javascript:void(0)" class="overlay" onclick="closeSetting()"></a>
    <div class="setting_box_body">
        <div onclick="closeSetting()">
            <div class="sidebar-back text-left"><i class="fa fa-angle-left pr-2" aria-hidden="true"></i> Back</div>
        </div>
        <div class="setting-body">
            <div class="setting-title">
                <h4>layout</h4>
            </div>
            <div class="setting-contant">
                <div class="row demo-section">
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo1"></div>
                            <div class="demo-text">
                                <h4>Mega store 1</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('index.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo2"></div>
                            <div class="demo-text">
                                <h4>mega store 2</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('layout-2.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo3"></div>
                            <div class="demo-text">
                                <h4>mega store 3</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('layout-3.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo4"></div>
                            <div class="demo-text">
                                <h4>mega store 4</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('layout-4.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo5"></div>
                            <div class="demo-text">
                                <h4>kids</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('layout-5.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo6"></div>
                            <div class="demo-text">
                                <h4>furniture</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('layout-6.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo7"></div>
                            <div class="demo-text">
                                <h4>electronics</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('layout-7.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo8"></div>
                            <div class="demo-text">
                                <h4>sports</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('layout-8.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo9"></div>
                            <div class="demo-text">
                                <h4>fashion</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('layout-9.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo10"></div>
                            <div class="demo-text">
                                <h4>cosmetic</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('layout-10.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo11"></div>
                            <div class="demo-text">
                                <h4>tools</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('layout-11.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo12"></div>
                            <div class="demo-text">
                                <h4>vegetables</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('layout-12.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="setting-title">
                <h4>shop</h4>
            </div>
            <div class="setting-contant">
                <div class="row demo-section">
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo13"></div>
                            <div class="demo-text">
                                <h4>left sidebar</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('category-page.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo14"></div>
                            <div class="demo-text">
                                <h4>right sidebar</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('category-page(right).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo15"></div>
                            <div class="demo-text">
                                <h4>no sidebar</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('category-page(no-sidebar).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo16"></div>
                            <div class="demo-text">
                                <h4>popup</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('category-page(sidebar-popup).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo17"></div>
                            <div class="demo-text">
                                <h4>metro</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('category-page(metro).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo18"></div>
                            <div class="demo-text">
                                <h4>full width</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('category-page(full-width).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo19"></div>
                            <div class="demo-text">
                                <h4>infinite scroll</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('category-page(infinite-scroll).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo20"></div>
                            <div class="demo-text">
                                <h4>three grid</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('category-page(3-grid).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects mb-0">
                        <div class="set-position">
                            <div class="layout-container demo21"></div>
                            <div class="demo-text">
                                <h4>six grid</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('category-page(6-grid).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects mb-0">
                        <div class="set-position">
                            <div class="layout-container demo22"></div>
                            <div class="demo-text">
                                <h4>list view</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('category-page(list-view).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="setting-title">
                <h4>product</h4>
            </div>
            <div class="setting-contant">
                <div class="row demo-section">
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo23"></div>
                            <div class="demo-text">
                                <h4>four image </h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(4-image).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo24"></div>
                            <div class="demo-text">
                                <h4>left sidebar</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo25"></div>
                            <div class="demo-text">
                                <h4>right sidebar</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(right-sidebar).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo26"></div>
                            <div class="demo-text">
                                <h4>no sidebar</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(no-sidebar).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo27"></div>
                            <div class="demo-text">
                                <h4>bundle</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(bundle).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo28"></div>
                            <div class="demo-text">
                                <h4>image swatch</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(image-swatch).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo29"></div>
                            <div class="demo-text">
                                <h4>left image</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(left-image).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo30"></div>
                            <div class="demo-text">
                                <h4>right image</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(right-image).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo31"></div>
                            <div class="demo-text">
                                <h4>image outside</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(image-outside).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo32"></div>
                            <div class="demo-text">
                                <h4>3-col left</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(3-col-left).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo33"></div>
                            <div class="demo-text">
                                <h4>3-col right</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(3-col-right).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo34"></div>
                            <div class="demo-text">
                                <h4>3-col bottom</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(3-column).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo35"></div>
                            <div class="demo-text">
                                <h4>sticky</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(sticky).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo36"></div>
                            <div class="demo-text">
                                <h4>accordian</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(accordian).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects mb-0">
                        <div class="set-position">
                            <div class="layout-container demo37"></div>
                            <div class="demo-text">
                                <h4>vertical tab</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(vertical-tab).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="setting-title">
                <h4>color option</h4>
            </div>
            <div class="setting-contant">
                <ul class="color-box">
                    <li><a href="#" class="color1" ></a></li>
                    <li><a href="#" class="color2" ></a></li>
                    <li class="active"><a href="#" class="color3" ></a></li>
                    <li><a href="#" class="color4" ></a></li>
                    <li><a href="#" class="color5" ></a></li>
                    <li><a href="#" class="color6" ></a></li>
                    <li><a href="#" class="color7" ></a></li>
                    <li><a href="#" class="color8" ></a></li>
                    <li><a href="#" class="color9" ></a></li>
                    <li><a href="#" class="color10" ></a></li>
                    <li><a href="#" class="color11" ></a></li>
                    <li><a href="#" class="color12" ></a></li>
                </ul>
            </div>
            <div class="setting-title">
                <h4>RTL</h4>
            </div>
            <div class="setting-contant">
                <ul class="setting_buttons">
                    <li class="active" id="ltr_btn"><a href="javascript:void(0)" class="btn setting_btn">LTR</a></li>
                    <li id="rtl_btn"><a href="javascript:void(0)" class="btn setting_btn">RTL</a></li>
                </ul>
            </div>
            <div class="buy_btn">
                <a href="http://themes.pixelstrap.com/bigboost/" target="_blank" class="btn btn-block purchase_btn"><i class="fa fa-desktop" aria-hidden="true"></i> View Showcase</a>
                <a href="#" target="_blank" class="btn btn-block purchase_btn blue-btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Purchase theme now!</a>
            </div>
        </div>
    </div>
</div>
<!-- theme setting -->


<!-- latest jquery-->
@include('storefront.layouts.script')

</body>

</html>
