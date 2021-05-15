@extends('layout.layout')

@section('contenido')
    <form class="container mt-5" action="{{route('categoria/create')}}" method="POST">
        @csrf
        <h2>Formulario de Categoria</h2>
        <div class="form-group">
            <label for="nombre">Nombre*</label>
            <input type="text" class="form-control" id="nombre" name="nombre" maxlength="100" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" maxlength="250">
        </div>
        <button type="submit" class="btn btn-primary">Registro</button>
    </form>
@endsection
