<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    protected $fillable = [
        'nombre',
        'categoria',
        'precio',
        'inventario',
        'imagen',
        'fabricante',
        'vencimiento',
        'registro',
        'lote',
    ];
}
