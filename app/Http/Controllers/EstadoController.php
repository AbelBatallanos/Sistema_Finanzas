<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateEstado;
use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    public function index(){
        $estados = Estado::all();
        return response()->json($estados);
    }

    public function store(Request $request){
        $estado = Estado::create($request->all());
        return response()->json($estado, 201);
    }

    public function update(UpdateEstado $request, Estado $estado){
        $estado->update($request->all());
        return response()->json($estado);

    }

    public function destroy(Estado $estado){
        $estado->delete();
        return response()->json(null, 204);
    }
}
