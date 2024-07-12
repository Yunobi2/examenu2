<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'curso', 'nota1', 'nota2', 'promedio', 'condicion', 'fecha_reg'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($alumno) {
            $alumno->promedio = ($alumno->nota1 + $alumno->nota2) / 2;
            $alumno->condicion = $alumno->promedio >= 11 ? 'APROBADO' : 'DESAPROBADO';
            $alumno->fecha_reg = now()->toDateString();
        });

        static::updating(function ($alumno) {
            $alumno->promedio = ($alumno->nota1 + $alumno->nota2) / 2;
            $alumno->condicion = $alumno->promedio >= 11 ? 'APROBADO' : 'DESAPROBADO';
        });
    }
}