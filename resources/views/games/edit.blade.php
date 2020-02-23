@extends('layout')

@section('title', "Crear videojuego")

@section('content')
@if(Auth::user()->isAdmin())
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
        <input type="text" name="platform" id="platform" placeholder="" value="{{ old('platform', $game->platform) }}">
        <br>
        <label for="company">Empresa:</label>
        <select name="company" id="company">
        @foreach ($companies as $company)
            <option value="{{ $company->name }}">{{ $company->name }}</option>
        @endforeach
        </select>
        <br>
        <label for="release">Salida:</label>
        <input type="text" name="release" id="release" placeholder="" value="{{ old('release', $game->release) }}">
        <br>
        <button type="submit">Actualizar juego</button>
    </form>

    <p>
        <a href="{{ route('games.index') }}">Regresar al listado de videojuegos</a>
    </p>
@else 
<div>
    <h1>Solo el administrador puede realizar funciones de crear, editar y eliminar</h1>
</div>    
@endif
@endsection