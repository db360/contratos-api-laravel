<?php

use App\Http\Controllers\ContratoMenorController;
use App\Http\Controllers\LicitacionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/licitaciones', [LicitacionController::class, 'index']);
Route::get('/contratos', [ContratoMenorController::class, 'index']);