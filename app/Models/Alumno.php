<?php

namespace App\Models;

use App\Http\Controllers\Alumnos;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Alumno extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'apellido',
        'fechaNacimiento',
        'direccion',
        'telefono',
        'curso_id',
    ];
    public function curso(): HasOne
    {
        return $this->hasOne(Curso::class,'id','curso_id');
    }
    public static function getList(){
        return Alumno::all();
    }
}
