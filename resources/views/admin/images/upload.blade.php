@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="page-header">
            <h1>Publicar Imagens em {{ $gallery->name }}</h1>
        </div>
        @include('error_template')
    </div>

    <div class="container">

{!! Form::open(['route' => ['images.upload', $gallery->id], 'enctype' => 'multipart/form-data']) !!}

        {!! Form::hidden('gallery_id', $gallery->id) !!}


    <div class="form-group">name
        {!! Form::label('name', 'Arquivo: ') !!}
        {!! Form::file('file') !!}
    </div>

    <div class="form-group">
        {!! Form::label('titulo', 'Titulo: ') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Publicar Foto',['class' => 'btn btn-primary']) !!}
    </div>

{!! Form::close() !!}

</div>

@endsection