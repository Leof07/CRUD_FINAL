@extends('layout.main')
@section('content')
    <h1>Cursos</h1>
    <div class="container-fluid">
        <a href="{{ route('cursos.create') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Agregar Curso</a>
        <table class=" table table-primary">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                <tr>
            </thead>
            <tbody>
                @foreach ($cursos as $curso)
                    <tr>
                        <td>{{ $curso->id }}</td>
                        <td>{{ $curso->nombre }}</td>
                        <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        onclick="deleteCurso('{{ route('cursos.destroy', ['id' => $curso->id]) }}')"
                        ><i class="fa-solid fa-trash"></i> Eliminar</button>
                            <a class="btn btn-success" href="{{ route('cursos.update_form', ['id' => $curso->id]) }}"><i class="fa-solid fa-pen"></i>    Actualizar</a>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminación de curso</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Usted desea eliminar el curso?
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
        function deleteCurso(action){
            document.getElementById('formDelete').action = action;
        }
    </script> 
@endsection
