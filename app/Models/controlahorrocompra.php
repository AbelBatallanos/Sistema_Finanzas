<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class controlahorrocompra extends Model
{
    protected $fillable = [
        'porcentaje_eficiencia',
        'diferencia',
        'gasto_real',
        'presupuesto_estimado',
        'compra_id',
        'sucursal_id',
        'factura_id',
        'lista_id'
    ];

    public function compra()
    {
        return $this->belongsTo(compra::class, 'compra_id');
    }

    public function sucursal()
    {
        return $this->belongsTo(sucursal::class, 'sucursal_id');
    }

    public function factura()
    {
        return $this->belongsTo(factura::class, 'factura_id');
    }

    public function lista()
    {
        return $this->belongsTo(listacompra::class, 'lista_id');
    }
}
