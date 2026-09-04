<?php

namespace App\Http\Controllers;

use App\Models\Stockinventario;
use Illuminate\Http\Request;

class StockinventarioController extends Controller
{
    public function store(){

    }

    public function update(Request $request, Stockinventario $stockinventario){
        $stockinventario->update($request->all());
        return response()->json(['message' => 'Stockinventario update', 'stockinventario' => $stockinventario]);

    }
}
