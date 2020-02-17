@extends('layout')

@section('title', "Empresa {$company->id}")

@section('content')
    <h1>Empresa #{{ $company->id }}</h1>

    <p>Nombre de la empresa: {{ $company->name }}</p>
    <p>Etiqueta: {{ $company->tag }}</p>
    <p>Pais: {{ $company->country }}</p>
    <p>Fundacion: {{ $company->foundation }}</p>
    <p>CEO: {{ $company->ceo }}</p>

    <p>
        <a href="{{ route('companies.index') }}">Regresar al listado de empresas</a>
    </p>
@endsection