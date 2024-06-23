<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes'; // Especifica el nombre de la tabla

    protected $fillable = [
        'razon_social',
        'tipo',
        'rfc',
        'domicilio_fiscal',
        'email',
        'telefono',
    ];
}
