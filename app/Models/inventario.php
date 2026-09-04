<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $fillable = [
        'nombre',
        'es_principal',
        'sucursal_id'
    ];

    public function sucursal()
    {
        return $this->belongsTo(Sucursal::class, 'sucursal_id');
    }
}
