           <?php  use \App\Http\Controllers\indexcontroller; 

 ?>
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
                                    <a href="product-page.html"><img src="upload/product/{{$rndomprod->image}}" class=" img-fluid bg-img" alt=""></a>
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