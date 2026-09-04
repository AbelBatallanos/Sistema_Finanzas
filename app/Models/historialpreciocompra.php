<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistorialPreciocompra extends Model
{
    protected $fillable = [
        'precio_unitario',
        'moneda',
        'origen',
        'sucursal_id',
        'producto_id'
    ];

    public function sucursal()
    {
        return $this->belongsTo(Sucursal::class, 'sucursal_id');
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }
}
