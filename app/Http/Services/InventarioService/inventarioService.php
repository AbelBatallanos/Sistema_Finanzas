<?php
namespace App\Http\Services\InventarioService;
use App\Models\Inventario;
use App\Models\Stockinventario;

class InventarioService
{
    public function getInventarios()
    {
        return Inventario::all();
    }

    public function createInventario(array $data )
    {
        Inventario::create($data);
        Stockinventario::create();
        
    }

    public function updateInventario(Inventario $inventario, array $data)
    {
        $inventario->update($data);
        return $inventario;
    }

    public function deleteInventario(Inventario $inventario)
    {
        $inventario->delete();
    }
}