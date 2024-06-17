@extends('layouts.admin')

@section('content')
    @include('fragments.validation-error')
    @include('fragments.session')

    <h2 style="color: green">Crear Proyecto</h2>
    <form action="{{route('proyecto.store')}}" method="POST">
        @include('dashboard.proyecto._form')
    </form>
    
@endsection