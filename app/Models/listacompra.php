<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListaCompra extends Model
{
    protected $fillable = [
        'titulo',
        'presupuesto',
        'nombre',
        'descripcion',
        'sucursal_id',
        'creador_id',
        'estado_id'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'creador_id');
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
