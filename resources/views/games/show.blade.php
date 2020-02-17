@extends('layout')

@section('title', "Juego {$game->id}")

@section('content')
    <h1>Juego #{{ $game->id }}</h1>

    <p>Nombre del juego: {{ $game->name }}</p>
    <p>Genero: {{ $game->genre }}</p>
    <p>Plataforma: {{ $game->platform }}</p>
    <p>Empresa: {{ $game->company }}</p>
    <p>Salida: {{ $game->release }}</p>

    <p>
        <a href="{{ route('games.index') }}">Regresar al listado de videojuegos</a>
    </p>
@endsection