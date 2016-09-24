<!-- works -->
<div id="works"  class=" clearfix grid">

@foreach($covers as $cover)
        <figure  class="effect-oscar  wowload fadeInUp" onclick="loadGallery();">
            <img src="{{url('/uploads/'. $cover->name .'.'. $cover->extension)}}" alt="img01"/>
            <figcaption>
                <h2>{{ $cover->gallery->name }}</h2>
                <p>{{ $cover->title }} - {{ $cover->descriptionocal  }}<br>
                    <a  href="{{url('uploads/'. $cover->name .'.'. $cover->extension)}}" title="{{$cover->gallery->name}} : {{$cover->title}}" data-gallery>Veja Mais</a>
                    @foreach($cover->gallery->images as $image)
                        @if($image->cover == 0)
                        <a   href="{{url('uploads/'. $image->name .'.'. $image->extension)}}" title="{{ $image->gallery->name }} : {{$image->title}}" style="display:none" data-gallery></a>
                        @endif
                    <!-- colocar uma estrutura de laço buscando as figuras que não sejam de capa -->
                    @endforeach
                </p>
            </figcaption>
        </figure>
@endforeach




</div>
<!-- works -->