<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $fillable = [
        'monto_total',
        'fecha_compra',
        'metodo_pago',
        'comprador_id',
        'lista_compra_id',
        'provedor_id',
        'sucursal_id',
        'estado_id'
    ];

    public function comprador()
    {
        return $this->belongsTo(User::class, 'comprador_id');
    }

    public function listaCompra()
    {
        return $this->belongsTo(ListaCompra::class, 'lista_compra_id');
    }

    public function provedor()
    {
        return $this->belongsTo(Provedor::class, 'provedor_id');
    }

    public function sucursal()
    {
        return $this->belongsTo(Sucursal::class, 'sucursal_id');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'estado_id');
    }
}
