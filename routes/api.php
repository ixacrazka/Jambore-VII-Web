<?php

use App\Http\Controllers\MasterApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/scan-barcode', [MasterApiController::class, 'scan'])->name('scan');

Route::post('/tambahScan', [MasterApiController::class, 'tambahScan'])->name('scan.tambah');
