<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class factura extends Model
{
    protected $fillable = [
        'compra_id',
        'sucursal_id',
        'numero_comprobante',
        'tipo_comprobante',
        'monto_total',
        'monto_impuesto',
        'url_digitalizacion'
    ];

    public function compra()
    {
        return $this->belongsTo(compra::class, 'compra_id');
    }

    public function sucursal()
    {
        return $this->belongsTo(sucursal::class, 'sucursal_id');
    }
}
