<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos'; // Tabla asociada

    // Campos permitidos para la asignación masiva
    protected $fillable = [
        'nombre',
        'descripcion',
        'imagen',
        'precio',
    ];
}
