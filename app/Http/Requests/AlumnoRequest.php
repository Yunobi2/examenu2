<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumnoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre' => 'required|string|max:255',
            'curso' => 'required|string|max:255',
            'nota1' => 'required|numeric|min:0|max:20',
            'nota2' => 'required|numeric|min:0|max:20',
        ];
    }

    public function messages(){
        return[
            'nombre.required' => 'Se necesita completar el nombre',
            'curso.required' => 'Se necesita completar el curso',
            'nota1.required' => 'Se necesita completar la nota1',
            'nota2.required' => 'Se necesita completar la nota2',
        ];
    }
}