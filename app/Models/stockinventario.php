<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stockinventario extends Model
{
    protected $fillable = [
        'cantidad',
        'inventario_id',
        'producto_id',
        'estado_id',
        'cantidad_actual',
        'cantidad_min',
        'cantidad_deseada',
        'ubicacion',
    ];

    public function inventario()
    {
        return $this->belongsTo(Inventario::class, 'inventario_id');
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }
}
