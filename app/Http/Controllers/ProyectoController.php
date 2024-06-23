<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index(){
        return view('dashboard.proyecto.proyecto');
    }

    public function home(){
        return view('dashboard.home');
    }

    public function create(){
        return view('dashboard.proyecto.create');
    }
}

