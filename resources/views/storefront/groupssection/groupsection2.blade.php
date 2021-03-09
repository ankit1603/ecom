
<?php  use \App\Http\Controllers\indexcontroller; 

 ?>
<section class="section-b-space ratio_square product-related">
    <div class="container">
        <div class="row">
            <div class="col-12 product-related">
                <h2 class="title pt-0">Best Sellers in  @foreach($subcategoryasc as $subcdsc)
                    {{$subcdsc->name}}

                       
                   
                </h2></div>
        </div>
        <div class="slide-6">
            <?php $randomsub=indexcontroller::randomsubgroup($subcdsc->id);   ?>
                    @foreach($randomsub as $rndmsub)
                   <?php $randomcat=indexcontroller::randomcategory($rndmsub->id);   ?>

                    @foreach($randomcat as $rndomcat)
                       <?php $randomprod=indexcontroller::randomproduct($rndomcat->id);   ?>
                         @foreach($randomprod as $rndomprod)
                         {{$rndomprod->id}}
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
         @endforeach
    </div>
</section>