@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="page-header">
            <h1>Criar Link para Videos</h1>
        </div>
        @include('error_template')
    </div>

    <div class="container">
        {!! Form::open(['route' => 'videos.store']) !!}

            <div class="form-group">
                {!! Form::label('link', 'Link: ') !!}
                <p>(somente youtube hein Julio!!)</p>
                {!! Form::text('link', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('title', 'Titulo/Artista: ') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('description', 'Descrição: ') !!}
                {!! Form::text('description', null, ['class' => 'form-control']) !!}
            </div>



        <div class="form-group">
            {!! Form::submit('Cadastrar',['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection