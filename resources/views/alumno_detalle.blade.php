@extends('layouts.app')

@section('content')
<div class="container">
    <h2>ALUMNO {{ $alumno->id }}</h2>
    <div class="detalle">
        <p><strong>NOMBRE:</strong> {{ $alumno->nombre }}</p>
        <p><strong>CURSO:</strong> {{ $alumno->curso }}</p>
        <p><strong>NOTA 1:</strong> {{ $alumno->nota1 }}</p>
        <p><strong>NOTA 2:</strong> {{ $alumno->nota2 }}</p>
        <p><strong>PROMEDIO:</strong> {{ number_format($alumno->promedio, 2) }}</p>
        <p><strong>CONDICION:</strong> {{ $alumno->condicion }}</p>
        <p><strong>FECHA REG:</strong> {{ $alumno->fecha_reg }}</p>
    </div>
    <a href="{{ route('listado') }}" class="btn-retroceder">Volver al listado</a>
    <a href="{{ route('home') }}" class="btn-retroceder">Volver a Home</a>
</div>
@endsection