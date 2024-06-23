<?php

use App\Http\Controllers\dashboard\ProyectoController;
use App\Http\Middleware\AdminAuthenticate;
use App\Models\Proyecto;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas para el controlador de Proyecto
Route::resource('proyecto', ProyectoController::class);

// Ruta para la página principal del dashboard
Route::get('/dashboard', function() {
    return view('dashboard.home');
})->name('dashboard');

// Ruta para la página de proyectos
Route::get('/proyectos', [ProyectoController::class, 'index'])->name('proyectos');

// Rutas protegidas por el middleware
Route::get('/proyecto/create', [ProyectoController::class, 'create'])->name('proyecto.create')->middleware(AdminAuthenticate::class);
Route::get('/proyecto/{proyecto}/edit', [ProyectoController::class, 'edit'])->name('proyecto.edit')->middleware(AdminAuthenticate::class);
Route::put('/proyecto/{proyecto}', [ProyectoController::class, 'update'])->name('proyecto.update')->middleware(AdminAuthenticate::class);
Route::delete('/proyecto/{proyecto}', [ProyectoController::class, 'destroy'])->name('proyecto.destroy')->middleware(AdminAuthenticate::class);

Route::get('/home', [App\Http\Controllers\ProyectoController::class, 'home'])->name('home');
