<?php

use App\Http\Controllers\TerreniController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
Route::get('/terrenis', [TerreniController::class, 'list']); 

Route::get('/terrenis/{id}', [TerreniController::class, 'view']); 
    
Route::post('/terrenis/create', [TerreniController::class, 'create']); 
    
Route::put('/terrenis/edit/{id}', [TerreniController::class, 'edit']); 
    
Route::delete('/terrenis/delete/{id}', [TerreniController::class, 'delete']);
});