@extends('layouts.app')

@section('content')
<div class="container">
    <h1>EXAMEN PARCIAL</h1>
    <nav>
        <a href="{{ route('home') }}">HOME</a>
        <a href="{{ route('ingreso') }}">INGRESO</a>
        <a href="{{ route('listado') }}">LISTADO</a>
    </nav>
</div>
@endsection