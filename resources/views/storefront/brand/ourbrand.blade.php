
<!-- Company Brand section start -->
<section class=" section-b-space logo">
    <div class="container">
        <h2 class="title">trusted brand</h2>
        <div class="logo-4 border-logo">
             @foreach($brand as $brands)
            <div>
                <div class="logo-img">
                    <img src="upload/Logo/{{$brands->image}}" class=" img-fluid" alt="{{$brands->name}}">
                </div>
                <div class="logo-img">
                    <img src="upload/Logo/{{$brands->image}}" class=" img-fluid" alt="{{$brands->name}}">
                </div>
            </div>
           
           @endforeach
            
           
        </div>
    </div>
</section>
<!-- Company Brand section start -->