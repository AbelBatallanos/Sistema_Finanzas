<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function index(){
        $inventarios = Inventario::where("sucursal_id", auth()->user()->sucursal_id)->get();
        return response()->json(['message' => 'Inventario index', 'inventarios' => $inventarios ]);
    }

    public function store(Request $request){
        $inventario = Inventario::create($request->all());
        return response()->json(['message' => 'Inventario store', 'inventario' => $inventario]);
    }

    public function update(Request $request, Inventario $inventario){
        $inventario->update($request->all());
        return response()->json(['message' => 'Inventario update', 'inventario' => $inventario]);
    }

    public function destroy(Inventario $inventario){
        $inventario->delete();
        return response()->json(['message' => 'Inventario destroy']);
    }
}
