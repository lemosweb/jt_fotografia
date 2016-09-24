@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Agenda</h1>
            <a href="{{ route('agenda.create') }}" class="btn btn-primary">Cadastrar Novo Evento</a>
            <table class="table">
                <tr>

                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Local</th>
                    <th>Data</th>
                    <th>Horário</th>
                    <th>Ações</th>

                </tr>


                @foreach($agendas as $agenda)
                    <tr>

                        <td>{{ $agenda->name }}</td>
                        <td>{{ $agenda->description }}</td>
                        <td>{{ $agenda->local }}</td>
                        <td>{{  date("d-m-Y", strtotime($agenda->date)) }}</td>
                        <td>{{ $agenda->time }}</td>


                        <td>
                            <a href="{{ route('agenda.edit', ['id' => $agenda->id ]) }}" class="btn btn-default">Editar</a>
                            <a href="{{ route('agenda.destroy', ['id' => $agenda->id ]) }}" class="btn btn-danger">Excluir</a>
                        </td>

                    </tr>
                @endforeach

            </table>
            {{ $agendas->render() }}
        </div>



    </div>
@endsection