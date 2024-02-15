@extends('layout.main')
@section('content')
    <h1>Crear Curso</h1>
    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf
        <div class="form-group container-fluid">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
            <br>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
@endsection    
