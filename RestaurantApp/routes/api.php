<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('cart')->group(function () {
    Route::post('/add',[CartController::class,'add']);
    Route::get('/total',[CartController::class,'getTotal']);
    Route::delete('/clear',[CartController::class,'clear']);
    Route::patch('/update/{id}', [CartController::class,'update']);
    Route::delete('/remove/{id}', [CartController::class,'remove']);   
});



