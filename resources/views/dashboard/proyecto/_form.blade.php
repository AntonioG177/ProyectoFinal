
<!--Formulario para agregar un nuevo proyecto-->
@csrf
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del Proyecto</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe un nombre para el proyecto" value="{{ old('nombre', $proyecto->nombre) }}">
    </div>
    <div class="mb-3">
        <label for="fecha_inicio_proyecto">Fecha</label>
        <input type="date" class="form-control" id="fecha_inicio_proyecto" name="fecha_inicio_proyecto" value="{{ old('fecha_inicio_proyecto', $proyecto->fecha_inicio_proyecto) }}">
    </div>
    <div class="mb-3">
        <label for="subtotal">Subtotal</label>
        <input type="number" class="form-control" id="subtotal" name="subtotal" min="0" step="0.01$" placeholder="0.00" value="{{ old('subtotal', $proyecto->subtotal) }}">
    </div>
    <div class="mb-3">
        <label for="iva" class="form-label">IVA</label>
        <input class="form-control" type="text" id="iva" name="iva" placeholder="calculo IVA" aria-label="iva" disabled value="{{ old('iva', $proyecto->iva ?? 0) }}">
    </div>
    <div class="mb-3">
        <label for="total" class="form-label">Total</label>
        <input class="form-control" type="text" id="total" name="total" placeholder="Suma del iva + el subtotal" aria-label="total" disabled value="{{ old('total', $proyecto->total ?? 0) }}">
    </div>
    <div class="mb-3">
        <label for="concepto" class="form-label">Concepto</label>
        <textarea class="form-control" id="concepto" placeholder="Concepto" name="concepto" rows="1">{{ old('concepto', $proyecto->concepto) }}</textarea>
    </div>
    <div class="mb-3">
        <label for="comentarios_adicionales" class="form-label">Comentarios Adicionales</label>
        <textarea class="form-control" id="comentarios_adicionales" name="comentarios_adicionales" placeholder="Agregar comentario adicional" rows="3">{{ old('comentarios_adicionales', $proyecto->comentarios_adicionales) }}</textarea>
    </div>
    <div class="mb-3">
        <label for="cliente" class="form-label">RFC Cliente</label>
        <select class="form-select" aria-label="cliente" name="cliente_id">
        <option value="">Seleccione{{ old('cliente', $proyecto->cliente) }}</option>
        @foreach ($clientes as $cliente)
        <option value="{{ $cliente->id }}" {{ $cliente->id == old('cliente_id', $proyecto->cliente_id) ? 'selected' : '' }}>{{ $cliente->rfc }}</option>
        @endforeach
        </select>
    </div>    
    <div class="mb-3">
        <label for="proveedor" class="form-label">RFC Proveedor</label>
        <select class="form-select" aria-label="proveedor" name="proveedor_id">
        <option value="">Seleccione {{ old('proveedor', $proyecto->proveedor) }}</option>
        @foreach ($proveedores as $proveedor)
        <option value="{{ $proveedor->id }}" {{ $proveedor->id == old('proveedor_id', $proyecto->proveedor_id) ? 'selected' : '' }}>{{ $proveedor->rfc }}</option>
        @endforeach
        </select>
    </div>  
    <button type="submit" class="btn btn-primary">Guardar</button>