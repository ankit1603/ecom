    <!-- loader end -->
    <?php   
    use \App\Http\Controllers\indexcontroller;   
    ?> 
                <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="blog-box blog-pattern">
                    <div class="blog-white feature-sec">
                        <h2 class="title">our featured offers</h2>
                        <div class="feature-block">
                            @foreach($featurepro as $featurfri)
                            <?php
                              if(isset($prsr)){$prsr=$prsr+1;}else{$prsr=1;}
                            if($prsr<3){
                            $featupname=indexcontroller::featurerprod($featurfri->product_id); 
                            ?>
                             @foreach($featupname as $pron)
                            <div class="media">
                                <a href="{{url('/product/'.$pron->id)}}"><img class="mr-3  img-fluid" src="upload/product/{{$pron->image}}"  alt="Featured product"></a>
                                <div class="media-body">
                                    <a href="{{url('/product/'.$pron->id)}}"><h5> {{$pron->name}} <br><i class="fa fa-rupee"></i><del>{{round($featurfri->sale_price, 2)}}</del><br>
                                        <i class="fa fa-rupee"></i>{{round($featurfri->offer_price, 2)}}</h5></a>
                                </div>
                            </div>
                            @endforeach 
                            
                        <?php  }?>
                            @endforeach
                        </div>
                        <div class="feature-block">
                            @foreach($featurepro as $featurfri)
                            
                            <?php if(isset($prsra)){$prsra=$prsra+1;}else{$prsra=1;}
                            if($prsra>3 AND $prsra<5){
                            
                            $featupname=indexcontroller::featurerprod($featurfri->product_id); 
                            ?>
                             @foreach($featupname as $pron)
                            <div class="media">
                                <a href="{{url('/product/'.$pron->id)}}"><img class="mr-3  img-fluid" src="upload/product/{{$pron->image}}"  alt="Featured product"></a>
                                <div class="media-body">
                                    <a href="{{url('/product/'.$pron->id)}}"><h5> {{$pron->name}} <br><i class="fa fa-rupee"></i><del>{{round($featurfri->sale_price, 2)}}</del><br>
                                        <i class="fa fa-rupee"></i>{{round($featurfri->offer_price, 2)}}</h5></a>
                                </div>
                            </div>
                            @endforeach 
                            
                        <?php  }?>
                            @endforeach
                        </div>
                        <div class="feature-block">
                            @foreach($featurepro as $featurfri)
                            <?php  if(isset($prsraa)){$prsraa=$prsraa+1;}else{$prsraa=1;}
                            if($prsraa>5 AND $prsraa<7){
                            
                            $featupname=indexcontroller::featurerprod($featurfri->product_id); 
                            ?>
                             @foreach($featupname as $pron)
                            <div class="media">
                                <a href="{{url('/product/'.$pron->id)}}"><img class="mr-3  img-fluid" src="upload/product/{{$pron->image}}"  alt="Featured product"></a>
                                <div class="media-body">
                                    <a href="{{url('/product/'.$pron->id)}}"><h5> {{$pron->name}} <br><i class="fa fa-rupee"></i><del>{{round($featurfri->sale_price, 2)}}</del><br>
                                        <i class="fa fa-rupee"></i>{{round($featurfri->offer_price, 2)}}</h5></a>
                                </div>
                            </div>
                            @endforeach 
                            
                        <?php } ?>
                            @endforeach
                        </div>
                      
                       
                      
                    </div>
                </div>
            </div>