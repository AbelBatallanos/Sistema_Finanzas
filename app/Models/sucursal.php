<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'email'
    ];

    public function compras()
    {
        return $this->hasMany(Compra::class, 'sucursal_id');
    }

    public function consumos()
    {
        return $this->hasMany(Consumo::class, 'sucursal_id');
    }

    public function historialPrecios()
    {
        return $this->hasMany(HistorialPreciocompra::class, 'sucursal_id');
    }
}
