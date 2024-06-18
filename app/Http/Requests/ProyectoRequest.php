<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProyectoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required|string|min:3|max:50', //max 50 y min 3 caracteres requerido
            'fecha_inicio_proyecto' => 'required|date|after:yesterday', //verifica que no sea una fecha que ya haya pasado
            'subtotal' => 'required|numeric|min:0.01', // Mas de 0.01 requerido
            'iva' => 'numeric|min:0', //iva tiene que ser mas de 0
            'total' => 'numeric|min:0', //total tiene que ser mas de 0
            'concepto' => 'required|string|min:3|max:20', // Mas de 20 caracteres y min 3 requerido
            'comentarios_adicionales' => 'nullable|string', // No requerido
            'cliente_id' => 'required|exists:clientes,id', //Cliente tiene que ser requerido y que exista en clientes
            'proveedor_id' => 'required|exists:proveedors,id', // Proveedor es requerido y que exista en proveedores
        ];
    }
}
