@extends('layouts.admin')

@section('content')
@include('fragments.session')
    <div class="container mt-5">
        <div class="row">
        <div class="col-lg-12 bienvenida" style="text-align: center;">
            <h1>Bienvenido</h1>
            <a href="{{route('proyectos')}}" class="btn btn-success btn-lg mt-3">Consultar Proyectos</a>
        </div>
        </div>
    </div>
@endsection