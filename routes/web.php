<?php

use App\Http\Controllers\ProyectoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('holamundo', [ProyectoController ::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function() {
    return view('dashboard.home');
});

Route::get('/proyecto', function() {
    return view('dashboard.proyecto.proyecto');
});