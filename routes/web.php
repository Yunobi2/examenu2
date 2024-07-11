<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::view('/','home')->name('inicio');


use App\Http\Controllers\AlumnoController;

Route::get('/', [AlumnoController::class, 'home'])->name('home');
Route::get('/ingreso', [AlumnoController::class, 'ingreso'])->name('ingreso');
Route::post('/guardar', [AlumnoController::class, 'guardar'])->name('guardar.alumno');
Route::get('/listado', [AlumnoController::class, 'listado'])->name('listado');
Route::get('/alumno/{id}', [AlumnoController::class, 'detalle'])->name('alumno.detalle');