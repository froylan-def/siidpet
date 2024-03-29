<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Defensor extends Model
{
    use HasFactory;

    protected $table = 'defensor';

    protected $fillable = [
        'nombres',
        'apellido_paterno',
        'apellido_materno',
        'telefono',
        'id_municipio',
        'sexo',
        // ... otras propiedades ...
    ];
}
