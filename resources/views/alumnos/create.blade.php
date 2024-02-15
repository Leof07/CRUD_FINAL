@extends('layout.main')
@section('content')
    <h1>Agregar Alumno</h1>
    <form action="{{ route('alumnos.store') }}" method="POST">
        @csrf
        <div class="form-group container-fluid">
            <label for="">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
            <br>
            <label for="">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" required>
            <br>
            <label for="">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
            <br>
            <label for="">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" required>
            <br>
            <label for="">Telefono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" required>
            <br>
            <label for="">Curso</label>
            <select name="curso_id" id="curso_id" class="form-control">
                @foreach ($cursos as $curso)
                    <option value="{{ $curso->id }}">{{ $curso->nombre }}</option>
                @endforeach
            </select> 
            <br>  
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
@endsection  
