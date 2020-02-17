@extends('layout')

@section('title', "Crear videojuego")

@section('content')
    <h1>Editar juego</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <h6>Por favor corrige los errores debajo:</h6>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ url("juegos/{$game->id}") }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" placeholder="" value="{{ old('name', $game->name) }}">
        <br>
        <label for="genre">Genero:</label>
        <input type="text" name="genre" id="genre" placeholder="" value="{{ old('genre', $game->genre) }}">
        <br>
        <label for="platform">Plataforma:</label>
        <input type="text" name="platform" id="platform" placeholder="{{ old('platform', $game->platform) }}">
        <br>
        <label for="company">Empresa:</label>
        <input type="text" name="company" id="company" placeholder="" value="{{ old('company', $game->company) }}">
        <br>
        <label for="release">Salida:</label>
        <input type="text" name="release" id="release" placeholder="" value="{{ old('release', $game->release) }}">
        <br>
        <button type="submit">Actualizar juego</button>
    </form>

    <p>
        <a href="{{ route('games.index') }}">Regresar al listado de videojuegos</a>
    </p>
@endsection