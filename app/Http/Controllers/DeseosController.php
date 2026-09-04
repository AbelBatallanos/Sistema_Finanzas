<?php

namespace App\Http\Controllers;

use App\Models\Deseos;
use Illuminate\Http\Request;

class DeseosController extends Controller
{
    public function index(){
        $deseos = Deseos::where("sucursal_id", auth()->user()->sucursal_id)->get();
        return response()->json(['message' => 'Deseos index', 'deseos' => $deseos]);
    }

    public function store(Request $request){
        $deseos = Deseos::create($request->all());
        return response()->json(['message' => 'Deseos store', 'deseos' => $deseos]);
    }

    public function update(Request $request, Deseos $deseos){
        $deseos->update($request->all());
        return response()->json(['message' => 'Deseos update', 'deseos' => $deseos]);
    }

    public function destroy(Deseos $deseos){
        $deseos->delete();
        return response()->json(['message' => 'Deseos destroy']);
    }
}
