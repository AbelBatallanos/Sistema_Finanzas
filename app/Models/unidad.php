<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    protected $fillable = [
        'nombre',
        'abreviatura'
    ];

    public function productos()
    {
        return $this->hasMany(Producto::class, 'unidad_id');
    }

    public function detalleslistacompras()
    {
        return $this->hasMany(DetallesListacompra::class, 'unidad_id');
    }
}
