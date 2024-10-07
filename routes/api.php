<?php

use App\Http\Controllers\Api\AbsensiController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\DepartemenController;
use App\Http\Controllers\Api\GajiController;
use App\Http\Controllers\Api\JabatanController;
use App\Http\Controllers\Api\KaryawanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    })->middleware('auth:sanctum');


    Route::apiResource('/karyawans', KaryawanController::class);
    Route::apiResource('/departemens', DepartemenController::class);
    Route::apiResource('/jabatans', JabatanController::class);
    Route::apiResource('/absensis', AbsensiController::class);
    Route::apiResource('/gajis', GajiController::class);
    Route::prefix('auth')->group(function () {
        Route::post('/login', [AuthController::class, 'login']);
        Route::post('/register', [AuthController::class, 'register']);
        Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
    });

    Route::middleware('auth:sanctum')->group(function () {
        Route::apiResource('/karyawans', KaryawanController::class)->only(['store', 'update', 'destroy']);
        Route::apiResource('/departemens', DepartemenController::class)->only(['store', 'update', 'destroy']);
        Route::apiResource('/jabatans', JabatanController::class)->only(['store', 'update', 'destroy']);
        Route::apiResource('/absensis', AbsensiController::class)->only(['store', 'update', 'destroy']);
        Route::apiResource('/gajis', GajiController::class)->only(['store', 'update', 'destroy']);
    });
});
