<?php

use App\Http\Controllers\Alumnos;
use App\Http\Controllers\Cursos;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Route::get('cursos', 'Cursos@index');
//Route::get('cursos', 'App\Http\Controllers\Cursos@index');
//Route::get('cursos',[Cursos::class,'index']);
Route::controller(Cursos::class)->group(function(){
    Route::get('cursos',"index")->name('cursos.index');
    Route::get('/',"index");
    Route::get('/cursos/create',"create")->name('cursos.create');
    Route::post('/cursos/store',"store")->name('cursos.store');
    Route::get('/cursos/update/{id}',"edit")->name('cursos.update_form');
    Route::put('/cursos/update/{id}',"update")->name('cursos.update');
    Route::delete('/cursos/delete/{id}',"destroy")->name('cursos.destroy');
});
Route::controller(Alumnos::class)->group(function(){
    Route::get('alumnos',"index")->name('alumnos.index');
    Route::get('/',"index");
    Route::get('/alumnos/create',"create")->name('alumnos.create');
    Route::post('/alumnos/store',"store")->name('alumnos.store');
    Route::get('/alumnos/update/{id}',"edit")->name('alumnos.update_form');
    Route::put('/alumnos/update/{id}',"update")->name('alumnos.update');
    Route::delete('/alumnos/delete/{id}',"destroy")->name('alumnos.destroy');
});
