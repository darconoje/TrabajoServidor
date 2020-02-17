@extends('layout')

@section('title', 'Empresas')

@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1">{{ $title }}</h1>
        <p>
            <a href="{{ route('companies.create') }}" class="btn btn-primary">Nueva empresa</a>
        </p>
    </div>

    @if ($companies->isNotEmpty())
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Etiqueta</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($companies as $company)
        <tr>
            <th scope="row">{{ $company->id }}</th>
            <td>{{ $company->name }}</td>
            <td>{{ $company->tag }}</td>
            <td>
                <form action="{{ route('companies.destroy', $company) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href="{{ route('companies.show', $company) }}" class="btn btn-link"><span class="oi oi-eye"></span></a>
                    <a href="{{ route('companies.edit', $company) }}" class="btn btn-link"><span class="oi oi-pencil"></span></a>
                    <button type="submit" class="btn btn-link"><span class="oi oi-trash"></span></button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @else
        <p>No hay empresas registradas.</p>
    @endif
@endsection

@section('sidebar')
    @parent
@endsection