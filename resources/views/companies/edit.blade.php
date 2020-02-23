@extends('layout')

@section('title', "Crear empresa")

@section('content')
@if(Auth::user()->isAdmin())
    <h1>Editar empresa</h1>

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

    <form method="POST" action="{{ url("empresas/{$company->id}") }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" placeholder="" value="{{ old('name', $company->name) }}">
        <br>
        <label for="tag">Etiqueta:</label>
        <input type="text" name="tag" id="tag" placeholder="" value="{{ old('tag', $company->tag) }}">
        <br>
        <label for="country">Pais:</label>
        <input type="text" name="country" id="country" placeholder="{{ old('country', $company->country) }}">
        <br>
        <label for="foundation">Fundacion:</label>
        <input type="text" name="foundation" id="foundation" placeholder="" value="{{ old('foundation', $company->foundation) }}">
        <br>
        <label for="ceo">CEO:</label>
        <input type="text" name="ceo" id="ceo" placeholder="" value="{{ old('ceo', $company->ceo) }}">
        <br>
        <button type="submit">Actualizar empresa</button>
    </form>

    <p>
        <a href="{{ route('companies.index') }}">Regresar al listado de empresas</a>
    </p>
@else
<div>
    <h1>Solo el administrador puede realizar funciones de crear editar y eliminar</h1>
</div> 
@endif    
@endsection