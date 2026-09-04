<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consumo extends Model
{
    protected $fillable = [
        'cantidad',
        'fecha_consumo',
        'producto_id',
        'sucursal_id',
        'usuario_id'
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }

    public function sucursal()
    {
        return $this->belongsTo(Sucursal::class, 'sucursal_id');
    }

    public function usuario(){
        return $this->belongsTo(User::class, 'usuario_id');
    }
    public function getFechaConsumoAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d-m-Y');
    }


}
