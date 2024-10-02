<?php

use App\Http\Controllers\Api\DepartemenController;
use App\Http\Controllers\Api\JabatanController;
use App\Http\Controllers\Api\KaryawanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('/karyawans', KaryawanController::class);
Route::apiResource('/departemens', DepartemenController::class);
Route::apiResource('/jabatans', JabatanController::class);
