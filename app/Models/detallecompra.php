<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class detallecompra extends Model
{
    protected $fillable = [
        'compra_id',
        'producto_id',
        'cantidad',
        'precio_unitario',
        'unidad_id',
        'estado_id'
    ];

    public function compra()
    {
        return $this->belongsTo(compra::class, 'compra_id');
    }

    public function producto()
    {
        return $this->belongsTo(producto::class, 'producto_id');
    }

    public function unidad()
    {
        return $this->belongsTo(unidad::class, 'unidad_id');
    }

    public function estado(){
        return $this->belongsTo(estado::class, 'estado_id');
    }
}
