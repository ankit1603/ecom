
<!-- home slider section start-->
<div class="slider-bg slider-bg-2 ">
    <div class="container">
        <div class="row">
         

            <div class="col-12 slider-part">
                
                <div class="slide-1 home-slider">
                      @foreach($slider as $sliders)
                     
                        <div class="home text-left p-left">
                           
                            <img src="upload/slider/{{$sliders->image}}" class="bg-img " alt="">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="slider-contain">
                                            <div>
                                             <h5>{{$sliders->title}}</h5>
                                                <h1>{{$sliders->text_style}}</h1>
                                                <h4>{{$sliders->content}}</h4>
                                                <a href="{{$sliders->link}}" class="btn btn-solid">shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         
                        </div>
                    @endforeach
                </div>

            </div>
            
        </div>
    </div>
</div>
<!-- home slider section start-->