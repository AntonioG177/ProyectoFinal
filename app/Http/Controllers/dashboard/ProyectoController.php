<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProyectoRequest;
use App\Models\Cliente;
use App\Models\Proveedor;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::get();
        $proveedores = Proveedor::get();
        return view('dashboard.proyecto.create', ['proyecto' => new Proyecto(), 'clientes' => $clientes, 'proveedores' => $proveedores]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(ProyectoRequest $request)
    {
        //validar el request
        $validated = $request->validated();
        // Obtener el subtotal del formulario
        $subtotal = $request->input('subtotal');

        // Calcular el IVA y el total
        $ivaRate = 0.16; // 16% IVA
        $iva = $subtotal * $ivaRate;
        $total = $subtotal + $iva;

        // Agregar los valores calculados al array validado
        $validated['iva'] = $iva;
        $validated['total'] = $total;

        Proyecto::create($validated);


        return back()->with('status','Proyecto creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyecto $proyecto)
    {
        $clientes = Cliente::get();
        $proveedores = Proveedor::get();
        return view('dashboard.proyecto.edit', ['proyecto' => $proyecto, 'clientes' => $clientes, 'proveedores' => $proveedores]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProyectoRequest $request, Proyecto $proyecto)
    {
        //validar el request
        $validated = $request->validated();
        // Obtener el subtotal del formulario
        $subtotal = $request->input('subtotal');

        // Calcular el IVA y el total
        $ivaRate = 0.16; // 16% IVA
        $iva = $subtotal * $ivaRate;
        $total = $subtotal + $iva;

        // Agregar los valores calculados al array validado
        $validated['iva'] = $iva;
        $validated['total'] = $total;

        $proyecto->update($validated);

        return back()->with('status', 'Proyecto actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    
}
