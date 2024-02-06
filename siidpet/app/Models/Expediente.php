<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    use HasFactory;

    protected $table = 'p_delito';

    protected $fillable = [
        'nombre',
        // ... otras propiedades ...
    ];
    
}
