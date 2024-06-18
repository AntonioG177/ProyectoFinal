@extends('layouts.admin')
@section('content')
<br>

<!--Boton de formulario para la creacion de un nuevo proyecto-->
<a href="{{route('proyecto.create')}}" class="btn btn-success">Crear</a><br><br>

<!--Boton de formulario para la edicion del proyecto con id 1 (Cambialo para que se puedan editar los otros)-->
<a href="{{ route('proyecto.edit', 1)}}" class="btn btn-secondary">Editar</a>

<!--Tabla de proyectos creados-->
<table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Categoria</th>
        <th scope="col">Opciones</th>
        </tr>
    </thead>
</table>
@endsection