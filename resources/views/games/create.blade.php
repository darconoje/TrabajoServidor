@extends('layout')

@section('title', "Crear videojuego")

@section('content')
    <div class="card">
        <h4 class="card-header">Crear videojuego</h4>
        <div class="card-body">

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

            <form method="POST" action="{{ url('juegos') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="" value="{{ old('name') }}">
                </div>

                <div class="form-group">
                    <label for="genre">Genero:</label>
                    <input type="text" class="form-control" name="genre" id="genre" placeholder="" value="{{ old('genre') }}">
                </div>

                <div class="form-group">
                    <label for="platform">Plataforma:</label>
                    <input type="text" class="form-control" name="platform" id="platform" placeholder="" value="{{ old('platform') }}">
                </div>

                <div class="form-group">
                    <label for="company">Empresa:</label>
                    <input type="text" class="form-control" name="company" id="company" placeholder="" value="{{ old('company') }}">
                </div>

                <div class="form-group">
                    <label for="release">Salida:</label>
                    <input type="text" class="form-control" name="release" id="release" placeholder="" value="{{ old('release') }}">
                </div>                                

                <button type="submit" class="btn btn-primary">Crear videojuego</button>
                <a href="{{ route('games.index') }}" class="btn btn-link">Regresar al listado de videojuegos</a>
            </form>
        </div>
    </div>
@endsection