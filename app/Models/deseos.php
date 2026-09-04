<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class deseos extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
        'usuario_id',
        'producto_id',
        'sucursal_id',
        'estado_id'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }

    public function producto()
    {
        return $this->belongsTo(producto::class, 'producto_id');
    }

    public function sucursal()
    {
        return $this->belongsTo(sucursal::class, 'sucursal_id');
    }

    public function estado()
    {
        return $this->belongsTo(estado::class, 'estado_id');
    }
}
