<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Curso;
use Illuminate\Http\Request;

class Alumnos extends Controller
{
    public function index(){
        $alumnos= Alumno::getList();
        return view('alumnos.index',compact('alumnos'));
    }
    public function create(){
        $cursos= Curso::getList();
        return view('alumnos.create',compact('cursos'));
    }
    public function store(Request $request){
        $alumno = new Alumno();
        $alumno->nombre = $request->nombre;
        $alumno->apellido = $request->apellido;
        $alumno->fecha_nacimiento = $request->fecha_nacimiento;
        $alumno->direccion = $request->direccion;
        $alumno->telefono = $request->telefono;
        $alumno->curso_id = $request->curso_id;
        $alumno->save();
        return redirect()->route('alumnos.index');
    }
    public function edit($id)
    {
        $alumno = Alumno::find($id);
        $cursos= Curso::getList();
        return view('alumnos.update',compact('alumno','cursos'));
    }
    public function update(Request $request, $id)
    {
        $alumno = Alumno::find($id);
        $alumno->nombre = $request->nombre;
        $alumno->apellido = $request->apellido;
        $alumno->fecha_nacimiento = $request->fecha_nacimiento;
        $alumno->direccion = $request->direccion;
        $alumno->telefono = $request->telefono;
        $alumno->curso_id = $request->curso_id;
        $alumno->save();
        return redirect()->route('alumnos.index');
    }
    public function destroy($id)
    {
        $alumno = Alumno::find($id);
        $alumno->delete();
        return redirect()->route('alumnos.index');
    }

}
