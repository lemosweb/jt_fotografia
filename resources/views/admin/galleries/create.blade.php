@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="page-header">
            <h1>Criar Galeria</h1>
        </div>
        @include('error_template')
    </div>

    <div class="container">
        {!! Form::open(['route' => 'galleries.store']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Nome: ') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

        <div class="form-group">
            {!! Form::submit('Cadastrar',['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection