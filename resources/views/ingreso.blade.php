@extends('layouts.app')

@section('content')
<div class="container">
    <h2>INGRESO</h2>
    <form action="{{ route('guardar.alumno') }}" method="POST">
        @csrf
        <label for="nombre">NOMBRE</label>
        <input type="text" id="nombre" name="nombre"><br>{{ $errors->first('nombre')}}
        
        <label for="curso">CURSO</label>
        <input type="text" id="curso" name="curso"><br>{{ $errors->first('curso')}}
        
        <label for="nota1">NOTA 1</label>
        <input type="number" id="nota1" name="nota1"><br>{{ $errors->first('nota1')}}
        
        <label for="nota2">NOTA 2</label>
        <input type="number" id="nota2" name="nota2"><br>{{ $errors->first('nota2')}}
        
        <button type="submit">GUARDAR</button>
        <a href="{{ route('home') }}" class="btn-retroceder">Volver a Home</a>
    </form>
</div>
@endsection