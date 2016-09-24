@extends('layouts.app')
@section('content')
    @include('modal')
    <div class="container">
        <div class="page-header">
            <h1>Galerias</h1>
            <a href="{{ route('galleries.create') }}" class="btn btn-primary">Cadastrar Galeria</a>
            <table class="table">
                <tr>

                    <th>Nome</th>

                    <th>Ações</th>
                </tr>


                @foreach($galleries as $gallery)
                    <tr>

                        <td>{{ $gallery->name }}</td>
                        <td>


                            <a href="{{ route('images.create', ['id' => $gallery->id]) }}" class="btn btn-primary">Cadastrar Imagens</a>
                            <a href="{{ route('images.index', ['id' => $gallery->id]) }}" class="btn btn-success">Visualizar Galeria</a>
                          @if($gallery->id == 1)

                          @else

                            <a href="{{ route('galleries.edit', ['id' => $gallery->id ]) }}" class="btn btn-default">Editar</a>
                            <a href="{{ route('galleries.destroy', ['id' => $gallery->id ]) }}" class="btn btn-danger" name="delete">Excluir</a>

                          @endif
                        </td>





                    </tr>
                @endforeach

            </table>
            {{ $galleries->render() }}
        </div>



    </div>


@endsection