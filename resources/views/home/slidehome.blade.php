<div id="home">
    <!-- Slider Starts -->
    <div id="myCarousel" class="carousel slide banner-slider animated bounceInDown" data-ride="carousel">
        <div class="carousel-inner">

            @foreach($images as $image)

                                <div class="item{{($count == 0 ? ' active' : '')}}">
                                    <img src="{{url('uploads/'. $image->name .'.'. $image->extension)}}" alt="banner">
                                </div>

                           <?php $count = 1; ?>
            @endforeach

        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-menu-right"><i class="fa fa-angle-left"></i></span></a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-menu-left"><i class="fa fa-angle-right"></i></span></a>
    </div>
    <!-- #Slider Ends -->
</div>
