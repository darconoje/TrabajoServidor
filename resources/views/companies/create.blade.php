@extends('layout')

@section('title', "Crear empresa")

@section('content')
    <div class="card">
        <h4 class="card-header">Crear empresa</h4>
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

            <form method="POST" action="{{ url('empresas') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="" value="{{ old('name') }}">
                </div>

                <div class="form-group">
                    <label for="tag">Etiqueta:</label>
                    <input type="text" class="form-control" name="tag" id="tag" placeholder="" value="{{ old('tag') }}">
                </div>

                <div class="form-group">
                    <label for="country">Pais:</label>
                    <input type="text" class="form-control" name="country" id="country" placeholder="" value="{{ old('country') }}">
                </div>

                <div class="form-group">
                    <label for="foundation">Fundacion:</label>
                    <input type="text" class="form-control" name="foundation" id="foundation" placeholder="" value="{{ old('foundation') }}">
                </div>

                <div class="form-group">
                    <label for="ceo">CEO:</label>
                    <input type="text" class="form-control" name="ceo" id="ceo" placeholder="" value="{{ old('ceo') }}">
                </div>                                

                <button type="submit" class="btn btn-primary">Crear empresa</button>
                <a href="{{ route('companies.index') }}" class="btn btn-link">Regresar al listado de empresas</a>
            </form>
        </div>
    </div>
@endsection