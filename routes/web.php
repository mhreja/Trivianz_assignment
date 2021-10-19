<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShipmentController;


Route::get('/', [ShipmentController::class, 'index'])->name('home');
Route::get('/import', [ShipmentController::class, 'import'])->name('import');
Route::get('/import-from-api', [ShipmentController::class, 'importStore'])->name('import.store');

// Route::get('/get/lines/{id}', [ShipmentController::class, 'getLines']);
// Route::get('/get/address/{id}', [ShipmentController::class, 'getAddress']);

