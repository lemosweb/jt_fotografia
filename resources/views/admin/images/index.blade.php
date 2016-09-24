@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="page-header">
            <h1>Galeria {{ $gallery->name }}</h1>
        </div>
        @include('error_template')
    </div>

<div class="container">

    <a href="{{ route('images.create', ['id' => $gallery->id ]) }}" class="btn btn-success">Cadastrar nova Imagem em {{ $gallery->name }}</a>

    <p>Galeria: </p>


        <div class="container col-md-12">

            @foreach($gallery->images as $image)

                  <div class="container col-md-2 img-thumbnail">

                    <div class="container row">
                        @if($image->cover == 0)
                            @if($image->gallery_id == 1)
                            @else
                            $image->cover == 1 ? : <a href="{{ route('galleries.setcover', ['idImage' => $image->id]) }}" class="btn btn-primary btn-xs">Definir como Capa</a>
                            @endif
                        @else
                            <a href="{{ route('galleries.setcover', ['idImage' => $image->id]) }}" class="btn btn-success btn-xs">Imagem de Capa</a>
                        @endif

                            <a href="{{ route('images.destroy', ['idImage' => $image->id]) }}" class="btn btn-danger btn-xs">Excluir</a>
                    </div>
                      <br>

                    <a data-title="{{ $image->title }}" data-lightbox="image-1" href="{{url('/uploads/'. $image->name .'.'. $image->extension)}}" alt="{{$image->title}})}}">
                        <img  src="{{url('/uploads/'. $image->name .'.'. $image->extension)}}" alt="{{$image->title}})}}" style="max-height: 120px" class="img-thumbnail">
                    </a>

                      <p>{{ $image->title }}</p>
                  </div>
            @endforeach


        </div>
</div>



@endsection