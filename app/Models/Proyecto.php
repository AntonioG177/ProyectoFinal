<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    protected $table = 'proyecto'; // Especifica el nombre de la tabla

    protected $fillable = ['nombre', 'fecha_inicio_proyecto','subtotal','iva', 'total', 'concepto', 'comentarios_adicionales', 'cliente_id', 'proveedor_id'];
}
