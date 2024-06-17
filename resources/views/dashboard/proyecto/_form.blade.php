@csrf
<div class="container mt-5">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del Proyecto</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe un nombre para el proyecto">
    </div>
    <div class="mb-3">
        <label for="fecha_inicio_proyecto">Fecha</label>
        <input type="date" class="form-control" id="fecha_inicio_proyecto" name="fecha_inicio_proyecto">
    </div>
    <div class="mb-3">
        <label for="subtotal">Subtotal</label>
        <input type="number" class="form-control" id="subtotal" name="subtotal" min="0" step="0.01" placeholder="0.00">
    </div>
    <div class="mb-3">
        <label for="iva" class="form-label">IVA</label>
        <input class="form-control" type="text" id="iva" name="iva" placeholder="calculo IVA" aria-label="iva" disabled>
    </div>
    <div class="mb-3">
        <label for="total" class="form-label">Total</label>
        <input class="form-control" type="text" id="total" name="total" placeholder="Suma del iva + el subtotal" aria-label="total" disabled>
    </div>
    <div class="mb-3">
        <label for="concepto" class="form-label">Concepto</label>
        <textarea class="form-control" id="concepto" placeholder="Concepto" name="concepto" rows="1"></textarea>
    </div>
    <div class="mb-3">
        <label for="comentarios_adicionales" class="form-label">Comentarios Adicionales</label>
        <textarea class="form-control" id="comentarios_adicionales" name="comentarios_adicionales" placeholder="Agregar comentario adicional" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="cliente" class="form-label">Cliente</label>
        <select class="form-select" aria-label="cliente" name="cliente_id">
        <option value="">Seleccione</option>
        </select>
    </div>    
    <div class="mb-3">
        <label for="proveedor" class="form-label">Proveedor</label>
        <select class="form-select" aria-label="proveedor" name="proveedor_id">
        <option value="">Seleccione</option>
        </select>
    </div>  
    <button type="submit" class="btn btn-primary">Guardar</button>