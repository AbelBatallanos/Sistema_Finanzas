<?php 

namespace App\Http\Services\InventarioService;

use App\Models\Inventario;
use App\Models\Stockinventario;

class StockInventarioService {
    
    public function createStockInventario(array $data)
    {
        Stockinventario::create($data);
    }
    public function getStockInventarios()
    {
        return Stockinventario::all();
    }
    public function decrementarCantidad(Stockinventario $stockinventario, $cantidad)
    {
        $stockinventario->cantidad -= $cantidad;
        $stockinventario->save();
        return $stockinventario;
    }
    public function updateStockInventario(Stockinventario $stockinventario, array $data)
    {
        $stockinventario->update($data);
        return $stockinventario;
    }

    public function deleteStockInventario(Stockinventario $stockinventario)
    {
        $stockinventario->delete();
    }
}