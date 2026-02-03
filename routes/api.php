<?php

use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\DivisionController;
use App\Models\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Route::get('/customer',[CustomerController::class,'index']);
Route::apiResource('/customer',CustomerController::class);

Route::apiResource('/division',DivisionController::class);

Route::apiResource('/district',DistrictController::class);
