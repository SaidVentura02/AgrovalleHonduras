<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    protected $fillable = [
        'sku',
        'nombre',
        'categoria',
        'precio',
        'inventario',
        'imagen',
        'fabricante',
        'fecha_vencimiento',
        'fecha_registro',
        'lote',
    ];
}
