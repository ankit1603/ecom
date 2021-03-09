<?php   use \App\Http\Controllers\indexcontroller;   ?> 
<div class="col-xl-4 col-lg-6 col-md-12">
                <div class="blog-box blog-pattern">
                    <div class="blog-white product-sec">
                        <h2 class="title">you may like</h2>
                        <div class="slide-1">
                            <div>
                                @foreach($youmaylike as $ymayl)
                             <?php   $featupname=indexcontroller::featurerprod($ymayl->product_id);   ?>
                             @foreach($featupname as $pron)
                                <div class="product-block">
                                    <div class="media">
                                        <img class="mr-3" src="upload/product/{{$pron->image}}"  alt="Generic placeholder image">
                                        <div class="media-body">
                                            <div>
                                                <h5>{{$pron->name}} </h5>
                                            </div>
                                            <a href="{{url('/product/'.$pron->id)}}" class="btn btn-solid btn-solid-sm">shop now</a>
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