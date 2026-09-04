<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provedor extends Model
{
    protected $fillable = [
        'nombre',
        'telefono',
        'direccion',
        'email',
        'asociacion'
    ];

    public function compras()
    {
        return $this->hasMany(Compra::class, 'provedor_id');
    }

    public function detallecompra()
    {
        return $this->hasMany(Detallecompra::class, 'provedor_id');
    }
}
