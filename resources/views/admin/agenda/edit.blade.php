@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="page-header">
            <h1>Editar Link de Video {{ $agenda->name }}</h1>
        </div>
        @include('error_template')
    </div>

    <div class="container">
        {!! Form::model($agenda, ['route' => ['agenda.update', $agenda->id], 'method' => 'put']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Nome: ') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('local', 'Local: ') !!}
            {!! Form::text('local', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Descrição: ') !!}
            {!! Form::text('description', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('date', 'Data: ') !!}
            {!! Form::date('date', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('time', 'Horário: ') !!}
            {!! Form::time('time', null, ['class' => 'form-control']) !!}
        </div>



        <div class="form-group">
            {!! Form::submit('Atualizar Link',['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection