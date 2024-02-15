@extends('layout.main')
@section('content')
    <h1>Alumnos</h1>
    <div class="container-fluid">
        <a href="{{ route('alumnos.create') }}" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i> Agregar Alumno</a>
        <table class=" table table-primary">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Fecha de nacimiento</th>
                    <th>direccion</th>
                    <th>telefono</th>
                    <th>curso</th>
                    <th>Acciones</th>
                <tr>
            </thead>
            <tbody>
                @foreach ($alumnos as $alumno)
                    <tr>
                        <td>{{ $alumno->id }}</td>
                        <td>{{ $alumno->nombre }}</td>
                        <td>{{ $alumno->apellido }}</td>
                        <td>{{ $alumno->fecha_nacimiento }}</td>
                        <td>{{ $alumno->direccion }}</td>
                        <td>{{ $alumno->telefono }}</td>
                        <td>{{ $alumno->curso->nombre }}</td>
                        <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        onclick="deleteAlumno('{{ route('alumnos.destroy', ['id' => $alumno->id]) }}')"
                        ><i class="fa-solid fa-trash"></i> Eliminar</button>
                            <a class="btn btn-success"
                                href="{{ route('alumnos.update_form', ['id' => $alumno->id]) }}"><i class="fa-solid fa-pen"></i> Actualizar</a>
                        </td>
                    </tr>
                @endforeach
        </table>
    </div>
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminación de Alumno</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Usted desea eliminar el alumno?
                </div>
                <form action="" class="modal-footer" method="POST" id="formDelete">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" ><i class="fa-solid fa-trash"></i> Eliminar</button>
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal"><i class="fa-solid fa-ban"></i> Cancelar</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        function deleteAlumno(action){
            document.getElementById('formDelete').action = action;
        }
    </script>    
@endsection
