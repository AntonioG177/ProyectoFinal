<?php

use App\Http\Controllers\dashboard\ProyectoController;
use App\Models\Proyecto;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('holamundo', [ProyectoController ::class, 'index']);

Auth::routes();

Route::resource('proyecto', ProyectoController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function() {
    return view('dashboard.home');
});

//ruta para mostrar la tabla con los proyectos ya creados
Route::get('/proyecto', function() {
    return view('dashboard.proyecto.proyecto');
});

Route::get('/proyectos', function() {
    return view('dashboard.proyecto.proyecto');
})->name('proyectos');
