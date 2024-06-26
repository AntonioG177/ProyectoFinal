<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $table = 'proveedors'; // Especifica el nombre de la tabla

    protected $fillable = [
        'razon_social',
        'tipo',
        'rfc',
        'domicilio',
        'email',
        'telefono',
    ];
}
