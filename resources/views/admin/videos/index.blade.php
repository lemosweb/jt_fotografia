@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Videos</h1>
            <a href="{{ route('videos.create') }}" class="btn btn-primary">Cadastrar Novo Video</a>
            <table class="table">
                <tr>

                    <th>Titulo/Artista</th>
                    <th>Descrição/Música</th>
                    <th>Link</th>
                    <th>Video</th>
                    <th>Ações</th>

                </tr>


                @foreach($videos as $video)
                    <tr>

                        <td>{{ $video->title }}</td>
                        <td>{{ $video->description }}</td>
                        <td>{{ $video->link }}</td>
                        <td><iframe width="120" src="{{ $video->link }}" frameborder="0" ></iframe></td>


                        <td>
                            <a href="{{ route('videos.edit', ['id' => $video->id ]) }}" class="btn btn-default">Editar</a>
                            <a href="{{ route('videos.destroy', ['id' => $video->id ]) }}" class="btn btn-danger">Excluir</a>
                        </td>

                    </tr>
                @endforeach

            </table>
            {{ $videos->render() }}
        </div>



    </div>
@endsection