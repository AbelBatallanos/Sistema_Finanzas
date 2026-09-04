<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/api', function () {
    return response()->json(['message' => 'API is working']);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});