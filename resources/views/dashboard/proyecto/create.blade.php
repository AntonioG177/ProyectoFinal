@extends('layouts.admin')

@section('content')
    
    <!--Includes con los fragmentos para validar los datos del formulario-->
    @include('fragments.validation-error')
    @include('fragments.session')

    <!--Muestra el formulario-->
    <div class="container mt-5">
    <h2 style="color: rgb(40, 185, 201)">Crear Proyecto</h2>
    <form action="{{route('proyecto.store')}}" method="POST">
        @include('dashboard.proyecto._form')
    </form>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const subtotalInput = document.getElementById('subtotal');
        const ivaInput = document.getElementById('iva');
        const totalInput = document.getElementById('total');

        const ivaRate = 16; // Tasa del iva actual

        function calculateIVA(subtotal, ivaRate) {
            return subtotal * (ivaRate / 100);
        }

        function calculateTotal(subtotal, iva) {
            return subtotal + iva;
        }

        // Calcula y actualiza el iva y el total si es que tiene algun dato el subtotal
        if (subtotalInput.value) {
            const subtotal = parseFloat(subtotalInput.value) || 0;
            const iva = calculateIVA(subtotal, ivaRate);
            const total = calculateTotal(subtotal, iva);

            ivaInput.value = iva.toFixed(2);
            totalInput.value = total.toFixed(2);
        }

        // Event listener para los cambios en subtotal
        subtotalInput.addEventListener('input', () => {
            const subtotal = parseFloat(subtotalInput.value) || 0;
            const iva = calculateIVA(subtotal, ivaRate);
            const total = calculateTotal(subtotal, iva);

            ivaInput.value = iva.toFixed(2);
            totalInput.value = total.toFixed(2);
        });
    });
    </script>
@endsection