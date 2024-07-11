@extends('layouts.app')

@section('content')
<div class="container">
    <h2>LISTADO</h2>
    <ul>
        @foreach($alumnos as $alumno)
            <li>
                <a href="{{ route('alumno.detalle', $alumno->id) }}">{{ $alumno->nombre }}</a>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('ingreso') }}" class="btn-retroceder">Registrar otro alumno</a>
    <a href="{{ route('home') }}" class="btn-retroceder">Volver a Home</a>
</div>
@endsection