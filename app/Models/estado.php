<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $fillable = ["nombre"];

    public function detalleslistacompra()
    {
        return $this->hasMany(detalleslistacompra::class, 'estado_id');
    }

    public function detallecompra()
    {
        return $this->hasMany(detallecompra::class, 'estado_id');
    }

    public function deseos()
    {
        return $this->hasMany(deseos::class, 'estado_id');
    }
}
