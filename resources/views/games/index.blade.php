@extends('layout')

@section('title', 'Videojuegos')

@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1">{{ $title }}</h1>
        <p>
            <a href="{{ route('games.create') }}" class="btn btn-primary">Nuevo videjuego</a>
        </p>
    </div>

    @if ($games->isNotEmpty())
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Genero</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($games as $game)
        <tr>
            <th scope="row">{{ $game->id }}</th>
            <td>{{ $game->name }}</td>
            <td>{{ $game->genre }}</td>
            <td>
                <form action="{{ route('games.destroy', $game) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href="{{ route('games.show', $game) }}" class="btn btn-link"><span class="oi oi-eye"></span></a>
                    <a href="{{ route('games.edit', $game) }}" class="btn btn-link"><span class="oi oi-pencil"></span></a>
                    <button type="submit" class="btn btn-link"><span class="oi oi-trash"></span></button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @else
        <p>No hay videojuegos registrados.</p>
    @endif
@endsection

@section('sidebar')
    @parent
@endsection