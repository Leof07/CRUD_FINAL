@extends('layout.main')
@section('content')
    <h1>Actualizar Alumno</h1>
    <form action="{{ route('alumnos.update', $alumno->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group container-fluid">
            <label for="">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $alumno->nombre }}">
            <br>
            <label for="">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $alumno->apellido }}">
            <br>
            <label for="">Fecha de nacimiento</label>
            <input type="text" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ $alumno->fecha_nacimiento }}">
            <br>
            <label for="">Direccion</label>
            <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $alumno->direccion }}">
            <br>
            <label for="">Telefono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $alumno->telefono }}">
            <br>
            <label for="">Curso</label>
            <select name="curso_id" id="curso_id" class="form-control">
                @foreach ($cursos as $curso)
                    <option @selected($alumno->curso_id==$curso->id) value="{{ $curso->id }}">{{ $curso->nombre }}</option>
                @endforeach
            </select>
            <br>    
            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-pen"></i> Actualizar</button>
        </div>   
    </form>     

@endsection
