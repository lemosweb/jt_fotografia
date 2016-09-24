@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="page-header">
            <h1>Editar Categoria {{ $gallery->name }}</h1>
        </div>
        @include('error_template')
    </div>

    <div class="container">
        {!! Form::open(['route' => ['galleries.update', $gallery->id], 'method' => 'put']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', $gallery->name, ['class' => 'form-control']) !!}
            </div>


        <div class="form-group">
            {!! Form::submit('Atualizar Galeria',['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection