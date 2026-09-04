<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetallesListacompra extends Model
{
    protected $fillable = [
        'listacompra_id',
        'producto_id',
        'cantidad',
        'precio_unitario',
        'unidad_id',
        'estado_id'
    ];

    public function listacompra()
    {
        return $this->belongsTo(Listacompra::class, 'listacompra_id');
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }

    public function unidad()
    {
        return $this->belongsTo(Unidad::class, 'unidad_id');
    }

    public function estado(){
        return $this->belongsTo(Estado::class, 'estado_id');
    }
}
