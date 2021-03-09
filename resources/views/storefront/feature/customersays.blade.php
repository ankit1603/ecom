<?php   
use \App\Http\Controllers\indexcontroller;   
?> 
<div class="col-xl-4 col-lg-6 col-md-12">
                <div class="blog-box blog-pattern">
                    <div class="blog-white feature-sec">
                        <h2 class="title">Women’s home wear basics</h2>
                        @foreach($womencat as $womenc)
                       <?php $wsubgrouprandom=indexcontroller::wrandomsubgroup($womenc->id);  ?>
                       @foreach($wsubgrouprandom as $wosubc)
                       <?php $subgrouprandom=indexcontroller::randomcategoryo($wosubc->id);  ?>
                       @foreach($subgrouprandom as $woc)
                       <?php $wsubgrouprandomi=indexcontroller::wrandomproducti($woc->id);  ?>
                       @foreach($wsubgrouprandomi as $wpn)
                     <?php  if(isset($gtr)){$gtr=$gtr+1;}else{ $gtr=1;}  
                     echo '<div class="feature-block">';
?>
                            <div class="media">
                                <a href="{{url('/product/'.$wpn->id)}}"><img class="mr-3  img-fluid" src="upload/product/{{$wpn->image}}"  alt="Generic placeholder image"></a>
                                <div class="media-body">
                                    <a href="{{url('/product/'.$wpn->id)}}"><h5> {{$wpn->name}}</h5></a>
                                </div>
                            </div>


                      <?php   echo  '</div>';  ?>
                        @endforeach 
                        @endforeach 
                        @endforeach 
                        @endforeach 
                    </div>
                </div>
            </div>