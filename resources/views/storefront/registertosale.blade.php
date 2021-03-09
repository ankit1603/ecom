
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="bigboost">
    <meta name="keywords" content="bigboost">
    <meta name="author" content="bigboost">
    <link rel="icon" href="{{asset('font_assets/images/favicon/1.png')}}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{asset('font_assets/images/favicon/1.png')}}" type="image/x-icon"/>
    <title>SPVAIG</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{asset('font_assets/css/fontawesome.css')}}">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{asset('font_assets/css/animate.css')}}">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{asset('font_assets/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('font_assets/css/slick-theme.css')}}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('font_assets/css/bootstrap.css')}}">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('font_assets/css/themify-icons.css')}}">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" id="color" href="{{asset('font_assets/css/color1.css')}}">

</head>
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
<!-- banner section start -->


<!-- tab section start -->
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
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="{{asset('font_assets/images/product/1.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="{{asset('font_assets/images/product/20.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="{{asset('font_assets/images/product/10.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="{{asset('font_assets/images/product/15.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                                    <div class="lable-wrapper">
                                        <span class="lable1">new</span>
                                        <span class="lable2">sale</span>
                                    </div>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="{{asset('font_assets/images/product/2.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="{{asset('font_assets/images/product/6.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="{{asset('font_assets/images/product/3.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="{{asset('font_assets/images/product/8.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="{{asset('font_assets/images/product/11.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="{{asset('font_assets/images/product/19.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="{{asset('font_assets/images/product/22.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="{{asset('font_assets/images/product/27.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                                    <div class="lable-wrapper">
                                        <span class="lable1">new</span>
                                        <span class="lable2">sale</span>
                                    </div>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab-2" class="tab-content" >
                <div class="container">
                    <div class="row border-row1">
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="{{asset('font_assets/images/product/20.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="{{asset('font_assets/images/product/8.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="{{asset('font_assets/images/product/11.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="{{asset('font_assets/images/product/19.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="{{asset('font_assets/images/product/22.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="{{asset('font_assets/images/product/10.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/1.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/15.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="lable-wrapper">
                                        <span class="lable1">new</span>
                                        <span class="lable2">sale</span>
                                    </div>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/2.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/6.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/3.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/27.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="lable-wrapper">
                                        <span class="lable1">new</span>
                                        <span class="lable2">sale</span>
                                    </div>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab-3" class="tab-content" >
                <div class="container">
                    <div class="row border-row1">
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/6.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/3.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/8.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/11.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/19.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/22.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/1.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/20.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/10.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/15.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="lable-wrapper">
                                        <span class="lable1">new</span>
                                        <span class="lable2">sale</span>
                                    </div>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/2.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/27.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="lable-wrapper">
                                        <span class="lable1">new</span>
                                        <span class="lable2">sale</span>
                                    </div>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab-4" class="tab-content" >
                <div class="container">
                    <div class="row border-row1">
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/20.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/10.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/11.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/19.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/22.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/27.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="lable-wrapper">
                                        <span class="lable1">new</span>
                                        <span class="lable2">sale</span>
                                    </div>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/15.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="lable-wrapper">
                                        <span class="lable1">new</span>
                                        <span class="lable2">sale</span>
                                    </div>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/2.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/6.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/3.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/1.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/8.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab-5" class="tab-content" >
                <div class="container">
                    <div class="row border-row1">
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="{{asset('font_assets/images/product/2.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="{{('font_assets/images/product/6.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/3.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/20.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/10.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/15.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="lable-wrapper">
                                        <span class="lable1">new</span>
                                        <span class="lable2">sale</span>
                                    </div>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/8.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/11.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/19.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/22.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/27.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="lable-wrapper">
                                        <span class="lable1">new</span>
                                        <span class="lable2">sale</span>
                                    </div>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 p-0">
                            <div class="product-box">
                                <div class="img-block">
                                    <a href="product-page.html"><img src="../assets/images/product/1.jpg" class=" img-fluid bg-img" alt=""></a>
                                    <div class="cart-details">
                                        <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                        <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#"><h6>richard mcClintock</h6></a>
                                    <h5>$963.00</h5>
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
                                                <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-cart">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
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
            <div>
                <div class="category-wrapper">
                    <div class="img-block">
                        <a href="#"><img src="{{asset('font_assets/images/category/layout-4/1.png')}}" alt="" class=" img-fluid"></a>
                    </div>
                    <div class="category-title">
                        <a href="#"><h5>mobile</h5></a>
                    </div>
                </div>
            </div>
            <div>
                <div class="category-wrapper">
                    <div class="img-block">
                        <a href="#"><img src="{{asset('font_assets/images/category/layout-4/2.png')}}" alt="" class=" img-fluid"></a>
                    </div>
                    <div class="category-title">
                        <a href="#"><h5>t-shirt</h5></a>
                    </div>
                </div>
            </div>
            <div>
                <div class="category-wrapper">
                    <div class="img-block">
                        <a href="#"><img src="{{asset('font_assets/images/category/layout-4/3.png')}}" alt="" class=" img-fluid"></a>
                    </div>
                    <div class="category-title">
                        <a href="#"><h5>camera</h5></a>
                    </div>
                </div>
            </div>
            <div>
                <div class="category-wrapper">
                    <div class="img-block">
                        <a href="#"><img src="{{asset('font_assets/images/category/layout-4/4.png')}}" alt="" class=" img-fluid"></a>
                    </div>
                    <div class="category-title">
                        <a href="#"><h5>table</h5></a>
                    </div>
                </div>
            </div>
            <div>
                <div class="category-wrapper">
                    <div class="img-block">
                        <a href="#"><img src="{{asset('font_assets/images/category/layout-4/5.png')}}" alt="" class=" img-fluid"></a>
                    </div>
                    <div class="category-title">
                        <a href="#"><h5>ps4</h5></a>
                    </div>
                </div>
            </div>
            <div>
                <div class="category-wrapper">
                    <div class="img-block">
                        <a href="#"><img src="{{asset('font_assets/images/category/layout-4/6.png')}}" alt="" class=" img-fluid"></a>
                    </div>
                    <div class="category-title">
                        <a href="#"><h5>shoes</h5></a>
                    </div>
                </div>
            </div>
            <div>
                <div class="category-wrapper">
                    <div class="img-block">
                        <a href="#"><img src="{{asset('font_assets/images/category/layout-4/3.png')}}" alt="" class=" img-fluid"></a>
                    </div>
                    <div class="category-title">
                        <a href="#"><h5>camera</h5></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Category section start -->
<section class="category no-arrow">
    <div class="container">
        <div class="category-6">
            <div>
                <div class="category-block">
                    <img src="{{asset('font_assets/images/category/layout-1/fashion.png')}}" alt="">
                    <div class="category-content">
                        <h6>20% off</h6>
                        <h5>fashion</h5>
                        <a href="#" class="btn btn-solid btn-solid-sm">view more</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="category-block">
                    <img src="{{asset('font_assets/images/category/layout-1/mobile.png')}}" alt="">
                    <div class="category-content">
                        <h6>-10% off</h6>
                        <h5>mobile</h5>
                        <a href="#" class="btn btn-solid btn-solid-sm">view more</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="category-block">
                    <img src="{{asset('font_assets/images/category/layout-1/furniture.png')}}" alt="">
                    <div class="category-content">
                        <h6>30% off</h6>
                        <h5>furniture</h5>
                        <a href="#" class="btn btn-solid btn-solid-sm">view more</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="category-block">
                    <img src="{{asset('font_assets/images/category/layout-1/light.png')}}" alt="">
                    <div class="category-content">
                        <h6>sale</h6>
                        <h5>light</h5>
                        <a href="#" class="btn btn-solid btn-solid-sm">view more</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="category-block">
                    <img src="{{asset('font_assets/images/category/layout-1/bag.png')}}" alt="">
                    <div class="category-content">
                        <h6>-5% off</h6>
                        <h5>bag</h5>
                        <a href="#" class="btn btn-solid btn-solid-sm">view more</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="category-block">
                    <img src="{{asset('font_assets/images/category/layout-1/razer.png')}}" alt="">
                    <div class="category-content">
                        <h6>$99</h6>
                        <h5>razer</h5>
                        <a href="#" class="btn btn-solid btn-solid-sm">view more</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="category-block">
                    <img src="{{asset('font_assets/images/category/layout-1/razer.png')}}" alt="">
                    <div class="category-content">
                        <h6>$99</h6>
                        <h5>razer</h5>
                        <a href="#" class="btn btn-solid btn-solid-sm">view more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Category section end -->
@include('storefront.layouts.banner')

<!-- Category banner section start -->
<section class="ratio_45">
    <div class="container">
        <div class="row partition-3">
            <div class="col-md-4">
                <a href="#">
                    <div class="collection-banner p-left">
                        <div class="img-part">
                            <img src="{{asset('font_assets/images/banner/1.jpg')}}" class=" img-fluid bg-img" alt="">
                        </div>
                        <div class="contain-banner banner-3">
                            <div>
                                <div class="banner-deal">
                                    <h6>save 10% off</h6>
                                </div>
                                <h3>leather bag</h3>
                                <h6>shop now</h6>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="collection-banner p-left">
                        <div class="img-part">
                            <img src="{{asset('font_assets/images/banner/2.jpg')}}" class=" img-fluid bg-img" alt="">
                        </div>
                        <div class="contain-banner banner-3">
                            <div>
                                <div class="banner-deal">
                                    <h6>-50% off</h6>
                                </div>
                                <h3>sports shoes</h3>
                                <h6>shop now</h6>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="collection-banner p-left">
                        <div class="img-part">
                            <img src="{{asset('font_assets/images/banner/3.jpg')}}" class=" img-fluid bg-img" alt="">
                        </div>
                        <div class="contain-banner banner-3">
                            <div>
                                <div class="banner-deal">
                                    <h6>free shipping</h6>
                                </div>
                                <h3>mac book</h3>
                                <h6>shop now</h6>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Category banner section end -->


<!-- Product slider section start -->
<section class="section-b-space slider-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5 ratio_asos">
                <div class="deal-box">
                    <div >
                        <h2 class="title">today's deal</h2>
                        <div class="slide-1 border-0">
                            <div>
                                <div class="product">
                                    <div>
                                        <a href="#"><img src="{{asset('font_assets/images/product/p-1.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                                    </div>
                                    <div>
                                        <div class="timer">
                                            <p id="demo"></p>
                                        </div>
                                        <a href="#"><p>Use Lorem Ipsum as their default model text,</p></a>
                                        <h5>$63.00 <del>$70.55</del></h5>
                                        <div class="add-btn">
                                            <a href="javascript:void(0)" class="btn btn-outline" tabindex="0">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="product">
                                    <div>
                                        <img src="{{asset('font_assets/images/product/p-1.jpg')}}" class=" img-fluid bg-img" alt="">
                                    </div>
                                    <div class="timer">
                                        <p id="demo1"></p>
                                    </div>
                                    <a href="#"><p>Use Lorem Ipsum as their default model text,</p></a>
                                    <h5>$63.00 <del>$70.55</del></h5>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="btn btn-outline" tabindex="0">buy now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 side-banner side-banner1 pr-0 d-none d-xl-block">
                <a href="#"><img src="{{asset('font_assets/images/side-banner.jpg')}}" alt="" class=" img-fluid "></a>
            </div>
            <div class="col-xl-6 col-lg-7 pl-0 padding-cls ratio_square">
                <div class="tab-head">
                    <h2 class="title">last chance to buy</h2>
                </div>
                <div class="slider-3">
                    <div>
                        <div class="product-box">
                            <div class="img-block">
                                <a href="#"><img src="{{asset('font_assets/images/product/31.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                                <div class="cart-details">
                                    <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                    <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                </div>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#"><h6>richard mcClintock</h6></a>
                                <h5>$963.00</h5>
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
                                            <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="close-cart">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-block">
                                <a href="#"><img src="{{asset('font_assets/images/product/1.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                                <div class="lable-wrapper">
                                    <span class="lable1">new</span>
                                    <span class="lable2">sale</span>
                                </div>
                                <div class="cart-details">
                                    <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                    <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                </div>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#"><h6>richard mcClintock</h6></a>
                                <h5>$963.00</h5>
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
                                            <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="close-cart">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-box">
                            <div class="img-block">
                                <a href="#"><img src="{{asset('font_assets/images/product/29.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                                <div class="cart-details">
                                    <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                    <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                </div>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#"><h6>richard mcClintock</h6></a>
                                <h5>$963.00</h5>
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
                                            <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="close-cart">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-block">
                                <a href="#"><img src="{{asset('font_assets/images/product/27.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                                <div class="cart-details">
                                    <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                    <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                </div>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#"><h6>richard mcClintock</h6></a>
                                <h5>$963.00</h5>
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
                                            <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="close-cart">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-box">
                            <div class="img-block">
                                <a href="#"><img src="{{asset('font_assets/images/product/25.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                                <div class="cart-details">
                                    <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                    <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                </div>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#"><h6>richard mcClintock</h6></a>
                                <h5>$963.00</h5>
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
                                            <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="close-cart">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-block">
                                <a href="#"><img src="{{asset('font_assets/images/product/23.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                                <div class="cart-details">
                                    <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                    <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                </div>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#"><h6>richard mcClintock</h6></a>
                                <h5>$963.00</h5>
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
                                            <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="close-cart">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-box">
                            <div class="img-block">
                                <a href="#"><img src="{{asset('font_assets/images/product/21.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                                <div class="cart-details">
                                    <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                    <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                </div>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#"><h6>richard mcClintock</h6></a>
                                <h5>$963.00</h5>
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
                                            <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="close-cart">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-block">
                                <a href="#"><img src="{{asset('font_assets/images/product/19.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                                <div class="cart-details">
                                    <button title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></button>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                    <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                </div>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="btn btn-outline addcart-box" tabindex="0">quick shop</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="#"><h6>richard mcClintock</h6></a>
                                <h5>$963.00</h5>
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
                                            <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="close-cart">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- product section start -->
<section class="section-b-space ratio_square product-related">
    <div class="container">
        <div class="row">
            <div class="col-12 product-related">
                <h2 class="title pt-0">Best Sellers in Beauty</h2></div>
        </div>
        <div class="slide-6">
            <div class="">
                <div class="product-box">
                    <div class="img-block">
                        <a href="#"><img src="{{asset('font_assets/images/product/1.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                        <div class="cart-details">
                            <button tabindex="0" class="addcart-box" title="Quick shop"><i class="ti-shopping-cart" ></i></button>
                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                            <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#"><h6>richard mcClintock</h6></a>
                        <h5>$963.00</h5>
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
                                    <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="close-cart">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="product-box">
                    <div class="img-block">
                        <a href="#"><img src="{{asset('font_assets/images/product/2.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                        <div class="cart-details">
                            <button tabindex="0" class="addcart-box" title="Quick shop"><i class="ti-shopping-cart" ></i></button>
                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                            <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#"><h6>richard mcClintock</h6></a>
                        <h5>$963.00</h5>
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
                                    <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="close-cart">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="product-box">
                    <div class="img-block">
                        <a href="#"><img src="{{asset('font_assets/images/product/3.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                        <div class="cart-details">
                            <button tabindex="0" class="addcart-box" title="Quick shop"><i class="ti-shopping-cart" ></i></button>
                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                            <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#"><h6>richard mcClintock</h6></a>
                        <h5>$963.00</h5>
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
                                    <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="close-cart">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="product-box">
                    <div class="img-block">
                        <a href="#"><img src="{{asset('font_assets/images/product/4.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                        <div class="cart-details">
                            <button tabindex="0" class="addcart-box" title="Quick shop"><i class="ti-shopping-cart" ></i></button>
                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                            <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#"><h6>richard mcClintock</h6></a>
                        <h5>$963.00</h5>
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
                                    <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="close-cart">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="product-box">
                    <div class="img-block">
                        <a href="#"><img src="{{asset('font_assets/images/product/5.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                        <div class="cart-details">
                            <button tabindex="0" class="addcart-box" title="Quick shop"><i class="ti-shopping-cart" ></i></button>
                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                            <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#"><h6>richard mcClintock</h6></a>
                        <h5>$963.00</h5>
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
                                    <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="close-cart">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="product-box">
                    <div class="img-block">
                        <a href="#"><img src="{{asset('font_assets/images/product/6.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                        <div class="cart-details">
                            <button tabindex="0" class="addcart-box" title="Quick shop"><i class="ti-shopping-cart" ></i></button>
                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                            <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#"><h6>richard mcClintock</h6></a>
                        <h5>$963.00</h5>
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
                                    <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="close-cart">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="product-box">
                    <div class="img-block">
                        <a href="#"><img src="{{asset('font_assets/images/product/6.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                        <div class="cart-details">
                            <button tabindex="0" class="addcart-box" title="Quick shop"><i class="ti-shopping-cart" ></i></button>
                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                            <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#"><h6>richard mcClintock</h6></a>
                        <h5>$963.00</h5>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-b-space ratio_square product-related">
    <div class="container">
        <div class="row">
            <div class="col-12 product-related">
                <h2 class="title pt-0">Best Sellers in Computers & Accessories</h2></div>
        </div>
        <div class="slide-6">
            <div class="">
                <div class="product-box">
                    <div class="img-block">
                        <a href="#"><img src="{{asset('font_assets/images/product/1.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                        <div class="cart-details">
                            <button tabindex="0" class="addcart-box" title="Quick shop"><i class="ti-shopping-cart" ></i></button>
                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                            <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#"><h6>richard mcClintock</h6></a>
                        <h5>$963.00</h5>
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
                                    <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="close-cart">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="product-box">
                    <div class="img-block">
                        <a href="#"><img src="{{asset('font_assets/images/product/2.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                        <div class="cart-details">
                            <button tabindex="0" class="addcart-box" title="Quick shop"><i class="ti-shopping-cart" ></i></button>
                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                            <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#"><h6>richard mcClintock</h6></a>
                        <h5>$963.00</h5>
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
                                    <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="close-cart">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="product-box">
                    <div class="img-block">
                        <a href="#"><img src="{{asset('font_assets/images/product/3.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                        <div class="cart-details">
                            <button tabindex="0" class="addcart-box" title="Quick shop"><i class="ti-shopping-cart" ></i></button>
                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                            <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#"><h6>richard mcClintock</h6></a>
                        <h5>$963.00</h5>
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
                                    <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="close-cart">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="product-box">
                    <div class="img-block">
                        <a href="#"><img src="{{asset('font_assets/images/product/4.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                        <div class="cart-details">
                            <button tabindex="0" class="addcart-box" title="Quick shop"><i class="ti-shopping-cart" ></i></button>
                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                            <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#"><h6>richard mcClintock</h6></a>
                        <h5>$963.00</h5>
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
                                    <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="close-cart">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="product-box">
                    <div class="img-block">
                        <a href="#"><img src="{{asset('font_assets/images/product/5.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                        <div class="cart-details">
                            <button tabindex="0" class="addcart-box" title="Quick shop"><i class="ti-shopping-cart" ></i></button>
                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                            <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#"><h6>richard mcClintock</h6></a>
                        <h5>$963.00</h5>
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
                                    <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="close-cart">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="product-box">
                    <div class="img-block">
                        <a href="#"><img src="{{asset('font_assets/images/product/6.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                        <div class="cart-details">
                            <button tabindex="0" class="addcart-box" title="Quick shop"><i class="ti-shopping-cart" ></i></button>
                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                            <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#"><h6>richard mcClintock</h6></a>
                        <h5>$963.00</h5>
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
                                    <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="close-cart">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="product-box">
                    <div class="img-block">
                        <a href="#"><img src="{{asset('font_assets/images/product/6.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                        <div class="cart-details">
                            <button tabindex="0" class="addcart-box" title="Quick shop"><i class="ti-shopping-cart" ></i></button>
                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                            <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#"><h6>richard mcClintock</h6></a>
                        <h5>$963.00</h5>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
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
@include('storefront.featuresbottom.mainfeatures')

<section class="section-b-space ratio_square product-related">
    <div class="container">
        <div class="row">
            <div class="col-12 product-related">
                <h2 class="title pt-0">Best Sellers in Grocery & Gourmet Foods</h2></div>
        </div>
        <div class="slide-6">
            <div class="">
                <div class="product-box">
                    <div class="img-block">
                        <a href="#"><img src="{{asset('font_assets/images/product/1.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                        <div class="cart-details">
                            <button tabindex="0" class="addcart-box" title="Quick shop"><i class="ti-shopping-cart" ></i></button>
                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                            <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#"><h6>richard mcClintock</h6></a>
                        <h5>$963.00</h5>
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
                                    <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="close-cart">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="product-box">
                    <div class="img-block">
                        <a href="#"><img src="{{asset('font_assets/images/product/2.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                        <div class="cart-details">
                            <button tabindex="0" class="addcart-box" title="Quick shop"><i class="ti-shopping-cart" ></i></button>
                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                            <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#"><h6>richard mcClintock</h6></a>
                        <h5>$963.00</h5>
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
                                    <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="close-cart">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="product-box">
                    <div class="img-block">
                        <a href="#"><img src="{{asset('font_assets/images/product/3.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                        <div class="cart-details">
                            <button tabindex="0" class="addcart-box" title="Quick shop"><i class="ti-shopping-cart" ></i></button>
                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                            <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#"><h6>richard mcClintock</h6></a>
                        <h5>$963.00</h5>
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
                                    <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="close-cart">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="product-box">
                    <div class="img-block">
                        <a href="#"><img src="{{asset('font_assets/images/product/4.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                        <div class="cart-details">
                            <button tabindex="0" class="addcart-box" title="Quick shop"><i class="ti-shopping-cart" ></i></button>
                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                            <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#"><h6>richard mcClintock</h6></a>
                        <h5>$963.00</h5>
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
                                    <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="close-cart">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="product-box">
                    <div class="img-block">
                        <a href="#"><img src="{{asset('font_assets/images/product/5.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                        <div class="cart-details">
                            <button tabindex="0" class="addcart-box" title="Quick shop"><i class="ti-shopping-cart" ></i></button>
                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                            <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#"><h6>richard mcClintock</h6></a>
                        <h5>$963.00</h5>
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
                                    <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="close-cart">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="product-box">
                    <div class="img-block">
                        <a href="#"><img src="{{asset('font_assets/images/product/6.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                        <div class="cart-details">
                            <button tabindex="0" class="addcart-box" title="Quick shop"><i class="ti-shopping-cart" ></i></button>
                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                            <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#"><h6>richard mcClintock</h6></a>
                        <h5>$963.00</h5>
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
                                    <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="close-cart">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="product-box">
                    <div class="img-block">
                        <a href="#"><img src="{{asset('font_assets/images/product/6.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                        <div class="cart-details">
                            <button tabindex="0" class="addcart-box" title="Quick shop"><i class="ti-shopping-cart" ></i></button>
                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                            <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#"><h6>richard mcClintock</h6></a>
                        <h5>$963.00</h5>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-b-space ratio_square product-related">
    <div class="container">
        <div class="row">
            <div class="col-12 product-related">
                <h2 class="title pt-0">Best Sellers in Sports, Fitness & Outdoors</h2></div>
        </div>
        <div class="slide-6">
            <div class="">
                <div class="product-box">
                    <div class="img-block">
                        <a href="#"><img src="{{asset('font_assets/images/product/1.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                        <div class="cart-details">
                            <button tabindex="0" class="addcart-box" title="Quick shop"><i class="ti-shopping-cart" ></i></button>
                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                            <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#"><h6>richard mcClintock</h6></a>
                        <h5>$963.00</h5>
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
                                    <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="close-cart">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="product-box">
                    <div class="img-block">
                        <a href="#"><img src="{{asset('font_assets/images/product/2.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                        <div class="cart-details">
                            <button tabindex="0" class="addcart-box" title="Quick shop"><i class="ti-shopping-cart" ></i></button>
                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                            <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#"><h6>richard mcClintock</h6></a>
                        <h5>$963.00</h5>
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
                                    <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="close-cart">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="product-box">
                    <div class="img-block">
                        <a href="#"><img src="{{asset('font_assets/images/product/3.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                        <div class="cart-details">
                            <button tabindex="0" class="addcart-box" title="Quick shop"><i class="ti-shopping-cart" ></i></button>
                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                            <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#"><h6>richard mcClintock</h6></a>
                        <h5>$963.00</h5>
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
                                    <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="close-cart">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="product-box">
                    <div class="img-block">
                        <a href="#"><img src="{{asset('font_assets/images/product/4.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                        <div class="cart-details">
                            <button tabindex="0" class="addcart-box" title="Quick shop"><i class="ti-shopping-cart" ></i></button>
                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                            <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#"><h6>richard mcClintock</h6></a>
                        <h5>$963.00</h5>
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
                                    <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="close-cart">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="product-box">
                    <div class="img-block">
                        <a href="#"><img src="{{asset('font_assets/images/product/5.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                        <div class="cart-details">
                            <button tabindex="0" class="addcart-box" title="Quick shop"><i class="ti-shopping-cart" ></i></button>
                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                            <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#"><h6>richard mcClintock</h6></a>
                        <h5>$963.00</h5>
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
                                    <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="close-cart">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="product-box">
                    <div class="img-block">
                        <a href="#"><img src="{{asset('font_assets/images/product/6.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                        <div class="cart-details">
                            <button tabindex="0" class="addcart-box" title="Quick shop"><i class="ti-shopping-cart" ></i></button>
                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                            <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#"><h6>richard mcClintock</h6></a>
                        <h5>$963.00</h5>
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
                                    <a href="javascript:void(0)"  data-toggle="modal" class="closeCartbox" data-target="#addtocart" tabindex="0">add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="close-cart">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="product-box">
                    <div class="img-block">
                        <a href="#"><img src="{{asset('font_assets/images/product/6.jpg')}}" class=" img-fluid bg-img" alt=""></a>
                        <div class="cart-details">
                            <button tabindex="0" class="addcart-box" title="Quick shop"><i class="ti-shopping-cart" ></i></button>
                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="modal" data-target="#quick-view"  title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                            <a href="compare.html"  title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#"><h6>richard mcClintock</h6></a>
                        <h5>$963.00</h5>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<!-- detail section start -->
@include('storefront.featuresfooter.mainfeatures')
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
                <li>
                    <div class="media">
                        <a href="#">
                            <img alt="" class="mr-3" src="{{asset('font_assets/images/product/1.jpg')}}">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                <h4>item name</h4>
                            </a>
                            <h4>
                                <span>1 x $ 299.00</span>
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
                            <img alt="" class="mr-3" src="{{asset('font_assets/images/product/2.jpg')}}">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                <h4>item name</h4>
                            </a>
                            <h4>
                                <span>1 x $ 299.00</span>
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
                        <a href="#"><img alt="" class="mr-3" src="{{asset('font_assets/images/product/3.jpg')}}"></a>
                        <div class="media-body">
                            <a href="#"><h4>item name</h4></a>
                            <h4><span>1 x $ 299.00</span></h4>
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
                        <a href="cart.html" class="btn btn-solid btn-block btn-solid-sm view-cart">view cart</a>
                        <a href="#" class="btn btn-solid btn-solid-sm btn-block checkout">checkout</a>
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
                            <img alt="" class="mr-3" src="{{asset('font_assets/images/product/1.jpg')}}">
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
                            <img alt="" class="mr-3" src="{{asset('font_assets/images/product/2.jpg')}}">
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
                        <a href="#"><img alt="" class="mr-3" src="{{asset('font_assets/images/product/3.jpg')}}"></a>
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
            <h3>my account</h3>
            <div class="close-cart">
                <a href="javascript:void(0)" onclick="closeAccount()">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <form class="theme-form">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Email" required="">
            </div>
            <div class="form-group">
                <label for="review">Password</label>
                <input type="password" class="form-control" id="review" placeholder="Enter your password" required="">
            </div>
            <a href="#" class="btn btn-solid btn-solid-sm btn-block ">Login</a>
            <h5 class="forget-class"><a href="forget_pwd.html" class="d-block">forget password?</a></h5>
            <h5 class="forget-class"><a href="register.html" class="d-block">new to store? Signup now</a></h5>
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
<div class="modal fade bd-example-modal-lg theme-modal" id="quick-view" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content quick-view-modal">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <div class="quick-view-img"><img src="{{asset('font_assets/images/product/14.jpg')}}" alt="" class="img-fluid "></div>
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


<!-- latest jquery-->
<script src="{{asset('font_assets/js/jquery-3.3.1.min.js')}}" ></script>

<!-- menu js-->
<script src="{{asset('font_assets/js/menu.js')}}"></script>

<!-- popper js-->
<script src="{{asset('font_assets/js/popper.min.js')}}"></script>

<!-- slick js-->
<script  src="{{asset('font_assets/js/slick.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{asset('font_assets/js/bootstrap.js')}}" ></script>

<!-- Timer js-->
<script src="{{asset('font_assets/js/timer.js')}}" ></script>

<!-- Bootstrap Notification js-->
<script src="{{asset('font_assets/js/bootstrap-notify.min.js')}}"></script>

<!-- Theme js-->
<script src="{{asset('font_assets/js/script.js')}}" ></script>

<script>
    $(window).on('load', function() {
        $('#exampleModal').modal('show');
    });
</script>

<!-- modal js-->
<script src="{{asset('font_assets/js/modal.js')}}" ></script>

</body>

</html>
