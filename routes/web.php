<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

//Kelompok_1 
Route::prefix('/category')->group(function () {
    // Tampilkan index
    Route::get('/', [CategoryController::class, 'index']);

    // Tampilkan form create dan proses store
    Route::get('/create', [CategoryController::class, 'create']);
    Route::post('/', [CategoryController::class, 'store']);

    // Tampilkan form edit dan proses update
    Route::get('/{id}/edit', [CategoryController::class, 'edit']); // Perbaikan posisi parameter
    Route::patch('/{id}', [CategoryController::class, 'update']);

    // Proses delete
    Route::delete('/{id}', [CategoryController::class, 'destroy']);
});


