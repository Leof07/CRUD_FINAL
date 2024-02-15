@extends('layout.main')
@section('content')
    <h1>Actualizar Curso</h1>
    <form action="{{ route('cursos.update', $curso->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group container-fluid">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $curso->nombre }}">
            <br>
            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-pen"></i> Actualizar</button>
        </div>   
    </form>     

@endsection
