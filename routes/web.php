<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

//Kelompok_1 
Route::prefix('/category')->group(function(){
    // nampilin index
    Route::get('/', [CategoryController::class, 'index']);
    //nampilin create
    Route::get('/create', [CategoryController::class, 'create']);
    Route::post('/',[CategoryController::class, 'store']);
    // nampilin edit
    Route::get('/edit/ {id}',[CategoryController::class, 'edit']);
    Route::patch('/{id}', [CategoryController::class, 'update']);
    //nampilin delete 
    Route::delete('/{id}', [CategoryController::class, 'destroy']); 
});

