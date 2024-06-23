@extends('layouts.admin')

@section('content')
@include('fragments.session')
<br>

<!--Boton de formulario para la creacion de un nuevo proyecto-->
<a href="{{ route('proyecto.create') }}" class="btn btn-success">Nuevo Proyecto</a><br>

<!--Tabla de proyectos creados-->
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha de Inicio</th>
            <th scope="col">Subtotal</th>
            <th scope="col">IVA</th>
            <th scope="col">Total</th>
            <th scope="col">Concepto</th>
            <th scope="col">Comentarios Adicionales</th>
            <th scope="col">Cliente</th>
            <th scope="col">Proveedor</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($proyectos as $proyecto)
        <tr>
            <td>{{ $proyecto->id }}</td>
            <td>{{ $proyecto->nombre }}</td>
            <td>{{ $proyecto->fecha_inicio_proyecto }}</td>
            <td>{{ $proyecto->subtotal }}</td>
            <td>{{ $proyecto->iva }}</td>
            <td>{{ $proyecto->total }}</td>
            <td>{{ $proyecto->concepto }}</td>
            <td>{{ $proyecto->comentarios_adicionales }}</td>
            <td>{{ $proyecto->cliente_razon_social }}</td>
            <td>{{ $proyecto->proveedor_razon_social }}</td>
            <td>
                <table>
                    <tr>
                        <td>
                            <a href="{{ route('proyecto.edit', $proyecto->id) }}" class="btn btn-secondary">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('proyecto.destroy', $proyecto->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $proyectos->links() }}
@endsection