<div id="videos" class="container spacer ">
    <h2 class="text-center  wowload fadeInUp">Julio Torres Filmes</h2>
    <div class="clearfix"></div>



        <div class="col-sm-12">



                    @foreach($videos as $video)
                        <div class="item active animated bounceInRight row">
                            <div  class="col-xs-5 col-xs-offset-2">
                                <h6> {{ $video->title }} - {{ $video->description }}</h6>
                                <iframe width="640" height="410" src="{{ $video->link }}" frameborder="0" ></iframe>
                            </div>
                        </div>
                        <br>
                    @endforeach




        </div>





</div>