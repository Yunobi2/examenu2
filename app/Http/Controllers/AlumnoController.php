<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Http\Requests\AlumnoRequest;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function ingreso()
    {
        return view('ingreso');
    }

    public function guardar(AlumnoRequest $request)
    {
        Alumno::create($request->validated());
        return redirect()->route('listado')->with('success', 'Alumno guardado exitosamente');
    }


    public function listado()
    {
        $alumnos = Alumno::all();
        return view('listado', compact('alumnos'));
    }

    public function detalle($id)
    {
        $alumno = Alumno::findOrFail($id);
        return view('alumno_detalle', compact('alumno'));
    }


}