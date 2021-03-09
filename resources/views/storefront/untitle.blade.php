<section class="category category-classic bg-grey">
    <div class="container">
        <div class="slide-6 no-arrow">
             @foreach($subgrouprandomt as $rndmsub)
              <?php $randomcat=indexcontroller::randomcategoryo($rndmsub->id);   ?>
            <div>
                <div class="category-wrapper">
                    <div class="img-block">
                          @foreach($randomcat as $rndomcat)
                        <a href="#"><img src="upload/categoryImage/{{$rndomcat->image}}" alt="" class=" img-fluid"></a>
                         @endforeach
                    </div>
                    <div class="category-title">
                        <a href="#"><h5><?php  echo $rndmsub->name  ?></h5></a>
                    </div>
                </div>
            </div>
             @endforeach

        </div>
    </div>
</section>